<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersonCharacteristics_Pu.proto
//   Date: 2015-10-06 11:20:06

namespace dstore\engine\pm_GetPersonCharacteristics_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_charac_category_id = null;
    
    /**  @var boolean */
    public $person_charac_category_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersonCharacteristics_Pu.Parameters');

      // OPTIONAL MESSAGE language_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_charac_category_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "person_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_charac_category_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "person_charac_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Pu\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(1);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Pu\Parameters
     */
    public function setLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <language_id_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <language_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Pu\Parameters
     */
    public function clearLanguageIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <language_id_null> value
     *
     * @return boolean
     */
    public function getLanguageIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <language_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Pu\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Pu\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Pu\Parameters
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Pu\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <person_charac_category_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <person_charac_category_id> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Pu\Parameters
     */
    public function clearPersonCharacCategoryId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <person_charac_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacCategoryId(){
      return $this->_get(3);
    }
    
    /**
     * Set <person_charac_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Pu\Parameters
     */
    public function setPersonCharacCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <person_charac_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <person_charac_category_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonCharacteristics_Pu\Parameters
     */
    public function clearPersonCharacCategoryIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <person_charac_category_id_null> value
     *
     * @return boolean
     */
    public function getPersonCharacCategoryIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <person_charac_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonCharacteristics_Pu\Parameters
     */
    public function setPersonCharacCategoryIdNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

