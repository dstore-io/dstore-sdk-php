<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_ModifyInformationTypes_Ad.proto
//   Date: 2015-10-06 11:19:53

namespace dstore\engine\mi_ModifyInformationTypes_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $information_type_id = null;
    
    /**  @var boolean */
    public $information_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $information_type = null;
    
    /**  @var boolean */
    public $information_type_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_ModifyInformationTypes_Ad.Parameters');

      // OPTIONAL MESSAGE information_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "information_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "information_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_type_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "information_type_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <information_type_id> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <information_type_id> value
     *
     * @return \dstore\engine\mi_ModifyInformationTypes_Ad\Parameters
     */
    public function clearInformationTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_ModifyInformationTypes_Ad\Parameters
     */
    public function setInformationTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <information_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <information_type_id_null> value
     *
     * @return \dstore\engine\mi_ModifyInformationTypes_Ad\Parameters
     */
    public function clearInformationTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <information_type_id_null> value
     *
     * @return boolean
     */
    public function getInformationTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <information_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyInformationTypes_Ad\Parameters
     */
    public function setInformationTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <information_type> has a value
     *
     * @return boolean
     */
    public function hasInformationType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <information_type> value
     *
     * @return \dstore\engine\mi_ModifyInformationTypes_Ad\Parameters
     */
    public function clearInformationType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <information_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getInformationType(){
      return $this->_get(2);
    }
    
    /**
     * Set <information_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_ModifyInformationTypes_Ad\Parameters
     */
    public function setInformationType(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <information_type_null> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <information_type_null> value
     *
     * @return \dstore\engine\mi_ModifyInformationTypes_Ad\Parameters
     */
    public function clearInformationTypeNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <information_type_null> value
     *
     * @return boolean
     */
    public function getInformationTypeNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <information_type_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyInformationTypes_Ad\Parameters
     */
    public function setInformationTypeNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

