<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyCampItemConGroups_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_ModifyCampItemConGroups_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $condition_id = null;
    
    /**  @var boolean */
    public $condition_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $item_condition_group_id = null;
    
    /**  @var boolean */
    public $item_condition_group_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $condition_group_description = null;
    
    /**  @var boolean */
    public $condition_group_description_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $min_number_of_items = null;
    
    /**  @var boolean */
    public $min_number_of_items_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $max_number_of_items = null;
    
    /**  @var boolean */
    public $max_number_of_items_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $from_quantity = null;
    
    /**  @var boolean */
    public $from_quantity_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $to_quantity = null;
    
    /**  @var boolean */
    public $to_quantity_null = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $from_item_basic_price = null;
    
    /**  @var boolean */
    public $from_item_basic_price_null = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $to_item_basic_price = null;
    
    /**  @var boolean */
    public $to_item_basic_price_null = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $from_basic_price_sum = null;
    
    /**  @var boolean */
    public $from_basic_price_sum_null = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $to_basic_price_sum = null;
    
    /**  @var boolean */
    public $to_basic_price_sum_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_condition_extension = null;
    
    /**  @var boolean */
    public $delete_condition_extension_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyCampItemConGroups_Ad.Parameters');

      // OPTIONAL MESSAGE condition_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "condition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "condition_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_group_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "item_condition_group_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL item_condition_group_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "item_condition_group_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition_group_description = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "condition_group_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition_group_description_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "condition_group_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE min_number_of_items = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "min_number_of_items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL min_number_of_items_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "min_number_of_items_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_number_of_items = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "max_number_of_items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL max_number_of_items_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "max_number_of_items_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_quantity = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "from_quantity";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_quantity_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "from_quantity_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_quantity = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "to_quantity";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_quantity_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "to_quantity_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_item_basic_price = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "from_item_basic_price";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_item_basic_price_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "from_item_basic_price_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_item_basic_price = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "to_item_basic_price";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_item_basic_price_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "to_item_basic_price_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_basic_price_sum = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "from_basic_price_sum";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_basic_price_sum_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "from_basic_price_sum_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_basic_price_sum = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "to_basic_price_sum";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_basic_price_sum_null = 1011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1011;
      $f->name      = "to_basic_price_sum_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_condition_extension = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "delete_condition_extension";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_condition_extension_null = 1012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1012;
      $f->name      = "delete_condition_extension_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <condition_id> has a value
     *
     * @return boolean
     */
    public function hasConditionId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <condition_id> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearConditionId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <condition_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getConditionId(){
      return $this->_get(1);
    }
    
    /**
     * Set <condition_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setConditionId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <condition_id_null> has a value
     *
     * @return boolean
     */
    public function hasConditionIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <condition_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearConditionIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <condition_id_null> value
     *
     * @return boolean
     */
    public function getConditionIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <condition_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setConditionIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <item_condition_group_id> has a value
     *
     * @return boolean
     */
    public function hasItemConditionGroupId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <item_condition_group_id> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearItemConditionGroupId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <item_condition_group_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getItemConditionGroupId(){
      return $this->_get(2);
    }
    
    /**
     * Set <item_condition_group_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setItemConditionGroupId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <item_condition_group_id_null> has a value
     *
     * @return boolean
     */
    public function hasItemConditionGroupIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <item_condition_group_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearItemConditionGroupIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <item_condition_group_id_null> value
     *
     * @return boolean
     */
    public function getItemConditionGroupIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <item_condition_group_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setItemConditionGroupIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <condition_group_description> has a value
     *
     * @return boolean
     */
    public function hasConditionGroupDescription(){
      return $this->_has(3);
    }
    
    /**
     * Clear <condition_group_description> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearConditionGroupDescription(){
      return $this->_clear(3);
    }
    
    /**
     * Get <condition_group_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getConditionGroupDescription(){
      return $this->_get(3);
    }
    
    /**
     * Set <condition_group_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setConditionGroupDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <condition_group_description_null> has a value
     *
     * @return boolean
     */
    public function hasConditionGroupDescriptionNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <condition_group_description_null> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearConditionGroupDescriptionNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <condition_group_description_null> value
     *
     * @return boolean
     */
    public function getConditionGroupDescriptionNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <condition_group_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setConditionGroupDescriptionNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <min_number_of_items> has a value
     *
     * @return boolean
     */
    public function hasMinNumberOfItems(){
      return $this->_has(4);
    }
    
    /**
     * Clear <min_number_of_items> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearMinNumberOfItems(){
      return $this->_clear(4);
    }
    
    /**
     * Get <min_number_of_items> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMinNumberOfItems(){
      return $this->_get(4);
    }
    
    /**
     * Set <min_number_of_items> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setMinNumberOfItems(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <min_number_of_items_null> has a value
     *
     * @return boolean
     */
    public function hasMinNumberOfItemsNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <min_number_of_items_null> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearMinNumberOfItemsNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <min_number_of_items_null> value
     *
     * @return boolean
     */
    public function getMinNumberOfItemsNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <min_number_of_items_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setMinNumberOfItemsNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <max_number_of_items> has a value
     *
     * @return boolean
     */
    public function hasMaxNumberOfItems(){
      return $this->_has(5);
    }
    
    /**
     * Clear <max_number_of_items> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearMaxNumberOfItems(){
      return $this->_clear(5);
    }
    
    /**
     * Get <max_number_of_items> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMaxNumberOfItems(){
      return $this->_get(5);
    }
    
    /**
     * Set <max_number_of_items> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setMaxNumberOfItems(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <max_number_of_items_null> has a value
     *
     * @return boolean
     */
    public function hasMaxNumberOfItemsNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <max_number_of_items_null> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearMaxNumberOfItemsNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <max_number_of_items_null> value
     *
     * @return boolean
     */
    public function getMaxNumberOfItemsNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <max_number_of_items_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setMaxNumberOfItemsNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <from_quantity> has a value
     *
     * @return boolean
     */
    public function hasFromQuantity(){
      return $this->_has(6);
    }
    
    /**
     * Clear <from_quantity> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearFromQuantity(){
      return $this->_clear(6);
    }
    
    /**
     * Get <from_quantity> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getFromQuantity(){
      return $this->_get(6);
    }
    
    /**
     * Set <from_quantity> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setFromQuantity(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <from_quantity_null> has a value
     *
     * @return boolean
     */
    public function hasFromQuantityNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <from_quantity_null> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearFromQuantityNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <from_quantity_null> value
     *
     * @return boolean
     */
    public function getFromQuantityNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <from_quantity_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setFromQuantityNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <to_quantity> has a value
     *
     * @return boolean
     */
    public function hasToQuantity(){
      return $this->_has(7);
    }
    
    /**
     * Clear <to_quantity> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearToQuantity(){
      return $this->_clear(7);
    }
    
    /**
     * Get <to_quantity> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getToQuantity(){
      return $this->_get(7);
    }
    
    /**
     * Set <to_quantity> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setToQuantity(\dstore\engine\values\integerValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <to_quantity_null> has a value
     *
     * @return boolean
     */
    public function hasToQuantityNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <to_quantity_null> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearToQuantityNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <to_quantity_null> value
     *
     * @return boolean
     */
    public function getToQuantityNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <to_quantity_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setToQuantityNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <from_item_basic_price> has a value
     *
     * @return boolean
     */
    public function hasFromItemBasicPrice(){
      return $this->_has(8);
    }
    
    /**
     * Clear <from_item_basic_price> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearFromItemBasicPrice(){
      return $this->_clear(8);
    }
    
    /**
     * Get <from_item_basic_price> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getFromItemBasicPrice(){
      return $this->_get(8);
    }
    
    /**
     * Set <from_item_basic_price> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setFromItemBasicPrice(\dstore\engine\values\decimalValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <from_item_basic_price_null> has a value
     *
     * @return boolean
     */
    public function hasFromItemBasicPriceNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <from_item_basic_price_null> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearFromItemBasicPriceNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <from_item_basic_price_null> value
     *
     * @return boolean
     */
    public function getFromItemBasicPriceNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <from_item_basic_price_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setFromItemBasicPriceNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <to_item_basic_price> has a value
     *
     * @return boolean
     */
    public function hasToItemBasicPrice(){
      return $this->_has(9);
    }
    
    /**
     * Clear <to_item_basic_price> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearToItemBasicPrice(){
      return $this->_clear(9);
    }
    
    /**
     * Get <to_item_basic_price> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getToItemBasicPrice(){
      return $this->_get(9);
    }
    
    /**
     * Set <to_item_basic_price> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setToItemBasicPrice(\dstore\engine\values\decimalValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <to_item_basic_price_null> has a value
     *
     * @return boolean
     */
    public function hasToItemBasicPriceNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <to_item_basic_price_null> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearToItemBasicPriceNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <to_item_basic_price_null> value
     *
     * @return boolean
     */
    public function getToItemBasicPriceNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <to_item_basic_price_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setToItemBasicPriceNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <from_basic_price_sum> has a value
     *
     * @return boolean
     */
    public function hasFromBasicPriceSum(){
      return $this->_has(10);
    }
    
    /**
     * Clear <from_basic_price_sum> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearFromBasicPriceSum(){
      return $this->_clear(10);
    }
    
    /**
     * Get <from_basic_price_sum> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getFromBasicPriceSum(){
      return $this->_get(10);
    }
    
    /**
     * Set <from_basic_price_sum> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setFromBasicPriceSum(\dstore\engine\values\decimalValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <from_basic_price_sum_null> has a value
     *
     * @return boolean
     */
    public function hasFromBasicPriceSumNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <from_basic_price_sum_null> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearFromBasicPriceSumNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <from_basic_price_sum_null> value
     *
     * @return boolean
     */
    public function getFromBasicPriceSumNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <from_basic_price_sum_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setFromBasicPriceSumNull( $value){
      return $this->_set(1010, $value);
    }
    
    /**
     * Check if <to_basic_price_sum> has a value
     *
     * @return boolean
     */
    public function hasToBasicPriceSum(){
      return $this->_has(11);
    }
    
    /**
     * Clear <to_basic_price_sum> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearToBasicPriceSum(){
      return $this->_clear(11);
    }
    
    /**
     * Get <to_basic_price_sum> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getToBasicPriceSum(){
      return $this->_get(11);
    }
    
    /**
     * Set <to_basic_price_sum> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setToBasicPriceSum(\dstore\engine\values\decimalValue $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <to_basic_price_sum_null> has a value
     *
     * @return boolean
     */
    public function hasToBasicPriceSumNull(){
      return $this->_has(1011);
    }
    
    /**
     * Clear <to_basic_price_sum_null> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearToBasicPriceSumNull(){
      return $this->_clear(1011);
    }
    
    /**
     * Get <to_basic_price_sum_null> value
     *
     * @return boolean
     */
    public function getToBasicPriceSumNull(){
      return $this->_get(1011);
    }
    
    /**
     * Set <to_basic_price_sum_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setToBasicPriceSumNull( $value){
      return $this->_set(1011, $value);
    }
    
    /**
     * Check if <delete_condition_extension> has a value
     *
     * @return boolean
     */
    public function hasDeleteConditionExtension(){
      return $this->_has(12);
    }
    
    /**
     * Clear <delete_condition_extension> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearDeleteConditionExtension(){
      return $this->_clear(12);
    }
    
    /**
     * Get <delete_condition_extension> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteConditionExtension(){
      return $this->_get(12);
    }
    
    /**
     * Set <delete_condition_extension> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setDeleteConditionExtension(\dstore\engine\values\booleanValue $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <delete_condition_extension_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteConditionExtensionNull(){
      return $this->_has(1012);
    }
    
    /**
     * Clear <delete_condition_extension_null> value
     *
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function clearDeleteConditionExtensionNull(){
      return $this->_clear(1012);
    }
    
    /**
     * Get <delete_condition_extension_null> value
     *
     * @return boolean
     */
    public function getDeleteConditionExtensionNull(){
      return $this->_get(1012);
    }
    
    /**
     * Set <delete_condition_extension_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampItemConGroups_Ad\Parameters
     */
    public function setDeleteConditionExtensionNull( $value){
      return $this->_set(1012, $value);
    }
  }
}
