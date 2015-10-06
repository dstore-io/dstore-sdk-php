<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetProcedureDocu_Ad.proto
//   Date: 2015-10-06 11:19:43

namespace dstore\engine\do_GetProcedureDocu_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $dstore_version = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $documentation = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $last_edited = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetProcedureDocu_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE dstore_version = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "dstore_version";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE documentation = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "documentation";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE last_edited = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "last_edited";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
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
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Response\Row
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
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <dstore_version> has a value
     *
     * @return boolean
     */
    public function hasDstoreVersion(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <dstore_version> value
     *
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Response\Row
     */
    public function clearDstoreVersion(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <dstore_version> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDstoreVersion(){
      return $this->_get(10001);
    }
    
    /**
     * Set <dstore_version> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Response\Row
     */
    public function setDstoreVersion(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <documentation> has a value
     *
     * @return boolean
     */
    public function hasDocumentation(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <documentation> value
     *
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Response\Row
     */
    public function clearDocumentation(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <documentation> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDocumentation(){
      return $this->_get(10002);
    }
    
    /**
     * Set <documentation> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Response\Row
     */
    public function setDocumentation(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <last_edited> has a value
     *
     * @return boolean
     */
    public function hasLastEdited(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <last_edited> value
     *
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Response\Row
     */
    public function clearLastEdited(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <last_edited> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getLastEdited(){
      return $this->_get(10003);
    }
    
    /**
     * Set <last_edited> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Response\Row
     */
    public function setLastEdited(\dstore\engine\values\timestampValue $value){
      return $this->_set(10003, $value);
    }
  }
}

