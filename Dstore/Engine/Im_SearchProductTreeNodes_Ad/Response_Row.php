<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_SearchProductTreeNodes_Ad.proto

namespace Dstore\Engine\Im_SearchProductTreeNodes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_SearchProductTreeNodes_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Ist das Produkt-Element aktiviert oder nicht ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue active = 10001;</code>
     */
    private $active = null;
    /**
     * <pre>
     * Hierarchie des Vorgängers
     * </pre>
     *
     * <code>.dstore.values.IntegerValue predecessors_level_no = 10002;</code>
     */
    private $predecessors_level_no = null;
    /**
     * <pre>
     * Eigenschaft der "NodeID", durch die das Produkte-Element gefunden wurde
     * </pre>
     *
     * <code>.dstore.values.StringValue matching_value = 10003;</code>
     */
    private $matching_value = null;
    /**
     * <pre>
     * Hierarchie des Vor-Vorgängers
     * </pre>
     *
     * <code>.dstore.values.IntegerValue pre_predecessors_level_no = 10004;</code>
     */
    private $pre_predecessors_level_no = null;
    /**
     * <pre>
     * ID des gefundenen Produkte-Elementes im Artikelbaum
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10005;</code>
     */
    private $tree_node_id = null;
    /**
     * <pre>
     * ID des gefundenen Produkt-Artikel-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10006;</code>
     */
    private $node_id = null;
    /**
     * <pre>
     * Bezeichnung des Vor-Vorgängers
     * </pre>
     *
     * <code>.dstore.values.StringValue pre_predecessors_description = 10007;</code>
     */
    private $pre_predecessors_description = null;
    /**
     * <pre>
     * Bezeichnung des gefundenen Produkt-Elementes
     * </pre>
     *
     * <code>.dstore.values.StringValue product = 10008;</code>
     */
    private $product = null;
    /**
     * <pre>
     * ID des Vor-Vorgänger-Elementes im Artikelbaum des gefundenen Produkte-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue pre_predecessors_tree_node_id = 10009;</code>
     */
    private $pre_predecessors_tree_node_id = null;
    /**
     * <pre>
     * ID des Vorgänger-Elementes im Artikelbaum des gefundenen Produkte-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue predecessors_tree_node_id = 10010;</code>
     */
    private $predecessors_tree_node_id = null;
    /**
     * <pre>
     * Bezeichnung des Vorgängers
     * </pre>
     *
     * <code>.dstore.values.StringValue predecessors_description = 10011;</code>
     */
    private $predecessors_description = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImSearchProductTreeNodesAd::initOnce();
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
     * Ist das Produkt-Element aktiviert oder nicht ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue active = 10001;</code>
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * <pre>
     * Ist das Produkt-Element aktiviert oder nicht ? ("0" : Nein, "1" : Ja)
     * </pre>
     *
     * <code>.dstore.values.BooleanValue active = 10001;</code>
     */
    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->active = $var;
    }

    /**
     * <pre>
     * Hierarchie des Vorgängers
     * </pre>
     *
     * <code>.dstore.values.IntegerValue predecessors_level_no = 10002;</code>
     */
    public function getPredecessorsLevelNo()
    {
        return $this->predecessors_level_no;
    }

    /**
     * <pre>
     * Hierarchie des Vorgängers
     * </pre>
     *
     * <code>.dstore.values.IntegerValue predecessors_level_no = 10002;</code>
     */
    public function setPredecessorsLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->predecessors_level_no = $var;
    }

    /**
     * <pre>
     * Eigenschaft der "NodeID", durch die das Produkte-Element gefunden wurde
     * </pre>
     *
     * <code>.dstore.values.StringValue matching_value = 10003;</code>
     */
    public function getMatchingValue()
    {
        return $this->matching_value;
    }

    /**
     * <pre>
     * Eigenschaft der "NodeID", durch die das Produkte-Element gefunden wurde
     * </pre>
     *
     * <code>.dstore.values.StringValue matching_value = 10003;</code>
     */
    public function setMatchingValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->matching_value = $var;
    }

    /**
     * <pre>
     * Hierarchie des Vor-Vorgängers
     * </pre>
     *
     * <code>.dstore.values.IntegerValue pre_predecessors_level_no = 10004;</code>
     */
    public function getPrePredecessorsLevelNo()
    {
        return $this->pre_predecessors_level_no;
    }

    /**
     * <pre>
     * Hierarchie des Vor-Vorgängers
     * </pre>
     *
     * <code>.dstore.values.IntegerValue pre_predecessors_level_no = 10004;</code>
     */
    public function setPrePredecessorsLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->pre_predecessors_level_no = $var;
    }

    /**
     * <pre>
     * ID des gefundenen Produkte-Elementes im Artikelbaum
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10005;</code>
     */
    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    /**
     * <pre>
     * ID des gefundenen Produkte-Elementes im Artikelbaum
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10005;</code>
     */
    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tree_node_id = $var;
    }

    /**
     * <pre>
     * ID des gefundenen Produkt-Artikel-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10006;</code>
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * <pre>
     * ID des gefundenen Produkt-Artikel-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_id = 10006;</code>
     */
    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Vor-Vorgängers
     * </pre>
     *
     * <code>.dstore.values.StringValue pre_predecessors_description = 10007;</code>
     */
    public function getPrePredecessorsDescription()
    {
        return $this->pre_predecessors_description;
    }

    /**
     * <pre>
     * Bezeichnung des Vor-Vorgängers
     * </pre>
     *
     * <code>.dstore.values.StringValue pre_predecessors_description = 10007;</code>
     */
    public function setPrePredecessorsDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->pre_predecessors_description = $var;
    }

    /**
     * <pre>
     * Bezeichnung des gefundenen Produkt-Elementes
     * </pre>
     *
     * <code>.dstore.values.StringValue product = 10008;</code>
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * <pre>
     * Bezeichnung des gefundenen Produkt-Elementes
     * </pre>
     *
     * <code>.dstore.values.StringValue product = 10008;</code>
     */
    public function setProduct(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->product = $var;
    }

    /**
     * <pre>
     * ID des Vor-Vorgänger-Elementes im Artikelbaum des gefundenen Produkte-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue pre_predecessors_tree_node_id = 10009;</code>
     */
    public function getPrePredecessorsTreeNodeId()
    {
        return $this->pre_predecessors_tree_node_id;
    }

    /**
     * <pre>
     * ID des Vor-Vorgänger-Elementes im Artikelbaum des gefundenen Produkte-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue pre_predecessors_tree_node_id = 10009;</code>
     */
    public function setPrePredecessorsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->pre_predecessors_tree_node_id = $var;
    }

    /**
     * <pre>
     * ID des Vorgänger-Elementes im Artikelbaum des gefundenen Produkte-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue predecessors_tree_node_id = 10010;</code>
     */
    public function getPredecessorsTreeNodeId()
    {
        return $this->predecessors_tree_node_id;
    }

    /**
     * <pre>
     * ID des Vorgänger-Elementes im Artikelbaum des gefundenen Produkte-Elementes
     * </pre>
     *
     * <code>.dstore.values.IntegerValue predecessors_tree_node_id = 10010;</code>
     */
    public function setPredecessorsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->predecessors_tree_node_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Vorgängers
     * </pre>
     *
     * <code>.dstore.values.StringValue predecessors_description = 10011;</code>
     */
    public function getPredecessorsDescription()
    {
        return $this->predecessors_description;
    }

    /**
     * <pre>
     * Bezeichnung des Vorgängers
     * </pre>
     *
     * <code>.dstore.values.StringValue predecessors_description = 10011;</code>
     */
    public function setPredecessorsDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->predecessors_description = $var;
    }

}
