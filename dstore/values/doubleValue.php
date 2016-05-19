<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/values.proto
//   Date: 2016-05-19 08:08:10

namespace dstore\values {

  class doubleValue extends \DrSlump\Protobuf\Message {

    /**  @var float */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.values.doubleValue');

      // OPTIONAL DOUBLE value = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\values\doubleValue
     */
    public function clearValue(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value> value
     *
     * @return float
     */
    public function getValue(){
      return $this->_get(1);
    }
    
    /**
     * Set <value> value
     *
     * @param float $value
     * @return \dstore\values\doubleValue
     */
    public function setValue( $value){
      return $this->_set(1, $value);
    }
  }
}
