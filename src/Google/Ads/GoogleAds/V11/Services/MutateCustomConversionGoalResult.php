<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/custom_conversion_goal_service.proto

namespace Google\Ads\GoogleAds\V11\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the custom conversion goal mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.services.MutateCustomConversionGoalResult</code>
 */
class MutateCustomConversionGoalResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated CustomConversionGoal with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.resources.CustomConversionGoal custom_conversion_goal = 2;</code>
     */
    protected $custom_conversion_goal = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V11\Resources\CustomConversionGoal $custom_conversion_goal
     *           The mutated CustomConversionGoal with only mutable fields after mutate.
     *           The field will only be returned when response_content_type is set to
     *           "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Services\CustomConversionGoalService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
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
     * The mutated CustomConversionGoal with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.resources.CustomConversionGoal custom_conversion_goal = 2;</code>
     * @return \Google\Ads\GoogleAds\V11\Resources\CustomConversionGoal|null
     */
    public function getCustomConversionGoal()
    {
        return $this->custom_conversion_goal;
    }

    public function hasCustomConversionGoal()
    {
        return isset($this->custom_conversion_goal);
    }

    public function clearCustomConversionGoal()
    {
        unset($this->custom_conversion_goal);
    }

    /**
     * The mutated CustomConversionGoal with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.resources.CustomConversionGoal custom_conversion_goal = 2;</code>
     * @param \Google\Ads\GoogleAds\V11\Resources\CustomConversionGoal $var
     * @return $this
     */
    public function setCustomConversionGoal($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V11\Resources\CustomConversionGoal::class);
        $this->custom_conversion_goal = $var;

        return $this;
    }

}

