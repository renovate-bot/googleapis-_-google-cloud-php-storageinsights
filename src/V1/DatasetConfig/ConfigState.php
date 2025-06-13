<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/storageinsights/v1/storageinsights.proto

namespace Google\Cloud\StorageInsights\V1\DatasetConfig;

use UnexpectedValueException;

/**
 * State of the configuration.
 *
 * Protobuf type <code>google.cloud.storageinsights.v1.DatasetConfig.ConfigState</code>
 */
class ConfigState
{
    /**
     * Unspecified state.
     *
     * Generated from protobuf enum <code>CONFIG_STATE_UNSPECIFIED = 0;</code>
     */
    const CONFIG_STATE_UNSPECIFIED = 0;
    /**
     * Active configuration indicates that the configuration is
     * actively ingesting data.
     *
     * Generated from protobuf enum <code>CONFIG_STATE_ACTIVE = 1;</code>
     */
    const CONFIG_STATE_ACTIVE = 1;
    /**
     * In this state, the configuration is being verified for various
     * permissions.
     *
     * Generated from protobuf enum <code>CONFIG_STATE_VERIFICATION_IN_PROGRESS = 2;</code>
     */
    const CONFIG_STATE_VERIFICATION_IN_PROGRESS = 2;
    /**
     * Configuration is created and further processing needs to happen.
     *
     * Generated from protobuf enum <code>CONFIG_STATE_CREATED = 3;</code>
     */
    const CONFIG_STATE_CREATED = 3;
    /**
     * Configuration is under processing
     *
     * Generated from protobuf enum <code>CONFIG_STATE_PROCESSING = 4;</code>
     */
    const CONFIG_STATE_PROCESSING = 4;

    private static $valueToName = [
        self::CONFIG_STATE_UNSPECIFIED => 'CONFIG_STATE_UNSPECIFIED',
        self::CONFIG_STATE_ACTIVE => 'CONFIG_STATE_ACTIVE',
        self::CONFIG_STATE_VERIFICATION_IN_PROGRESS => 'CONFIG_STATE_VERIFICATION_IN_PROGRESS',
        self::CONFIG_STATE_CREATED => 'CONFIG_STATE_CREATED',
        self::CONFIG_STATE_PROCESSING => 'CONFIG_STATE_PROCESSING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


