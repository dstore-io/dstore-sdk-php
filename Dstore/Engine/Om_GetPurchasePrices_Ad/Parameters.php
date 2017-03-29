<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPurchasePrices_Ad.proto

namespace Dstore\Engine\Om_GetPurchasePrices_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetPurchasePrices_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue tree_node_or_node_id = 1;</code>
     */
    private $tree_node_or_node_id = null;
    /**
     * <code>bool tree_node_or_node_id_null = 1001;</code>
     */
    private $tree_node_or_node_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue is_tree_node_id = 2;</code>
     */
    private $is_tree_node_id = null;
    /**
     * <code>bool is_tree_node_id_null = 1002;</code>
     */
    private $is_tree_node_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue quantity = 3;</code>
     */
    private $quantity = null;
    /**
     * <code>bool quantity_null = 1003;</code>
     */
    private $quantity_null = false;
    /**
     * <code>.dstore.values.IntegerValue supplier_id = 4;</code>
     */
    private $supplier_id = null;
    /**
     * <code>bool supplier_id_null = 1004;</code>
     */
    private $supplier_id_null = false;
    /**
     * <code>.dstore.values.TimestampValue date_for_property_determination = 5;</code>
     */
    private $date_for_property_determination = null;
    /**
     * <code>bool date_for_property_determination_null = 1005;</code>
     */
    private $date_for_property_determination_null = false;
    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 6;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <code>bool node_characteristic_id_null = 1006;</code>
     */
    private $node_characteristic_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetPurchasePricesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue tree_node_or_node_id = 1;</code>
     */
    public function getTreeNodeOrNodeId()
    {
        return $this->tree_node_or_node_id;
    }

    /**
     * <code>.dstore.values.IntegerValue tree_node_or_node_id = 1;</code>
     */
    public function setTreeNodeOrNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tree_node_or_node_id = $var;
    }

    /**
     * <code>bool tree_node_or_node_id_null = 1001;</code>
     */
    public function getTreeNodeOrNodeIdNull()
    {
        return $this->tree_node_or_node_id_null;
    }

    /**
     * <code>bool tree_node_or_node_id_null = 1001;</code>
     */
    public function setTreeNodeOrNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_or_node_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue is_tree_node_id = 2;</code>
     */
    public function getIsTreeNodeId()
    {
        return $this->is_tree_node_id;
    }

    /**
     * <code>.dstore.values.BooleanValue is_tree_node_id = 2;</code>
     */
    public function setIsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->is_tree_node_id = $var;
    }

    /**
     * <code>bool is_tree_node_id_null = 1002;</code>
     */
    public function getIsTreeNodeIdNull()
    {
        return $this->is_tree_node_id_null;
    }

    /**
     * <code>bool is_tree_node_id_null = 1002;</code>
     */
    public function setIsTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->is_tree_node_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue quantity = 3;</code>
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <code>.dstore.values.IntegerValue quantity = 3;</code>
     */
    public function setQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->quantity = $var;
    }

    /**
     * <code>bool quantity_null = 1003;</code>
     */
    public function getQuantityNull()
    {
        return $this->quantity_null;
    }

    /**
     * <code>bool quantity_null = 1003;</code>
     */
    public function setQuantityNull($var)
    {
        GPBUtil::checkBool($var);
        $this->quantity_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue supplier_id = 4;</code>
     */
    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    /**
     * <code>.dstore.values.IntegerValue supplier_id = 4;</code>
     */
    public function setSupplierId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->supplier_id = $var;
    }

    /**
     * <code>bool supplier_id_null = 1004;</code>
     */
    public function getSupplierIdNull()
    {
        return $this->supplier_id_null;
    }

    /**
     * <code>bool supplier_id_null = 1004;</code>
     */
    public function setSupplierIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->supplier_id_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue date_for_property_determination = 5;</code>
     */
    public function getDateForPropertyDetermination()
    {
        return $this->date_for_property_determination;
    }

    /**
     * <code>.dstore.values.TimestampValue date_for_property_determination = 5;</code>
     */
    public function setDateForPropertyDetermination(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->date_for_property_determination = $var;
    }

    /**
     * <code>bool date_for_property_determination_null = 1005;</code>
     */
    public function getDateForPropertyDeterminationNull()
    {
        return $this->date_for_property_determination_null;
    }

    /**
     * <code>bool date_for_property_determination_null = 1005;</code>
     */
    public function setDateForPropertyDeterminationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_for_property_determination_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 6;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 6;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

    /**
     * <code>bool node_characteristic_id_null = 1006;</code>
     */
    public function getNodeCharacteristicIdNull()
    {
        return $this->node_characteristic_id_null;
    }

    /**
     * <code>bool node_characteristic_id_null = 1006;</code>
     */
    public function setNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id_null = $var;
    }

}
