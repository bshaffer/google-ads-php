<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/feed_status.proto

namespace Google\Ads\GoogleAds\V0\Enums\FeedStatusEnum;

/**
 * Possible statuses of a feed.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.FeedStatusEnum.FeedStatus</code>
 */
class FeedStatus
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
     * Feed is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * Feed has been removed.
     *
     * Generated from protobuf enum <code>REMOVED = 3;</code>
     */
    const REMOVED = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedStatus::class, \Google\Ads\GoogleAds\V0\Enums\FeedStatusEnum_FeedStatus::class);
