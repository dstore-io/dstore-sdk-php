<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCampPaymentTypeConds_Ad.proto
//   Date: 2015-10-06 11:19:56

namespace dstore\engine\om_GetCampPaymentTypeConds_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $condition_id = null;
    
    /**  @var boolean */
    public $condition_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCampPaymentTypeConds_Ad.Parameters');

      // OPTIONAL MESSAGE condition_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "condition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL condition_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "condition_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <condition_id> has a value
     *
     * @return boolean
     */
    public function hasConditionId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <condition_id> value
     *
     * @return \dstore\engine\om_GetCampPaymentTypeConds_Ad\Parameters
     */
    public function clearConditionId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <condition_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getConditionId(){
      return $this->_get(1);
    }
    
    /**
     * Set <condition_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampPaymentTypeConds_Ad\Parameters
     */
    public function setConditionId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <condition_id_null> has a value
     *
     * @return boolean
     */
    public function hasConditionIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <condition_id_null> value
     *
     * @return \dstore\engine\om_GetCampPaymentTypeConds_Ad\Parameters
     */
    public function clearConditionIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <condition_id_null> value
     *
     * @return boolean
     */
    public function getConditionIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <condition_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCampPaymentTypeConds_Ad\Parameters
     */
    public function setConditionIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

