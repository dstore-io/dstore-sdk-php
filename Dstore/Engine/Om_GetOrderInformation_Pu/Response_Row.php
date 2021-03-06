<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrderInformation_Pu.proto

namespace Dstore\Engine\Om_GetOrderInformation_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetOrderInformation_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID eines Informationstyps, also um was es sich bei der Zusatz-Information "Information" handelt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10001;</code>
     */
    private $information_type_id = null;
    /**
     * <pre>
     * ID eines Merkmals, das zur "InformationTypeID" korrespondiert. Hintergrund : Man möchte im Auftrag die Eigenschaft des Auftraggebers zu diesem Merkmal zum Zeitpunkt der Auftragserstellung speichern (denn die Eigenschaft könnte ja geändert werden !)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10002;</code>
     */
    private $person_characteristic_id = null;
    /**
     * <pre>
     * ID eines Auftrags (also entweder "&#64;OrderID" bzw. die ID des Auftrags zu "&#64;OrderCode")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue order_id = 10003;</code>
     */
    private $order_id = null;
    /**
     * <pre>
     * Bezeichnung der "InformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information_type = 10004;</code>
     */
    private $information_type = null;
    /**
     * <pre>
     * Die zum Auftrag "OrderID" hinterlegte Information
     * </pre>
     *
     * <code>.dstore.values.StringValue information = 10005;</code>
     */
    private $information = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetOrderInformationPu::initOnce();
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
     * ID eines Informationstyps, also um was es sich bei der Zusatz-Information "Information" handelt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10001;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <pre>
     * ID eines Informationstyps, also um was es sich bei der Zusatz-Information "Information" handelt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10001;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <pre>
     * ID eines Merkmals, das zur "InformationTypeID" korrespondiert. Hintergrund : Man möchte im Auftrag die Eigenschaft des Auftraggebers zu diesem Merkmal zum Zeitpunkt der Auftragserstellung speichern (denn die Eigenschaft könnte ja geändert werden !)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10002;</code>
     */
    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    /**
     * <pre>
     * ID eines Merkmals, das zur "InformationTypeID" korrespondiert. Hintergrund : Man möchte im Auftrag die Eigenschaft des Auftraggebers zu diesem Merkmal zum Zeitpunkt der Auftragserstellung speichern (denn die Eigenschaft könnte ja geändert werden !)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10002;</code>
     */
    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_characteristic_id = $var;
    }

    /**
     * <pre>
     * ID eines Auftrags (also entweder "&#64;OrderID" bzw. die ID des Auftrags zu "&#64;OrderCode")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue order_id = 10003;</code>
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * <pre>
     * ID eines Auftrags (also entweder "&#64;OrderID" bzw. die ID des Auftrags zu "&#64;OrderCode")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue order_id = 10003;</code>
     */
    public function setOrderId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung der "InformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information_type = 10004;</code>
     */
    public function getInformationType()
    {
        return $this->information_type;
    }

    /**
     * <pre>
     * Bezeichnung der "InformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information_type = 10004;</code>
     */
    public function setInformationType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->information_type = $var;
    }

    /**
     * <pre>
     * Die zum Auftrag "OrderID" hinterlegte Information
     * </pre>
     *
     * <code>.dstore.values.StringValue information = 10005;</code>
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * <pre>
     * Die zum Auftrag "OrderID" hinterlegte Information
     * </pre>
     *
     * <code>.dstore.values.StringValue information = 10005;</code>
     */
    public function setInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->information = $var;
    }

}

