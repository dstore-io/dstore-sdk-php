<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_GetPostingVisibilities.proto
//   Date: 2015-10-06 11:19:45

namespace dstore\engine\fo_GetPostingVisibilities\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $visible = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $visibility = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $visible__get = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_GetPostingVisibilities.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE description = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visible = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "visible";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visibility = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "visibility";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visible__get = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "visible__get";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <row_id> has a value
     *
     * @return boolean
     */
    public function hasRowId(){
      return $this->_has(10000);
    }
    
    /**
     * Clear <row_id> value
     *
     * @return \dstore\engine\fo_GetPostingVisibilities\Response\Row
     */
    public function clearRowId(){
      return $this->_clear(10000);
    }
    
    /**
     * Get <row_id> value
     *
     * @return int
     */
    public function getRowId(){
      return $this->_get(10000);
    }
    
    /**
     * Set <row_id> value
     *
     * @param int $value
     * @return \dstore\engine\fo_GetPostingVisibilities\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <description> has a value
     *
     * @return boolean
     */
    public function hasDescription(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <description> value
     *
     * @return \dstore\engine\fo_GetPostingVisibilities\Response\Row
     */
    public function clearDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetPostingVisibilities\Response\Row
     */
    public function setDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <visible> has a value
     *
     * @return boolean
     */
    public function hasVisible(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <visible> value
     *
     * @return \dstore\engine\fo_GetPostingVisibilities\Response\Row
     */
    public function clearVisible(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <visible> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVisible(){
      return $this->_get(10002);
    }
    
    /**
     * Set <visible> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingVisibilities\Response\Row
     */
    public function setVisible(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <visibility> has a value
     *
     * @return boolean
     */
    public function hasVisibility(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <visibility> value
     *
     * @return \dstore\engine\fo_GetPostingVisibilities\Response\Row
     */
    public function clearVisibility(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <visibility> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getVisibility(){
      return $this->_get(10003);
    }
    
    /**
     * Set <visibility> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetPostingVisibilities\Response\Row
     */
    public function setVisibility(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <visible__get> has a value
     *
     * @return boolean
     */
    public function hasVisible_Get(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <visible__get> value
     *
     * @return \dstore\engine\fo_GetPostingVisibilities\Response\Row
     */
    public function clearVisible_Get(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <visible__get> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVisible_Get(){
      return $this->_get(10004);
    }
    
    /**
     * Set <visible__get> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingVisibilities\Response\Row
     */
    public function setVisible_Get(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
  }
}

