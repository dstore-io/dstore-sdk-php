<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyBinariesForPersons_Ad.proto

namespace Dstore\Engine\Pm_ModifyBinariesForPersons_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_ModifyBinariesForPersons_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    private $person_id = null;
    /**
     * <code>bool person_id_null = 1001;</code>
     */
    private $person_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue binary_code_id = 2;</code>
     */
    private $binary_code_id = null;
    /**
     * <code>bool binary_code_id_null = 1002;</code>
     */
    private $binary_code_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete = 3;</code>
     */
    private $delete = null;
    /**
     * <code>bool delete_null = 1003;</code>
     */
    private $delete_null = false;
    /**
     * <code>.dstore.values.StringValue binary_description = 4;</code>
     */
    private $binary_description = null;
    /**
     * <code>bool binary_description_null = 1004;</code>
     */
    private $binary_description_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmModifyBinariesForPersonsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_id = $var;
    }

    /**
     * <code>bool person_id_null = 1001;</code>
     */
    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    /**
     * <code>bool person_id_null = 1001;</code>
     */
    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue binary_code_id = 2;</code>
     */
    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    /**
     * <code>.dstore.values.IntegerValue binary_code_id = 2;</code>
     */
    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->binary_code_id = $var;
    }

    /**
     * <code>bool binary_code_id_null = 1002;</code>
     */
    public function getBinaryCodeIdNull()
    {
        return $this->binary_code_id_null;
    }

    /**
     * <code>bool binary_code_id_null = 1002;</code>
     */
    public function setBinaryCodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_code_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 3;</code>
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 3;</code>
     */
    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete = $var;
    }

    /**
     * <code>bool delete_null = 1003;</code>
     */
    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    /**
     * <code>bool delete_null = 1003;</code>
     */
    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue binary_description = 4;</code>
     */
    public function getBinaryDescription()
    {
        return $this->binary_description;
    }

    /**
     * <code>.dstore.values.StringValue binary_description = 4;</code>
     */
    public function setBinaryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->binary_description = $var;
    }

    /**
     * <code>bool binary_description_null = 1004;</code>
     */
    public function getBinaryDescriptionNull()
    {
        return $this->binary_description_null;
    }

    /**
     * <code>bool binary_description_null = 1004;</code>
     */
    public function setBinaryDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_description_null = $var;
    }

}

