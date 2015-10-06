<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPChAccRestrForUsers_Ad.proto
//   Date: 2015-10-06 11:20:05

namespace dstore\engine\pm_GetPChAccRestrForUsers_Ad {

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
    public $effective_restr_for_user_id = null;
    
    /**  @var boolean */
    public $effective_restr_for_user_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPChAccRestrForUsers_Ad.Parameters');

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

      // OPTIONAL MESSAGE effective_restr_for_user_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "effective_restr_for_user_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL effective_restr_for_user_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "effective_restr_for_user_id_null";
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
     * @return \dstore\engine\pm_GetPChAccRestrForUsers_Ad\Parameters
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
     * @return \dstore\engine\pm_GetPChAccRestrForUsers_Ad\Parameters
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
     * @return \dstore\engine\pm_GetPChAccRestrForUsers_Ad\Parameters
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
     * @return \dstore\engine\pm_GetPChAccRestrForUsers_Ad\Parameters
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
     * @return \dstore\engine\pm_GetPChAccRestrForUsers_Ad\Parameters
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
     * @return \dstore\engine\pm_GetPChAccRestrForUsers_Ad\Parameters
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
     * @return \dstore\engine\pm_GetPChAccRestrForUsers_Ad\Parameters
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
     * @return \dstore\engine\pm_GetPChAccRestrForUsers_Ad\Parameters
     */
    public function setPersonCharacteristicIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <effective_restr_for_user_id> has a value
     *
     * @return boolean
     */
    public function hasEffectiveRestrForUserId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <effective_restr_for_user_id> value
     *
     * @return \dstore\engine\pm_GetPChAccRestrForUsers_Ad\Parameters
     */
    public function clearEffectiveRestrForUserId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <effective_restr_for_user_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getEffectiveRestrForUserId(){
      return $this->_get(3);
    }
    
    /**
     * Set <effective_restr_for_user_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPChAccRestrForUsers_Ad\Parameters
     */
    public function setEffectiveRestrForUserId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <effective_restr_for_user_id_null> has a value
     *
     * @return boolean
     */
    public function hasEffectiveRestrForUserIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <effective_restr_for_user_id_null> value
     *
     * @return \dstore\engine\pm_GetPChAccRestrForUsers_Ad\Parameters
     */
    public function clearEffectiveRestrForUserIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <effective_restr_for_user_id_null> value
     *
     * @return boolean
     */
    public function getEffectiveRestrForUserIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <effective_restr_for_user_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPChAccRestrForUsers_Ad\Parameters
     */
    public function setEffectiveRestrForUserIdNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

