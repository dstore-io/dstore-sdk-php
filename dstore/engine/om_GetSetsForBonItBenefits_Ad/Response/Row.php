<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetSetsForBonItBenefits_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetSetsForBonItBenefits_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $item_condition_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $benefit_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $item_set_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $max_quantity = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $item_condition_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $sort_no = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetSetsForBonItBenefits_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "item_condition_id";
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

      // OPTIONAL MESSAGE item_set_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "item_set_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_quantity = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "max_quantity";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_description = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "item_condition_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "sort_no";
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
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
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
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <item_condition_id> has a value
     *
     * @return boolean
     */
    public function hasItemConditionId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <item_condition_id> value
     *
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
     */
    public function clearItemConditionId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <item_condition_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getItemConditionId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <item_condition_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
     */
    public function setItemConditionId(\dstore\engine\values\integerValue $value){
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
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
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
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
     */
    public function setBenefitId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <item_set_id> has a value
     *
     * @return boolean
     */
    public function hasItemSetId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <item_set_id> value
     *
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
     */
    public function clearItemSetId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <item_set_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getItemSetId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <item_set_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
     */
    public function setItemSetId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <max_quantity> has a value
     *
     * @return boolean
     */
    public function hasMaxQuantity(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <max_quantity> value
     *
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
     */
    public function clearMaxQuantity(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <max_quantity> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMaxQuantity(){
      return $this->_get(10004);
    }
    
    /**
     * Set <max_quantity> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
     */
    public function setMaxQuantity(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <item_condition_description> has a value
     *
     * @return boolean
     */
    public function hasItemConditionDescription(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <item_condition_description> value
     *
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
     */
    public function clearItemConditionDescription(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <item_condition_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getItemConditionDescription(){
      return $this->_get(10005);
    }
    
    /**
     * Set <item_condition_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
     */
    public function setItemConditionDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
     */
    public function clearSortNo(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(10006);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetSetsForBonItBenefits_Ad\Response\Row
     */
    public function setSortNo(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
  }
}
