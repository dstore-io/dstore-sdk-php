<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetDirectSuccessors_Tree_Ad.proto
//   Date: 2015-10-06 11:20:09

namespace dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $tree_level = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $predecessor = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $level_no = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $relative_value__basic_charac_no3 = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $relative_value__basic_charac_no2 = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $relative_value__basic_charac_no1 = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $total_value__index = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $relative_value__index = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $node_description = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $active = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $has_next_sibling = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $total_value__basic_charac_no1 = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $h_tree_node_id = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $total_value__basic_charac_no2 = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $total_value__basic_charac_no3 = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $max_relative_value_per_predecessor = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $tree_node_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $node_id = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $max_relative_value__index_per_pred = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $from_date = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $to_date = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $has_successors = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $deleted = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetDirectSuccessors_Tree_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE tree_level = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "tree_level";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predecessor = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "predecessor";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_no = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "level_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE relative_value__basic_charac_no3 = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "relative_value__basic_charac_no3";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE relative_value__basic_charac_no2 = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "relative_value__basic_charac_no2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE relative_value__basic_charac_no1 = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "relative_value__basic_charac_no1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE total_value__index = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "total_value__index";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE relative_value__index = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "relative_value__index";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_description = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "node_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE active = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "active";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE has_next_sibling = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "has_next_sibling";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE total_value__basic_charac_no1 = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "total_value__basic_charac_no1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE h_tree_node_id = 10013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10013;
      $f->name      = "h_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE total_value__basic_charac_no2 = 10014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10014;
      $f->name      = "total_value__basic_charac_no2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE total_value__basic_charac_no3 = 10015
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10015;
      $f->name      = "total_value__basic_charac_no3";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_relative_value_per_predecessor = 10016
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10016;
      $f->name      = "max_relative_value_per_predecessor";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE tree_node_id = 10017
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10017;
      $f->name      = "tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_id = 10018
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10018;
      $f->name      = "node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_relative_value__index_per_pred = 10019
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10019;
      $f->name      = "max_relative_value__index_per_pred";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_date = 10020
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10020;
      $f->name      = "from_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_date = 10021
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10021;
      $f->name      = "to_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE has_successors = 10022
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10022;
      $f->name      = "has_successors";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE deleted = 10023
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10023;
      $f->name      = "deleted";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
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
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
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
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <tree_level> has a value
     *
     * @return boolean
     */
    public function hasTreeLevel(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <tree_level> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearTreeLevel(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <tree_level> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTreeLevel(){
      return $this->_get(10001);
    }
    
    /**
     * Set <tree_level> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setTreeLevel(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <predecessor> has a value
     *
     * @return boolean
     */
    public function hasPredecessor(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <predecessor> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearPredecessor(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <predecessor> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPredecessor(){
      return $this->_get(10002);
    }
    
    /**
     * Set <predecessor> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setPredecessor(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <level_no> has a value
     *
     * @return boolean
     */
    public function hasLevelNo(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <level_no> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearLevelNo(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <level_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLevelNo(){
      return $this->_get(10003);
    }
    
    /**
     * Set <level_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setLevelNo(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <relative_value__basic_charac_no3> has a value
     *
     * @return boolean
     */
    public function hasRelativeValue_BasicCharacNo3(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <relative_value__basic_charac_no3> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearRelativeValue_BasicCharacNo3(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <relative_value__basic_charac_no3> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getRelativeValue_BasicCharacNo3(){
      return $this->_get(10004);
    }
    
    /**
     * Set <relative_value__basic_charac_no3> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setRelativeValue_BasicCharacNo3(\dstore\engine\values\decimalValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <relative_value__basic_charac_no2> has a value
     *
     * @return boolean
     */
    public function hasRelativeValue_BasicCharacNo2(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <relative_value__basic_charac_no2> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearRelativeValue_BasicCharacNo2(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <relative_value__basic_charac_no2> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getRelativeValue_BasicCharacNo2(){
      return $this->_get(10005);
    }
    
    /**
     * Set <relative_value__basic_charac_no2> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setRelativeValue_BasicCharacNo2(\dstore\engine\values\decimalValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <relative_value__basic_charac_no1> has a value
     *
     * @return boolean
     */
    public function hasRelativeValue_BasicCharacNo1(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <relative_value__basic_charac_no1> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearRelativeValue_BasicCharacNo1(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <relative_value__basic_charac_no1> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getRelativeValue_BasicCharacNo1(){
      return $this->_get(10006);
    }
    
    /**
     * Set <relative_value__basic_charac_no1> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setRelativeValue_BasicCharacNo1(\dstore\engine\values\decimalValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <total_value__index> has a value
     *
     * @return boolean
     */
    public function hasTotalValue_Index(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <total_value__index> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearTotalValue_Index(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <total_value__index> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getTotalValue_Index(){
      return $this->_get(10007);
    }
    
    /**
     * Set <total_value__index> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setTotalValue_Index(\dstore\engine\values\decimalValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <relative_value__index> has a value
     *
     * @return boolean
     */
    public function hasRelativeValue_Index(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <relative_value__index> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearRelativeValue_Index(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <relative_value__index> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getRelativeValue_Index(){
      return $this->_get(10008);
    }
    
    /**
     * Set <relative_value__index> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setRelativeValue_Index(\dstore\engine\values\decimalValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <node_description> has a value
     *
     * @return boolean
     */
    public function hasNodeDescription(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <node_description> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearNodeDescription(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <node_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getNodeDescription(){
      return $this->_get(10009);
    }
    
    /**
     * Set <node_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setNodeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <active> has a value
     *
     * @return boolean
     */
    public function hasActive(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <active> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearActive(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <active> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getActive(){
      return $this->_get(10010);
    }
    
    /**
     * Set <active> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setActive(\dstore\engine\values\booleanValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <has_next_sibling> has a value
     *
     * @return boolean
     */
    public function hasHasNextSibling(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <has_next_sibling> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearHasNextSibling(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <has_next_sibling> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getHasNextSibling(){
      return $this->_get(10011);
    }
    
    /**
     * Set <has_next_sibling> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setHasNextSibling(\dstore\engine\values\booleanValue $value){
      return $this->_set(10011, $value);
    }
    
    /**
     * Check if <total_value__basic_charac_no1> has a value
     *
     * @return boolean
     */
    public function hasTotalValue_BasicCharacNo1(){
      return $this->_has(10012);
    }
    
    /**
     * Clear <total_value__basic_charac_no1> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearTotalValue_BasicCharacNo1(){
      return $this->_clear(10012);
    }
    
    /**
     * Get <total_value__basic_charac_no1> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getTotalValue_BasicCharacNo1(){
      return $this->_get(10012);
    }
    
    /**
     * Set <total_value__basic_charac_no1> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setTotalValue_BasicCharacNo1(\dstore\engine\values\decimalValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <h_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeId(){
      return $this->_has(10013);
    }
    
    /**
     * Clear <h_tree_node_id> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearHTreeNodeId(){
      return $this->_clear(10013);
    }
    
    /**
     * Get <h_tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getHTreeNodeId(){
      return $this->_get(10013);
    }
    
    /**
     * Set <h_tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setHTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10013, $value);
    }
    
    /**
     * Check if <total_value__basic_charac_no2> has a value
     *
     * @return boolean
     */
    public function hasTotalValue_BasicCharacNo2(){
      return $this->_has(10014);
    }
    
    /**
     * Clear <total_value__basic_charac_no2> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearTotalValue_BasicCharacNo2(){
      return $this->_clear(10014);
    }
    
    /**
     * Get <total_value__basic_charac_no2> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getTotalValue_BasicCharacNo2(){
      return $this->_get(10014);
    }
    
    /**
     * Set <total_value__basic_charac_no2> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setTotalValue_BasicCharacNo2(\dstore\engine\values\decimalValue $value){
      return $this->_set(10014, $value);
    }
    
    /**
     * Check if <total_value__basic_charac_no3> has a value
     *
     * @return boolean
     */
    public function hasTotalValue_BasicCharacNo3(){
      return $this->_has(10015);
    }
    
    /**
     * Clear <total_value__basic_charac_no3> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearTotalValue_BasicCharacNo3(){
      return $this->_clear(10015);
    }
    
    /**
     * Get <total_value__basic_charac_no3> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getTotalValue_BasicCharacNo3(){
      return $this->_get(10015);
    }
    
    /**
     * Set <total_value__basic_charac_no3> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setTotalValue_BasicCharacNo3(\dstore\engine\values\decimalValue $value){
      return $this->_set(10015, $value);
    }
    
    /**
     * Check if <max_relative_value_per_predecessor> has a value
     *
     * @return boolean
     */
    public function hasMaxRelativeValuePerPredecessor(){
      return $this->_has(10016);
    }
    
    /**
     * Clear <max_relative_value_per_predecessor> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearMaxRelativeValuePerPredecessor(){
      return $this->_clear(10016);
    }
    
    /**
     * Get <max_relative_value_per_predecessor> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getMaxRelativeValuePerPredecessor(){
      return $this->_get(10016);
    }
    
    /**
     * Set <max_relative_value_per_predecessor> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setMaxRelativeValuePerPredecessor(\dstore\engine\values\decimalValue $value){
      return $this->_set(10016, $value);
    }
    
    /**
     * Check if <tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeId(){
      return $this->_has(10017);
    }
    
    /**
     * Clear <tree_node_id> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearTreeNodeId(){
      return $this->_clear(10017);
    }
    
    /**
     * Get <tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTreeNodeId(){
      return $this->_get(10017);
    }
    
    /**
     * Set <tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10017, $value);
    }
    
    /**
     * Check if <node_id> has a value
     *
     * @return boolean
     */
    public function hasNodeId(){
      return $this->_has(10018);
    }
    
    /**
     * Clear <node_id> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearNodeId(){
      return $this->_clear(10018);
    }
    
    /**
     * Get <node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeId(){
      return $this->_get(10018);
    }
    
    /**
     * Set <node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10018, $value);
    }
    
    /**
     * Check if <max_relative_value__index_per_pred> has a value
     *
     * @return boolean
     */
    public function hasMaxRelativeValue_IndexPerPred(){
      return $this->_has(10019);
    }
    
    /**
     * Clear <max_relative_value__index_per_pred> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearMaxRelativeValue_IndexPerPred(){
      return $this->_clear(10019);
    }
    
    /**
     * Get <max_relative_value__index_per_pred> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getMaxRelativeValue_IndexPerPred(){
      return $this->_get(10019);
    }
    
    /**
     * Set <max_relative_value__index_per_pred> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setMaxRelativeValue_IndexPerPred(\dstore\engine\values\decimalValue $value){
      return $this->_set(10019, $value);
    }
    
    /**
     * Check if <from_date> has a value
     *
     * @return boolean
     */
    public function hasFromDate(){
      return $this->_has(10020);
    }
    
    /**
     * Clear <from_date> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearFromDate(){
      return $this->_clear(10020);
    }
    
    /**
     * Get <from_date> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFromDate(){
      return $this->_get(10020);
    }
    
    /**
     * Set <from_date> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setFromDate(\dstore\engine\values\stringValue $value){
      return $this->_set(10020, $value);
    }
    
    /**
     * Check if <to_date> has a value
     *
     * @return boolean
     */
    public function hasToDate(){
      return $this->_has(10021);
    }
    
    /**
     * Clear <to_date> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearToDate(){
      return $this->_clear(10021);
    }
    
    /**
     * Get <to_date> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getToDate(){
      return $this->_get(10021);
    }
    
    /**
     * Set <to_date> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setToDate(\dstore\engine\values\stringValue $value){
      return $this->_set(10021, $value);
    }
    
    /**
     * Check if <has_successors> has a value
     *
     * @return boolean
     */
    public function hasHasSuccessors(){
      return $this->_has(10022);
    }
    
    /**
     * Clear <has_successors> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearHasSuccessors(){
      return $this->_clear(10022);
    }
    
    /**
     * Get <has_successors> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getHasSuccessors(){
      return $this->_get(10022);
    }
    
    /**
     * Set <has_successors> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setHasSuccessors(\dstore\engine\values\booleanValue $value){
      return $this->_set(10022, $value);
    }
    
    /**
     * Check if <deleted> has a value
     *
     * @return boolean
     */
    public function hasDeleted(){
      return $this->_has(10023);
    }
    
    /**
     * Clear <deleted> value
     *
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function clearDeleted(){
      return $this->_clear(10023);
    }
    
    /**
     * Get <deleted> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleted(){
      return $this->_get(10023);
    }
    
    /**
     * Set <deleted> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\st_GetDirectSuccessors_Tree_Ad\Response\Row
     */
    public function setDeleted(\dstore\engine\values\booleanValue $value){
      return $this->_set(10023, $value);
    }
  }
}

