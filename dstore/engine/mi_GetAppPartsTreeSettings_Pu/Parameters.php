<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetAppPartsTreeSettings_Pu.proto
//   Date: 2015-10-06 11:19:50

namespace dstore\engine\mi_GetAppPartsTreeSettings_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $application_part_tree_id = null;
    
    /**  @var boolean */
    public $application_part_tree_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $key_variable = null;
    
    /**  @var boolean */
    public $key_variable_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $search_for_key_variable_with_like = null;
    
    /**  @var boolean */
    public $search_for_key_variable_with_like_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $get_values_for_global_user = null;
    
    /**  @var boolean */
    public $get_values_for_global_user_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_values_for_corresponding_part = null;
    
    /**  @var boolean */
    public $get_values_for_corresponding_part_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $ids_in_two_ids = null;
    
    /**  @var boolean */
    public $ids_in_two_ids_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetAppPartsTreeSettings_Pu.Parameters');

      // OPTIONAL MESSAGE application_part_tree_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "application_part_tree_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL application_part_tree_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "application_part_tree_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE key_variable = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "key_variable";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL key_variable_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "key_variable_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE search_for_key_variable_with_like = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "search_for_key_variable_with_like";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL search_for_key_variable_with_like_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "search_for_key_variable_with_like_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_values_for_global_user = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "get_values_for_global_user";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_values_for_global_user_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "get_values_for_global_user_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_values_for_corresponding_part = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "get_values_for_corresponding_part";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_values_for_corresponding_part_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "get_values_for_corresponding_part_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE ids_in_two_ids = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "ids_in_two_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL ids_in_two_ids_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "ids_in_two_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <application_part_tree_id> has a value
     *
     * @return boolean
     */
    public function hasApplicationPartTreeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <application_part_tree_id> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function clearApplicationPartTreeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <application_part_tree_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getApplicationPartTreeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <application_part_tree_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function setApplicationPartTreeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <application_part_tree_id_null> has a value
     *
     * @return boolean
     */
    public function hasApplicationPartTreeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <application_part_tree_id_null> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function clearApplicationPartTreeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <application_part_tree_id_null> value
     *
     * @return boolean
     */
    public function getApplicationPartTreeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <application_part_tree_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function setApplicationPartTreeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <key_variable> has a value
     *
     * @return boolean
     */
    public function hasKeyVariable(){
      return $this->_has(2);
    }
    
    /**
     * Clear <key_variable> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function clearKeyVariable(){
      return $this->_clear(2);
    }
    
    /**
     * Get <key_variable> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getKeyVariable(){
      return $this->_get(2);
    }
    
    /**
     * Set <key_variable> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function setKeyVariable(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <key_variable_null> has a value
     *
     * @return boolean
     */
    public function hasKeyVariableNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <key_variable_null> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function clearKeyVariableNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <key_variable_null> value
     *
     * @return boolean
     */
    public function getKeyVariableNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <key_variable_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function setKeyVariableNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <search_for_key_variable_with_like> has a value
     *
     * @return boolean
     */
    public function hasSearchForKeyVariableWithLike(){
      return $this->_has(3);
    }
    
    /**
     * Clear <search_for_key_variable_with_like> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function clearSearchForKeyVariableWithLike(){
      return $this->_clear(3);
    }
    
    /**
     * Get <search_for_key_variable_with_like> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getSearchForKeyVariableWithLike(){
      return $this->_get(3);
    }
    
    /**
     * Set <search_for_key_variable_with_like> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function setSearchForKeyVariableWithLike(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <search_for_key_variable_with_like_null> has a value
     *
     * @return boolean
     */
    public function hasSearchForKeyVariableWithLikeNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <search_for_key_variable_with_like_null> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function clearSearchForKeyVariableWithLikeNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <search_for_key_variable_with_like_null> value
     *
     * @return boolean
     */
    public function getSearchForKeyVariableWithLikeNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <search_for_key_variable_with_like_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function setSearchForKeyVariableWithLikeNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <get_values_for_global_user> has a value
     *
     * @return boolean
     */
    public function hasGetValuesForGlobalUser(){
      return $this->_has(4);
    }
    
    /**
     * Clear <get_values_for_global_user> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function clearGetValuesForGlobalUser(){
      return $this->_clear(4);
    }
    
    /**
     * Get <get_values_for_global_user> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getGetValuesForGlobalUser(){
      return $this->_get(4);
    }
    
    /**
     * Set <get_values_for_global_user> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function setGetValuesForGlobalUser(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <get_values_for_global_user_null> has a value
     *
     * @return boolean
     */
    public function hasGetValuesForGlobalUserNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <get_values_for_global_user_null> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function clearGetValuesForGlobalUserNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <get_values_for_global_user_null> value
     *
     * @return boolean
     */
    public function getGetValuesForGlobalUserNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <get_values_for_global_user_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function setGetValuesForGlobalUserNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <get_values_for_corresponding_part> has a value
     *
     * @return boolean
     */
    public function hasGetValuesForCorrespondingPart(){
      return $this->_has(5);
    }
    
    /**
     * Clear <get_values_for_corresponding_part> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function clearGetValuesForCorrespondingPart(){
      return $this->_clear(5);
    }
    
    /**
     * Get <get_values_for_corresponding_part> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetValuesForCorrespondingPart(){
      return $this->_get(5);
    }
    
    /**
     * Set <get_values_for_corresponding_part> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function setGetValuesForCorrespondingPart(\dstore\engine\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <get_values_for_corresponding_part_null> has a value
     *
     * @return boolean
     */
    public function hasGetValuesForCorrespondingPartNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <get_values_for_corresponding_part_null> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function clearGetValuesForCorrespondingPartNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <get_values_for_corresponding_part_null> value
     *
     * @return boolean
     */
    public function getGetValuesForCorrespondingPartNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <get_values_for_corresponding_part_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function setGetValuesForCorrespondingPartNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <ids_in_two_ids> has a value
     *
     * @return boolean
     */
    public function hasIdsInTwoIds(){
      return $this->_has(6);
    }
    
    /**
     * Clear <ids_in_two_ids> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function clearIdsInTwoIds(){
      return $this->_clear(6);
    }
    
    /**
     * Get <ids_in_two_ids> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIdsInTwoIds(){
      return $this->_get(6);
    }
    
    /**
     * Set <ids_in_two_ids> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function setIdsInTwoIds(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <ids_in_two_ids_null> has a value
     *
     * @return boolean
     */
    public function hasIdsInTwoIdsNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <ids_in_two_ids_null> value
     *
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function clearIdsInTwoIdsNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <ids_in_two_ids_null> value
     *
     * @return boolean
     */
    public function getIdsInTwoIdsNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <ids_in_two_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetAppPartsTreeSettings_Pu\Parameters
     */
    public function setIdsInTwoIdsNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

