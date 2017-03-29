<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifySearchItems_Ad.proto

namespace Dstore\Engine\Mi_ModifySearchItems_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_ModifySearchItems_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue table_id = 1;</code>
     */
    private $table_id = null;
    /**
     * <code>bool table_id_null = 1001;</code>
     */
    private $table_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue characteristic_id = 2;</code>
     */
    private $characteristic_id = null;
    /**
     * <code>bool characteristic_id_null = 1002;</code>
     */
    private $characteristic_id_null = false;
    /**
     * <code>.dstore.values.StringValue search_value = 3;</code>
     */
    private $search_value = null;
    /**
     * <code>bool search_value_null = 1003;</code>
     */
    private $search_value_null = false;
    /**
     * <code>.dstore.values.StringValue matching_value = 4;</code>
     */
    private $matching_value = null;
    /**
     * <code>bool matching_value_null = 1004;</code>
     */
    private $matching_value_null = false;
    /**
     * <code>.dstore.values.BooleanValue use_like = 5;</code>
     */
    private $use_like = null;
    /**
     * <code>bool use_like_null = 1005;</code>
     */
    private $use_like_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete = 6;</code>
     */
    private $delete = null;
    /**
     * <code>bool delete_null = 1006;</code>
     */
    private $delete_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiModifySearchItemsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue table_id = 1;</code>
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * <code>.dstore.values.IntegerValue table_id = 1;</code>
     */
    public function setTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->table_id = $var;
    }

    /**
     * <code>bool table_id_null = 1001;</code>
     */
    public function getTableIdNull()
    {
        return $this->table_id_null;
    }

    /**
     * <code>bool table_id_null = 1001;</code>
     */
    public function setTableIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->table_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue characteristic_id = 2;</code>
     */
    public function getCharacteristicId()
    {
        return $this->characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue characteristic_id = 2;</code>
     */
    public function setCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->characteristic_id = $var;
    }

    /**
     * <code>bool characteristic_id_null = 1002;</code>
     */
    public function getCharacteristicIdNull()
    {
        return $this->characteristic_id_null;
    }

    /**
     * <code>bool characteristic_id_null = 1002;</code>
     */
    public function setCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue search_value = 3;</code>
     */
    public function getSearchValue()
    {
        return $this->search_value;
    }

    /**
     * <code>.dstore.values.StringValue search_value = 3;</code>
     */
    public function setSearchValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->search_value = $var;
    }

    /**
     * <code>bool search_value_null = 1003;</code>
     */
    public function getSearchValueNull()
    {
        return $this->search_value_null;
    }

    /**
     * <code>bool search_value_null = 1003;</code>
     */
    public function setSearchValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_value_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue matching_value = 4;</code>
     */
    public function getMatchingValue()
    {
        return $this->matching_value;
    }

    /**
     * <code>.dstore.values.StringValue matching_value = 4;</code>
     */
    public function setMatchingValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->matching_value = $var;
    }

    /**
     * <code>bool matching_value_null = 1004;</code>
     */
    public function getMatchingValueNull()
    {
        return $this->matching_value_null;
    }

    /**
     * <code>bool matching_value_null = 1004;</code>
     */
    public function setMatchingValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->matching_value_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue use_like = 5;</code>
     */
    public function getUseLike()
    {
        return $this->use_like;
    }

    /**
     * <code>.dstore.values.BooleanValue use_like = 5;</code>
     */
    public function setUseLike(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->use_like = $var;
    }

    /**
     * <code>bool use_like_null = 1005;</code>
     */
    public function getUseLikeNull()
    {
        return $this->use_like_null;
    }

    /**
     * <code>bool use_like_null = 1005;</code>
     */
    public function setUseLikeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->use_like_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 6;</code>
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 6;</code>
     */
    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete = $var;
    }

    /**
     * <code>bool delete_null = 1006;</code>
     */
    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    /**
     * <code>bool delete_null = 1006;</code>
     */
    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

}
