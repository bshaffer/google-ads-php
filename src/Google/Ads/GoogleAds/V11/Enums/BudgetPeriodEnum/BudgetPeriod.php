<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/budget_period.proto

namespace Google\Ads\GoogleAds\V11\Enums\BudgetPeriodEnum;

use UnexpectedValueException;

/**
 * Possible period of a Budget.
 *
 * Protobuf type <code>google.ads.googleads.v11.enums.BudgetPeriodEnum.BudgetPeriod</code>
 */
class BudgetPeriod
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
     * Daily budget.
     *
     * Generated from protobuf enum <code>DAILY = 2;</code>
     */
    const DAILY = 2;
    /**
     * Custom budget, added back in V5.
     * Custom bugdet can be used with total_amount to specify lifetime budget
     * limit. See: https://support.google.com/google-ads/answer/6385083 for more
     * info.
     *
     * Generated from protobuf enum <code>CUSTOM_PERIOD = 5;</code>
     */
    const CUSTOM_PERIOD = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DAILY => 'DAILY',
        self::CUSTOM_PERIOD => 'CUSTOM_PERIOD',
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
class_alias(BudgetPeriod::class, \Google\Ads\GoogleAds\V11\Enums\BudgetPeriodEnum_BudgetPeriod::class);

