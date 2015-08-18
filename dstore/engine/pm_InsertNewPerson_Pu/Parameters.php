<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_InsertNewPerson_Pu.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_InsertNewPerson_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_id_list1 = null;
    
    /**  @var boolean */
    public $characteristic_id_list1_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value_list1 = null;
    
    /**  @var boolean */
    public $value_list1_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_id_list2 = null;
    
    /**  @var boolean */
    public $characteristic_id_list2_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value_list2 = null;
    
    /**  @var boolean */
    public $value_list2_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_charac_category_id = null;
    
    /**  @var boolean */
    public $person_charac_category_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $result_in_error_id_list = null;
    
    /**  @var boolean */
    public $result_in_error_id_list_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $value_ids_for_predefined_characs = null;
    
    /**  @var boolean */
    public $value_ids_for_predefined_characs_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $generate_password = null;
    
    /**  @var boolean */
    public $generate_password_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $generate_customer_no = null;
    
    /**  @var boolean */
    public $generate_customer_no_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $cancel_on_error = null;
    
    /**  @var boolean */
    public $cancel_on_error_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $separator_in_lists = null;
    
    /**  @var boolean */
    public $separator_in_lists_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $update_visitor_persons = null;
    
    /**  @var boolean */
    public $update_visitor_persons_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $country = null;
    
    /**  @var boolean */
    public $country_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_InsertNewPerson_Pu.Parameters');

      // OPTIONAL MESSAGE unique_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_id_list1 = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "characteristic_id_list1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL characteristic_id_list1_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "characteristic_id_list1_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_list1 = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "value_list1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_list1_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "value_list1_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_id_list2 = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "characteristic_id_list2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL characteristic_id_list2_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "characteristic_id_list2_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_list2 = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "value_list2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_list2_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "value_list2_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_charac_category_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "person_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_charac_category_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "person_charac_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE result_in_error_id_list = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "result_in_error_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL result_in_error_id_list_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "result_in_error_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_ids_for_predefined_characs = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "value_ids_for_predefined_characs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_ids_for_predefined_characs_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "value_ids_for_predefined_characs_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE generate_password = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "generate_password";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL generate_password_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "generate_password_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE generate_customer_no = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "generate_customer_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL generate_customer_no_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "generate_customer_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE cancel_on_error = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "cancel_on_error";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL cancel_on_error_null = 1011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1011;
      $f->name      = "cancel_on_error_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_lists = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "separator_in_lists";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_lists_null = 1012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1012;
      $f->name      = "separator_in_lists_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE update_visitor_persons = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "update_visitor_persons";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL update_visitor_persons_null = 1013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1013;
      $f->name      = "update_visitor_persons_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1014;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE country = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "country";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL country_null = 1015
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1015;
      $f->name      = "country_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(1);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setUniqueId(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <characteristic_id_list1> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList1(){
      return $this->_has(2);
    }
    
    /**
     * Clear <characteristic_id_list1> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearCharacteristicIdList1(){
      return $this->_clear(2);
    }
    
    /**
     * Get <characteristic_id_list1> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicIdList1(){
      return $this->_get(2);
    }
    
    /**
     * Set <characteristic_id_list1> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setCharacteristicIdList1(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <characteristic_id_list1_null> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList1Null(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <characteristic_id_list1_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearCharacteristicIdList1Null(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <characteristic_id_list1_null> value
     *
     * @return boolean
     */
    public function getCharacteristicIdList1Null(){
      return $this->_get(1002);
    }
    
    /**
     * Set <characteristic_id_list1_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setCharacteristicIdList1Null( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <value_list1> has a value
     *
     * @return boolean
     */
    public function hasValueList1(){
      return $this->_has(3);
    }
    
    /**
     * Clear <value_list1> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearValueList1(){
      return $this->_clear(3);
    }
    
    /**
     * Get <value_list1> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValueList1(){
      return $this->_get(3);
    }
    
    /**
     * Set <value_list1> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setValueList1(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <value_list1_null> has a value
     *
     * @return boolean
     */
    public function hasValueList1Null(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <value_list1_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearValueList1Null(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <value_list1_null> value
     *
     * @return boolean
     */
    public function getValueList1Null(){
      return $this->_get(1003);
    }
    
    /**
     * Set <value_list1_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setValueList1Null( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <characteristic_id_list2> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList2(){
      return $this->_has(4);
    }
    
    /**
     * Clear <characteristic_id_list2> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearCharacteristicIdList2(){
      return $this->_clear(4);
    }
    
    /**
     * Get <characteristic_id_list2> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicIdList2(){
      return $this->_get(4);
    }
    
    /**
     * Set <characteristic_id_list2> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setCharacteristicIdList2(\dstore\engine\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <characteristic_id_list2_null> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList2Null(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <characteristic_id_list2_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearCharacteristicIdList2Null(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <characteristic_id_list2_null> value
     *
     * @return boolean
     */
    public function getCharacteristicIdList2Null(){
      return $this->_get(1004);
    }
    
    /**
     * Set <characteristic_id_list2_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setCharacteristicIdList2Null( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <value_list2> has a value
     *
     * @return boolean
     */
    public function hasValueList2(){
      return $this->_has(5);
    }
    
    /**
     * Clear <value_list2> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearValueList2(){
      return $this->_clear(5);
    }
    
    /**
     * Get <value_list2> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValueList2(){
      return $this->_get(5);
    }
    
    /**
     * Set <value_list2> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setValueList2(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <value_list2_null> has a value
     *
     * @return boolean
     */
    public function hasValueList2Null(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <value_list2_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearValueList2Null(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <value_list2_null> value
     *
     * @return boolean
     */
    public function getValueList2Null(){
      return $this->_get(1005);
    }
    
    /**
     * Set <value_list2_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setValueList2Null( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <person_charac_category_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <person_charac_category_id> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearPersonCharacCategoryId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <person_charac_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacCategoryId(){
      return $this->_get(6);
    }
    
    /**
     * Set <person_charac_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setPersonCharacCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <person_charac_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <person_charac_category_id_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearPersonCharacCategoryIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <person_charac_category_id_null> value
     *
     * @return boolean
     */
    public function getPersonCharacCategoryIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <person_charac_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setPersonCharacCategoryIdNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <result_in_error_id_list> has a value
     *
     * @return boolean
     */
    public function hasResultInErrorIdList(){
      return $this->_has(7);
    }
    
    /**
     * Clear <result_in_error_id_list> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearResultInErrorIdList(){
      return $this->_clear(7);
    }
    
    /**
     * Get <result_in_error_id_list> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getResultInErrorIdList(){
      return $this->_get(7);
    }
    
    /**
     * Set <result_in_error_id_list> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setResultInErrorIdList(\dstore\engine\values\booleanValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <result_in_error_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasResultInErrorIdListNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <result_in_error_id_list_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearResultInErrorIdListNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <result_in_error_id_list_null> value
     *
     * @return boolean
     */
    public function getResultInErrorIdListNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <result_in_error_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setResultInErrorIdListNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <value_ids_for_predefined_characs> has a value
     *
     * @return boolean
     */
    public function hasValueIdsForPredefinedCharacs(){
      return $this->_has(8);
    }
    
    /**
     * Clear <value_ids_for_predefined_characs> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearValueIdsForPredefinedCharacs(){
      return $this->_clear(8);
    }
    
    /**
     * Get <value_ids_for_predefined_characs> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getValueIdsForPredefinedCharacs(){
      return $this->_get(8);
    }
    
    /**
     * Set <value_ids_for_predefined_characs> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setValueIdsForPredefinedCharacs(\dstore\engine\values\booleanValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <value_ids_for_predefined_characs_null> has a value
     *
     * @return boolean
     */
    public function hasValueIdsForPredefinedCharacsNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <value_ids_for_predefined_characs_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearValueIdsForPredefinedCharacsNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <value_ids_for_predefined_characs_null> value
     *
     * @return boolean
     */
    public function getValueIdsForPredefinedCharacsNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <value_ids_for_predefined_characs_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setValueIdsForPredefinedCharacsNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <generate_password> has a value
     *
     * @return boolean
     */
    public function hasGeneratePassword(){
      return $this->_has(9);
    }
    
    /**
     * Clear <generate_password> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearGeneratePassword(){
      return $this->_clear(9);
    }
    
    /**
     * Get <generate_password> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGeneratePassword(){
      return $this->_get(9);
    }
    
    /**
     * Set <generate_password> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setGeneratePassword(\dstore\engine\values\booleanValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <generate_password_null> has a value
     *
     * @return boolean
     */
    public function hasGeneratePasswordNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <generate_password_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearGeneratePasswordNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <generate_password_null> value
     *
     * @return boolean
     */
    public function getGeneratePasswordNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <generate_password_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setGeneratePasswordNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <generate_customer_no> has a value
     *
     * @return boolean
     */
    public function hasGenerateCustomerNo(){
      return $this->_has(10);
    }
    
    /**
     * Clear <generate_customer_no> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearGenerateCustomerNo(){
      return $this->_clear(10);
    }
    
    /**
     * Get <generate_customer_no> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGenerateCustomerNo(){
      return $this->_get(10);
    }
    
    /**
     * Set <generate_customer_no> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setGenerateCustomerNo(\dstore\engine\values\booleanValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <generate_customer_no_null> has a value
     *
     * @return boolean
     */
    public function hasGenerateCustomerNoNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <generate_customer_no_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearGenerateCustomerNoNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <generate_customer_no_null> value
     *
     * @return boolean
     */
    public function getGenerateCustomerNoNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <generate_customer_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setGenerateCustomerNoNull( $value){
      return $this->_set(1010, $value);
    }
    
    /**
     * Check if <cancel_on_error> has a value
     *
     * @return boolean
     */
    public function hasCancelOnError(){
      return $this->_has(11);
    }
    
    /**
     * Clear <cancel_on_error> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearCancelOnError(){
      return $this->_clear(11);
    }
    
    /**
     * Get <cancel_on_error> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCancelOnError(){
      return $this->_get(11);
    }
    
    /**
     * Set <cancel_on_error> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setCancelOnError(\dstore\engine\values\booleanValue $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <cancel_on_error_null> has a value
     *
     * @return boolean
     */
    public function hasCancelOnErrorNull(){
      return $this->_has(1011);
    }
    
    /**
     * Clear <cancel_on_error_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearCancelOnErrorNull(){
      return $this->_clear(1011);
    }
    
    /**
     * Get <cancel_on_error_null> value
     *
     * @return boolean
     */
    public function getCancelOnErrorNull(){
      return $this->_get(1011);
    }
    
    /**
     * Set <cancel_on_error_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setCancelOnErrorNull( $value){
      return $this->_set(1011, $value);
    }
    
    /**
     * Check if <separator_in_lists> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInLists(){
      return $this->_has(12);
    }
    
    /**
     * Clear <separator_in_lists> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearSeparatorInLists(){
      return $this->_clear(12);
    }
    
    /**
     * Get <separator_in_lists> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSeparatorInLists(){
      return $this->_get(12);
    }
    
    /**
     * Set <separator_in_lists> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setSeparatorInLists(\dstore\engine\values\stringValue $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <separator_in_lists_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInListsNull(){
      return $this->_has(1012);
    }
    
    /**
     * Clear <separator_in_lists_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearSeparatorInListsNull(){
      return $this->_clear(1012);
    }
    
    /**
     * Get <separator_in_lists_null> value
     *
     * @return boolean
     */
    public function getSeparatorInListsNull(){
      return $this->_get(1012);
    }
    
    /**
     * Set <separator_in_lists_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setSeparatorInListsNull( $value){
      return $this->_set(1012, $value);
    }
    
    /**
     * Check if <update_visitor_persons> has a value
     *
     * @return boolean
     */
    public function hasUpdateVisitorPersons(){
      return $this->_has(13);
    }
    
    /**
     * Clear <update_visitor_persons> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearUpdateVisitorPersons(){
      return $this->_clear(13);
    }
    
    /**
     * Get <update_visitor_persons> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getUpdateVisitorPersons(){
      return $this->_get(13);
    }
    
    /**
     * Set <update_visitor_persons> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setUpdateVisitorPersons(\dstore\engine\values\booleanValue $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <update_visitor_persons_null> has a value
     *
     * @return boolean
     */
    public function hasUpdateVisitorPersonsNull(){
      return $this->_has(1013);
    }
    
    /**
     * Clear <update_visitor_persons_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearUpdateVisitorPersonsNull(){
      return $this->_clear(1013);
    }
    
    /**
     * Get <update_visitor_persons_null> value
     *
     * @return boolean
     */
    public function getUpdateVisitorPersonsNull(){
      return $this->_get(1013);
    }
    
    /**
     * Set <update_visitor_persons_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setUpdateVisitorPersonsNull( $value){
      return $this->_set(1013, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(14);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(14);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(14);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1014);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1014);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1014);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1014, $value);
    }
    
    /**
     * Check if <country> has a value
     *
     * @return boolean
     */
    public function hasCountry(){
      return $this->_has(15);
    }
    
    /**
     * Clear <country> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearCountry(){
      return $this->_clear(15);
    }
    
    /**
     * Get <country> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCountry(){
      return $this->_get(15);
    }
    
    /**
     * Set <country> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setCountry(\dstore\engine\values\stringValue $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <country_null> has a value
     *
     * @return boolean
     */
    public function hasCountryNull(){
      return $this->_has(1015);
    }
    
    /**
     * Clear <country_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function clearCountryNull(){
      return $this->_clear(1015);
    }
    
    /**
     * Get <country_null> value
     *
     * @return boolean
     */
    public function getCountryNull(){
      return $this->_get(1015);
    }
    
    /**
     * Set <country_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Pu\Parameters
     */
    public function setCountryNull( $value){
      return $this->_set(1015, $value);
    }
  }
}
