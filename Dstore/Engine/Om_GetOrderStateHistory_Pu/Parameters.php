<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrderStateHistory_Pu.proto

namespace Dstore\Engine\Om_GetOrderStateHistory_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetOrderStateHistory_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue information_type_id = 1;</code>
     */
    private $information_type_id = null;
    /**
     * <code>bool information_type_id_null = 1001;</code>
     */
    private $information_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue information = 2;</code>
     */
    private $information = null;
    /**
     * <code>bool information_null = 1002;</code>
     */
    private $information_null = false;
    /**
     * <code>.dstore.values.IntegerValue language_id = 3;</code>
     */
    private $language_id = null;
    /**
     * <code>bool language_id_null = 1003;</code>
     */
    private $language_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetOrderStateHistoryPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 1;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 1;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <code>bool information_type_id_null = 1001;</code>
     */
    public function getInformationTypeIdNull()
    {
        return $this->information_type_id_null;
    }

    /**
     * <code>bool information_type_id_null = 1001;</code>
     */
    public function setInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue information = 2;</code>
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * <code>.dstore.values.StringValue information = 2;</code>
     */
    public function setInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->information = $var;
    }

    /**
     * <code>bool information_null = 1002;</code>
     */
    public function getInformationNull()
    {
        return $this->information_null;
    }

    /**
     * <code>bool information_null = 1002;</code>
     */
    public function setInformationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 3;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 3;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

    /**
     * <code>bool language_id_null = 1003;</code>
     */
    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    /**
     * <code>bool language_id_null = 1003;</code>
     */
    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

}

