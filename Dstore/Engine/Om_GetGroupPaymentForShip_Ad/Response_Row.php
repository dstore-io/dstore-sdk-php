<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetGroupPaymentForShip_Ad.proto

namespace Dstore\Engine\Om_GetGroupPaymentForShip_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetGroupPaymentForShip_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Bezeichnung der Gruppe "GroupID"
     * </pre>
     *
     * <code>.dstore.values.StringValue group_description = 10001;</code>
     */
    private $group_description = null;
    /**
     * <pre>
     * ID einer Zahlungsart-Versandart-Kombination, die die Gruppe "GroupID" bei einer Bestellung (prinzipiell) auswählen darf
     * </pre>
     *
     * <code>.dstore.values.IntegerValue payment_for_shipping_id = 10002;</code>
     */
    private $payment_for_shipping_id = null;
    /**
     * <pre>
     * Bezeichnung der "PaymentForShippingID" für den Administrator. Hintergrund : Kombinationen, die von der Bezeichnung her identisch sind, und für einen Administrator bei Konfigurierungen nicht auseinander zu halten wären.
     * </pre>
     *
     * <code>.dstore.values.StringValue description_for_admin = 10003;</code>
     */
    private $description_for_admin = null;
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
     * ID einer Personen-Gruppe
     * </pre>
     *
     * <code>.dstore.values.IntegerValue group_id = 10005;</code>
     */
    private $group_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetGroupPaymentForShipAd::initOnce();
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
     * Bezeichnung der Gruppe "GroupID"
     * </pre>
     *
     * <code>.dstore.values.StringValue group_description = 10001;</code>
     */
    public function getGroupDescription()
    {
        return $this->group_description;
    }

    /**
     * <pre>
     * Bezeichnung der Gruppe "GroupID"
     * </pre>
     *
     * <code>.dstore.values.StringValue group_description = 10001;</code>
     */
    public function setGroupDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->group_description = $var;
    }

    /**
     * <pre>
     * ID einer Zahlungsart-Versandart-Kombination, die die Gruppe "GroupID" bei einer Bestellung (prinzipiell) auswählen darf
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
     * ID einer Zahlungsart-Versandart-Kombination, die die Gruppe "GroupID" bei einer Bestellung (prinzipiell) auswählen darf
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
     * Bezeichnung der "PaymentForShippingID" für den Administrator. Hintergrund : Kombinationen, die von der Bezeichnung her identisch sind, und für einen Administrator bei Konfigurierungen nicht auseinander zu halten wären.
     * </pre>
     *
     * <code>.dstore.values.StringValue description_for_admin = 10003;</code>
     */
    public function getDescriptionForAdmin()
    {
        return $this->description_for_admin;
    }

    /**
     * <pre>
     * Bezeichnung der "PaymentForShippingID" für den Administrator. Hintergrund : Kombinationen, die von der Bezeichnung her identisch sind, und für einen Administrator bei Konfigurierungen nicht auseinander zu halten wären.
     * </pre>
     *
     * <code>.dstore.values.StringValue description_for_admin = 10003;</code>
     */
    public function setDescriptionForAdmin(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description_for_admin = $var;
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
     * ID einer Personen-Gruppe
     * </pre>
     *
     * <code>.dstore.values.IntegerValue group_id = 10005;</code>
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * <pre>
     * ID einer Personen-Gruppe
     * </pre>
     *
     * <code>.dstore.values.IntegerValue group_id = 10005;</code>
     */
    public function setGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->group_id = $var;
    }

}
