<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyBundleItemSets_Ad.proto

namespace Dstore\Engine\Om_ModifyBundleItemSets_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyBundleItemSets_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue item_set_id = 1;</code>
     */
    private $item_set_id = null;
    /**
     * <code>bool item_set_id_null = 1001;</code>
     */
    private $item_set_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue item_condition_id = 2;</code>
     */
    private $item_condition_id = null;
    /**
     * <code>bool item_condition_id_null = 1002;</code>
     */
    private $item_condition_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue quantity = 3;</code>
     */
    private $quantity = null;
    /**
     * <code>bool quantity_null = 1003;</code>
     */
    private $quantity_null = false;
    /**
     * <code>.dstore.values.BooleanValue distinct_items_only = 4;</code>
     */
    private $distinct_items_only = null;
    /**
     * <code>bool distinct_items_only_null = 1004;</code>
     */
    private $distinct_items_only_null = false;
    /**
     * <code>.dstore.values.IntegerValue delete_set = 5;</code>
     */
    private $delete_set = null;
    /**
     * <code>bool delete_set_null = 1005;</code>
     */
    private $delete_set_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyBundleItemSetsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue item_set_id = 1;</code>
     */
    public function getItemSetId()
    {
        return $this->item_set_id;
    }

    /**
     * <code>.dstore.values.IntegerValue item_set_id = 1;</code>
     */
    public function setItemSetId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->item_set_id = $var;
    }

    /**
     * <code>bool item_set_id_null = 1001;</code>
     */
    public function getItemSetIdNull()
    {
        return $this->item_set_id_null;
    }

    /**
     * <code>bool item_set_id_null = 1001;</code>
     */
    public function setItemSetIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->item_set_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue item_condition_id = 2;</code>
     */
    public function getItemConditionId()
    {
        return $this->item_condition_id;
    }

    /**
     * <code>.dstore.values.IntegerValue item_condition_id = 2;</code>
     */
    public function setItemConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->item_condition_id = $var;
    }

    /**
     * <code>bool item_condition_id_null = 1002;</code>
     */
    public function getItemConditionIdNull()
    {
        return $this->item_condition_id_null;
    }

    /**
     * <code>bool item_condition_id_null = 1002;</code>
     */
    public function setItemConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->item_condition_id_null = $var;
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
     * <code>.dstore.values.BooleanValue distinct_items_only = 4;</code>
     */
    public function getDistinctItemsOnly()
    {
        return $this->distinct_items_only;
    }

    /**
     * <code>.dstore.values.BooleanValue distinct_items_only = 4;</code>
     */
    public function setDistinctItemsOnly(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->distinct_items_only = $var;
    }

    /**
     * <code>bool distinct_items_only_null = 1004;</code>
     */
    public function getDistinctItemsOnlyNull()
    {
        return $this->distinct_items_only_null;
    }

    /**
     * <code>bool distinct_items_only_null = 1004;</code>
     */
    public function setDistinctItemsOnlyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->distinct_items_only_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue delete_set = 5;</code>
     */
    public function getDeleteSet()
    {
        return $this->delete_set;
    }

    /**
     * <code>.dstore.values.IntegerValue delete_set = 5;</code>
     */
    public function setDeleteSet(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->delete_set = $var;
    }

    /**
     * <code>bool delete_set_null = 1005;</code>
     */
    public function getDeleteSetNull()
    {
        return $this->delete_set_null;
    }

    /**
     * <code>bool delete_set_null = 1005;</code>
     */
    public function setDeleteSetNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_set_null = $var;
    }

}

