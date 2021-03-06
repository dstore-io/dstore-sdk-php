<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyConditionGroups_Ad.proto

namespace Dstore\Engine\Im_ModifyConditionGroups_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_ModifyConditionGroups_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue condition_group_id = 1;</code>
     */
    private $condition_group_id = null;
    /**
     * <code>bool condition_group_id_null = 1001;</code>
     */
    private $condition_group_id_null = false;
    /**
     * <code>.dstore.values.StringValue condition_group_description = 2;</code>
     */
    private $condition_group_description = null;
    /**
     * <code>bool condition_group_description_null = 1002;</code>
     */
    private $condition_group_description_null = false;
    /**
     * <code>.dstore.values.BooleanValue combine_parts_with_a_n_d_operator = 3;</code>
     */
    private $combine_parts_with_a_n_d_operator = null;
    /**
     * <code>bool combine_parts_with_a_n_d_operator_null = 1003;</code>
     */
    private $combine_parts_with_a_n_d_operator_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_condition_group = 4;</code>
     */
    private $delete_condition_group = null;
    /**
     * <code>bool delete_condition_group_null = 1004;</code>
     */
    private $delete_condition_group_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImModifyConditionGroupsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue condition_group_id = 1;</code>
     */
    public function getConditionGroupId()
    {
        return $this->condition_group_id;
    }

    /**
     * <code>.dstore.values.IntegerValue condition_group_id = 1;</code>
     */
    public function setConditionGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_group_id = $var;
    }

    /**
     * <code>bool condition_group_id_null = 1001;</code>
     */
    public function getConditionGroupIdNull()
    {
        return $this->condition_group_id_null;
    }

    /**
     * <code>bool condition_group_id_null = 1001;</code>
     */
    public function setConditionGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_group_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue condition_group_description = 2;</code>
     */
    public function getConditionGroupDescription()
    {
        return $this->condition_group_description;
    }

    /**
     * <code>.dstore.values.StringValue condition_group_description = 2;</code>
     */
    public function setConditionGroupDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->condition_group_description = $var;
    }

    /**
     * <code>bool condition_group_description_null = 1002;</code>
     */
    public function getConditionGroupDescriptionNull()
    {
        return $this->condition_group_description_null;
    }

    /**
     * <code>bool condition_group_description_null = 1002;</code>
     */
    public function setConditionGroupDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_group_description_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue combine_parts_with_a_n_d_operator = 3;</code>
     */
    public function getCombinePartsWithANDOperator()
    {
        return $this->combine_parts_with_a_n_d_operator;
    }

    /**
     * <code>.dstore.values.BooleanValue combine_parts_with_a_n_d_operator = 3;</code>
     */
    public function setCombinePartsWithANDOperator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->combine_parts_with_a_n_d_operator = $var;
    }

    /**
     * <code>bool combine_parts_with_a_n_d_operator_null = 1003;</code>
     */
    public function getCombinePartsWithANDOperatorNull()
    {
        return $this->combine_parts_with_a_n_d_operator_null;
    }

    /**
     * <code>bool combine_parts_with_a_n_d_operator_null = 1003;</code>
     */
    public function setCombinePartsWithANDOperatorNull($var)
    {
        GPBUtil::checkBool($var);
        $this->combine_parts_with_a_n_d_operator_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_condition_group = 4;</code>
     */
    public function getDeleteConditionGroup()
    {
        return $this->delete_condition_group;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_condition_group = 4;</code>
     */
    public function setDeleteConditionGroup(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_condition_group = $var;
    }

    /**
     * <code>bool delete_condition_group_null = 1004;</code>
     */
    public function getDeleteConditionGroupNull()
    {
        return $this->delete_condition_group_null;
    }

    /**
     * <code>bool delete_condition_group_null = 1004;</code>
     */
    public function setDeleteConditionGroupNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_condition_group_null = $var;
    }

}

