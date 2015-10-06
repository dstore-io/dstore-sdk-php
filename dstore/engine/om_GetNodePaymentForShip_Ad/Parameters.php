<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetNodePaymentForShip_Ad.proto
//   Date: 2015-10-06 11:19:57

namespace dstore\engine\om_GetNodePaymentForShip_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $tree_node_id = null;
    
    /**  @var boolean */
    public $tree_node_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetNodePaymentForShip_Ad.Parameters');

      // OPTIONAL MESSAGE tree_node_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL tree_node_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "tree_node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <tree_node_id> value
     *
     * @return \dstore\engine\om_GetNodePaymentForShip_Ad\Parameters
     */
    public function clearTreeNodeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTreeNodeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetNodePaymentForShip_Ad\Parameters
     */
    public function setTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <tree_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <tree_node_id_null> value
     *
     * @return \dstore\engine\om_GetNodePaymentForShip_Ad\Parameters
     */
    public function clearTreeNodeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <tree_node_id_null> value
     *
     * @return boolean
     */
    public function getTreeNodeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <tree_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetNodePaymentForShip_Ad\Parameters
     */
    public function setTreeNodeIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

