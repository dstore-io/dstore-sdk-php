<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetPersonPDStatistics_Ad.proto
//   Date: 2015-10-06 11:20:09

namespace dstore\engine\st_GetPersonPDStatistics_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value1_restricted_by_pattern = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value2_restricted_by_pattern = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $total_value = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $h_tree_node_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value1 = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value2 = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $direct_value = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $day = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $basic_characteristic_number = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetPersonPDStatistics_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value1_restricted_by_pattern = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "value1_restricted_by_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value2_restricted_by_pattern = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "value2_restricted_by_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE total_value = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "total_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE h_tree_node_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "h_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value1 = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "value1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value2 = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "value2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE direct_value = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "direct_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE day = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "day";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_characteristic_number = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "basic_characteristic_number";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <row_id> has a value
     *
     * @return boolean
     */
    public function hasRowId(){
      return $this->_has(10000);
    }
    
    /**
     * Clear <row_id> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function clearRowId(){
      return $this->_clear(10000);
    }
    
    /**
     * Get <row_id> value
     *
     * @return int
     */
    public function getRowId(){
      return $this->_get(10000);
    }
    
    /**
     * Set <row_id> value
     *
     * @param int $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <value1_restricted_by_pattern> has a value
     *
     * @return boolean
     */
    public function hasValue1RestrictedByPattern(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <value1_restricted_by_pattern> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function clearValue1RestrictedByPattern(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <value1_restricted_by_pattern> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue1RestrictedByPattern(){
      return $this->_get(10001);
    }
    
    /**
     * Set <value1_restricted_by_pattern> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function setValue1RestrictedByPattern(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <value2_restricted_by_pattern> has a value
     *
     * @return boolean
     */
    public function hasValue2RestrictedByPattern(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <value2_restricted_by_pattern> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function clearValue2RestrictedByPattern(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <value2_restricted_by_pattern> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue2RestrictedByPattern(){
      return $this->_get(10002);
    }
    
    /**
     * Set <value2_restricted_by_pattern> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function setValue2RestrictedByPattern(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <total_value> has a value
     *
     * @return boolean
     */
    public function hasTotalValue(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <total_value> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function clearTotalValue(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <total_value> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getTotalValue(){
      return $this->_get(10003);
    }
    
    /**
     * Set <total_value> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function setTotalValue(\dstore\engine\values\decimalValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function clearPersonId(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(10004);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <h_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <h_tree_node_id> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function clearHTreeNodeId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <h_tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getHTreeNodeId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <h_tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function setHTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <value1> has a value
     *
     * @return boolean
     */
    public function hasValue1(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <value1> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function clearValue1(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <value1> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue1(){
      return $this->_get(10006);
    }
    
    /**
     * Set <value1> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function setValue1(\dstore\engine\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <value2> has a value
     *
     * @return boolean
     */
    public function hasValue2(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <value2> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function clearValue2(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <value2> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue2(){
      return $this->_get(10007);
    }
    
    /**
     * Set <value2> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function setValue2(\dstore\engine\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <direct_value> has a value
     *
     * @return boolean
     */
    public function hasDirectValue(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <direct_value> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function clearDirectValue(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <direct_value> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getDirectValue(){
      return $this->_get(10008);
    }
    
    /**
     * Set <direct_value> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function setDirectValue(\dstore\engine\values\decimalValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <day> has a value
     *
     * @return boolean
     */
    public function hasDay(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <day> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function clearDay(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <day> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getDay(){
      return $this->_get(10009);
    }
    
    /**
     * Set <day> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function setDay(\dstore\engine\values\timestampValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <basic_characteristic_number> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumber(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <basic_characteristic_number> value
     *
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function clearBasicCharacteristicNumber(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <basic_characteristic_number> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBasicCharacteristicNumber(){
      return $this->_get(10010);
    }
    
    /**
     * Set <basic_characteristic_number> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetPersonPDStatistics_Ad\Response\Row
     */
    public function setBasicCharacteristicNumber(\dstore\engine\values\integerValue $value){
      return $this->_set(10010, $value);
    }
  }
}

