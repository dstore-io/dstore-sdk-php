<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/ac_ModifyCommands_Ad.proto
//   Date: 2015-10-06 11:19:42

namespace dstore\engine\ac_ModifyCommands_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $command_id = null;
    
    /**  @var boolean */
    public $command_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $command = null;
    
    /**  @var boolean */
    public $command_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $command_description = null;
    
    /**  @var boolean */
    public $command_description_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_command = null;
    
    /**  @var boolean */
    public $delete_command_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.ac_ModifyCommands_Ad.Parameters');

      // OPTIONAL MESSAGE command_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "command_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL command_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "command_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE command = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "command";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL command_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "command_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE command_description = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "command_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL command_description_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "command_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_command = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete_command";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_command_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_command_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <command_id> has a value
     *
     * @return boolean
     */
    public function hasCommandId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <command_id> value
     *
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function clearCommandId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <command_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCommandId(){
      return $this->_get(1);
    }
    
    /**
     * Set <command_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function setCommandId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <command_id_null> has a value
     *
     * @return boolean
     */
    public function hasCommandIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <command_id_null> value
     *
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function clearCommandIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <command_id_null> value
     *
     * @return boolean
     */
    public function getCommandIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <command_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function setCommandIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <command> has a value
     *
     * @return boolean
     */
    public function hasCommand(){
      return $this->_has(2);
    }
    
    /**
     * Clear <command> value
     *
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function clearCommand(){
      return $this->_clear(2);
    }
    
    /**
     * Get <command> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCommand(){
      return $this->_get(2);
    }
    
    /**
     * Set <command> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function setCommand(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <command_null> has a value
     *
     * @return boolean
     */
    public function hasCommandNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <command_null> value
     *
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function clearCommandNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <command_null> value
     *
     * @return boolean
     */
    public function getCommandNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <command_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function setCommandNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <command_description> has a value
     *
     * @return boolean
     */
    public function hasCommandDescription(){
      return $this->_has(3);
    }
    
    /**
     * Clear <command_description> value
     *
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function clearCommandDescription(){
      return $this->_clear(3);
    }
    
    /**
     * Get <command_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCommandDescription(){
      return $this->_get(3);
    }
    
    /**
     * Set <command_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function setCommandDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <command_description_null> has a value
     *
     * @return boolean
     */
    public function hasCommandDescriptionNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <command_description_null> value
     *
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function clearCommandDescriptionNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <command_description_null> value
     *
     * @return boolean
     */
    public function getCommandDescriptionNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <command_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function setCommandDescriptionNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete_command> has a value
     *
     * @return boolean
     */
    public function hasDeleteCommand(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete_command> value
     *
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function clearDeleteCommand(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete_command> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteCommand(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete_command> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function setDeleteCommand(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_command_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteCommandNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_command_null> value
     *
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function clearDeleteCommandNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_command_null> value
     *
     * @return boolean
     */
    public function getDeleteCommandNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_command_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\ac_ModifyCommands_Ad\Parameters
     */
    public function setDeleteCommandNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

