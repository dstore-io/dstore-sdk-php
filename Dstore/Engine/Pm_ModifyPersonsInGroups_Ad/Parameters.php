<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPersonsInGroups_Ad.proto

namespace Dstore\Engine\Pm_ModifyPersonsInGroups_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_ModifyPersonsInGroups_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    private $person_id = null;
    /**
     * <code>bool person_id_null = 1001;</code>
     */
    private $person_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue group_id = 2;</code>
     */
    private $group_id = null;
    /**
     * <code>bool group_id_null = 1002;</code>
     */
    private $group_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue revoke = 3;</code>
     */
    private $revoke = null;
    /**
     * <code>bool revoke_null = 1003;</code>
     */
    private $revoke_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmModifyPersonsInGroupsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_id = $var;
    }

    /**
     * <code>bool person_id_null = 1001;</code>
     */
    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    /**
     * <code>bool person_id_null = 1001;</code>
     */
    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue group_id = 2;</code>
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * <code>.dstore.values.IntegerValue group_id = 2;</code>
     */
    public function setGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->group_id = $var;
    }

    /**
     * <code>bool group_id_null = 1002;</code>
     */
    public function getGroupIdNull()
    {
        return $this->group_id_null;
    }

    /**
     * <code>bool group_id_null = 1002;</code>
     */
    public function setGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->group_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue revoke = 3;</code>
     */
    public function getRevoke()
    {
        return $this->revoke;
    }

    /**
     * <code>.dstore.values.BooleanValue revoke = 3;</code>
     */
    public function setRevoke(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->revoke = $var;
    }

    /**
     * <code>bool revoke_null = 1003;</code>
     */
    public function getRevokeNull()
    {
        return $this->revoke_null;
    }

    /**
     * <code>bool revoke_null = 1003;</code>
     */
    public function setRevokeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->revoke_null = $var;
    }

}
