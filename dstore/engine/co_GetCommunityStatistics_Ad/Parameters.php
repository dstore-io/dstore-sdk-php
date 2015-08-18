<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_GetCommunityStatistics_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\co_GetCommunityStatistics_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $community_id = null;
    
    /**  @var boolean */
    public $community_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $statistic_information_id_list = null;
    
    /**  @var boolean */
    public $statistic_information_id_list_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $from_date = null;
    
    /**  @var boolean */
    public $from_date_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $to_date = null;
    
    /**  @var boolean */
    public $to_date_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $calculate_sum = null;
    
    /**  @var boolean */
    public $calculate_sum_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_GetCommunityStatistics_Ad.Parameters');

      // OPTIONAL MESSAGE community_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "community_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL community_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "community_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE statistic_information_id_list = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "statistic_information_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL statistic_information_id_list_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "statistic_information_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_date = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "from_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_date_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "from_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_date = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "to_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_date_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "to_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE calculate_sum = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "calculate_sum";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL calculate_sum_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "calculate_sum_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <community_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <community_id> value
     *
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function clearCommunityId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <community_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCommunityId(){
      return $this->_get(1);
    }
    
    /**
     * Set <community_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function setCommunityId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <community_id_null> has a value
     *
     * @return boolean
     */
    public function hasCommunityIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <community_id_null> value
     *
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function clearCommunityIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <community_id_null> value
     *
     * @return boolean
     */
    public function getCommunityIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <community_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function setCommunityIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <statistic_information_id_list> has a value
     *
     * @return boolean
     */
    public function hasStatisticInformationIdList(){
      return $this->_has(2);
    }
    
    /**
     * Clear <statistic_information_id_list> value
     *
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function clearStatisticInformationIdList(){
      return $this->_clear(2);
    }
    
    /**
     * Get <statistic_information_id_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getStatisticInformationIdList(){
      return $this->_get(2);
    }
    
    /**
     * Set <statistic_information_id_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function setStatisticInformationIdList(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <statistic_information_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasStatisticInformationIdListNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <statistic_information_id_list_null> value
     *
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function clearStatisticInformationIdListNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <statistic_information_id_list_null> value
     *
     * @return boolean
     */
    public function getStatisticInformationIdListNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <statistic_information_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function setStatisticInformationIdListNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <from_date> has a value
     *
     * @return boolean
     */
    public function hasFromDate(){
      return $this->_has(3);
    }
    
    /**
     * Clear <from_date> value
     *
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function clearFromDate(){
      return $this->_clear(3);
    }
    
    /**
     * Get <from_date> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getFromDate(){
      return $this->_get(3);
    }
    
    /**
     * Set <from_date> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function setFromDate(\dstore\engine\values\timestampValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <from_date_null> has a value
     *
     * @return boolean
     */
    public function hasFromDateNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <from_date_null> value
     *
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function clearFromDateNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <from_date_null> value
     *
     * @return boolean
     */
    public function getFromDateNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <from_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function setFromDateNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <to_date> has a value
     *
     * @return boolean
     */
    public function hasToDate(){
      return $this->_has(4);
    }
    
    /**
     * Clear <to_date> value
     *
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function clearToDate(){
      return $this->_clear(4);
    }
    
    /**
     * Get <to_date> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getToDate(){
      return $this->_get(4);
    }
    
    /**
     * Set <to_date> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function setToDate(\dstore\engine\values\timestampValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <to_date_null> has a value
     *
     * @return boolean
     */
    public function hasToDateNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <to_date_null> value
     *
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function clearToDateNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <to_date_null> value
     *
     * @return boolean
     */
    public function getToDateNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <to_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function setToDateNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <calculate_sum> has a value
     *
     * @return boolean
     */
    public function hasCalculateSum(){
      return $this->_has(5);
    }
    
    /**
     * Clear <calculate_sum> value
     *
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function clearCalculateSum(){
      return $this->_clear(5);
    }
    
    /**
     * Get <calculate_sum> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCalculateSum(){
      return $this->_get(5);
    }
    
    /**
     * Set <calculate_sum> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function setCalculateSum(\dstore\engine\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <calculate_sum_null> has a value
     *
     * @return boolean
     */
    public function hasCalculateSumNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <calculate_sum_null> value
     *
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function clearCalculateSumNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <calculate_sum_null> value
     *
     * @return boolean
     */
    public function getCalculateSumNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <calculate_sum_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetCommunityStatistics_Ad\Parameters
     */
    public function setCalculateSumNull( $value){
      return $this->_set(1005, $value);
    }
  }
}
