<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_SearchSourceCode_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_SearchSourceCode_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $search_pattern = null;
    
    /**  @var boolean */
    public $search_pattern_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $case_sensitive = null;
    
    /**  @var boolean */
    public $case_sensitive_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $do_not_search_in_comment_part = null;
    
    /**  @var boolean */
    public $do_not_search_in_comment_part_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $search_only_this_object_name = null;
    
    /**  @var boolean */
    public $search_only_this_object_name_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $search_only_object_type = null;
    
    /**  @var boolean */
    public $search_only_object_type_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_distinct_object_names_only = null;
    
    /**  @var boolean */
    public $get_distinct_object_names_only_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $search_objects_with_name_like = null;
    
    /**  @var boolean */
    public $search_objects_with_name_like_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_SearchSourceCode_Ad.Parameters');

      // OPTIONAL MESSAGE search_pattern = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "search_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL search_pattern_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "search_pattern_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE case_sensitive = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "case_sensitive";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL case_sensitive_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "case_sensitive_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE do_not_search_in_comment_part = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "do_not_search_in_comment_part";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL do_not_search_in_comment_part_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "do_not_search_in_comment_part_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE search_only_this_object_name = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "search_only_this_object_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL search_only_this_object_name_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "search_only_this_object_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE search_only_object_type = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "search_only_object_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL search_only_object_type_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "search_only_object_type_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_distinct_object_names_only = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "get_distinct_object_names_only";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_distinct_object_names_only_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "get_distinct_object_names_only_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE search_objects_with_name_like = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "search_objects_with_name_like";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL search_objects_with_name_like_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "search_objects_with_name_like_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <search_pattern> has a value
     *
     * @return boolean
     */
    public function hasSearchPattern(){
      return $this->_has(1);
    }
    
    /**
     * Clear <search_pattern> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearSearchPattern(){
      return $this->_clear(1);
    }
    
    /**
     * Get <search_pattern> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSearchPattern(){
      return $this->_get(1);
    }
    
    /**
     * Set <search_pattern> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setSearchPattern(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <search_pattern_null> has a value
     *
     * @return boolean
     */
    public function hasSearchPatternNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <search_pattern_null> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearSearchPatternNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <search_pattern_null> value
     *
     * @return boolean
     */
    public function getSearchPatternNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <search_pattern_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setSearchPatternNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <case_sensitive> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitive(){
      return $this->_has(2);
    }
    
    /**
     * Clear <case_sensitive> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearCaseSensitive(){
      return $this->_clear(2);
    }
    
    /**
     * Get <case_sensitive> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCaseSensitive(){
      return $this->_get(2);
    }
    
    /**
     * Set <case_sensitive> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setCaseSensitive(\dstore\engine\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <case_sensitive_null> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitiveNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <case_sensitive_null> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearCaseSensitiveNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <case_sensitive_null> value
     *
     * @return boolean
     */
    public function getCaseSensitiveNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <case_sensitive_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setCaseSensitiveNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <do_not_search_in_comment_part> has a value
     *
     * @return boolean
     */
    public function hasDoNotSearchInCommentPart(){
      return $this->_has(3);
    }
    
    /**
     * Clear <do_not_search_in_comment_part> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearDoNotSearchInCommentPart(){
      return $this->_clear(3);
    }
    
    /**
     * Get <do_not_search_in_comment_part> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getDoNotSearchInCommentPart(){
      return $this->_get(3);
    }
    
    /**
     * Set <do_not_search_in_comment_part> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setDoNotSearchInCommentPart(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <do_not_search_in_comment_part_null> has a value
     *
     * @return boolean
     */
    public function hasDoNotSearchInCommentPartNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <do_not_search_in_comment_part_null> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearDoNotSearchInCommentPartNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <do_not_search_in_comment_part_null> value
     *
     * @return boolean
     */
    public function getDoNotSearchInCommentPartNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <do_not_search_in_comment_part_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setDoNotSearchInCommentPartNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <search_only_this_object_name> has a value
     *
     * @return boolean
     */
    public function hasSearchOnlyThisObjectName(){
      return $this->_has(4);
    }
    
    /**
     * Clear <search_only_this_object_name> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearSearchOnlyThisObjectName(){
      return $this->_clear(4);
    }
    
    /**
     * Get <search_only_this_object_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSearchOnlyThisObjectName(){
      return $this->_get(4);
    }
    
    /**
     * Set <search_only_this_object_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setSearchOnlyThisObjectName(\dstore\engine\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <search_only_this_object_name_null> has a value
     *
     * @return boolean
     */
    public function hasSearchOnlyThisObjectNameNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <search_only_this_object_name_null> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearSearchOnlyThisObjectNameNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <search_only_this_object_name_null> value
     *
     * @return boolean
     */
    public function getSearchOnlyThisObjectNameNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <search_only_this_object_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setSearchOnlyThisObjectNameNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <search_only_object_type> has a value
     *
     * @return boolean
     */
    public function hasSearchOnlyObjectType(){
      return $this->_has(5);
    }
    
    /**
     * Clear <search_only_object_type> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearSearchOnlyObjectType(){
      return $this->_clear(5);
    }
    
    /**
     * Get <search_only_object_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSearchOnlyObjectType(){
      return $this->_get(5);
    }
    
    /**
     * Set <search_only_object_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setSearchOnlyObjectType(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <search_only_object_type_null> has a value
     *
     * @return boolean
     */
    public function hasSearchOnlyObjectTypeNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <search_only_object_type_null> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearSearchOnlyObjectTypeNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <search_only_object_type_null> value
     *
     * @return boolean
     */
    public function getSearchOnlyObjectTypeNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <search_only_object_type_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setSearchOnlyObjectTypeNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <get_distinct_object_names_only> has a value
     *
     * @return boolean
     */
    public function hasGetDistinctObjectNamesOnly(){
      return $this->_has(6);
    }
    
    /**
     * Clear <get_distinct_object_names_only> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearGetDistinctObjectNamesOnly(){
      return $this->_clear(6);
    }
    
    /**
     * Get <get_distinct_object_names_only> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetDistinctObjectNamesOnly(){
      return $this->_get(6);
    }
    
    /**
     * Set <get_distinct_object_names_only> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setGetDistinctObjectNamesOnly(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <get_distinct_object_names_only_null> has a value
     *
     * @return boolean
     */
    public function hasGetDistinctObjectNamesOnlyNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <get_distinct_object_names_only_null> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearGetDistinctObjectNamesOnlyNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <get_distinct_object_names_only_null> value
     *
     * @return boolean
     */
    public function getGetDistinctObjectNamesOnlyNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <get_distinct_object_names_only_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setGetDistinctObjectNamesOnlyNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <search_objects_with_name_like> has a value
     *
     * @return boolean
     */
    public function hasSearchObjectsWithNameLike(){
      return $this->_has(7);
    }
    
    /**
     * Clear <search_objects_with_name_like> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearSearchObjectsWithNameLike(){
      return $this->_clear(7);
    }
    
    /**
     * Get <search_objects_with_name_like> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSearchObjectsWithNameLike(){
      return $this->_get(7);
    }
    
    /**
     * Set <search_objects_with_name_like> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setSearchObjectsWithNameLike(\dstore\engine\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <search_objects_with_name_like_null> has a value
     *
     * @return boolean
     */
    public function hasSearchObjectsWithNameLikeNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <search_objects_with_name_like_null> value
     *
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function clearSearchObjectsWithNameLikeNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <search_objects_with_name_like_null> value
     *
     * @return boolean
     */
    public function getSearchObjectsWithNameLikeNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <search_objects_with_name_like_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_SearchSourceCode_Ad\Parameters
     */
    public function setSearchObjectsWithNameLikeNull( $value){
      return $this->_set(1007, $value);
    }
  }
}
