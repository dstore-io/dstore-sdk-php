<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetProcExecRestrForUsers_Ad.proto
//   Date: 2015-10-06 11:19:51

namespace dstore\engine\mi_GetProcExecRestrForUsers_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $procedure_id = null;
    
    /**  @var boolean */
    public $procedure_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $restriction_for_user_id = null;
    
    /**  @var boolean */
    public $restriction_for_user_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetProcExecRestrForUsers_Ad.Parameters');

      // OPTIONAL MESSAGE procedure_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "procedure_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL procedure_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "procedure_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE restriction_for_user_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "restriction_for_user_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL restriction_for_user_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "restriction_for_user_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <procedure_id> has a value
     *
     * @return boolean
     */
    public function hasProcedureId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <procedure_id> value
     *
     * @return \dstore\engine\mi_GetProcExecRestrForUsers_Ad\Parameters
     */
    public function clearProcedureId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <procedure_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getProcedureId(){
      return $this->_get(1);
    }
    
    /**
     * Set <procedure_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetProcExecRestrForUsers_Ad\Parameters
     */
    public function setProcedureId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <procedure_id_null> has a value
     *
     * @return boolean
     */
    public function hasProcedureIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <procedure_id_null> value
     *
     * @return \dstore\engine\mi_GetProcExecRestrForUsers_Ad\Parameters
     */
    public function clearProcedureIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <procedure_id_null> value
     *
     * @return boolean
     */
    public function getProcedureIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <procedure_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetProcExecRestrForUsers_Ad\Parameters
     */
    public function setProcedureIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <restriction_for_user_id> has a value
     *
     * @return boolean
     */
    public function hasRestrictionForUserId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <restriction_for_user_id> value
     *
     * @return \dstore\engine\mi_GetProcExecRestrForUsers_Ad\Parameters
     */
    public function clearRestrictionForUserId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <restriction_for_user_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRestrictionForUserId(){
      return $this->_get(2);
    }
    
    /**
     * Set <restriction_for_user_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetProcExecRestrForUsers_Ad\Parameters
     */
    public function setRestrictionForUserId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <restriction_for_user_id_null> has a value
     *
     * @return boolean
     */
    public function hasRestrictionForUserIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <restriction_for_user_id_null> value
     *
     * @return \dstore\engine\mi_GetProcExecRestrForUsers_Ad\Parameters
     */
    public function clearRestrictionForUserIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <restriction_for_user_id_null> value
     *
     * @return boolean
     */
    public function getRestrictionForUserIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <restriction_for_user_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetProcExecRestrForUsers_Ad\Parameters
     */
    public function setRestrictionForUserIdNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

