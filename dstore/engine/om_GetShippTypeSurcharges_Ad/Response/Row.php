<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetShippTypeSurcharges_Ad.proto
//   Date: 2015-10-06 11:19:59

namespace dstore\engine\om_GetShippTypeSurcharges_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $unit_id = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $valid_to = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $priority_no = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $shipping_type_description = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $valid_from = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $surcharge_is_absolute_value = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $unit_symbol = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $shipping_type_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $surcharge_type_description = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $surcharge_value = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $surcharge_type_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetShippTypeSurcharges_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "unit_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE valid_to = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "valid_to";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE priority_no = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "priority_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE shipping_type_description = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "shipping_type_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE valid_from = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "valid_from";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_is_absolute_value = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "surcharge_is_absolute_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_symbol = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "unit_symbol";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE shipping_type_id = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "shipping_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_type_description = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "surcharge_type_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_value = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "surcharge_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_type_id = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "surcharge_type_id";
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
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
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
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <unit_id> has a value
     *
     * @return boolean
     */
    public function hasUnitId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <unit_id> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function clearUnitId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <unit_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUnitId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <unit_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function setUnitId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <valid_to> has a value
     *
     * @return boolean
     */
    public function hasValidTo(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <valid_to> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function clearValidTo(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <valid_to> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getValidTo(){
      return $this->_get(10002);
    }
    
    /**
     * Set <valid_to> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function setValidTo(\dstore\engine\values\timestampValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <priority_no> has a value
     *
     * @return boolean
     */
    public function hasPriorityNo(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <priority_no> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function clearPriorityNo(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <priority_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPriorityNo(){
      return $this->_get(10003);
    }
    
    /**
     * Set <priority_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function setPriorityNo(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <shipping_type_description> has a value
     *
     * @return boolean
     */
    public function hasShippingTypeDescription(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <shipping_type_description> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function clearShippingTypeDescription(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <shipping_type_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getShippingTypeDescription(){
      return $this->_get(10004);
    }
    
    /**
     * Set <shipping_type_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function setShippingTypeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <valid_from> has a value
     *
     * @return boolean
     */
    public function hasValidFrom(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <valid_from> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function clearValidFrom(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <valid_from> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getValidFrom(){
      return $this->_get(10005);
    }
    
    /**
     * Set <valid_from> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function setValidFrom(\dstore\engine\values\timestampValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <surcharge_is_absolute_value> has a value
     *
     * @return boolean
     */
    public function hasSurchargeIsAbsoluteValue(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <surcharge_is_absolute_value> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function clearSurchargeIsAbsoluteValue(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <surcharge_is_absolute_value> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSurchargeIsAbsoluteValue(){
      return $this->_get(10006);
    }
    
    /**
     * Set <surcharge_is_absolute_value> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function setSurchargeIsAbsoluteValue(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <unit_symbol> has a value
     *
     * @return boolean
     */
    public function hasUnitSymbol(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <unit_symbol> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function clearUnitSymbol(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <unit_symbol> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUnitSymbol(){
      return $this->_get(10007);
    }
    
    /**
     * Set <unit_symbol> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function setUnitSymbol(\dstore\engine\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <shipping_type_id> has a value
     *
     * @return boolean
     */
    public function hasShippingTypeId(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <shipping_type_id> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function clearShippingTypeId(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <shipping_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getShippingTypeId(){
      return $this->_get(10008);
    }
    
    /**
     * Set <shipping_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function setShippingTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <surcharge_type_description> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeDescription(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <surcharge_type_description> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function clearSurchargeTypeDescription(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <surcharge_type_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSurchargeTypeDescription(){
      return $this->_get(10009);
    }
    
    /**
     * Set <surcharge_type_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function setSurchargeTypeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <surcharge_value> has a value
     *
     * @return boolean
     */
    public function hasSurchargeValue(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <surcharge_value> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function clearSurchargeValue(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <surcharge_value> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getSurchargeValue(){
      return $this->_get(10010);
    }
    
    /**
     * Set <surcharge_value> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function setSurchargeValue(\dstore\engine\values\decimalValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeId(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <surcharge_type_id> value
     *
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function clearSurchargeTypeId(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <surcharge_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSurchargeTypeId(){
      return $this->_get(10011);
    }
    
    /**
     * Set <surcharge_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetShippTypeSurcharges_Ad\Response\Row
     */
    public function setSurchargeTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10011, $value);
    }
  }
}

