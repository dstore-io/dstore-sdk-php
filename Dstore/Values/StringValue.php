<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/values.proto

namespace Dstore\Values;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.values.StringValue</code>
 */
class StringValue extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string value = 1;</code>
     */
    private $value = '';

    public function __construct() {
        \GPBMetadata\Dstore\Values::initOnce();
        parent::__construct();
    }

    /**
     * <code>string value = 1;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <code>string value = 1;</code>
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;
    }

}
