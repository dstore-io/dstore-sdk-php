<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetReturnCodeMessage.proto

namespace Dstore\Engine\Mi_GetReturnCodeMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetReturnCodeMessage.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Eine Zahl, die von einer "dStore"-Prozedur zurückgegeben werden kann und einen Fehler-Code darstellt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue return_code = 10001;</code>
     */
    private $return_code = null;
    /**
     * <pre>
     * Kurzer Klartext, was der Fehler-Code "ReturnCode" zu bedeuten hat. Falls eine "&#64;LanguageID" angegeben wurde, aber keine Übersetzung vorhanden ist, wird die Standardsprache ("Deutsch") verwendet.
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10002;</code>
     */
    private $description = null;
    /**
     * <pre>
     * Ausführlichere Beschreibung des Fehler-Codes "ReturnCode". Falls eine "&#64;LanguageID" angegeben wurde, aber keine Übersetzung vorhanden ist, wird die Standardsprache ("Deutsch") verwendet.
     * </pre>
     *
     * <code>.dstore.values.StringValue detailed_description = 10003;</code>
     */
    private $detailed_description = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetReturnCodeMessage::initOnce();
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
     * Eine Zahl, die von einer "dStore"-Prozedur zurückgegeben werden kann und einen Fehler-Code darstellt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue return_code = 10001;</code>
     */
    public function getReturnCode()
    {
        return $this->return_code;
    }

    /**
     * <pre>
     * Eine Zahl, die von einer "dStore"-Prozedur zurückgegeben werden kann und einen Fehler-Code darstellt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue return_code = 10001;</code>
     */
    public function setReturnCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->return_code = $var;
    }

    /**
     * <pre>
     * Kurzer Klartext, was der Fehler-Code "ReturnCode" zu bedeuten hat. Falls eine "&#64;LanguageID" angegeben wurde, aber keine Übersetzung vorhanden ist, wird die Standardsprache ("Deutsch") verwendet.
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
     * Kurzer Klartext, was der Fehler-Code "ReturnCode" zu bedeuten hat. Falls eine "&#64;LanguageID" angegeben wurde, aber keine Übersetzung vorhanden ist, wird die Standardsprache ("Deutsch") verwendet.
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
     * Ausführlichere Beschreibung des Fehler-Codes "ReturnCode". Falls eine "&#64;LanguageID" angegeben wurde, aber keine Übersetzung vorhanden ist, wird die Standardsprache ("Deutsch") verwendet.
     * </pre>
     *
     * <code>.dstore.values.StringValue detailed_description = 10003;</code>
     */
    public function getDetailedDescription()
    {
        return $this->detailed_description;
    }

    /**
     * <pre>
     * Ausführlichere Beschreibung des Fehler-Codes "ReturnCode". Falls eine "&#64;LanguageID" angegeben wurde, aber keine Übersetzung vorhanden ist, wird die Standardsprache ("Deutsch") verwendet.
     * </pre>
     *
     * <code>.dstore.values.StringValue detailed_description = 10003;</code>
     */
    public function setDetailedDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->detailed_description = $var;
    }

}
