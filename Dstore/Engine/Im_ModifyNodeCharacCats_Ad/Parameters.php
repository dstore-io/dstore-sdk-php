<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyNodeCharacCats_Ad.proto

namespace Dstore\Engine\Im_ModifyNodeCharacCats_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_ModifyNodeCharacCats_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue node_charac_category_id = 1;</code>
     */
    private $node_charac_category_id = null;
    /**
     * <code>bool node_charac_category_id_null = 1001;</code>
     */
    private $node_charac_category_id_null = false;
    /**
     * <code>.dstore.values.StringValue category_description = 2;</code>
     */
    private $category_description = null;
    /**
     * <code>bool category_description_null = 1002;</code>
     */
    private $category_description_null = false;
    /**
     * <code>.dstore.values.IntegerValue predecessor_category_id = 3;</code>
     */
    private $predecessor_category_id = null;
    /**
     * <code>bool predecessor_category_id_null = 1003;</code>
     */
    private $predecessor_category_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue move_sort_no = 4;</code>
     */
    private $move_sort_no = null;
    /**
     * <code>bool move_sort_no_null = 1004;</code>
     */
    private $move_sort_no_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_category = 5;</code>
     */
    private $delete_category = null;
    /**
     * <code>bool delete_category_null = 1005;</code>
     */
    private $delete_category_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImModifyNodeCharacCatsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue node_charac_category_id = 1;</code>
     */
    public function getNodeCharacCategoryId()
    {
        return $this->node_charac_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue node_charac_category_id = 1;</code>
     */
    public function setNodeCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_charac_category_id = $var;
    }

    /**
     * <code>bool node_charac_category_id_null = 1001;</code>
     */
    public function getNodeCharacCategoryIdNull()
    {
        return $this->node_charac_category_id_null;
    }

    /**
     * <code>bool node_charac_category_id_null = 1001;</code>
     */
    public function setNodeCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_charac_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue category_description = 2;</code>
     */
    public function getCategoryDescription()
    {
        return $this->category_description;
    }

    /**
     * <code>.dstore.values.StringValue category_description = 2;</code>
     */
    public function setCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->category_description = $var;
    }

    /**
     * <code>bool category_description_null = 1002;</code>
     */
    public function getCategoryDescriptionNull()
    {
        return $this->category_description_null;
    }

    /**
     * <code>bool category_description_null = 1002;</code>
     */
    public function setCategoryDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->category_description_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue predecessor_category_id = 3;</code>
     */
    public function getPredecessorCategoryId()
    {
        return $this->predecessor_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue predecessor_category_id = 3;</code>
     */
    public function setPredecessorCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->predecessor_category_id = $var;
    }

    /**
     * <code>bool predecessor_category_id_null = 1003;</code>
     */
    public function getPredecessorCategoryIdNull()
    {
        return $this->predecessor_category_id_null;
    }

    /**
     * <code>bool predecessor_category_id_null = 1003;</code>
     */
    public function setPredecessorCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->predecessor_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue move_sort_no = 4;</code>
     */
    public function getMoveSortNo()
    {
        return $this->move_sort_no;
    }

    /**
     * <code>.dstore.values.IntegerValue move_sort_no = 4;</code>
     */
    public function setMoveSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->move_sort_no = $var;
    }

    /**
     * <code>bool move_sort_no_null = 1004;</code>
     */
    public function getMoveSortNoNull()
    {
        return $this->move_sort_no_null;
    }

    /**
     * <code>bool move_sort_no_null = 1004;</code>
     */
    public function setMoveSortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->move_sort_no_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_category = 5;</code>
     */
    public function getDeleteCategory()
    {
        return $this->delete_category;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_category = 5;</code>
     */
    public function setDeleteCategory(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_category = $var;
    }

    /**
     * <code>bool delete_category_null = 1005;</code>
     */
    public function getDeleteCategoryNull()
    {
        return $this->delete_category_null;
    }

    /**
     * <code>bool delete_category_null = 1005;</code>
     */
    public function setDeleteCategoryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_category_null = $var;
    }

}

