<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTaxRates.proto

namespace Dstore\Engine\Mi_GetTaxRates;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetTaxRates.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue tax_rate_id = 1;</code>
     */
    private $tax_rate_id = null;
    /**
     * <code>bool tax_rate_id_null = 1001;</code>
     */
    private $tax_rate_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue only_active = 2;</code>
     */
    private $only_active = null;
    /**
     * <code>bool only_active_null = 1002;</code>
     */
    private $only_active_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetTaxRates::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue tax_rate_id = 1;</code>
     */
    public function getTaxRateId()
    {
        return $this->tax_rate_id;
    }

    /**
     * <code>.dstore.values.IntegerValue tax_rate_id = 1;</code>
     */
    public function setTaxRateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tax_rate_id = $var;
    }

    /**
     * <code>bool tax_rate_id_null = 1001;</code>
     */
    public function getTaxRateIdNull()
    {
        return $this->tax_rate_id_null;
    }

    /**
     * <code>bool tax_rate_id_null = 1001;</code>
     */
    public function setTaxRateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tax_rate_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue only_active = 2;</code>
     */
    public function getOnlyActive()
    {
        return $this->only_active;
    }

    /**
     * <code>.dstore.values.BooleanValue only_active = 2;</code>
     */
    public function setOnlyActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->only_active = $var;
    }

    /**
     * <code>bool only_active_null = 1002;</code>
     */
    public function getOnlyActiveNull()
    {
        return $this->only_active_null;
    }

    /**
     * <code>bool only_active_null = 1002;</code>
     */
    public function setOnlyActiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_active_null = $var;
    }

}
