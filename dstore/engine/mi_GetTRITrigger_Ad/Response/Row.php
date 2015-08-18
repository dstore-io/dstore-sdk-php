<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetTRITrigger_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetTRITrigger_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $trigger_type_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $trigger_type = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $execute_procedure_name = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $trigger_name = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $trigger_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $trigger_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $trigger_status = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetTRITrigger_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE trigger_type_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "trigger_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE trigger_type = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "trigger_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE execute_procedure_name = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "execute_procedure_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE trigger_name = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "trigger_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE trigger_description = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "trigger_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE trigger_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "trigger_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE trigger_status = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "trigger_status";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <row_id> has a value
     *
     * @return boolean
     */
    public function hasRowId(){
      return $this->_has(10000);
    }
    
    /**
     * Clear <row_id> value
     *
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function clearRowId(){
      return $this->_clear(10000);
    }
    
    /**
     * Get <row_id> value
     *
     * @return int
     */
    public function getRowId(){
      return $this->_get(10000);
    }
    
    /**
     * Set <row_id> value
     *
     * @param int $value
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <trigger_type_id> has a value
     *
     * @return boolean
     */
    public function hasTriggerTypeId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <trigger_type_id> value
     *
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function clearTriggerTypeId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <trigger_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTriggerTypeId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <trigger_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function setTriggerTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <trigger_type> has a value
     *
     * @return boolean
     */
    public function hasTriggerType(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <trigger_type> value
     *
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function clearTriggerType(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <trigger_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getTriggerType(){
      return $this->_get(10002);
    }
    
    /**
     * Set <trigger_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function setTriggerType(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <execute_procedure_name> has a value
     *
     * @return boolean
     */
    public function hasExecuteProcedureName(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <execute_procedure_name> value
     *
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function clearExecuteProcedureName(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <execute_procedure_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getExecuteProcedureName(){
      return $this->_get(10003);
    }
    
    /**
     * Set <execute_procedure_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function setExecuteProcedureName(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <trigger_name> has a value
     *
     * @return boolean
     */
    public function hasTriggerName(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <trigger_name> value
     *
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function clearTriggerName(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <trigger_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getTriggerName(){
      return $this->_get(10004);
    }
    
    /**
     * Set <trigger_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function setTriggerName(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <trigger_description> has a value
     *
     * @return boolean
     */
    public function hasTriggerDescription(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <trigger_description> value
     *
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function clearTriggerDescription(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <trigger_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getTriggerDescription(){
      return $this->_get(10005);
    }
    
    /**
     * Set <trigger_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function setTriggerDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <trigger_id> has a value
     *
     * @return boolean
     */
    public function hasTriggerId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <trigger_id> value
     *
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function clearTriggerId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <trigger_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTriggerId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <trigger_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function setTriggerId(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <trigger_status> has a value
     *
     * @return boolean
     */
    public function hasTriggerStatus(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <trigger_status> value
     *
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function clearTriggerStatus(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <trigger_status> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTriggerStatus(){
      return $this->_get(10007);
    }
    
    /**
     * Set <trigger_status> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTRITrigger_Ad\Response\Row
     */
    public function setTriggerStatus(\dstore\engine\values\integerValue $value){
      return $this->_set(10007, $value);
    }
  }
}
