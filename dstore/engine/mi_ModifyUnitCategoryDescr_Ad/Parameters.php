<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_ModifyUnitCategoryDescr_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_ModifyUnitCategoryDescr_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $unit_category_id = null;
    
    /**  @var boolean */
    public $unit_category_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $unit_category_description = null;
    
    /**  @var boolean */
    public $unit_category_description_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_unit_category_description = null;
    
    /**  @var boolean */
    public $delete_unit_category_description_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_ModifyUnitCategoryDescr_Ad.Parameters');

      // OPTIONAL MESSAGE unit_category_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "unit_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unit_category_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "unit_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_category_description = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "unit_category_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unit_category_description_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "unit_category_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_unit_category_description = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete_unit_category_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_unit_category_description_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_unit_category_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <unit_category_id> has a value
     *
     * @return boolean
     */
    public function hasUnitCategoryId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <unit_category_id> value
     *
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function clearUnitCategoryId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <unit_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUnitCategoryId(){
      return $this->_get(1);
    }
    
    /**
     * Set <unit_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function setUnitCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <unit_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasUnitCategoryIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <unit_category_id_null> value
     *
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function clearUnitCategoryIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <unit_category_id_null> value
     *
     * @return boolean
     */
    public function getUnitCategoryIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <unit_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function setUnitCategoryIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(2);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function setLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <language_id_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <language_id_null> value
     *
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function clearLanguageIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <language_id_null> value
     *
     * @return boolean
     */
    public function getLanguageIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <language_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <unit_category_description> has a value
     *
     * @return boolean
     */
    public function hasUnitCategoryDescription(){
      return $this->_has(3);
    }
    
    /**
     * Clear <unit_category_description> value
     *
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function clearUnitCategoryDescription(){
      return $this->_clear(3);
    }
    
    /**
     * Get <unit_category_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUnitCategoryDescription(){
      return $this->_get(3);
    }
    
    /**
     * Set <unit_category_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function setUnitCategoryDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <unit_category_description_null> has a value
     *
     * @return boolean
     */
    public function hasUnitCategoryDescriptionNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <unit_category_description_null> value
     *
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function clearUnitCategoryDescriptionNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <unit_category_description_null> value
     *
     * @return boolean
     */
    public function getUnitCategoryDescriptionNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <unit_category_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function setUnitCategoryDescriptionNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete_unit_category_description> has a value
     *
     * @return boolean
     */
    public function hasDeleteUnitCategoryDescription(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete_unit_category_description> value
     *
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function clearDeleteUnitCategoryDescription(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete_unit_category_description> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteUnitCategoryDescription(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete_unit_category_description> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function setDeleteUnitCategoryDescription(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_unit_category_description_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteUnitCategoryDescriptionNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_unit_category_description_null> value
     *
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function clearDeleteUnitCategoryDescriptionNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_unit_category_description_null> value
     *
     * @return boolean
     */
    public function getDeleteUnitCategoryDescriptionNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_unit_category_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyUnitCategoryDescr_Ad\Parameters
     */
    public function setDeleteUnitCategoryDescriptionNull( $value){
      return $this->_set(1004, $value);
    }
  }
}
