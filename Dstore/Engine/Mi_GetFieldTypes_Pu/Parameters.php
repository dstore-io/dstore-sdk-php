<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetFieldTypes_Pu.proto

namespace Dstore\Engine\Mi_GetFieldTypes_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetFieldTypes_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue field_type_id = 1;</code>
     */
    private $field_type_id = null;
    /**
     * <code>bool field_type_id_null = 1001;</code>
     */
    private $field_type_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetFieldTypesPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue field_type_id = 1;</code>
     */
    public function getFieldTypeId()
    {
        return $this->field_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue field_type_id = 1;</code>
     */
    public function setFieldTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->field_type_id = $var;
    }

    /**
     * <code>bool field_type_id_null = 1001;</code>
     */
    public function getFieldTypeIdNull()
    {
        return $this->field_type_id_null;
    }

    /**
     * <code>bool field_type_id_null = 1001;</code>
     */
    public function setFieldTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->field_type_id_null = $var;
    }

}
