<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/common/policy_summary.proto

namespace Google\Ads\GoogleAds\V9\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains policy summary information.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.common.PolicySummary</code>
 */
class PolicySummary extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of policy findings.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.PolicyTopicEntry policy_topic_entries = 1;</code>
     */
    private $policy_topic_entries;
    /**
     * Where in the review process the resource is.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.PolicyReviewStatusEnum.PolicyReviewStatus review_status = 2;</code>
     */
    protected $review_status = 0;
    /**
     * The overall approval status, which is calculated based on
     * the status of its individual policy topic entries.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.PolicyApprovalStatusEnum.PolicyApprovalStatus approval_status = 3;</code>
     */
    protected $approval_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V9\Common\PolicyTopicEntry[]|\Google\Protobuf\Internal\RepeatedField $policy_topic_entries
     *           The list of policy findings.
     *     @type int $review_status
     *           Where in the review process the resource is.
     *     @type int $approval_status
     *           The overall approval status, which is calculated based on
     *           the status of its individual policy topic entries.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Common\PolicySummary::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of policy findings.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.PolicyTopicEntry policy_topic_entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicyTopicEntries()
    {
        return $this->policy_topic_entries;
    }

    /**
     * The list of policy findings.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.PolicyTopicEntry policy_topic_entries = 1;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\PolicyTopicEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicyTopicEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V9\Common\PolicyTopicEntry::class);
        $this->policy_topic_entries = $arr;

        return $this;
    }

    /**
     * Where in the review process the resource is.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.PolicyReviewStatusEnum.PolicyReviewStatus review_status = 2;</code>
     * @return int
     */
    public function getReviewStatus()
    {
        return $this->review_status;
    }

    /**
     * Where in the review process the resource is.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.PolicyReviewStatusEnum.PolicyReviewStatus review_status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setReviewStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\PolicyReviewStatusEnum\PolicyReviewStatus::class);
        $this->review_status = $var;

        return $this;
    }

    /**
     * The overall approval status, which is calculated based on
     * the status of its individual policy topic entries.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.PolicyApprovalStatusEnum.PolicyApprovalStatus approval_status = 3;</code>
     * @return int
     */
    public function getApprovalStatus()
    {
        return $this->approval_status;
    }

    /**
     * The overall approval status, which is calculated based on
     * the status of its individual policy topic entries.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.PolicyApprovalStatusEnum.PolicyApprovalStatus approval_status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setApprovalStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\PolicyApprovalStatusEnum\PolicyApprovalStatus::class);
        $this->approval_status = $var;

        return $this;
    }

}

