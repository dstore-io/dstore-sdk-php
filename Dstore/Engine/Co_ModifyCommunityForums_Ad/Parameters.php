<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_ModifyCommunityForums_Ad.proto

namespace Dstore\Engine\Co_ModifyCommunityForums_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_ModifyCommunityForums_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue community_id = 1;</code>
     */
    private $community_id = null;
    /**
     * <code>bool community_id_null = 1001;</code>
     */
    private $community_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue forum_id = 2;</code>
     */
    private $forum_id = null;
    /**
     * <code>bool forum_id_null = 1002;</code>
     */
    private $forum_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue sort_no = 3;</code>
     */
    private $sort_no = null;
    /**
     * <code>bool sort_no_null = 1003;</code>
     */
    private $sort_no_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete = 4;</code>
     */
    private $delete = null;
    /**
     * <code>bool delete_null = 1004;</code>
     */
    private $delete_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoModifyCommunityForumsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue community_id = 1;</code>
     */
    public function getCommunityId()
    {
        return $this->community_id;
    }

    /**
     * <code>.dstore.values.IntegerValue community_id = 1;</code>
     */
    public function setCommunityId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->community_id = $var;
    }

    /**
     * <code>bool community_id_null = 1001;</code>
     */
    public function getCommunityIdNull()
    {
        return $this->community_id_null;
    }

    /**
     * <code>bool community_id_null = 1001;</code>
     */
    public function setCommunityIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue forum_id = 2;</code>
     */
    public function getForumId()
    {
        return $this->forum_id;
    }

    /**
     * <code>.dstore.values.IntegerValue forum_id = 2;</code>
     */
    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->forum_id = $var;
    }

    /**
     * <code>bool forum_id_null = 1002;</code>
     */
    public function getForumIdNull()
    {
        return $this->forum_id_null;
    }

    /**
     * <code>bool forum_id_null = 1002;</code>
     */
    public function setForumIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->forum_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sort_no = 3;</code>
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * <code>.dstore.values.IntegerValue sort_no = 3;</code>
     */
    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_no = $var;
    }

    /**
     * <code>bool sort_no_null = 1003;</code>
     */
    public function getSortNoNull()
    {
        return $this->sort_no_null;
    }

    /**
     * <code>bool sort_no_null = 1003;</code>
     */
    public function setSortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_no_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 4;</code>
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * <code>.dstore.values.BooleanValue delete = 4;</code>
     */
    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete = $var;
    }

    /**
     * <code>bool delete_null = 1004;</code>
     */
    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    /**
     * <code>bool delete_null = 1004;</code>
     */
    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

}

