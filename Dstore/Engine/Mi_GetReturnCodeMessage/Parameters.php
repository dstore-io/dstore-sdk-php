<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetReturnCodeMessage.proto

namespace Dstore\Engine\Mi_GetReturnCodeMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetReturnCodeMessage.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue return_code = 1;</code>
     */
    private $return_code = null;
    /**
     * <code>bool return_code_null = 1001;</code>
     */
    private $return_code_null = false;
    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    private $language_id = null;
    /**
     * <code>bool language_id_null = 1002;</code>
     */
    private $language_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetReturnCodeMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue return_code = 1;</code>
     */
    public function getReturnCode()
    {
        return $this->return_code;
    }

    /**
     * <code>.dstore.values.IntegerValue return_code = 1;</code>
     */
    public function setReturnCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->return_code = $var;
    }

    /**
     * <code>bool return_code_null = 1001;</code>
     */
    public function getReturnCodeNull()
    {
        return $this->return_code_null;
    }

    /**
     * <code>bool return_code_null = 1001;</code>
     */
    public function setReturnCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->return_code_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

    /**
     * <code>bool language_id_null = 1002;</code>
     */
    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    /**
     * <code>bool language_id_null = 1002;</code>
     */
    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

}
