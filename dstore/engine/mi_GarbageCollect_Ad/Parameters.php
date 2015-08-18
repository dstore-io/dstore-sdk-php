<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GarbageCollect_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GarbageCollect_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\booleanValue */
    public $check_for_correct_date = null;
    
    /**  @var boolean */
    public $check_for_correct_date_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GarbageCollect_Ad.Parameters');

      // OPTIONAL MESSAGE check_for_correct_date = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "check_for_correct_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL check_for_correct_date_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "check_for_correct_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <check_for_correct_date> has a value
     *
     * @return boolean
     */
    public function hasCheckForCorrectDate(){
      return $this->_has(1);
    }
    
    /**
     * Clear <check_for_correct_date> value
     *
     * @return \dstore\engine\mi_GarbageCollect_Ad\Parameters
     */
    public function clearCheckForCorrectDate(){
      return $this->_clear(1);
    }
    
    /**
     * Get <check_for_correct_date> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCheckForCorrectDate(){
      return $this->_get(1);
    }
    
    /**
     * Set <check_for_correct_date> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GarbageCollect_Ad\Parameters
     */
    public function setCheckForCorrectDate(\dstore\engine\values\booleanValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <check_for_correct_date_null> has a value
     *
     * @return boolean
     */
    public function hasCheckForCorrectDateNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <check_for_correct_date_null> value
     *
     * @return \dstore\engine\mi_GarbageCollect_Ad\Parameters
     */
    public function clearCheckForCorrectDateNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <check_for_correct_date_null> value
     *
     * @return boolean
     */
    public function getCheckForCorrectDateNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <check_for_correct_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GarbageCollect_Ad\Parameters
     */
    public function setCheckForCorrectDateNull( $value){
      return $this->_set(1001, $value);
    }
  }
}
