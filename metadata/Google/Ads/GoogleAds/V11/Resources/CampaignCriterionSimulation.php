<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/campaign_criterion_simulation.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Resources;

class CampaignCriterionSimulation
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
�$
0google/ads/googleads/v11/common/simulation.protogoogle.ads.googleads.v11.common"m
BidModifierSimulationPointListK
points (2;.google.ads.googleads.v11.common.BidModifierSimulationPoint"c
CpcBidSimulationPointListF
points (26.google.ads.googleads.v11.common.CpcBidSimulationPoint"c
CpvBidSimulationPointListF
points (26.google.ads.googleads.v11.common.CpvBidSimulationPoint"i
TargetCpaSimulationPointListI
points (29.google.ads.googleads.v11.common.TargetCpaSimulationPoint"k
TargetRoasSimulationPointListJ
points (2:.google.ads.googleads.v11.common.TargetRoasSimulationPoint"q
 PercentCpcBidSimulationPointListM
points (2=.google.ads.googleads.v11.common.PercentCpcBidSimulationPoint"c
BudgetSimulationPointListF
points (26.google.ads.googleads.v11.common.BudgetSimulationPoint"�
(TargetImpressionShareSimulationPointListU
points (2E.google.ads.googleads.v11.common.TargetImpressionShareSimulationPoint"�
BidModifierSimulationPoint
bid_modifier (H �!
biddable_conversions (H�\'
biddable_conversions_value (H�
clicks (H�
cost_micros (H�
impressions (H�!
top_slot_impressions (H�(
parent_biddable_conversions (H�.
!parent_biddable_conversions_value (H�
parent_clicks (H	�
parent_cost_micros (H
�
parent_impressions (H�(
parent_top_slot_impressions (H�*
parent_required_budget_micros (H�B
_bid_modifierB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressionsB
_parent_biddable_conversionsB$
"_parent_biddable_conversions_valueB
_parent_clicksB
_parent_cost_microsB
_parent_impressionsB
_parent_top_slot_impressionsB 
_parent_required_budget_micros"�
CpcBidSimulationPoint%
required_budget_amount_micros (!
biddable_conversions	 (H�\'
biddable_conversions_value
 (H�
clicks (H�
cost_micros (H�
impressions (H�!
top_slot_impressions (H�
cpc_bid_micros (H "
cpc_bid_scaling_modifier (H B
cpc_simulation_key_valueB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"�
CpvBidSimulationPoint
cpv_bid_micros (H �
cost_micros (H�
impressions (H�
views (H�B
_cpv_bid_microsB
_cost_microsB
_impressionsB
_views"�
TargetCpaSimulationPoint%
required_budget_amount_micros (!
biddable_conversions	 (H�\'
biddable_conversions_value
 (H�
app_installs (
in_app_actions (
clicks (H�
cost_micros (H�
impressions (H�!
top_slot_impressions (H�
target_cpa_micros (H %
target_cpa_scaling_modifier (H B!
target_cpa_simulation_key_valueB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"�
TargetRoasSimulationPoint
target_roas (H �%
required_budget_amount_micros (!
biddable_conversions	 (H�\'
biddable_conversions_value
 (H�
clicks (H�
cost_micros (H�
impressions (H�!
top_slot_impressions (H�B
_target_roasB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"�
PercentCpcBidSimulationPoint#
percent_cpc_bid_micros (H �!
biddable_conversions (H�\'
biddable_conversions_value (H�
clicks (H�
cost_micros (H�
impressions (H�!
top_slot_impressions (H�B
_percent_cpc_bid_microsB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"�
BudgetSimulationPoint
budget_amount_micros (\'
required_cpc_bid_ceiling_micros (
biddable_conversions ("
biddable_conversions_value (
clicks (
cost_micros (
impressions (
top_slot_impressions ("�
$TargetImpressionShareSimulationPoint&
target_impression_share_micros (\'
required_cpc_bid_ceiling_micros (%
required_budget_amount_micros (
biddable_conversions ("
biddable_conversions_value (
clicks (
cost_micros (
impressions (
top_slot_impressions	 ( 
absolute_top_impressions
 (B�
#com.google.ads.googleads.v11.commonBSimulationProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/common;common�GAA�Google.Ads.GoogleAds.V11.Common�Google\\Ads\\GoogleAds\\V11\\Common�#Google::Ads::GoogleAds::V11::Commonbproto3
�
Cgoogle/ads/googleads/v11/enums/simulation_modification_method.protogoogle.ads.googleads.v11.enums"�
 SimulationModificationMethodEnum"c
SimulationModificationMethod
UNSPECIFIED 
UNKNOWN
UNIFORM
DEFAULT
SCALINGB�
"com.google.ads.googleads.v11.enumsB!SimulationModificationMethodProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
4google/ads/googleads/v11/enums/simulation_type.protogoogle.ads.googleads.v11.enums"�
SimulationTypeEnum"�
SimulationType
UNSPECIFIED 
UNKNOWN
CPC_BID
CPV_BID

TARGET_CPA
BID_MODIFIER
TARGET_ROAS
PERCENT_CPC_BID
TARGET_IMPRESSION_SHARE

BUDGET	B�
"com.google.ads.googleads.v11.enumsBSimulationTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�

Fgoogle/ads/googleads/v11/resources/campaign_criterion_simulation.proto"google.ads.googleads.v11.resourcesCgoogle/ads/googleads/v11/enums/simulation_modification_method.proto4google/ads/googleads/v11/enums/simulation_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignCriterionSimulationS
resource_name (	B<�A�A6
4googleads.googleapis.com/CampaignCriterionSimulation
campaign_id	 (B�AH�
criterion_id
 (B�AH�T
type (2A.google.ads.googleads.v11.enums.SimulationTypeEnum.SimulationTypeB�A
modification_method (2].google.ads.googleads.v11.enums.SimulationModificationMethodEnum.SimulationModificationMethodB�A

start_date (	B�AH�
end_date (	B�AH�g
bid_modifier_point_list (2?.google.ads.googleads.v11.common.BidModifierSimulationPointListB�AH :��A�
4googleads.googleapis.com/CampaignCriterionSimulation�customers/{customer_id}/campaignCriterionSimulations/{campaign_id}~{criterion_id}~{type}~{modification_method}~{start_date}~{end_date}B

point_listB
_campaign_idB
_criterion_idB
_start_dateB
	_end_dateB�
&com.google.ads.googleads.v11.resourcesB CampaignCriterionSimulationProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

