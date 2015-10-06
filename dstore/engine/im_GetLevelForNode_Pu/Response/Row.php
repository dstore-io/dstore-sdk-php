<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetLevelForNode_Pu.proto
//   Date: 2015-10-06 11:19:46

namespace dstore\engine\im_GetLevelForNode_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $level_no = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $level_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $level_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetLevelForNode_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_no = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "level_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_description = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "level_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "level_id";
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
     * @return \dstore\engine\im_GetLevelForNode_Pu\Response\Row
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
     * @return \dstore\engine\im_GetLevelForNode_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <level_no> has a value
     *
     * @return boolean
     */
    public function hasLevelNo(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <level_no> value
     *
     * @return \dstore\engine\im_GetLevelForNode_Pu\Response\Row
     */
    public function clearLevelNo(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <level_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLevelNo(){
      return $this->_get(10001);
    }
    
    /**
     * Set <level_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetLevelForNode_Pu\Response\Row
     */
    public function setLevelNo(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <level_description> has a value
     *
     * @return boolean
     */
    public function hasLevelDescription(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <level_description> value
     *
     * @return \dstore\engine\im_GetLevelForNode_Pu\Response\Row
     */
    public function clearLevelDescription(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <level_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLevelDescription(){
      return $this->_get(10002);
    }
    
    /**
     * Set <level_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetLevelForNode_Pu\Response\Row
     */
    public function setLevelDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <level_id> has a value
     *
     * @return boolean
     */
    public function hasLevelId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <level_id> value
     *
     * @return \dstore\engine\im_GetLevelForNode_Pu\Response\Row
     */
    public function clearLevelId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <level_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLevelId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <level_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetLevelForNode_Pu\Response\Row
     */
    public function setLevelId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
  }
}

