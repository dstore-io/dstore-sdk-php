<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetDirectSuccessors_Tree_Ad.proto

namespace Dstore\Engine\St_GetDirectSuccessors_Tree_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.st_GetDirectSuccessors_Tree_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue h_tree_node_id = 1;</code>
     */
    private $h_tree_node_id = null;
    /**
     * <code>bool h_tree_node_id_null = 1001;</code>
     */
    private $h_tree_node_id_null = false;
    /**
     * <code>.dstore.values.TimestampValue from_date = 2;</code>
     */
    private $from_date = null;
    /**
     * <code>bool from_date_null = 1002;</code>
     */
    private $from_date_null = false;
    /**
     * <code>.dstore.values.TimestampValue to_date = 3;</code>
     */
    private $to_date = null;
    /**
     * <code>bool to_date_null = 1003;</code>
     */
    private $to_date_null = false;
    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_no1 = 4;</code>
     */
    private $basic_characteristic_no1 = null;
    /**
     * <code>bool basic_characteristic_no1_null = 1004;</code>
     */
    private $basic_characteristic_no1_null = false;
    /**
     * <code>.dstore.values.DecimalValue weight_basic_characteristic_no1 = 5;</code>
     */
    private $weight_basic_characteristic_no1 = null;
    /**
     * <code>bool weight_basic_characteristic_no1_null = 1005;</code>
     */
    private $weight_basic_characteristic_no1_null = false;
    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_no2 = 6;</code>
     */
    private $basic_characteristic_no2 = null;
    /**
     * <code>bool basic_characteristic_no2_null = 1006;</code>
     */
    private $basic_characteristic_no2_null = false;
    /**
     * <code>.dstore.values.DecimalValue weight_basic_characteristic_no2 = 7;</code>
     */
    private $weight_basic_characteristic_no2 = null;
    /**
     * <code>bool weight_basic_characteristic_no2_null = 1007;</code>
     */
    private $weight_basic_characteristic_no2_null = false;
    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_no3 = 8;</code>
     */
    private $basic_characteristic_no3 = null;
    /**
     * <code>bool basic_characteristic_no3_null = 1008;</code>
     */
    private $basic_characteristic_no3_null = false;
    /**
     * <code>.dstore.values.DecimalValue weight_basic_characteristic_no3 = 9;</code>
     */
    private $weight_basic_characteristic_no3 = null;
    /**
     * <code>bool weight_basic_characteristic_no3_null = 1009;</code>
     */
    private $weight_basic_characteristic_no3_null = false;
    /**
     * <code>.dstore.values.IntegerValue source_table_for_statistics = 10;</code>
     */
    private $source_table_for_statistics = null;
    /**
     * <code>bool source_table_for_statistics_null = 1010;</code>
     */
    private $source_table_for_statistics_null = false;
    /**
     * <code>.dstore.values.BooleanValue display_only_active = 11;</code>
     */
    private $display_only_active = null;
    /**
     * <code>bool display_only_active_null = 1011;</code>
     */
    private $display_only_active_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\StGetDirectSuccessorsTreeAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue h_tree_node_id = 1;</code>
     */
    public function getHTreeNodeId()
    {
        return $this->h_tree_node_id;
    }

    /**
     * <code>.dstore.values.IntegerValue h_tree_node_id = 1;</code>
     */
    public function setHTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->h_tree_node_id = $var;
    }

    /**
     * <code>bool h_tree_node_id_null = 1001;</code>
     */
    public function getHTreeNodeIdNull()
    {
        return $this->h_tree_node_id_null;
    }

    /**
     * <code>bool h_tree_node_id_null = 1001;</code>
     */
    public function setHTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->h_tree_node_id_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date = 2;</code>
     */
    public function getFromDate()
    {
        return $this->from_date;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date = 2;</code>
     */
    public function setFromDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->from_date = $var;
    }

    /**
     * <code>bool from_date_null = 1002;</code>
     */
    public function getFromDateNull()
    {
        return $this->from_date_null;
    }

    /**
     * <code>bool from_date_null = 1002;</code>
     */
    public function setFromDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_date_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date = 3;</code>
     */
    public function getToDate()
    {
        return $this->to_date;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date = 3;</code>
     */
    public function setToDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->to_date = $var;
    }

    /**
     * <code>bool to_date_null = 1003;</code>
     */
    public function getToDateNull()
    {
        return $this->to_date_null;
    }

    /**
     * <code>bool to_date_null = 1003;</code>
     */
    public function setToDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_date_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_no1 = 4;</code>
     */
    public function getBasicCharacteristicNo1()
    {
        return $this->basic_characteristic_no1;
    }

    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_no1 = 4;</code>
     */
    public function setBasicCharacteristicNo1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->basic_characteristic_no1 = $var;
    }

    /**
     * <code>bool basic_characteristic_no1_null = 1004;</code>
     */
    public function getBasicCharacteristicNo1Null()
    {
        return $this->basic_characteristic_no1_null;
    }

    /**
     * <code>bool basic_characteristic_no1_null = 1004;</code>
     */
    public function setBasicCharacteristicNo1Null($var)
    {
        GPBUtil::checkBool($var);
        $this->basic_characteristic_no1_null = $var;
    }

    /**
     * <code>.dstore.values.DecimalValue weight_basic_characteristic_no1 = 5;</code>
     */
    public function getWeightBasicCharacteristicNo1()
    {
        return $this->weight_basic_characteristic_no1;
    }

    /**
     * <code>.dstore.values.DecimalValue weight_basic_characteristic_no1 = 5;</code>
     */
    public function setWeightBasicCharacteristicNo1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->weight_basic_characteristic_no1 = $var;
    }

    /**
     * <code>bool weight_basic_characteristic_no1_null = 1005;</code>
     */
    public function getWeightBasicCharacteristicNo1Null()
    {
        return $this->weight_basic_characteristic_no1_null;
    }

    /**
     * <code>bool weight_basic_characteristic_no1_null = 1005;</code>
     */
    public function setWeightBasicCharacteristicNo1Null($var)
    {
        GPBUtil::checkBool($var);
        $this->weight_basic_characteristic_no1_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_no2 = 6;</code>
     */
    public function getBasicCharacteristicNo2()
    {
        return $this->basic_characteristic_no2;
    }

    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_no2 = 6;</code>
     */
    public function setBasicCharacteristicNo2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->basic_characteristic_no2 = $var;
    }

    /**
     * <code>bool basic_characteristic_no2_null = 1006;</code>
     */
    public function getBasicCharacteristicNo2Null()
    {
        return $this->basic_characteristic_no2_null;
    }

    /**
     * <code>bool basic_characteristic_no2_null = 1006;</code>
     */
    public function setBasicCharacteristicNo2Null($var)
    {
        GPBUtil::checkBool($var);
        $this->basic_characteristic_no2_null = $var;
    }

    /**
     * <code>.dstore.values.DecimalValue weight_basic_characteristic_no2 = 7;</code>
     */
    public function getWeightBasicCharacteristicNo2()
    {
        return $this->weight_basic_characteristic_no2;
    }

    /**
     * <code>.dstore.values.DecimalValue weight_basic_characteristic_no2 = 7;</code>
     */
    public function setWeightBasicCharacteristicNo2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->weight_basic_characteristic_no2 = $var;
    }

    /**
     * <code>bool weight_basic_characteristic_no2_null = 1007;</code>
     */
    public function getWeightBasicCharacteristicNo2Null()
    {
        return $this->weight_basic_characteristic_no2_null;
    }

    /**
     * <code>bool weight_basic_characteristic_no2_null = 1007;</code>
     */
    public function setWeightBasicCharacteristicNo2Null($var)
    {
        GPBUtil::checkBool($var);
        $this->weight_basic_characteristic_no2_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_no3 = 8;</code>
     */
    public function getBasicCharacteristicNo3()
    {
        return $this->basic_characteristic_no3;
    }

    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_no3 = 8;</code>
     */
    public function setBasicCharacteristicNo3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->basic_characteristic_no3 = $var;
    }

    /**
     * <code>bool basic_characteristic_no3_null = 1008;</code>
     */
    public function getBasicCharacteristicNo3Null()
    {
        return $this->basic_characteristic_no3_null;
    }

    /**
     * <code>bool basic_characteristic_no3_null = 1008;</code>
     */
    public function setBasicCharacteristicNo3Null($var)
    {
        GPBUtil::checkBool($var);
        $this->basic_characteristic_no3_null = $var;
    }

    /**
     * <code>.dstore.values.DecimalValue weight_basic_characteristic_no3 = 9;</code>
     */
    public function getWeightBasicCharacteristicNo3()
    {
        return $this->weight_basic_characteristic_no3;
    }

    /**
     * <code>.dstore.values.DecimalValue weight_basic_characteristic_no3 = 9;</code>
     */
    public function setWeightBasicCharacteristicNo3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->weight_basic_characteristic_no3 = $var;
    }

    /**
     * <code>bool weight_basic_characteristic_no3_null = 1009;</code>
     */
    public function getWeightBasicCharacteristicNo3Null()
    {
        return $this->weight_basic_characteristic_no3_null;
    }

    /**
     * <code>bool weight_basic_characteristic_no3_null = 1009;</code>
     */
    public function setWeightBasicCharacteristicNo3Null($var)
    {
        GPBUtil::checkBool($var);
        $this->weight_basic_characteristic_no3_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue source_table_for_statistics = 10;</code>
     */
    public function getSourceTableForStatistics()
    {
        return $this->source_table_for_statistics;
    }

    /**
     * <code>.dstore.values.IntegerValue source_table_for_statistics = 10;</code>
     */
    public function setSourceTableForStatistics(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->source_table_for_statistics = $var;
    }

    /**
     * <code>bool source_table_for_statistics_null = 1010;</code>
     */
    public function getSourceTableForStatisticsNull()
    {
        return $this->source_table_for_statistics_null;
    }

    /**
     * <code>bool source_table_for_statistics_null = 1010;</code>
     */
    public function setSourceTableForStatisticsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->source_table_for_statistics_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue display_only_active = 11;</code>
     */
    public function getDisplayOnlyActive()
    {
        return $this->display_only_active;
    }

    /**
     * <code>.dstore.values.BooleanValue display_only_active = 11;</code>
     */
    public function setDisplayOnlyActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->display_only_active = $var;
    }

    /**
     * <code>bool display_only_active_null = 1011;</code>
     */
    public function getDisplayOnlyActiveNull()
    {
        return $this->display_only_active_null;
    }

    /**
     * <code>bool display_only_active_null = 1011;</code>
     */
    public function setDisplayOnlyActiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->display_only_active_null = $var;
    }

}
