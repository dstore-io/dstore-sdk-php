<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetPages_Ad.proto

namespace Dstore\Engine\St_GetPages_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.st_GetPages_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * (Programm-)Datei, die den Quellcode für die Seite "PageNo" enthält
     * </pre>
     *
     * <code>.dstore.values.StringValue filename = 10001;</code>
     */
    private $filename = null;
    /**
     * <pre>
     * (Eindeutige) Nummer einer (Bildschirm-)Seite der Client-Anwendung
     * </pre>
     *
     * <code>.dstore.values.IntegerValue page_no = 10002;</code>
     */
    private $page_no = null;
    /**
     * <pre>
     * Name/Bezeichnung der Seite "PageNo"
     * </pre>
     *
     * <code>.dstore.values.StringValue page = 10003;</code>
     */
    private $page = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\StGetPagesAd::initOnce();
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
     * (Programm-)Datei, die den Quellcode für die Seite "PageNo" enthält
     * </pre>
     *
     * <code>.dstore.values.StringValue filename = 10001;</code>
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * <pre>
     * (Programm-)Datei, die den Quellcode für die Seite "PageNo" enthält
     * </pre>
     *
     * <code>.dstore.values.StringValue filename = 10001;</code>
     */
    public function setFilename(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->filename = $var;
    }

    /**
     * <pre>
     * (Eindeutige) Nummer einer (Bildschirm-)Seite der Client-Anwendung
     * </pre>
     *
     * <code>.dstore.values.IntegerValue page_no = 10002;</code>
     */
    public function getPageNo()
    {
        return $this->page_no;
    }

    /**
     * <pre>
     * (Eindeutige) Nummer einer (Bildschirm-)Seite der Client-Anwendung
     * </pre>
     *
     * <code>.dstore.values.IntegerValue page_no = 10002;</code>
     */
    public function setPageNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->page_no = $var;
    }

    /**
     * <pre>
     * Name/Bezeichnung der Seite "PageNo"
     * </pre>
     *
     * <code>.dstore.values.StringValue page = 10003;</code>
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * <pre>
     * Name/Bezeichnung der Seite "PageNo"
     * </pre>
     *
     * <code>.dstore.values.StringValue page = 10003;</code>
     */
    public function setPage(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->page = $var;
    }

}
