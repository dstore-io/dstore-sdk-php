<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedure.proto
//   Date: 2015-10-06 11:19:42

namespace dstore\engine\procedure {

  class Parameter extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $value = null;
    
    /**  @var boolean */
    public $is_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.procedure.Parameter');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING value = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL is_null = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "is_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \dstore\engine\procedure\Parameter
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \dstore\engine\procedure\Parameter
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(2);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\procedure\Parameter
     */
    public function clearValue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <value> value
     *
     * @return string
     */
    public function getValue(){
      return $this->_get(2);
    }
    
    /**
     * Set <value> value
     *
     * @param string $value
     * @return \dstore\engine\procedure\Parameter
     */
    public function setValue( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <is_null> has a value
     *
     * @return boolean
     */
    public function hasIsNull(){
      return $this->_has(3);
    }
    
    /**
     * Clear <is_null> value
     *
     * @return \dstore\engine\procedure\Parameter
     */
    public function clearIsNull(){
      return $this->_clear(3);
    }
    
    /**
     * Get <is_null> value
     *
     * @return boolean
     */
    public function getIsNull(){
      return $this->_get(3);
    }
    
    /**
     * Set <is_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\procedure\Parameter
     */
    public function setIsNull( $value){
      return $this->_set(3, $value);
    }
  }
}

