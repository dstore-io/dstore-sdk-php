<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignPeriods_Ad.proto

namespace Dstore\Engine\Om_GetCampaignPeriods_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetCampaignPeriods_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue campaign_id = 1;</code>
     */
    private $campaign_id = null;
    /**
     * <code>bool campaign_id_null = 1001;</code>
     */
    private $campaign_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue period_definition_id = 2;</code>
     */
    private $period_definition_id = null;
    /**
     * <code>bool period_definition_id_null = 1002;</code>
     */
    private $period_definition_id_null = false;
    /**
     * <code>.dstore.values.TimestampValue from_date = 3;</code>
     */
    private $from_date = null;
    /**
     * <code>bool from_date_null = 1003;</code>
     */
    private $from_date_null = false;
    /**
     * <code>.dstore.values.TimestampValue to_date = 4;</code>
     */
    private $to_date = null;
    /**
     * <code>bool to_date_null = 1004;</code>
     */
    private $to_date_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetCampaignPeriodsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue campaign_id = 1;</code>
     */
    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    /**
     * <code>.dstore.values.IntegerValue campaign_id = 1;</code>
     */
    public function setCampaignId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->campaign_id = $var;
    }

    /**
     * <code>bool campaign_id_null = 1001;</code>
     */
    public function getCampaignIdNull()
    {
        return $this->campaign_id_null;
    }

    /**
     * <code>bool campaign_id_null = 1001;</code>
     */
    public function setCampaignIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->campaign_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue period_definition_id = 2;</code>
     */
    public function getPeriodDefinitionId()
    {
        return $this->period_definition_id;
    }

    /**
     * <code>.dstore.values.IntegerValue period_definition_id = 2;</code>
     */
    public function setPeriodDefinitionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->period_definition_id = $var;
    }

    /**
     * <code>bool period_definition_id_null = 1002;</code>
     */
    public function getPeriodDefinitionIdNull()
    {
        return $this->period_definition_id_null;
    }

    /**
     * <code>bool period_definition_id_null = 1002;</code>
     */
    public function setPeriodDefinitionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->period_definition_id_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date = 3;</code>
     */
    public function getFromDate()
    {
        return $this->from_date;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date = 3;</code>
     */
    public function setFromDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->from_date = $var;
    }

    /**
     * <code>bool from_date_null = 1003;</code>
     */
    public function getFromDateNull()
    {
        return $this->from_date_null;
    }

    /**
     * <code>bool from_date_null = 1003;</code>
     */
    public function setFromDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_date_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date = 4;</code>
     */
    public function getToDate()
    {
        return $this->to_date;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date = 4;</code>
     */
    public function setToDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->to_date = $var;
    }

    /**
     * <code>bool to_date_null = 1004;</code>
     */
    public function getToDateNull()
    {
        return $this->to_date_null;
    }

    /**
     * <code>bool to_date_null = 1004;</code>
     */
    public function setToDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_date_null = $var;
    }

}

