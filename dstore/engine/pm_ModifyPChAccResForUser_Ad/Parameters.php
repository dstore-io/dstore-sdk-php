<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_ModifyPChAccResForUser_Ad.proto
//   Date: 2015-10-06 11:20:07

namespace dstore\engine\pm_ModifyPChAccResForUser_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $user_id = null;
    
    /**  @var boolean */
    public $user_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_characteristic_id = null;
    
    /**  @var boolean */
    public $person_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $access_restriction = null;
    
    /**  @var boolean */
    public $access_restriction_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $read_access_restriction_pattern = null;
    
    /**  @var boolean */
    public $read_access_restriction_pattern_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete = null;
    
    /**  @var boolean */
    public $delete_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_ModifyPChAccResForUser_Ad.Parameters');

      // OPTIONAL MESSAGE user_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "user_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL user_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "user_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_characteristic_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_characteristic_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE access_restriction = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "access_restriction";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL access_restriction_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "access_restriction_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE read_access_restriction_pattern = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "read_access_restriction_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL read_access_restriction_pattern_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "read_access_restriction_pattern_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "delete";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "delete_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <user_id> has a value
     *
     * @return boolean
     */
    public function hasUserId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <user_id> value
     *
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function clearUserId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <user_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUserId(){
      return $this->_get(1);
    }
    
    /**
     * Set <user_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function setUserId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <user_id_null> has a value
     *
     * @return boolean
     */
    public function hasUserIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <user_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function clearUserIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <user_id_null> value
     *
     * @return boolean
     */
    public function getUserIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <user_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function setUserIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_characteristic_id> value
     *
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function clearPersonCharacteristicId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacteristicId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function setPersonCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_characteristic_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function clearPersonCharacteristicIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getPersonCharacteristicIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function setPersonCharacteristicIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <access_restriction> has a value
     *
     * @return boolean
     */
    public function hasAccessRestriction(){
      return $this->_has(3);
    }
    
    /**
     * Clear <access_restriction> value
     *
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function clearAccessRestriction(){
      return $this->_clear(3);
    }
    
    /**
     * Get <access_restriction> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getAccessRestriction(){
      return $this->_get(3);
    }
    
    /**
     * Set <access_restriction> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function setAccessRestriction(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <access_restriction_null> has a value
     *
     * @return boolean
     */
    public function hasAccessRestrictionNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <access_restriction_null> value
     *
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function clearAccessRestrictionNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <access_restriction_null> value
     *
     * @return boolean
     */
    public function getAccessRestrictionNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <access_restriction_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function setAccessRestrictionNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <read_access_restriction_pattern> has a value
     *
     * @return boolean
     */
    public function hasReadAccessRestrictionPattern(){
      return $this->_has(4);
    }
    
    /**
     * Clear <read_access_restriction_pattern> value
     *
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function clearReadAccessRestrictionPattern(){
      return $this->_clear(4);
    }
    
    /**
     * Get <read_access_restriction_pattern> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getReadAccessRestrictionPattern(){
      return $this->_get(4);
    }
    
    /**
     * Set <read_access_restriction_pattern> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function setReadAccessRestrictionPattern(\dstore\engine\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <read_access_restriction_pattern_null> has a value
     *
     * @return boolean
     */
    public function hasReadAccessRestrictionPatternNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <read_access_restriction_pattern_null> value
     *
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function clearReadAccessRestrictionPatternNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <read_access_restriction_pattern_null> value
     *
     * @return boolean
     */
    public function getReadAccessRestrictionPatternNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <read_access_restriction_pattern_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function setReadAccessRestrictionPatternNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <delete> has a value
     *
     * @return boolean
     */
    public function hasDelete(){
      return $this->_has(5);
    }
    
    /**
     * Clear <delete> value
     *
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function clearDelete(){
      return $this->_clear(5);
    }
    
    /**
     * Get <delete> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDelete(){
      return $this->_get(5);
    }
    
    /**
     * Set <delete> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function setDelete(\dstore\engine\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <delete_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <delete_null> value
     *
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function clearDeleteNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <delete_null> value
     *
     * @return boolean
     */
    public function getDeleteNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <delete_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPChAccResForUser_Ad\Parameters
     */
    public function setDeleteNull( $value){
      return $this->_set(1005, $value);
    }
  }
}

