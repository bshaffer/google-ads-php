<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/ad_parameter.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Resources;

class AdParameter
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/ads/googleads/v11/resources/ad_parameter.proto"google.ads.googleads.v11.resourcesgoogle/api/resource.proto"�
AdParameterC
resource_name (	B,�A�A&
$googleads.googleapis.com/AdParameterR
ad_group_criterion (	B1�A�A+
)googleads.googleapis.com/AdGroupCriterionH �!
parameter_index (B�AH�
insertion_text (	H�:~�A{
$googleads.googleapis.com/AdParameterScustomers/{customer_id}/adParameters/{ad_group_id}~{criterion_id}~{parameter_index}B
_ad_group_criterionB
_parameter_indexB
_insertion_textB�
&com.google.ads.googleads.v11.resourcesBAdParameterProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

