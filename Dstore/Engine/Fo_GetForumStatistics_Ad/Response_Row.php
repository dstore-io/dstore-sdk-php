<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetForumStatistics_Ad.proto

namespace Dstore\Engine\Fo_GetForumStatistics_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_GetForumStatistics_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID des Forums, auf das sich "Value" bezieht - also entweder "&#64;ForumID" oder die ID eines Forums, das durch "tempdb.dbo.OneID" übergeben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue forum_id = 10001;</code>
     */
    private $forum_id = null;
    /**
     * <pre>
     * Der statistische Wert des Forums "ForumID" zur Information "StatisticInformationID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10002;</code>
     */
    private $value = null;
    /**
     * <pre>
     * Eine ID, die in "&#64;ListOfStatisticInformationIDs" übergeben wurde und angibt, welche Information man haben möchte (siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue statistic_information_id = 10003;</code>
     */
    private $statistic_information_id = null;
    /**
     * <pre>
     * Bezeichnung der Information "StatisticInformationID"
     * </pre>
     *
     * <code>.dstore.values.StringValue statistic_information = 10004;</code>
     */
    private $statistic_information = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoGetForumStatisticsAd::initOnce();
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
     * ID des Forums, auf das sich "Value" bezieht - also entweder "&#64;ForumID" oder die ID eines Forums, das durch "tempdb.dbo.OneID" übergeben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue forum_id = 10001;</code>
     */
    public function getForumId()
    {
        return $this->forum_id;
    }

    /**
     * <pre>
     * ID des Forums, auf das sich "Value" bezieht - also entweder "&#64;ForumID" oder die ID eines Forums, das durch "tempdb.dbo.OneID" übergeben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue forum_id = 10001;</code>
     */
    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->forum_id = $var;
    }

    /**
     * <pre>
     * Der statistische Wert des Forums "ForumID" zur Information "StatisticInformationID"
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
     * Der statistische Wert des Forums "ForumID" zur Information "StatisticInformationID"
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
     * Eine ID, die in "&#64;ListOfStatisticInformationIDs" übergeben wurde und angibt, welche Information man haben möchte (siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue statistic_information_id = 10003;</code>
     */
    public function getStatisticInformationId()
    {
        return $this->statistic_information_id;
    }

    /**
     * <pre>
     * Eine ID, die in "&#64;ListOfStatisticInformationIDs" übergeben wurde und angibt, welche Information man haben möchte (siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue statistic_information_id = 10003;</code>
     */
    public function setStatisticInformationId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->statistic_information_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Information "StatisticInformationID"
     * </pre>
     *
     * <code>.dstore.values.StringValue statistic_information = 10004;</code>
     */
    public function getStatisticInformation()
    {
        return $this->statistic_information;
    }

    /**
     * <pre>
     * Bezeichnung der Information "StatisticInformationID"
     * </pre>
     *
     * <code>.dstore.values.StringValue statistic_information = 10004;</code>
     */
    public function setStatisticInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->statistic_information = $var;
    }

}

