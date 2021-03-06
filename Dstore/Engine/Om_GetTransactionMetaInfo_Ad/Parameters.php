<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetTransactionMetaInfo_Ad.proto

namespace Dstore\Engine\Om_GetTransactionMetaInfo_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetTransactionMetaInfo_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue transaction_id = 1;</code>
     */
    private $transaction_id = null;
    /**
     * <code>bool transaction_id_null = 1001;</code>
     */
    private $transaction_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetTransactionMetaInfoAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue transaction_id = 1;</code>
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * <code>.dstore.values.IntegerValue transaction_id = 1;</code>
     */
    public function setTransactionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->transaction_id = $var;
    }

    /**
     * <code>bool transaction_id_null = 1001;</code>
     */
    public function getTransactionIdNull()
    {
        return $this->transaction_id_null;
    }

    /**
     * <code>bool transaction_id_null = 1001;</code>
     */
    public function setTransactionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->transaction_id_null = $var;
    }

}

