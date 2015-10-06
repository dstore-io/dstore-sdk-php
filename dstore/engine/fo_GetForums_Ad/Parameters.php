<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_GetForums_Ad.proto
//   Date: 2015-10-06 11:19:44

namespace dstore\engine\fo_GetForums_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $forum_id = null;
    
    /**  @var boolean */
    public $forum_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $forum_category_id = null;
    
    /**  @var boolean */
    public $forum_category_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $only_forum_categories_in_one_id = null;
    
    /**  @var boolean */
    public $only_forum_categories_in_one_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $sort_order = null;
    
    /**  @var boolean */
    public $sort_order_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_category_information = null;
    
    /**  @var boolean */
    public $get_category_information_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_GetForums_Ad.Parameters');

      // OPTIONAL MESSAGE forum_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "forum_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL forum_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "forum_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE forum_category_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "forum_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL forum_category_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "forum_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE only_forum_categories_in_one_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "only_forum_categories_in_one_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_forum_categories_in_one_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "only_forum_categories_in_one_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_order = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "sort_order";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sort_order_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "sort_order_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_category_information = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "get_category_information";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_category_information_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "get_category_information_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <forum_id> has a value
     *
     * @return boolean
     */
    public function hasForumId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <forum_id> value
     *
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function clearForumId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <forum_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getForumId(){
      return $this->_get(1);
    }
    
    /**
     * Set <forum_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function setForumId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <forum_id_null> has a value
     *
     * @return boolean
     */
    public function hasForumIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <forum_id_null> value
     *
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function clearForumIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <forum_id_null> value
     *
     * @return boolean
     */
    public function getForumIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <forum_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function setForumIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(2);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function setLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <language_id_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <language_id_null> value
     *
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function clearLanguageIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <language_id_null> value
     *
     * @return boolean
     */
    public function getLanguageIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <language_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <forum_category_id> has a value
     *
     * @return boolean
     */
    public function hasForumCategoryId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <forum_category_id> value
     *
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function clearForumCategoryId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <forum_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getForumCategoryId(){
      return $this->_get(3);
    }
    
    /**
     * Set <forum_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function setForumCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <forum_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasForumCategoryIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <forum_category_id_null> value
     *
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function clearForumCategoryIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <forum_category_id_null> value
     *
     * @return boolean
     */
    public function getForumCategoryIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <forum_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function setForumCategoryIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <only_forum_categories_in_one_id> has a value
     *
     * @return boolean
     */
    public function hasOnlyForumCategoriesInOneId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <only_forum_categories_in_one_id> value
     *
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function clearOnlyForumCategoriesInOneId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <only_forum_categories_in_one_id> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getOnlyForumCategoriesInOneId(){
      return $this->_get(4);
    }
    
    /**
     * Set <only_forum_categories_in_one_id> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function setOnlyForumCategoriesInOneId(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <only_forum_categories_in_one_id_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyForumCategoriesInOneIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <only_forum_categories_in_one_id_null> value
     *
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function clearOnlyForumCategoriesInOneIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <only_forum_categories_in_one_id_null> value
     *
     * @return boolean
     */
    public function getOnlyForumCategoriesInOneIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <only_forum_categories_in_one_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function setOnlyForumCategoriesInOneIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <sort_order> has a value
     *
     * @return boolean
     */
    public function hasSortOrder(){
      return $this->_has(5);
    }
    
    /**
     * Clear <sort_order> value
     *
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function clearSortOrder(){
      return $this->_clear(5);
    }
    
    /**
     * Get <sort_order> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSortOrder(){
      return $this->_get(5);
    }
    
    /**
     * Set <sort_order> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function setSortOrder(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <sort_order_null> has a value
     *
     * @return boolean
     */
    public function hasSortOrderNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <sort_order_null> value
     *
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function clearSortOrderNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <sort_order_null> value
     *
     * @return boolean
     */
    public function getSortOrderNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <sort_order_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function setSortOrderNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <get_category_information> has a value
     *
     * @return boolean
     */
    public function hasGetCategoryInformation(){
      return $this->_has(6);
    }
    
    /**
     * Clear <get_category_information> value
     *
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function clearGetCategoryInformation(){
      return $this->_clear(6);
    }
    
    /**
     * Get <get_category_information> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetCategoryInformation(){
      return $this->_get(6);
    }
    
    /**
     * Set <get_category_information> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function setGetCategoryInformation(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <get_category_information_null> has a value
     *
     * @return boolean
     */
    public function hasGetCategoryInformationNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <get_category_information_null> value
     *
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function clearGetCategoryInformationNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <get_category_information_null> value
     *
     * @return boolean
     */
    public function getGetCategoryInformationNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <get_category_information_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForums_Ad\Parameters
     */
    public function setGetCategoryInformationNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

