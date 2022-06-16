<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/keyword_plan_campaign.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Resources;

class KeywordPlanCampaign
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
�
9google/ads/googleads/v11/enums/keyword_plan_network.protogoogle.ads.googleads.v11.enums"
KeywordPlanNetworkEnum"e
KeywordPlanNetwork
UNSPECIFIED 
UNKNOWN
GOOGLE_SEARCH
GOOGLE_SEARCH_AND_PARTNERSB�
"com.google.ads.googleads.v11.enumsBKeywordPlanNetworkProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�	
>google/ads/googleads/v11/resources/keyword_plan_campaign.proto"google.ads.googleads.v11.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
KeywordPlanCampaignK
resource_name (	B4�A�A.
,googleads.googleapis.com/KeywordPlanCampaignD
keyword_plan	 (	B)�A&
$googleads.googleapis.com/KeywordPlanH �
id
 (B�AH�
name (	H�J
language_constants (	B.�A+
)googleads.googleapis.com/LanguageConstantg
keyword_plan_network (2I.google.ads.googleads.v11.enums.KeywordPlanNetworkEnum.KeywordPlanNetwork
cpc_bid_micros (H�M
geo_targets (28.google.ads.googleads.v11.resources.KeywordPlanGeoTarget:z�Aw
,googleads.googleapis.com/KeywordPlanCampaignGcustomers/{customer_id}/keywordPlanCampaigns/{keyword_plan_campaign_id}B
_keyword_planB
_idB
_nameB
_cpc_bid_micros"�
KeywordPlanGeoTargetQ
geo_target_constant (	B/�A,
*googleads.googleapis.com/GeoTargetConstantH �B
_geo_target_constantB�
&com.google.ads.googleads.v11.resourcesBKeywordPlanCampaignProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

