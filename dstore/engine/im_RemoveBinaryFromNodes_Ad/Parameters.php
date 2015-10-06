<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_RemoveBinaryFromNodes_Ad.proto
//   Date: 2015-10-06 11:19:49

namespace dstore\engine\im_RemoveBinaryFromNodes_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $binary_code_id = null;
    
    /**  @var boolean */
    public $binary_code_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $node_ids = null;
    
    /**  @var boolean */
    public $node_ids_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_RemoveBinaryFromNodes_Ad.Parameters');

      // OPTIONAL MESSAGE binary_code_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "binary_code_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL binary_code_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "binary_code_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_ids = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "node_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL node_ids_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "node_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <binary_code_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryCodeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <binary_code_id> value
     *
     * @return \dstore\engine\im_RemoveBinaryFromNodes_Ad\Parameters
     */
    public function clearBinaryCodeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <binary_code_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBinaryCodeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <binary_code_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_RemoveBinaryFromNodes_Ad\Parameters
     */
    public function setBinaryCodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <binary_code_id_null> has a value
     *
     * @return boolean
     */
    public function hasBinaryCodeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <binary_code_id_null> value
     *
     * @return \dstore\engine\im_RemoveBinaryFromNodes_Ad\Parameters
     */
    public function clearBinaryCodeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <binary_code_id_null> value
     *
     * @return boolean
     */
    public function getBinaryCodeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <binary_code_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_RemoveBinaryFromNodes_Ad\Parameters
     */
    public function setBinaryCodeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <node_ids> has a value
     *
     * @return boolean
     */
    public function hasNodeIds(){
      return $this->_has(2);
    }
    
    /**
     * Clear <node_ids> value
     *
     * @return \dstore\engine\im_RemoveBinaryFromNodes_Ad\Parameters
     */
    public function clearNodeIds(){
      return $this->_clear(2);
    }
    
    /**
     * Get <node_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getNodeIds(){
      return $this->_get(2);
    }
    
    /**
     * Set <node_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_RemoveBinaryFromNodes_Ad\Parameters
     */
    public function setNodeIds(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <node_ids_null> has a value
     *
     * @return boolean
     */
    public function hasNodeIdsNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <node_ids_null> value
     *
     * @return \dstore\engine\im_RemoveBinaryFromNodes_Ad\Parameters
     */
    public function clearNodeIdsNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <node_ids_null> value
     *
     * @return boolean
     */
    public function getNodeIdsNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <node_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_RemoveBinaryFromNodes_Ad\Parameters
     */
    public function setNodeIdsNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

