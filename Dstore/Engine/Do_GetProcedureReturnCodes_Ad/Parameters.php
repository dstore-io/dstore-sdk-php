<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetProcedureReturnCodes_Ad.proto

namespace Dstore\Engine\Do_GetProcedureReturnCodes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.do_GetProcedureReturnCodes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue procedure_name = 1;</code>
     */
    private $procedure_name = null;
    /**
     * <code>bool procedure_name_null = 1001;</code>
     */
    private $procedure_name_null = false;
    /**
     * <code>.dstore.values.IntegerValue procedure_category_id = 2;</code>
     */
    private $procedure_category_id = null;
    /**
     * <code>bool procedure_category_id_null = 1002;</code>
     */
    private $procedure_category_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue return_code = 3;</code>
     */
    private $return_code = null;
    /**
     * <code>bool return_code_null = 1003;</code>
     */
    private $return_code_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_indirect_return_codes = 4;</code>
     */
    private $include_indirect_return_codes = null;
    /**
     * <code>bool include_indirect_return_codes_null = 1004;</code>
     */
    private $include_indirect_return_codes_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\DoGetProcedureReturnCodesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue procedure_name = 1;</code>
     */
    public function getProcedureName()
    {
        return $this->procedure_name;
    }

    /**
     * <code>.dstore.values.StringValue procedure_name = 1;</code>
     */
    public function setProcedureName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->procedure_name = $var;
    }

    /**
     * <code>bool procedure_name_null = 1001;</code>
     */
    public function getProcedureNameNull()
    {
        return $this->procedure_name_null;
    }

    /**
     * <code>bool procedure_name_null = 1001;</code>
     */
    public function setProcedureNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_name_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue procedure_category_id = 2;</code>
     */
    public function getProcedureCategoryId()
    {
        return $this->procedure_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue procedure_category_id = 2;</code>
     */
    public function setProcedureCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->procedure_category_id = $var;
    }

    /**
     * <code>bool procedure_category_id_null = 1002;</code>
     */
    public function getProcedureCategoryIdNull()
    {
        return $this->procedure_category_id_null;
    }

    /**
     * <code>bool procedure_category_id_null = 1002;</code>
     */
    public function setProcedureCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue return_code = 3;</code>
     */
    public function getReturnCode()
    {
        return $this->return_code;
    }

    /**
     * <code>.dstore.values.IntegerValue return_code = 3;</code>
     */
    public function setReturnCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->return_code = $var;
    }

    /**
     * <code>bool return_code_null = 1003;</code>
     */
    public function getReturnCodeNull()
    {
        return $this->return_code_null;
    }

    /**
     * <code>bool return_code_null = 1003;</code>
     */
    public function setReturnCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->return_code_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_indirect_return_codes = 4;</code>
     */
    public function getIncludeIndirectReturnCodes()
    {
        return $this->include_indirect_return_codes;
    }

    /**
     * <code>.dstore.values.BooleanValue include_indirect_return_codes = 4;</code>
     */
    public function setIncludeIndirectReturnCodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_indirect_return_codes = $var;
    }

    /**
     * <code>bool include_indirect_return_codes_null = 1004;</code>
     */
    public function getIncludeIndirectReturnCodesNull()
    {
        return $this->include_indirect_return_codes_null;
    }

    /**
     * <code>bool include_indirect_return_codes_null = 1004;</code>
     */
    public function setIncludeIndirectReturnCodesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_indirect_return_codes_null = $var;
    }

}

