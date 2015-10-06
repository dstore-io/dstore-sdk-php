<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_DeleteCommunityBinary_Ad.proto
//   Date: 2015-10-06 11:19:42

namespace dstore\engine\co_DeleteCommunityBinary_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $binary_id = null;
    
    /**  @var boolean */
    public $binary_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_DeleteCommunityBinary_Ad.Parameters');

      // OPTIONAL MESSAGE binary_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "binary_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL binary_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "binary_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <binary_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <binary_id> value
     *
     * @return \dstore\engine\co_DeleteCommunityBinary_Ad\Parameters
     */
    public function clearBinaryId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <binary_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBinaryId(){
      return $this->_get(1);
    }
    
    /**
     * Set <binary_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\co_DeleteCommunityBinary_Ad\Parameters
     */
    public function setBinaryId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <binary_id_null> has a value
     *
     * @return boolean
     */
    public function hasBinaryIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <binary_id_null> value
     *
     * @return \dstore\engine\co_DeleteCommunityBinary_Ad\Parameters
     */
    public function clearBinaryIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <binary_id_null> value
     *
     * @return boolean
     */
    public function getBinaryIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <binary_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_DeleteCommunityBinary_Ad\Parameters
     */
    public function setBinaryIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

