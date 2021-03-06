<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodeCharacteristics_Pu.proto

namespace Dstore\Engine\Im_GetNodeCharacteristics_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetNodeCharacteristics_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID einer Einheit, in der alle Eigenschaften des Merkmals "NodeCharacteristicID" sind
     * </pre>
     *
     * <code>.dstore.values.IntegerValue unit_id = 10001;</code>
     */
    private $unit_id = null;
    /**
     * <pre>
     * Bezeichnung des Merkmals "NodeCharacteristicID" in der durch "&#64;LanguageIDForCharacDescript" angegebenen Sprache bzw. (falls keine Übersetzung vorhanden ist oder für den Parameter "NULL" angegeben wurde) in der Standardsprache
     * </pre>
     *
     * <code>.dstore.values.StringValue characteristic_description = 10002;</code>
     */
    private $characteristic_description = null;
    /**
     * <pre>
     * ID eines "Feld-Typs", von dem alle Eigenschaften des Merkmals "NodeCharacteristicID" sein müssen (z.B. "Text mit maximal 20 Zeichen")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue field_type_id = 10003;</code>
     */
    private $field_type_id = null;
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
     * ID einer Sprache, in der alle Eigenschaften des Merkmals "NodeCharacteristicID" angegeben sind
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_language_id = 10005;</code>
     */
    private $value_language_id = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge des Merkmals "NodeCharacteristicID" innerhalb aller Merkmale
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10006;</code>
     */
    private $sort_no = null;
    /**
     * <pre>
     * Handelt es sich um ein rekursives Merkmal ? Rekursive Merkmale sind immer vordefiniert und haben als Eigenschaften "NodeCharacteristicID"s. (Beispiel ist der "Verkaufspreis")
     * </pre>
     *
     * <code>.dstore.values.BooleanValue recursive = 10007;</code>
     */
    private $recursive = null;
    /**
     * <pre>
     * Hat das Merkmal "NodeCharacteristicID" nur vordefinierte Werte ("0" : Nein, "1" : Ja) ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue predefined_values = 10008;</code>
     */
    private $predefined_values = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetNodeCharacteristicsPu::initOnce();
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
     * ID einer Einheit, in der alle Eigenschaften des Merkmals "NodeCharacteristicID" sind
     * </pre>
     *
     * <code>.dstore.values.IntegerValue unit_id = 10001;</code>
     */
    public function getUnitId()
    {
        return $this->unit_id;
    }

    /**
     * <pre>
     * ID einer Einheit, in der alle Eigenschaften des Merkmals "NodeCharacteristicID" sind
     * </pre>
     *
     * <code>.dstore.values.IntegerValue unit_id = 10001;</code>
     */
    public function setUnitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->unit_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Merkmals "NodeCharacteristicID" in der durch "&#64;LanguageIDForCharacDescript" angegebenen Sprache bzw. (falls keine Übersetzung vorhanden ist oder für den Parameter "NULL" angegeben wurde) in der Standardsprache
     * </pre>
     *
     * <code>.dstore.values.StringValue characteristic_description = 10002;</code>
     */
    public function getCharacteristicDescription()
    {
        return $this->characteristic_description;
    }

    /**
     * <pre>
     * Bezeichnung des Merkmals "NodeCharacteristicID" in der durch "&#64;LanguageIDForCharacDescript" angegebenen Sprache bzw. (falls keine Übersetzung vorhanden ist oder für den Parameter "NULL" angegeben wurde) in der Standardsprache
     * </pre>
     *
     * <code>.dstore.values.StringValue characteristic_description = 10002;</code>
     */
    public function setCharacteristicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->characteristic_description = $var;
    }

    /**
     * <pre>
     * ID eines "Feld-Typs", von dem alle Eigenschaften des Merkmals "NodeCharacteristicID" sein müssen (z.B. "Text mit maximal 20 Zeichen")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue field_type_id = 10003;</code>
     */
    public function getFieldTypeId()
    {
        return $this->field_type_id;
    }

    /**
     * <pre>
     * ID eines "Feld-Typs", von dem alle Eigenschaften des Merkmals "NodeCharacteristicID" sein müssen (z.B. "Text mit maximal 20 Zeichen")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue field_type_id = 10003;</code>
     */
    public function setFieldTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->field_type_id = $var;
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
     * ID einer Sprache, in der alle Eigenschaften des Merkmals "NodeCharacteristicID" angegeben sind
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_language_id = 10005;</code>
     */
    public function getValueLanguageId()
    {
        return $this->value_language_id;
    }

    /**
     * <pre>
     * ID einer Sprache, in der alle Eigenschaften des Merkmals "NodeCharacteristicID" angegeben sind
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_language_id = 10005;</code>
     */
    public function setValueLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_language_id = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge des Merkmals "NodeCharacteristicID" innerhalb aller Merkmale
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10006;</code>
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge des Merkmals "NodeCharacteristicID" innerhalb aller Merkmale
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10006;</code>
     */
    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_no = $var;
    }

    /**
     * <pre>
     * Handelt es sich um ein rekursives Merkmal ? Rekursive Merkmale sind immer vordefiniert und haben als Eigenschaften "NodeCharacteristicID"s. (Beispiel ist der "Verkaufspreis")
     * </pre>
     *
     * <code>.dstore.values.BooleanValue recursive = 10007;</code>
     */
    public function getRecursive()
    {
        return $this->recursive;
    }

    /**
     * <pre>
     * Handelt es sich um ein rekursives Merkmal ? Rekursive Merkmale sind immer vordefiniert und haben als Eigenschaften "NodeCharacteristicID"s. (Beispiel ist der "Verkaufspreis")
     * </pre>
     *
     * <code>.dstore.values.BooleanValue recursive = 10007;</code>
     */
    public function setRecursive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->recursive = $var;
    }

    /**
     * <pre>
     * Hat das Merkmal "NodeCharacteristicID" nur vordefinierte Werte ("0" : Nein, "1" : Ja) ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue predefined_values = 10008;</code>
     */
    public function getPredefinedValues()
    {
        return $this->predefined_values;
    }

    /**
     * <pre>
     * Hat das Merkmal "NodeCharacteristicID" nur vordefinierte Werte ("0" : Nein, "1" : Ja) ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue predefined_values = 10008;</code>
     */
    public function setPredefinedValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->predefined_values = $var;
    }

}

