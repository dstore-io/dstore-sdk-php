<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_CheckFieldTypeOfValues_Ad.proto
//   Date: 2015-10-06 11:19:50

namespace dstore\engine\mi_CheckFieldTypeOfValues_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var boolean */
    public $value_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $field_type_id = null;
    
    /**  @var boolean */
    public $field_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $country = null;
    
    /**  @var boolean */
    public $country_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $use_old_version = null;
    
    /**  @var boolean */
    public $use_old_version_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_CheckFieldTypeOfValues_Ad.Parameters');

      // OPTIONAL MESSAGE value = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE field_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL field_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "field_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE country = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "country";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL country_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "country_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE use_old_version = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "use_old_version";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL use_old_version_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "use_old_version_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function clearValue(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(1);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value_null> has a value
     *
     * @return boolean
     */
    public function hasValueNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <value_null> value
     *
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function clearValueNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <value_null> value
     *
     * @return boolean
     */
    public function getValueNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function setValueNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <field_type_id> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <field_type_id> value
     *
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function clearFieldTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <field_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getFieldTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <field_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function setFieldTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <field_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <field_type_id_null> value
     *
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function clearFieldTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <field_type_id_null> value
     *
     * @return boolean
     */
    public function getFieldTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <field_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function setFieldTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <country> has a value
     *
     * @return boolean
     */
    public function hasCountry(){
      return $this->_has(3);
    }
    
    /**
     * Clear <country> value
     *
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function clearCountry(){
      return $this->_clear(3);
    }
    
    /**
     * Get <country> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCountry(){
      return $this->_get(3);
    }
    
    /**
     * Set <country> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function setCountry(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <country_null> has a value
     *
     * @return boolean
     */
    public function hasCountryNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <country_null> value
     *
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function clearCountryNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <country_null> value
     *
     * @return boolean
     */
    public function getCountryNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <country_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function setCountryNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <use_old_version> has a value
     *
     * @return boolean
     */
    public function hasUseOldVersion(){
      return $this->_has(4);
    }
    
    /**
     * Clear <use_old_version> value
     *
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function clearUseOldVersion(){
      return $this->_clear(4);
    }
    
    /**
     * Get <use_old_version> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getUseOldVersion(){
      return $this->_get(4);
    }
    
    /**
     * Set <use_old_version> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function setUseOldVersion(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <use_old_version_null> has a value
     *
     * @return boolean
     */
    public function hasUseOldVersionNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <use_old_version_null> value
     *
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function clearUseOldVersionNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <use_old_version_null> value
     *
     * @return boolean
     */
    public function getUseOldVersionNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <use_old_version_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_CheckFieldTypeOfValues_Ad\Parameters
     */
    public function setUseOldVersionNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

