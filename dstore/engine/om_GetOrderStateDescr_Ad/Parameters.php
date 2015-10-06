<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetOrderStateDescr_Ad.proto
//   Date: 2015-10-06 11:19:58

namespace dstore\engine\om_GetOrderStateDescr_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $order_state_id = null;
    
    /**  @var boolean */
    public $order_state_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetOrderStateDescr_Ad.Parameters');

      // OPTIONAL MESSAGE order_state_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "order_state_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_state_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "order_state_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <order_state_id> has a value
     *
     * @return boolean
     */
    public function hasOrderStateId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <order_state_id> value
     *
     * @return \dstore\engine\om_GetOrderStateDescr_Ad\Parameters
     */
    public function clearOrderStateId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <order_state_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOrderStateId(){
      return $this->_get(1);
    }
    
    /**
     * Set <order_state_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetOrderStateDescr_Ad\Parameters
     */
    public function setOrderStateId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <order_state_id_null> has a value
     *
     * @return boolean
     */
    public function hasOrderStateIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <order_state_id_null> value
     *
     * @return \dstore\engine\om_GetOrderStateDescr_Ad\Parameters
     */
    public function clearOrderStateIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <order_state_id_null> value
     *
     * @return boolean
     */
    public function getOrderStateIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <order_state_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetOrderStateDescr_Ad\Parameters
     */
    public function setOrderStateIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\om_GetOrderStateDescr_Ad\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(2);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetOrderStateDescr_Ad\Parameters
     */
    public function setLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <language_id_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <language_id_null> value
     *
     * @return \dstore\engine\om_GetOrderStateDescr_Ad\Parameters
     */
    public function clearLanguageIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <language_id_null> value
     *
     * @return boolean
     */
    public function getLanguageIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <language_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetOrderStateDescr_Ad\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

