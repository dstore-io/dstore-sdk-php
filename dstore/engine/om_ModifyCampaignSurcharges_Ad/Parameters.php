<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyCampaignSurcharges_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\om_ModifyCampaignSurcharges_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $surcharge_type_id = null;
    
    /**  @var boolean */
    public $surcharge_type_id_null = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $surcharge_value = null;
    
    /**  @var boolean */
    public $surcharge_value_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $item_condition_id = null;
    
    /**  @var boolean */
    public $item_condition_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $apply_to_option = null;
    
    /**  @var boolean */
    public $apply_to_option_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $delete_benefit = null;
    
    /**  @var boolean */
    public $delete_benefit_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyCampaignSurcharges_Ad.Parameters');

      // OPTIONAL MESSAGE surcharge_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "surcharge_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL surcharge_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "surcharge_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_value = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "surcharge_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL surcharge_value_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "surcharge_value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "item_condition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL item_condition_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "item_condition_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE apply_to_option = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "apply_to_option";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL apply_to_option_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "apply_to_option_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_benefit = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "delete_benefit";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_benefit_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "delete_benefit_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <surcharge_type_id> value
     *
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function clearSurchargeTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <surcharge_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSurchargeTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <surcharge_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function setSurchargeTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <surcharge_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <surcharge_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function clearSurchargeTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <surcharge_type_id_null> value
     *
     * @return boolean
     */
    public function getSurchargeTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <surcharge_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function setSurchargeTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <surcharge_value> has a value
     *
     * @return boolean
     */
    public function hasSurchargeValue(){
      return $this->_has(2);
    }
    
    /**
     * Clear <surcharge_value> value
     *
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function clearSurchargeValue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <surcharge_value> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getSurchargeValue(){
      return $this->_get(2);
    }
    
    /**
     * Set <surcharge_value> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function setSurchargeValue(\dstore\engine\values\decimalValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <surcharge_value_null> has a value
     *
     * @return boolean
     */
    public function hasSurchargeValueNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <surcharge_value_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function clearSurchargeValueNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <surcharge_value_null> value
     *
     * @return boolean
     */
    public function getSurchargeValueNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <surcharge_value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function setSurchargeValueNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <item_condition_id> has a value
     *
     * @return boolean
     */
    public function hasItemConditionId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <item_condition_id> value
     *
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function clearItemConditionId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <item_condition_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getItemConditionId(){
      return $this->_get(3);
    }
    
    /**
     * Set <item_condition_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function setItemConditionId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <item_condition_id_null> has a value
     *
     * @return boolean
     */
    public function hasItemConditionIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <item_condition_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function clearItemConditionIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <item_condition_id_null> value
     *
     * @return boolean
     */
    public function getItemConditionIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <item_condition_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function setItemConditionIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <apply_to_option> has a value
     *
     * @return boolean
     */
    public function hasApplyToOption(){
      return $this->_has(4);
    }
    
    /**
     * Clear <apply_to_option> value
     *
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function clearApplyToOption(){
      return $this->_clear(4);
    }
    
    /**
     * Get <apply_to_option> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getApplyToOption(){
      return $this->_get(4);
    }
    
    /**
     * Set <apply_to_option> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function setApplyToOption(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <apply_to_option_null> has a value
     *
     * @return boolean
     */
    public function hasApplyToOptionNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <apply_to_option_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function clearApplyToOptionNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <apply_to_option_null> value
     *
     * @return boolean
     */
    public function getApplyToOptionNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <apply_to_option_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function setApplyToOptionNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <delete_benefit> has a value
     *
     * @return boolean
     */
    public function hasDeleteBenefit(){
      return $this->_has(5);
    }
    
    /**
     * Clear <delete_benefit> value
     *
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function clearDeleteBenefit(){
      return $this->_clear(5);
    }
    
    /**
     * Get <delete_benefit> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getDeleteBenefit(){
      return $this->_get(5);
    }
    
    /**
     * Set <delete_benefit> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function setDeleteBenefit(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <delete_benefit_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteBenefitNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <delete_benefit_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function clearDeleteBenefitNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <delete_benefit_null> value
     *
     * @return boolean
     */
    public function getDeleteBenefitNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <delete_benefit_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignSurcharges_Ad\Parameters
     */
    public function setDeleteBenefitNull( $value){
      return $this->_set(1005, $value);
    }
  }
}
