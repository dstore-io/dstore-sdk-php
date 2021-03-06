<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetTNodeMetaInformation_Ad.proto

namespace Dstore\Engine\Im_GetTNodeMetaInformation_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_GetTNodeMetaInformation_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID der Informations-Art "MetaInformationType"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue meta_information_type_id = 10001;</code>
     */
    private $meta_information_type_id = null;
    /**
     * <pre>
     * Art der "Meta-Information" (z.B. "LastActiveFlagChanged", also wann die letzte Änderung an der "Active"-Einstellung stattfand)
     * </pre>
     *
     * <code>.dstore.values.StringValue meta_information_type = 10002;</code>
     */
    private $meta_information_type = null;
    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, das in "&#64;TreeNodeID" bzw. "tempdb.dbo.OneID" übergeben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10003;</code>
     */
    private $tree_node_id = null;
    /**
     * <pre>
     * Die gespeicherte Information (zu "TreeNodeID") zur Art "MetaInformationType" wie sie intern gespeichert ist (als Zahl nämlich)
     * </pre>
     *
     * <code>.dstore.values.DecimalValue meta_information = 10004;</code>
     */
    private $meta_information = null;
    /**
     * <pre>
     * Die gespeicherte Information (zu "NodeID") zur Art "MetaInformationType" im "Klartext". Je nach Art der Information steht hier ein Datum im Format "Apr 15 2001 17:55:23:283PM" oder ein "UserName" (aus "UserInfo")
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_meta_information = 10005;</code>
     */
    private $translated_meta_information = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImGetTNodeMetaInformationAd::initOnce();
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
     * ID der Informations-Art "MetaInformationType"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue meta_information_type_id = 10001;</code>
     */
    public function getMetaInformationTypeId()
    {
        return $this->meta_information_type_id;
    }

    /**
     * <pre>
     * ID der Informations-Art "MetaInformationType"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue meta_information_type_id = 10001;</code>
     */
    public function setMetaInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->meta_information_type_id = $var;
    }

    /**
     * <pre>
     * Art der "Meta-Information" (z.B. "LastActiveFlagChanged", also wann die letzte Änderung an der "Active"-Einstellung stattfand)
     * </pre>
     *
     * <code>.dstore.values.StringValue meta_information_type = 10002;</code>
     */
    public function getMetaInformationType()
    {
        return $this->meta_information_type;
    }

    /**
     * <pre>
     * Art der "Meta-Information" (z.B. "LastActiveFlagChanged", also wann die letzte Änderung an der "Active"-Einstellung stattfand)
     * </pre>
     *
     * <code>.dstore.values.StringValue meta_information_type = 10002;</code>
     */
    public function setMetaInformationType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->meta_information_type = $var;
    }

    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, das in "&#64;TreeNodeID" bzw. "tempdb.dbo.OneID" übergeben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10003;</code>
     */
    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, das in "&#64;TreeNodeID" bzw. "tempdb.dbo.OneID" übergeben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue tree_node_id = 10003;</code>
     */
    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->tree_node_id = $var;
    }

    /**
     * <pre>
     * Die gespeicherte Information (zu "TreeNodeID") zur Art "MetaInformationType" wie sie intern gespeichert ist (als Zahl nämlich)
     * </pre>
     *
     * <code>.dstore.values.DecimalValue meta_information = 10004;</code>
     */
    public function getMetaInformation()
    {
        return $this->meta_information;
    }

    /**
     * <pre>
     * Die gespeicherte Information (zu "TreeNodeID") zur Art "MetaInformationType" wie sie intern gespeichert ist (als Zahl nämlich)
     * </pre>
     *
     * <code>.dstore.values.DecimalValue meta_information = 10004;</code>
     */
    public function setMetaInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->meta_information = $var;
    }

    /**
     * <pre>
     * Die gespeicherte Information (zu "NodeID") zur Art "MetaInformationType" im "Klartext". Je nach Art der Information steht hier ein Datum im Format "Apr 15 2001 17:55:23:283PM" oder ein "UserName" (aus "UserInfo")
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_meta_information = 10005;</code>
     */
    public function getTranslatedMetaInformation()
    {
        return $this->translated_meta_information;
    }

    /**
     * <pre>
     * Die gespeicherte Information (zu "NodeID") zur Art "MetaInformationType" im "Klartext". Je nach Art der Information steht hier ein Datum im Format "Apr 15 2001 17:55:23:283PM" oder ein "UserName" (aus "UserInfo")
     * </pre>
     *
     * <code>.dstore.values.StringValue translated_meta_information = 10005;</code>
     */
    public function setTranslatedMetaInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->translated_meta_information = $var;
    }

}

