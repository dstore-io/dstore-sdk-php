<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyChangeOStatTrigger_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\om_ModifyChangeOStatTrigger_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $change_order_state_trigger_id = null;
    
    /**  @var boolean */
    public $change_order_state_trigger_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $ignore_pos_already_in_order_state = null;
    
    /**  @var boolean */
    public $ignore_pos_already_in_order_state_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $suitable_for_order_state_id_list = null;
    
    /**  @var boolean */
    public $suitable_for_order_state_id_list_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_trigger = null;
    
    /**  @var boolean */
    public $delete_trigger_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyChangeOStatTrigger_Ad.Parameters');

      // OPTIONAL MESSAGE change_order_state_trigger_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "change_order_state_trigger_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL change_order_state_trigger_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "change_order_state_trigger_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE ignore_pos_already_in_order_state = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "ignore_pos_already_in_order_state";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL ignore_pos_already_in_order_state_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "ignore_pos_already_in_order_state_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE suitable_for_order_state_id_list = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "suitable_for_order_state_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL suitable_for_order_state_id_list_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "suitable_for_order_state_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_trigger = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete_trigger";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_trigger_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_trigger_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <change_order_state_trigger_id> has a value
     *
     * @return boolean
     */
    public function hasChangeOrderStateTriggerId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <change_order_state_trigger_id> value
     *
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function clearChangeOrderStateTriggerId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <change_order_state_trigger_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getChangeOrderStateTriggerId(){
      return $this->_get(1);
    }
    
    /**
     * Set <change_order_state_trigger_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function setChangeOrderStateTriggerId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <change_order_state_trigger_id_null> has a value
     *
     * @return boolean
     */
    public function hasChangeOrderStateTriggerIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <change_order_state_trigger_id_null> value
     *
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function clearChangeOrderStateTriggerIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <change_order_state_trigger_id_null> value
     *
     * @return boolean
     */
    public function getChangeOrderStateTriggerIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <change_order_state_trigger_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function setChangeOrderStateTriggerIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <ignore_pos_already_in_order_state> has a value
     *
     * @return boolean
     */
    public function hasIgnorePosAlreadyInOrderState(){
      return $this->_has(2);
    }
    
    /**
     * Clear <ignore_pos_already_in_order_state> value
     *
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function clearIgnorePosAlreadyInOrderState(){
      return $this->_clear(2);
    }
    
    /**
     * Get <ignore_pos_already_in_order_state> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIgnorePosAlreadyInOrderState(){
      return $this->_get(2);
    }
    
    /**
     * Set <ignore_pos_already_in_order_state> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function setIgnorePosAlreadyInOrderState(\dstore\engine\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <ignore_pos_already_in_order_state_null> has a value
     *
     * @return boolean
     */
    public function hasIgnorePosAlreadyInOrderStateNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <ignore_pos_already_in_order_state_null> value
     *
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function clearIgnorePosAlreadyInOrderStateNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <ignore_pos_already_in_order_state_null> value
     *
     * @return boolean
     */
    public function getIgnorePosAlreadyInOrderStateNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <ignore_pos_already_in_order_state_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function setIgnorePosAlreadyInOrderStateNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <suitable_for_order_state_id_list> has a value
     *
     * @return boolean
     */
    public function hasSuitableForOrderStateIdList(){
      return $this->_has(3);
    }
    
    /**
     * Clear <suitable_for_order_state_id_list> value
     *
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function clearSuitableForOrderStateIdList(){
      return $this->_clear(3);
    }
    
    /**
     * Get <suitable_for_order_state_id_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSuitableForOrderStateIdList(){
      return $this->_get(3);
    }
    
    /**
     * Set <suitable_for_order_state_id_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function setSuitableForOrderStateIdList(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <suitable_for_order_state_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasSuitableForOrderStateIdListNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <suitable_for_order_state_id_list_null> value
     *
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function clearSuitableForOrderStateIdListNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <suitable_for_order_state_id_list_null> value
     *
     * @return boolean
     */
    public function getSuitableForOrderStateIdListNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <suitable_for_order_state_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function setSuitableForOrderStateIdListNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete_trigger> has a value
     *
     * @return boolean
     */
    public function hasDeleteTrigger(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete_trigger> value
     *
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function clearDeleteTrigger(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete_trigger> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteTrigger(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete_trigger> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function setDeleteTrigger(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_trigger_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteTriggerNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_trigger_null> value
     *
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function clearDeleteTriggerNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_trigger_null> value
     *
     * @return boolean
     */
    public function getDeleteTriggerNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_trigger_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyChangeOStatTrigger_Ad\Parameters
     */
    public function setDeleteTriggerNull( $value){
      return $this->_set(1004, $value);
    }
  }
}
