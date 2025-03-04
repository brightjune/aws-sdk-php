<?php
// This file was auto-generated from sdk-root/src/data/iot-managed-integrations/2025-03-03/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'GetSchemaVersion' => [ [ 'input' => [ 'SchemaVersionedId' => 'matter.ColorControl@$latest', 'Type' => 'capability', ], 'output' => [ 'Description' => 'The Color Control cluster defined as Harmony Capability.', 'Namespace' => 'matter', 'Schema' => [ 'name' => 'Color Control', '$defs' => [], '$id' => 'matter.ColorControl@1.3', '$ref' => 'aws.capability@1.0', 'actions' => [ [ '$ref' => 'aws.action.ReadState@1.0', ], [ '$ref' => 'aws.action.UpdateState@1.0', ], [ 'name' => 'MoveToHue', 'extrinsicId' => '0x00', 'request' => [ 'parameters' => [ 'Hue' => [ 'value' => [ '$ref' => 'aws.integer@1.0', ], 'extrinsicId' => '0', ], ], ], ], ], 'description' => 'The Color Control cluster defined as Harmony Capability.', 'events' => [], 'extrinsicId' => '0x0300', 'extrinsicVersion' => '14', 'properties' => [ 'CurrentHue' => [ 'value' => [ '$ref' => 'aws.integer@1.0', ], 'mutable' => false, ], ], 'title' => 'Color Control Cluster', ], 'SchemaId' => 'matter.ColorControl', 'SemanticVersion' => '1.3', 'Type' => 'capability', ], 'id' => 'example-1', 'title' => 'GetSchemaVersion happy path for an example schema version.', ], [ 'input' => [ 'Format' => 'ZCL', 'SchemaVersionedId' => 'matter.ColorControl@1.3', 'Type' => 'capability', ], 'output' => [ 'Description' => 'The Color Control cluster defined as Harmony Capability.', 'Namespace' => 'matter', 'Schema' => [], 'SchemaId' => 'matter.ColorControl', 'SemanticVersion' => '1.3', 'Type' => 'capability', ], 'id' => 'example-2', 'title' => 'GetSchemaVersion happy path for an example schema version.', ], [ 'input' => [ 'SchemaVersionedId' => 'matter.ColorControl@$latest', 'Type' => 'capability', ], 'id' => 'example-3', 'title' => 'GetSchemaVersion error path for an example schema version that does not exist.', ], ], 'ListSchemaVersions' => [ [ 'input' => [ 'SchemaId' => 'matter.ColorControl', 'Type' => 'capability', ], 'output' => [ 'Items' => [ [ 'Description' => 'The Color Control cluster defined as Harmony Capability.', 'Namespace' => 'matter', 'SchemaId' => 'matter.ColorControl', 'SemanticVersion' => '1.3', 'Type' => 'capability', ], ], ], 'id' => 'example-1', 'title' => 'ListSchemaVersions happy path for an example schema version.', ], [ 'input' => [ 'SemanticVersion' => '34.56', 'Type' => 'capability', ], 'output' => [ 'Items' => [ [ 'Description' => 'The Color Control cluster defined as Harmony Capability.', 'Namespace' => 'matter', 'SchemaId' => 'matter.ColorControl', 'SemanticVersion' => '1.3', 'Type' => 'capability', ], ], ], 'id' => 'example-2', 'title' => 'ListSchemaVersions by version.', ], [ 'input' => [ 'Namespace' => 'matter', 'SchemaId' => 'matter.ColorControl', 'Type' => 'capability', ], 'id' => 'example-3', 'title' => 'ListSchemaVersions error for invalid input.', ], ], ],];
