<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_InsertTempdb_ImageData.proto
//   Date: 2015-10-06 11:19:53

namespace dstore\engine\mi_InsertTempdb_ImageData {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\byteValue */
    public $data = null;
    
    /**  @var boolean */
    public $data_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $sort_no = null;
    
    /**  @var boolean */
    public $sort_no_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $format = null;
    
    /**  @var boolean */
    public $format_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete = null;
    
    /**  @var boolean */
    public $delete_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_InsertTempdb_ImageData.Parameters');

      // OPTIONAL MESSAGE data = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "data";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\byteValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL data_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "data_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sort_no_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "sort_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE format = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "format";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL format_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "format_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <data> has a value
     *
     * @return boolean
     */
    public function hasData(){
      return $this->_has(1);
    }
    
    /**
     * Clear <data> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function clearData(){
      return $this->_clear(1);
    }
    
    /**
     * Get <data> value
     *
     * @return \dstore\engine\values\byteValue
     */
    public function getData(){
      return $this->_get(1);
    }
    
    /**
     * Set <data> value
     *
     * @param \dstore\engine\values\byteValue $value
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function setData(\dstore\engine\values\byteValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <data_null> has a value
     *
     * @return boolean
     */
    public function hasDataNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <data_null> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function clearDataNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <data_null> value
     *
     * @return boolean
     */
    public function getDataNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <data_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function setDataNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(2);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function clearSortNo(){
      return $this->_clear(2);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(2);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function setSortNo(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <sort_no_null> has a value
     *
     * @return boolean
     */
    public function hasSortNoNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <sort_no_null> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function clearSortNoNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <sort_no_null> value
     *
     * @return boolean
     */
    public function getSortNoNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <sort_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function setSortNoNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <format> has a value
     *
     * @return boolean
     */
    public function hasFormat(){
      return $this->_has(3);
    }
    
    /**
     * Clear <format> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function clearFormat(){
      return $this->_clear(3);
    }
    
    /**
     * Get <format> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFormat(){
      return $this->_get(3);
    }
    
    /**
     * Set <format> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function setFormat(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <format_null> has a value
     *
     * @return boolean
     */
    public function hasFormatNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <format_null> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function clearFormatNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <format_null> value
     *
     * @return boolean
     */
    public function getFormatNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <format_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function setFormatNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete> has a value
     *
     * @return boolean
     */
    public function hasDelete(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function clearDelete(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDelete(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function setDelete(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_null> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function clearDeleteNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_null> value
     *
     * @return boolean
     */
    public function getDeleteNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_InsertTempdb_ImageData\Parameters
     */
    public function setDeleteNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

