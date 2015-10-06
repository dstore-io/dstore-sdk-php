<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetSessionManagement_Pu.proto
//   Date: 2015-10-06 11:19:52

namespace dstore\engine\mi_GetSessionManagement_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $session_id = null;
    
    /**  @var boolean */
    public $session_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $key_variable = null;
    
    /**  @var boolean */
    public $key_variable_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $update_date_and_time = null;
    
    /**  @var boolean */
    public $update_date_and_time_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $select_result = null;
    
    /**  @var boolean */
    public $select_result_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetSessionManagement_Pu.Parameters');

      // OPTIONAL MESSAGE session_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "session_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL session_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "session_id_null";
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

      // OPTIONAL MESSAGE update_date_and_time = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "update_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL update_date_and_time_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "update_date_and_time_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE select_result = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "select_result";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL select_result_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "select_result_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <session_id> has a value
     *
     * @return boolean
     */
    public function hasSessionId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <session_id> value
     *
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function clearSessionId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <session_id> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSessionId(){
      return $this->_get(1);
    }
    
    /**
     * Set <session_id> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function setSessionId(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <session_id_null> has a value
     *
     * @return boolean
     */
    public function hasSessionIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <session_id_null> value
     *
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function clearSessionIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <session_id_null> value
     *
     * @return boolean
     */
    public function getSessionIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <session_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function setSessionIdNull( $value){
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
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
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
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
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
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
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
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function setKeyVariableNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <update_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasUpdateDateAndTime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <update_date_and_time> value
     *
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function clearUpdateDateAndTime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <update_date_and_time> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getUpdateDateAndTime(){
      return $this->_get(3);
    }
    
    /**
     * Set <update_date_and_time> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function setUpdateDateAndTime(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <update_date_and_time_null> has a value
     *
     * @return boolean
     */
    public function hasUpdateDateAndTimeNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <update_date_and_time_null> value
     *
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function clearUpdateDateAndTimeNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <update_date_and_time_null> value
     *
     * @return boolean
     */
    public function getUpdateDateAndTimeNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <update_date_and_time_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function setUpdateDateAndTimeNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <select_result> has a value
     *
     * @return boolean
     */
    public function hasSelectResult(){
      return $this->_has(4);
    }
    
    /**
     * Clear <select_result> value
     *
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function clearSelectResult(){
      return $this->_clear(4);
    }
    
    /**
     * Get <select_result> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getSelectResult(){
      return $this->_get(4);
    }
    
    /**
     * Set <select_result> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function setSelectResult(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <select_result_null> has a value
     *
     * @return boolean
     */
    public function hasSelectResultNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <select_result_null> value
     *
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function clearSelectResultNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <select_result_null> value
     *
     * @return boolean
     */
    public function getSelectResultNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <select_result_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetSessionManagement_Pu\Parameters
     */
    public function setSelectResultNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

