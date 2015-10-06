<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetThumbnailForNode_Ad.proto
//   Date: 2015-10-06 11:19:48

namespace dstore\engine\im_GetThumbnailForNode_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $binary_code_id = null;
    
    /**  @var \dstore\engine\values\byteValue */
    public $thumbnail_code = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetThumbnailForNode_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_code_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "binary_code_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE thumbnail_code = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "thumbnail_code";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\byteValue';
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
     * @return \dstore\engine\im_GetThumbnailForNode_Ad\Response\Row
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
     * @return \dstore\engine\im_GetThumbnailForNode_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <binary_code_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryCodeId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <binary_code_id> value
     *
     * @return \dstore\engine\im_GetThumbnailForNode_Ad\Response\Row
     */
    public function clearBinaryCodeId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <binary_code_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBinaryCodeId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <binary_code_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetThumbnailForNode_Ad\Response\Row
     */
    public function setBinaryCodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <thumbnail_code> has a value
     *
     * @return boolean
     */
    public function hasThumbnailCode(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <thumbnail_code> value
     *
     * @return \dstore\engine\im_GetThumbnailForNode_Ad\Response\Row
     */
    public function clearThumbnailCode(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <thumbnail_code> value
     *
     * @return \dstore\engine\values\byteValue
     */
    public function getThumbnailCode(){
      return $this->_get(10002);
    }
    
    /**
     * Set <thumbnail_code> value
     *
     * @param \dstore\engine\values\byteValue $value
     * @return \dstore\engine\im_GetThumbnailForNode_Ad\Response\Row
     */
    public function setThumbnailCode(\dstore\engine\values\byteValue $value){
      return $this->_set(10002, $value);
    }
  }
}

