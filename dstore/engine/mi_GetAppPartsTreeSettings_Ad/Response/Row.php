<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetAppPartsTreeSettings_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $value_derived_from_app_part_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $key_variable = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $application_part_tree_id = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $value_derived_from_global_user = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetAppPartsTreeSettings_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_derived_from_app_part_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "value_derived_from_app_part_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE key_variable = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "key_variable";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE application_part_tree_id = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "application_part_tree_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_derived_from_global_user = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "value_derived_from_global_user";
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
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <value_derived_from_app_part_id> has a value
     *
     * @return boolean
     */
    public function hasValueDerivedFromAppPartId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <value_derived_from_app_part_id> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response\Row
     */
    public function clearValueDerivedFromAppPartId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <value_derived_from_app_part_id> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getValueDerivedFromAppPartId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <value_derived_from_app_part_id> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response\Row
     */
    public function setValueDerivedFromAppPartId(\dstore\engine\values\booleanValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(10002);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response\Row
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <key_variable> has a value
     *
     * @return boolean
     */
    public function hasKeyVariable(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <key_variable> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response\Row
     */
    public function clearKeyVariable(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <key_variable> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getKeyVariable(){
      return $this->_get(10003);
    }
    
    /**
     * Set <key_variable> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response\Row
     */
    public function setKeyVariable(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <application_part_tree_id> has a value
     *
     * @return boolean
     */
    public function hasApplicationPartTreeId(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <application_part_tree_id> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response\Row
     */
    public function clearApplicationPartTreeId(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <application_part_tree_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getApplicationPartTreeId(){
      return $this->_get(10004);
    }
    
    /**
     * Set <application_part_tree_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response\Row
     */
    public function setApplicationPartTreeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <value_derived_from_global_user> has a value
     *
     * @return boolean
     */
    public function hasValueDerivedFromGlobalUser(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <value_derived_from_global_user> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response\Row
     */
    public function clearValueDerivedFromGlobalUser(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <value_derived_from_global_user> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getValueDerivedFromGlobalUser(){
      return $this->_get(10005);
    }
    
    /**
     * Set <value_derived_from_global_user> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Ad\Response\Row
     */
    public function setValueDerivedFromGlobalUser(\dstore\engine\values\booleanValue $value){
      return $this->_set(10005, $value);
    }
  }
}
