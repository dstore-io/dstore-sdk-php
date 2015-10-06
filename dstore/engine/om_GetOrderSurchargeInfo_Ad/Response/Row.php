<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetOrderSurchargeInfo_Ad.proto
//   Date: 2015-10-06 11:19:58

namespace dstore\engine\om_GetOrderSurchargeInfo_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $created_by_user_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $information_type_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $position_no = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $information_type = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $information = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $created_at_date_and_time = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetOrderSurchargeInfo_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE created_by_user_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "created_by_user_id";
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

      // OPTIONAL MESSAGE position_no = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "position_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "information_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "information";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE created_at_date_and_time = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "created_at_date_and_time";
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
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
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
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <created_by_user_id> has a value
     *
     * @return boolean
     */
    public function hasCreatedByUserId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <created_by_user_id> value
     *
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
     */
    public function clearCreatedByUserId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <created_by_user_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCreatedByUserId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <created_by_user_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
     */
    public function setCreatedByUserId(\dstore\engine\values\integerValue $value){
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
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
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
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
     */
    public function setInformationTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <position_no> has a value
     *
     * @return boolean
     */
    public function hasPositionNo(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <position_no> value
     *
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
     */
    public function clearPositionNo(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <position_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPositionNo(){
      return $this->_get(10003);
    }
    
    /**
     * Set <position_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
     */
    public function setPositionNo(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <information_type> has a value
     *
     * @return boolean
     */
    public function hasInformationType(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <information_type> value
     *
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
     */
    public function clearInformationType(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <information_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getInformationType(){
      return $this->_get(10004);
    }
    
    /**
     * Set <information_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
     */
    public function setInformationType(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <information> has a value
     *
     * @return boolean
     */
    public function hasInformation(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <information> value
     *
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
     */
    public function clearInformation(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <information> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getInformation(){
      return $this->_get(10005);
    }
    
    /**
     * Set <information> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
     */
    public function setInformation(\dstore\engine\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <created_at_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasCreatedAtDateAndTime(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <created_at_date_and_time> value
     *
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
     */
    public function clearCreatedAtDateAndTime(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <created_at_date_and_time> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getCreatedAtDateAndTime(){
      return $this->_get(10006);
    }
    
    /**
     * Set <created_at_date_and_time> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_GetOrderSurchargeInfo_Ad\Response\Row
     */
    public function setCreatedAtDateAndTime(\dstore\engine\values\timestampValue $value){
      return $this->_set(10006, $value);
    }
  }
}

