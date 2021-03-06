<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyRegions_Ad.proto

namespace Dstore\Engine\Mi_ModifyRegions_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_ModifyRegions_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue region_id = 1;</code>
     */
    private $region_id = null;
    /**
     * <code>bool region_id_null = 1001;</code>
     */
    private $region_id_null = false;
    /**
     * <code>.dstore.values.StringValue region = 2;</code>
     */
    private $region = null;
    /**
     * <code>bool region_null = 1002;</code>
     */
    private $region_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_region = 3;</code>
     */
    private $delete_region = null;
    /**
     * <code>bool delete_region_null = 1003;</code>
     */
    private $delete_region_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiModifyRegionsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue region_id = 1;</code>
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * <code>.dstore.values.IntegerValue region_id = 1;</code>
     */
    public function setRegionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->region_id = $var;
    }

    /**
     * <code>bool region_id_null = 1001;</code>
     */
    public function getRegionIdNull()
    {
        return $this->region_id_null;
    }

    /**
     * <code>bool region_id_null = 1001;</code>
     */
    public function setRegionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->region_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue region = 2;</code>
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * <code>.dstore.values.StringValue region = 2;</code>
     */
    public function setRegion(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->region = $var;
    }

    /**
     * <code>bool region_null = 1002;</code>
     */
    public function getRegionNull()
    {
        return $this->region_null;
    }

    /**
     * <code>bool region_null = 1002;</code>
     */
    public function setRegionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->region_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_region = 3;</code>
     */
    public function getDeleteRegion()
    {
        return $this->delete_region;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_region = 3;</code>
     */
    public function setDeleteRegion(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_region = $var;
    }

    /**
     * <code>bool delete_region_null = 1003;</code>
     */
    public function getDeleteRegionNull()
    {
        return $this->delete_region_null;
    }

    /**
     * <code>bool delete_region_null = 1003;</code>
     */
    public function setDeleteRegionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_region_null = $var;
    }

}

