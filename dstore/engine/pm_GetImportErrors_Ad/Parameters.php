<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetImportErrors_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_GetImportErrors_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $error_table = null;
    
    /**  @var boolean */
    public $error_table_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $from_date = null;
    
    /**  @var boolean */
    public $from_date_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $to_date = null;
    
    /**  @var boolean */
    public $to_date_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetImportErrors_Ad.Parameters');

      // OPTIONAL MESSAGE error_table = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "error_table";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL error_table_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "error_table_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_date = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "from_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_date_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "from_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_date = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "to_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_date_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "to_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <error_table> has a value
     *
     * @return boolean
     */
    public function hasErrorTable(){
      return $this->_has(1);
    }
    
    /**
     * Clear <error_table> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Parameters
     */
    public function clearErrorTable(){
      return $this->_clear(1);
    }
    
    /**
     * Get <error_table> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getErrorTable(){
      return $this->_get(1);
    }
    
    /**
     * Set <error_table> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Parameters
     */
    public function setErrorTable(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <error_table_null> has a value
     *
     * @return boolean
     */
    public function hasErrorTableNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <error_table_null> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Parameters
     */
    public function clearErrorTableNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <error_table_null> value
     *
     * @return boolean
     */
    public function getErrorTableNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <error_table_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Parameters
     */
    public function setErrorTableNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <from_date> has a value
     *
     * @return boolean
     */
    public function hasFromDate(){
      return $this->_has(2);
    }
    
    /**
     * Clear <from_date> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Parameters
     */
    public function clearFromDate(){
      return $this->_clear(2);
    }
    
    /**
     * Get <from_date> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getFromDate(){
      return $this->_get(2);
    }
    
    /**
     * Set <from_date> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Parameters
     */
    public function setFromDate(\dstore\engine\values\timestampValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <from_date_null> has a value
     *
     * @return boolean
     */
    public function hasFromDateNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <from_date_null> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Parameters
     */
    public function clearFromDateNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <from_date_null> value
     *
     * @return boolean
     */
    public function getFromDateNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <from_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Parameters
     */
    public function setFromDateNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <to_date> has a value
     *
     * @return boolean
     */
    public function hasToDate(){
      return $this->_has(3);
    }
    
    /**
     * Clear <to_date> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Parameters
     */
    public function clearToDate(){
      return $this->_clear(3);
    }
    
    /**
     * Get <to_date> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getToDate(){
      return $this->_get(3);
    }
    
    /**
     * Set <to_date> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Parameters
     */
    public function setToDate(\dstore\engine\values\timestampValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <to_date_null> has a value
     *
     * @return boolean
     */
    public function hasToDateNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <to_date_null> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Parameters
     */
    public function clearToDateNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <to_date_null> value
     *
     * @return boolean
     */
    public function getToDateNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <to_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Parameters
     */
    public function setToDateNull( $value){
      return $this->_set(1003, $value);
    }
  }
}
