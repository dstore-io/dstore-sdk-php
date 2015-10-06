<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetValuesInCategories_Ad.proto
//   Date: 2015-10-06 11:19:48

namespace dstore\engine\im_GetValuesInCategories_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $value_category_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $value_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value_category_description = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetValuesInCategories_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_category_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "value_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_description = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "characteristic_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_characteristic_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_category_description = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "value_category_description";
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
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
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
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <value_category_id> has a value
     *
     * @return boolean
     */
    public function hasValueCategoryId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <value_category_id> value
     *
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function clearValueCategoryId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <value_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getValueCategoryId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <value_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function setValueCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <characteristic_description> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicDescription(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <characteristic_description> value
     *
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function clearCharacteristicDescription(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <characteristic_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicDescription(){
      return $this->_get(10002);
    }
    
    /**
     * Set <characteristic_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function setCharacteristicDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function setNodeCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(10004);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <value_id> has a value
     *
     * @return boolean
     */
    public function hasValueId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <value_id> value
     *
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function clearValueId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <value_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getValueId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <value_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function setValueId(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <value_category_description> has a value
     *
     * @return boolean
     */
    public function hasValueCategoryDescription(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <value_category_description> value
     *
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function clearValueCategoryDescription(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <value_category_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValueCategoryDescription(){
      return $this->_get(10006);
    }
    
    /**
     * Set <value_category_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetValuesInCategories_Ad\Response\Row
     */
    public function setValueCategoryDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10006, $value);
    }
  }
}

