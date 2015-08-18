<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyTrolleySurInfTypes_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\om_ModifyTrolleySurInfTypes_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $information_type_id = null;
    
    /**  @var boolean */
    public $information_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $information_type = null;
    
    /**  @var boolean */
    public $information_type_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $field_type_id = null;
    
    /**  @var boolean */
    public $field_type_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_info_type = null;
    
    /**  @var boolean */
    public $delete_info_type_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyTrolleySurInfTypes_Ad.Parameters');

      // OPTIONAL MESSAGE information_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "information_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "information_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_type_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "information_type_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE field_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL field_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "field_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_info_type = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete_info_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_info_type_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_info_type_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <information_type_id> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <information_type_id> value
     *
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function clearInformationTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function setInformationTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <information_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <information_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function clearInformationTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <information_type_id_null> value
     *
     * @return boolean
     */
    public function getInformationTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <information_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function setInformationTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <information_type> has a value
     *
     * @return boolean
     */
    public function hasInformationType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <information_type> value
     *
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function clearInformationType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <information_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getInformationType(){
      return $this->_get(2);
    }
    
    /**
     * Set <information_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function setInformationType(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <information_type_null> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <information_type_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function clearInformationTypeNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <information_type_null> value
     *
     * @return boolean
     */
    public function getInformationTypeNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <information_type_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function setInformationTypeNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <field_type_id> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <field_type_id> value
     *
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function clearFieldTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <field_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getFieldTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <field_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function setFieldTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <field_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <field_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function clearFieldTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <field_type_id_null> value
     *
     * @return boolean
     */
    public function getFieldTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <field_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function setFieldTypeIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete_info_type> has a value
     *
     * @return boolean
     */
    public function hasDeleteInfoType(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete_info_type> value
     *
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function clearDeleteInfoType(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete_info_type> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteInfoType(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete_info_type> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function setDeleteInfoType(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_info_type_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteInfoTypeNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_info_type_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function clearDeleteInfoTypeNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_info_type_null> value
     *
     * @return boolean
     */
    public function getDeleteInfoTypeNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_info_type_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleySurInfTypes_Ad\Parameters
     */
    public function setDeleteInfoTypeNull( $value){
      return $this->_set(1004, $value);
    }
  }
}
