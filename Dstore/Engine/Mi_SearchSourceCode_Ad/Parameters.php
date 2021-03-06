<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_SearchSourceCode_Ad.proto

namespace Dstore\Engine\Mi_SearchSourceCode_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_SearchSourceCode_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue search_pattern = 1;</code>
     */
    private $search_pattern = null;
    /**
     * <code>bool search_pattern_null = 1001;</code>
     */
    private $search_pattern_null = false;
    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 2;</code>
     */
    private $case_sensitive = null;
    /**
     * <code>bool case_sensitive_null = 1002;</code>
     */
    private $case_sensitive_null = false;
    /**
     * <code>.dstore.values.IntegerValue do_not_search_in_comment_part = 3;</code>
     */
    private $do_not_search_in_comment_part = null;
    /**
     * <code>bool do_not_search_in_comment_part_null = 1003;</code>
     */
    private $do_not_search_in_comment_part_null = false;
    /**
     * <code>.dstore.values.StringValue search_only_this_object_name = 4;</code>
     */
    private $search_only_this_object_name = null;
    /**
     * <code>bool search_only_this_object_name_null = 1004;</code>
     */
    private $search_only_this_object_name_null = false;
    /**
     * <code>.dstore.values.StringValue search_only_object_type = 5;</code>
     */
    private $search_only_object_type = null;
    /**
     * <code>bool search_only_object_type_null = 1005;</code>
     */
    private $search_only_object_type_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_distinct_object_names_only = 6;</code>
     */
    private $get_distinct_object_names_only = null;
    /**
     * <code>bool get_distinct_object_names_only_null = 1006;</code>
     */
    private $get_distinct_object_names_only_null = false;
    /**
     * <code>.dstore.values.StringValue search_objects_with_name_like = 7;</code>
     */
    private $search_objects_with_name_like = null;
    /**
     * <code>bool search_objects_with_name_like_null = 1007;</code>
     */
    private $search_objects_with_name_like_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiSearchSourceCodeAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue search_pattern = 1;</code>
     */
    public function getSearchPattern()
    {
        return $this->search_pattern;
    }

    /**
     * <code>.dstore.values.StringValue search_pattern = 1;</code>
     */
    public function setSearchPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->search_pattern = $var;
    }

    /**
     * <code>bool search_pattern_null = 1001;</code>
     */
    public function getSearchPatternNull()
    {
        return $this->search_pattern_null;
    }

    /**
     * <code>bool search_pattern_null = 1001;</code>
     */
    public function setSearchPatternNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_pattern_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 2;</code>
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 2;</code>
     */
    public function setCaseSensitive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->case_sensitive = $var;
    }

    /**
     * <code>bool case_sensitive_null = 1002;</code>
     */
    public function getCaseSensitiveNull()
    {
        return $this->case_sensitive_null;
    }

    /**
     * <code>bool case_sensitive_null = 1002;</code>
     */
    public function setCaseSensitiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue do_not_search_in_comment_part = 3;</code>
     */
    public function getDoNotSearchInCommentPart()
    {
        return $this->do_not_search_in_comment_part;
    }

    /**
     * <code>.dstore.values.IntegerValue do_not_search_in_comment_part = 3;</code>
     */
    public function setDoNotSearchInCommentPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->do_not_search_in_comment_part = $var;
    }

    /**
     * <code>bool do_not_search_in_comment_part_null = 1003;</code>
     */
    public function getDoNotSearchInCommentPartNull()
    {
        return $this->do_not_search_in_comment_part_null;
    }

    /**
     * <code>bool do_not_search_in_comment_part_null = 1003;</code>
     */
    public function setDoNotSearchInCommentPartNull($var)
    {
        GPBUtil::checkBool($var);
        $this->do_not_search_in_comment_part_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue search_only_this_object_name = 4;</code>
     */
    public function getSearchOnlyThisObjectName()
    {
        return $this->search_only_this_object_name;
    }

    /**
     * <code>.dstore.values.StringValue search_only_this_object_name = 4;</code>
     */
    public function setSearchOnlyThisObjectName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->search_only_this_object_name = $var;
    }

    /**
     * <code>bool search_only_this_object_name_null = 1004;</code>
     */
    public function getSearchOnlyThisObjectNameNull()
    {
        return $this->search_only_this_object_name_null;
    }

    /**
     * <code>bool search_only_this_object_name_null = 1004;</code>
     */
    public function setSearchOnlyThisObjectNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_only_this_object_name_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue search_only_object_type = 5;</code>
     */
    public function getSearchOnlyObjectType()
    {
        return $this->search_only_object_type;
    }

    /**
     * <code>.dstore.values.StringValue search_only_object_type = 5;</code>
     */
    public function setSearchOnlyObjectType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->search_only_object_type = $var;
    }

    /**
     * <code>bool search_only_object_type_null = 1005;</code>
     */
    public function getSearchOnlyObjectTypeNull()
    {
        return $this->search_only_object_type_null;
    }

    /**
     * <code>bool search_only_object_type_null = 1005;</code>
     */
    public function setSearchOnlyObjectTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_only_object_type_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_distinct_object_names_only = 6;</code>
     */
    public function getGetDistinctObjectNamesOnly()
    {
        return $this->get_distinct_object_names_only;
    }

    /**
     * <code>.dstore.values.BooleanValue get_distinct_object_names_only = 6;</code>
     */
    public function setGetDistinctObjectNamesOnly(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_distinct_object_names_only = $var;
    }

    /**
     * <code>bool get_distinct_object_names_only_null = 1006;</code>
     */
    public function getGetDistinctObjectNamesOnlyNull()
    {
        return $this->get_distinct_object_names_only_null;
    }

    /**
     * <code>bool get_distinct_object_names_only_null = 1006;</code>
     */
    public function setGetDistinctObjectNamesOnlyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_distinct_object_names_only_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue search_objects_with_name_like = 7;</code>
     */
    public function getSearchObjectsWithNameLike()
    {
        return $this->search_objects_with_name_like;
    }

    /**
     * <code>.dstore.values.StringValue search_objects_with_name_like = 7;</code>
     */
    public function setSearchObjectsWithNameLike(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->search_objects_with_name_like = $var;
    }

    /**
     * <code>bool search_objects_with_name_like_null = 1007;</code>
     */
    public function getSearchObjectsWithNameLikeNull()
    {
        return $this->search_objects_with_name_like_null;
    }

    /**
     * <code>bool search_objects_with_name_like_null = 1007;</code>
     */
    public function setSearchObjectsWithNameLikeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_objects_with_name_like_null = $var;
    }

}

