<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetVariantMatrix.proto

namespace Dstore\Engine\Im_GetVariantMatrix;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetVariantMatrix.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID der Eigenschaft "YAxisValue"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue y_axis_value_id = 10001;</code>
     */
    private $y_axis_value_id = null;
    /**
     * <pre>
     * ID des zur "TreeNodeID" zugehörigen Elementes aus "HistoryTreeView" (in dieser ist die Historie des gesamten Artikelbaums abgebildet)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10002;</code>
     */
    private $h_tree_node_id = null;
    /**
     * <pre>
     * ID eines Elementes des Artikelbaums, das Nachfolger von "&#64;TreeNodeID" ist und dessen zugehöriges Artikel-Element ("NodeID") sich auf der "Varianten"-Hierarchie (das ist die mit der größten "LevelNo") befindet
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10003;</code>
     */
    private $tree_node_id = null;
    /**
     * <pre>
     * Eigenschaft der "TreeNodeID" zum Merkmal "&#64;ValueCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10004;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Eigenschaft der "TreeNodeID" zum Merkmal "&#64;XAxisCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue x_axis_value = 10005;</code>
     */
    private $x_axis_value = null;
    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10006;</code>
     */
    private $value_id = null;
    /**
     * <pre>
     * Eigenschaft der "TreeNodeID" zum Merkmal "&#64;YAxisCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue y_axis_value = 10007;</code>
     */
    private $y_axis_value = null;
    /**
     * <pre>
     * ID der Eigenschaft "XAxisValue"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue x_axis_value_id = 10008;</code>
     */
    private $x_axis_value_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetVariantMatrix::initOnce();
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
     * ID der Eigenschaft "YAxisValue"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue y_axis_value_id = 10001;</code>
     */
    public function getYAxisValueId()
    {
        return $this->y_axis_value_id;
    }

    /**
     * <pre>
     * ID der Eigenschaft "YAxisValue"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue y_axis_value_id = 10001;</code>
     */
    public function setYAxisValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->y_axis_value_id = $var;
    }

    /**
     * <pre>
     * ID des zur "TreeNodeID" zugehörigen Elementes aus "HistoryTreeView" (in dieser ist die Historie des gesamten Artikelbaums abgebildet)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10002;</code>
     */
    public function getHTreeNodeId()
    {
        return $this->h_tree_node_id;
    }

    /**
     * <pre>
     * ID des zur "TreeNodeID" zugehörigen Elementes aus "HistoryTreeView" (in dieser ist die Historie des gesamten Artikelbaums abgebildet)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue h_tree_node_id = 10002;</code>
     */
    public function setHTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->h_tree_node_id = $var;
    }

    /**
     * <pre>
     * ID eines Elementes des Artikelbaums, das Nachfolger von "&#64;TreeNodeID" ist und dessen zugehöriges Artikel-Element ("NodeID") sich auf der "Varianten"-Hierarchie (das ist die mit der größten "LevelNo") befindet
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10003;</code>
     */
    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    /**
     * <pre>
     * ID eines Elementes des Artikelbaums, das Nachfolger von "&#64;TreeNodeID" ist und dessen zugehöriges Artikel-Element ("NodeID") sich auf der "Varianten"-Hierarchie (das ist die mit der größten "LevelNo") befindet
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10003;</code>
     */
    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tree_node_id = $var;
    }

    /**
     * <pre>
     * Eigenschaft der "TreeNodeID" zum Merkmal "&#64;ValueCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10004;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Eigenschaft der "TreeNodeID" zum Merkmal "&#64;ValueCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10004;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <pre>
     * Eigenschaft der "TreeNodeID" zum Merkmal "&#64;XAxisCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue x_axis_value = 10005;</code>
     */
    public function getXAxisValue()
    {
        return $this->x_axis_value;
    }

    /**
     * <pre>
     * Eigenschaft der "TreeNodeID" zum Merkmal "&#64;XAxisCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue x_axis_value = 10005;</code>
     */
    public function setXAxisValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->x_axis_value = $var;
    }

    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10006;</code>
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10006;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

    /**
     * <pre>
     * Eigenschaft der "TreeNodeID" zum Merkmal "&#64;YAxisCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue y_axis_value = 10007;</code>
     */
    public function getYAxisValue()
    {
        return $this->y_axis_value;
    }

    /**
     * <pre>
     * Eigenschaft der "TreeNodeID" zum Merkmal "&#64;YAxisCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue y_axis_value = 10007;</code>
     */
    public function setYAxisValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->y_axis_value = $var;
    }

    /**
     * <pre>
     * ID der Eigenschaft "XAxisValue"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue x_axis_value_id = 10008;</code>
     */
    public function getXAxisValueId()
    {
        return $this->x_axis_value_id;
    }

    /**
     * <pre>
     * ID der Eigenschaft "XAxisValue"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue x_axis_value_id = 10008;</code>
     */
    public function setXAxisValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->x_axis_value_id = $var;
    }

}

