<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetEncryptionAlgorithm_Pu.proto
//   Date: 2015-10-06 11:20:05

namespace dstore\engine\pm_GetEncryptionAlgorithm_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $identifying_characteristic_id = null;
    
    /**  @var boolean */
    public $identifying_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $identifying_value = null;
    
    /**  @var boolean */
    public $identifying_value_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $case_sensitive = null;
    
    /**  @var boolean */
    public $case_sensitive_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $get_encr_alg_for_charac_id_list = null;
    
    /**  @var boolean */
    public $get_encr_alg_for_charac_id_list_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetEncryptionAlgorithm_Pu.Parameters');

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

      // OPTIONAL MESSAGE identifying_characteristic_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "identifying_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL identifying_characteristic_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "identifying_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE identifying_value = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "identifying_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL identifying_value_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "identifying_value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE case_sensitive = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "case_sensitive";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL case_sensitive_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "case_sensitive_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_encr_alg_for_charac_id_list = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "get_encr_alg_for_charac_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_encr_alg_for_charac_id_list_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "get_encr_alg_for_charac_id_list_null";
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
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
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
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
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
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
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
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <identifying_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasIdentifyingCharacteristicId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <identifying_characteristic_id> value
     *
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function clearIdentifyingCharacteristicId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <identifying_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getIdentifyingCharacteristicId(){
      return $this->_get(2);
    }
    
    /**
     * Set <identifying_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function setIdentifyingCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <identifying_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasIdentifyingCharacteristicIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <identifying_characteristic_id_null> value
     *
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function clearIdentifyingCharacteristicIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <identifying_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getIdentifyingCharacteristicIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <identifying_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function setIdentifyingCharacteristicIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <identifying_value> has a value
     *
     * @return boolean
     */
    public function hasIdentifyingValue(){
      return $this->_has(3);
    }
    
    /**
     * Clear <identifying_value> value
     *
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function clearIdentifyingValue(){
      return $this->_clear(3);
    }
    
    /**
     * Get <identifying_value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getIdentifyingValue(){
      return $this->_get(3);
    }
    
    /**
     * Set <identifying_value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function setIdentifyingValue(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <identifying_value_null> has a value
     *
     * @return boolean
     */
    public function hasIdentifyingValueNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <identifying_value_null> value
     *
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function clearIdentifyingValueNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <identifying_value_null> value
     *
     * @return boolean
     */
    public function getIdentifyingValueNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <identifying_value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function setIdentifyingValueNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <case_sensitive> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitive(){
      return $this->_has(4);
    }
    
    /**
     * Clear <case_sensitive> value
     *
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function clearCaseSensitive(){
      return $this->_clear(4);
    }
    
    /**
     * Get <case_sensitive> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCaseSensitive(){
      return $this->_get(4);
    }
    
    /**
     * Set <case_sensitive> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function setCaseSensitive(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <case_sensitive_null> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitiveNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <case_sensitive_null> value
     *
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function clearCaseSensitiveNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <case_sensitive_null> value
     *
     * @return boolean
     */
    public function getCaseSensitiveNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <case_sensitive_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function setCaseSensitiveNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <get_encr_alg_for_charac_id_list> has a value
     *
     * @return boolean
     */
    public function hasGetEncrAlgForCharacIdList(){
      return $this->_has(5);
    }
    
    /**
     * Clear <get_encr_alg_for_charac_id_list> value
     *
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function clearGetEncrAlgForCharacIdList(){
      return $this->_clear(5);
    }
    
    /**
     * Get <get_encr_alg_for_charac_id_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getGetEncrAlgForCharacIdList(){
      return $this->_get(5);
    }
    
    /**
     * Set <get_encr_alg_for_charac_id_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function setGetEncrAlgForCharacIdList(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <get_encr_alg_for_charac_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasGetEncrAlgForCharacIdListNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <get_encr_alg_for_charac_id_list_null> value
     *
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function clearGetEncrAlgForCharacIdListNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <get_encr_alg_for_charac_id_list_null> value
     *
     * @return boolean
     */
    public function getGetEncrAlgForCharacIdListNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <get_encr_alg_for_charac_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetEncryptionAlgorithm_Pu\Parameters
     */
    public function setGetEncrAlgForCharacIdListNull( $value){
      return $this->_set(1005, $value);
    }
  }
}

