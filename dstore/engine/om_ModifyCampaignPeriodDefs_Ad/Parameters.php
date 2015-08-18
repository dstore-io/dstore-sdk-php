<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyCampaignPeriodDefs_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\om_ModifyCampaignPeriodDefs_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $campaign_id = null;
    
    /**  @var boolean */
    public $campaign_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $period_definition_id = null;
    
    /**  @var boolean */
    public $period_definition_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $period_definition_name = null;
    
    /**  @var boolean */
    public $period_definition_name_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $start_date_and_time = null;
    
    /**  @var boolean */
    public $start_date_and_time_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $end_date_and_time = null;
    
    /**  @var boolean */
    public $end_date_and_time_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $repeat_every_x_time_units = null;
    
    /**  @var boolean */
    public $repeat_every_x_time_units_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $time_unit_id = null;
    
    /**  @var boolean */
    public $time_unit_id_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $repeat_until = null;
    
    /**  @var boolean */
    public $repeat_until_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_period_definition = null;
    
    /**  @var boolean */
    public $delete_period_definition_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyCampaignPeriodDefs_Ad.Parameters');

      // OPTIONAL MESSAGE campaign_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "campaign_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL campaign_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "campaign_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE period_definition_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "period_definition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL period_definition_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "period_definition_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE period_definition_name = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "period_definition_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL period_definition_name_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "period_definition_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE start_date_and_time = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "start_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL start_date_and_time_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "start_date_and_time_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE end_date_and_time = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "end_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL end_date_and_time_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "end_date_and_time_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE repeat_every_x_time_units = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "repeat_every_x_time_units";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL repeat_every_x_time_units_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "repeat_every_x_time_units_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE time_unit_id = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "time_unit_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL time_unit_id_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "time_unit_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE repeat_until = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "repeat_until";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL repeat_until_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "repeat_until_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_period_definition = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "delete_period_definition";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_period_definition_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "delete_period_definition_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <campaign_id> has a value
     *
     * @return boolean
     */
    public function hasCampaignId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <campaign_id> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearCampaignId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <campaign_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCampaignId(){
      return $this->_get(1);
    }
    
    /**
     * Set <campaign_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setCampaignId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <campaign_id_null> has a value
     *
     * @return boolean
     */
    public function hasCampaignIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <campaign_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearCampaignIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <campaign_id_null> value
     *
     * @return boolean
     */
    public function getCampaignIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <campaign_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setCampaignIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <period_definition_id> has a value
     *
     * @return boolean
     */
    public function hasPeriodDefinitionId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <period_definition_id> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearPeriodDefinitionId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <period_definition_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPeriodDefinitionId(){
      return $this->_get(2);
    }
    
    /**
     * Set <period_definition_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setPeriodDefinitionId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <period_definition_id_null> has a value
     *
     * @return boolean
     */
    public function hasPeriodDefinitionIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <period_definition_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearPeriodDefinitionIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <period_definition_id_null> value
     *
     * @return boolean
     */
    public function getPeriodDefinitionIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <period_definition_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setPeriodDefinitionIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <period_definition_name> has a value
     *
     * @return boolean
     */
    public function hasPeriodDefinitionName(){
      return $this->_has(3);
    }
    
    /**
     * Clear <period_definition_name> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearPeriodDefinitionName(){
      return $this->_clear(3);
    }
    
    /**
     * Get <period_definition_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPeriodDefinitionName(){
      return $this->_get(3);
    }
    
    /**
     * Set <period_definition_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setPeriodDefinitionName(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <period_definition_name_null> has a value
     *
     * @return boolean
     */
    public function hasPeriodDefinitionNameNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <period_definition_name_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearPeriodDefinitionNameNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <period_definition_name_null> value
     *
     * @return boolean
     */
    public function getPeriodDefinitionNameNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <period_definition_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setPeriodDefinitionNameNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <start_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasStartDateAndTime(){
      return $this->_has(4);
    }
    
    /**
     * Clear <start_date_and_time> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearStartDateAndTime(){
      return $this->_clear(4);
    }
    
    /**
     * Get <start_date_and_time> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getStartDateAndTime(){
      return $this->_get(4);
    }
    
    /**
     * Set <start_date_and_time> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setStartDateAndTime(\dstore\engine\values\timestampValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <start_date_and_time_null> has a value
     *
     * @return boolean
     */
    public function hasStartDateAndTimeNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <start_date_and_time_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearStartDateAndTimeNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <start_date_and_time_null> value
     *
     * @return boolean
     */
    public function getStartDateAndTimeNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <start_date_and_time_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setStartDateAndTimeNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <end_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasEndDateAndTime(){
      return $this->_has(5);
    }
    
    /**
     * Clear <end_date_and_time> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearEndDateAndTime(){
      return $this->_clear(5);
    }
    
    /**
     * Get <end_date_and_time> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getEndDateAndTime(){
      return $this->_get(5);
    }
    
    /**
     * Set <end_date_and_time> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setEndDateAndTime(\dstore\engine\values\timestampValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <end_date_and_time_null> has a value
     *
     * @return boolean
     */
    public function hasEndDateAndTimeNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <end_date_and_time_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearEndDateAndTimeNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <end_date_and_time_null> value
     *
     * @return boolean
     */
    public function getEndDateAndTimeNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <end_date_and_time_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setEndDateAndTimeNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <repeat_every_x_time_units> has a value
     *
     * @return boolean
     */
    public function hasRepeatEveryXTimeUnits(){
      return $this->_has(6);
    }
    
    /**
     * Clear <repeat_every_x_time_units> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearRepeatEveryXTimeUnits(){
      return $this->_clear(6);
    }
    
    /**
     * Get <repeat_every_x_time_units> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRepeatEveryXTimeUnits(){
      return $this->_get(6);
    }
    
    /**
     * Set <repeat_every_x_time_units> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setRepeatEveryXTimeUnits(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <repeat_every_x_time_units_null> has a value
     *
     * @return boolean
     */
    public function hasRepeatEveryXTimeUnitsNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <repeat_every_x_time_units_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearRepeatEveryXTimeUnitsNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <repeat_every_x_time_units_null> value
     *
     * @return boolean
     */
    public function getRepeatEveryXTimeUnitsNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <repeat_every_x_time_units_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setRepeatEveryXTimeUnitsNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <time_unit_id> has a value
     *
     * @return boolean
     */
    public function hasTimeUnitId(){
      return $this->_has(7);
    }
    
    /**
     * Clear <time_unit_id> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearTimeUnitId(){
      return $this->_clear(7);
    }
    
    /**
     * Get <time_unit_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTimeUnitId(){
      return $this->_get(7);
    }
    
    /**
     * Set <time_unit_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setTimeUnitId(\dstore\engine\values\integerValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <time_unit_id_null> has a value
     *
     * @return boolean
     */
    public function hasTimeUnitIdNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <time_unit_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearTimeUnitIdNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <time_unit_id_null> value
     *
     * @return boolean
     */
    public function getTimeUnitIdNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <time_unit_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setTimeUnitIdNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <repeat_until> has a value
     *
     * @return boolean
     */
    public function hasRepeatUntil(){
      return $this->_has(8);
    }
    
    /**
     * Clear <repeat_until> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearRepeatUntil(){
      return $this->_clear(8);
    }
    
    /**
     * Get <repeat_until> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getRepeatUntil(){
      return $this->_get(8);
    }
    
    /**
     * Set <repeat_until> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setRepeatUntil(\dstore\engine\values\timestampValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <repeat_until_null> has a value
     *
     * @return boolean
     */
    public function hasRepeatUntilNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <repeat_until_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearRepeatUntilNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <repeat_until_null> value
     *
     * @return boolean
     */
    public function getRepeatUntilNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <repeat_until_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setRepeatUntilNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <delete_period_definition> has a value
     *
     * @return boolean
     */
    public function hasDeletePeriodDefinition(){
      return $this->_has(9);
    }
    
    /**
     * Clear <delete_period_definition> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearDeletePeriodDefinition(){
      return $this->_clear(9);
    }
    
    /**
     * Get <delete_period_definition> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeletePeriodDefinition(){
      return $this->_get(9);
    }
    
    /**
     * Set <delete_period_definition> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setDeletePeriodDefinition(\dstore\engine\values\booleanValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <delete_period_definition_null> has a value
     *
     * @return boolean
     */
    public function hasDeletePeriodDefinitionNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <delete_period_definition_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function clearDeletePeriodDefinitionNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <delete_period_definition_null> value
     *
     * @return boolean
     */
    public function getDeletePeriodDefinitionNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <delete_period_definition_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignPeriodDefs_Ad\Parameters
     */
    public function setDeletePeriodDefinitionNull( $value){
      return $this->_set(1009, $value);
    }
  }
}
