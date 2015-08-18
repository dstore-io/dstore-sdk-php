<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetHTreeNodeStatistics_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\st_GetHTreeNodeStatistics_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $h_tree_node_id = null;
    
    /**  @var boolean */
    public $h_tree_node_id_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $from_date = null;
    
    /**  @var boolean */
    public $from_date_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $to_date = null;
    
    /**  @var boolean */
    public $to_date_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $source_table = null;
    
    /**  @var boolean */
    public $source_table_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $basic_characteristic_numbers = null;
    
    /**  @var boolean */
    public $basic_characteristic_numbers_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var boolean */
    public $node_characteristic_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetHTreeNodeStatistics_Ad.Parameters');

      // OPTIONAL MESSAGE h_tree_node_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "h_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL h_tree_node_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "h_tree_node_id_null";
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

      // OPTIONAL MESSAGE source_table = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "source_table";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL source_table_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "source_table_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_characteristic_numbers = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "basic_characteristic_numbers";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL basic_characteristic_numbers_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "basic_characteristic_numbers_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_characteristic_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL node_characteristic_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "node_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <h_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <h_tree_node_id> value
     *
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function clearHTreeNodeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <h_tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getHTreeNodeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <h_tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function setHTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <h_tree_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <h_tree_node_id_null> value
     *
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function clearHTreeNodeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <h_tree_node_id_null> value
     *
     * @return boolean
     */
    public function getHTreeNodeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <h_tree_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function setHTreeNodeIdNull( $value){
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
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
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
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function setToDateNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <source_table> has a value
     *
     * @return boolean
     */
    public function hasSourceTable(){
      return $this->_has(4);
    }
    
    /**
     * Clear <source_table> value
     *
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function clearSourceTable(){
      return $this->_clear(4);
    }
    
    /**
     * Get <source_table> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSourceTable(){
      return $this->_get(4);
    }
    
    /**
     * Set <source_table> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function setSourceTable(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <source_table_null> has a value
     *
     * @return boolean
     */
    public function hasSourceTableNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <source_table_null> value
     *
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function clearSourceTableNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <source_table_null> value
     *
     * @return boolean
     */
    public function getSourceTableNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <source_table_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function setSourceTableNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <basic_characteristic_numbers> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumbers(){
      return $this->_has(5);
    }
    
    /**
     * Clear <basic_characteristic_numbers> value
     *
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function clearBasicCharacteristicNumbers(){
      return $this->_clear(5);
    }
    
    /**
     * Get <basic_characteristic_numbers> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getBasicCharacteristicNumbers(){
      return $this->_get(5);
    }
    
    /**
     * Set <basic_characteristic_numbers> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function setBasicCharacteristicNumbers(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <basic_characteristic_numbers_null> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumbersNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <basic_characteristic_numbers_null> value
     *
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function clearBasicCharacteristicNumbersNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <basic_characteristic_numbers_null> value
     *
     * @return boolean
     */
    public function getBasicCharacteristicNumbersNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <basic_characteristic_numbers_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function setBasicCharacteristicNumbersNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(6);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function setNodeCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <node_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <node_characteristic_id_null> value
     *
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function clearNodeCharacteristicIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <node_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getNodeCharacteristicIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <node_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetHTreeNodeStatistics_Ad\Parameters
     */
    public function setNodeCharacteristicIdNull( $value){
      return $this->_set(1006, $value);
    }
  }
}
