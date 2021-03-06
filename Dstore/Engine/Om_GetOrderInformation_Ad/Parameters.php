<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrderInformation_Ad.proto

namespace Dstore\Engine\Om_GetOrderInformation_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetOrderInformation_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue order_id = 1;</code>
     */
    private $order_id = null;
    /**
     * <code>bool order_id_null = 1001;</code>
     */
    private $order_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue information_type_id = 2;</code>
     */
    private $information_type_id = null;
    /**
     * <code>bool information_type_id_null = 1002;</code>
     */
    private $information_type_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetOrderInformationAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue order_id = 1;</code>
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * <code>.dstore.values.IntegerValue order_id = 1;</code>
     */
    public function setOrderId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_id = $var;
    }

    /**
     * <code>bool order_id_null = 1001;</code>
     */
    public function getOrderIdNull()
    {
        return $this->order_id_null;
    }

    /**
     * <code>bool order_id_null = 1001;</code>
     */
    public function setOrderIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 2;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 2;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <code>bool information_type_id_null = 1002;</code>
     */
    public function getInformationTypeIdNull()
    {
        return $this->information_type_id_null;
    }

    /**
     * <code>bool information_type_id_null = 1002;</code>
     */
    public function setInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_null = $var;
    }

}

