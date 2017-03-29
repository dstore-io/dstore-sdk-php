<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyTRITriggerConds_Ad.proto

namespace Dstore\Engine\Mi_ModifyTRITriggerConds_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_ModifyTRITriggerConds_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue trigger_id = 1;</code>
     */
    private $trigger_id = null;
    /**
     * <code>bool trigger_id_null = 1001;</code>
     */
    private $trigger_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue work_step_no = 2;</code>
     */
    private $work_step_no = null;
    /**
     * <code>bool work_step_no_null = 1002;</code>
     */
    private $work_step_no_null = false;
    /**
     * <code>.dstore.values.IntegerValue condition_number = 3;</code>
     */
    private $condition_number = null;
    /**
     * <code>bool condition_number_null = 1003;</code>
     */
    private $condition_number_null = false;
    /**
     * <code>.dstore.values.StringValue str_to_compare = 4;</code>
     */
    private $str_to_compare = null;
    /**
     * <code>bool str_to_compare_null = 1004;</code>
     */
    private $str_to_compare_null = false;
    /**
     * <code>.dstore.values.StringValue operator = 5;</code>
     */
    private $operator = null;
    /**
     * <code>bool operator_null = 1005;</code>
     */
    private $operator_null = false;
    /**
     * <code>.dstore.values.StringValue condition = 6;</code>
     */
    private $condition = null;
    /**
     * <code>bool condition_null = 1006;</code>
     */
    private $condition_null = false;
    /**
     * <code>.dstore.values.BooleanValue negate_condition = 7;</code>
     */
    private $negate_condition = null;
    /**
     * <code>bool negate_condition_null = 1007;</code>
     */
    private $negate_condition_null = false;
    /**
     * <code>.dstore.values.BooleanValue check_each_affected_id = 8;</code>
     */
    private $check_each_affected_id = null;
    /**
     * <code>bool check_each_affected_id_null = 1008;</code>
     */
    private $check_each_affected_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_condition = 9;</code>
     */
    private $delete_condition = null;
    /**
     * <code>bool delete_condition_null = 1009;</code>
     */
    private $delete_condition_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiModifyTRITriggerCondsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue trigger_id = 1;</code>
     */
    public function getTriggerId()
    {
        return $this->trigger_id;
    }

    /**
     * <code>.dstore.values.IntegerValue trigger_id = 1;</code>
     */
    public function setTriggerId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->trigger_id = $var;
    }

    /**
     * <code>bool trigger_id_null = 1001;</code>
     */
    public function getTriggerIdNull()
    {
        return $this->trigger_id_null;
    }

    /**
     * <code>bool trigger_id_null = 1001;</code>
     */
    public function setTriggerIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->trigger_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue work_step_no = 2;</code>
     */
    public function getWorkStepNo()
    {
        return $this->work_step_no;
    }

    /**
     * <code>.dstore.values.IntegerValue work_step_no = 2;</code>
     */
    public function setWorkStepNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->work_step_no = $var;
    }

    /**
     * <code>bool work_step_no_null = 1002;</code>
     */
    public function getWorkStepNoNull()
    {
        return $this->work_step_no_null;
    }

    /**
     * <code>bool work_step_no_null = 1002;</code>
     */
    public function setWorkStepNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->work_step_no_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_number = 3;</code>
     */
    public function getConditionNumber()
    {
        return $this->condition_number;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_number = 3;</code>
     */
    public function setConditionNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_number = $var;
    }

    /**
     * <code>bool condition_number_null = 1003;</code>
     */
    public function getConditionNumberNull()
    {
        return $this->condition_number_null;
    }

    /**
     * <code>bool condition_number_null = 1003;</code>
     */
    public function setConditionNumberNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_number_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue str_to_compare = 4;</code>
     */
    public function getStrToCompare()
    {
        return $this->str_to_compare;
    }

    /**
     * <code>.dstore.values.StringValue str_to_compare = 4;</code>
     */
    public function setStrToCompare(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->str_to_compare = $var;
    }

    /**
     * <code>bool str_to_compare_null = 1004;</code>
     */
    public function getStrToCompareNull()
    {
        return $this->str_to_compare_null;
    }

    /**
     * <code>bool str_to_compare_null = 1004;</code>
     */
    public function setStrToCompareNull($var)
    {
        GPBUtil::checkBool($var);
        $this->str_to_compare_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue operator = 5;</code>
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * <code>.dstore.values.StringValue operator = 5;</code>
     */
    public function setOperator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->operator = $var;
    }

    /**
     * <code>bool operator_null = 1005;</code>
     */
    public function getOperatorNull()
    {
        return $this->operator_null;
    }

    /**
     * <code>bool operator_null = 1005;</code>
     */
    public function setOperatorNull($var)
    {
        GPBUtil::checkBool($var);
        $this->operator_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue condition = 6;</code>
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * <code>.dstore.values.StringValue condition = 6;</code>
     */
    public function setCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->condition = $var;
    }

    /**
     * <code>bool condition_null = 1006;</code>
     */
    public function getConditionNull()
    {
        return $this->condition_null;
    }

    /**
     * <code>bool condition_null = 1006;</code>
     */
    public function setConditionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue negate_condition = 7;</code>
     */
    public function getNegateCondition()
    {
        return $this->negate_condition;
    }

    /**
     * <code>.dstore.values.BooleanValue negate_condition = 7;</code>
     */
    public function setNegateCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->negate_condition = $var;
    }

    /**
     * <code>bool negate_condition_null = 1007;</code>
     */
    public function getNegateConditionNull()
    {
        return $this->negate_condition_null;
    }

    /**
     * <code>bool negate_condition_null = 1007;</code>
     */
    public function setNegateConditionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->negate_condition_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue check_each_affected_id = 8;</code>
     */
    public function getCheckEachAffectedId()
    {
        return $this->check_each_affected_id;
    }

    /**
     * <code>.dstore.values.BooleanValue check_each_affected_id = 8;</code>
     */
    public function setCheckEachAffectedId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->check_each_affected_id = $var;
    }

    /**
     * <code>bool check_each_affected_id_null = 1008;</code>
     */
    public function getCheckEachAffectedIdNull()
    {
        return $this->check_each_affected_id_null;
    }

    /**
     * <code>bool check_each_affected_id_null = 1008;</code>
     */
    public function setCheckEachAffectedIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_each_affected_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_condition = 9;</code>
     */
    public function getDeleteCondition()
    {
        return $this->delete_condition;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_condition = 9;</code>
     */
    public function setDeleteCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_condition = $var;
    }

    /**
     * <code>bool delete_condition_null = 1009;</code>
     */
    public function getDeleteConditionNull()
    {
        return $this->delete_condition_null;
    }

    /**
     * <code>bool delete_condition_null = 1009;</code>
     */
    public function setDeleteConditionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_condition_null = $var;
    }

}
