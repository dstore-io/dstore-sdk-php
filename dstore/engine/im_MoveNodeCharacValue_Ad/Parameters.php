<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_MoveNodeCharacValue_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_MoveNodeCharacValue_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $value_id = null;
    
    /**  @var boolean */
    public $value_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $move_up = null;
    
    /**  @var boolean */
    public $move_up_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $steps = null;
    
    /**  @var boolean */
    public $steps_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_MoveNodeCharacValue_Ad.Parameters');

      // OPTIONAL MESSAGE value_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "value_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE move_up = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "move_up";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL move_up_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "move_up_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE steps = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "steps";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL steps_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "steps_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value_id> has a value
     *
     * @return boolean
     */
    public function hasValueId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value_id> value
     *
     * @return \dstore\engine\im_MoveNodeCharacValue_Ad\Parameters
     */
    public function clearValueId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getValueId(){
      return $this->_get(1);
    }
    
    /**
     * Set <value_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_MoveNodeCharacValue_Ad\Parameters
     */
    public function setValueId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value_id_null> has a value
     *
     * @return boolean
     */
    public function hasValueIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <value_id_null> value
     *
     * @return \dstore\engine\im_MoveNodeCharacValue_Ad\Parameters
     */
    public function clearValueIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <value_id_null> value
     *
     * @return boolean
     */
    public function getValueIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <value_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_MoveNodeCharacValue_Ad\Parameters
     */
    public function setValueIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <move_up> has a value
     *
     * @return boolean
     */
    public function hasMoveUp(){
      return $this->_has(2);
    }
    
    /**
     * Clear <move_up> value
     *
     * @return \dstore\engine\im_MoveNodeCharacValue_Ad\Parameters
     */
    public function clearMoveUp(){
      return $this->_clear(2);
    }
    
    /**
     * Get <move_up> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getMoveUp(){
      return $this->_get(2);
    }
    
    /**
     * Set <move_up> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_MoveNodeCharacValue_Ad\Parameters
     */
    public function setMoveUp(\dstore\engine\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <move_up_null> has a value
     *
     * @return boolean
     */
    public function hasMoveUpNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <move_up_null> value
     *
     * @return \dstore\engine\im_MoveNodeCharacValue_Ad\Parameters
     */
    public function clearMoveUpNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <move_up_null> value
     *
     * @return boolean
     */
    public function getMoveUpNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <move_up_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_MoveNodeCharacValue_Ad\Parameters
     */
    public function setMoveUpNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <steps> has a value
     *
     * @return boolean
     */
    public function hasSteps(){
      return $this->_has(3);
    }
    
    /**
     * Clear <steps> value
     *
     * @return \dstore\engine\im_MoveNodeCharacValue_Ad\Parameters
     */
    public function clearSteps(){
      return $this->_clear(3);
    }
    
    /**
     * Get <steps> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSteps(){
      return $this->_get(3);
    }
    
    /**
     * Set <steps> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_MoveNodeCharacValue_Ad\Parameters
     */
    public function setSteps(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <steps_null> has a value
     *
     * @return boolean
     */
    public function hasStepsNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <steps_null> value
     *
     * @return \dstore\engine\im_MoveNodeCharacValue_Ad\Parameters
     */
    public function clearStepsNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <steps_null> value
     *
     * @return boolean
     */
    public function getStepsNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <steps_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_MoveNodeCharacValue_Ad\Parameters
     */
    public function setStepsNull( $value){
      return $this->_set(1003, $value);
    }
  }
}
