<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersonDetails_Pu.proto
//   Date: 2015-10-06 11:20:06

namespace dstore\engine\pm_GetPersonDetails_Pu {

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
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_id_list = null;
    
    /**  @var boolean */
    public $characteristic_id_list_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $sorted_result = null;
    
    /**  @var boolean */
    public $sorted_result_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $include_characs_with_no_details = null;
    
    /**  @var boolean */
    public $include_characs_with_no_details_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $details_related_to_unique_id = null;
    
    /**  @var boolean */
    public $details_related_to_unique_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersonDetails_Pu.Parameters');

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

      // OPTIONAL MESSAGE characteristic_id_list = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "characteristic_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL characteristic_id_list_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "characteristic_id_list_null";
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

      // OPTIONAL MESSAGE sorted_result = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "sorted_result";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sorted_result_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "sorted_result_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_characs_with_no_details = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "include_characs_with_no_details";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_characs_with_no_details_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "include_characs_with_no_details_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE details_related_to_unique_id = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "details_related_to_unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL details_related_to_unique_id_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "details_related_to_unique_id_null";
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function setCaseSensitiveNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <characteristic_id_list> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList(){
      return $this->_has(4);
    }
    
    /**
     * Clear <characteristic_id_list> value
     *
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function clearCharacteristicIdList(){
      return $this->_clear(4);
    }
    
    /**
     * Get <characteristic_id_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicIdList(){
      return $this->_get(4);
    }
    
    /**
     * Set <characteristic_id_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function setCharacteristicIdList(\dstore\engine\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <characteristic_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdListNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <characteristic_id_list_null> value
     *
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function clearCharacteristicIdListNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <characteristic_id_list_null> value
     *
     * @return boolean
     */
    public function getCharacteristicIdListNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <characteristic_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function setCharacteristicIdListNull( $value){
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
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
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function setPersonIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <sorted_result> has a value
     *
     * @return boolean
     */
    public function hasSortedResult(){
      return $this->_has(6);
    }
    
    /**
     * Clear <sorted_result> value
     *
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function clearSortedResult(){
      return $this->_clear(6);
    }
    
    /**
     * Get <sorted_result> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getSortedResult(){
      return $this->_get(6);
    }
    
    /**
     * Set <sorted_result> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function setSortedResult(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <sorted_result_null> has a value
     *
     * @return boolean
     */
    public function hasSortedResultNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <sorted_result_null> value
     *
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function clearSortedResultNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <sorted_result_null> value
     *
     * @return boolean
     */
    public function getSortedResultNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <sorted_result_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function setSortedResultNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <include_characs_with_no_details> has a value
     *
     * @return boolean
     */
    public function hasIncludeCharacsWithNoDetails(){
      return $this->_has(7);
    }
    
    /**
     * Clear <include_characs_with_no_details> value
     *
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function clearIncludeCharacsWithNoDetails(){
      return $this->_clear(7);
    }
    
    /**
     * Get <include_characs_with_no_details> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIncludeCharacsWithNoDetails(){
      return $this->_get(7);
    }
    
    /**
     * Set <include_characs_with_no_details> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function setIncludeCharacsWithNoDetails(\dstore\engine\values\booleanValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <include_characs_with_no_details_null> has a value
     *
     * @return boolean
     */
    public function hasIncludeCharacsWithNoDetailsNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <include_characs_with_no_details_null> value
     *
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function clearIncludeCharacsWithNoDetailsNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <include_characs_with_no_details_null> value
     *
     * @return boolean
     */
    public function getIncludeCharacsWithNoDetailsNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <include_characs_with_no_details_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function setIncludeCharacsWithNoDetailsNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <details_related_to_unique_id> has a value
     *
     * @return boolean
     */
    public function hasDetailsRelatedToUniqueId(){
      return $this->_has(8);
    }
    
    /**
     * Clear <details_related_to_unique_id> value
     *
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function clearDetailsRelatedToUniqueId(){
      return $this->_clear(8);
    }
    
    /**
     * Get <details_related_to_unique_id> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDetailsRelatedToUniqueId(){
      return $this->_get(8);
    }
    
    /**
     * Set <details_related_to_unique_id> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function setDetailsRelatedToUniqueId(\dstore\engine\values\stringValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <details_related_to_unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasDetailsRelatedToUniqueIdNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <details_related_to_unique_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function clearDetailsRelatedToUniqueIdNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <details_related_to_unique_id_null> value
     *
     * @return boolean
     */
    public function getDetailsRelatedToUniqueIdNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <details_related_to_unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonDetails_Pu\Parameters
     */
    public function setDetailsRelatedToUniqueIdNull( $value){
      return $this->_set(1008, $value);
    }
  }
}

