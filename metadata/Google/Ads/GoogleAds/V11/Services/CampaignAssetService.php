<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/campaign_asset_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Services;

class CampaignAssetService
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
�
5google/ads/googleads/v11/enums/asset_field_type.protogoogle.ads.googleads.v11.enums"�
AssetFieldTypeEnum"�
AssetFieldType
UNSPECIFIED 
UNKNOWN
HEADLINE
DESCRIPTION
MANDATORY_AD_TEXT
MARKETING_IMAGE
MEDIA_BUNDLE
YOUTUBE_VIDEO
BOOK_ON_GOOGLE
	LEAD_FORM	
	PROMOTION

CALLOUT
STRUCTURED_SNIPPET
SITELINK

MOBILE_APP
HOTEL_CALLOUT
CALL	
PRICE
LONG_HEADLINE
BUSINESS_NAME
SQUARE_MARKETING_IMAGE
PORTRAIT_MARKETING_IMAGE
LOGO
LANDSCAPE_LOGO	
VIDEO
CALL_TO_ACTION_SELECTIONB�
"com.google.ads.googleads.v11.enumsBAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
6google/ads/googleads/v11/enums/asset_link_status.protogoogle.ads.googleads.v11.enums"l
AssetLinkStatusEnum"U
AssetLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVED

PAUSEDB�
"com.google.ads.googleads.v11.enumsBAssetLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
1google/ads/googleads/v11/enums/asset_source.protogoogle.ads.googleads.v11.enums"i
AssetSourceEnum"V
AssetSource
UNSPECIFIED 
UNKNOWN

ADVERTISER
AUTOMATICALLY_CREATEDB�
"com.google.ads.googleads.v11.enumsBAssetSourceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
:google/ads/googleads/v11/enums/response_content_type.protogoogle.ads.googleads.v11.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v11.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
7google/ads/googleads/v11/resources/campaign_asset.proto"google.ads.googleads.v11.resources6google/ads/googleads/v11/enums/asset_link_status.proto1google/ads/googleads/v11/enums/asset_source.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignAssetE
resource_name (	B.�A�A(
&googleads.googleapis.com/CampaignAsset@
campaign (	B)�A�A#
!googleads.googleapis.com/CampaignH �:
asset (	B&�A�A 
googleads.googleapis.com/AssetH�Z

field_type (2A.google.ads.googleads.v11.enums.AssetFieldTypeEnum.AssetFieldTypeB�AP
source (2;.google.ads.googleads.v11.enums.AssetSourceEnum.AssetSourceB�AS
status (2C.google.ads.googleads.v11.enums.AssetLinkStatusEnum.AssetLinkStatus:y�Av
&googleads.googleapis.com/CampaignAssetLcustomers/{customer_id}/campaignAssets/{campaign_id}~{asset_id}~{field_type}B
	_campaignB
_assetB�
&com.google.ads.googleads.v11.resourcesBCampaignAssetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3
�
>google/ads/googleads/v11/services/campaign_asset_service.proto!google.ads.googleads.v11.services7google/ads/googleads/v11/resources/campaign_asset.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateCampaignAssetsRequest
customer_id (	B�AR

operations (29.google.ads.googleads.v11.services.CampaignAssetOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v11.enums.ResponseContentTypeEnum.ResponseContentType"�
CampaignAssetOperation/
update_mask (2.google.protobuf.FieldMaskC
create (21.google.ads.googleads.v11.resources.CampaignAssetH C
update (21.google.ads.googleads.v11.resources.CampaignAssetH =
remove (	B+�A(
&googleads.googleapis.com/CampaignAssetH B
	operation"�
MutateCampaignAssetsResponse1
partial_failure_error (2.google.rpc.StatusM
results (2<.google.ads.googleads.v11.services.MutateCampaignAssetResult"�
MutateCampaignAssetResultB
resource_name (	B+�A(
&googleads.googleapis.com/CampaignAssetI
campaign_asset (21.google.ads.googleads.v11.resources.CampaignAsset2�
CampaignAssetService�
MutateCampaignAssets>.google.ads.googleads.v11.services.MutateCampaignAssetsRequest?.google.ads.googleads.v11.services.MutateCampaignAssetsResponse"X���9"4/v11/customers/{customer_id=*}/campaignAssets:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v11.servicesBCampaignAssetServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v11/services;services�GAA�!Google.Ads.GoogleAds.V11.Services�!Google\\Ads\\GoogleAds\\V11\\Services�%Google::Ads::GoogleAds::V11::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

