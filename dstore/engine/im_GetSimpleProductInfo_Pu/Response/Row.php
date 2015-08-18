<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetSimpleProductInfo_Pu.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_GetSimpleProductInfo_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $tree_node_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $value_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $sort_no = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $details = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $binary_property_value_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $binary_code_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetSimpleProductInfo_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE tree_node_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_characteristic_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_id = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE details = 20001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20001;
      $f->name      = "details";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_property_value_id = 30001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 30001;
      $f->name      = "binary_property_value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_code_id = 30002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 30002;
      $f->name      = "binary_code_id";
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
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
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
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <tree_node_id> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function clearTreeNodeId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTreeNodeId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function setTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function setNodeCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(10003);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <value_id> has a value
     *
     * @return boolean
     */
    public function hasValueId(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <value_id> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function clearValueId(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <value_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getValueId(){
      return $this->_get(10004);
    }
    
    /**
     * Set <value_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function setValueId(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function clearSortNo(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(10005);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function setSortNo(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <details> has a value
     *
     * @return boolean
     */
    public function hasDetails(){
      return $this->_has(20001);
    }
    
    /**
     * Clear <details> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function clearDetails(){
      return $this->_clear(20001);
    }
    
    /**
     * Get <details> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDetails(){
      return $this->_get(20001);
    }
    
    /**
     * Set <details> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function setDetails(\dstore\engine\values\stringValue $value){
      return $this->_set(20001, $value);
    }
    
    /**
     * Check if <binary_property_value_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryPropertyValueId(){
      return $this->_has(30001);
    }
    
    /**
     * Clear <binary_property_value_id> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function clearBinaryPropertyValueId(){
      return $this->_clear(30001);
    }
    
    /**
     * Get <binary_property_value_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBinaryPropertyValueId(){
      return $this->_get(30001);
    }
    
    /**
     * Set <binary_property_value_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function setBinaryPropertyValueId(\dstore\engine\values\integerValue $value){
      return $this->_set(30001, $value);
    }
    
    /**
     * Check if <binary_code_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryCodeId(){
      return $this->_has(30002);
    }
    
    /**
     * Clear <binary_code_id> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function clearBinaryCodeId(){
      return $this->_clear(30002);
    }
    
    /**
     * Get <binary_code_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBinaryCodeId(){
      return $this->_get(30002);
    }
    
    /**
     * Set <binary_code_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Response\Row
     */
    public function setBinaryCodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(30002, $value);
    }
  }
}
