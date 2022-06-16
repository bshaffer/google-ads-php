<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/campaign_criterion_simulation.proto

namespace Google\Ads\GoogleAds\V11\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign criterion simulation. Supported combinations of advertising
 * channel type, criterion ids, simulation type and simulation modification
 * method is detailed below respectively.
 * 1. SEARCH - 30000,30001,30002 - BID_MODIFIER - UNIFORM
 * 2. DISPLAY - 30001 - BID_MODIFIER - UNIFORM
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.resources.CampaignCriterionSimulation</code>
 */
class CampaignCriterionSimulation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the campaign criterion simulation.
     * Campaign criterion simulation resource names have the form:
     * `customers/{customer_id}/campaignCriterionSimulations/{campaign_id}~{criterion_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. Campaign ID of the simulation.
     *
     * Generated from protobuf field <code>optional int64 campaign_id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $campaign_id = null;
    /**
     * Output only. Criterion ID of the simulation.
     *
     * Generated from protobuf field <code>optional int64 criterion_id = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $criterion_id = null;
    /**
     * Output only. The field that the simulation modifies.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.SimulationTypeEnum.SimulationType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    /**
     * Output only. How the simulation modifies the field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.SimulationModificationMethodEnum.SimulationModificationMethod modification_method = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $modification_method = 0;
    /**
     * Output only. First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>optional string start_date = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_date = null;
    /**
     * Output only. Last day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>optional string end_date = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $end_date = null;
    protected $point_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the campaign criterion simulation.
     *           Campaign criterion simulation resource names have the form:
     *           `customers/{customer_id}/campaignCriterionSimulations/{campaign_id}~{criterion_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *     @type int|string $campaign_id
     *           Output only. Campaign ID of the simulation.
     *     @type int|string $criterion_id
     *           Output only. Criterion ID of the simulation.
     *     @type int $type
     *           Output only. The field that the simulation modifies.
     *     @type int $modification_method
     *           Output only. How the simulation modifies the field.
     *     @type string $start_date
     *           Output only. First day on which the simulation is based, in YYYY-MM-DD format.
     *     @type string $end_date
     *           Output only. Last day on which the simulation is based, in YYYY-MM-DD format.
     *     @type \Google\Ads\GoogleAds\V11\Common\BidModifierSimulationPointList $bid_modifier_point_list
     *           Output only. Simulation points if the simulation type is BID_MODIFIER.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Resources\CampaignCriterionSimulation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the campaign criterion simulation.
     * Campaign criterion simulation resource names have the form:
     * `customers/{customer_id}/campaignCriterionSimulations/{campaign_id}~{criterion_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the campaign criterion simulation.
     * Campaign criterion simulation resource names have the form:
     * `customers/{customer_id}/campaignCriterionSimulations/{campaign_id}~{criterion_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. Campaign ID of the simulation.
     *
     * Generated from protobuf field <code>optional int64 campaign_id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCampaignId()
    {
        return isset($this->campaign_id) ? $this->campaign_id : 0;
    }

    public function hasCampaignId()
    {
        return isset($this->campaign_id);
    }

    public function clearCampaignId()
    {
        unset($this->campaign_id);
    }

    /**
     * Output only. Campaign ID of the simulation.
     *
     * Generated from protobuf field <code>optional int64 campaign_id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCampaignId($var)
    {
        GPBUtil::checkInt64($var);
        $this->campaign_id = $var;

        return $this;
    }

    /**
     * Output only. Criterion ID of the simulation.
     *
     * Generated from protobuf field <code>optional int64 criterion_id = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCriterionId()
    {
        return isset($this->criterion_id) ? $this->criterion_id : 0;
    }

    public function hasCriterionId()
    {
        return isset($this->criterion_id);
    }

    public function clearCriterionId()
    {
        unset($this->criterion_id);
    }

    /**
     * Output only. Criterion ID of the simulation.
     *
     * Generated from protobuf field <code>optional int64 criterion_id = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCriterionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->criterion_id = $var;

        return $this;
    }

    /**
     * Output only. The field that the simulation modifies.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.SimulationTypeEnum.SimulationType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The field that the simulation modifies.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.SimulationTypeEnum.SimulationType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V11\Enums\SimulationTypeEnum\SimulationType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. How the simulation modifies the field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.SimulationModificationMethodEnum.SimulationModificationMethod modification_method = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getModificationMethod()
    {
        return $this->modification_method;
    }

    /**
     * Output only. How the simulation modifies the field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.SimulationModificationMethodEnum.SimulationModificationMethod modification_method = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setModificationMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V11\Enums\SimulationModificationMethodEnum\SimulationModificationMethod::class);
        $this->modification_method = $var;

        return $this;
    }

    /**
     * Output only. First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>optional string start_date = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStartDate()
    {
        return isset($this->start_date) ? $this->start_date : '';
    }

    public function hasStartDate()
    {
        return isset($this->start_date);
    }

    public function clearStartDate()
    {
        unset($this->start_date);
    }

    /**
     * Output only. First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>optional string start_date = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Output only. Last day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>optional string end_date = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEndDate()
    {
        return isset($this->end_date) ? $this->end_date : '';
    }

    public function hasEndDate()
    {
        return isset($this->end_date);
    }

    public function clearEndDate()
    {
        unset($this->end_date);
    }

    /**
     * Output only. Last day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>optional string end_date = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date = $var;

        return $this;
    }

    /**
     * Output only. Simulation points if the simulation type is BID_MODIFIER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.BidModifierSimulationPointList bid_modifier_point_list = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V11\Common\BidModifierSimulationPointList|null
     */
    public function getBidModifierPointList()
    {
        return $this->readOneof(8);
    }

    public function hasBidModifierPointList()
    {
        return $this->hasOneof(8);
    }

    /**
     * Output only. Simulation points if the simulation type is BID_MODIFIER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.BidModifierSimulationPointList bid_modifier_point_list = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V11\Common\BidModifierSimulationPointList $var
     * @return $this
     */
    public function setBidModifierPointList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V11\Common\BidModifierSimulationPointList::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPointList()
    {
        return $this->whichOneof("point_list");
    }

}

