<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetShippTypeSurcharges_Ad.proto

namespace Dstore\Engine\Om_GetShippTypeSurcharges_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetShippTypeSurcharges_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue shipping_type_id = 1;</code>
     */
    private $shipping_type_id = null;
    /**
     * <code>bool shipping_type_id_null = 1001;</code>
     */
    private $shipping_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue surcharge_type_id = 2;</code>
     */
    private $surcharge_type_id = null;
    /**
     * <code>bool surcharge_type_id_null = 1002;</code>
     */
    private $surcharge_type_id_null = false;
    /**
     * <code>.dstore.values.TimestampValue valid_from = 3;</code>
     */
    private $valid_from = null;
    /**
     * <code>bool valid_from_null = 1003;</code>
     */
    private $valid_from_null = false;
    /**
     * <code>.dstore.values.TimestampValue valid_to = 4;</code>
     */
    private $valid_to = null;
    /**
     * <code>bool valid_to_null = 1004;</code>
     */
    private $valid_to_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetShippTypeSurchargesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue shipping_type_id = 1;</code>
     */
    public function getShippingTypeId()
    {
        return $this->shipping_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue shipping_type_id = 1;</code>
     */
    public function setShippingTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->shipping_type_id = $var;
    }

    /**
     * <code>bool shipping_type_id_null = 1001;</code>
     */
    public function getShippingTypeIdNull()
    {
        return $this->shipping_type_id_null;
    }

    /**
     * <code>bool shipping_type_id_null = 1001;</code>
     */
    public function setShippingTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->shipping_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue surcharge_type_id = 2;</code>
     */
    public function getSurchargeTypeId()
    {
        return $this->surcharge_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue surcharge_type_id = 2;</code>
     */
    public function setSurchargeTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->surcharge_type_id = $var;
    }

    /**
     * <code>bool surcharge_type_id_null = 1002;</code>
     */
    public function getSurchargeTypeIdNull()
    {
        return $this->surcharge_type_id_null;
    }

    /**
     * <code>bool surcharge_type_id_null = 1002;</code>
     */
    public function setSurchargeTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->surcharge_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_from = 3;</code>
     */
    public function getValidFrom()
    {
        return $this->valid_from;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_from = 3;</code>
     */
    public function setValidFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_from = $var;
    }

    /**
     * <code>bool valid_from_null = 1003;</code>
     */
    public function getValidFromNull()
    {
        return $this->valid_from_null;
    }

    /**
     * <code>bool valid_from_null = 1003;</code>
     */
    public function setValidFromNull($var)
    {
        GPBUtil::checkBool($var);
        $this->valid_from_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_to = 4;</code>
     */
    public function getValidTo()
    {
        return $this->valid_to;
    }

    /**
     * <code>.dstore.values.TimestampValue valid_to = 4;</code>
     */
    public function setValidTo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_to = $var;
    }

    /**
     * <code>bool valid_to_null = 1004;</code>
     */
    public function getValidToNull()
    {
        return $this->valid_to_null;
    }

    /**
     * <code>bool valid_to_null = 1004;</code>
     */
    public function setValidToNull($var)
    {
        GPBUtil::checkBool($var);
        $this->valid_to_null = $var;
    }

}
