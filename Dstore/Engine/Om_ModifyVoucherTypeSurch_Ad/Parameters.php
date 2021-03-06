<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyVoucherTypeSurch_Ad.proto

namespace Dstore\Engine\Om_ModifyVoucherTypeSurch_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyVoucherTypeSurch_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue voucher_type_id = 1;</code>
     */
    private $voucher_type_id = null;
    /**
     * <code>bool voucher_type_id_null = 1001;</code>
     */
    private $voucher_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue surcharge_type_id = 2;</code>
     */
    private $surcharge_type_id = null;
    /**
     * <code>bool surcharge_type_id_null = 1002;</code>
     */
    private $surcharge_type_id_null = false;
    /**
     * <code>.dstore.values.DecimalValue surcharge_value = 3;</code>
     */
    private $surcharge_value = null;
    /**
     * <code>bool surcharge_value_null = 1003;</code>
     */
    private $surcharge_value_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_surcharge = 4;</code>
     */
    private $delete_surcharge = null;
    /**
     * <code>bool delete_surcharge_null = 1004;</code>
     */
    private $delete_surcharge_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyVoucherTypeSurchAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue voucher_type_id = 1;</code>
     */
    public function getVoucherTypeId()
    {
        return $this->voucher_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue voucher_type_id = 1;</code>
     */
    public function setVoucherTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->voucher_type_id = $var;
    }

    /**
     * <code>bool voucher_type_id_null = 1001;</code>
     */
    public function getVoucherTypeIdNull()
    {
        return $this->voucher_type_id_null;
    }

    /**
     * <code>bool voucher_type_id_null = 1001;</code>
     */
    public function setVoucherTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->voucher_type_id_null = $var;
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
     * <code>.dstore.values.DecimalValue surcharge_value = 3;</code>
     */
    public function getSurchargeValue()
    {
        return $this->surcharge_value;
    }

    /**
     * <code>.dstore.values.DecimalValue surcharge_value = 3;</code>
     */
    public function setSurchargeValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->surcharge_value = $var;
    }

    /**
     * <code>bool surcharge_value_null = 1003;</code>
     */
    public function getSurchargeValueNull()
    {
        return $this->surcharge_value_null;
    }

    /**
     * <code>bool surcharge_value_null = 1003;</code>
     */
    public function setSurchargeValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->surcharge_value_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_surcharge = 4;</code>
     */
    public function getDeleteSurcharge()
    {
        return $this->delete_surcharge;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_surcharge = 4;</code>
     */
    public function setDeleteSurcharge(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_surcharge = $var;
    }

    /**
     * <code>bool delete_surcharge_null = 1004;</code>
     */
    public function getDeleteSurchargeNull()
    {
        return $this->delete_surcharge_null;
    }

    /**
     * <code>bool delete_surcharge_null = 1004;</code>
     */
    public function setDeleteSurchargeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_surcharge_null = $var;
    }

}

