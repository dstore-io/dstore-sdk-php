<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonPropertiesHist_Ad.proto

namespace Dstore\Engine\Pm_GetPersonPropertiesHist_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPersonPropertiesHist_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Was enthält "Value" (womöglich wegen Zugriffsbeschränkungen nur einen Teil) ?- NULL : den vollständigen Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "Value" ist dann "NULL"
     * </pre>
     *
     * <code>.dstore.values.StringValue value_restricted_by_pattern = 10001;</code>
     */
    private $value_restricted_by_pattern = null;
    /**
     * <pre>
     * Ende des Gültigkeits-Zeitraums der Eigenschaft "Value" (für "&#64;PersonID"). "NULL" bedeutet, daß die Eigenschaft aktuell und bis auf weiteres auch in Zukunft ("für immer") "&#64;PersonID" zugewiesen ist.
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_to = 10002;</code>
     */
    private $valid_to = null;
    /**
     * <pre>
     * "ValidTo" als "String" im Format "01.04.2001 15:20:55:115"
     * </pre>
     *
     * <code>.dstore.values.StringValue valid_to_char = 10003;</code>
     */
    private $valid_to_char = null;
    /**
     * <pre>
     * Eine Eigenschaft zu "&#64;PersonCharacteristicID", die "&#64;PersonID" von "ValidFrom" bis "ValidTo" zugewiesen ist/war. Kann aufgrund von Zugriffsbeschränkungen "NULL" oder unvollständig sein, was dann durch "ValueRestrictedByPattern" gekennzeichnet ist.
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10004;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Beginn des Gültigkeits-Zeitraums der Eigenschaft "Value" (für "&#64;PersonID")
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_from = 10005;</code>
     */
    private $valid_from = null;
    /**
     * <pre>
     * ID der Eigenschaft "Value".Anmerkung: Kann "NULL" sein, da "Values" aus der Historie genau dann nicht mehr in "PersonCharacteristicValues" vorkommen, wenn der Wert AKTUELL keiner Person zugewiesen ist !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10006;</code>
     */
    private $value_id = null;
    /**
     * <pre>
     * "ValidFrom" als "String" im Format "01.04.2001 15:20:55:115"
     * </pre>
     *
     * <code>.dstore.values.StringValue valid_from_char = 10007;</code>
     */
    private $valid_from_char = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPersonPropertiesHistAd::initOnce();
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
     * Was enthält "Value" (womöglich wegen Zugriffsbeschränkungen nur einen Teil) ?- NULL : den vollständigen Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "Value" ist dann "NULL"
     * </pre>
     *
     * <code>.dstore.values.StringValue value_restricted_by_pattern = 10001;</code>
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
     * <code>.dstore.values.StringValue value_restricted_by_pattern = 10001;</code>
     */
    public function setValueRestrictedByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value_restricted_by_pattern = $var;
    }

    /**
     * <pre>
     * Ende des Gültigkeits-Zeitraums der Eigenschaft "Value" (für "&#64;PersonID"). "NULL" bedeutet, daß die Eigenschaft aktuell und bis auf weiteres auch in Zukunft ("für immer") "&#64;PersonID" zugewiesen ist.
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_to = 10002;</code>
     */
    public function getValidTo()
    {
        return $this->valid_to;
    }

    /**
     * <pre>
     * Ende des Gültigkeits-Zeitraums der Eigenschaft "Value" (für "&#64;PersonID"). "NULL" bedeutet, daß die Eigenschaft aktuell und bis auf weiteres auch in Zukunft ("für immer") "&#64;PersonID" zugewiesen ist.
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_to = 10002;</code>
     */
    public function setValidTo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_to = $var;
    }

    /**
     * <pre>
     * "ValidTo" als "String" im Format "01.04.2001 15:20:55:115"
     * </pre>
     *
     * <code>.dstore.values.StringValue valid_to_char = 10003;</code>
     */
    public function getValidToChar()
    {
        return $this->valid_to_char;
    }

    /**
     * <pre>
     * "ValidTo" als "String" im Format "01.04.2001 15:20:55:115"
     * </pre>
     *
     * <code>.dstore.values.StringValue valid_to_char = 10003;</code>
     */
    public function setValidToChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->valid_to_char = $var;
    }

    /**
     * <pre>
     * Eine Eigenschaft zu "&#64;PersonCharacteristicID", die "&#64;PersonID" von "ValidFrom" bis "ValidTo" zugewiesen ist/war. Kann aufgrund von Zugriffsbeschränkungen "NULL" oder unvollständig sein, was dann durch "ValueRestrictedByPattern" gekennzeichnet ist.
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
     * Eine Eigenschaft zu "&#64;PersonCharacteristicID", die "&#64;PersonID" von "ValidFrom" bis "ValidTo" zugewiesen ist/war. Kann aufgrund von Zugriffsbeschränkungen "NULL" oder unvollständig sein, was dann durch "ValueRestrictedByPattern" gekennzeichnet ist.
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
     * Beginn des Gültigkeits-Zeitraums der Eigenschaft "Value" (für "&#64;PersonID")
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_from = 10005;</code>
     */
    public function getValidFrom()
    {
        return $this->valid_from;
    }

    /**
     * <pre>
     * Beginn des Gültigkeits-Zeitraums der Eigenschaft "Value" (für "&#64;PersonID")
     * </pre>
     *
     * <code>.dstore.values.TimestampValue valid_from = 10005;</code>
     */
    public function setValidFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->valid_from = $var;
    }

    /**
     * <pre>
     * ID der Eigenschaft "Value".Anmerkung: Kann "NULL" sein, da "Values" aus der Historie genau dann nicht mehr in "PersonCharacteristicValues" vorkommen, wenn der Wert AKTUELL keiner Person zugewiesen ist !
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
     * ID der Eigenschaft "Value".Anmerkung: Kann "NULL" sein, da "Values" aus der Historie genau dann nicht mehr in "PersonCharacteristicValues" vorkommen, wenn der Wert AKTUELL keiner Person zugewiesen ist !
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
     * "ValidFrom" als "String" im Format "01.04.2001 15:20:55:115"
     * </pre>
     *
     * <code>.dstore.values.StringValue valid_from_char = 10007;</code>
     */
    public function getValidFromChar()
    {
        return $this->valid_from_char;
    }

    /**
     * <pre>
     * "ValidFrom" als "String" im Format "01.04.2001 15:20:55:115"
     * </pre>
     *
     * <code>.dstore.values.StringValue valid_from_char = 10007;</code>
     */
    public function setValidFromChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->valid_from_char = $var;
    }

}
