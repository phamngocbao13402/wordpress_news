<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/campaign_experiment_service.proto

namespace Google\Ads\GoogleAds\V9\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CampaignExperimentService.PromoteCampaignExperiment][google.ads.googleads.v9.services.CampaignExperimentService.PromoteCampaignExperiment].
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.services.PromoteCampaignExperimentRequest</code>
 */
class PromoteCampaignExperimentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the campaign experiment to promote.
     *
     * Generated from protobuf field <code>string campaign_experiment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $campaign_experiment = '';
    /**
     * If true, the request is validated but no Long Running Operation is created.
     * Only errors are returned.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     */
    protected $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $campaign_experiment
     *           Required. The resource name of the campaign experiment to promote.
     *     @type bool $validate_only
     *           If true, the request is validated but no Long Running Operation is created.
     *           Only errors are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Services\CampaignExperimentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the campaign experiment to promote.
     *
     * Generated from protobuf field <code>string campaign_experiment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCampaignExperiment()
    {
        return $this->campaign_experiment;
    }

    /**
     * Required. The resource name of the campaign experiment to promote.
     *
     * Generated from protobuf field <code>string campaign_experiment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCampaignExperiment($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign_experiment = $var;

        return $this;
    }

    /**
     * If true, the request is validated but no Long Running Operation is created.
     * Only errors are returned.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, the request is validated but no Long Running Operation is created.
     * Only errors are returned.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

