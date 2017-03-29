<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetBinariesForValues.proto

namespace Dstore\Engine\Im_GetBinariesForValues;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetBinariesForValues.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID der Eigenschaft "BinaryCharacValue"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_value_id = 10001;</code>
     */
    private $binary_value_id = null;
    /**
     * <pre>
     * Eine Eigenschaft von "BinaryCodeID" zum Merkmal "&#64;BinaryCharacteristicID" (falls dieser Parameter angegeben wurde)
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_charac_value = 10002;</code>
     */
    private $binary_charac_value = null;
    /**
     * <pre>
     * ID eines "Binaries", das der Eigenschaft "ValueID" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10003;</code>
     */
    private $binary_code_id = null;
    /**
     * <pre>
     * ID eines Merkmals, zu dem Artikel-Elemente Eigenschaften haben können
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10004;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <pre>
     * Eine Eigenschaft zum Merkmal "NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10005;</code>
     */
    private $value = null;
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
     * Der zur "BinaryCodeID" zugehörige Code des "Thumbnails" (ein kleines Bild, das das eigentliche Binärobjekt symbolisieren soll). Standardmäßig "NULL", es wird hier nur etwas zurückgegeben, wenn "&#64;IncludeBinaryCode" den Wert "2" oder "3" hat.
     * </pre>
     *
     * <code>.dstore.values.BytesValue thumbnail_code = 10007;</code>
     */
    private $thumbnail_code = null;
    /**
     * <pre>
     * Der zur "BinaryCodeID" zugehörige Code, also quasi das Binärobjekt selbst. Standardmäßig "NULL", es wird hier nur etwas zurückgegeben, wenn "&#64;IncludeBinaryCode" den Wert "1" oder "3" hat.
     * </pre>
     *
     * <code>.dstore.values.BytesValue binary_code = 10008;</code>
     */
    private $binary_code = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetBinariesForValues::initOnce();
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
     * ID der Eigenschaft "BinaryCharacValue"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_value_id = 10001;</code>
     */
    public function getBinaryValueId()
    {
        return $this->binary_value_id;
    }

    /**
     * <pre>
     * ID der Eigenschaft "BinaryCharacValue"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_value_id = 10001;</code>
     */
    public function setBinaryValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->binary_value_id = $var;
    }

    /**
     * <pre>
     * Eine Eigenschaft von "BinaryCodeID" zum Merkmal "&#64;BinaryCharacteristicID" (falls dieser Parameter angegeben wurde)
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_charac_value = 10002;</code>
     */
    public function getBinaryCharacValue()
    {
        return $this->binary_charac_value;
    }

    /**
     * <pre>
     * Eine Eigenschaft von "BinaryCodeID" zum Merkmal "&#64;BinaryCharacteristicID" (falls dieser Parameter angegeben wurde)
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_charac_value = 10002;</code>
     */
    public function setBinaryCharacValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->binary_charac_value = $var;
    }

    /**
     * <pre>
     * ID eines "Binaries", das der Eigenschaft "ValueID" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10003;</code>
     */
    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    /**
     * <pre>
     * ID eines "Binaries", das der Eigenschaft "ValueID" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10003;</code>
     */
    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->binary_code_id = $var;
    }

    /**
     * <pre>
     * ID eines Merkmals, zu dem Artikel-Elemente Eigenschaften haben können
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10004;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <pre>
     * ID eines Merkmals, zu dem Artikel-Elemente Eigenschaften haben können
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10004;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

    /**
     * <pre>
     * Eine Eigenschaft zum Merkmal "NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10005;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Eine Eigenschaft zum Merkmal "NodeCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10005;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
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
     * Der zur "BinaryCodeID" zugehörige Code des "Thumbnails" (ein kleines Bild, das das eigentliche Binärobjekt symbolisieren soll). Standardmäßig "NULL", es wird hier nur etwas zurückgegeben, wenn "&#64;IncludeBinaryCode" den Wert "2" oder "3" hat.
     * </pre>
     *
     * <code>.dstore.values.BytesValue thumbnail_code = 10007;</code>
     */
    public function getThumbnailCode()
    {
        return $this->thumbnail_code;
    }

    /**
     * <pre>
     * Der zur "BinaryCodeID" zugehörige Code des "Thumbnails" (ein kleines Bild, das das eigentliche Binärobjekt symbolisieren soll). Standardmäßig "NULL", es wird hier nur etwas zurückgegeben, wenn "&#64;IncludeBinaryCode" den Wert "2" oder "3" hat.
     * </pre>
     *
     * <code>.dstore.values.BytesValue thumbnail_code = 10007;</code>
     */
    public function setThumbnailCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BytesValue::class);
        $this->thumbnail_code = $var;
    }

    /**
     * <pre>
     * Der zur "BinaryCodeID" zugehörige Code, also quasi das Binärobjekt selbst. Standardmäßig "NULL", es wird hier nur etwas zurückgegeben, wenn "&#64;IncludeBinaryCode" den Wert "1" oder "3" hat.
     * </pre>
     *
     * <code>.dstore.values.BytesValue binary_code = 10008;</code>
     */
    public function getBinaryCode()
    {
        return $this->binary_code;
    }

    /**
     * <pre>
     * Der zur "BinaryCodeID" zugehörige Code, also quasi das Binärobjekt selbst. Standardmäßig "NULL", es wird hier nur etwas zurückgegeben, wenn "&#64;IncludeBinaryCode" den Wert "1" oder "3" hat.
     * </pre>
     *
     * <code>.dstore.values.BytesValue binary_code = 10008;</code>
     */
    public function setBinaryCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BytesValue::class);
        $this->binary_code = $var;
    }

}
