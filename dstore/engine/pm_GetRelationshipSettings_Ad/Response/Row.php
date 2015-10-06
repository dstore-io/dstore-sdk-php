<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetRelationshipSettings_Ad.proto
//   Date: 2015-10-06 11:20:07

namespace dstore\engine\pm_GetRelationshipSettings_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $to_person_type_description = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $from_person_type_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $relationship_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $from_person_type_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $relationship = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $key_variable = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $to_person_type_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetRelationshipSettings_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_person_type_description = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "to_person_type_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_person_type_description = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "from_person_type_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE relationship_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "relationship_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_person_type_id = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "from_person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE relationship = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "relationship";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE key_variable = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "key_variable";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_person_type_id = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "to_person_type_id";
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
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
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
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <to_person_type_description> has a value
     *
     * @return boolean
     */
    public function hasToPersonTypeDescription(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <to_person_type_description> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function clearToPersonTypeDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <to_person_type_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getToPersonTypeDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <to_person_type_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function setToPersonTypeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <from_person_type_description> has a value
     *
     * @return boolean
     */
    public function hasFromPersonTypeDescription(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <from_person_type_description> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function clearFromPersonTypeDescription(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <from_person_type_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFromPersonTypeDescription(){
      return $this->_get(10002);
    }
    
    /**
     * Set <from_person_type_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function setFromPersonTypeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <relationship_id> has a value
     *
     * @return boolean
     */
    public function hasRelationshipId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <relationship_id> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function clearRelationshipId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <relationship_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRelationshipId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <relationship_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function setRelationshipId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <from_person_type_id> has a value
     *
     * @return boolean
     */
    public function hasFromPersonTypeId(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <from_person_type_id> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function clearFromPersonTypeId(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <from_person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getFromPersonTypeId(){
      return $this->_get(10004);
    }
    
    /**
     * Set <from_person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function setFromPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <relationship> has a value
     *
     * @return boolean
     */
    public function hasRelationship(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <relationship> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function clearRelationship(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <relationship> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getRelationship(){
      return $this->_get(10005);
    }
    
    /**
     * Set <relationship> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function setRelationship(\dstore\engine\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(10006);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <key_variable> has a value
     *
     * @return boolean
     */
    public function hasKeyVariable(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <key_variable> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function clearKeyVariable(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <key_variable> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getKeyVariable(){
      return $this->_get(10007);
    }
    
    /**
     * Set <key_variable> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function setKeyVariable(\dstore\engine\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <to_person_type_id> has a value
     *
     * @return boolean
     */
    public function hasToPersonTypeId(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <to_person_type_id> value
     *
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function clearToPersonTypeId(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <to_person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getToPersonTypeId(){
      return $this->_get(10008);
    }
    
    /**
     * Set <to_person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetRelationshipSettings_Ad\Response\Row
     */
    public function setToPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10008, $value);
    }
  }
}

