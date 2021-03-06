<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetUnitConverts_Ad.proto

namespace Dstore\Engine\Mi_GetUnitConverts_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetUnitConverts_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue from_unit_id = 1;</code>
     */
    private $from_unit_id = null;
    /**
     * <code>bool from_unit_id_null = 1001;</code>
     */
    private $from_unit_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue to_unit_id = 2;</code>
     */
    private $to_unit_id = null;
    /**
     * <code>bool to_unit_id_null = 1002;</code>
     */
    private $to_unit_id_null = false;
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
        \GPBMetadata\Dstore\Engine\Procedures\MiGetUnitConvertsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue from_unit_id = 1;</code>
     */
    public function getFromUnitId()
    {
        return $this->from_unit_id;
    }

    /**
     * <code>.dstore.values.IntegerValue from_unit_id = 1;</code>
     */
    public function setFromUnitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->from_unit_id = $var;
    }

    /**
     * <code>bool from_unit_id_null = 1001;</code>
     */
    public function getFromUnitIdNull()
    {
        return $this->from_unit_id_null;
    }

    /**
     * <code>bool from_unit_id_null = 1001;</code>
     */
    public function setFromUnitIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_unit_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue to_unit_id = 2;</code>
     */
    public function getToUnitId()
    {
        return $this->to_unit_id;
    }

    /**
     * <code>.dstore.values.IntegerValue to_unit_id = 2;</code>
     */
    public function setToUnitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->to_unit_id = $var;
    }

    /**
     * <code>bool to_unit_id_null = 1002;</code>
     */
    public function getToUnitIdNull()
    {
        return $this->to_unit_id_null;
    }

    /**
     * <code>bool to_unit_id_null = 1002;</code>
     */
    public function setToUnitIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_unit_id_null = $var;
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

