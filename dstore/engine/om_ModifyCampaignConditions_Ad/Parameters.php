<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyCampaignConditions_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\om_ModifyCampaignConditions_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $campaign_id = null;
    
    /**  @var boolean */
    public $campaign_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $condition_id = null;
    
    /**  @var boolean */
    public $condition_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $criteria_type_id = null;
    
    /**  @var boolean */
    public $criteria_type_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete = null;
    
    /**  @var boolean */
    public $delete_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyCampaignConditions_Ad.Parameters');

      // OPTIONAL MESSAGE campaign_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "campaign_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL campaign_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "campaign_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "condition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "condition_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE criteria_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "criteria_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL criteria_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "criteria_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <campaign_id> has a value
     *
     * @return boolean
     */
    public function hasCampaignId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <campaign_id> value
     *
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function clearCampaignId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <campaign_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCampaignId(){
      return $this->_get(1);
    }
    
    /**
     * Set <campaign_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function setCampaignId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <campaign_id_null> has a value
     *
     * @return boolean
     */
    public function hasCampaignIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <campaign_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function clearCampaignIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <campaign_id_null> value
     *
     * @return boolean
     */
    public function getCampaignIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <campaign_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function setCampaignIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <condition_id> has a value
     *
     * @return boolean
     */
    public function hasConditionId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <condition_id> value
     *
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function clearConditionId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <condition_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getConditionId(){
      return $this->_get(2);
    }
    
    /**
     * Set <condition_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function setConditionId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <condition_id_null> has a value
     *
     * @return boolean
     */
    public function hasConditionIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <condition_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function clearConditionIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <condition_id_null> value
     *
     * @return boolean
     */
    public function getConditionIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <condition_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function setConditionIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <criteria_type_id> has a value
     *
     * @return boolean
     */
    public function hasCriteriaTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <criteria_type_id> value
     *
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function clearCriteriaTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <criteria_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCriteriaTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <criteria_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function setCriteriaTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <criteria_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasCriteriaTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <criteria_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function clearCriteriaTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <criteria_type_id_null> value
     *
     * @return boolean
     */
    public function getCriteriaTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <criteria_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function setCriteriaTypeIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete> has a value
     *
     * @return boolean
     */
    public function hasDelete(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete> value
     *
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function clearDelete(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDelete(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function setDelete(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function clearDeleteNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_null> value
     *
     * @return boolean
     */
    public function getDeleteNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignConditions_Ad\Parameters
     */
    public function setDeleteNull( $value){
      return $this->_set(1004, $value);
    }
  }
}
