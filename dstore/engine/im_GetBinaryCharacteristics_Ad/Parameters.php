<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetBinaryCharacteristics_Ad.proto
//   Date: 2015-10-06 11:19:46

namespace dstore\engine\im_GetBinaryCharacteristics_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $binary_characteristic_id = null;
    
    /**  @var boolean */
    public $binary_characteristic_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetBinaryCharacteristics_Ad.Parameters');

      // OPTIONAL MESSAGE binary_characteristic_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "binary_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL binary_characteristic_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "binary_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <binary_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryCharacteristicId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <binary_characteristic_id> value
     *
     * @return \dstore\engine\im_GetBinaryCharacteristics_Ad\Parameters
     */
    public function clearBinaryCharacteristicId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <binary_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBinaryCharacteristicId(){
      return $this->_get(1);
    }
    
    /**
     * Set <binary_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetBinaryCharacteristics_Ad\Parameters
     */
    public function setBinaryCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <binary_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasBinaryCharacteristicIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <binary_characteristic_id_null> value
     *
     * @return \dstore\engine\im_GetBinaryCharacteristics_Ad\Parameters
     */
    public function clearBinaryCharacteristicIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <binary_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getBinaryCharacteristicIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <binary_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetBinaryCharacteristics_Ad\Parameters
     */
    public function setBinaryCharacteristicIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

