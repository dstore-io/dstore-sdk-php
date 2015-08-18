<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetTRITriggerWorkflow_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetTRITriggerWorkflow_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $trigger_id = null;
    
    /**  @var boolean */
    public $trigger_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetTRITriggerWorkflow_Ad.Parameters');

      // OPTIONAL MESSAGE trigger_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "trigger_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL trigger_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "trigger_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <trigger_id> has a value
     *
     * @return boolean
     */
    public function hasTriggerId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <trigger_id> value
     *
     * @return \dstore\engine\mi_GetTRITriggerWorkflow_Ad\Parameters
     */
    public function clearTriggerId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <trigger_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTriggerId(){
      return $this->_get(1);
    }
    
    /**
     * Set <trigger_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTRITriggerWorkflow_Ad\Parameters
     */
    public function setTriggerId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <trigger_id_null> has a value
     *
     * @return boolean
     */
    public function hasTriggerIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <trigger_id_null> value
     *
     * @return \dstore\engine\mi_GetTRITriggerWorkflow_Ad\Parameters
     */
    public function clearTriggerIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <trigger_id_null> value
     *
     * @return boolean
     */
    public function getTriggerIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <trigger_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetTRITriggerWorkflow_Ad\Parameters
     */
    public function setTriggerIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}
