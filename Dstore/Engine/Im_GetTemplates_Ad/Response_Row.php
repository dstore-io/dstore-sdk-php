<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetTemplates_Ad.proto

namespace Dstore\Engine\Im_GetTemplates_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetTemplates_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Bezeichnung des gefundenen Templates
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10001;</code>
     */
    private $description = null;
    /**
     * <pre>
     * Ist das Template dem Element "&#64;TreeNodeID" direkt zugeordnet oder wurde das Template "geerbt" ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue inherited = 10002;</code>
     */
    private $inherited = null;
    /**
     * <pre>
     * Bezeichnung des "Frames" (oder auch : des "Fensters"), in der das Template geladen wird (also eine Einstellung, die eher an Web-Applikationen gedacht ist)
     * </pre>
     *
     * <code>.dstore.values.StringValue frame_name = 10003;</code>
     */
    private $frame_name = null;
    /**
     * <pre>
     * ID der Sprache, für die das Template gilt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10004;</code>
     */
    private $language_id = null;
    /**
     * <pre>
     * ID des gefundenen Templates
     * </pre>
     *
     * <code>.dstore.values.IntegerValue template_id = 10005;</code>
     */
    private $template_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetTemplatesAd::initOnce();
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
     * Bezeichnung des gefundenen Templates
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10001;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Bezeichnung des gefundenen Templates
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10001;</code>
     */
    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description = $var;
    }

    /**
     * <pre>
     * Ist das Template dem Element "&#64;TreeNodeID" direkt zugeordnet oder wurde das Template "geerbt" ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue inherited = 10002;</code>
     */
    public function getInherited()
    {
        return $this->inherited;
    }

    /**
     * <pre>
     * Ist das Template dem Element "&#64;TreeNodeID" direkt zugeordnet oder wurde das Template "geerbt" ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue inherited = 10002;</code>
     */
    public function setInherited(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->inherited = $var;
    }

    /**
     * <pre>
     * Bezeichnung des "Frames" (oder auch : des "Fensters"), in der das Template geladen wird (also eine Einstellung, die eher an Web-Applikationen gedacht ist)
     * </pre>
     *
     * <code>.dstore.values.StringValue frame_name = 10003;</code>
     */
    public function getFrameName()
    {
        return $this->frame_name;
    }

    /**
     * <pre>
     * Bezeichnung des "Frames" (oder auch : des "Fensters"), in der das Template geladen wird (also eine Einstellung, die eher an Web-Applikationen gedacht ist)
     * </pre>
     *
     * <code>.dstore.values.StringValue frame_name = 10003;</code>
     */
    public function setFrameName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->frame_name = $var;
    }

    /**
     * <pre>
     * ID der Sprache, für die das Template gilt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10004;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <pre>
     * ID der Sprache, für die das Template gilt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue language_id = 10004;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

    /**
     * <pre>
     * ID des gefundenen Templates
     * </pre>
     *
     * <code>.dstore.values.IntegerValue template_id = 10005;</code>
     */
    public function getTemplateId()
    {
        return $this->template_id;
    }

    /**
     * <pre>
     * ID des gefundenen Templates
     * </pre>
     *
     * <code>.dstore.values.IntegerValue template_id = 10005;</code>
     */
    public function setTemplateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->template_id = $var;
    }

}

