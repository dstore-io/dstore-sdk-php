<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonPredefinedVals_Ad.proto

namespace Dstore\Engine\Pm_GetPersonPredefinedVals_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPersonPredefinedVals_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID einer Tabelle, in der ein Element (-&gt; "TableKeyID") definiert ist, auf das der Wert "ValueID" referenziert. Hier steht entweder "&#64;GetReferencesForTableID" oder (falls "NULL") die kleinste möglich "TableID".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_id = 10001;</code>
     */
    private $table_id = null;
    /**
     * <pre>
     * Was enthält "Value" (womöglich wegen Zugriffsbeschränkungen nur einen Teil) ?- NULL : den vollständigen Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "Value" ist dann "NULL"
     * </pre>
     *
     * <code>.dstore.values.StringValue value_restricted_by_pattern = 10002;</code>
     */
    private $value_restricted_by_pattern = null;
    /**
     * <pre>
     * Übersetzung der Eigenschaft "Value" in der durch "&#64;LanguageID" angegebenen Sprache
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_value = 10003;</code>
     */
    private $translated_value = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge des Merkmals "PersonCharacteristicID" innerhalb aller Merkmale
     * </pre>
     *
     * <code>.dstore.values.IntegerValue characteristic_sort_no = 10004;</code>
     */
    private $characteristic_sort_no = null;
    /**
     * <pre>
     * ID eines Personen-Merkmals mit vordefinierten Werten ("PredefinedValues = 1"). Identisch mit "&#64;PersonCharacteristicID", falls hierfür ein Wert ungleich "-1" angegeben wurde. Merkmale m. komplett lesend. Zugriffsbeschr. für den Aufrufer fehlen im Ergebnis.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10005;</code>
     */
    private $person_characteristic_id = null;
    /**
     * <pre>
     * Eine (vordefinierte) Eigenschaft zum Merkmal "PersonCharacteristicID". Kann aufgrund von Zugriffsbeschränkungen "NULL" oder unvollständig sein, was dann durch "ValueRestrictedByPattern" gekennzeichnet ist.
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10006;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Gibt an, ob die Eigenschaft aktuell verwendet werden darf ("1") oder nicht ("0"). Hinweis : Es können seit Version 4.0.0 Gültigkeitszeiträume für Eigenschaften festgelegt werden (siehe "pm_ModifyPeriodsForPredVals_Ad").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_currently_valid = 10007;</code>
     */
    private $is_currently_valid = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge der Eigenschaft "ValueID" innerhalb aller Eigenschaften zum Merkmal "PersonCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_sort_no = 10008;</code>
     */
    private $value_sort_no = null;
    /**
     * <pre>
     * ID eines Objektes der durch "TableID" angegebenen Tabelle, auf das der Wert "ValueID" referenziert. Mögliche Werte : Werte für die "PrimaryKeyColumnName"-Spalte für die Tabelle (siehe "exec mi_GetTabsRefInOtherTabs_Ad &#64;TableID = &lt;TableID&gt;").
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_key_id = 10009;</code>
     */
    private $table_key_id = null;
    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10010;</code>
     */
    private $value_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPersonPredefinedValsAd::initOnce();
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
     * ID einer Tabelle, in der ein Element (-&gt; "TableKeyID") definiert ist, auf das der Wert "ValueID" referenziert. Hier steht entweder "&#64;GetReferencesForTableID" oder (falls "NULL") die kleinste möglich "TableID".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_id = 10001;</code>
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * <pre>
     * ID einer Tabelle, in der ein Element (-&gt; "TableKeyID") definiert ist, auf das der Wert "ValueID" referenziert. Hier steht entweder "&#64;GetReferencesForTableID" oder (falls "NULL") die kleinste möglich "TableID".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_id = 10001;</code>
     */
    public function setTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->table_id = $var;
    }

    /**
     * <pre>
     * Was enthält "Value" (womöglich wegen Zugriffsbeschränkungen nur einen Teil) ?- NULL : den vollständigen Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "Value" ist dann "NULL"
     * </pre>
     *
     * <code>.dstore.values.StringValue value_restricted_by_pattern = 10002;</code>
     */
    public function getValueRestrictedByPattern()
    {
        return $this->value_restricted_by_pattern;
    }

    /**
     * <pre>
     * Was enthält "Value" (womöglich wegen Zugriffsbeschränkungen nur einen Teil) ?- NULL : den vollständigen Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "Value" ist dann "NULL"
     * </pre>
     *
     * <code>.dstore.values.StringValue value_restricted_by_pattern = 10002;</code>
     */
    public function setValueRestrictedByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value_restricted_by_pattern = $var;
    }

    /**
     * <pre>
     * Übersetzung der Eigenschaft "Value" in der durch "&#64;LanguageID" angegebenen Sprache
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_value = 10003;</code>
     */
    public function getTranslatedValue()
    {
        return $this->translated_value;
    }

    /**
     * <pre>
     * Übersetzung der Eigenschaft "Value" in der durch "&#64;LanguageID" angegebenen Sprache
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_value = 10003;</code>
     */
    public function setTranslatedValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->translated_value = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge des Merkmals "PersonCharacteristicID" innerhalb aller Merkmale
     * </pre>
     *
     * <code>.dstore.values.IntegerValue characteristic_sort_no = 10004;</code>
     */
    public function getCharacteristicSortNo()
    {
        return $this->characteristic_sort_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge des Merkmals "PersonCharacteristicID" innerhalb aller Merkmale
     * </pre>
     *
     * <code>.dstore.values.IntegerValue characteristic_sort_no = 10004;</code>
     */
    public function setCharacteristicSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->characteristic_sort_no = $var;
    }

    /**
     * <pre>
     * ID eines Personen-Merkmals mit vordefinierten Werten ("PredefinedValues = 1"). Identisch mit "&#64;PersonCharacteristicID", falls hierfür ein Wert ungleich "-1" angegeben wurde. Merkmale m. komplett lesend. Zugriffsbeschr. für den Aufrufer fehlen im Ergebnis.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10005;</code>
     */
    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    /**
     * <pre>
     * ID eines Personen-Merkmals mit vordefinierten Werten ("PredefinedValues = 1"). Identisch mit "&#64;PersonCharacteristicID", falls hierfür ein Wert ungleich "-1" angegeben wurde. Merkmale m. komplett lesend. Zugriffsbeschr. für den Aufrufer fehlen im Ergebnis.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10005;</code>
     */
    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_characteristic_id = $var;
    }

    /**
     * <pre>
     * Eine (vordefinierte) Eigenschaft zum Merkmal "PersonCharacteristicID". Kann aufgrund von Zugriffsbeschränkungen "NULL" oder unvollständig sein, was dann durch "ValueRestrictedByPattern" gekennzeichnet ist.
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10006;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Eine (vordefinierte) Eigenschaft zum Merkmal "PersonCharacteristicID". Kann aufgrund von Zugriffsbeschränkungen "NULL" oder unvollständig sein, was dann durch "ValueRestrictedByPattern" gekennzeichnet ist.
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10006;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <pre>
     * Gibt an, ob die Eigenschaft aktuell verwendet werden darf ("1") oder nicht ("0"). Hinweis : Es können seit Version 4.0.0 Gültigkeitszeiträume für Eigenschaften festgelegt werden (siehe "pm_ModifyPeriodsForPredVals_Ad").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_currently_valid = 10007;</code>
     */
    public function getIsCurrentlyValid()
    {
        return $this->is_currently_valid;
    }

    /**
     * <pre>
     * Gibt an, ob die Eigenschaft aktuell verwendet werden darf ("1") oder nicht ("0"). Hinweis : Es können seit Version 4.0.0 Gültigkeitszeiträume für Eigenschaften festgelegt werden (siehe "pm_ModifyPeriodsForPredVals_Ad").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue is_currently_valid = 10007;</code>
     */
    public function setIsCurrentlyValid(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->is_currently_valid = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge der Eigenschaft "ValueID" innerhalb aller Eigenschaften zum Merkmal "PersonCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_sort_no = 10008;</code>
     */
    public function getValueSortNo()
    {
        return $this->value_sort_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge der Eigenschaft "ValueID" innerhalb aller Eigenschaften zum Merkmal "PersonCharacteristicID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_sort_no = 10008;</code>
     */
    public function setValueSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_sort_no = $var;
    }

    /**
     * <pre>
     * ID eines Objektes der durch "TableID" angegebenen Tabelle, auf das der Wert "ValueID" referenziert. Mögliche Werte : Werte für die "PrimaryKeyColumnName"-Spalte für die Tabelle (siehe "exec mi_GetTabsRefInOtherTabs_Ad &#64;TableID = &lt;TableID&gt;").
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_key_id = 10009;</code>
     */
    public function getTableKeyId()
    {
        return $this->table_key_id;
    }

    /**
     * <pre>
     * ID eines Objektes der durch "TableID" angegebenen Tabelle, auf das der Wert "ValueID" referenziert. Mögliche Werte : Werte für die "PrimaryKeyColumnName"-Spalte für die Tabelle (siehe "exec mi_GetTabsRefInOtherTabs_Ad &#64;TableID = &lt;TableID&gt;").
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_key_id = 10009;</code>
     */
    public function setTableKeyId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->table_key_id = $var;
    }

    /**
     * <pre>
     * ID der Eigenschaft "Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10010;</code>
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
     * <code>.dstore.values.IntegerValue value_id = 10010;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

}
