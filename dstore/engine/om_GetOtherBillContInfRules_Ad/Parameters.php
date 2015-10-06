<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetOtherBillContInfRules_Ad.proto
//   Date: 2015-10-06 11:19:58

namespace dstore\engine\om_GetOtherBillContInfRules_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $user_id = null;
    
    /**  @var boolean */
    public $user_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $bill_state_id = null;
    
    /**  @var boolean */
    public $bill_state_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $information_type_id = null;
    
    /**  @var boolean */
    public $information_type_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $get_my_rules_for_other_bill_cont_id = null;
    
    /**  @var boolean */
    public $get_my_rules_for_other_bill_cont_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetOtherBillContInfRules_Ad.Parameters');

      // OPTIONAL MESSAGE user_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "user_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL user_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "user_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE bill_state_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "bill_state_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL bill_state_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "bill_state_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "information_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_my_rules_for_other_bill_cont_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "get_my_rules_for_other_bill_cont_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_my_rules_for_other_bill_cont_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "get_my_rules_for_other_bill_cont_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <user_id> has a value
     *
     * @return boolean
     */
    public function hasUserId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <user_id> value
     *
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function clearUserId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <user_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUserId(){
      return $this->_get(1);
    }
    
    /**
     * Set <user_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function setUserId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <user_id_null> has a value
     *
     * @return boolean
     */
    public function hasUserIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <user_id_null> value
     *
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function clearUserIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <user_id_null> value
     *
     * @return boolean
     */
    public function getUserIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <user_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function setUserIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <bill_state_id> has a value
     *
     * @return boolean
     */
    public function hasBillStateId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <bill_state_id> value
     *
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function clearBillStateId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <bill_state_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBillStateId(){
      return $this->_get(2);
    }
    
    /**
     * Set <bill_state_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function setBillStateId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <bill_state_id_null> has a value
     *
     * @return boolean
     */
    public function hasBillStateIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <bill_state_id_null> value
     *
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function clearBillStateIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <bill_state_id_null> value
     *
     * @return boolean
     */
    public function getBillStateIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <bill_state_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function setBillStateIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <information_type_id> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <information_type_id> value
     *
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function clearInformationTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function setInformationTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <information_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <information_type_id_null> value
     *
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function clearInformationTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <information_type_id_null> value
     *
     * @return boolean
     */
    public function getInformationTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <information_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function setInformationTypeIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <get_my_rules_for_other_bill_cont_id> has a value
     *
     * @return boolean
     */
    public function hasGetMyRulesForOtherBillContId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <get_my_rules_for_other_bill_cont_id> value
     *
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function clearGetMyRulesForOtherBillContId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <get_my_rules_for_other_bill_cont_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getGetMyRulesForOtherBillContId(){
      return $this->_get(4);
    }
    
    /**
     * Set <get_my_rules_for_other_bill_cont_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function setGetMyRulesForOtherBillContId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <get_my_rules_for_other_bill_cont_id_null> has a value
     *
     * @return boolean
     */
    public function hasGetMyRulesForOtherBillContIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <get_my_rules_for_other_bill_cont_id_null> value
     *
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function clearGetMyRulesForOtherBillContIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <get_my_rules_for_other_bill_cont_id_null> value
     *
     * @return boolean
     */
    public function getGetMyRulesForOtherBillContIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <get_my_rules_for_other_bill_cont_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetOtherBillContInfRules_Ad\Parameters
     */
    public function setGetMyRulesForOtherBillContIdNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

