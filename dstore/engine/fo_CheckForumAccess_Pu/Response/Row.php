<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_CheckForumAccess_Pu.proto
//   Date: 2015-10-06 11:19:44

namespace dstore\engine\fo_CheckForumAccess_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $language = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $forum_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $forum_name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_CheckForumAccess_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "language";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE forum_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "forum_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE forum_name = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "forum_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
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
     * @return \dstore\engine\fo_CheckForumAccess_Pu\Response\Row
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
     * @return \dstore\engine\fo_CheckForumAccess_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <language> has a value
     *
     * @return boolean
     */
    public function hasLanguage(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <language> value
     *
     * @return \dstore\engine\fo_CheckForumAccess_Pu\Response\Row
     */
    public function clearLanguage(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <language> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLanguage(){
      return $this->_get(10001);
    }
    
    /**
     * Set <language> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_CheckForumAccess_Pu\Response\Row
     */
    public function setLanguage(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <forum_id> has a value
     *
     * @return boolean
     */
    public function hasForumId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <forum_id> value
     *
     * @return \dstore\engine\fo_CheckForumAccess_Pu\Response\Row
     */
    public function clearForumId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <forum_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getForumId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <forum_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_CheckForumAccess_Pu\Response\Row
     */
    public function setForumId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <forum_name> has a value
     *
     * @return boolean
     */
    public function hasForumName(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <forum_name> value
     *
     * @return \dstore\engine\fo_CheckForumAccess_Pu\Response\Row
     */
    public function clearForumName(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <forum_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getForumName(){
      return $this->_get(10003);
    }
    
    /**
     * Set <forum_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_CheckForumAccess_Pu\Response\Row
     */
    public function setForumName(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
  }
}

