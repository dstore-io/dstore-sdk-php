<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetProcExecRights_Group_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetProcExecRights_Group_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $group_name = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $execution_right = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $procedure_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $procedure_name = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $user_group_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetProcExecRights_Group_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE group_name = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "group_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE execution_right = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "execution_right";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "procedure_id";
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

      // OPTIONAL MESSAGE user_group_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "user_group_id";
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
     * @return \dstore\engine\mi_GetProcExecRights_Group_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetProcExecRights_Group_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <group_name> has a value
     *
     * @return boolean
     */
    public function hasGroupName(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <group_name> value
     *
     * @return \dstore\engine\mi_GetProcExecRights_Group_Ad\Response\Row
     */
    public function clearGroupName(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <group_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getGroupName(){
      return $this->_get(10001);
    }
    
    /**
     * Set <group_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetProcExecRights_Group_Ad\Response\Row
     */
    public function setGroupName(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <execution_right> has a value
     *
     * @return boolean
     */
    public function hasExecutionRight(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <execution_right> value
     *
     * @return \dstore\engine\mi_GetProcExecRights_Group_Ad\Response\Row
     */
    public function clearExecutionRight(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <execution_right> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getExecutionRight(){
      return $this->_get(10002);
    }
    
    /**
     * Set <execution_right> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetProcExecRights_Group_Ad\Response\Row
     */
    public function setExecutionRight(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <procedure_id> has a value
     *
     * @return boolean
     */
    public function hasProcedureId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <procedure_id> value
     *
     * @return \dstore\engine\mi_GetProcExecRights_Group_Ad\Response\Row
     */
    public function clearProcedureId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <procedure_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getProcedureId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <procedure_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetProcExecRights_Group_Ad\Response\Row
     */
    public function setProcedureId(\dstore\engine\values\integerValue $value){
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
     * @return \dstore\engine\mi_GetProcExecRights_Group_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetProcExecRights_Group_Ad\Response\Row
     */
    public function setProcedureName(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <user_group_id> has a value
     *
     * @return boolean
     */
    public function hasUserGroupId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <user_group_id> value
     *
     * @return \dstore\engine\mi_GetProcExecRights_Group_Ad\Response\Row
     */
    public function clearUserGroupId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <user_group_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getUserGroupId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <user_group_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetProcExecRights_Group_Ad\Response\Row
     */
    public function setUserGroupId(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
  }
}
