<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetProcResultConditions_Ad.proto
//   Date: 2015-10-06 11:19:43

namespace dstore\engine\do_GetProcResultConditions_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $condition_description = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $condition = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $procedure_result_condition_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $procedure_name = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $parameter_name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetProcResultConditions_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition_description = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "condition_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "condition";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_result_condition_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "procedure_result_condition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_name = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "procedure_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE parameter_name = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "parameter_name";
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
     * @return \dstore\engine\do_GetProcResultConditions_Ad\Response\Row
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
     * @return \dstore\engine\do_GetProcResultConditions_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <condition_description> has a value
     *
     * @return boolean
     */
    public function hasConditionDescription(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <condition_description> value
     *
     * @return \dstore\engine\do_GetProcResultConditions_Ad\Response\Row
     */
    public function clearConditionDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <condition_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getConditionDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <condition_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetProcResultConditions_Ad\Response\Row
     */
    public function setConditionDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <condition> has a value
     *
     * @return boolean
     */
    public function hasCondition(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <condition> value
     *
     * @return \dstore\engine\do_GetProcResultConditions_Ad\Response\Row
     */
    public function clearCondition(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <condition> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCondition(){
      return $this->_get(10002);
    }
    
    /**
     * Set <condition> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetProcResultConditions_Ad\Response\Row
     */
    public function setCondition(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <procedure_result_condition_id> has a value
     *
     * @return boolean
     */
    public function hasProcedureResultConditionId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <procedure_result_condition_id> value
     *
     * @return \dstore\engine\do_GetProcResultConditions_Ad\Response\Row
     */
    public function clearProcedureResultConditionId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <procedure_result_condition_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getProcedureResultConditionId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <procedure_result_condition_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\do_GetProcResultConditions_Ad\Response\Row
     */
    public function setProcedureResultConditionId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <procedure_name> has a value
     *
     * @return boolean
     */
    public function hasProcedureName(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <procedure_name> value
     *
     * @return \dstore\engine\do_GetProcResultConditions_Ad\Response\Row
     */
    public function clearProcedureName(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <procedure_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getProcedureName(){
      return $this->_get(10004);
    }
    
    /**
     * Set <procedure_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetProcResultConditions_Ad\Response\Row
     */
    public function setProcedureName(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <parameter_name> has a value
     *
     * @return boolean
     */
    public function hasParameterName(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <parameter_name> value
     *
     * @return \dstore\engine\do_GetProcResultConditions_Ad\Response\Row
     */
    public function clearParameterName(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <parameter_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getParameterName(){
      return $this->_get(10005);
    }
    
    /**
     * Set <parameter_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetProcResultConditions_Ad\Response\Row
     */
    public function setParameterName(\dstore\engine\values\stringValue $value){
      return $this->_set(10005, $value);
    }
  }
}

