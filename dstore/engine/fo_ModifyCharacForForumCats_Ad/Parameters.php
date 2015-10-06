<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_ModifyCharacForForumCats_Ad.proto
//   Date: 2015-10-06 11:19:45

namespace dstore\engine\fo_ModifyCharacForForumCats_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $forum_category_id = null;
    
    /**  @var boolean */
    public $forum_category_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $posting_characteristic_id = null;
    
    /**  @var boolean */
    public $posting_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_relation = null;
    
    /**  @var boolean */
    public $delete_relation_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_ModifyCharacForForumCats_Ad.Parameters');

      // OPTIONAL MESSAGE forum_category_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "forum_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL forum_category_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "forum_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE posting_characteristic_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "posting_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL posting_characteristic_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "posting_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_relation = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "delete_relation";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_relation_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "delete_relation_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <forum_category_id> has a value
     *
     * @return boolean
     */
    public function hasForumCategoryId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <forum_category_id> value
     *
     * @return \dstore\engine\fo_ModifyCharacForForumCats_Ad\Parameters
     */
    public function clearForumCategoryId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <forum_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getForumCategoryId(){
      return $this->_get(1);
    }
    
    /**
     * Set <forum_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_ModifyCharacForForumCats_Ad\Parameters
     */
    public function setForumCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <forum_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasForumCategoryIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <forum_category_id_null> value
     *
     * @return \dstore\engine\fo_ModifyCharacForForumCats_Ad\Parameters
     */
    public function clearForumCategoryIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <forum_category_id_null> value
     *
     * @return boolean
     */
    public function getForumCategoryIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <forum_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyCharacForForumCats_Ad\Parameters
     */
    public function setForumCategoryIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <posting_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPostingCharacteristicId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <posting_characteristic_id> value
     *
     * @return \dstore\engine\fo_ModifyCharacForForumCats_Ad\Parameters
     */
    public function clearPostingCharacteristicId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <posting_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPostingCharacteristicId(){
      return $this->_get(2);
    }
    
    /**
     * Set <posting_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_ModifyCharacForForumCats_Ad\Parameters
     */
    public function setPostingCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <posting_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasPostingCharacteristicIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <posting_characteristic_id_null> value
     *
     * @return \dstore\engine\fo_ModifyCharacForForumCats_Ad\Parameters
     */
    public function clearPostingCharacteristicIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <posting_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getPostingCharacteristicIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <posting_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyCharacForForumCats_Ad\Parameters
     */
    public function setPostingCharacteristicIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <delete_relation> has a value
     *
     * @return boolean
     */
    public function hasDeleteRelation(){
      return $this->_has(3);
    }
    
    /**
     * Clear <delete_relation> value
     *
     * @return \dstore\engine\fo_ModifyCharacForForumCats_Ad\Parameters
     */
    public function clearDeleteRelation(){
      return $this->_clear(3);
    }
    
    /**
     * Get <delete_relation> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteRelation(){
      return $this->_get(3);
    }
    
    /**
     * Set <delete_relation> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_ModifyCharacForForumCats_Ad\Parameters
     */
    public function setDeleteRelation(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <delete_relation_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteRelationNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <delete_relation_null> value
     *
     * @return \dstore\engine\fo_ModifyCharacForForumCats_Ad\Parameters
     */
    public function clearDeleteRelationNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <delete_relation_null> value
     *
     * @return boolean
     */
    public function getDeleteRelationNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <delete_relation_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyCharacForForumCats_Ad\Parameters
     */
    public function setDeleteRelationNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

