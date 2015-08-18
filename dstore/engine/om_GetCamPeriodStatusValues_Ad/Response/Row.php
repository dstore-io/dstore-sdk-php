<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCamPeriodStatusValues_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetCamPeriodStatusValues_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $period_status_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $period_status_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCamPeriodStatusValues_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE period_status_description = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "period_status_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE period_status_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "period_status_id";
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
     * @return \dstore\engine\om_GetCamPeriodStatusValues_Ad\Response\Row
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
     * @return \dstore\engine\om_GetCamPeriodStatusValues_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <period_status_description> has a value
     *
     * @return boolean
     */
    public function hasPeriodStatusDescription(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <period_status_description> value
     *
     * @return \dstore\engine\om_GetCamPeriodStatusValues_Ad\Response\Row
     */
    public function clearPeriodStatusDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <period_status_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPeriodStatusDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <period_status_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCamPeriodStatusValues_Ad\Response\Row
     */
    public function setPeriodStatusDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <period_status_id> has a value
     *
     * @return boolean
     */
    public function hasPeriodStatusId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <period_status_id> value
     *
     * @return \dstore\engine\om_GetCamPeriodStatusValues_Ad\Response\Row
     */
    public function clearPeriodStatusId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <period_status_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPeriodStatusId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <period_status_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCamPeriodStatusValues_Ad\Response\Row
     */
    public function setPeriodStatusId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
  }
}
