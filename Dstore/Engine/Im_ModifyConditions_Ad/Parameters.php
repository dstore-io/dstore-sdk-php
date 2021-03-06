<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyConditions_Ad.proto

namespace Dstore\Engine\Im_ModifyConditions_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_ModifyConditions_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue condition_id = 1;</code>
     */
    private $condition_id = null;
    /**
     * <code>bool condition_id_null = 1001;</code>
     */
    private $condition_id_null = false;
    /**
     * <code>.dstore.values.StringValue condition_description = 2;</code>
     */
    private $condition_description = null;
    /**
     * <code>bool condition_description_null = 1002;</code>
     */
    private $condition_description_null = false;
    /**
     * <code>.dstore.values.BooleanValue combine_groups_with_a_n_d_operator = 3;</code>
     */
    private $combine_groups_with_a_n_d_operator = null;
    /**
     * <code>bool combine_groups_with_a_n_d_operator_null = 1003;</code>
     */
    private $combine_groups_with_a_n_d_operator_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_condition = 4;</code>
     */
    private $delete_condition = null;
    /**
     * <code>bool delete_condition_null = 1004;</code>
     */
    private $delete_condition_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImModifyConditionsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue condition_id = 1;</code>
     */
    public function getConditionId()
    {
        return $this->condition_id;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_id = 1;</code>
     */
    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_id = $var;
    }

    /**
     * <code>bool condition_id_null = 1001;</code>
     */
    public function getConditionIdNull()
    {
        return $this->condition_id_null;
    }

    /**
     * <code>bool condition_id_null = 1001;</code>
     */
    public function setConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue condition_description = 2;</code>
     */
    public function getConditionDescription()
    {
        return $this->condition_description;
    }

    /**
     * <code>.dstore.values.StringValue condition_description = 2;</code>
     */
    public function setConditionDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->condition_description = $var;
    }

    /**
     * <code>bool condition_description_null = 1002;</code>
     */
    public function getConditionDescriptionNull()
    {
        return $this->condition_description_null;
    }

    /**
     * <code>bool condition_description_null = 1002;</code>
     */
    public function setConditionDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_description_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue combine_groups_with_a_n_d_operator = 3;</code>
     */
    public function getCombineGroupsWithANDOperator()
    {
        return $this->combine_groups_with_a_n_d_operator;
    }

    /**
     * <code>.dstore.values.BooleanValue combine_groups_with_a_n_d_operator = 3;</code>
     */
    public function setCombineGroupsWithANDOperator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->combine_groups_with_a_n_d_operator = $var;
    }

    /**
     * <code>bool combine_groups_with_a_n_d_operator_null = 1003;</code>
     */
    public function getCombineGroupsWithANDOperatorNull()
    {
        return $this->combine_groups_with_a_n_d_operator_null;
    }

    /**
     * <code>bool combine_groups_with_a_n_d_operator_null = 1003;</code>
     */
    public function setCombineGroupsWithANDOperatorNull($var)
    {
        GPBUtil::checkBool($var);
        $this->combine_groups_with_a_n_d_operator_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_condition = 4;</code>
     */
    public function getDeleteCondition()
    {
        return $this->delete_condition;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_condition = 4;</code>
     */
    public function setDeleteCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_condition = $var;
    }

    /**
     * <code>bool delete_condition_null = 1004;</code>
     */
    public function getDeleteConditionNull()
    {
        return $this->delete_condition_null;
    }

    /**
     * <code>bool delete_condition_null = 1004;</code>
     */
    public function setDeleteConditionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_condition_null = $var;
    }

}

