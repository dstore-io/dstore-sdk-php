<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCashAccountTypes.proto

namespace Dstore\Engine\Om_GetCashAccountTypes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetCashAccountTypes.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Die Bezeichnung des Kontotyps
     * </pre>
     *
     * <code>.dstore.values.StringValue cash_account_type = 10001;</code>
     */
    private $cash_account_type = null;
    /**
     * <pre>
     * Die ID eines Kontotyps
     * </pre>
     *
     * <code>.dstore.values.IntegerValue cash_account_type_id = 10002;</code>
     */
    private $cash_account_type_id = null;
    /**
     * <pre>
     * Der Standardwert unter den der Saldo von Konten dieses Typs nicht sinken darf
     * </pre>
     *
     * <code>.dstore.values.DecimalValue min_account_balance = 10003;</code>
     */
    private $min_account_balance = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetCashAccountTypes::initOnce();
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
     * Die Bezeichnung des Kontotyps
     * </pre>
     *
     * <code>.dstore.values.StringValue cash_account_type = 10001;</code>
     */
    public function getCashAccountType()
    {
        return $this->cash_account_type;
    }

    /**
     * <pre>
     * Die Bezeichnung des Kontotyps
     * </pre>
     *
     * <code>.dstore.values.StringValue cash_account_type = 10001;</code>
     */
    public function setCashAccountType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->cash_account_type = $var;
    }

    /**
     * <pre>
     * Die ID eines Kontotyps
     * </pre>
     *
     * <code>.dstore.values.IntegerValue cash_account_type_id = 10002;</code>
     */
    public function getCashAccountTypeId()
    {
        return $this->cash_account_type_id;
    }

    /**
     * <pre>
     * Die ID eines Kontotyps
     * </pre>
     *
     * <code>.dstore.values.IntegerValue cash_account_type_id = 10002;</code>
     */
    public function setCashAccountTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->cash_account_type_id = $var;
    }

    /**
     * <pre>
     * Der Standardwert unter den der Saldo von Konten dieses Typs nicht sinken darf
     * </pre>
     *
     * <code>.dstore.values.DecimalValue min_account_balance = 10003;</code>
     */
    public function getMinAccountBalance()
    {
        return $this->min_account_balance;
    }

    /**
     * <pre>
     * Der Standardwert unter den der Saldo von Konten dieses Typs nicht sinken darf
     * </pre>
     *
     * <code>.dstore.values.DecimalValue min_account_balance = 10003;</code>
     */
    public function setMinAccountBalance(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->min_account_balance = $var;
    }

}

