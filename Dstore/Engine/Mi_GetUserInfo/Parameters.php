<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetUserInfo.proto

namespace Dstore\Engine\Mi_GetUserInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetUserInfo.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue user_id = 1;</code>
     */
    private $user_id = null;
    /**
     * <code>bool user_id_null = 1001;</code>
     */
    private $user_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue select_result = 2;</code>
     */
    private $select_result = null;
    /**
     * <code>bool select_result_null = 1002;</code>
     */
    private $select_result_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetUserInfo::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue user_id = 1;</code>
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * <code>.dstore.values.IntegerValue user_id = 1;</code>
     */
    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->user_id = $var;
    }

    /**
     * <code>bool user_id_null = 1001;</code>
     */
    public function getUserIdNull()
    {
        return $this->user_id_null;
    }

    /**
     * <code>bool user_id_null = 1001;</code>
     */
    public function setUserIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue select_result = 2;</code>
     */
    public function getSelectResult()
    {
        return $this->select_result;
    }

    /**
     * <code>.dstore.values.BooleanValue select_result = 2;</code>
     */
    public function setSelectResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->select_result = $var;
    }

    /**
     * <code>bool select_result_null = 1002;</code>
     */
    public function getSelectResultNull()
    {
        return $this->select_result_null;
    }

    /**
     * <code>bool select_result_null = 1002;</code>
     */
    public function setSelectResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->select_result_null = $var;
    }

}

