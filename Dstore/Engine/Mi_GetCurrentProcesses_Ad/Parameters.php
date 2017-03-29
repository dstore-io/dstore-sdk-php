<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetCurrentProcesses_Ad.proto

namespace Dstore\Engine\Mi_GetCurrentProcesses_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetCurrentProcesses_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue server_process_id = 1;</code>
     */
    private $server_process_id = null;
    /**
     * <code>bool server_process_id_null = 1001;</code>
     */
    private $server_process_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetCurrentProcessesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue server_process_id = 1;</code>
     */
    public function getServerProcessId()
    {
        return $this->server_process_id;
    }

    /**
     * <code>.dstore.values.IntegerValue server_process_id = 1;</code>
     */
    public function setServerProcessId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->server_process_id = $var;
    }

    /**
     * <code>bool server_process_id_null = 1001;</code>
     */
    public function getServerProcessIdNull()
    {
        return $this->server_process_id_null;
    }

    /**
     * <code>bool server_process_id_null = 1001;</code>
     */
    public function setServerProcessIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->server_process_id_null = $var;
    }

}
