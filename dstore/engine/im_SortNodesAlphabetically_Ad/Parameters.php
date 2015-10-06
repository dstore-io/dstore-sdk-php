<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_SortNodesAlphabetically_Ad.proto
//   Date: 2015-10-06 11:19:49

namespace dstore\engine\im_SortNodesAlphabetically_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\booleanValue */
    public $descending = null;
    
    /**  @var boolean */
    public $descending_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $case_sensitive = null;
    
    /**  @var boolean */
    public $case_sensitive_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_SortNodesAlphabetically_Ad.Parameters');

      // OPTIONAL MESSAGE descending = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "descending";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL descending_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "descending_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE case_sensitive = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "case_sensitive";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL case_sensitive_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "case_sensitive_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <descending> has a value
     *
     * @return boolean
     */
    public function hasDescending(){
      return $this->_has(1);
    }
    
    /**
     * Clear <descending> value
     *
     * @return \dstore\engine\im_SortNodesAlphabetically_Ad\Parameters
     */
    public function clearDescending(){
      return $this->_clear(1);
    }
    
    /**
     * Get <descending> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDescending(){
      return $this->_get(1);
    }
    
    /**
     * Set <descending> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_SortNodesAlphabetically_Ad\Parameters
     */
    public function setDescending(\dstore\engine\values\booleanValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <descending_null> has a value
     *
     * @return boolean
     */
    public function hasDescendingNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <descending_null> value
     *
     * @return \dstore\engine\im_SortNodesAlphabetically_Ad\Parameters
     */
    public function clearDescendingNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <descending_null> value
     *
     * @return boolean
     */
    public function getDescendingNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <descending_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SortNodesAlphabetically_Ad\Parameters
     */
    public function setDescendingNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <case_sensitive> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitive(){
      return $this->_has(2);
    }
    
    /**
     * Clear <case_sensitive> value
     *
     * @return \dstore\engine\im_SortNodesAlphabetically_Ad\Parameters
     */
    public function clearCaseSensitive(){
      return $this->_clear(2);
    }
    
    /**
     * Get <case_sensitive> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCaseSensitive(){
      return $this->_get(2);
    }
    
    /**
     * Set <case_sensitive> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_SortNodesAlphabetically_Ad\Parameters
     */
    public function setCaseSensitive(\dstore\engine\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <case_sensitive_null> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitiveNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <case_sensitive_null> value
     *
     * @return \dstore\engine\im_SortNodesAlphabetically_Ad\Parameters
     */
    public function clearCaseSensitiveNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <case_sensitive_null> value
     *
     * @return boolean
     */
    public function getCaseSensitiveNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <case_sensitive_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_SortNodesAlphabetically_Ad\Parameters
     */
    public function setCaseSensitiveNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

