<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetPublicCommunityStats_Pu.proto

namespace Dstore\Engine\Co_GetPublicCommunityStats_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_GetPublicCommunityStats_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Der aktuelle statistische Wert zur "StatisticInformation" der Community "&#64;CommunityID"
     * </pre>
     *
     * <code>.dstore.values.StringValue value = 10001;</code>
     */
    private $value = null;
    /**
     * <pre>
     * ID der "StatisticInformation"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue statistic_information_id = 10002;</code>
     */
    private $statistic_information_id = null;
    /**
     * <pre>
     * Die Art der Information. Derzeit gibt es folgende mögliche Werte :"1" : "NumberOfMembers""2" : "NumberOfMembersOnline""3" : "NumberOfMembersPerOnlineStatus"
     * </pre>
     *
     * <code>.dstore.values.StringValue statistic_information = 10003;</code>
     */
    private $statistic_information = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoGetPublicCommunityStatsPu::initOnce();
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
     * Der aktuelle statistische Wert zur "StatisticInformation" der Community "&#64;CommunityID"
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
     * Der aktuelle statistische Wert zur "StatisticInformation" der Community "&#64;CommunityID"
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
     * ID der "StatisticInformation"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue statistic_information_id = 10002;</code>
     */
    public function getStatisticInformationId()
    {
        return $this->statistic_information_id;
    }

    /**
     * <pre>
     * ID der "StatisticInformation"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue statistic_information_id = 10002;</code>
     */
    public function setStatisticInformationId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->statistic_information_id = $var;
    }

    /**
     * <pre>
     * Die Art der Information. Derzeit gibt es folgende mögliche Werte :"1" : "NumberOfMembers""2" : "NumberOfMembersOnline""3" : "NumberOfMembersPerOnlineStatus"
     * </pre>
     *
     * <code>.dstore.values.StringValue statistic_information = 10003;</code>
     */
    public function getStatisticInformation()
    {
        return $this->statistic_information;
    }

    /**
     * <pre>
     * Die Art der Information. Derzeit gibt es folgende mögliche Werte :"1" : "NumberOfMembers""2" : "NumberOfMembersOnline""3" : "NumberOfMembersPerOnlineStatus"
     * </pre>
     *
     * <code>.dstore.values.StringValue statistic_information = 10003;</code>
     */
    public function setStatisticInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->statistic_information = $var;
    }

}

