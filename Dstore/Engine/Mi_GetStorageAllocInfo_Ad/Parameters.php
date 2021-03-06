<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetStorageAllocInfo_Ad.proto

namespace Dstore\Engine\Mi_GetStorageAllocInfo_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetStorageAllocInfo_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.BooleanValue get_info_for_a_database = 1;</code>
     */
    private $get_info_for_a_database = null;
    /**
     * <code>bool get_info_for_a_database_null = 1001;</code>
     */
    private $get_info_for_a_database_null = false;
    /**
     * <code>.dstore.values.StringValue get_storage_alloc_info_for = 2;</code>
     */
    private $get_storage_alloc_info_for = null;
    /**
     * <code>bool get_storage_alloc_info_for_null = 1002;</code>
     */
    private $get_storage_alloc_info_for_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetStorageAllocInfoAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.BooleanValue get_info_for_a_database = 1;</code>
     */
    public function getGetInfoForADatabase()
    {
        return $this->get_info_for_a_database;
    }

    /**
     * <code>.dstore.values.BooleanValue get_info_for_a_database = 1;</code>
     */
    public function setGetInfoForADatabase(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_info_for_a_database = $var;
    }

    /**
     * <code>bool get_info_for_a_database_null = 1001;</code>
     */
    public function getGetInfoForADatabaseNull()
    {
        return $this->get_info_for_a_database_null;
    }

    /**
     * <code>bool get_info_for_a_database_null = 1001;</code>
     */
    public function setGetInfoForADatabaseNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_info_for_a_database_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue get_storage_alloc_info_for = 2;</code>
     */
    public function getGetStorageAllocInfoFor()
    {
        return $this->get_storage_alloc_info_for;
    }

    /**
     * <code>.dstore.values.StringValue get_storage_alloc_info_for = 2;</code>
     */
    public function setGetStorageAllocInfoFor(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->get_storage_alloc_info_for = $var;
    }

    /**
     * <code>bool get_storage_alloc_info_for_null = 1002;</code>
     */
    public function getGetStorageAllocInfoForNull()
    {
        return $this->get_storage_alloc_info_for_null;
    }

    /**
     * <code>bool get_storage_alloc_info_for_null = 1002;</code>
     */
    public function setGetStorageAllocInfoForNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_storage_alloc_info_for_null = $var;
    }

}

