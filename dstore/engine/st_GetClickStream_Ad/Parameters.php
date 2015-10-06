<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetClickStream_Ad.proto
//   Date: 2015-10-06 11:20:09

namespace dstore\engine\st_GetClickStream_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $from_date = null;
    
    /**  @var boolean */
    public $from_date_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $to_date = null;
    
    /**  @var boolean */
    public $to_date_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $visitor_id = null;
    
    /**  @var boolean */
    public $visitor_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $visitor_or_person_ids_in_one_id = null;
    
    /**  @var boolean */
    public $visitor_or_person_ids_in_one_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $consider_only_relation_period = null;
    
    /**  @var boolean */
    public $consider_only_relation_period_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $basic_characteristic_numbers = null;
    
    /**  @var boolean */
    public $basic_characteristic_numbers_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetClickStream_Ad.Parameters');

      // OPTIONAL MESSAGE person_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_date = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "from_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_date_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "from_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_date = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "to_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_date_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "to_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visitor_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "visitor_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL visitor_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "visitor_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visitor_or_person_ids_in_one_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "visitor_or_person_ids_in_one_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL visitor_or_person_ids_in_one_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "visitor_or_person_ids_in_one_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE consider_only_relation_period = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "consider_only_relation_period";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL consider_only_relation_period_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "consider_only_relation_period_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_characteristic_numbers = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "basic_characteristic_numbers";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL basic_characteristic_numbers_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "basic_characteristic_numbers_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_id_null> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearPersonIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_id_null> value
     *
     * @return boolean
     */
    public function getPersonIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setPersonIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <from_date> has a value
     *
     * @return boolean
     */
    public function hasFromDate(){
      return $this->_has(2);
    }
    
    /**
     * Clear <from_date> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearFromDate(){
      return $this->_clear(2);
    }
    
    /**
     * Get <from_date> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getFromDate(){
      return $this->_get(2);
    }
    
    /**
     * Set <from_date> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setFromDate(\dstore\engine\values\timestampValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <from_date_null> has a value
     *
     * @return boolean
     */
    public function hasFromDateNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <from_date_null> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearFromDateNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <from_date_null> value
     *
     * @return boolean
     */
    public function getFromDateNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <from_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setFromDateNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <to_date> has a value
     *
     * @return boolean
     */
    public function hasToDate(){
      return $this->_has(3);
    }
    
    /**
     * Clear <to_date> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearToDate(){
      return $this->_clear(3);
    }
    
    /**
     * Get <to_date> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getToDate(){
      return $this->_get(3);
    }
    
    /**
     * Set <to_date> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setToDate(\dstore\engine\values\timestampValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <to_date_null> has a value
     *
     * @return boolean
     */
    public function hasToDateNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <to_date_null> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearToDateNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <to_date_null> value
     *
     * @return boolean
     */
    public function getToDateNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <to_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setToDateNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <visitor_id> has a value
     *
     * @return boolean
     */
    public function hasVisitorId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <visitor_id> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearVisitorId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <visitor_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVisitorId(){
      return $this->_get(4);
    }
    
    /**
     * Set <visitor_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setVisitorId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <visitor_id_null> has a value
     *
     * @return boolean
     */
    public function hasVisitorIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <visitor_id_null> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearVisitorIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <visitor_id_null> value
     *
     * @return boolean
     */
    public function getVisitorIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <visitor_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setVisitorIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <visitor_or_person_ids_in_one_id> has a value
     *
     * @return boolean
     */
    public function hasVisitorOrPersonIdsInOneId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <visitor_or_person_ids_in_one_id> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearVisitorOrPersonIdsInOneId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <visitor_or_person_ids_in_one_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVisitorOrPersonIdsInOneId(){
      return $this->_get(5);
    }
    
    /**
     * Set <visitor_or_person_ids_in_one_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setVisitorOrPersonIdsInOneId(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <visitor_or_person_ids_in_one_id_null> has a value
     *
     * @return boolean
     */
    public function hasVisitorOrPersonIdsInOneIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <visitor_or_person_ids_in_one_id_null> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearVisitorOrPersonIdsInOneIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <visitor_or_person_ids_in_one_id_null> value
     *
     * @return boolean
     */
    public function getVisitorOrPersonIdsInOneIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <visitor_or_person_ids_in_one_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setVisitorOrPersonIdsInOneIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <consider_only_relation_period> has a value
     *
     * @return boolean
     */
    public function hasConsiderOnlyRelationPeriod(){
      return $this->_has(6);
    }
    
    /**
     * Clear <consider_only_relation_period> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearConsiderOnlyRelationPeriod(){
      return $this->_clear(6);
    }
    
    /**
     * Get <consider_only_relation_period> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getConsiderOnlyRelationPeriod(){
      return $this->_get(6);
    }
    
    /**
     * Set <consider_only_relation_period> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setConsiderOnlyRelationPeriod(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <consider_only_relation_period_null> has a value
     *
     * @return boolean
     */
    public function hasConsiderOnlyRelationPeriodNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <consider_only_relation_period_null> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearConsiderOnlyRelationPeriodNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <consider_only_relation_period_null> value
     *
     * @return boolean
     */
    public function getConsiderOnlyRelationPeriodNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <consider_only_relation_period_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setConsiderOnlyRelationPeriodNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <basic_characteristic_numbers> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumbers(){
      return $this->_has(7);
    }
    
    /**
     * Clear <basic_characteristic_numbers> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearBasicCharacteristicNumbers(){
      return $this->_clear(7);
    }
    
    /**
     * Get <basic_characteristic_numbers> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getBasicCharacteristicNumbers(){
      return $this->_get(7);
    }
    
    /**
     * Set <basic_characteristic_numbers> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setBasicCharacteristicNumbers(\dstore\engine\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <basic_characteristic_numbers_null> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumbersNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <basic_characteristic_numbers_null> value
     *
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function clearBasicCharacteristicNumbersNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <basic_characteristic_numbers_null> value
     *
     * @return boolean
     */
    public function getBasicCharacteristicNumbersNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <basic_characteristic_numbers_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetClickStream_Ad\Parameters
     */
    public function setBasicCharacteristicNumbersNull( $value){
      return $this->_set(1007, $value);
    }
  }
}

