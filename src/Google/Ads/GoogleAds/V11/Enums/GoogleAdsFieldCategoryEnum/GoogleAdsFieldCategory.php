<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/google_ads_field_category.proto

namespace Google\Ads\GoogleAds\V11\Enums\GoogleAdsFieldCategoryEnum;

use UnexpectedValueException;

/**
 * The category of the artifact.
 *
 * Protobuf type <code>google.ads.googleads.v11.enums.GoogleAdsFieldCategoryEnum.GoogleAdsFieldCategory</code>
 */
class GoogleAdsFieldCategory
{
    /**
     * Unspecified
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Unknown
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The described artifact is a resource.
     *
     * Generated from protobuf enum <code>RESOURCE = 2;</code>
     */
    const RESOURCE = 2;
    /**
     * The described artifact is a field and is an attribute of a resource.
     * Including a resource attribute field in a query may segment the query if
     * the resource to which it is attributed segments the resource found in
     * the FROM clause.
     *
     * Generated from protobuf enum <code>ATTRIBUTE = 3;</code>
     */
    const ATTRIBUTE = 3;
    /**
     * The described artifact is a field and always segments search queries.
     *
     * Generated from protobuf enum <code>SEGMENT = 5;</code>
     */
    const SEGMENT = 5;
    /**
     * The described artifact is a field and is a metric. It never segments
     * search queries.
     *
     * Generated from protobuf enum <code>METRIC = 6;</code>
     */
    const METRIC = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::RESOURCE => 'RESOURCE',
        self::ATTRIBUTE => 'ATTRIBUTE',
        self::SEGMENT => 'SEGMENT',
        self::METRIC => 'METRIC',
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
class_alias(GoogleAdsFieldCategory::class, \Google\Ads\GoogleAds\V11\Enums\GoogleAdsFieldCategoryEnum_GoogleAdsFieldCategory::class);

