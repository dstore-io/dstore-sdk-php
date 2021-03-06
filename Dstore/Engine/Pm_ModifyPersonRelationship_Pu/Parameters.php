<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPersonRelationship_Pu.proto

namespace Dstore\Engine\Pm_ModifyPersonRelationship_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_ModifyPersonRelationship_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue person_identification_values = 1;</code>
     */
    private $person_identification_values = null;
    /**
     * <code>bool person_identification_values_null = 1001;</code>
     */
    private $person_identification_values_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_type_id = 2;</code>
     */
    private $person_type_id = null;
    /**
     * <code>bool person_type_id_null = 1002;</code>
     */
    private $person_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue unique_id = 3;</code>
     */
    private $unique_id = null;
    /**
     * <code>bool unique_id_null = 1003;</code>
     */
    private $unique_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue related_person_id = 4;</code>
     */
    private $related_person_id = null;
    /**
     * <code>bool related_person_id_null = 1004;</code>
     */
    private $related_person_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue relationship_id = 5;</code>
     */
    private $relationship_id = null;
    /**
     * <code>bool relationship_id_null = 1005;</code>
     */
    private $relationship_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue access_level = 6;</code>
     */
    private $access_level = null;
    /**
     * <code>bool access_level_null = 1006;</code>
     */
    private $access_level_null = false;
    /**
     * <code>.dstore.values.StringValue related_identification_values = 7;</code>
     */
    private $related_identification_values = null;
    /**
     * <code>bool related_identification_values_null = 1007;</code>
     */
    private $related_identification_values_null = false;
    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 8;</code>
     */
    private $separator_in_ident_vals = null;
    /**
     * <code>bool separator_in_ident_vals_null = 1008;</code>
     */
    private $separator_in_ident_vals_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmModifyPersonRelationshipPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 1;</code>
     */
    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 1;</code>
     */
    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->person_identification_values = $var;
    }

    /**
     * <code>bool person_identification_values_null = 1001;</code>
     */
    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    /**
     * <code>bool person_identification_values_null = 1001;</code>
     */
    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 2;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 2;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

    /**
     * <code>bool person_type_id_null = 1002;</code>
     */
    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    /**
     * <code>bool person_type_id_null = 1002;</code>
     */
    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 3;</code>
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 3;</code>
     */
    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->unique_id = $var;
    }

    /**
     * <code>bool unique_id_null = 1003;</code>
     */
    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    /**
     * <code>bool unique_id_null = 1003;</code>
     */
    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue related_person_id = 4;</code>
     */
    public function getRelatedPersonId()
    {
        return $this->related_person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue related_person_id = 4;</code>
     */
    public function setRelatedPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->related_person_id = $var;
    }

    /**
     * <code>bool related_person_id_null = 1004;</code>
     */
    public function getRelatedPersonIdNull()
    {
        return $this->related_person_id_null;
    }

    /**
     * <code>bool related_person_id_null = 1004;</code>
     */
    public function setRelatedPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->related_person_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue relationship_id = 5;</code>
     */
    public function getRelationshipId()
    {
        return $this->relationship_id;
    }

    /**
     * <code>.dstore.values.IntegerValue relationship_id = 5;</code>
     */
    public function setRelationshipId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->relationship_id = $var;
    }

    /**
     * <code>bool relationship_id_null = 1005;</code>
     */
    public function getRelationshipIdNull()
    {
        return $this->relationship_id_null;
    }

    /**
     * <code>bool relationship_id_null = 1005;</code>
     */
    public function setRelationshipIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->relationship_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue access_level = 6;</code>
     */
    public function getAccessLevel()
    {
        return $this->access_level;
    }

    /**
     * <code>.dstore.values.IntegerValue access_level = 6;</code>
     */
    public function setAccessLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->access_level = $var;
    }

    /**
     * <code>bool access_level_null = 1006;</code>
     */
    public function getAccessLevelNull()
    {
        return $this->access_level_null;
    }

    /**
     * <code>bool access_level_null = 1006;</code>
     */
    public function setAccessLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->access_level_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue related_identification_values = 7;</code>
     */
    public function getRelatedIdentificationValues()
    {
        return $this->related_identification_values;
    }

    /**
     * <code>.dstore.values.StringValue related_identification_values = 7;</code>
     */
    public function setRelatedIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->related_identification_values = $var;
    }

    /**
     * <code>bool related_identification_values_null = 1007;</code>
     */
    public function getRelatedIdentificationValuesNull()
    {
        return $this->related_identification_values_null;
    }

    /**
     * <code>bool related_identification_values_null = 1007;</code>
     */
    public function setRelatedIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->related_identification_values_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 8;</code>
     */
    public function getSeparatorInIdentVals()
    {
        return $this->separator_in_ident_vals;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 8;</code>
     */
    public function setSeparatorInIdentVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->separator_in_ident_vals = $var;
    }

    /**
     * <code>bool separator_in_ident_vals_null = 1008;</code>
     */
    public function getSeparatorInIdentValsNull()
    {
        return $this->separator_in_ident_vals_null;
    }

    /**
     * <code>bool separator_in_ident_vals_null = 1008;</code>
     */
    public function setSeparatorInIdentValsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_ident_vals_null = $var;
    }

}

