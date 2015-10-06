<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyTrolleyInformation_Pu.proto
//   Date: 2015-10-06 11:20:04

namespace dstore\engine\om_ModifyTrolleyInformation_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $visitor_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $information_type_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $error_code = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyTrolleyInformation_Pu.Response.Row');

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

      // OPTIONAL MESSAGE information_type_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE error_code = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "error_code";
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
     * @return \dstore\engine\om_ModifyTrolleyInformation_Pu\Response\Row
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
     * @return \dstore\engine\om_ModifyTrolleyInformation_Pu\Response\Row
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
     * @return \dstore\engine\om_ModifyTrolleyInformation_Pu\Response\Row
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
     * @return \dstore\engine\om_ModifyTrolleyInformation_Pu\Response\Row
     */
    public function setVisitorId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <information_type_id> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <information_type_id> value
     *
     * @return \dstore\engine\om_ModifyTrolleyInformation_Pu\Response\Row
     */
    public function clearInformationTypeId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyTrolleyInformation_Pu\Response\Row
     */
    public function setInformationTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <error_code> has a value
     *
     * @return boolean
     */
    public function hasErrorCode(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <error_code> value
     *
     * @return \dstore\engine\om_ModifyTrolleyInformation_Pu\Response\Row
     */
    public function clearErrorCode(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <error_code> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getErrorCode(){
      return $this->_get(10003);
    }
    
    /**
     * Set <error_code> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyTrolleyInformation_Pu\Response\Row
     */
    public function setErrorCode(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
  }
}

