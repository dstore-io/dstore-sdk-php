<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPersonInfoForOrders_Ad.proto

namespace Dstore\Engine\Om_GetPersonInfoForOrders_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetPersonInfoForOrders_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Was enthält "(Actual)Value" (möglicherw. wg. Zugr.beschr. nur einen Teil) ?- NULL : den vollst. Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "(Actual)Value" ist dann "NULL"
     * </pre>
     *
     * <code>.dstore.values.StringValue value_restricted_by_pattern = 10001;</code>
     */
    private $value_restricted_by_pattern = null;
    /**
     * <pre>
     * Bezeichnung des Merkmals "PersonCharacteristicID". Falls eine "&#64;LanguageID" ("&lt;&gt; 0" bzw. ungleich der "DefaultLanguageID" aus "Settings") angegeben wurde, wird eine entsprechende Übersetzung (sofern vorhanden, sonst die Standardbezeichnung) ausgegeben.
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10002;</code>
     */
    private $description = null;
    /**
     * <pre>
     * ID des Auftraggebers bzw. der Person, an die die Ware geliefert werden soll (je nach "InvoiceOrDeliveryAdress")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_id = 10003;</code>
     */
    private $person_id = null;
    /**
     * <pre>
     * "ia" : Für "Invoice Address", d.h. bei "PersonID" handelt es sich um den Auftraggeber"da" : Für "Delivery Address", also ist "PersonID" die LieferanschriftACHTUNG : Aufgrund der Abwärtskompatibilität enthält "Description" ein Präfix "ia_" oder "da_" !
     * </pre>
     *
     * <code>.dstore.values.StringValue invoice_or_delivery_adress = 10004;</code>
     */
    private $invoice_or_delivery_adress = null;
    /**
     * <pre>
     * Immer "NULL", falls "&#64;GetActualProperties = 0" übergeben wurde. Ansonsten steht hier die AKTUELLE (zum Zeitpunkt des Aufrufs der Prozedur) Eigenschaft der Person "PersonID" zum Merkmal "PersonCharacteristicID".
     * </pre>
     *
     * <code>.dstore.values.StringValue actual_value = 10005;</code>
     */
    private $actual_value = null;
    /**
     * <pre>
     * ID eines Personen-Merkmals, das in "PersonTypeSettings" zum Schlüssel "PersonOutputCharacteristicIDsForOrderLists&gt;" zur "PersonTypeID" definiert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10006;</code>
     */
    private $person_characteristic_id = null;
    /**
     * <pre>
     * Eigenschaft von "PersonID" zum Merkmal "PersonCharacteristicID" zum Zeitpunkt "&#64;DateAndTime" bzw. zum aktuellen Zeitpunkt falls "&#64;GetActualProperties = 0" und zu "PersonCharacteristicID" keine Historie gepflegt wird. (siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10007;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge von "PersonCharacteristicID" innerhalb aller Merkmale
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10008;</code>
     */
    private $sort_no = null;
    /**
     * <pre>
     * ID des Personen-Typs von "PersonID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_type_id = 10009;</code>
     */
    private $person_type_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetPersonInfoForOrdersAd::initOnce();
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
     * Was enthält "(Actual)Value" (möglicherw. wg. Zugr.beschr. nur einen Teil) ?- NULL : den vollst. Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "(Actual)Value" ist dann "NULL"
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
     * Was enthält "(Actual)Value" (möglicherw. wg. Zugr.beschr. nur einen Teil) ?- NULL : den vollst. Wert- "#left(&lt;n&gt;)#" : nur die ERSTEN n Zeichen- "#right(&lt;n&gt;)#" : nur die LETZTEN n ZeichenAnmerkung : "n = 0" möglich, "(Actual)Value" ist dann "NULL"
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
     * Bezeichnung des Merkmals "PersonCharacteristicID". Falls eine "&#64;LanguageID" ("&lt;&gt; 0" bzw. ungleich der "DefaultLanguageID" aus "Settings") angegeben wurde, wird eine entsprechende Übersetzung (sofern vorhanden, sonst die Standardbezeichnung) ausgegeben.
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10002;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Bezeichnung des Merkmals "PersonCharacteristicID". Falls eine "&#64;LanguageID" ("&lt;&gt; 0" bzw. ungleich der "DefaultLanguageID" aus "Settings") angegeben wurde, wird eine entsprechende Übersetzung (sofern vorhanden, sonst die Standardbezeichnung) ausgegeben.
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10002;</code>
     */
    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description = $var;
    }

    /**
     * <pre>
     * ID des Auftraggebers bzw. der Person, an die die Ware geliefert werden soll (je nach "InvoiceOrDeliveryAdress")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_id = 10003;</code>
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * <pre>
     * ID des Auftraggebers bzw. der Person, an die die Ware geliefert werden soll (je nach "InvoiceOrDeliveryAdress")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_id = 10003;</code>
     */
    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_id = $var;
    }

    /**
     * <pre>
     * "ia" : Für "Invoice Address", d.h. bei "PersonID" handelt es sich um den Auftraggeber"da" : Für "Delivery Address", also ist "PersonID" die LieferanschriftACHTUNG : Aufgrund der Abwärtskompatibilität enthält "Description" ein Präfix "ia_" oder "da_" !
     * </pre>
     *
     * <code>.dstore.values.StringValue invoice_or_delivery_adress = 10004;</code>
     */
    public function getInvoiceOrDeliveryAdress()
    {
        return $this->invoice_or_delivery_adress;
    }

    /**
     * <pre>
     * "ia" : Für "Invoice Address", d.h. bei "PersonID" handelt es sich um den Auftraggeber"da" : Für "Delivery Address", also ist "PersonID" die LieferanschriftACHTUNG : Aufgrund der Abwärtskompatibilität enthält "Description" ein Präfix "ia_" oder "da_" !
     * </pre>
     *
     * <code>.dstore.values.StringValue invoice_or_delivery_adress = 10004;</code>
     */
    public function setInvoiceOrDeliveryAdress(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->invoice_or_delivery_adress = $var;
    }

    /**
     * <pre>
     * Immer "NULL", falls "&#64;GetActualProperties = 0" übergeben wurde. Ansonsten steht hier die AKTUELLE (zum Zeitpunkt des Aufrufs der Prozedur) Eigenschaft der Person "PersonID" zum Merkmal "PersonCharacteristicID".
     * </pre>
     *
     * <code>.dstore.values.StringValue actual_value = 10005;</code>
     */
    public function getActualValue()
    {
        return $this->actual_value;
    }

    /**
     * <pre>
     * Immer "NULL", falls "&#64;GetActualProperties = 0" übergeben wurde. Ansonsten steht hier die AKTUELLE (zum Zeitpunkt des Aufrufs der Prozedur) Eigenschaft der Person "PersonID" zum Merkmal "PersonCharacteristicID".
     * </pre>
     *
     * <code>.dstore.values.StringValue actual_value = 10005;</code>
     */
    public function setActualValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->actual_value = $var;
    }

    /**
     * <pre>
     * ID eines Personen-Merkmals, das in "PersonTypeSettings" zum Schlüssel "PersonOutputCharacteristicIDsForOrderLists&gt;" zur "PersonTypeID" definiert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10006;</code>
     */
    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    /**
     * <pre>
     * ID eines Personen-Merkmals, das in "PersonTypeSettings" zum Schlüssel "PersonOutputCharacteristicIDsForOrderLists&gt;" zur "PersonTypeID" definiert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10006;</code>
     */
    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_characteristic_id = $var;
    }

    /**
     * <pre>
     * Eigenschaft von "PersonID" zum Merkmal "PersonCharacteristicID" zum Zeitpunkt "&#64;DateAndTime" bzw. zum aktuellen Zeitpunkt falls "&#64;GetActualProperties = 0" und zu "PersonCharacteristicID" keine Historie gepflegt wird. (siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10007;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Eigenschaft von "PersonID" zum Merkmal "PersonCharacteristicID" zum Zeitpunkt "&#64;DateAndTime" bzw. zum aktuellen Zeitpunkt falls "&#64;GetActualProperties = 0" und zu "PersonCharacteristicID" keine Historie gepflegt wird. (siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10007;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge von "PersonCharacteristicID" innerhalb aller Merkmale
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
     * Bestimmt die Reihenfolge von "PersonCharacteristicID" innerhalb aller Merkmale
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
     * ID des Personen-Typs von "PersonID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_type_id = 10009;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <pre>
     * ID des Personen-Typs von "PersonID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_type_id = 10009;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

}

