<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersonCharacteristics_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_GetPersonCharacteristics_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_charac_category_id = null;
    
    /**  @var boolean */
    public $person_charac_category_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $not_in_person_characs_in_cats = null;
    
    /**  @var boolean */
    public $not_in_person_characs_in_cats_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_characteristic_id = null;
    
    /**  @var boolean */
    public $person_characteristic_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersonCharacteristics_Ad.Parameters');

      // OPTIONAL MESSAGE person_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_charac_category_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_charac_category_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_charac_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE not_in_person_characs_in_cats = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "not_in_person_characs_in_cats";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL not_in_person_characs_in_cats_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "not_in_person_characs_in_cats_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_characteristic_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "person_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_characteristic_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "person_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_charac_category_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_charac_category_id> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function clearPersonCharacCategoryId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_charac_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacCategoryId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_charac_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function setPersonCharacCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_charac_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_charac_category_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function clearPersonCharacCategoryIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_charac_category_id_null> value
     *
     * @return boolean
     */
    public function getPersonCharacCategoryIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_charac_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function setPersonCharacCategoryIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <not_in_person_characs_in_cats> has a value
     *
     * @return boolean
     */
    public function hasNotInPersonCharacsInCats(){
      return $this->_has(3);
    }
    
    /**
     * Clear <not_in_person_characs_in_cats> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function clearNotInPersonCharacsInCats(){
      return $this->_clear(3);
    }
    
    /**
     * Get <not_in_person_characs_in_cats> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNotInPersonCharacsInCats(){
      return $this->_get(3);
    }
    
    /**
     * Set <not_in_person_characs_in_cats> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function setNotInPersonCharacsInCats(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <not_in_person_characs_in_cats_null> has a value
     *
     * @return boolean
     */
    public function hasNotInPersonCharacsInCatsNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <not_in_person_characs_in_cats_null> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function clearNotInPersonCharacsInCatsNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <not_in_person_characs_in_cats_null> value
     *
     * @return boolean
     */
    public function getNotInPersonCharacsInCatsNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <not_in_person_characs_in_cats_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function setNotInPersonCharacsInCatsNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <person_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <person_characteristic_id> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function clearPersonCharacteristicId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <person_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacteristicId(){
      return $this->_get(4);
    }
    
    /**
     * Set <person_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function setPersonCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <person_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <person_characteristic_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function clearPersonCharacteristicIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <person_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getPersonCharacteristicIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <person_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Ad\Parameters
     */
    public function setPersonCharacteristicIdNull( $value){
      return $this->_set(1004, $value);
    }
  }
}
