<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetMostRecentUniqueID_Pu.proto
//   Date: 2015-10-06 11:20:05

namespace dstore\engine\pm_GetMostRecentUniqueID_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $visitor_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $unique_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $valid_from = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetMostRecentUniqueID_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visitor_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "visitor_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unique_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE valid_from = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "valid_from";
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
     * @return \dstore\engine\pm_GetMostRecentUniqueID_Pu\Response\Row
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
     * @return \dstore\engine\pm_GetMostRecentUniqueID_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <visitor_id> has a value
     *
     * @return boolean
     */
    public function hasVisitorId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <visitor_id> value
     *
     * @return \dstore\engine\pm_GetMostRecentUniqueID_Pu\Response\Row
     */
    public function clearVisitorId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <visitor_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVisitorId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <visitor_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetMostRecentUniqueID_Pu\Response\Row
     */
    public function setVisitorId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\pm_GetMostRecentUniqueID_Pu\Response\Row
     */
    public function clearUniqueId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetMostRecentUniqueID_Pu\Response\Row
     */
    public function setUniqueId(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\pm_GetMostRecentUniqueID_Pu\Response\Row
     */
    public function clearPersonId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetMostRecentUniqueID_Pu\Response\Row
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <valid_from> has a value
     *
     * @return boolean
     */
    public function hasValidFrom(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <valid_from> value
     *
     * @return \dstore\engine\pm_GetMostRecentUniqueID_Pu\Response\Row
     */
    public function clearValidFrom(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <valid_from> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getValidFrom(){
      return $this->_get(10004);
    }
    
    /**
     * Set <valid_from> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\pm_GetMostRecentUniqueID_Pu\Response\Row
     */
    public function setValidFrom(\dstore\engine\values\timestampValue $value){
      return $this->_set(10004, $value);
    }
  }
}

