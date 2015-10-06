<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetTabsRefInOtherTabs_Ad.proto
//   Date: 2015-10-06 11:19:52

namespace dstore\engine\mi_GetTabsRefInOtherTabs_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $table_id = null;
    
    /**  @var boolean */
    public $table_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $used_in_search_items = null;
    
    /**  @var boolean */
    public $used_in_search_items_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $used_in_search_item_lacks = null;
    
    /**  @var boolean */
    public $used_in_search_item_lacks_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $used_in_rating_values = null;
    
    /**  @var boolean */
    public $used_in_rating_values_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $used_in_rating_subjects = null;
    
    /**  @var boolean */
    public $used_in_rating_subjects_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $used_in_meta_information_types = null;
    
    /**  @var boolean */
    public $used_in_meta_information_types_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $used_in_person_charac_value_refs = null;
    
    /**  @var boolean */
    public $used_in_person_charac_value_refs_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $used_in_predefined_bill_content = null;
    
    /**  @var boolean */
    public $used_in_predefined_bill_content_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $used_in_cash_acc_transactions = null;
    
    /**  @var boolean */
    public $used_in_cash_acc_transactions_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetTabsRefInOtherTabs_Ad.Parameters');

      // OPTIONAL MESSAGE table_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "table_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL table_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "table_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_search_items = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "used_in_search_items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL used_in_search_items_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "used_in_search_items_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_search_item_lacks = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "used_in_search_item_lacks";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL used_in_search_item_lacks_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "used_in_search_item_lacks_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_rating_values = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "used_in_rating_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL used_in_rating_values_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "used_in_rating_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_rating_subjects = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "used_in_rating_subjects";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL used_in_rating_subjects_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "used_in_rating_subjects_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_meta_information_types = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "used_in_meta_information_types";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL used_in_meta_information_types_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "used_in_meta_information_types_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_person_charac_value_refs = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "used_in_person_charac_value_refs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL used_in_person_charac_value_refs_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "used_in_person_charac_value_refs_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_predefined_bill_content = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "used_in_predefined_bill_content";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL used_in_predefined_bill_content_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "used_in_predefined_bill_content_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_cash_acc_transactions = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "used_in_cash_acc_transactions";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL used_in_cash_acc_transactions_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "used_in_cash_acc_transactions_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <table_id> has a value
     *
     * @return boolean
     */
    public function hasTableId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <table_id> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearTableId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <table_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTableId(){
      return $this->_get(1);
    }
    
    /**
     * Set <table_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setTableId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <table_id_null> has a value
     *
     * @return boolean
     */
    public function hasTableIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <table_id_null> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearTableIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <table_id_null> value
     *
     * @return boolean
     */
    public function getTableIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <table_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setTableIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <used_in_search_items> has a value
     *
     * @return boolean
     */
    public function hasUsedInSearchItems(){
      return $this->_has(2);
    }
    
    /**
     * Clear <used_in_search_items> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInSearchItems(){
      return $this->_clear(2);
    }
    
    /**
     * Get <used_in_search_items> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUsedInSearchItems(){
      return $this->_get(2);
    }
    
    /**
     * Set <used_in_search_items> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInSearchItems(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <used_in_search_items_null> has a value
     *
     * @return boolean
     */
    public function hasUsedInSearchItemsNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <used_in_search_items_null> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInSearchItemsNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <used_in_search_items_null> value
     *
     * @return boolean
     */
    public function getUsedInSearchItemsNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <used_in_search_items_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInSearchItemsNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <used_in_search_item_lacks> has a value
     *
     * @return boolean
     */
    public function hasUsedInSearchItemLacks(){
      return $this->_has(3);
    }
    
    /**
     * Clear <used_in_search_item_lacks> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInSearchItemLacks(){
      return $this->_clear(3);
    }
    
    /**
     * Get <used_in_search_item_lacks> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUsedInSearchItemLacks(){
      return $this->_get(3);
    }
    
    /**
     * Set <used_in_search_item_lacks> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInSearchItemLacks(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <used_in_search_item_lacks_null> has a value
     *
     * @return boolean
     */
    public function hasUsedInSearchItemLacksNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <used_in_search_item_lacks_null> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInSearchItemLacksNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <used_in_search_item_lacks_null> value
     *
     * @return boolean
     */
    public function getUsedInSearchItemLacksNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <used_in_search_item_lacks_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInSearchItemLacksNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <used_in_rating_values> has a value
     *
     * @return boolean
     */
    public function hasUsedInRatingValues(){
      return $this->_has(4);
    }
    
    /**
     * Clear <used_in_rating_values> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInRatingValues(){
      return $this->_clear(4);
    }
    
    /**
     * Get <used_in_rating_values> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUsedInRatingValues(){
      return $this->_get(4);
    }
    
    /**
     * Set <used_in_rating_values> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInRatingValues(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <used_in_rating_values_null> has a value
     *
     * @return boolean
     */
    public function hasUsedInRatingValuesNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <used_in_rating_values_null> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInRatingValuesNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <used_in_rating_values_null> value
     *
     * @return boolean
     */
    public function getUsedInRatingValuesNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <used_in_rating_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInRatingValuesNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <used_in_rating_subjects> has a value
     *
     * @return boolean
     */
    public function hasUsedInRatingSubjects(){
      return $this->_has(5);
    }
    
    /**
     * Clear <used_in_rating_subjects> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInRatingSubjects(){
      return $this->_clear(5);
    }
    
    /**
     * Get <used_in_rating_subjects> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUsedInRatingSubjects(){
      return $this->_get(5);
    }
    
    /**
     * Set <used_in_rating_subjects> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInRatingSubjects(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <used_in_rating_subjects_null> has a value
     *
     * @return boolean
     */
    public function hasUsedInRatingSubjectsNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <used_in_rating_subjects_null> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInRatingSubjectsNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <used_in_rating_subjects_null> value
     *
     * @return boolean
     */
    public function getUsedInRatingSubjectsNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <used_in_rating_subjects_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInRatingSubjectsNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <used_in_meta_information_types> has a value
     *
     * @return boolean
     */
    public function hasUsedInMetaInformationTypes(){
      return $this->_has(6);
    }
    
    /**
     * Clear <used_in_meta_information_types> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInMetaInformationTypes(){
      return $this->_clear(6);
    }
    
    /**
     * Get <used_in_meta_information_types> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUsedInMetaInformationTypes(){
      return $this->_get(6);
    }
    
    /**
     * Set <used_in_meta_information_types> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInMetaInformationTypes(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <used_in_meta_information_types_null> has a value
     *
     * @return boolean
     */
    public function hasUsedInMetaInformationTypesNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <used_in_meta_information_types_null> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInMetaInformationTypesNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <used_in_meta_information_types_null> value
     *
     * @return boolean
     */
    public function getUsedInMetaInformationTypesNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <used_in_meta_information_types_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInMetaInformationTypesNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <used_in_person_charac_value_refs> has a value
     *
     * @return boolean
     */
    public function hasUsedInPersonCharacValueRefs(){
      return $this->_has(7);
    }
    
    /**
     * Clear <used_in_person_charac_value_refs> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInPersonCharacValueRefs(){
      return $this->_clear(7);
    }
    
    /**
     * Get <used_in_person_charac_value_refs> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUsedInPersonCharacValueRefs(){
      return $this->_get(7);
    }
    
    /**
     * Set <used_in_person_charac_value_refs> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInPersonCharacValueRefs(\dstore\engine\values\integerValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <used_in_person_charac_value_refs_null> has a value
     *
     * @return boolean
     */
    public function hasUsedInPersonCharacValueRefsNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <used_in_person_charac_value_refs_null> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInPersonCharacValueRefsNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <used_in_person_charac_value_refs_null> value
     *
     * @return boolean
     */
    public function getUsedInPersonCharacValueRefsNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <used_in_person_charac_value_refs_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInPersonCharacValueRefsNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <used_in_predefined_bill_content> has a value
     *
     * @return boolean
     */
    public function hasUsedInPredefinedBillContent(){
      return $this->_has(8);
    }
    
    /**
     * Clear <used_in_predefined_bill_content> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInPredefinedBillContent(){
      return $this->_clear(8);
    }
    
    /**
     * Get <used_in_predefined_bill_content> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUsedInPredefinedBillContent(){
      return $this->_get(8);
    }
    
    /**
     * Set <used_in_predefined_bill_content> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInPredefinedBillContent(\dstore\engine\values\integerValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <used_in_predefined_bill_content_null> has a value
     *
     * @return boolean
     */
    public function hasUsedInPredefinedBillContentNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <used_in_predefined_bill_content_null> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInPredefinedBillContentNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <used_in_predefined_bill_content_null> value
     *
     * @return boolean
     */
    public function getUsedInPredefinedBillContentNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <used_in_predefined_bill_content_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInPredefinedBillContentNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <used_in_cash_acc_transactions> has a value
     *
     * @return boolean
     */
    public function hasUsedInCashAccTransactions(){
      return $this->_has(9);
    }
    
    /**
     * Clear <used_in_cash_acc_transactions> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInCashAccTransactions(){
      return $this->_clear(9);
    }
    
    /**
     * Get <used_in_cash_acc_transactions> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUsedInCashAccTransactions(){
      return $this->_get(9);
    }
    
    /**
     * Set <used_in_cash_acc_transactions> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInCashAccTransactions(\dstore\engine\values\integerValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <used_in_cash_acc_transactions_null> has a value
     *
     * @return boolean
     */
    public function hasUsedInCashAccTransactionsNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <used_in_cash_acc_transactions_null> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function clearUsedInCashAccTransactionsNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <used_in_cash_acc_transactions_null> value
     *
     * @return boolean
     */
    public function getUsedInCashAccTransactionsNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <used_in_cash_acc_transactions_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Parameters
     */
    public function setUsedInCashAccTransactionsNull( $value){
      return $this->_set(1009, $value);
    }
  }
}

