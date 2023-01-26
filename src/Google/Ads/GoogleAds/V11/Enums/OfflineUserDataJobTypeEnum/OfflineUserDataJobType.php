<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/offline_user_data_job_type.proto

namespace Google\Ads\GoogleAds\V11\Enums\OfflineUserDataJobTypeEnum;

use UnexpectedValueException;

/**
 * The type of an offline user data job.
 *
 * Protobuf type <code>google.ads.googleads.v11.enums.OfflineUserDataJobTypeEnum.OfflineUserDataJobType</code>
 */
class OfflineUserDataJobType
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
     * Store Sales Direct data for self service.
     *
     * Generated from protobuf enum <code>STORE_SALES_UPLOAD_FIRST_PARTY = 2;</code>
     */
    const STORE_SALES_UPLOAD_FIRST_PARTY = 2;
    /**
     * Store Sales Direct data for third party.
     *
     * Generated from protobuf enum <code>STORE_SALES_UPLOAD_THIRD_PARTY = 3;</code>
     */
    const STORE_SALES_UPLOAD_THIRD_PARTY = 3;
    /**
     * Customer Match user list data.
     *
     * Generated from protobuf enum <code>CUSTOMER_MATCH_USER_LIST = 4;</code>
     */
    const CUSTOMER_MATCH_USER_LIST = 4;
    /**
     * Customer Match with attribute data.
     *
     * Generated from protobuf enum <code>CUSTOMER_MATCH_WITH_ATTRIBUTES = 5;</code>
     */
    const CUSTOMER_MATCH_WITH_ATTRIBUTES = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::STORE_SALES_UPLOAD_FIRST_PARTY => 'STORE_SALES_UPLOAD_FIRST_PARTY',
        self::STORE_SALES_UPLOAD_THIRD_PARTY => 'STORE_SALES_UPLOAD_THIRD_PARTY',
        self::CUSTOMER_MATCH_USER_LIST => 'CUSTOMER_MATCH_USER_LIST',
        self::CUSTOMER_MATCH_WITH_ATTRIBUTES => 'CUSTOMER_MATCH_WITH_ATTRIBUTES',
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
class_alias(OfflineUserDataJobType::class, \Google\Ads\GoogleAds\V11\Enums\OfflineUserDataJobTypeEnum_OfflineUserDataJobType::class);
