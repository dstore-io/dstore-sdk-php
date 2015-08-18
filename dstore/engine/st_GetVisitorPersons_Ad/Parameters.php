<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetVisitorPersons_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\st_GetVisitorPersons_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $visitor_id = null;
    
    /**  @var boolean */
    public $visitor_id_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $from_date = null;
    
    /**  @var boolean */
    public $from_date_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $to_date = null;
    
    /**  @var boolean */
    public $to_date_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $visitor_or_person_ids_in_one_id = null;
    
    /**  @var boolean */
    public $visitor_or_person_ids_in_one_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $output_into_one_id = null;
    
    /**  @var boolean */
    public $output_into_one_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetVisitorPersons_Ad.Parameters');

      // OPTIONAL MESSAGE visitor_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "visitor_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL visitor_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "visitor_id_null";
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

      // OPTIONAL MESSAGE person_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "person_id_null";
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

      // OPTIONAL MESSAGE output_into_one_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "output_into_one_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL output_into_one_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "output_into_one_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <visitor_id> has a value
     *
     * @return boolean
     */
    public function hasVisitorId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <visitor_id> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function clearVisitorId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <visitor_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVisitorId(){
      return $this->_get(1);
    }
    
    /**
     * Set <visitor_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function setVisitorId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <visitor_id_null> has a value
     *
     * @return boolean
     */
    public function hasVisitorIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <visitor_id_null> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function clearVisitorIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <visitor_id_null> value
     *
     * @return boolean
     */
    public function getVisitorIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <visitor_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function setVisitorIdNull( $value){
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function setToDateNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(4);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <person_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <person_id_null> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function clearPersonIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <person_id_null> value
     *
     * @return boolean
     */
    public function getPersonIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function setPersonIdNull( $value){
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function setVisitorOrPersonIdsInOneIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <output_into_one_id> has a value
     *
     * @return boolean
     */
    public function hasOutputIntoOneId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <output_into_one_id> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function clearOutputIntoOneId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <output_into_one_id> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getOutputIntoOneId(){
      return $this->_get(6);
    }
    
    /**
     * Set <output_into_one_id> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function setOutputIntoOneId(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <output_into_one_id_null> has a value
     *
     * @return boolean
     */
    public function hasOutputIntoOneIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <output_into_one_id_null> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function clearOutputIntoOneIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <output_into_one_id_null> value
     *
     * @return boolean
     */
    public function getOutputIntoOneIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <output_into_one_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Parameters
     */
    public function setOutputIntoOneIdNull( $value){
      return $this->_set(1006, $value);
    }
  }
}
