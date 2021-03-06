<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetCommunityMemberSettings.proto

namespace Dstore\Engine\Co_GetCommunityMemberSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_GetCommunityMemberSettings.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Der zum Schlüssel "&#64;KeyVariable" hinterlegte Wert des Community-Mitglieds "&#64;CommunityMemberID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10001;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Ein Schlüssel wie z.B. "sys_AccessPermission", zu dem das Community-Mitglied "&#64;CommunityMemberID" einen Wert hinterlegt hat
     * </pre>
     *
     * <code>.dstore.values.StringValue key_variable = 20002;</code>
     */
    private $key_variable = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoGetCommunityMemberSettings::initOnce();
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
     * Der zum Schlüssel "&#64;KeyVariable" hinterlegte Wert des Community-Mitglieds "&#64;CommunityMemberID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10001;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Der zum Schlüssel "&#64;KeyVariable" hinterlegte Wert des Community-Mitglieds "&#64;CommunityMemberID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10001;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <pre>
     * Ein Schlüssel wie z.B. "sys_AccessPermission", zu dem das Community-Mitglied "&#64;CommunityMemberID" einen Wert hinterlegt hat
     * </pre>
     *
     * <code>.dstore.values.StringValue key_variable = 20002;</code>
     */
    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    /**
     * <pre>
     * Ein Schlüssel wie z.B. "sys_AccessPermission", zu dem das Community-Mitglied "&#64;CommunityMemberID" einen Wert hinterlegt hat
     * </pre>
     *
     * <code>.dstore.values.StringValue key_variable = 20002;</code>
     */
    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->key_variable = $var;
    }

}

