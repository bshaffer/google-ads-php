<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/experiment_status.proto

namespace Google\Ads\GoogleAds\V11\Enums\ExperimentStatusEnum;

use UnexpectedValueException;

/**
 * The status of the experiment.
 *
 * Protobuf type <code>google.ads.googleads.v11.enums.ExperimentStatusEnum.ExperimentStatus</code>
 */
class ExperimentStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The experiment is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * The experiment has been removed.
     *
     * Generated from protobuf enum <code>REMOVED = 3;</code>
     */
    const REMOVED = 3;
    /**
     * The experiment has been halted.
     * This status can be set from ENABLED status through API.
     *
     * Generated from protobuf enum <code>HALTED = 4;</code>
     */
    const HALTED = 4;
    /**
     * The experiment will be promoted out of experimental status.
     *
     * Generated from protobuf enum <code>PROMOTED = 5;</code>
     */
    const PROMOTED = 5;
    /**
     * Initial status of the experiment.
     *
     * Generated from protobuf enum <code>SETUP = 6;</code>
     */
    const SETUP = 6;
    /**
     * The experiment's campaigns are pending materialization.
     * This status can be set from SETUP status through API.
     *
     * Generated from protobuf enum <code>INITIATED = 7;</code>
     */
    const INITIATED = 7;
    /**
     * The experiment has been graduated.
     *
     * Generated from protobuf enum <code>GRADUATED = 8;</code>
     */
    const GRADUATED = 8;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::REMOVED => 'REMOVED',
        self::HALTED => 'HALTED',
        self::PROMOTED => 'PROMOTED',
        self::SETUP => 'SETUP',
        self::INITIATED => 'INITIATED',
        self::GRADUATED => 'GRADUATED',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExperimentStatus::class, \Google\Ads\GoogleAds\V11\Enums\ExperimentStatusEnum_ExperimentStatus::class);

