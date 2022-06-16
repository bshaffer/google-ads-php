<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/lead_form_submission_data.proto

namespace Google\Ads\GoogleAds\V11\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data from lead form submissions.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.resources.LeadFormSubmissionData</code>
 */
class LeadFormSubmissionData extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the lead form submission data.
     * Lead form submission data resource names have the form:
     * `customers/{customer_id}/leadFormSubmissionData/{lead_form_submission_data_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. ID of this lead form submission.
     *
     * Generated from protobuf field <code>string id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = '';
    /**
     * Output only. Asset associated with the submitted lead form.
     *
     * Generated from protobuf field <code>string asset = 3 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $asset = '';
    /**
     * Output only. Campaign associated with the submitted lead form.
     *
     * Generated from protobuf field <code>string campaign = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $campaign = '';
    /**
     * Output only. Submission data associated with a lead form.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.resources.LeadFormSubmissionField lead_form_submission_fields = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $lead_form_submission_fields;
    /**
     * Output only. AdGroup associated with the submitted lead form.
     *
     * Generated from protobuf field <code>string ad_group = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group = '';
    /**
     * Output only. AdGroupAd associated with the submitted lead form.
     *
     * Generated from protobuf field <code>string ad_group_ad = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group_ad = '';
    /**
     * Output only. Google Click Id associated with the submissed lead form.
     *
     * Generated from protobuf field <code>string gclid = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $gclid = '';
    /**
     * Output only. The date and time at which the lead form was submitted. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>string submission_date_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $submission_date_time = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the lead form submission data.
     *           Lead form submission data resource names have the form:
     *           `customers/{customer_id}/leadFormSubmissionData/{lead_form_submission_data_id}`
     *     @type string $id
     *           Output only. ID of this lead form submission.
     *     @type string $asset
     *           Output only. Asset associated with the submitted lead form.
     *     @type string $campaign
     *           Output only. Campaign associated with the submitted lead form.
     *     @type \Google\Ads\GoogleAds\V11\Resources\LeadFormSubmissionField[]|\Google\Protobuf\Internal\RepeatedField $lead_form_submission_fields
     *           Output only. Submission data associated with a lead form.
     *     @type string $ad_group
     *           Output only. AdGroup associated with the submitted lead form.
     *     @type string $ad_group_ad
     *           Output only. AdGroupAd associated with the submitted lead form.
     *     @type string $gclid
     *           Output only. Google Click Id associated with the submissed lead form.
     *     @type string $submission_date_time
     *           Output only. The date and time at which the lead form was submitted. The format is
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Resources\LeadFormSubmissionData::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the lead form submission data.
     * Lead form submission data resource names have the form:
     * `customers/{customer_id}/leadFormSubmissionData/{lead_form_submission_data_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the lead form submission data.
     * Lead form submission data resource names have the form:
     * `customers/{customer_id}/leadFormSubmissionData/{lead_form_submission_data_id}`
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
     * Output only. ID of this lead form submission.
     *
     * Generated from protobuf field <code>string id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. ID of this lead form submission.
     *
     * Generated from protobuf field <code>string id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Output only. Asset associated with the submitted lead form.
     *
     * Generated from protobuf field <code>string asset = 3 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Output only. Asset associated with the submitted lead form.
     *
     * Generated from protobuf field <code>string asset = 3 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset = $var;

        return $this;
    }

    /**
     * Output only. Campaign associated with the submitted lead form.
     *
     * Generated from protobuf field <code>string campaign = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Output only. Campaign associated with the submitted lead form.
     *
     * Generated from protobuf field <code>string campaign = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Output only. Submission data associated with a lead form.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.resources.LeadFormSubmissionField lead_form_submission_fields = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLeadFormSubmissionFields()
    {
        return $this->lead_form_submission_fields;
    }

    /**
     * Output only. Submission data associated with a lead form.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.resources.LeadFormSubmissionField lead_form_submission_fields = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V11\Resources\LeadFormSubmissionField[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLeadFormSubmissionFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V11\Resources\LeadFormSubmissionField::class);
        $this->lead_form_submission_fields = $arr;

        return $this;
    }

    /**
     * Output only. AdGroup associated with the submitted lead form.
     *
     * Generated from protobuf field <code>string ad_group = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * Output only. AdGroup associated with the submitted lead form.
     *
     * Generated from protobuf field <code>string ad_group = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Output only. AdGroupAd associated with the submitted lead form.
     *
     * Generated from protobuf field <code>string ad_group_ad = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAdGroupAd()
    {
        return $this->ad_group_ad;
    }

    /**
     * Output only. AdGroupAd associated with the submitted lead form.
     *
     * Generated from protobuf field <code>string ad_group_ad = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAdGroupAd($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_group_ad = $var;

        return $this;
    }

    /**
     * Output only. Google Click Id associated with the submissed lead form.
     *
     * Generated from protobuf field <code>string gclid = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getGclid()
    {
        return $this->gclid;
    }

    /**
     * Output only. Google Click Id associated with the submissed lead form.
     *
     * Generated from protobuf field <code>string gclid = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setGclid($var)
    {
        GPBUtil::checkString($var, True);
        $this->gclid = $var;

        return $this;
    }

    /**
     * Output only. The date and time at which the lead form was submitted. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>string submission_date_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSubmissionDateTime()
    {
        return $this->submission_date_time;
    }

    /**
     * Output only. The date and time at which the lead form was submitted. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>string submission_date_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSubmissionDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->submission_date_time = $var;

        return $this;
    }

}

