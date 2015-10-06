<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_ModifyGroups_Ad.proto
//   Date: 2015-10-06 11:20:07

namespace dstore\engine\pm_ModifyGroups_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $group_id = null;
    
    /**  @var boolean */
    public $group_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $group_description = null;
    
    /**  @var boolean */
    public $group_description_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $sort_no = null;
    
    /**  @var boolean */
    public $sort_no_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $condition_id = null;
    
    /**  @var boolean */
    public $condition_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_group = null;
    
    /**  @var boolean */
    public $delete_group_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_ModifyGroups_Ad.Parameters');

      // OPTIONAL MESSAGE group_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "group_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL group_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "group_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE group_description = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "group_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL group_description_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "group_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sort_no_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "sort_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "condition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "condition_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_group = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "delete_group";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_group_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "delete_group_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <group_id> has a value
     *
     * @return boolean
     */
    public function hasGroupId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <group_id> value
     *
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function clearGroupId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <group_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getGroupId(){
      return $this->_get(1);
    }
    
    /**
     * Set <group_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function setGroupId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <group_id_null> has a value
     *
     * @return boolean
     */
    public function hasGroupIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <group_id_null> value
     *
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function clearGroupIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <group_id_null> value
     *
     * @return boolean
     */
    public function getGroupIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <group_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function setGroupIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <group_description> has a value
     *
     * @return boolean
     */
    public function hasGroupDescription(){
      return $this->_has(2);
    }
    
    /**
     * Clear <group_description> value
     *
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function clearGroupDescription(){
      return $this->_clear(2);
    }
    
    /**
     * Get <group_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getGroupDescription(){
      return $this->_get(2);
    }
    
    /**
     * Set <group_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function setGroupDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <group_description_null> has a value
     *
     * @return boolean
     */
    public function hasGroupDescriptionNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <group_description_null> value
     *
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function clearGroupDescriptionNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <group_description_null> value
     *
     * @return boolean
     */
    public function getGroupDescriptionNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <group_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function setGroupDescriptionNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(3);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function clearSortNo(){
      return $this->_clear(3);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(3);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function setSortNo(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sort_no_null> has a value
     *
     * @return boolean
     */
    public function hasSortNoNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <sort_no_null> value
     *
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function clearSortNoNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <sort_no_null> value
     *
     * @return boolean
     */
    public function getSortNoNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <sort_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function setSortNoNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(4);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <condition_id> has a value
     *
     * @return boolean
     */
    public function hasConditionId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <condition_id> value
     *
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function clearConditionId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <condition_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getConditionId(){
      return $this->_get(5);
    }
    
    /**
     * Set <condition_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function setConditionId(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <condition_id_null> has a value
     *
     * @return boolean
     */
    public function hasConditionIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <condition_id_null> value
     *
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function clearConditionIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <condition_id_null> value
     *
     * @return boolean
     */
    public function getConditionIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <condition_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function setConditionIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <delete_group> has a value
     *
     * @return boolean
     */
    public function hasDeleteGroup(){
      return $this->_has(6);
    }
    
    /**
     * Clear <delete_group> value
     *
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function clearDeleteGroup(){
      return $this->_clear(6);
    }
    
    /**
     * Get <delete_group> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteGroup(){
      return $this->_get(6);
    }
    
    /**
     * Set <delete_group> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function setDeleteGroup(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <delete_group_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteGroupNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <delete_group_null> value
     *
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function clearDeleteGroupNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <delete_group_null> value
     *
     * @return boolean
     */
    public function getDeleteGroupNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <delete_group_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyGroups_Ad\Parameters
     */
    public function setDeleteGroupNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

