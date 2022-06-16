<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/smart_campaign_setting_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Services;

class SmartCampaignSettingService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v11/enums/response_content_type.protogoogle.ads.googleads.v11.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v11.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�	
?google/ads/googleads/v11/resources/smart_campaign_setting.proto"google.ads.googleads.v11.resourcesgoogle/api/resource.proto"�
SmartCampaignSettingL
resource_name (	B5�A�A/
-googleads.googleapis.com/SmartCampaignSetting;
campaign (	B)�A�A#
!googleads.googleapis.com/CampaignZ
phone_number (2D.google.ads.googleads.v11.resources.SmartCampaignSetting.PhoneNumber!
advertising_language_code (	
	final_url (	H �
%ad_optimized_business_profile_setting	 (2Z.google.ads.googleads.v11.resources.SmartCampaignSetting.AdOptimizedBusinessProfileSettingH 
business_name (	H#
business_profile_location
 (	He
PhoneNumber
phone_number (	H �
country_code (	H�B
_phone_numberB
_country_code>
!AdOptimizedBusinessProfileSetting
include_lead_form (:o�Al
-googleads.googleapis.com/SmartCampaignSetting;customers/{customer_id}/smartCampaignSettings/{campaign_id}B
landing_pageB
business_settingB�
&com.google.ads.googleads.v11.resourcesBSmartCampaignSettingProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3
�
Fgoogle/ads/googleads/v11/services/smart_campaign_setting_service.proto!google.ads.googleads.v11.services?google/ads/googleads/v11/resources/smart_campaign_setting.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
"MutateSmartCampaignSettingsRequest
customer_id (	B�AY

operations (2@.google.ads.googleads.v11.services.SmartCampaignSettingOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v11.enums.ResponseContentTypeEnum.ResponseContentType"�
SmartCampaignSettingOperationH
update (28.google.ads.googleads.v11.resources.SmartCampaignSetting/
update_mask (2.google.protobuf.FieldMask"�
#MutateSmartCampaignSettingsResponse1
partial_failure_error (2.google.rpc.StatusT
results (2C.google.ads.googleads.v11.services.MutateSmartCampaignSettingResult"�
 MutateSmartCampaignSettingResultI
resource_name (	B2�A/
-googleads.googleapis.com/SmartCampaignSettingX
smart_campaign_setting (28.google.ads.googleads.v11.resources.SmartCampaignSetting2�
SmartCampaignSettingService�
MutateSmartCampaignSettingsE.google.ads.googleads.v11.services.MutateSmartCampaignSettingsRequestF.google.ads.googleads.v11.services.MutateSmartCampaignSettingsResponse"_���@";/v11/customers/{customer_id=*}/smartCampaignSettings:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v11.servicesB SmartCampaignSettingServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v11/services;services�GAA�!Google.Ads.GoogleAds.V11.Services�!Google\\Ads\\GoogleAds\\V11\\Services�%Google::Ads::GoogleAds::V11::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

