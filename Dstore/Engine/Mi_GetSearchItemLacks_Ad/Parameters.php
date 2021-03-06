<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetSearchItemLacks_Ad.proto

namespace Dstore\Engine\Mi_GetSearchItemLacks_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetSearchItemLacks_Ad.Parameters</code>
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
     * <code>.dstore.values.IntegerValue minimal_request_counter = 4;</code>
     */
    private $minimal_request_counter = null;
    /**
     * <code>bool minimal_request_counter_null = 1004;</code>
     */
    private $minimal_request_counter_null = false;
    /**
     * <code>.dstore.values.IntegerValue rowcount = 5;</code>
     */
    private $rowcount = null;
    /**
     * <code>bool rowcount_null = 1005;</code>
     */
    private $rowcount_null = false;
    /**
     * <code>.dstore.values.IntegerValue max_request_counter = 6;</code>
     */
    private $max_request_counter = null;
    /**
     * <code>bool max_request_counter_null = 1006;</code>
     */
    private $max_request_counter_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetSearchItemLacksAd::initOnce();
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
     * <code>.dstore.values.IntegerValue minimal_request_counter = 4;</code>
     */
    public function getMinimalRequestCounter()
    {
        return $this->minimal_request_counter;
    }

    /**
     * <code>.dstore.values.IntegerValue minimal_request_counter = 4;</code>
     */
    public function setMinimalRequestCounter(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->minimal_request_counter = $var;
    }

    /**
     * <code>bool minimal_request_counter_null = 1004;</code>
     */
    public function getMinimalRequestCounterNull()
    {
        return $this->minimal_request_counter_null;
    }

    /**
     * <code>bool minimal_request_counter_null = 1004;</code>
     */
    public function setMinimalRequestCounterNull($var)
    {
        GPBUtil::checkBool($var);
        $this->minimal_request_counter_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue rowcount = 5;</code>
     */
    public function getRowcount()
    {
        return $this->rowcount;
    }

    /**
     * <code>.dstore.values.IntegerValue rowcount = 5;</code>
     */
    public function setRowcount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->rowcount = $var;
    }

    /**
     * <code>bool rowcount_null = 1005;</code>
     */
    public function getRowcountNull()
    {
        return $this->rowcount_null;
    }

    /**
     * <code>bool rowcount_null = 1005;</code>
     */
    public function setRowcountNull($var)
    {
        GPBUtil::checkBool($var);
        $this->rowcount_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue max_request_counter = 6;</code>
     */
    public function getMaxRequestCounter()
    {
        return $this->max_request_counter;
    }

    /**
     * <code>.dstore.values.IntegerValue max_request_counter = 6;</code>
     */
    public function setMaxRequestCounter(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->max_request_counter = $var;
    }

    /**
     * <code>bool max_request_counter_null = 1006;</code>
     */
    public function getMaxRequestCounterNull()
    {
        return $this->max_request_counter_null;
    }

    /**
     * <code>bool max_request_counter_null = 1006;</code>
     */
    public function setMaxRequestCounterNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_request_counter_null = $var;
    }

}

