<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/call_placeholder_field.proto

namespace Google\Ads\GoogleAds\V11\Enums\CallPlaceholderFieldEnum;

use UnexpectedValueException;

/**
 * Possible values for Call placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v11.enums.CallPlaceholderFieldEnum.CallPlaceholderField</code>
 */
class CallPlaceholderField
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Data Type: STRING. The advertiser's phone number to append to the ad.
     *
     * Generated from protobuf enum <code>PHONE_NUMBER = 2;</code>
     */
    const PHONE_NUMBER = 2;
    /**
     * Data Type: STRING. Uppercase two-letter country code of the advertiser's
     * phone number.
     *
     * Generated from protobuf enum <code>COUNTRY_CODE = 3;</code>
     */
    const COUNTRY_CODE = 3;
    /**
     * Data Type: BOOLEAN. Indicates whether call tracking is enabled. Default:
     * true.
     *
     * Generated from protobuf enum <code>TRACKED = 4;</code>
     */
    const TRACKED = 4;
    /**
     * Data Type: INT64. The ID of an AdCallMetricsConversion object. This
     * object contains the phoneCallDurationfield which is the minimum duration
     * (in seconds) of a call to be considered a conversion.
     *
     * Generated from protobuf enum <code>CONVERSION_TYPE_ID = 5;</code>
     */
    const CONVERSION_TYPE_ID = 5;
    /**
     * Data Type: STRING. Indicates whether this call extension uses its own
     * call conversion setting or follows the account level setting.
     * Valid values are: USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION and
     * USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION.
     *
     * Generated from protobuf enum <code>CONVERSION_REPORTING_STATE = 6;</code>
     */
    const CONVERSION_REPORTING_STATE = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PHONE_NUMBER => 'PHONE_NUMBER',
        self::COUNTRY_CODE => 'COUNTRY_CODE',
        self::TRACKED => 'TRACKED',
        self::CONVERSION_TYPE_ID => 'CONVERSION_TYPE_ID',
        self::CONVERSION_REPORTING_STATE => 'CONVERSION_REPORTING_STATE',
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
class_alias(CallPlaceholderField::class, \Google\Ads\GoogleAds\V11\Enums\CallPlaceholderFieldEnum_CallPlaceholderField::class);

