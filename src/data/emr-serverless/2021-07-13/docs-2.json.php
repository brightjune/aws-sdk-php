<?php
// This file was auto-generated from sdk-root/src/data/emr-serverless/2021-07-13/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Amazon EMR Serverless is a new deployment option for Amazon EMR. Amazon EMR Serverless provides a serverless runtime environment that simplifies running analytics applications using the latest open source frameworks such as Apache Spark and Apache Hive. With Amazon EMR Serverless, you don’t have to configure, optimize, secure, or operate clusters to run applications with these frameworks.</p> <p>The API reference to Amazon EMR Serverless is <code>emr-serverless</code>. The <code>emr-serverless</code> prefix is used in the following scenarios: </p> <ul> <li> <p>It is the prefix in the CLI commands for Amazon EMR Serverless. For example, <code>aws emr-serverless start-job-run</code>.</p> </li> <li> <p>It is the prefix before IAM policy actions for Amazon EMR Serverless. For example, <code>"Action": ["emr-serverless:StartJobRun"]</code>. For more information, see <a href="https://docs.aws.amazon.com/emr/latest/EMR-Serverless-UserGuide/security_iam_service-with-iam.html#security_iam_service-with-iam-id-based-policies-actions">Policy actions for Amazon EMR Serverless</a>.</p> </li> <li> <p>It is the prefix used in Amazon EMR Serverless service endpoints. For example, <code>emr-serverless.us-east-2.amazonaws.com</code>.</p> </li> </ul>', 'operations' => [ 'CancelJobRun' => '<p>Cancels a job run.</p>', 'CreateApplication' => '<p>Creates an application.</p>', 'DeleteApplication' => '<p>Deletes an application. An application has to be in a stopped or created state in order to be deleted.</p>', 'GetApplication' => '<p>Displays detailed information about a specified application.</p>', 'GetDashboardForJobRun' => '<p>Creates and returns a URL that you can use to access the application UIs for a job run.</p> <p>For jobs in a running state, the application UI is a live user interface such as the Spark or Tez web UI. For completed jobs, the application UI is a persistent application user interface such as the Spark History Server or persistent Tez UI.</p> <note> <p>The URL is valid for one hour after you generate it. To access the application UI after that hour elapses, you must invoke the API again to generate a new URL.</p> </note>', 'GetJobRun' => '<p>Displays detailed information about a job run.</p>', 'ListApplications' => '<p>Lists applications based on a set of parameters.</p>', 'ListJobRuns' => '<p>Lists job runs based on a set of parameters.</p>', 'ListTagsForResource' => '<p>Lists the tags assigned to the resources.</p>', 'StartApplication' => '<p>Starts a specified application and initializes initial capacity if configured.</p>', 'StartJobRun' => '<p>Starts a job run.</p>', 'StopApplication' => '<p>Stops a specified application and releases initial capacity if configured. All scheduled and running jobs must be completed or cancelled before stopping an application.</p>', 'TagResource' => '<p>Assigns tags to resources. A tag is a label that you assign to an Amazon Web Services resource. Each tag consists of a key and an optional value, both of which you define. Tags enable you to categorize your Amazon Web Services resources by attributes such as purpose, owner, or environment. When you have many resources of the same type, you can quickly identify a specific resource based on the tags you\'ve assigned to it. </p>', 'UntagResource' => '<p>Removes tags from resources.</p>', 'UpdateApplication' => '<p>Updates a specified application. An application has to be in a stopped or created state in order to be updated.</p>', ], 'shapes' => [ 'Application' => [ 'base' => '<p>Information about an application. Amazon EMR Serverless uses applications to run jobs.</p>', 'refs' => [ 'GetApplicationResponse$application' => '<p>The output displays information about the specified application.</p>', 'UpdateApplicationResponse$application' => '<p>Information about the updated application.</p>', ], ], 'ApplicationArn' => [ 'base' => NULL, 'refs' => [ 'Application$arn' => '<p>The ARN of the application.</p>', 'ApplicationSummary$arn' => '<p>The ARN of the application.</p>', 'CreateApplicationResponse$arn' => '<p>The output contains the ARN of the application.</p>', ], ], 'ApplicationId' => [ 'base' => NULL, 'refs' => [ 'Application$applicationId' => '<p>The ID of the application.</p>', 'ApplicationSummary$id' => '<p>The ID of the application.</p>', 'CancelJobRunRequest$applicationId' => '<p>The ID of the application on which the job run will be canceled.</p>', 'CancelJobRunResponse$applicationId' => '<p>The output contains the application ID on which the job run is cancelled.</p>', 'CreateApplicationResponse$applicationId' => '<p>The output contains the application ID.</p>', 'DeleteApplicationRequest$applicationId' => '<p>The ID of the application that will be deleted.</p>', 'GetApplicationRequest$applicationId' => '<p>The ID of the application that will be described.</p>', 'GetDashboardForJobRunRequest$applicationId' => '<p>The ID of the application.</p>', 'GetJobRunRequest$applicationId' => '<p>The ID of the application on which the job run is submitted.</p>', 'JobRun$applicationId' => '<p>The ID of the application the job is running on.</p>', 'JobRunSummary$applicationId' => '<p>The ID of the application the job is running on.</p>', 'ListJobRunsRequest$applicationId' => '<p>The ID of the application for which to list the job run.</p>', 'StartApplicationRequest$applicationId' => '<p>The ID of the application to start.</p>', 'StartJobRunRequest$applicationId' => '<p>The ID of the application on which to run the job.</p>', 'StartJobRunResponse$applicationId' => '<p>This output displays the application ID on which the job run was submitted.</p>', 'StopApplicationRequest$applicationId' => '<p>The ID of the application to stop.</p>', 'UpdateApplicationRequest$applicationId' => '<p>The ID of the application to update.</p>', ], ], 'ApplicationList' => [ 'base' => NULL, 'refs' => [ 'ListApplicationsResponse$applications' => '<p>The output lists the specified applications.</p>', ], ], 'ApplicationName' => [ 'base' => NULL, 'refs' => [ 'Application$name' => '<p>The name of the application.</p>', 'ApplicationSummary$name' => '<p>The name of the application.</p>', 'CreateApplicationRequest$name' => '<p>The name of the application.</p>', 'CreateApplicationResponse$name' => '<p>The output contains the name of the application.</p>', ], ], 'ApplicationState' => [ 'base' => NULL, 'refs' => [ 'Application$state' => '<p>The state of the application.</p>', 'ApplicationStateSet$member' => NULL, 'ApplicationSummary$state' => '<p>The state of the application.</p>', ], ], 'ApplicationStateSet' => [ 'base' => NULL, 'refs' => [ 'ListApplicationsRequest$states' => '<p>An optional filter for application states. Note that if this filter contains multiple states, the resulting list will be grouped by the state.</p>', ], ], 'ApplicationSummary' => [ 'base' => '<p>The summary of attributes associated with an application.</p>', 'refs' => [ 'ApplicationList$member' => NULL, ], ], 'Architecture' => [ 'base' => NULL, 'refs' => [ 'Application$architecture' => '<p>The CPU architecture of an application.</p>', 'ApplicationSummary$architecture' => '<p>The CPU architecture of an application.</p>', 'CreateApplicationRequest$architecture' => '<p>The CPU architecture of an application.</p>', 'UpdateApplicationRequest$architecture' => '<p>The CPU architecture of an application.</p>', ], ], 'AutoStartConfig' => [ 'base' => '<p>The configuration for an application to automatically start on job submission.</p>', 'refs' => [ 'Application$autoStartConfiguration' => '<p>The configuration for an application to automatically start on job submission.</p>', 'CreateApplicationRequest$autoStartConfiguration' => '<p>The configuration for an application to automatically start on job submission.</p>', 'UpdateApplicationRequest$autoStartConfiguration' => '<p>The configuration for an application to automatically start on job submission.</p>', ], ], 'AutoStopConfig' => [ 'base' => '<p>The configuration for an application to automatically stop after a certain amount of time being idle.</p>', 'refs' => [ 'Application$autoStopConfiguration' => '<p>The configuration for an application to automatically stop after a certain amount of time being idle.</p>', 'CreateApplicationRequest$autoStopConfiguration' => '<p>The configuration for an application to automatically stop after a certain amount of time being idle.</p>', 'UpdateApplicationRequest$autoStopConfiguration' => '<p>The configuration for an application to automatically stop after a certain amount of time being idle.</p>', ], ], 'AutoStopConfigIdleTimeoutMinutesInteger' => [ 'base' => NULL, 'refs' => [ 'AutoStopConfig$idleTimeoutMinutes' => '<p>The amount of idle time in minutes after which your application will automatically stop. Defaults to 15 minutes.</p>', ], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'AutoStartConfig$enabled' => '<p>Enables the application to automatically start on job submission. Defaults to true.</p>', 'AutoStopConfig$enabled' => '<p>Enables the application to automatically stop after a certain amount of time being idle. Defaults to true.</p>', 'CloudWatchLoggingConfiguration$enabled' => '<p>Enables CloudWatch logging.</p>', 'ManagedPersistenceMonitoringConfiguration$enabled' => '<p>Enables managed logging and defaults to true. If set to false, managed logging will be turned off.</p>', ], ], 'CancelJobRunRequest' => [ 'base' => NULL, 'refs' => [], ], 'CancelJobRunResponse' => [ 'base' => NULL, 'refs' => [], ], 'ClientToken' => [ 'base' => NULL, 'refs' => [ 'CreateApplicationRequest$clientToken' => '<p>The client idempotency token of the application to create. Its value must be unique for each request.</p>', 'StartJobRunRequest$clientToken' => '<p>The client idempotency token of the job run to start. Its value must be unique for each request.</p>', 'UpdateApplicationRequest$clientToken' => '<p>The client idempotency token of the application to update. Its value must be unique for each request.</p>', ], ], 'CloudWatchLoggingConfiguration' => [ 'base' => '<p>The Amazon CloudWatch configuration for monitoring logs. You can configure your jobs to send log information to CloudWatch.</p>', 'refs' => [ 'MonitoringConfiguration$cloudWatchLoggingConfiguration' => '<p>The Amazon CloudWatch configuration for monitoring logs. You can configure your jobs to send log information to CloudWatch.</p>', ], ], 'Configuration' => [ 'base' => '<p>A configuration specification to be used when provisioning an application. A configuration consists of a classification, properties, and optional nested configurations. A classification refers to an application-specific configuration file. Properties are the settings you want to change in that file.</p>', 'refs' => [ 'ConfigurationList$member' => NULL, ], ], 'ConfigurationList' => [ 'base' => NULL, 'refs' => [ 'Application$runtimeConfiguration' => '<p>The <a href="https://docs.aws.amazon.com/emr-serverless/latest/APIReference/API_Configuration.html">Configuration</a> specifications of an application. Each configuration consists of a classification and properties. You use this parameter when creating or updating an application. To see the runtimeConfiguration object of an application, run the <a href="https://docs.aws.amazon.com/emr-serverless/latest/APIReference/API_GetApplication.html">GetApplication</a> API operation.</p>', 'Configuration$configurations' => '<p>A list of additional configurations to apply within a configuration object.</p>', 'ConfigurationOverrides$applicationConfiguration' => '<p>The override configurations for the application.</p>', 'CreateApplicationRequest$runtimeConfiguration' => '<p>The <a href="https://docs.aws.amazon.com/emr-serverless/latest/APIReference/API_Configuration.html">Configuration</a> specifications to use when creating an application. Each configuration consists of a classification and properties. This configuration is applied to all the job runs submitted under the application.</p>', 'UpdateApplicationRequest$runtimeConfiguration' => '<p>The <a href="https://docs.aws.amazon.com/emr-serverless/latest/APIReference/API_Configuration.html">Configuration</a> specifications to use when updating an application. Each configuration consists of a classification and properties. This configuration is applied across all the job runs submitted under the application.</p>', ], ], 'ConfigurationOverrides' => [ 'base' => '<p>A configuration specification to be used to override existing configurations.</p>', 'refs' => [ 'JobRun$configurationOverrides' => '<p>The configuration settings that are used to override default configuration.</p>', 'StartJobRunRequest$configurationOverrides' => '<p>The configuration overrides for the job run.</p>', ], ], 'ConflictException' => [ 'base' => '<p>The request could not be processed because of conflict in the current state of the resource.</p>', 'refs' => [], ], 'CpuSize' => [ 'base' => NULL, 'refs' => [ 'MaximumAllowedResources$cpu' => '<p>The maximum allowed CPU for an application.</p>', 'WorkerResourceConfig$cpu' => '<p>The CPU requirements for every worker instance of the worker type.</p>', ], ], 'CreateApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'Date' => [ 'base' => NULL, 'refs' => [ 'Application$createdAt' => '<p>The date and time when the application run was created.</p>', 'Application$updatedAt' => '<p>The date and time when the application run was last updated.</p>', 'ApplicationSummary$createdAt' => '<p>The date and time when the application was created.</p>', 'ApplicationSummary$updatedAt' => '<p>The date and time when the application was last updated.</p>', 'JobRun$createdAt' => '<p>The date and time when the job run was created.</p>', 'JobRun$updatedAt' => '<p>The date and time when the job run was updated.</p>', 'JobRunSummary$createdAt' => '<p>The date and time when the job run was created.</p>', 'JobRunSummary$updatedAt' => '<p>The date and time when the job run was last updated.</p>', 'ListJobRunsRequest$createdAtAfter' => '<p>The lower bound of the option to filter by creation date and time.</p>', 'ListJobRunsRequest$createdAtBefore' => '<p>The upper bound of the option to filter by creation date and time.</p>', ], ], 'DeleteApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DiskSize' => [ 'base' => NULL, 'refs' => [ 'MaximumAllowedResources$disk' => '<p>The maximum allowed disk for an application.</p>', 'WorkerResourceConfig$disk' => '<p>The disk requirements for every worker instance of the worker type.</p>', ], ], 'DiskType' => [ 'base' => NULL, 'refs' => [ 'WorkerResourceConfig$diskType' => '<p>The disk type for every worker instance of the work type. Shuffle optimized disks have higher performance characteristics and are better for shuffle heavy workloads. Default is <code>STANDARD</code>.</p>', ], ], 'Double' => [ 'base' => NULL, 'refs' => [ 'ResourceUtilization$vCPUHour' => '<p>The aggregated vCPU used per hour from the time the job starts executing until the job is terminated.</p>', 'ResourceUtilization$memoryGBHour' => '<p>The aggregated memory used per hour from the time the job starts executing until the job is terminated.</p>', 'ResourceUtilization$storageGBHour' => '<p>The aggregated storage used per hour from the time the job starts executing until the job is terminated.</p>', 'TotalResourceUtilization$vCPUHour' => '<p>The aggregated vCPU used per hour from the time job start executing till the time job is terminated.</p>', 'TotalResourceUtilization$memoryGBHour' => '<p>The aggregated memory used per hour from the time job start executing till the time job is terminated.</p>', 'TotalResourceUtilization$storageGBHour' => '<p>The aggregated storage used per hour from the time job start executing till the time job is terminated.</p>', ], ], 'Duration' => [ 'base' => NULL, 'refs' => [ 'JobRun$executionTimeoutMinutes' => '<p>Returns the job run timeout value from the <code>StartJobRun</code> call. If no timeout was specified, then it returns the default timeout of 720 minutes.</p>', 'StartJobRunRequest$executionTimeoutMinutes' => '<p>The maximum duration for the job run to run. If the job run runs beyond this duration, it will be automatically cancelled.</p>', ], ], 'EncryptionKeyArn' => [ 'base' => NULL, 'refs' => [ 'CloudWatchLoggingConfiguration$encryptionKeyArn' => '<p>The Key Management Service (KMS) key ARN to encrypt the logs that you store in CloudWatch Logs.</p>', 'ManagedPersistenceMonitoringConfiguration$encryptionKeyArn' => '<p>The KMS key ARN to encrypt the logs stored in managed log persistence.</p>', 'S3MonitoringConfiguration$encryptionKeyArn' => '<p>The KMS key ARN to encrypt the logs published to the given Amazon S3 destination.</p>', ], ], 'EngineType' => [ 'base' => NULL, 'refs' => [ 'Application$type' => '<p>The type of application, such as Spark or Hive.</p>', 'ApplicationSummary$type' => '<p>The type of application, such as Spark or Hive.</p>', 'CreateApplicationRequest$type' => '<p>The type of application you want to start, such as Spark or Hive.</p>', ], ], 'EntryPointArgument' => [ 'base' => NULL, 'refs' => [ 'EntryPointArguments$member' => NULL, ], ], 'EntryPointArguments' => [ 'base' => NULL, 'refs' => [ 'SparkSubmit$entryPointArguments' => '<p>The arguments for the Spark submit job run.</p>', ], ], 'EntryPointPath' => [ 'base' => NULL, 'refs' => [ 'SparkSubmit$entryPoint' => '<p>The entry point for the Spark submit job run.</p>', ], ], 'GetApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetDashboardForJobRunRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDashboardForJobRunResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetJobRunRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetJobRunResponse' => [ 'base' => NULL, 'refs' => [], ], 'Hive' => [ 'base' => '<p>The configurations for the Hive job driver.</p>', 'refs' => [ 'JobDriver$hive' => '<p>The job driver parameters specified for Hive.</p>', ], ], 'HiveCliParameters' => [ 'base' => NULL, 'refs' => [ 'Hive$parameters' => '<p>The parameters for the Hive job run.</p>', ], ], 'IAMRoleArn' => [ 'base' => NULL, 'refs' => [ 'JobRun$executionRole' => '<p>The execution role ARN of the job run.</p>', 'JobRunSummary$executionRole' => '<p>The execution role ARN of the job run.</p>', 'StartJobRunRequest$executionRoleArn' => '<p>The execution role ARN for the job run.</p>', ], ], 'ImageConfiguration' => [ 'base' => '<p>The applied image configuration.</p>', 'refs' => [ 'Application$imageConfiguration' => '<p>The image configuration applied to all worker types.</p>', 'WorkerTypeSpecification$imageConfiguration' => '<p>The image configuration for a worker type.</p>', ], ], 'ImageConfigurationInput' => [ 'base' => '<p>The image configuration.</p>', 'refs' => [ 'CreateApplicationRequest$imageConfiguration' => '<p>The image configuration for all worker types. You can either set this parameter or <code>imageConfiguration</code> for each worker type in <code>workerTypeSpecifications</code>.</p>', 'UpdateApplicationRequest$imageConfiguration' => '<p>The image configuration to be used for all worker types. You can either set this parameter or <code>imageConfiguration</code> for each worker type in <code>WorkerTypeSpecificationInput</code>.</p>', 'WorkerTypeSpecificationInput$imageConfiguration' => '<p>The image configuration for a worker type.</p>', ], ], 'ImageDigest' => [ 'base' => NULL, 'refs' => [ 'ImageConfiguration$resolvedImageDigest' => '<p>The SHA256 digest of the image URI. This indicates which specific image the application is configured for. The image digest doesn\'t exist until an application has started.</p>', ], ], 'ImageUri' => [ 'base' => NULL, 'refs' => [ 'ImageConfiguration$imageUri' => '<p>The image URI.</p>', 'ImageConfigurationInput$imageUri' => '<p>The URI of an image in the Amazon ECR registry. This field is required when you create a new application. If you leave this field blank in an update, Amazon EMR will remove the image configuration.</p>', ], ], 'InitScriptPath' => [ 'base' => NULL, 'refs' => [ 'Hive$initQueryFile' => '<p>The query file for the Hive job run.</p>', ], ], 'InitialCapacityConfig' => [ 'base' => '<p>The initial capacity configuration per worker.</p>', 'refs' => [ 'InitialCapacityConfigMap$value' => NULL, ], ], 'InitialCapacityConfigMap' => [ 'base' => NULL, 'refs' => [ 'Application$initialCapacity' => '<p>The initial capacity of the application.</p>', 'CreateApplicationRequest$initialCapacity' => '<p>The capacity to initialize when the application is created.</p>', 'UpdateApplicationRequest$initialCapacity' => '<p>The capacity to initialize when the application is updated.</p>', ], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'JobRun$totalExecutionDurationSeconds' => '<p>The job run total execution duration in seconds. This field is only available for job runs in a <code>COMPLETED</code>, <code>FAILED</code>, or <code>CANCELLED</code> state.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>Request processing failed because of an error or failure with the service.</p>', 'refs' => [], ], 'JobArn' => [ 'base' => NULL, 'refs' => [ 'JobRun$arn' => '<p>The execution role ARN of the job run.</p>', 'JobRunSummary$arn' => '<p>The ARN of the job run.</p>', 'StartJobRunResponse$arn' => '<p>This output displays the ARN of the job run..</p>', ], ], 'JobDriver' => [ 'base' => '<p>The driver that the job runs on.</p>', 'refs' => [ 'JobRun$jobDriver' => '<p>The job driver for the job run.</p>', 'StartJobRunRequest$jobDriver' => '<p>The job driver for the job run.</p>', ], ], 'JobRun' => [ 'base' => '<p>Information about a job run. A job run is a unit of work, such as a Spark JAR, Hive query, or SparkSQL query, that you submit to an Amazon EMR Serverless application.</p>', 'refs' => [ 'GetJobRunResponse$jobRun' => '<p>The output displays information about the job run.</p>', ], ], 'JobRunId' => [ 'base' => NULL, 'refs' => [ 'CancelJobRunRequest$jobRunId' => '<p>The ID of the job run to cancel.</p>', 'CancelJobRunResponse$jobRunId' => '<p>The output contains the ID of the cancelled job run.</p>', 'GetDashboardForJobRunRequest$jobRunId' => '<p>The ID of the job run.</p>', 'GetJobRunRequest$jobRunId' => '<p>The ID of the job run.</p>', 'JobRun$jobRunId' => '<p>The ID of the job run.</p>', 'JobRunSummary$id' => '<p>The ID of the job run.</p>', 'StartJobRunResponse$jobRunId' => '<p>The output contains the ID of the started job run.</p>', ], ], 'JobRunState' => [ 'base' => NULL, 'refs' => [ 'JobRun$state' => '<p>The state of the job run.</p>', 'JobRunStateSet$member' => NULL, 'JobRunSummary$state' => '<p>The state of the job run.</p>', ], ], 'JobRunStateSet' => [ 'base' => NULL, 'refs' => [ 'ListJobRunsRequest$states' => '<p>An optional filter for job run states. Note that if this filter contains multiple states, the resulting list will be grouped by the state.</p>', ], ], 'JobRunSummary' => [ 'base' => '<p>The summary of attributes associated with a job run.</p>', 'refs' => [ 'JobRuns$member' => NULL, ], ], 'JobRunType' => [ 'base' => NULL, 'refs' => [ 'JobRunSummary$type' => '<p>The type of job run, such as Spark or Hive.</p>', ], ], 'JobRuns' => [ 'base' => NULL, 'refs' => [ 'ListJobRunsResponse$jobRuns' => '<p>The output lists information about the specified job runs.</p>', ], ], 'ListApplicationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListApplicationsRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'ListApplicationsRequest$maxResults' => '<p>The maximum number of applications that can be listed.</p>', ], ], 'ListApplicationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListJobRunsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListJobRunsRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'ListJobRunsRequest$maxResults' => '<p>The maximum number of job runs that can be listed.</p>', ], ], 'ListJobRunsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'LogGroupName' => [ 'base' => NULL, 'refs' => [ 'CloudWatchLoggingConfiguration$logGroupName' => '<p>The name of the log group in Amazon CloudWatch Logs where you want to publish your logs.</p>', ], ], 'LogStreamNamePrefix' => [ 'base' => NULL, 'refs' => [ 'CloudWatchLoggingConfiguration$logStreamNamePrefix' => '<p>Prefix for the CloudWatch log stream name.</p>', ], ], 'LogTypeList' => [ 'base' => NULL, 'refs' => [ 'LogTypeMap$value' => NULL, ], ], 'LogTypeMap' => [ 'base' => NULL, 'refs' => [ 'CloudWatchLoggingConfiguration$logTypes' => '<p>The types of logs that you want to publish to CloudWatch. If you don\'t specify any log types, driver STDOUT and STDERR logs will be published to CloudWatch Logs by default. For more information including the supported worker types for Hive and Spark, see <a href="https://docs.aws.amazon.com/emr/latest/EMR-Serverless-UserGuide/logging.html#jobs-log-storage-cw">Logging for EMR Serverless with CloudWatch</a>.</p> <ul> <li> <p> <b>Key Valid Values</b>: <code>SPARK_DRIVER</code>, <code>SPARK_EXECUTOR</code>, <code>HIVE_DRIVER</code>, <code>TEZ_TASK</code> </p> </li> <li> <p> <b>Array Members Valid Values</b>: <code>STDOUT</code>, <code>STDERR</code>, <code>HIVE_LOG</code>, <code>TEZ_AM</code>, <code>SYSTEM_LOGS</code> </p> </li> </ul>', ], ], 'LogTypeString' => [ 'base' => '<p>Log type for a Spark/Hive job-run.</p>', 'refs' => [ 'LogTypeList$member' => NULL, ], ], 'ManagedPersistenceMonitoringConfiguration' => [ 'base' => '<p>The managed log persistence configuration for a job run.</p>', 'refs' => [ 'MonitoringConfiguration$managedPersistenceMonitoringConfiguration' => '<p>The managed log persistence configuration for a job run.</p>', ], ], 'MaximumAllowedResources' => [ 'base' => '<p>The maximum allowed cumulative resources for an application. No new resources will be created once the limit is hit.</p>', 'refs' => [ 'Application$maximumCapacity' => '<p>The maximum capacity of the application. This is cumulative across all workers at any given point in time during the lifespan of the application is created. No new resources will be created once any one of the defined limits is hit.</p>', 'CreateApplicationRequest$maximumCapacity' => '<p>The maximum capacity to allocate when the application is created. This is cumulative across all workers at any given point in time, not just when an application is created. No new resources will be created once any one of the defined limits is hit.</p>', 'UpdateApplicationRequest$maximumCapacity' => '<p>The maximum capacity to allocate when the application is updated. This is cumulative across all workers at any given point in time during the lifespan of the application. No new resources will be created once any one of the defined limits is hit.</p>', ], ], 'MemorySize' => [ 'base' => NULL, 'refs' => [ 'MaximumAllowedResources$memory' => '<p>The maximum allowed resources for an application.</p>', 'WorkerResourceConfig$memory' => '<p>The memory requirements for every worker instance of the worker type.</p>', ], ], 'MonitoringConfiguration' => [ 'base' => '<p>The configuration setting for monitoring.</p>', 'refs' => [ 'Application$monitoringConfiguration' => NULL, 'ConfigurationOverrides$monitoringConfiguration' => '<p>The override configurations for monitoring.</p>', 'CreateApplicationRequest$monitoringConfiguration' => '<p>The configuration setting for monitoring.</p>', 'UpdateApplicationRequest$monitoringConfiguration' => '<p>The configuration setting for monitoring.</p>', ], ], 'NetworkConfiguration' => [ 'base' => '<p>The network configuration for customer VPC connectivity.</p>', 'refs' => [ 'Application$networkConfiguration' => '<p>The network configuration for customer VPC connectivity for the application.</p>', 'CreateApplicationRequest$networkConfiguration' => '<p>The network configuration for customer VPC connectivity.</p>', 'JobRun$networkConfiguration' => NULL, 'UpdateApplicationRequest$networkConfiguration' => NULL, ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListApplicationsRequest$nextToken' => '<p>The token for the next set of application results.</p>', 'ListApplicationsResponse$nextToken' => '<p>The output displays the token for the next set of application results. This is required for pagination and is available as a response of the previous request.</p>', 'ListJobRunsRequest$nextToken' => '<p>The token for the next set of job run results.</p>', 'ListJobRunsResponse$nextToken' => '<p>The output displays the token for the next set of job run results. This is required for pagination and is available as a response of the previous request.</p>', ], ], 'Query' => [ 'base' => NULL, 'refs' => [ 'Hive$query' => '<p>The query for the Hive job run.</p>', ], ], 'ReleaseLabel' => [ 'base' => NULL, 'refs' => [ 'Application$releaseLabel' => '<p>The Amazon EMR release associated with the application.</p>', 'ApplicationSummary$releaseLabel' => '<p>The Amazon EMR release associated with the application.</p>', 'CreateApplicationRequest$releaseLabel' => '<p>The Amazon EMR release associated with the application.</p>', 'JobRun$releaseLabel' => '<p>The Amazon EMR release associated with the application your job is running on.</p>', 'JobRunSummary$releaseLabel' => '<p>The Amazon EMR release associated with the application your job is running on.</p>', 'UpdateApplicationRequest$releaseLabel' => '<p>The Amazon EMR release label for the application. You can change the release label to use a different release of Amazon EMR.</p>', ], ], 'RequestIdentityUserArn' => [ 'base' => NULL, 'refs' => [ 'JobRun$createdBy' => '<p>The user who created the job run.</p>', 'JobRunSummary$createdBy' => '<p>The user who created the job run.</p>', ], ], 'ResourceArn' => [ 'base' => NULL, 'refs' => [ 'ListTagsForResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) that identifies the resource to list the tags for. Currently, the supported resources are Amazon EMR Serverless applications and job runs.</p>', 'TagResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) that identifies the resource to list the tags for. Currently, the supported resources are Amazon EMR Serverless applications and job runs.</p>', 'UntagResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) that identifies the resource to list the tags for. Currently, the supported resources are Amazon EMR Serverless applications and job runs.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource was not found.</p>', 'refs' => [], ], 'ResourceUtilization' => [ 'base' => '<p>The resource utilization for memory, storage, and vCPU for jobs.</p>', 'refs' => [ 'JobRun$billedResourceUtilization' => '<p>The aggregate vCPU, memory, and storage that Amazon Web Services has billed for the job run. The billed resources include a 1-minute minimum usage for workers, plus additional storage over 20 GB per worker. Note that billed resources do not include usage for idle pre-initialized workers.</p>', ], ], 'S3MonitoringConfiguration' => [ 'base' => '<p>The Amazon S3 configuration for monitoring log publishing. You can configure your jobs to send log information to Amazon S3.</p>', 'refs' => [ 'MonitoringConfiguration$s3MonitoringConfiguration' => '<p>The Amazon S3 configuration for monitoring log publishing.</p>', ], ], 'SecurityGroupIds' => [ 'base' => NULL, 'refs' => [ 'NetworkConfiguration$securityGroupIds' => '<p>The array of security group Ids for customer VPC connectivity.</p>', ], ], 'SecurityGroupString' => [ 'base' => NULL, 'refs' => [ 'SecurityGroupIds$member' => NULL, ], ], 'SensitivePropertiesMap' => [ 'base' => NULL, 'refs' => [ 'Configuration$properties' => '<p>A set of properties specified within a configuration classification.</p>', ], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>The maximum number of resources per account has been reached.</p>', 'refs' => [], ], 'SparkSubmit' => [ 'base' => '<p>The configurations for the Spark submit job driver.</p>', 'refs' => [ 'JobDriver$sparkSubmit' => '<p>The job driver parameters specified for Spark.</p>', ], ], 'SparkSubmitParameters' => [ 'base' => NULL, 'refs' => [ 'SparkSubmit$sparkSubmitParameters' => '<p>The parameters for the Spark submit job run.</p>', ], ], 'StartApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'StartApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'StartJobRunRequest' => [ 'base' => NULL, 'refs' => [], ], 'StartJobRunResponse' => [ 'base' => NULL, 'refs' => [], ], 'StopApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'StopApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'String1024' => [ 'base' => NULL, 'refs' => [ 'Configuration$classification' => '<p>The classification within a configuration.</p>', 'ConflictException$message' => NULL, 'InternalServerException$message' => NULL, 'ResourceNotFoundException$message' => NULL, 'SensitivePropertiesMap$key' => NULL, 'SensitivePropertiesMap$value' => NULL, 'ServiceQuotaExceededException$message' => NULL, 'ValidationException$message' => NULL, ], ], 'String256' => [ 'base' => NULL, 'refs' => [ 'Application$stateDetails' => '<p>The state details of the application.</p>', 'ApplicationSummary$stateDetails' => '<p>The state details of the application.</p>', 'JobRun$name' => '<p>The optional job run name. This doesn\'t have to be unique.</p>', 'JobRun$stateDetails' => '<p>The state details of the job run.</p>', 'JobRunSummary$name' => '<p>The optional job run name. This doesn\'t have to be unique.</p>', 'JobRunSummary$stateDetails' => '<p>The state details of the job run.</p>', 'StartJobRunRequest$name' => '<p>The optional job run name. This doesn\'t have to be unique.</p>', ], ], 'SubnetIds' => [ 'base' => NULL, 'refs' => [ 'NetworkConfiguration$subnetIds' => '<p>The array of subnet Ids for customer VPC connectivity.</p>', ], ], 'SubnetString' => [ 'base' => NULL, 'refs' => [ 'SubnetIds$member' => NULL, ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeyList$member' => NULL, 'TagMap$key' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$tagKeys' => '<p>The keys of the tags to be removed.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'Application$tags' => '<p>The tags assigned to the application.</p>', 'CreateApplicationRequest$tags' => '<p>The tags assigned to the application.</p>', 'JobRun$tags' => '<p>The tags assigned to the job run.</p>', 'ListTagsForResourceResponse$tags' => '<p>The tags for the resource.</p>', 'StartJobRunRequest$tags' => '<p>The tags assigned to the job run.</p>', 'TagResourceRequest$tags' => '<p>The tags to add to the resource. A tag is an array of key-value pairs.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'TagMap$value' => NULL, ], ], 'TotalResourceUtilization' => [ 'base' => '<p>The aggregate vCPU, memory, and storage resources used from the time job start executing till the time job is terminated, rounded up to the nearest second.</p>', 'refs' => [ 'JobRun$totalResourceUtilization' => '<p>The aggregate vCPU, memory, and storage resources used from the time the job starts to execute, until the time the job terminates, rounded up to the nearest second.</p>', ], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'UriString' => [ 'base' => NULL, 'refs' => [ 'S3MonitoringConfiguration$logUri' => '<p>The Amazon S3 destination URI for log publishing.</p>', ], ], 'Url' => [ 'base' => NULL, 'refs' => [ 'GetDashboardForJobRunResponse$url' => '<p>The URL to view job run\'s dashboard.</p>', ], ], 'ValidationException' => [ 'base' => '<p>The input fails to satisfy the constraints specified by an Amazon Web Services service.</p>', 'refs' => [], ], 'WorkerCounts' => [ 'base' => NULL, 'refs' => [ 'InitialCapacityConfig$workerCount' => '<p>The number of workers in the initial capacity configuration.</p>', ], ], 'WorkerResourceConfig' => [ 'base' => '<p>The cumulative configuration requirements for every worker instance of the worker type.</p>', 'refs' => [ 'InitialCapacityConfig$workerConfiguration' => '<p>The resource configuration of the initial capacity configuration.</p>', ], ], 'WorkerTypeSpecification' => [ 'base' => '<p>The specifications for a worker type.</p>', 'refs' => [ 'WorkerTypeSpecificationMap$value' => NULL, ], ], 'WorkerTypeSpecificationInput' => [ 'base' => '<p>The specifications for a worker type.</p>', 'refs' => [ 'WorkerTypeSpecificationInputMap$value' => NULL, ], ], 'WorkerTypeSpecificationInputMap' => [ 'base' => NULL, 'refs' => [ 'CreateApplicationRequest$workerTypeSpecifications' => '<p>The key-value pairs that specify worker type to <code>WorkerTypeSpecificationInput</code>. This parameter must contain all valid worker types for a Spark or Hive application. Valid worker types include <code>Driver</code> and <code>Executor</code> for Spark applications and <code>HiveDriver</code> and <code>TezTask</code> for Hive applications. You can either set image details in this parameter for each worker type, or in <code>imageConfiguration</code> for all worker types.</p>', 'UpdateApplicationRequest$workerTypeSpecifications' => '<p>The key-value pairs that specify worker type to <code>WorkerTypeSpecificationInput</code>. This parameter must contain all valid worker types for a Spark or Hive application. Valid worker types include <code>Driver</code> and <code>Executor</code> for Spark applications and <code>HiveDriver</code> and <code>TezTask</code> for Hive applications. You can either set image details in this parameter for each worker type, or in <code>imageConfiguration</code> for all worker types.</p>', ], ], 'WorkerTypeSpecificationMap' => [ 'base' => NULL, 'refs' => [ 'Application$workerTypeSpecifications' => '<p>The specification applied to each worker type.</p>', ], ], 'WorkerTypeString' => [ 'base' => '<p>Worker type for an analytics framework.</p>', 'refs' => [ 'InitialCapacityConfigMap$key' => NULL, 'LogTypeMap$key' => NULL, 'WorkerTypeSpecificationInputMap$key' => NULL, 'WorkerTypeSpecificationMap$key' => NULL, ], ], ],];
