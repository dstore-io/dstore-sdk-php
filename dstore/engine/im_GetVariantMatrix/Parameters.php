<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetVariantMatrix.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_GetVariantMatrix {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $tree_node_id = null;
    
    /**  @var boolean */
    public $tree_node_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $y_axis_characteristic_id = null;
    
    /**  @var boolean */
    public $y_axis_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $x_axis_characteristic_id = null;
    
    /**  @var boolean */
    public $x_axis_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $value_characteristic_id = null;
    
    /**  @var boolean */
    public $value_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $direct_successors = null;
    
    /**  @var boolean */
    public $direct_successors_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $direct_properties = null;
    
    /**  @var boolean */
    public $direct_properties_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetVariantMatrix.Parameters');

      // OPTIONAL MESSAGE tree_node_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL tree_node_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "tree_node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE y_axis_characteristic_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "y_axis_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL y_axis_characteristic_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "y_axis_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE x_axis_characteristic_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "x_axis_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL x_axis_characteristic_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "x_axis_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_characteristic_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "value_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_characteristic_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "value_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE direct_successors = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "direct_successors";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL direct_successors_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "direct_successors_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE direct_properties = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "direct_properties";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL direct_properties_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "direct_properties_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <tree_node_id> value
     *
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function clearTreeNodeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTreeNodeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function setTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <tree_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <tree_node_id_null> value
     *
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function clearTreeNodeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <tree_node_id_null> value
     *
     * @return boolean
     */
    public function getTreeNodeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <tree_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function setTreeNodeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <y_axis_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasYAxisCharacteristicId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <y_axis_characteristic_id> value
     *
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function clearYAxisCharacteristicId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <y_axis_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getYAxisCharacteristicId(){
      return $this->_get(2);
    }
    
    /**
     * Set <y_axis_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function setYAxisCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <y_axis_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasYAxisCharacteristicIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <y_axis_characteristic_id_null> value
     *
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function clearYAxisCharacteristicIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <y_axis_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getYAxisCharacteristicIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <y_axis_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function setYAxisCharacteristicIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <x_axis_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasXAxisCharacteristicId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <x_axis_characteristic_id> value
     *
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function clearXAxisCharacteristicId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <x_axis_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getXAxisCharacteristicId(){
      return $this->_get(3);
    }
    
    /**
     * Set <x_axis_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function setXAxisCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <x_axis_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasXAxisCharacteristicIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <x_axis_characteristic_id_null> value
     *
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function clearXAxisCharacteristicIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <x_axis_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getXAxisCharacteristicIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <x_axis_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function setXAxisCharacteristicIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <value_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasValueCharacteristicId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <value_characteristic_id> value
     *
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function clearValueCharacteristicId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <value_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getValueCharacteristicId(){
      return $this->_get(4);
    }
    
    /**
     * Set <value_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function setValueCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <value_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasValueCharacteristicIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <value_characteristic_id_null> value
     *
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function clearValueCharacteristicIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <value_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getValueCharacteristicIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <value_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function setValueCharacteristicIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <direct_successors> has a value
     *
     * @return boolean
     */
    public function hasDirectSuccessors(){
      return $this->_has(5);
    }
    
    /**
     * Clear <direct_successors> value
     *
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function clearDirectSuccessors(){
      return $this->_clear(5);
    }
    
    /**
     * Get <direct_successors> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDirectSuccessors(){
      return $this->_get(5);
    }
    
    /**
     * Set <direct_successors> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function setDirectSuccessors(\dstore\engine\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <direct_successors_null> has a value
     *
     * @return boolean
     */
    public function hasDirectSuccessorsNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <direct_successors_null> value
     *
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function clearDirectSuccessorsNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <direct_successors_null> value
     *
     * @return boolean
     */
    public function getDirectSuccessorsNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <direct_successors_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function setDirectSuccessorsNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <direct_properties> has a value
     *
     * @return boolean
     */
    public function hasDirectProperties(){
      return $this->_has(6);
    }
    
    /**
     * Clear <direct_properties> value
     *
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function clearDirectProperties(){
      return $this->_clear(6);
    }
    
    /**
     * Get <direct_properties> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDirectProperties(){
      return $this->_get(6);
    }
    
    /**
     * Set <direct_properties> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function setDirectProperties(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <direct_properties_null> has a value
     *
     * @return boolean
     */
    public function hasDirectPropertiesNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <direct_properties_null> value
     *
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function clearDirectPropertiesNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <direct_properties_null> value
     *
     * @return boolean
     */
    public function getDirectPropertiesNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <direct_properties_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetVariantMatrix\Parameters
     */
    public function setDirectPropertiesNull( $value){
      return $this->_set(1006, $value);
    }
  }
}
