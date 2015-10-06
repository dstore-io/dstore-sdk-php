<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_ModifyPersonDetails_Pu.proto
//   Date: 2015-10-06 11:20:08

namespace dstore\engine\pm_ModifyPersonDetails_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $person_identification_values = null;
    
    /**  @var boolean */
    public $person_identification_values_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $case_sensitive = null;
    
    /**  @var boolean */
    public $case_sensitive_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_characteristic_id = null;
    
    /**  @var boolean */
    public $person_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_ModifyPersonDetails_Pu.Parameters');

      // OPTIONAL MESSAGE person_identification_values = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_identification_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_identification_values_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_identification_values_null";
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

      // OPTIONAL MESSAGE case_sensitive = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "case_sensitive";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL case_sensitive_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "case_sensitive_null";
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

      // OPTIONAL MESSAGE person_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_identification_values> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValues(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_identification_values> value
     *
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function clearPersonIdentificationValues(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_identification_values> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPersonIdentificationValues(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_identification_values> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function setPersonIdentificationValues(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_identification_values_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValuesNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_identification_values_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function clearPersonIdentificationValuesNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_identification_values_null> value
     *
     * @return boolean
     */
    public function getPersonIdentificationValuesNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_identification_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function setPersonIdentificationValuesNull( $value){
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
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <case_sensitive> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitive(){
      return $this->_has(3);
    }
    
    /**
     * Clear <case_sensitive> value
     *
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function clearCaseSensitive(){
      return $this->_clear(3);
    }
    
    /**
     * Get <case_sensitive> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCaseSensitive(){
      return $this->_get(3);
    }
    
    /**
     * Set <case_sensitive> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function setCaseSensitive(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <case_sensitive_null> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitiveNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <case_sensitive_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function clearCaseSensitiveNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <case_sensitive_null> value
     *
     * @return boolean
     */
    public function getCaseSensitiveNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <case_sensitive_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function setCaseSensitiveNull( $value){
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
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function setPersonCharacteristicIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(5);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <person_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <person_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function clearPersonIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <person_id_null> value
     *
     * @return boolean
     */
    public function getPersonIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonDetails_Pu\Parameters
     */
    public function setPersonIdNull( $value){
      return $this->_set(1005, $value);
    }
  }
}

