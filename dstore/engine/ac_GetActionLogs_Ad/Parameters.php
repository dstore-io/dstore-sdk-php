<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/ac_GetActionLogs_Ad.proto
//   Date: 2015-10-06 11:19:42

namespace dstore\engine\ac_GetActionLogs_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $action_id = null;
    
    /**  @var boolean */
    public $action_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $only_part_no = null;
    
    /**  @var boolean */
    public $only_part_no_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.ac_GetActionLogs_Ad.Parameters');

      // OPTIONAL MESSAGE action_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "action_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL action_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "action_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE only_part_no = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "only_part_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_part_no_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "only_part_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <action_id> has a value
     *
     * @return boolean
     */
    public function hasActionId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <action_id> value
     *
     * @return \dstore\engine\ac_GetActionLogs_Ad\Parameters
     */
    public function clearActionId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <action_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getActionId(){
      return $this->_get(1);
    }
    
    /**
     * Set <action_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\ac_GetActionLogs_Ad\Parameters
     */
    public function setActionId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <action_id_null> has a value
     *
     * @return boolean
     */
    public function hasActionIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <action_id_null> value
     *
     * @return \dstore\engine\ac_GetActionLogs_Ad\Parameters
     */
    public function clearActionIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <action_id_null> value
     *
     * @return boolean
     */
    public function getActionIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <action_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\ac_GetActionLogs_Ad\Parameters
     */
    public function setActionIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <only_part_no> has a value
     *
     * @return boolean
     */
    public function hasOnlyPartNo(){
      return $this->_has(2);
    }
    
    /**
     * Clear <only_part_no> value
     *
     * @return \dstore\engine\ac_GetActionLogs_Ad\Parameters
     */
    public function clearOnlyPartNo(){
      return $this->_clear(2);
    }
    
    /**
     * Get <only_part_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOnlyPartNo(){
      return $this->_get(2);
    }
    
    /**
     * Set <only_part_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\ac_GetActionLogs_Ad\Parameters
     */
    public function setOnlyPartNo(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <only_part_no_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyPartNoNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <only_part_no_null> value
     *
     * @return \dstore\engine\ac_GetActionLogs_Ad\Parameters
     */
    public function clearOnlyPartNoNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <only_part_no_null> value
     *
     * @return boolean
     */
    public function getOnlyPartNoNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <only_part_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\ac_GetActionLogs_Ad\Parameters
     */
    public function setOnlyPartNoNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

