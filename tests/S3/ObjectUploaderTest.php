<?php
namespace Aws\Test\S3;

use Aws\CommandInterface;
use Aws\Middleware;
use Aws\Result;
use Aws\S3\ObjectUploader;
use Aws\Test\UsesServiceTrait;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\FnStream;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class ObjectUploaderTest extends TestCase
{
    use UsesServiceTrait;

    const MB = 1048576;

    /**
     * @dataProvider getUploadTestCases
     */
    public function testDoesCorrectOperation(
        StreamInterface $body,
        array $mockedResults,
        array $options
    ) {
        /** @var \Aws\S3\S3Client $client */
        $client = $this->getTestClient('S3');
        $this->addMockResults($client, $mockedResults);
        $result = (new ObjectUploader($client, 'bucket', 'key', $body, 'private', $options))
            ->upload();
        $this->assertSame('https://bucket.s3.amazonaws.com/key', $result['ObjectURL']);
        $this->assertTrue($this->mockQueueEmpty());
    }

    /**
     * @dataProvider getUploadTestCasesWithPathStyle
     */
    public function testDoesCorrectOperationWithPathStyle(
        StreamInterface $body,
        array $mockedResults,
        array $options
    ) {
        /** @var \Aws\S3\S3Client $client */
        $client = $this->getTestClient('S3', [
            'use_path_style_endpoint' => true
        ]);
        $this->addMockResults($client, $mockedResults);
        $result = (new ObjectUploader($client, 'bucket', 'key', $body, 'private', $options))
            ->upload();
        $this->assertSame('https://s3.amazonaws.com/bucket/key', $result['ObjectURL']);
        $this->assertTrue($this->mockQueueEmpty());
    }

    /**
     * @dataProvider getUploadTestCases
     */
    public function testDoesCorrectOperationWithAccessPointArn(
        StreamInterface $body,
        array $mockedResults,
        array $options
    ) {
        /** @var \Aws\S3\S3Client $client */
        $client = $this->getTestClient('S3', [
            'region' => 'us-west-2'
        ]);
        $client->getHandlerList()->appendSign(Middleware::tap(
            function(CommandInterface $cmd, RequestInterface $req) {
                $this->assertSame(
                    'mydest-123456789012.s3-accesspoint.us-west-2.amazonaws.com',
                    $req->getUri()->getHost()
                );
                $this->assertSame(
                    '/key',
                    $req->getUri()->getPath()
                );
            }
        ));
        $this->addMockResults($client, $mockedResults);
        $result = (new ObjectUploader(
                $client,
                'arn:aws:s3:us-west-2:123456789012:accesspoint:mydest',
                'key',
                $body,
                'private',
                $options
            ))->upload();
        $this->assertTrue($this->mockQueueEmpty());
    }

    /**
     * @dataProvider getUploadTestCases
     */
    public function testDoesCorrectOperationAsynchronously(
        StreamInterface $body,
        array $mockedResults,
        array $options
    ) {
        /** @var \Aws\S3\S3Client $client */
        $client = $this->getTestClient('S3');
        $this->addMockResults($client, $mockedResults);
        $promise = (new ObjectUploader($client, 'bucket', 'key', $body, 'private', $options))
            ->promise();
        $this->assertFalse($this->mockQueueEmpty());
        $result = $promise->wait();
        $this->assertSame('https://bucket.s3.amazonaws.com/key', $result['ObjectURL']);
    }

    /**
     * @dataProvider getUploadTestCasesWithPathStyle
     */
    public function testDoesCorrectOperationAsynchronouslyWithPathStyle(
        StreamInterface $body,
        array $mockedResults,
        array $options
    ) {
        /** @var \Aws\S3\S3Client $client */
        $client = $this->getTestClient('S3', [
            'use_path_style_endpoint' => true
        ]);
        $this->addMockResults($client, $mockedResults);
        $promise = (new ObjectUploader($client, 'bucket', 'key', $body, 'private', $options))
            ->promise();
        $this->assertFalse($this->mockQueueEmpty());
        $result = $promise->wait();
        $this->assertSame('https://s3.amazonaws.com/bucket/key', $result['ObjectURL']);
    }

    public function getUploadTestCases()
    {
        $putObject = new Result();
        $initiate = new Result(['UploadId' => 'foo']);
        $putPart = new Result(['ETag' => 'bar']);
        $complete = new Result(['Location' => 'https://bucket.s3.amazonaws.com/key']);

        return [
            [
                // 3 MB, known-size stream (put)
                $this->generateStream(1024 * 1024 * 3),
                [$putObject],
                ['before_upload' => function () {}]
            ],
            [
                // 3 MB, unknown-size stream (put)
                $this->generateStream(1024 * 1024 * 3, false),
                [$putObject],
                []
            ],
            [
                // 6 MB, known-size stream (put)
                $this->generateStream(1024 * 1024 * 6),
                [$putObject],
                []
            ],
            [
                // 6 MB, known-size stream, above threshold (mup)
                $this->generateStream(1024 * 1024 * 6),
                [$initiate, $putPart, $putPart, $complete],
                ['mup_threshold' => 1024 * 1024 * 4]
            ],
            [
                // 6 MB, unknown-size stream (mup)
                $this->generateStream(1024 * 1024 * 6, false),
                [$initiate, $putPart, $putPart, $complete],
                []
            ],
            [
                // 6 MB, unknown-size, non-seekable stream (mup)
                $this->generateStream(1024 * 1024 * 6, false, false),
                [$initiate, $putPart, $putPart, $complete],
                []
            ]
        ];
    }

    public function getUploadTestCasesWithPathStyle()
    {
        $putObject = new Result();
        $initiate = new Result(['UploadId' => 'foo']);
        $putPart = new Result(['ETag' => 'bar']);
        $complete = new Result(['Location' => 'https://s3.amazonaws.com/bucket/key']);

        return [
            [
                // 3 MB, known-size stream (put)
                $this->generateStream(1024 * 1024 * 3),
                [$putObject],
                ['before_upload' => function () {}]
            ],
            [
                // 3 MB, unknown-size stream (put)
                $this->generateStream(1024 * 1024 * 3, false),
                [$putObject],
                []
            ],
            [
                // 6 MB, known-size stream (put)
                $this->generateStream(1024 * 1024 * 6),
                [$putObject],
                []
            ],
            [
                // 6 MB, known-size stream, above threshold (mup)
                $this->generateStream(1024 * 1024 * 6),
                [$initiate, $putPart, $putPart, $complete],
                ['mup_threshold' => 1024 * 1024 * 4]
            ],
            [
                // 6 MB, unknown-size stream (mup)
                $this->generateStream(1024 * 1024 * 6, false),
                [$initiate, $putPart, $putPart, $complete],
                []
            ],
            [
                // 6 MB, unknown-size, non-seekable stream (mup)
                $this->generateStream(1024 * 1024 * 6, false, false),
                [$initiate, $putPart, $putPart, $complete],
                []
            ]
        ];
    }

    private function generateStream($size, $sizeKnown = true, $seekable = true)
    {
        return FnStream::decorate(Psr7\Utils::streamFor(str_repeat('.', $size)), [
            'getSize' => function () use ($sizeKnown, $size) {
                return $sizeKnown ? $size : null;
            },
            'isSeekable' => function () use ($seekable) {
                return (bool) $seekable;
            }
        ]);
    }

    public function testS3ObjectUploaderPutObjectParams()
    {
        /** @var \Aws\S3\S3Client $client */
        $client = $this->getTestClient('s3');
        $client->getHandlerList()->appendSign(
            Middleware::tap(function ($cmd, $req) {
                $name = $cmd->getName();
                if ($name === 'UploadPart') {
                    $this->assertTrue(
                        $req->hasHeader('Content-MD5')
                    );
                }
            })
        );
        $uploadOptions = [
            'params'          => ['RequestPayer' => 'test'],
            'before_upload'   => function($command) {
                $this->assertSame('test', $command['RequestPayer']);
            },
        ];
        $url = 'https://foo.s3.amazonaws.com/bar';
        $data = str_repeat('.', 1 * self::MB);
        $source = Psr7\Utils::streamFor($data);

        $this->addMockResults($client, [
            new Result(['UploadId' => 'baz']),
            new Result(['ETag' => 'A']),
            new Result(['ETag' => 'B']),
            new Result(['ETag' => 'C']),
            new Result(['Location' => $url])
        ]);

        $uploader = new ObjectUploader(
            $client,
            'foo',
            'bar',
            $source,
            'private',
            $uploadOptions);
        $result = $uploader->upload();

        $this->assertSame($url, $result['ObjectURL']);
    }

    public function testS3ObjectUploaderMultipartParams()
    {
        /** @var \Aws\S3\S3Client $client */
        $client = $this->getTestClient('s3');
        $uploadOptions = [
            'mup_threshold'   => self::MB * 4,
            'params'          => ['RequestPayer' => 'test'],
            'before_initiate' => function($command) {
                $this->assertSame('test', $command['RequestPayer']);
            },
            'before_upload'   => function($command) {
                $this->assertSame('test', $command['RequestPayer']);
            },
            'before_complete' => function($command) {
                $this->assertSame('test', $command['RequestPayer']);
            }
        ];
        $url = 'https://foo.s3.amazonaws.com/bar';
        $data = str_repeat('.', 12 * self::MB);
        $source = Psr7\Utils::streamFor($data);

        $this->addMockResults($client, [
            new Result(['UploadId' => 'baz']),
            new Result(['ETag' => 'A']),
            new Result(['ETag' => 'B']),
            new Result(['ETag' => 'C']),
            new Result(['Location' => $url])
        ]);

        $uploader = new ObjectUploader(
            $client,
            'foo',
            'bar',
            $source,
            'private',
            $uploadOptions);
        $result = $uploader->upload();

        $this->assertSame($url, $result['ObjectURL']);
    }

    /**
     * @param $checksumAlgorithm
     * @return void
     *
     * @dataProvider flexibleChecksumsProvider
     */
    public function testAddsFlexibleChecksums($checksumAlgorithm, $value)
    {
        if ($checksumAlgorithm === 'crc32c'
            && !extension_loaded('awscrt')
        ) {
            $this->markTestSkipped();
        }

        $client = $this->getTestClient('S3');
        $handlerList = $client->getHandlerList();
        $handlerList->appendBuild(Middleware::tap(
            function ($cmd, $req) use ($checksumAlgorithm, $value) {
                $headerName = 'x-amz-checksum-' . $checksumAlgorithm;
                $this->assertTrue($req->hasHeader($headerName));
                $this->assertEquals($value, $req->getHeaderLine($headerName));
            })
        );
        $this->addMockResults($client, [new Result()]);
        $result = (new ObjectUploader(
            $client,
            'bucket',
            'key',
            $this->generateStream(1024 * 1024 * 1),
            'private',
            ['params' => ['ChecksumAlgorithm' => $checksumAlgorithm]]
        ))->upload();
    }

    public function flexibleChecksumsProvider() {
        return [
            ['sha1', 'VfWih+7phcE4uG3HQZCHKfpUwFs='],
            ['sha256', 'FT+vHyoAcJfTMSC77mlEpBy4vnZDwSIva8a8aewxaI8='],
            ['crc32c', 'd8twAA=='],
            ['crc32', '9p4rcQ==']
        ];
    }

    public function testAddContentMd5EmitsDeprecationNotice()
    {
        $this->expectDeprecation();
        $this->expectExceptionMessage('S3 no longer supports MD5 checksums.');
        $client = $this->getTestClient('S3');
        $this->addMockResults($client, [new Result()]);
        $result = (new ObjectUploader(
            $client,
            'bucket',
            'key',
            $this->generateStream(1024 * 1024 * 1),
            'private',
            ['add_content_md5' => true]
        ))->upload();
    }
}
