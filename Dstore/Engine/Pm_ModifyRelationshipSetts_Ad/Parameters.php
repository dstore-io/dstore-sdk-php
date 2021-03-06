<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyRelationshipSetts_Ad.proto

namespace Dstore\Engine\Pm_ModifyRelationshipSetts_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_ModifyRelationshipSetts_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue relationship_id = 1;</code>
     */
    private $relationship_id = null;
    /**
     * <code>bool relationship_id_null = 1001;</code>
     */
    private $relationship_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue from_person_type_id = 2;</code>
     */
    private $from_person_type_id = null;
    /**
     * <code>bool from_person_type_id_null = 1002;</code>
     */
    private $from_person_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue to_person_type_id = 3;</code>
     */
    private $to_person_type_id = null;
    /**
     * <code>bool to_person_type_id_null = 1003;</code>
     */
    private $to_person_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue key_variable = 4;</code>
     */
    private $key_variable = null;
    /**
     * <code>bool key_variable_null = 1004;</code>
     */
    private $key_variable_null = false;
    /**
     * <code>.dstore.values.StringValue value = 5;</code>
     */
    private $value = null;
    /**
     * <code>bool value_null = 1005;</code>
     */
    private $value_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmModifyRelationshipSettsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue relationship_id = 1;</code>
     */
    public function getRelationshipId()
    {
        return $this->relationship_id;
    }

    /**
     * <code>.dstore.values.IntegerValue relationship_id = 1;</code>
     */
    public function setRelationshipId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->relationship_id = $var;
    }

    /**
     * <code>bool relationship_id_null = 1001;</code>
     */
    public function getRelationshipIdNull()
    {
        return $this->relationship_id_null;
    }

    /**
     * <code>bool relationship_id_null = 1001;</code>
     */
    public function setRelationshipIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->relationship_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue from_person_type_id = 2;</code>
     */
    public function getFromPersonTypeId()
    {
        return $this->from_person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue from_person_type_id = 2;</code>
     */
    public function setFromPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->from_person_type_id = $var;
    }

    /**
     * <code>bool from_person_type_id_null = 1002;</code>
     */
    public function getFromPersonTypeIdNull()
    {
        return $this->from_person_type_id_null;
    }

    /**
     * <code>bool from_person_type_id_null = 1002;</code>
     */
    public function setFromPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue to_person_type_id = 3;</code>
     */
    public function getToPersonTypeId()
    {
        return $this->to_person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue to_person_type_id = 3;</code>
     */
    public function setToPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->to_person_type_id = $var;
    }

    /**
     * <code>bool to_person_type_id_null = 1003;</code>
     */
    public function getToPersonTypeIdNull()
    {
        return $this->to_person_type_id_null;
    }

    /**
     * <code>bool to_person_type_id_null = 1003;</code>
     */
    public function setToPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue key_variable = 4;</code>
     */
    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    /**
     * <code>.dstore.values.StringValue key_variable = 4;</code>
     */
    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->key_variable = $var;
    }

    /**
     * <code>bool key_variable_null = 1004;</code>
     */
    public function getKeyVariableNull()
    {
        return $this->key_variable_null;
    }

    /**
     * <code>bool key_variable_null = 1004;</code>
     */
    public function setKeyVariableNull($var)
    {
        GPBUtil::checkBool($var);
        $this->key_variable_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue value = 5;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <code>.dstore.values.StringValue value = 5;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <code>bool value_null = 1005;</code>
     */
    public function getValueNull()
    {
        return $this->value_null;
    }

    /**
     * <code>bool value_null = 1005;</code>
     */
    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
    }

}

