<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPaymentAndShipping_Pu.proto

namespace Dstore\Engine\Om_GetPaymentAndShipping_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetPaymentAndShipping_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID der zur Zahlungsart "PaymentTypeID" hinterlegten "Region" (die bestimmte Länder zusammenfaßt). Wir geben diesen Datensatz nur dann aus, wenn der Auftraggeber ("&#64;PersonID") aus einem Land kommt, das dieser Region angehört.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue region_id_payment_type = 10001;</code>
     */
    private $region_id_payment_type = null;
    /**
     * <pre>
     * ID einer gefundenen Zahlungsart-Versandart-Kombination (die für die übergebenen Parameter gültig ist)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue payment_for_shipping_id = 10002;</code>
     */
    private $payment_for_shipping_id = null;
    /**
     * <pre>
     * ID der Versandart der Kombination "PaymentForShippingID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue shipping_type_id = 10003;</code>
     */
    private $shipping_type_id = null;
    /**
     * <pre>
     * Bezeichnung der Zahlungsart-Versandart-Kombination "PaymentForShippingID"
     * </pre>
     *
     * <code>.dstore.values.StringValue payment_for_shipping_description = 10004;</code>
     */
    private $payment_for_shipping_description = null;
    /**
     * <pre>
     * ID der Zahlungsart der Kombination "PaymentForShippingID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue payment_type_id = 10005;</code>
     */
    private $payment_type_id = null;
    /**
     * <pre>
     * ID der zur Versandart "ShippingTypeID" hinterlegten "Region" (die bestimmte Länder zusammenfaßt). Wir geben diesen Datensatz nur dann aus, wenn die Person, an die die Ware zu liefern ist ("&#64;DeliveryPersonID"), aus einem Land dieser Region kommt.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue region_id_shipping_type = 10006;</code>
     */
    private $region_id_shipping_type = null;
    /**
     * <pre>
     * ID einer Kategorie von Personen-Merkmalen. Gibt an, daß der Auftraggeber - falls er die Zahlungsart "PaymentTypeID" wählt - Eigenschaften zu den Merkmalen dieser Kategorie hinterlegen muß (Beispiel : Kreditkartendaten bei Kreditkarten-Zahlung).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_charac_category_id = 10007;</code>
     */
    private $person_charac_category_id = null;
    /**
     * <pre>
     * Eine Zahl, die den Grund angibt, warum keine gültige Kombination aus Zahlungs- und Versandart gefunden wurde (siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 20001;</code>
     */
    private $error_code = null;
    /**
     * <pre>
     * (Netto-)Kosten für die Zahlungsart "PaymentTypeID" - in der zum Besucher hinterlegten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue payment_cost = 30001;</code>
     */
    private $payment_cost = null;
    /**
     * <pre>
     * (Netto-)Kosten für die Versandart "ShippingTypeID" - in der zum Besucher hinterlegten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue shipping_cost = 30004;</code>
     */
    private $shipping_cost = null;
    /**
     * <pre>
     * Brutto-Kosten für die Versandart "ShippingTypeID" - in der zum Besucher hinterlegten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue shipping_cost_brutto = 30009;</code>
     */
    private $shipping_cost_brutto = null;
    /**
     * <pre>
     * Brutto-Kosten für die Zahlungsart "PaymentTypeID" - in der zum Besucher hinterlegten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue payment_cost_brutto = 30010;</code>
     */
    private $payment_cost_brutto = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetPaymentAndShippingPu::initOnce();
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
     * ID der zur Zahlungsart "PaymentTypeID" hinterlegten "Region" (die bestimmte Länder zusammenfaßt). Wir geben diesen Datensatz nur dann aus, wenn der Auftraggeber ("&#64;PersonID") aus einem Land kommt, das dieser Region angehört.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue region_id_payment_type = 10001;</code>
     */
    public function getRegionIdPaymentType()
    {
        return $this->region_id_payment_type;
    }

    /**
     * <pre>
     * ID der zur Zahlungsart "PaymentTypeID" hinterlegten "Region" (die bestimmte Länder zusammenfaßt). Wir geben diesen Datensatz nur dann aus, wenn der Auftraggeber ("&#64;PersonID") aus einem Land kommt, das dieser Region angehört.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue region_id_payment_type = 10001;</code>
     */
    public function setRegionIdPaymentType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->region_id_payment_type = $var;
    }

    /**
     * <pre>
     * ID einer gefundenen Zahlungsart-Versandart-Kombination (die für die übergebenen Parameter gültig ist)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue payment_for_shipping_id = 10002;</code>
     */
    public function getPaymentForShippingId()
    {
        return $this->payment_for_shipping_id;
    }

    /**
     * <pre>
     * ID einer gefundenen Zahlungsart-Versandart-Kombination (die für die übergebenen Parameter gültig ist)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue payment_for_shipping_id = 10002;</code>
     */
    public function setPaymentForShippingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->payment_for_shipping_id = $var;
    }

    /**
     * <pre>
     * ID der Versandart der Kombination "PaymentForShippingID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue shipping_type_id = 10003;</code>
     */
    public function getShippingTypeId()
    {
        return $this->shipping_type_id;
    }

    /**
     * <pre>
     * ID der Versandart der Kombination "PaymentForShippingID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue shipping_type_id = 10003;</code>
     */
    public function setShippingTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->shipping_type_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Zahlungsart-Versandart-Kombination "PaymentForShippingID"
     * </pre>
     *
     * <code>.dstore.values.StringValue payment_for_shipping_description = 10004;</code>
     */
    public function getPaymentForShippingDescription()
    {
        return $this->payment_for_shipping_description;
    }

    /**
     * <pre>
     * Bezeichnung der Zahlungsart-Versandart-Kombination "PaymentForShippingID"
     * </pre>
     *
     * <code>.dstore.values.StringValue payment_for_shipping_description = 10004;</code>
     */
    public function setPaymentForShippingDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->payment_for_shipping_description = $var;
    }

    /**
     * <pre>
     * ID der Zahlungsart der Kombination "PaymentForShippingID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue payment_type_id = 10005;</code>
     */
    public function getPaymentTypeId()
    {
        return $this->payment_type_id;
    }

    /**
     * <pre>
     * ID der Zahlungsart der Kombination "PaymentForShippingID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue payment_type_id = 10005;</code>
     */
    public function setPaymentTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->payment_type_id = $var;
    }

    /**
     * <pre>
     * ID der zur Versandart "ShippingTypeID" hinterlegten "Region" (die bestimmte Länder zusammenfaßt). Wir geben diesen Datensatz nur dann aus, wenn die Person, an die die Ware zu liefern ist ("&#64;DeliveryPersonID"), aus einem Land dieser Region kommt.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue region_id_shipping_type = 10006;</code>
     */
    public function getRegionIdShippingType()
    {
        return $this->region_id_shipping_type;
    }

    /**
     * <pre>
     * ID der zur Versandart "ShippingTypeID" hinterlegten "Region" (die bestimmte Länder zusammenfaßt). Wir geben diesen Datensatz nur dann aus, wenn die Person, an die die Ware zu liefern ist ("&#64;DeliveryPersonID"), aus einem Land dieser Region kommt.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue region_id_shipping_type = 10006;</code>
     */
    public function setRegionIdShippingType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->region_id_shipping_type = $var;
    }

    /**
     * <pre>
     * ID einer Kategorie von Personen-Merkmalen. Gibt an, daß der Auftraggeber - falls er die Zahlungsart "PaymentTypeID" wählt - Eigenschaften zu den Merkmalen dieser Kategorie hinterlegen muß (Beispiel : Kreditkartendaten bei Kreditkarten-Zahlung).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_charac_category_id = 10007;</code>
     */
    public function getPersonCharacCategoryId()
    {
        return $this->person_charac_category_id;
    }

    /**
     * <pre>
     * ID einer Kategorie von Personen-Merkmalen. Gibt an, daß der Auftraggeber - falls er die Zahlungsart "PaymentTypeID" wählt - Eigenschaften zu den Merkmalen dieser Kategorie hinterlegen muß (Beispiel : Kreditkartendaten bei Kreditkarten-Zahlung).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_charac_category_id = 10007;</code>
     */
    public function setPersonCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_charac_category_id = $var;
    }

    /**
     * <pre>
     * Eine Zahl, die den Grund angibt, warum keine gültige Kombination aus Zahlungs- und Versandart gefunden wurde (siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 20001;</code>
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * <pre>
     * Eine Zahl, die den Grund angibt, warum keine gültige Kombination aus Zahlungs- und Versandart gefunden wurde (siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue error_code = 20001;</code>
     */
    public function setErrorCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->error_code = $var;
    }

    /**
     * <pre>
     * (Netto-)Kosten für die Zahlungsart "PaymentTypeID" - in der zum Besucher hinterlegten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue payment_cost = 30001;</code>
     */
    public function getPaymentCost()
    {
        return $this->payment_cost;
    }

    /**
     * <pre>
     * (Netto-)Kosten für die Zahlungsart "PaymentTypeID" - in der zum Besucher hinterlegten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue payment_cost = 30001;</code>
     */
    public function setPaymentCost(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->payment_cost = $var;
    }

    /**
     * <pre>
     * (Netto-)Kosten für die Versandart "ShippingTypeID" - in der zum Besucher hinterlegten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue shipping_cost = 30004;</code>
     */
    public function getShippingCost()
    {
        return $this->shipping_cost;
    }

    /**
     * <pre>
     * (Netto-)Kosten für die Versandart "ShippingTypeID" - in der zum Besucher hinterlegten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue shipping_cost = 30004;</code>
     */
    public function setShippingCost(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->shipping_cost = $var;
    }

    /**
     * <pre>
     * Brutto-Kosten für die Versandart "ShippingTypeID" - in der zum Besucher hinterlegten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue shipping_cost_brutto = 30009;</code>
     */
    public function getShippingCostBrutto()
    {
        return $this->shipping_cost_brutto;
    }

    /**
     * <pre>
     * Brutto-Kosten für die Versandart "ShippingTypeID" - in der zum Besucher hinterlegten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue shipping_cost_brutto = 30009;</code>
     */
    public function setShippingCostBrutto(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->shipping_cost_brutto = $var;
    }

    /**
     * <pre>
     * Brutto-Kosten für die Zahlungsart "PaymentTypeID" - in der zum Besucher hinterlegten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue payment_cost_brutto = 30010;</code>
     */
    public function getPaymentCostBrutto()
    {
        return $this->payment_cost_brutto;
    }

    /**
     * <pre>
     * Brutto-Kosten für die Zahlungsart "PaymentTypeID" - in der zum Besucher hinterlegten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue payment_cost_brutto = 30010;</code>
     */
    public function setPaymentCostBrutto(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->payment_cost_brutto = $var;
    }

}

