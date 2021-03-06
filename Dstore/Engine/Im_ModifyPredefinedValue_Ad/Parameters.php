<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyPredefinedValue_Ad.proto

namespace Dstore\Engine\Im_ModifyPredefinedValue_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_ModifyPredefinedValue_Ad.Parameters</code>
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
    /**
     * <code>.dstore.values.StringValue new_value = 2;</code>
     */
    private $new_value = null;
    /**
     * <code>bool new_value_null = 1002;</code>
     */
    private $new_value_null = false;
    /**
     * <code>.dstore.values.IntegerValue sort_no = 3;</code>
     */
    private $sort_no = null;
    /**
     * <code>bool sort_no_null = 1003;</code>
     */
    private $sort_no_null = false;
    /**
     * <code>.dstore.values.BooleanValue prohibit_value_change_if_used = 4;</code>
     */
    private $prohibit_value_change_if_used = null;
    /**
     * <code>bool prohibit_value_change_if_used_null = 1004;</code>
     */
    private $prohibit_value_change_if_used_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImModifyPredefinedValueAd::initOnce();
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

    /**
     * <code>.dstore.values.StringValue new_value = 2;</code>
     */
    public function getNewValue()
    {
        return $this->new_value;
    }

    /**
     * <code>.dstore.values.StringValue new_value = 2;</code>
     */
    public function setNewValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->new_value = $var;
    }

    /**
     * <code>bool new_value_null = 1002;</code>
     */
    public function getNewValueNull()
    {
        return $this->new_value_null;
    }

    /**
     * <code>bool new_value_null = 1002;</code>
     */
    public function setNewValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->new_value_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sort_no = 3;</code>
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * <code>.dstore.values.IntegerValue sort_no = 3;</code>
     */
    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_no = $var;
    }

    /**
     * <code>bool sort_no_null = 1003;</code>
     */
    public function getSortNoNull()
    {
        return $this->sort_no_null;
    }

    /**
     * <code>bool sort_no_null = 1003;</code>
     */
    public function setSortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_no_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue prohibit_value_change_if_used = 4;</code>
     */
    public function getProhibitValueChangeIfUsed()
    {
        return $this->prohibit_value_change_if_used;
    }

    /**
     * <code>.dstore.values.BooleanValue prohibit_value_change_if_used = 4;</code>
     */
    public function setProhibitValueChangeIfUsed(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->prohibit_value_change_if_used = $var;
    }

    /**
     * <code>bool prohibit_value_change_if_used_null = 1004;</code>
     */
    public function getProhibitValueChangeIfUsedNull()
    {
        return $this->prohibit_value_change_if_used_null;
    }

    /**
     * <code>bool prohibit_value_change_if_used_null = 1004;</code>
     */
    public function setProhibitValueChangeIfUsedNull($var)
    {
        GPBUtil::checkBool($var);
        $this->prohibit_value_change_if_used_null = $var;
    }

}

