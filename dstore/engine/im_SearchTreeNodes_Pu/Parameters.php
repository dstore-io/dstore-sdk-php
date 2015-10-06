<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_SearchTreeNodes_Pu.proto
//   Date: 2015-10-06 11:19:49

namespace dstore\engine\im_SearchTreeNodes_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $level_id = null;
    
    /**  @var boolean */
    public $level_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $domain_tree_node_id = null;
    
    /**  @var boolean */
    public $domain_tree_node_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $start_at_row_no = null;
    
    /**  @var boolean */
    public $start_at_row_no_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $row_count = null;
    
    /**  @var boolean */
    public $row_count_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $country = null;
    
    /**  @var boolean */
    public $country_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $binary_characteristic_value_id = null;
    
    /**  @var boolean */
    public $binary_characteristic_value_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $sort_by_characteristic_id_list = null;
    
    /**  @var boolean */
    public $sort_by_characteristic_id_list_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $sort_option_list = null;
    
    /**  @var boolean */
    public $sort_option_list_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $inherit_depth_option_list = null;
    
    /**  @var boolean */
    public $inherit_depth_option_list_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $recursive_evaluation_option_list = null;
    
    /**  @var boolean */
    public $recursive_evaluation_option_list_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_values_for_sort_by_characs = null;
    
    /**  @var boolean */
    public $get_values_for_sort_by_characs_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $output_into_one_id = null;
    
    /**  @var boolean */
    public $output_into_one_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $filter_tree_nodes_in_one_id = null;
    
    /**  @var boolean */
    public $filter_tree_nodes_in_one_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_SearchTreeNodes_Pu.Parameters');

      // OPTIONAL MESSAGE level_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "level_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL level_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "level_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE domain_tree_node_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "domain_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL domain_tree_node_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "domain_tree_node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE start_at_row_no = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "start_at_row_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL start_at_row_no_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "start_at_row_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE row_count = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "row_count";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL row_count_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "row_count_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE country = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "country";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL country_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "country_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_characteristic_value_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "binary_characteristic_value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL binary_characteristic_value_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "binary_characteristic_value_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_by_characteristic_id_list = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "sort_by_characteristic_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sort_by_characteristic_id_list_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "sort_by_characteristic_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_option_list = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "sort_option_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sort_option_list_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "sort_option_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE inherit_depth_option_list = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "inherit_depth_option_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL inherit_depth_option_list_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "inherit_depth_option_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE recursive_evaluation_option_list = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "recursive_evaluation_option_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL recursive_evaluation_option_list_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "recursive_evaluation_option_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_values_for_sort_by_characs = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "get_values_for_sort_by_characs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_values_for_sort_by_characs_null = 1011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1011;
      $f->name      = "get_values_for_sort_by_characs_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE output_into_one_id = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "output_into_one_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL output_into_one_id_null = 1012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1012;
      $f->name      = "output_into_one_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE filter_tree_nodes_in_one_id = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "filter_tree_nodes_in_one_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL filter_tree_nodes_in_one_id_null = 1013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1013;
      $f->name      = "filter_tree_nodes_in_one_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <level_id> has a value
     *
     * @return boolean
     */
    public function hasLevelId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <level_id> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearLevelId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <level_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLevelId(){
      return $this->_get(1);
    }
    
    /**
     * Set <level_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setLevelId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <level_id_null> has a value
     *
     * @return boolean
     */
    public function hasLevelIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <level_id_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearLevelIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <level_id_null> value
     *
     * @return boolean
     */
    public function getLevelIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <level_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setLevelIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <domain_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasDomainTreeNodeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <domain_tree_node_id> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearDomainTreeNodeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <domain_tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getDomainTreeNodeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <domain_tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setDomainTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <domain_tree_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasDomainTreeNodeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <domain_tree_node_id_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearDomainTreeNodeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <domain_tree_node_id_null> value
     *
     * @return boolean
     */
    public function getDomainTreeNodeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <domain_tree_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setDomainTreeNodeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <start_at_row_no> has a value
     *
     * @return boolean
     */
    public function hasStartAtRowNo(){
      return $this->_has(3);
    }
    
    /**
     * Clear <start_at_row_no> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearStartAtRowNo(){
      return $this->_clear(3);
    }
    
    /**
     * Get <start_at_row_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getStartAtRowNo(){
      return $this->_get(3);
    }
    
    /**
     * Set <start_at_row_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setStartAtRowNo(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <start_at_row_no_null> has a value
     *
     * @return boolean
     */
    public function hasStartAtRowNoNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <start_at_row_no_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearStartAtRowNoNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <start_at_row_no_null> value
     *
     * @return boolean
     */
    public function getStartAtRowNoNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <start_at_row_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setStartAtRowNoNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <row_count> has a value
     *
     * @return boolean
     */
    public function hasRowCount(){
      return $this->_has(4);
    }
    
    /**
     * Clear <row_count> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearRowCount(){
      return $this->_clear(4);
    }
    
    /**
     * Get <row_count> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRowCount(){
      return $this->_get(4);
    }
    
    /**
     * Set <row_count> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setRowCount(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <row_count_null> has a value
     *
     * @return boolean
     */
    public function hasRowCountNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <row_count_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearRowCountNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <row_count_null> value
     *
     * @return boolean
     */
    public function getRowCountNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <row_count_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setRowCountNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <country> has a value
     *
     * @return boolean
     */
    public function hasCountry(){
      return $this->_has(5);
    }
    
    /**
     * Clear <country> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearCountry(){
      return $this->_clear(5);
    }
    
    /**
     * Get <country> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCountry(){
      return $this->_get(5);
    }
    
    /**
     * Set <country> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setCountry(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <country_null> has a value
     *
     * @return boolean
     */
    public function hasCountryNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <country_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearCountryNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <country_null> value
     *
     * @return boolean
     */
    public function getCountryNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <country_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setCountryNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <binary_characteristic_value_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryCharacteristicValueId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <binary_characteristic_value_id> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearBinaryCharacteristicValueId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <binary_characteristic_value_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBinaryCharacteristicValueId(){
      return $this->_get(6);
    }
    
    /**
     * Set <binary_characteristic_value_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setBinaryCharacteristicValueId(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <binary_characteristic_value_id_null> has a value
     *
     * @return boolean
     */
    public function hasBinaryCharacteristicValueIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <binary_characteristic_value_id_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearBinaryCharacteristicValueIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <binary_characteristic_value_id_null> value
     *
     * @return boolean
     */
    public function getBinaryCharacteristicValueIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <binary_characteristic_value_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setBinaryCharacteristicValueIdNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <sort_by_characteristic_id_list> has a value
     *
     * @return boolean
     */
    public function hasSortByCharacteristicIdList(){
      return $this->_has(7);
    }
    
    /**
     * Clear <sort_by_characteristic_id_list> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearSortByCharacteristicIdList(){
      return $this->_clear(7);
    }
    
    /**
     * Get <sort_by_characteristic_id_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSortByCharacteristicIdList(){
      return $this->_get(7);
    }
    
    /**
     * Set <sort_by_characteristic_id_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setSortByCharacteristicIdList(\dstore\engine\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <sort_by_characteristic_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasSortByCharacteristicIdListNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <sort_by_characteristic_id_list_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearSortByCharacteristicIdListNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <sort_by_characteristic_id_list_null> value
     *
     * @return boolean
     */
    public function getSortByCharacteristicIdListNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <sort_by_characteristic_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setSortByCharacteristicIdListNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <sort_option_list> has a value
     *
     * @return boolean
     */
    public function hasSortOptionList(){
      return $this->_has(8);
    }
    
    /**
     * Clear <sort_option_list> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearSortOptionList(){
      return $this->_clear(8);
    }
    
    /**
     * Get <sort_option_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSortOptionList(){
      return $this->_get(8);
    }
    
    /**
     * Set <sort_option_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setSortOptionList(\dstore\engine\values\stringValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <sort_option_list_null> has a value
     *
     * @return boolean
     */
    public function hasSortOptionListNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <sort_option_list_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearSortOptionListNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <sort_option_list_null> value
     *
     * @return boolean
     */
    public function getSortOptionListNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <sort_option_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setSortOptionListNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <inherit_depth_option_list> has a value
     *
     * @return boolean
     */
    public function hasInheritDepthOptionList(){
      return $this->_has(9);
    }
    
    /**
     * Clear <inherit_depth_option_list> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearInheritDepthOptionList(){
      return $this->_clear(9);
    }
    
    /**
     * Get <inherit_depth_option_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getInheritDepthOptionList(){
      return $this->_get(9);
    }
    
    /**
     * Set <inherit_depth_option_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setInheritDepthOptionList(\dstore\engine\values\stringValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <inherit_depth_option_list_null> has a value
     *
     * @return boolean
     */
    public function hasInheritDepthOptionListNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <inherit_depth_option_list_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearInheritDepthOptionListNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <inherit_depth_option_list_null> value
     *
     * @return boolean
     */
    public function getInheritDepthOptionListNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <inherit_depth_option_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setInheritDepthOptionListNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <recursive_evaluation_option_list> has a value
     *
     * @return boolean
     */
    public function hasRecursiveEvaluationOptionList(){
      return $this->_has(10);
    }
    
    /**
     * Clear <recursive_evaluation_option_list> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearRecursiveEvaluationOptionList(){
      return $this->_clear(10);
    }
    
    /**
     * Get <recursive_evaluation_option_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getRecursiveEvaluationOptionList(){
      return $this->_get(10);
    }
    
    /**
     * Set <recursive_evaluation_option_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setRecursiveEvaluationOptionList(\dstore\engine\values\stringValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <recursive_evaluation_option_list_null> has a value
     *
     * @return boolean
     */
    public function hasRecursiveEvaluationOptionListNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <recursive_evaluation_option_list_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearRecursiveEvaluationOptionListNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <recursive_evaluation_option_list_null> value
     *
     * @return boolean
     */
    public function getRecursiveEvaluationOptionListNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <recursive_evaluation_option_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setRecursiveEvaluationOptionListNull( $value){
      return $this->_set(1010, $value);
    }
    
    /**
     * Check if <get_values_for_sort_by_characs> has a value
     *
     * @return boolean
     */
    public function hasGetValuesForSortByCharacs(){
      return $this->_has(11);
    }
    
    /**
     * Clear <get_values_for_sort_by_characs> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearGetValuesForSortByCharacs(){
      return $this->_clear(11);
    }
    
    /**
     * Get <get_values_for_sort_by_characs> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetValuesForSortByCharacs(){
      return $this->_get(11);
    }
    
    /**
     * Set <get_values_for_sort_by_characs> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setGetValuesForSortByCharacs(\dstore\engine\values\booleanValue $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <get_values_for_sort_by_characs_null> has a value
     *
     * @return boolean
     */
    public function hasGetValuesForSortByCharacsNull(){
      return $this->_has(1011);
    }
    
    /**
     * Clear <get_values_for_sort_by_characs_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearGetValuesForSortByCharacsNull(){
      return $this->_clear(1011);
    }
    
    /**
     * Get <get_values_for_sort_by_characs_null> value
     *
     * @return boolean
     */
    public function getGetValuesForSortByCharacsNull(){
      return $this->_get(1011);
    }
    
    /**
     * Set <get_values_for_sort_by_characs_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setGetValuesForSortByCharacsNull( $value){
      return $this->_set(1011, $value);
    }
    
    /**
     * Check if <output_into_one_id> has a value
     *
     * @return boolean
     */
    public function hasOutputIntoOneId(){
      return $this->_has(12);
    }
    
    /**
     * Clear <output_into_one_id> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearOutputIntoOneId(){
      return $this->_clear(12);
    }
    
    /**
     * Get <output_into_one_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOutputIntoOneId(){
      return $this->_get(12);
    }
    
    /**
     * Set <output_into_one_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setOutputIntoOneId(\dstore\engine\values\integerValue $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <output_into_one_id_null> has a value
     *
     * @return boolean
     */
    public function hasOutputIntoOneIdNull(){
      return $this->_has(1012);
    }
    
    /**
     * Clear <output_into_one_id_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearOutputIntoOneIdNull(){
      return $this->_clear(1012);
    }
    
    /**
     * Get <output_into_one_id_null> value
     *
     * @return boolean
     */
    public function getOutputIntoOneIdNull(){
      return $this->_get(1012);
    }
    
    /**
     * Set <output_into_one_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setOutputIntoOneIdNull( $value){
      return $this->_set(1012, $value);
    }
    
    /**
     * Check if <filter_tree_nodes_in_one_id> has a value
     *
     * @return boolean
     */
    public function hasFilterTreeNodesInOneId(){
      return $this->_has(13);
    }
    
    /**
     * Clear <filter_tree_nodes_in_one_id> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearFilterTreeNodesInOneId(){
      return $this->_clear(13);
    }
    
    /**
     * Get <filter_tree_nodes_in_one_id> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getFilterTreeNodesInOneId(){
      return $this->_get(13);
    }
    
    /**
     * Set <filter_tree_nodes_in_one_id> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setFilterTreeNodesInOneId(\dstore\engine\values\booleanValue $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <filter_tree_nodes_in_one_id_null> has a value
     *
     * @return boolean
     */
    public function hasFilterTreeNodesInOneIdNull(){
      return $this->_has(1013);
    }
    
    /**
     * Clear <filter_tree_nodes_in_one_id_null> value
     *
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function clearFilterTreeNodesInOneIdNull(){
      return $this->_clear(1013);
    }
    
    /**
     * Get <filter_tree_nodes_in_one_id_null> value
     *
     * @return boolean
     */
    public function getFilterTreeNodesInOneIdNull(){
      return $this->_get(1013);
    }
    
    /**
     * Set <filter_tree_nodes_in_one_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SearchTreeNodes_Pu\Parameters
     */
    public function setFilterTreeNodesInOneIdNull( $value){
      return $this->_set(1013, $value);
    }
  }
}

