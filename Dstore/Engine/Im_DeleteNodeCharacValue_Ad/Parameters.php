<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_DeleteNodeCharacValue_Ad.proto

namespace Dstore\Engine\Im_DeleteNodeCharacValue_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_DeleteNodeCharacValue_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue value_id = 1;</code>
     */
    private $value_id = null;
    /**
     * <code>bool value_id_null = 1001;</code>
     */
    private $value_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImDeleteNodeCharacValueAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue value_id = 1;</code>
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * <code>.dstore.values.IntegerValue value_id = 1;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

    /**
     * <code>bool value_id_null = 1001;</code>
     */
    public function getValueIdNull()
    {
        return $this->value_id_null;
    }

    /**
     * <code>bool value_id_null = 1001;</code>
     */
    public function setValueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_id_null = $var;
    }

}
