<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetBenefitTypes_Ad.proto

namespace Dstore\Engine\Om_GetBenefitTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetBenefitTypes_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Die Bezeichnung der "BenefitTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue benefit_type_description = 10001;</code>
     */
    private $benefit_type_description = null;
    /**
     * <pre>
     * Die ID einer Bonus-Art
     * </pre>
     *
     * <code>.dstore.values.IntegerValue benefit_type_id = 10002;</code>
     */
    private $benefit_type_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetBenefitTypesAd::initOnce();
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
     * Die Bezeichnung der "BenefitTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue benefit_type_description = 10001;</code>
     */
    public function getBenefitTypeDescription()
    {
        return $this->benefit_type_description;
    }

    /**
     * <pre>
     * Die Bezeichnung der "BenefitTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue benefit_type_description = 10001;</code>
     */
    public function setBenefitTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->benefit_type_description = $var;
    }

    /**
     * <pre>
     * Die ID einer Bonus-Art
     * </pre>
     *
     * <code>.dstore.values.IntegerValue benefit_type_id = 10002;</code>
     */
    public function getBenefitTypeId()
    {
        return $this->benefit_type_id;
    }

    /**
     * <pre>
     * Die ID einer Bonus-Art
     * </pre>
     *
     * <code>.dstore.values.IntegerValue benefit_type_id = 10002;</code>
     */
    public function setBenefitTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->benefit_type_id = $var;
    }

}
