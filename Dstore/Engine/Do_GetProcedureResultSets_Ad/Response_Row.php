<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetProcedureResultSets_Ad.proto

namespace Dstore\Engine\Do_GetProcedureResultSets_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.do_GetProcedureResultSets_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Die Rückgabemenge wird nur geliefert, wenn der für "ParameterName" übergebene Wert dieser Bedingung genügt. Fast immer handelt es sich hier um eine Bedingung, die in SQL ausgewertet werden kann, zumindest aber mit Hilfe von regulären Ausdrücken.
     * </pre>
     *
     * <code>.dstore.values.StringValue condition = 10001;</code>
     */
    private $condition = null;
    /**
     * <pre>
     * ID einer Bedingung, unter der die Spalten "ResultColumnName" (also alle Datensätze mit gleichem Wert in dieser Spalte) als Ergebnismenge zurückgegeben werden. "0" bedeutet, daß die Rückgabemenge an keine Bedingung gebunden ist. (siehe Beschreibung !)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue procedure_result_condition_id = 10002;</code>
     */
    private $procedure_result_condition_id = null;
    /**
     * <pre>
     * Seit welcher Version die Beschreibung ("Description") gilt
     * </pre>
     *
     * <code>.dstore.values.StringValue description_valid_since_version = 10003;</code>
     */
    private $description_valid_since_version = null;
    /**
     * <pre>
     * Beschreibung der Spalte "ResultColumnName", also was die Werte in dieser Spalte besagen oder bedeuten
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10004;</code>
     */
    private $description = null;
    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die maximale Anzahl Stellen an, die ein Wert, der in der Spalte "ResultColumnName" steht, enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue precision_value = 10005;</code>
     */
    private $precision_value = null;
    /**
     * <pre>
     * Name eines Parameters der Prozedur "&#64;ProcedureName". Die Rückgabemenge wird nur geliefert, wenn beim Aufruf der für diesen Parameter angegebene Wert der Bedingung "Condition" genügt. ("NULL" bei der speziellen Bedingung "ProcedureResultConditionID = 0".)
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_name = 10006;</code>
     */
    private $parameter_name = null;
    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die Genauigkeit, sprich die maximale Anzahl an Nachkomma-Stellen an, die ein Wert, der in der Spalte "ResultColumnName"steht, enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue scale = 10007;</code>
     */
    private $scale = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge der Spalte "ResultColumnName" innerhalb aller Rückgabespalten. "0" bedeutet, daß sie nicht ausgegeben wird, also entweder in einer älteren Version vorhanden war (aber aktuell nicht mehr gültig ist) oder nur zur Sortierung dient.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10008;</code>
     */
    private $sort_no = null;
    /**
     * <pre>
     * Name einer Rückgabespalte der Ergebnismenge
     * </pre>
     *
     * <code>.dstore.values.StringValue result_column_name = 10009;</code>
     */
    private $result_column_name = null;
    /**
     * <pre>
     * Wieviel Byte können Werte, die in der Spalte "ResultColumnName" ausgegeben werden, maximal enthalten. Bei vielen Daten-Typen ist die Speicherbelegung immer so groß wie dieser Wert (bei numerischen Daten-Typen z.B.).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue length = 10010;</code>
     */
    private $length = null;
    /**
     * <pre>
     * Wann die Beschreibung ("Description") zuletzt editiert wurde
     * </pre>
     *
     * <code>.dstore.values.TimestampValue description_last_edited = 10011;</code>
     */
    private $description_last_edited = null;
    /**
     * <pre>
     * Seit welcher Version gibt es die Spalte "ResultColumnName"
     * </pre>
     *
     * <code>.dstore.values.StringValue introduced_indstore_version = 10012;</code>
     */
    private $introduced_indstore_version = null;
    /**
     * <pre>
     * Gibt den Daten-Typ der Spalte "ResultColumnName" an ("varchar", "tinyint", etc.)
     * </pre>
     *
     * <code>.dstore.values.StringValue data_type = 10013;</code>
     */
    private $data_type = null;
    /**
     * <pre>
     * Bezeichnung der Bedingung "ProcedureResultConditionID". Derzeit entweder "Parameterunabhängige Rückgabemenge" oder aber &lt;ProzedurName&gt;_&lt;fortlaufende Nummer&gt;.
     * </pre>
     *
     * <code>.dstore.values.StringValue proc_result_cond_description = 10014;</code>
     */
    private $proc_result_cond_description = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\DoGetProcedureResultSetsAd::initOnce();
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
     * Die Rückgabemenge wird nur geliefert, wenn der für "ParameterName" übergebene Wert dieser Bedingung genügt. Fast immer handelt es sich hier um eine Bedingung, die in SQL ausgewertet werden kann, zumindest aber mit Hilfe von regulären Ausdrücken.
     * </pre>
     *
     * <code>.dstore.values.StringValue condition = 10001;</code>
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * <pre>
     * Die Rückgabemenge wird nur geliefert, wenn der für "ParameterName" übergebene Wert dieser Bedingung genügt. Fast immer handelt es sich hier um eine Bedingung, die in SQL ausgewertet werden kann, zumindest aber mit Hilfe von regulären Ausdrücken.
     * </pre>
     *
     * <code>.dstore.values.StringValue condition = 10001;</code>
     */
    public function setCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->condition = $var;
    }

    /**
     * <pre>
     * ID einer Bedingung, unter der die Spalten "ResultColumnName" (also alle Datensätze mit gleichem Wert in dieser Spalte) als Ergebnismenge zurückgegeben werden. "0" bedeutet, daß die Rückgabemenge an keine Bedingung gebunden ist. (siehe Beschreibung !)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue procedure_result_condition_id = 10002;</code>
     */
    public function getProcedureResultConditionId()
    {
        return $this->procedure_result_condition_id;
    }

    /**
     * <pre>
     * ID einer Bedingung, unter der die Spalten "ResultColumnName" (also alle Datensätze mit gleichem Wert in dieser Spalte) als Ergebnismenge zurückgegeben werden. "0" bedeutet, daß die Rückgabemenge an keine Bedingung gebunden ist. (siehe Beschreibung !)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue procedure_result_condition_id = 10002;</code>
     */
    public function setProcedureResultConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->procedure_result_condition_id = $var;
    }

    /**
     * <pre>
     * Seit welcher Version die Beschreibung ("Description") gilt
     * </pre>
     *
     * <code>.dstore.values.StringValue description_valid_since_version = 10003;</code>
     */
    public function getDescriptionValidSinceVersion()
    {
        return $this->description_valid_since_version;
    }

    /**
     * <pre>
     * Seit welcher Version die Beschreibung ("Description") gilt
     * </pre>
     *
     * <code>.dstore.values.StringValue description_valid_since_version = 10003;</code>
     */
    public function setDescriptionValidSinceVersion(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description_valid_since_version = $var;
    }

    /**
     * <pre>
     * Beschreibung der Spalte "ResultColumnName", also was die Werte in dieser Spalte besagen oder bedeuten
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10004;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Beschreibung der Spalte "ResultColumnName", also was die Werte in dieser Spalte besagen oder bedeuten
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10004;</code>
     */
    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description = $var;
    }

    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die maximale Anzahl Stellen an, die ein Wert, der in der Spalte "ResultColumnName" steht, enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue precision_value = 10005;</code>
     */
    public function getPrecisionValue()
    {
        return $this->precision_value;
    }

    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die maximale Anzahl Stellen an, die ein Wert, der in der Spalte "ResultColumnName" steht, enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue precision_value = 10005;</code>
     */
    public function setPrecisionValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->precision_value = $var;
    }

    /**
     * <pre>
     * Name eines Parameters der Prozedur "&#64;ProcedureName". Die Rückgabemenge wird nur geliefert, wenn beim Aufruf der für diesen Parameter angegebene Wert der Bedingung "Condition" genügt. ("NULL" bei der speziellen Bedingung "ProcedureResultConditionID = 0".)
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_name = 10006;</code>
     */
    public function getParameterName()
    {
        return $this->parameter_name;
    }

    /**
     * <pre>
     * Name eines Parameters der Prozedur "&#64;ProcedureName". Die Rückgabemenge wird nur geliefert, wenn beim Aufruf der für diesen Parameter angegebene Wert der Bedingung "Condition" genügt. ("NULL" bei der speziellen Bedingung "ProcedureResultConditionID = 0".)
     * </pre>
     *
     * <code>.dstore.values.StringValue parameter_name = 10006;</code>
     */
    public function setParameterName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->parameter_name = $var;
    }

    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die Genauigkeit, sprich die maximale Anzahl an Nachkomma-Stellen an, die ein Wert, der in der Spalte "ResultColumnName"steht, enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue scale = 10007;</code>
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * <pre>
     * Gilt nur für einige numerische Daten-Typen (z.B. "decimal") und gibt die Genauigkeit, sprich die maximale Anzahl an Nachkomma-Stellen an, die ein Wert, der in der Spalte "ResultColumnName"steht, enthalten kann
     * </pre>
     *
     * <code>.dstore.values.IntegerValue scale = 10007;</code>
     */
    public function setScale(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->scale = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge der Spalte "ResultColumnName" innerhalb aller Rückgabespalten. "0" bedeutet, daß sie nicht ausgegeben wird, also entweder in einer älteren Version vorhanden war (aber aktuell nicht mehr gültig ist) oder nur zur Sortierung dient.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10008;</code>
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge der Spalte "ResultColumnName" innerhalb aller Rückgabespalten. "0" bedeutet, daß sie nicht ausgegeben wird, also entweder in einer älteren Version vorhanden war (aber aktuell nicht mehr gültig ist) oder nur zur Sortierung dient.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10008;</code>
     */
    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_no = $var;
    }

    /**
     * <pre>
     * Name einer Rückgabespalte der Ergebnismenge
     * </pre>
     *
     * <code>.dstore.values.StringValue result_column_name = 10009;</code>
     */
    public function getResultColumnName()
    {
        return $this->result_column_name;
    }

    /**
     * <pre>
     * Name einer Rückgabespalte der Ergebnismenge
     * </pre>
     *
     * <code>.dstore.values.StringValue result_column_name = 10009;</code>
     */
    public function setResultColumnName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->result_column_name = $var;
    }

    /**
     * <pre>
     * Wieviel Byte können Werte, die in der Spalte "ResultColumnName" ausgegeben werden, maximal enthalten. Bei vielen Daten-Typen ist die Speicherbelegung immer so groß wie dieser Wert (bei numerischen Daten-Typen z.B.).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue length = 10010;</code>
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * <pre>
     * Wieviel Byte können Werte, die in der Spalte "ResultColumnName" ausgegeben werden, maximal enthalten. Bei vielen Daten-Typen ist die Speicherbelegung immer so groß wie dieser Wert (bei numerischen Daten-Typen z.B.).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue length = 10010;</code>
     */
    public function setLength(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->length = $var;
    }

    /**
     * <pre>
     * Wann die Beschreibung ("Description") zuletzt editiert wurde
     * </pre>
     *
     * <code>.dstore.values.TimestampValue description_last_edited = 10011;</code>
     */
    public function getDescriptionLastEdited()
    {
        return $this->description_last_edited;
    }

    /**
     * <pre>
     * Wann die Beschreibung ("Description") zuletzt editiert wurde
     * </pre>
     *
     * <code>.dstore.values.TimestampValue description_last_edited = 10011;</code>
     */
    public function setDescriptionLastEdited(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->description_last_edited = $var;
    }

    /**
     * <pre>
     * Seit welcher Version gibt es die Spalte "ResultColumnName"
     * </pre>
     *
     * <code>.dstore.values.StringValue introduced_indstore_version = 10012;</code>
     */
    public function getIntroducedIndstoreVersion()
    {
        return $this->introduced_indstore_version;
    }

    /**
     * <pre>
     * Seit welcher Version gibt es die Spalte "ResultColumnName"
     * </pre>
     *
     * <code>.dstore.values.StringValue introduced_indstore_version = 10012;</code>
     */
    public function setIntroducedIndstoreVersion(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->introduced_indstore_version = $var;
    }

    /**
     * <pre>
     * Gibt den Daten-Typ der Spalte "ResultColumnName" an ("varchar", "tinyint", etc.)
     * </pre>
     *
     * <code>.dstore.values.StringValue data_type = 10013;</code>
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * <pre>
     * Gibt den Daten-Typ der Spalte "ResultColumnName" an ("varchar", "tinyint", etc.)
     * </pre>
     *
     * <code>.dstore.values.StringValue data_type = 10013;</code>
     */
    public function setDataType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->data_type = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Bedingung "ProcedureResultConditionID". Derzeit entweder "Parameterunabhängige Rückgabemenge" oder aber &lt;ProzedurName&gt;_&lt;fortlaufende Nummer&gt;.
     * </pre>
     *
     * <code>.dstore.values.StringValue proc_result_cond_description = 10014;</code>
     */
    public function getProcResultCondDescription()
    {
        return $this->proc_result_cond_description;
    }

    /**
     * <pre>
     * Bezeichnung der Bedingung "ProcedureResultConditionID". Derzeit entweder "Parameterunabhängige Rückgabemenge" oder aber &lt;ProzedurName&gt;_&lt;fortlaufende Nummer&gt;.
     * </pre>
     *
     * <code>.dstore.values.StringValue proc_result_cond_description = 10014;</code>
     */
    public function setProcResultCondDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->proc_result_cond_description = $var;
    }

}

