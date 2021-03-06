<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetForumAccessLevels.proto

namespace Dstore\Engine\Fo_GetForumAccessLevels;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_GetForumAccessLevels.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID eines Zugriffsrechtes. Anmerkung : Die IDs sind alles 2er-Potenzen, da diese so leicht zu einer "AccessLevel"-Zahl aufaddiert werden können, um MEHRERE Rechte (für ein Forum) anzuzeigen (s. a. Parameter "&#64;AccessLevel" v. "fo_ModifyForumAccess_Ad").
     * </pre>
     *
     * <code>.dstore.values.IntegerValue access_level_id = 10001;</code>
     */
    private $access_level_id = null;
    /**
     * <pre>
     * Beschreibung des Zugriffsrechtes "AccessLevelID"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10002;</code>
     */
    private $description = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoGetForumAccessLevels::initOnce();
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
     * ID eines Zugriffsrechtes. Anmerkung : Die IDs sind alles 2er-Potenzen, da diese so leicht zu einer "AccessLevel"-Zahl aufaddiert werden können, um MEHRERE Rechte (für ein Forum) anzuzeigen (s. a. Parameter "&#64;AccessLevel" v. "fo_ModifyForumAccess_Ad").
     * </pre>
     *
     * <code>.dstore.values.IntegerValue access_level_id = 10001;</code>
     */
    public function getAccessLevelId()
    {
        return $this->access_level_id;
    }

    /**
     * <pre>
     * ID eines Zugriffsrechtes. Anmerkung : Die IDs sind alles 2er-Potenzen, da diese so leicht zu einer "AccessLevel"-Zahl aufaddiert werden können, um MEHRERE Rechte (für ein Forum) anzuzeigen (s. a. Parameter "&#64;AccessLevel" v. "fo_ModifyForumAccess_Ad").
     * </pre>
     *
     * <code>.dstore.values.IntegerValue access_level_id = 10001;</code>
     */
    public function setAccessLevelId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->access_level_id = $var;
    }

    /**
     * <pre>
     * Beschreibung des Zugriffsrechtes "AccessLevelID"
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
     * Beschreibung des Zugriffsrechtes "AccessLevelID"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10002;</code>
     */
    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description = $var;
    }

}

