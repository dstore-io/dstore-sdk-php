<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_GetBinaryCategories_Ad.proto
//   Date: 2015-10-06 11:19:42

namespace dstore\engine\co_GetBinaryCategories_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $community_id = null;
    
    /**  @var boolean */
    public $community_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_GetBinaryCategories_Ad.Parameters');

      // OPTIONAL MESSAGE community_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "community_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL community_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "community_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <community_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <community_id> value
     *
     * @return \dstore\engine\co_GetBinaryCategories_Ad\Parameters
     */
    public function clearCommunityId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <community_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCommunityId(){
      return $this->_get(1);
    }
    
    /**
     * Set <community_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\co_GetBinaryCategories_Ad\Parameters
     */
    public function setCommunityId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <community_id_null> has a value
     *
     * @return boolean
     */
    public function hasCommunityIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <community_id_null> value
     *
     * @return \dstore\engine\co_GetBinaryCategories_Ad\Parameters
     */
    public function clearCommunityIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <community_id_null> value
     *
     * @return boolean
     */
    public function getCommunityIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <community_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetBinaryCategories_Ad\Parameters
     */
    public function setCommunityIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

