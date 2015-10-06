<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetCommonNodeProperties_Ad.proto
//   Date: 2015-10-06 11:19:46

namespace dstore\engine\im_GetCommonNodeProperties_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $is_inherited = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $unit_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_description = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $has_details = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $value_language_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $characteristic_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $unit_symbol = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $value_id = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $recursive = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $predefined_values = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetCommonNodeProperties_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE is_inherited = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "is_inherited";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "unit_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_description = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "characteristic_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE has_details = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "has_details";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_language_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "value_language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_id = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_symbol = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "unit_symbol";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_id = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE recursive = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "recursive";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predefined_values = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "predefined_values";
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
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
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
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <is_inherited> has a value
     *
     * @return boolean
     */
    public function hasIsInherited(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <is_inherited> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function clearIsInherited(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <is_inherited> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIsInherited(){
      return $this->_get(10001);
    }
    
    /**
     * Set <is_inherited> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function setIsInherited(\dstore\engine\values\booleanValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <unit_id> has a value
     *
     * @return boolean
     */
    public function hasUnitId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <unit_id> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function clearUnitId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <unit_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUnitId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <unit_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function setUnitId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <characteristic_description> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicDescription(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <characteristic_description> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function clearCharacteristicDescription(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <characteristic_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicDescription(){
      return $this->_get(10003);
    }
    
    /**
     * Set <characteristic_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function setCharacteristicDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <has_details> has a value
     *
     * @return boolean
     */
    public function hasHasDetails(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <has_details> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function clearHasDetails(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <has_details> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getHasDetails(){
      return $this->_get(10004);
    }
    
    /**
     * Set <has_details> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function setHasDetails(\dstore\engine\values\booleanValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(10005);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <value_language_id> has a value
     *
     * @return boolean
     */
    public function hasValueLanguageId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <value_language_id> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function clearValueLanguageId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <value_language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getValueLanguageId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <value_language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function setValueLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicId(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <characteristic_id> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function clearCharacteristicId(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCharacteristicId(){
      return $this->_get(10007);
    }
    
    /**
     * Set <characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function setCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <unit_symbol> has a value
     *
     * @return boolean
     */
    public function hasUnitSymbol(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <unit_symbol> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function clearUnitSymbol(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <unit_symbol> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUnitSymbol(){
      return $this->_get(10008);
    }
    
    /**
     * Set <unit_symbol> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function setUnitSymbol(\dstore\engine\values\stringValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <value_id> has a value
     *
     * @return boolean
     */
    public function hasValueId(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <value_id> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function clearValueId(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <value_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getValueId(){
      return $this->_get(10009);
    }
    
    /**
     * Set <value_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function setValueId(\dstore\engine\values\integerValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <recursive> has a value
     *
     * @return boolean
     */
    public function hasRecursive(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <recursive> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function clearRecursive(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <recursive> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getRecursive(){
      return $this->_get(10010);
    }
    
    /**
     * Set <recursive> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function setRecursive(\dstore\engine\values\booleanValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <predefined_values> has a value
     *
     * @return boolean
     */
    public function hasPredefinedValues(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <predefined_values> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function clearPredefinedValues(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <predefined_values> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getPredefinedValues(){
      return $this->_get(10011);
    }
    
    /**
     * Set <predefined_values> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Response\Row
     */
    public function setPredefinedValues(\dstore\engine\values\booleanValue $value){
      return $this->_set(10011, $value);
    }
  }
}

