<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetTRITriggerTypes_Ad.proto
//   Date: 2015-10-06 11:19:52

namespace dstore\engine\mi_GetTRITriggerTypes_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $trigger_type_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $trigger_type = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $description = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetTRITriggerTypes_Ad.Response.Row');

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

      // OPTIONAL MESSAGE description = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
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
     * @return \dstore\engine\mi_GetTRITriggerTypes_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetTRITriggerTypes_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetTRITriggerTypes_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetTRITriggerTypes_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetTRITriggerTypes_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetTRITriggerTypes_Ad\Response\Row
     */
    public function setTriggerType(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <description> has a value
     *
     * @return boolean
     */
    public function hasDescription(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <description> value
     *
     * @return \dstore\engine\mi_GetTRITriggerTypes_Ad\Response\Row
     */
    public function clearDescription(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDescription(){
      return $this->_get(10003);
    }
    
    /**
     * Set <description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTRITriggerTypes_Ad\Response\Row
     */
    public function setDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
  }
}

