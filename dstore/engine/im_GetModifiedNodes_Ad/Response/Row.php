<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetModifiedNodes_Ad.proto
//   Date: 2015-10-06 11:19:47

namespace dstore\engine\im_GetModifiedNodes_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $node_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $node_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $matched_info_type_ids__t_node = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $matched_info_type_ids__node = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $level_id = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $active = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $tree_node_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $pre_predecessors_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $pre_predecessors_tree_node_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $predecessors_tree_node_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $predecessors_description = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetModifiedNodes_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_description = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "node_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE matched_info_type_ids__t_node = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "matched_info_type_ids__t_node";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE matched_info_type_ids__node = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "matched_info_type_ids__node";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "level_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE active = 20001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20001;
      $f->name      = "active";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE tree_node_id = 20003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20003;
      $f->name      = "tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE pre_predecessors_description = 20005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20005;
      $f->name      = "pre_predecessors_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE pre_predecessors_tree_node_id = 20007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20007;
      $f->name      = "pre_predecessors_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predecessors_tree_node_id = 20009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20009;
      $f->name      = "predecessors_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predecessors_description = 20010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20010;
      $f->name      = "predecessors_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
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
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
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
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <node_description> has a value
     *
     * @return boolean
     */
    public function hasNodeDescription(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <node_description> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function clearNodeDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <node_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getNodeDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <node_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function setNodeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <node_id> has a value
     *
     * @return boolean
     */
    public function hasNodeId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <node_id> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function clearNodeId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function setNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <matched_info_type_ids__t_node> has a value
     *
     * @return boolean
     */
    public function hasMatchedInfoTypeIds_TNode(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <matched_info_type_ids__t_node> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function clearMatchedInfoTypeIds_TNode(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <matched_info_type_ids__t_node> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getMatchedInfoTypeIds_TNode(){
      return $this->_get(10003);
    }
    
    /**
     * Set <matched_info_type_ids__t_node> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function setMatchedInfoTypeIds_TNode(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <matched_info_type_ids__node> has a value
     *
     * @return boolean
     */
    public function hasMatchedInfoTypeIds_Node(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <matched_info_type_ids__node> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function clearMatchedInfoTypeIds_Node(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <matched_info_type_ids__node> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getMatchedInfoTypeIds_Node(){
      return $this->_get(10004);
    }
    
    /**
     * Set <matched_info_type_ids__node> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function setMatchedInfoTypeIds_Node(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <level_id> has a value
     *
     * @return boolean
     */
    public function hasLevelId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <level_id> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function clearLevelId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <level_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLevelId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <level_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function setLevelId(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <active> has a value
     *
     * @return boolean
     */
    public function hasActive(){
      return $this->_has(20001);
    }
    
    /**
     * Clear <active> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function clearActive(){
      return $this->_clear(20001);
    }
    
    /**
     * Get <active> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getActive(){
      return $this->_get(20001);
    }
    
    /**
     * Set <active> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function setActive(\dstore\engine\values\booleanValue $value){
      return $this->_set(20001, $value);
    }
    
    /**
     * Check if <tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeId(){
      return $this->_has(20003);
    }
    
    /**
     * Clear <tree_node_id> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function clearTreeNodeId(){
      return $this->_clear(20003);
    }
    
    /**
     * Get <tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTreeNodeId(){
      return $this->_get(20003);
    }
    
    /**
     * Set <tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function setTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(20003, $value);
    }
    
    /**
     * Check if <pre_predecessors_description> has a value
     *
     * @return boolean
     */
    public function hasPrePredecessorsDescription(){
      return $this->_has(20005);
    }
    
    /**
     * Clear <pre_predecessors_description> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function clearPrePredecessorsDescription(){
      return $this->_clear(20005);
    }
    
    /**
     * Get <pre_predecessors_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPrePredecessorsDescription(){
      return $this->_get(20005);
    }
    
    /**
     * Set <pre_predecessors_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function setPrePredecessorsDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(20005, $value);
    }
    
    /**
     * Check if <pre_predecessors_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasPrePredecessorsTreeNodeId(){
      return $this->_has(20007);
    }
    
    /**
     * Clear <pre_predecessors_tree_node_id> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function clearPrePredecessorsTreeNodeId(){
      return $this->_clear(20007);
    }
    
    /**
     * Get <pre_predecessors_tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPrePredecessorsTreeNodeId(){
      return $this->_get(20007);
    }
    
    /**
     * Set <pre_predecessors_tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function setPrePredecessorsTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(20007, $value);
    }
    
    /**
     * Check if <predecessors_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasPredecessorsTreeNodeId(){
      return $this->_has(20009);
    }
    
    /**
     * Clear <predecessors_tree_node_id> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function clearPredecessorsTreeNodeId(){
      return $this->_clear(20009);
    }
    
    /**
     * Get <predecessors_tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPredecessorsTreeNodeId(){
      return $this->_get(20009);
    }
    
    /**
     * Set <predecessors_tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function setPredecessorsTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(20009, $value);
    }
    
    /**
     * Check if <predecessors_description> has a value
     *
     * @return boolean
     */
    public function hasPredecessorsDescription(){
      return $this->_has(20010);
    }
    
    /**
     * Clear <predecessors_description> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function clearPredecessorsDescription(){
      return $this->_clear(20010);
    }
    
    /**
     * Get <predecessors_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPredecessorsDescription(){
      return $this->_get(20010);
    }
    
    /**
     * Set <predecessors_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Response\Row
     */
    public function setPredecessorsDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(20010, $value);
    }
  }
}

