<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetPersonPDStatistics_Ad.proto
//   Date: 2015-10-06 11:20:09

namespace dstore\engine\st_GetPersonPDStatistics_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $person_ids = null;
    
    /**  @var boolean */
    public $person_ids_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $from_date = null;
    
    /**  @var boolean */
    public $from_date_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $to_date = null;
    
    /**  @var boolean */
    public $to_date_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $basic_characteristic_numbers = null;
    
    /**  @var boolean */
    public $basic_characteristic_numbers_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $h_tree_node_ids = null;
    
    /**  @var boolean */
    public $h_tree_node_ids_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $summarize_days = null;
    
    /**  @var boolean */
    public $summarize_days_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $get_top_x = null;
    
    /**  @var boolean */
    public $get_top_x_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetPersonPDStatistics_Ad.Parameters');

      // OPTIONAL MESSAGE person_ids = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_ids_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_ids_null";
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

      // OPTIONAL MESSAGE basic_characteristic_numbers = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "basic_characteristic_numbers";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL basic_characteristic_numbers_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "basic_characteristic_numbers_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE h_tree_node_ids = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "h_tree_node_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL h_tree_node_ids_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "h_tree_node_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE summarize_days = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "summarize_days";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL summarize_days_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "summarize_days_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_top_x = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "get_top_x";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_top_x_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "get_top_x_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_ids> has a value
     *
     * @return boolean
     */
    public function hasPersonIds(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_ids> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function clearPersonIds(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPersonIds(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function setPersonIds(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_ids_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdsNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_ids_null> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function clearPersonIdsNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_ids_null> value
     *
     * @return boolean
     */
    public function getPersonIdsNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function setPersonIdsNull( $value){
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
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function setToDateNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <basic_characteristic_numbers> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumbers(){
      return $this->_has(4);
    }
    
    /**
     * Clear <basic_characteristic_numbers> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function clearBasicCharacteristicNumbers(){
      return $this->_clear(4);
    }
    
    /**
     * Get <basic_characteristic_numbers> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getBasicCharacteristicNumbers(){
      return $this->_get(4);
    }
    
    /**
     * Set <basic_characteristic_numbers> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function setBasicCharacteristicNumbers(\dstore\engine\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <basic_characteristic_numbers_null> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumbersNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <basic_characteristic_numbers_null> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function clearBasicCharacteristicNumbersNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <basic_characteristic_numbers_null> value
     *
     * @return boolean
     */
    public function getBasicCharacteristicNumbersNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <basic_characteristic_numbers_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function setBasicCharacteristicNumbersNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <h_tree_node_ids> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeIds(){
      return $this->_has(5);
    }
    
    /**
     * Clear <h_tree_node_ids> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function clearHTreeNodeIds(){
      return $this->_clear(5);
    }
    
    /**
     * Get <h_tree_node_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getHTreeNodeIds(){
      return $this->_get(5);
    }
    
    /**
     * Set <h_tree_node_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function setHTreeNodeIds(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <h_tree_node_ids_null> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeIdsNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <h_tree_node_ids_null> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function clearHTreeNodeIdsNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <h_tree_node_ids_null> value
     *
     * @return boolean
     */
    public function getHTreeNodeIdsNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <h_tree_node_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function setHTreeNodeIdsNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <summarize_days> has a value
     *
     * @return boolean
     */
    public function hasSummarizeDays(){
      return $this->_has(6);
    }
    
    /**
     * Clear <summarize_days> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function clearSummarizeDays(){
      return $this->_clear(6);
    }
    
    /**
     * Get <summarize_days> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getSummarizeDays(){
      return $this->_get(6);
    }
    
    /**
     * Set <summarize_days> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function setSummarizeDays(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <summarize_days_null> has a value
     *
     * @return boolean
     */
    public function hasSummarizeDaysNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <summarize_days_null> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function clearSummarizeDaysNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <summarize_days_null> value
     *
     * @return boolean
     */
    public function getSummarizeDaysNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <summarize_days_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function setSummarizeDaysNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <get_top_x> has a value
     *
     * @return boolean
     */
    public function hasGetTopX(){
      return $this->_has(7);
    }
    
    /**
     * Clear <get_top_x> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function clearGetTopX(){
      return $this->_clear(7);
    }
    
    /**
     * Get <get_top_x> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getGetTopX(){
      return $this->_get(7);
    }
    
    /**
     * Set <get_top_x> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function setGetTopX(\dstore\engine\values\integerValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <get_top_x_null> has a value
     *
     * @return boolean
     */
    public function hasGetTopXNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <get_top_x_null> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function clearGetTopXNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <get_top_x_null> value
     *
     * @return boolean
     */
    public function getGetTopXNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <get_top_x_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Parameters
     */
    public function setGetTopXNull( $value){
      return $this->_set(1007, $value);
    }
  }
}

