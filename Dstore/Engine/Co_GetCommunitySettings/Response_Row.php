<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetCommunitySettings.proto

namespace Dstore\Engine\Co_GetCommunitySettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_GetCommunitySettings.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID einer Community
     * </pre>
     *
     * <code>.dstore.values.IntegerValue community_id = 10001;</code>
     */
    private $community_id = null;
    /**
     * <pre>
     * Der in der Community "CommunityID" zum Schlüssel "KeyVariable" hinterlegte Wert
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10002;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Name der Community "CommunityID"
     * </pre>
     *
     * <code>.dstore.values.StringValue community_name = 10003;</code>
     */
    private $community_name = null;
    /**
     * <pre>
     * Ein Schlüssel wie z.B. "CommunityGroupID", zu dem für die Community "CommunityID" ein Wert hinterlegt ist
     * </pre>
     *
     * <code>.dstore.values.StringValue key_variable = 10004;</code>
     */
    private $key_variable = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoGetCommunitySettings::initOnce();
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
     * ID einer Community
     * </pre>
     *
     * <code>.dstore.values.IntegerValue community_id = 10001;</code>
     */
    public function getCommunityId()
    {
        return $this->community_id;
    }

    /**
     * <pre>
     * ID einer Community
     * </pre>
     *
     * <code>.dstore.values.IntegerValue community_id = 10001;</code>
     */
    public function setCommunityId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->community_id = $var;
    }

    /**
     * <pre>
     * Der in der Community "CommunityID" zum Schlüssel "KeyVariable" hinterlegte Wert
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10002;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * Der in der Community "CommunityID" zum Schlüssel "KeyVariable" hinterlegte Wert
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10002;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->value = $var;
    }

    /**
     * <pre>
     * Name der Community "CommunityID"
     * </pre>
     *
     * <code>.dstore.values.StringValue community_name = 10003;</code>
     */
    public function getCommunityName()
    {
        return $this->community_name;
    }

    /**
     * <pre>
     * Name der Community "CommunityID"
     * </pre>
     *
     * <code>.dstore.values.StringValue community_name = 10003;</code>
     */
    public function setCommunityName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->community_name = $var;
    }

    /**
     * <pre>
     * Ein Schlüssel wie z.B. "CommunityGroupID", zu dem für die Community "CommunityID" ein Wert hinterlegt ist
     * </pre>
     *
     * <code>.dstore.values.StringValue key_variable = 10004;</code>
     */
    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    /**
     * <pre>
     * Ein Schlüssel wie z.B. "CommunityGroupID", zu dem für die Community "CommunityID" ein Wert hinterlegt ist
     * </pre>
     *
     * <code>.dstore.values.StringValue key_variable = 10004;</code>
     */
    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->key_variable = $var;
    }

}
