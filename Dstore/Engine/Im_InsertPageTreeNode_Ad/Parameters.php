<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_InsertPageTreeNode_Ad.proto

namespace Dstore\Engine\Im_InsertPageTreeNode_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_InsertPageTreeNode_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue page_description = 1;</code>
     */
    private $page_description = null;
    /**
     * <code>bool page_description_null = 1001;</code>
     */
    private $page_description_null = false;
    /**
     * <code>.dstore.values.IntegerValue new_tree_node_id = 2;</code>
     */
    private $new_tree_node_id = null;
    /**
     * <code>bool new_tree_node_id_null = 1002;</code>
     */
    private $new_tree_node_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue new_node_id = 3;</code>
     */
    private $new_node_id = null;
    /**
     * <code>bool new_node_id_null = 1003;</code>
     */
    private $new_node_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImInsertPageTreeNodeAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue page_description = 1;</code>
     */
    public function getPageDescription()
    {
        return $this->page_description;
    }

    /**
     * <code>.dstore.values.StringValue page_description = 1;</code>
     */
    public function setPageDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->page_description = $var;
    }

    /**
     * <code>bool page_description_null = 1001;</code>
     */
    public function getPageDescriptionNull()
    {
        return $this->page_description_null;
    }

    /**
     * <code>bool page_description_null = 1001;</code>
     */
    public function setPageDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->page_description_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue new_tree_node_id = 2;</code>
     */
    public function getNewTreeNodeId()
    {
        return $this->new_tree_node_id;
    }

    /**
     * <code>.dstore.values.IntegerValue new_tree_node_id = 2;</code>
     */
    public function setNewTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->new_tree_node_id = $var;
    }

    /**
     * <code>bool new_tree_node_id_null = 1002;</code>
     */
    public function getNewTreeNodeIdNull()
    {
        return $this->new_tree_node_id_null;
    }

    /**
     * <code>bool new_tree_node_id_null = 1002;</code>
     */
    public function setNewTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->new_tree_node_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue new_node_id = 3;</code>
     */
    public function getNewNodeId()
    {
        return $this->new_node_id;
    }

    /**
     * <code>.dstore.values.IntegerValue new_node_id = 3;</code>
     */
    public function setNewNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->new_node_id = $var;
    }

    /**
     * <code>bool new_node_id_null = 1003;</code>
     */
    public function getNewNodeIdNull()
    {
        return $this->new_node_id_null;
    }

    /**
     * <code>bool new_node_id_null = 1003;</code>
     */
    public function setNewNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->new_node_id_null = $var;
    }

}

