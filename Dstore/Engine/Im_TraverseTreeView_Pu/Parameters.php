<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_TraverseTreeView_Pu.proto

namespace Dstore\Engine\Im_TraverseTreeView_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_TraverseTreeView_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue tree_node_id = 1;</code>
     */
    private $tree_node_id = null;
    /**
     * <code>bool tree_node_id_null = 1001;</code>
     */
    private $tree_node_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue next = 2;</code>
     */
    private $next = null;
    /**
     * <code>bool next_null = 1002;</code>
     */
    private $next_null = false;
    /**
     * <code>.dstore.values.IntegerValue level_no = 3;</code>
     */
    private $level_no = null;
    /**
     * <code>bool level_no_null = 1003;</code>
     */
    private $level_no_null = false;
    /**
     * <code>.dstore.values.IntegerValue domain_tree_node_id = 4;</code>
     */
    private $domain_tree_node_id = null;
    /**
     * <code>bool domain_tree_node_id_null = 1004;</code>
     */
    private $domain_tree_node_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImTraverseTreeViewPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue tree_node_id = 1;</code>
     */
    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    /**
     * <code>.dstore.values.IntegerValue tree_node_id = 1;</code>
     */
    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tree_node_id = $var;
    }

    /**
     * <code>bool tree_node_id_null = 1001;</code>
     */
    public function getTreeNodeIdNull()
    {
        return $this->tree_node_id_null;
    }

    /**
     * <code>bool tree_node_id_null = 1001;</code>
     */
    public function setTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue next = 2;</code>
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * <code>.dstore.values.BooleanValue next = 2;</code>
     */
    public function setNext(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->next = $var;
    }

    /**
     * <code>bool next_null = 1002;</code>
     */
    public function getNextNull()
    {
        return $this->next_null;
    }

    /**
     * <code>bool next_null = 1002;</code>
     */
    public function setNextNull($var)
    {
        GPBUtil::checkBool($var);
        $this->next_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue level_no = 3;</code>
     */
    public function getLevelNo()
    {
        return $this->level_no;
    }

    /**
     * <code>.dstore.values.IntegerValue level_no = 3;</code>
     */
    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->level_no = $var;
    }

    /**
     * <code>bool level_no_null = 1003;</code>
     */
    public function getLevelNoNull()
    {
        return $this->level_no_null;
    }

    /**
     * <code>bool level_no_null = 1003;</code>
     */
    public function setLevelNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->level_no_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue domain_tree_node_id = 4;</code>
     */
    public function getDomainTreeNodeId()
    {
        return $this->domain_tree_node_id;
    }

    /**
     * <code>.dstore.values.IntegerValue domain_tree_node_id = 4;</code>
     */
    public function setDomainTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->domain_tree_node_id = $var;
    }

    /**
     * <code>bool domain_tree_node_id_null = 1004;</code>
     */
    public function getDomainTreeNodeIdNull()
    {
        return $this->domain_tree_node_id_null;
    }

    /**
     * <code>bool domain_tree_node_id_null = 1004;</code>
     */
    public function setDomainTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->domain_tree_node_id_null = $var;
    }

}

