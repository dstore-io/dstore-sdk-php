<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyCampaignSettings_Ad.proto

namespace Dstore\Engine\Om_ModifyCampaignSettings_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyCampaignSettings_Ad.Parameters</code>
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
     * <code>.dstore.values.StringValue key_variable = 2;</code>
     */
    private $key_variable = null;
    /**
     * <code>bool key_variable_null = 1002;</code>
     */
    private $key_variable_null = false;
    /**
     * <code>.dstore.values.StringValue value = 3;</code>
     */
    private $value = null;
    /**
     * <code>bool value_null = 1003;</code>
     */
    private $value_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyCampaignSettingsAd::initOnce();
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
     * <code>.dstore.values.StringValue key_variable = 2;</code>
     */
    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    /**
     * <code>.dstore.values.StringValue key_variable = 2;</code>
     */
    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->key_variable = $var;
    }

    /**
     * <code>bool key_variable_null = 1002;</code>
     */
    public function getKeyVariableNull()
    {
        return $this->key_variable_null;
    }

    /**
     * <code>bool key_variable_null = 1002;</code>
     */
    public function setKeyVariableNull($var)
    {
        GPBUtil::checkBool($var);
        $this->key_variable_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue value = 3;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <code>.dstore.values.StringValue value = 3;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <code>bool value_null = 1003;</code>
     */
    public function getValueNull()
    {
        return $this->value_null;
    }

    /**
     * <code>bool value_null = 1003;</code>
     */
    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
    }

}

