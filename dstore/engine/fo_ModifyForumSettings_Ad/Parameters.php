<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_ModifyForumSettings_Ad.proto
//   Date: 2015-10-06 11:19:45

namespace dstore\engine\fo_ModifyForumSettings_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $forum_id = null;
    
    /**  @var boolean */
    public $forum_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $key_variable = null;
    
    /**  @var boolean */
    public $key_variable_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var boolean */
    public $value_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_ModifyForumSettings_Ad.Parameters');

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

      // OPTIONAL MESSAGE person_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE key_variable = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "key_variable";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL key_variable_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "key_variable_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "value_null";
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
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
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
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
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
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
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
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function setForumIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_id_null> value
     *
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function clearPersonIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_id_null> value
     *
     * @return boolean
     */
    public function getPersonIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function setPersonIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <key_variable> has a value
     *
     * @return boolean
     */
    public function hasKeyVariable(){
      return $this->_has(3);
    }
    
    /**
     * Clear <key_variable> value
     *
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function clearKeyVariable(){
      return $this->_clear(3);
    }
    
    /**
     * Get <key_variable> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getKeyVariable(){
      return $this->_get(3);
    }
    
    /**
     * Set <key_variable> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function setKeyVariable(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <key_variable_null> has a value
     *
     * @return boolean
     */
    public function hasKeyVariableNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <key_variable_null> value
     *
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function clearKeyVariableNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <key_variable_null> value
     *
     * @return boolean
     */
    public function getKeyVariableNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <key_variable_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function setKeyVariableNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(4);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function clearValue(){
      return $this->_clear(4);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(4);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <value_null> has a value
     *
     * @return boolean
     */
    public function hasValueNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <value_null> value
     *
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function clearValueNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <value_null> value
     *
     * @return boolean
     */
    public function getValueNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyForumSettings_Ad\Parameters
     */
    public function setValueNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

