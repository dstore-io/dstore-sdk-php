<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonCharacValueID_Ad.proto

namespace Dstore\Engine\Pm_GetPersonCharacValueID_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPersonCharacValueID_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID des Personen-Merkmals, zu dem die Eigenschaft "&#64;Value" gehört. Besteht für ein Merkmal eine lesende (vollst. o. eingeschr.) Zugriffsbeschränkung (s. "pm_GetPChAccRestrForUsers_Ad") für den Aufrufer, FEHLT der entsprechende Datensatz im Ergebnis !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10001;</code>
     */
    private $person_characteristic_id = null;
    /**
     * <pre>
     * ID der Eigenschaft "&#64;Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10002;</code>
     */
    private $value_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPersonCharacValueIDAd::initOnce();
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
     * ID des Personen-Merkmals, zu dem die Eigenschaft "&#64;Value" gehört. Besteht für ein Merkmal eine lesende (vollst. o. eingeschr.) Zugriffsbeschränkung (s. "pm_GetPChAccRestrForUsers_Ad") für den Aufrufer, FEHLT der entsprechende Datensatz im Ergebnis !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10001;</code>
     */
    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    /**
     * <pre>
     * ID des Personen-Merkmals, zu dem die Eigenschaft "&#64;Value" gehört. Besteht für ein Merkmal eine lesende (vollst. o. eingeschr.) Zugriffsbeschränkung (s. "pm_GetPChAccRestrForUsers_Ad") für den Aufrufer, FEHLT der entsprechende Datensatz im Ergebnis !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_characteristic_id = 10001;</code>
     */
    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_characteristic_id = $var;
    }

    /**
     * <pre>
     * ID der Eigenschaft "&#64;Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10002;</code>
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * <pre>
     * ID der Eigenschaft "&#64;Value"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue value_id = 10002;</code>
     */
    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->value_id = $var;
    }

}
