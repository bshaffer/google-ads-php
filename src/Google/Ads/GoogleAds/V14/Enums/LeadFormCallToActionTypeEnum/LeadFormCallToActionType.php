<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/lead_form_call_to_action_type.proto

namespace Google\Ads\GoogleAds\V14\Enums\LeadFormCallToActionTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing the type of call-to-action phrases in a lead form.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.LeadFormCallToActionTypeEnum.LeadFormCallToActionType</code>
 */
class LeadFormCallToActionType
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
     * Learn more.
     *
     * Generated from protobuf enum <code>LEARN_MORE = 2;</code>
     */
    const LEARN_MORE = 2;
    /**
     * Get quote.
     *
     * Generated from protobuf enum <code>GET_QUOTE = 3;</code>
     */
    const GET_QUOTE = 3;
    /**
     * Apply now.
     *
     * Generated from protobuf enum <code>APPLY_NOW = 4;</code>
     */
    const APPLY_NOW = 4;
    /**
     * Sign Up.
     *
     * Generated from protobuf enum <code>SIGN_UP = 5;</code>
     */
    const SIGN_UP = 5;
    /**
     * Contact us.
     *
     * Generated from protobuf enum <code>CONTACT_US = 6;</code>
     */
    const CONTACT_US = 6;
    /**
     * Subscribe.
     *
     * Generated from protobuf enum <code>SUBSCRIBE = 7;</code>
     */
    const SUBSCRIBE = 7;
    /**
     * Download.
     *
     * Generated from protobuf enum <code>DOWNLOAD = 8;</code>
     */
    const DOWNLOAD = 8;
    /**
     * Book now.
     *
     * Generated from protobuf enum <code>BOOK_NOW = 9;</code>
     */
    const BOOK_NOW = 9;
    /**
     * Get offer.
     *
     * Generated from protobuf enum <code>GET_OFFER = 10;</code>
     */
    const GET_OFFER = 10;
    /**
     * Register.
     *
     * Generated from protobuf enum <code>REGISTER = 11;</code>
     */
    const REGISTER = 11;
    /**
     * Get info.
     *
     * Generated from protobuf enum <code>GET_INFO = 12;</code>
     */
    const GET_INFO = 12;
    /**
     * Request a demo.
     *
     * Generated from protobuf enum <code>REQUEST_DEMO = 13;</code>
     */
    const REQUEST_DEMO = 13;
    /**
     * Join now.
     *
     * Generated from protobuf enum <code>JOIN_NOW = 14;</code>
     */
    const JOIN_NOW = 14;
    /**
     * Get started.
     *
     * Generated from protobuf enum <code>GET_STARTED = 15;</code>
     */
    const GET_STARTED = 15;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::LEARN_MORE => 'LEARN_MORE',
        self::GET_QUOTE => 'GET_QUOTE',
        self::APPLY_NOW => 'APPLY_NOW',
        self::SIGN_UP => 'SIGN_UP',
        self::CONTACT_US => 'CONTACT_US',
        self::SUBSCRIBE => 'SUBSCRIBE',
        self::DOWNLOAD => 'DOWNLOAD',
        self::BOOK_NOW => 'BOOK_NOW',
        self::GET_OFFER => 'GET_OFFER',
        self::REGISTER => 'REGISTER',
        self::GET_INFO => 'GET_INFO',
        self::REQUEST_DEMO => 'REQUEST_DEMO',
        self::JOIN_NOW => 'JOIN_NOW',
        self::GET_STARTED => 'GET_STARTED',
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
class_alias(LeadFormCallToActionType::class, \Google\Ads\GoogleAds\V14\Enums\LeadFormCallToActionTypeEnum_LeadFormCallToActionType::class);
