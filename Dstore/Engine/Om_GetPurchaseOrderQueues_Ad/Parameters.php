<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPurchaseOrderQueues_Ad.proto

namespace Dstore\Engine\Om_GetPurchaseOrderQueues_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetPurchaseOrderQueues_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue supplier_id = 1;</code>
     */
    private $supplier_id = null;
    /**
     * <code>bool supplier_id_null = 1001;</code>
     */
    private $supplier_id_null = false;
    /**
     * <code>.dstore.values.TimestampValue from_order_deadline = 2;</code>
     */
    private $from_order_deadline = null;
    /**
     * <code>bool from_order_deadline_null = 1002;</code>
     */
    private $from_order_deadline_null = false;
    /**
     * <code>.dstore.values.TimestampValue to_order_deadline = 3;</code>
     */
    private $to_order_deadline = null;
    /**
     * <code>bool to_order_deadline_null = 1003;</code>
     */
    private $to_order_deadline_null = false;
    /**
     * <code>.dstore.values.IntegerValue order_type_id = 4;</code>
     */
    private $order_type_id = null;
    /**
     * <code>bool order_type_id_null = 1004;</code>
     */
    private $order_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue node_id = 5;</code>
     */
    private $node_id = null;
    /**
     * <code>bool node_id_null = 1005;</code>
     */
    private $node_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue get_summary_only = 6;</code>
     */
    private $get_summary_only = null;
    /**
     * <code>bool get_summary_only_null = 1006;</code>
     */
    private $get_summary_only_null = false;
    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 7;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <code>bool node_characteristic_id_null = 1007;</code>
     */
    private $node_characteristic_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetPurchaseOrderQueuesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue supplier_id = 1;</code>
     */
    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    /**
     * <code>.dstore.values.IntegerValue supplier_id = 1;</code>
     */
    public function setSupplierId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->supplier_id = $var;
    }

    /**
     * <code>bool supplier_id_null = 1001;</code>
     */
    public function getSupplierIdNull()
    {
        return $this->supplier_id_null;
    }

    /**
     * <code>bool supplier_id_null = 1001;</code>
     */
    public function setSupplierIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->supplier_id_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue from_order_deadline = 2;</code>
     */
    public function getFromOrderDeadline()
    {
        return $this->from_order_deadline;
    }

    /**
     * <code>.dstore.values.TimestampValue from_order_deadline = 2;</code>
     */
    public function setFromOrderDeadline(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->from_order_deadline = $var;
    }

    /**
     * <code>bool from_order_deadline_null = 1002;</code>
     */
    public function getFromOrderDeadlineNull()
    {
        return $this->from_order_deadline_null;
    }

    /**
     * <code>bool from_order_deadline_null = 1002;</code>
     */
    public function setFromOrderDeadlineNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_order_deadline_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue to_order_deadline = 3;</code>
     */
    public function getToOrderDeadline()
    {
        return $this->to_order_deadline;
    }

    /**
     * <code>.dstore.values.TimestampValue to_order_deadline = 3;</code>
     */
    public function setToOrderDeadline(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->to_order_deadline = $var;
    }

    /**
     * <code>bool to_order_deadline_null = 1003;</code>
     */
    public function getToOrderDeadlineNull()
    {
        return $this->to_order_deadline_null;
    }

    /**
     * <code>bool to_order_deadline_null = 1003;</code>
     */
    public function setToOrderDeadlineNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_order_deadline_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue order_type_id = 4;</code>
     */
    public function getOrderTypeId()
    {
        return $this->order_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue order_type_id = 4;</code>
     */
    public function setOrderTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_type_id = $var;
    }

    /**
     * <code>bool order_type_id_null = 1004;</code>
     */
    public function getOrderTypeIdNull()
    {
        return $this->order_type_id_null;
    }

    /**
     * <code>bool order_type_id_null = 1004;</code>
     */
    public function setOrderTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue node_id = 5;</code>
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * <code>.dstore.values.IntegerValue node_id = 5;</code>
     */
    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_id = $var;
    }

    /**
     * <code>bool node_id_null = 1005;</code>
     */
    public function getNodeIdNull()
    {
        return $this->node_id_null;
    }

    /**
     * <code>bool node_id_null = 1005;</code>
     */
    public function setNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue get_summary_only = 6;</code>
     */
    public function getGetSummaryOnly()
    {
        return $this->get_summary_only;
    }

    /**
     * <code>.dstore.values.IntegerValue get_summary_only = 6;</code>
     */
    public function setGetSummaryOnly(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->get_summary_only = $var;
    }

    /**
     * <code>bool get_summary_only_null = 1006;</code>
     */
    public function getGetSummaryOnlyNull()
    {
        return $this->get_summary_only_null;
    }

    /**
     * <code>bool get_summary_only_null = 1006;</code>
     */
    public function setGetSummaryOnlyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_summary_only_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 7;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 7;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

    /**
     * <code>bool node_characteristic_id_null = 1007;</code>
     */
    public function getNodeCharacteristicIdNull()
    {
        return $this->node_characteristic_id_null;
    }

    /**
     * <code>bool node_characteristic_id_null = 1007;</code>
     */
    public function setNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id_null = $var;
    }

}

