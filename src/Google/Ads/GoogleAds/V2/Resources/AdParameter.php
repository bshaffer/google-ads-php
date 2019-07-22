<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/ad_parameter.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ad parameter that is used to update numeric values (such as prices or
 * inventory levels) in any text line of an ad (including URLs). There can
 * be a maximum of two AdParameters per ad group criterion. (One with
 * parameter_index = 1 and one with parameter_index = 2.)
 * In the ad the parameters are referenced by a placeholder of the form
 * "{param#:value}". E.g. "{param1:$17}"
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.AdParameter</code>
 */
final class AdParameter extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the ad parameter.
     * Ad parameter resource names have the form:
     * `customers/{customer_id}/adParameters/{ad_group_id}~{criterion_id}~{parameter_index}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ad group criterion that this ad parameter belongs to.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 2;</code>
     */
    private $ad_group_criterion = null;
    /**
     * The unique index of this ad parameter. Must be either 1 or 2.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value parameter_index = 3;</code>
     */
    private $parameter_index = null;
    /**
     * Numeric value to insert into the ad text. The following restrictions
     *  apply:
     *  - Can use comma or period as a separator, with an optional period or
     *    comma (respectively) for fractional values. For example, 1,000,000.00
     *    and 2.000.000,10 are valid.
     *  - Can be prepended or appended with a currency symbol. For example,
     *    $99.99 is valid.
     *  - Can be prepended or appended with a currency code. For example, 99.99USD
     *    and EUR200 are valid.
     *  - Can use '%'. For example, 1.0% and 1,0% are valid.
     *  - Can use plus or minus. For example, -10.99 and 25+ are valid.
     *  - Can use '/' between two numbers. For example 4/1 and 0.95/0.45 are
     *    valid.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue insertion_text = 4;</code>
     */
    private $insertion_text = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the ad parameter.
     *           Ad parameter resource names have the form:
     *           `customers/{customer_id}/adParameters/{ad_group_id}~{criterion_id}~{parameter_index}`
     *     @type \Google\Protobuf\StringValue $ad_group_criterion
     *           The ad group criterion that this ad parameter belongs to.
     *     @type \Google\Protobuf\Int64Value $parameter_index
     *           The unique index of this ad parameter. Must be either 1 or 2.
     *     @type \Google\Protobuf\StringValue $insertion_text
     *           Numeric value to insert into the ad text. The following restrictions
     *            apply:
     *            - Can use comma or period as a separator, with an optional period or
     *              comma (respectively) for fractional values. For example, 1,000,000.00
     *              and 2.000.000,10 are valid.
     *            - Can be prepended or appended with a currency symbol. For example,
     *              $99.99 is valid.
     *            - Can be prepended or appended with a currency code. For example, 99.99USD
     *              and EUR200 are valid.
     *            - Can use '%'. For example, 1.0% and 1,0% are valid.
     *            - Can use plus or minus. For example, -10.99 and 25+ are valid.
     *            - Can use '/' between two numbers. For example 4/1 and 0.95/0.45 are
     *              valid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\AdParameter::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the ad parameter.
     * Ad parameter resource names have the form:
     * `customers/{customer_id}/adParameters/{ad_group_id}~{criterion_id}~{parameter_index}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the ad parameter.
     * Ad parameter resource names have the form:
     * `customers/{customer_id}/adParameters/{ad_group_id}~{criterion_id}~{parameter_index}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The ad group criterion that this ad parameter belongs to.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupCriterion()
    {
        return $this->ad_group_criterion;
    }

    /**
     * Returns the unboxed value from <code>getAdGroupCriterion()</code>

     * The ad group criterion that this ad parameter belongs to.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 2;</code>
     * @return string|null
     */
    public function getAdGroupCriterionUnwrapped()
    {
        $wrapper = $this->getAdGroupCriterion();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The ad group criterion that this ad parameter belongs to.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_criterion = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The ad group criterion that this ad parameter belongs to.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupCriterionUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setAdGroupCriterion($wrappedVar);
    }

    /**
     * The unique index of this ad parameter. Must be either 1 or 2.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value parameter_index = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getParameterIndex()
    {
        return $this->parameter_index;
    }

    /**
     * Returns the unboxed value from <code>getParameterIndex()</code>

     * The unique index of this ad parameter. Must be either 1 or 2.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value parameter_index = 3;</code>
     * @return int|string|null
     */
    public function getParameterIndexUnwrapped()
    {
        $wrapper = $this->getParameterIndex();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The unique index of this ad parameter. Must be either 1 or 2.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value parameter_index = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setParameterIndex($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->parameter_index = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The unique index of this ad parameter. Must be either 1 or 2.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value parameter_index = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setParameterIndexUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setParameterIndex($wrappedVar);
    }

    /**
     * Numeric value to insert into the ad text. The following restrictions
     *  apply:
     *  - Can use comma or period as a separator, with an optional period or
     *    comma (respectively) for fractional values. For example, 1,000,000.00
     *    and 2.000.000,10 are valid.
     *  - Can be prepended or appended with a currency symbol. For example,
     *    $99.99 is valid.
     *  - Can be prepended or appended with a currency code. For example, 99.99USD
     *    and EUR200 are valid.
     *  - Can use '%'. For example, 1.0% and 1,0% are valid.
     *  - Can use plus or minus. For example, -10.99 and 25+ are valid.
     *  - Can use '/' between two numbers. For example 4/1 and 0.95/0.45 are
     *    valid.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue insertion_text = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getInsertionText()
    {
        return $this->insertion_text;
    }

    /**
     * Returns the unboxed value from <code>getInsertionText()</code>

     * Numeric value to insert into the ad text. The following restrictions
     *  apply:
     *  - Can use comma or period as a separator, with an optional period or
     *    comma (respectively) for fractional values. For example, 1,000,000.00
     *    and 2.000.000,10 are valid.
     *  - Can be prepended or appended with a currency symbol. For example,
     *    $99.99 is valid.
     *  - Can be prepended or appended with a currency code. For example, 99.99USD
     *    and EUR200 are valid.
     *  - Can use '%'. For example, 1.0% and 1,0% are valid.
     *  - Can use plus or minus. For example, -10.99 and 25+ are valid.
     *  - Can use '/' between two numbers. For example 4/1 and 0.95/0.45 are
     *    valid.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue insertion_text = 4;</code>
     * @return string|null
     */
    public function getInsertionTextUnwrapped()
    {
        $wrapper = $this->getInsertionText();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Numeric value to insert into the ad text. The following restrictions
     *  apply:
     *  - Can use comma or period as a separator, with an optional period or
     *    comma (respectively) for fractional values. For example, 1,000,000.00
     *    and 2.000.000,10 are valid.
     *  - Can be prepended or appended with a currency symbol. For example,
     *    $99.99 is valid.
     *  - Can be prepended or appended with a currency code. For example, 99.99USD
     *    and EUR200 are valid.
     *  - Can use '%'. For example, 1.0% and 1,0% are valid.
     *  - Can use plus or minus. For example, -10.99 and 25+ are valid.
     *  - Can use '/' between two numbers. For example 4/1 and 0.95/0.45 are
     *    valid.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue insertion_text = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setInsertionText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->insertion_text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Numeric value to insert into the ad text. The following restrictions
     *  apply:
     *  - Can use comma or period as a separator, with an optional period or
     *    comma (respectively) for fractional values. For example, 1,000,000.00
     *    and 2.000.000,10 are valid.
     *  - Can be prepended or appended with a currency symbol. For example,
     *    $99.99 is valid.
     *  - Can be prepended or appended with a currency code. For example, 99.99USD
     *    and EUR200 are valid.
     *  - Can use '%'. For example, 1.0% and 1,0% are valid.
     *  - Can use plus or minus. For example, -10.99 and 25+ are valid.
     *  - Can use '/' between two numbers. For example 4/1 and 0.95/0.45 are
     *    valid.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue insertion_text = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setInsertionTextUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setInsertionText($wrappedVar);
    }

}
