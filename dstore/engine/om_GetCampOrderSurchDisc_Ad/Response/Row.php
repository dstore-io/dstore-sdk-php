<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCampOrderSurchDisc_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetCampOrderSurchDisc_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $discount_surcharge_type_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $benefit_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $apply_to_surcharge_type_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $apply_to_surcharge_description = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $discount_value = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $discount_surcharge_description = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCampOrderSurchDisc_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE discount_surcharge_type_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "discount_surcharge_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE benefit_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "benefit_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE apply_to_surcharge_type_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "apply_to_surcharge_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE apply_to_surcharge_description = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "apply_to_surcharge_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE discount_value = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "discount_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE discount_surcharge_description = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "discount_surcharge_description";
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
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
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
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <discount_surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasDiscountSurchargeTypeId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <discount_surcharge_type_id> value
     *
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function clearDiscountSurchargeTypeId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <discount_surcharge_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getDiscountSurchargeTypeId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <discount_surcharge_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function setDiscountSurchargeTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <benefit_id> has a value
     *
     * @return boolean
     */
    public function hasBenefitId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <benefit_id> value
     *
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function clearBenefitId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <benefit_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBenefitId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <benefit_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function setBenefitId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <apply_to_surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasApplyToSurchargeTypeId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <apply_to_surcharge_type_id> value
     *
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function clearApplyToSurchargeTypeId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <apply_to_surcharge_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getApplyToSurchargeTypeId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <apply_to_surcharge_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function setApplyToSurchargeTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <apply_to_surcharge_description> has a value
     *
     * @return boolean
     */
    public function hasApplyToSurchargeDescription(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <apply_to_surcharge_description> value
     *
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function clearApplyToSurchargeDescription(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <apply_to_surcharge_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getApplyToSurchargeDescription(){
      return $this->_get(10004);
    }
    
    /**
     * Set <apply_to_surcharge_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function setApplyToSurchargeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <discount_value> has a value
     *
     * @return boolean
     */
    public function hasDiscountValue(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <discount_value> value
     *
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function clearDiscountValue(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <discount_value> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getDiscountValue(){
      return $this->_get(10005);
    }
    
    /**
     * Set <discount_value> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function setDiscountValue(\dstore\engine\values\decimalValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <discount_surcharge_description> has a value
     *
     * @return boolean
     */
    public function hasDiscountSurchargeDescription(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <discount_surcharge_description> value
     *
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function clearDiscountSurchargeDescription(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <discount_surcharge_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDiscountSurchargeDescription(){
      return $this->_get(10006);
    }
    
    /**
     * Set <discount_surcharge_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampOrderSurchDisc_Ad\Response\Row
     */
    public function setDiscountSurchargeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10006, $value);
    }
  }
}
