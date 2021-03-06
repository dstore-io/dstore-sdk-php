<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetTimeUnitsForCPeriods_Ad.proto

namespace Dstore\Engine\Om_GetTimeUnitsForCPeriods_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetTimeUnitsForCPeriods_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID einer Zeiteinheit, die bei der Definition von Gültigkeitszeiträumen von Verkaufs-Aktionen durch "om_ModifyCampaignPeriodDefs_Ad" verwendet werden kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue time_unit_id = 10001;</code>
     */
    private $time_unit_id = null;
    /**
     * <pre>
     * Klartext der Zeiteinheit "TimeUnitID" (z.B. "Tag")
     * </pre>
     *
     * <code>.dstore.values.StringValue time_unit = 10002;</code>
     */
    private $time_unit = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetTimeUnitsForCPeriodsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function getRowId()
    {
        return $this->row_id;
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    /**
     * <pre>
     * ID einer Zeiteinheit, die bei der Definition von Gültigkeitszeiträumen von Verkaufs-Aktionen durch "om_ModifyCampaignPeriodDefs_Ad" verwendet werden kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue time_unit_id = 10001;</code>
     */
    public function getTimeUnitId()
    {
        return $this->time_unit_id;
    }

    /**
     * <pre>
     * ID einer Zeiteinheit, die bei der Definition von Gültigkeitszeiträumen von Verkaufs-Aktionen durch "om_ModifyCampaignPeriodDefs_Ad" verwendet werden kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue time_unit_id = 10001;</code>
     */
    public function setTimeUnitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->time_unit_id = $var;
    }

    /**
     * <pre>
     * Klartext der Zeiteinheit "TimeUnitID" (z.B. "Tag")
     * </pre>
     *
     * <code>.dstore.values.StringValue time_unit = 10002;</code>
     */
    public function getTimeUnit()
    {
        return $this->time_unit;
    }

    /**
     * <pre>
     * Klartext der Zeiteinheit "TimeUnitID" (z.B. "Tag")
     * </pre>
     *
     * <code>.dstore.values.StringValue time_unit = 10002;</code>
     */
    public function setTimeUnit(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->time_unit = $var;
    }

}

