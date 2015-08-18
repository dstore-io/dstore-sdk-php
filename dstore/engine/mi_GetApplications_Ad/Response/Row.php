<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetApplications_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetApplications_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $application_name = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $application_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetApplications_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE application_name = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "application_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE application_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "application_id";
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
     * @return \dstore\engine\mi_GetApplications_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetApplications_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <application_name> has a value
     *
     * @return boolean
     */
    public function hasApplicationName(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <application_name> value
     *
     * @return \dstore\engine\mi_GetApplications_Ad\Response\Row
     */
    public function clearApplicationName(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <application_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getApplicationName(){
      return $this->_get(10001);
    }
    
    /**
     * Set <application_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetApplications_Ad\Response\Row
     */
    public function setApplicationName(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <application_id> has a value
     *
     * @return boolean
     */
    public function hasApplicationId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <application_id> value
     *
     * @return \dstore\engine\mi_GetApplications_Ad\Response\Row
     */
    public function clearApplicationId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <application_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getApplicationId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <application_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetApplications_Ad\Response\Row
     */
    public function setApplicationId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
  }
}
