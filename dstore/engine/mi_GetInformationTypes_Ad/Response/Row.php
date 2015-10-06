<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetInformationTypes_Ad.proto
//   Date: 2015-10-06 11:19:51

namespace dstore\engine\mi_GetInformationTypes_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $information_type_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $information_type = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetInformationTypes_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "information_type";
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
     * @return \dstore\engine\mi_GetInformationTypes_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetInformationTypes_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <information_type_id> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <information_type_id> value
     *
     * @return \dstore\engine\mi_GetInformationTypes_Ad\Response\Row
     */
    public function clearInformationTypeId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetInformationTypes_Ad\Response\Row
     */
    public function setInformationTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <information_type> has a value
     *
     * @return boolean
     */
    public function hasInformationType(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <information_type> value
     *
     * @return \dstore\engine\mi_GetInformationTypes_Ad\Response\Row
     */
    public function clearInformationType(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <information_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getInformationType(){
      return $this->_get(10002);
    }
    
    /**
     * Set <information_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetInformationTypes_Ad\Response\Row
     */
    public function setInformationType(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
  }
}

