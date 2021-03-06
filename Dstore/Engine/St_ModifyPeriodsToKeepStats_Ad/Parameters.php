<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_ModifyPeriodsToKeepStats_Ad.proto

namespace Dstore\Engine\St_ModifyPeriodsToKeepStats_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.st_ModifyPeriodsToKeepStats_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue table_name = 1;</code>
     */
    private $table_name = null;
    /**
     * <code>bool table_name_null = 1001;</code>
     */
    private $table_name_null = false;
    /**
     * <code>.dstore.values.IntegerValue level_no = 2;</code>
     */
    private $level_no = null;
    /**
     * <code>bool level_no_null = 1002;</code>
     */
    private $level_no_null = false;
    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_number = 3;</code>
     */
    private $basic_characteristic_number = null;
    /**
     * <code>bool basic_characteristic_number_null = 1003;</code>
     */
    private $basic_characteristic_number_null = false;
    /**
     * <code>.dstore.values.IntegerValue keep_statistics = 4;</code>
     */
    private $keep_statistics = null;
    /**
     * <code>bool keep_statistics_null = 1004;</code>
     */
    private $keep_statistics_null = false;
    /**
     * <code>.dstore.values.StringValue time_unit = 5;</code>
     */
    private $time_unit = null;
    /**
     * <code>bool time_unit_null = 1005;</code>
     */
    private $time_unit_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete = 6;</code>
     */
    private $delete = null;
    /**
     * <code>bool delete_null = 1006;</code>
     */
    private $delete_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\StModifyPeriodsToKeepStatsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue table_name = 1;</code>
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * <code>.dstore.values.StringValue table_name = 1;</code>
     */
    public function setTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->table_name = $var;
    }

    /**
     * <code>bool table_name_null = 1001;</code>
     */
    public function getTableNameNull()
    {
        return $this->table_name_null;
    }

    /**
     * <code>bool table_name_null = 1001;</code>
     */
    public function setTableNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->table_name_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue level_no = 2;</code>
     */
    public function getLevelNo()
    {
        return $this->level_no;
    }

    /**
     * <code>.dstore.values.IntegerValue level_no = 2;</code>
     */
    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->level_no = $var;
    }

    /**
     * <code>bool level_no_null = 1002;</code>
     */
    public function getLevelNoNull()
    {
        return $this->level_no_null;
    }

    /**
     * <code>bool level_no_null = 1002;</code>
     */
    public function setLevelNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->level_no_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_number = 3;</code>
     */
    public function getBasicCharacteristicNumber()
    {
        return $this->basic_characteristic_number;
    }

    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_number = 3;</code>
     */
    public function setBasicCharacteristicNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->basic_characteristic_number = $var;
    }

    /**
     * <code>bool basic_characteristic_number_null = 1003;</code>
     */
    public function getBasicCharacteristicNumberNull()
    {
        return $this->basic_characteristic_number_null;
    }

    /**
     * <code>bool basic_characteristic_number_null = 1003;</code>
     */
    public function setBasicCharacteristicNumberNull($var)
    {
        GPBUtil::checkBool($var);
        $this->basic_characteristic_number_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue keep_statistics = 4;</code>
     */
    public function getKeepStatistics()
    {
        return $this->keep_statistics;
    }

    /**
     * <code>.dstore.values.IntegerValue keep_statistics = 4;</code>
     */
    public function setKeepStatistics(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->keep_statistics = $var;
    }

    /**
     * <code>bool keep_statistics_null = 1004;</code>
     */
    public function getKeepStatisticsNull()
    {
        return $this->keep_statistics_null;
    }

    /**
     * <code>bool keep_statistics_null = 1004;</code>
     */
    public function setKeepStatisticsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->keep_statistics_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue time_unit = 5;</code>
     */
    public function getTimeUnit()
    {
        return $this->time_unit;
    }

    /**
     * <code>.dstore.values.StringValue time_unit = 5;</code>
     */
    public function setTimeUnit(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->time_unit = $var;
    }

    /**
     * <code>bool time_unit_null = 1005;</code>
     */
    public function getTimeUnitNull()
    {
        return $this->time_unit_null;
    }

    /**
     * <code>bool time_unit_null = 1005;</code>
     */
    public function setTimeUnitNull($var)
    {
        GPBUtil::checkBool($var);
        $this->time_unit_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 6;</code>
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 6;</code>
     */
    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete = $var;
    }

    /**
     * <code>bool delete_null = 1006;</code>
     */
    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    /**
     * <code>bool delete_null = 1006;</code>
     */
    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

}

