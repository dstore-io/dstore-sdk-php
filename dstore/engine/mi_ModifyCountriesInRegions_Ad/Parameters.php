<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_ModifyCountriesInRegions_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_ModifyCountriesInRegions_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $country_id = null;
    
    /**  @var boolean */
    public $country_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $region_id = null;
    
    /**  @var boolean */
    public $region_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $revoke = null;
    
    /**  @var boolean */
    public $revoke_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_ModifyCountriesInRegions_Ad.Parameters');

      // OPTIONAL MESSAGE country_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "country_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL country_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "country_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE region_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "region_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL region_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "region_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE revoke = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "revoke";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL revoke_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "revoke_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <country_id> has a value
     *
     * @return boolean
     */
    public function hasCountryId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <country_id> value
     *
     * @return \dstore\engine\mi_ModifyCountriesInRegions_Ad\Parameters
     */
    public function clearCountryId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <country_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCountryId(){
      return $this->_get(1);
    }
    
    /**
     * Set <country_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_ModifyCountriesInRegions_Ad\Parameters
     */
    public function setCountryId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <country_id_null> has a value
     *
     * @return boolean
     */
    public function hasCountryIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <country_id_null> value
     *
     * @return \dstore\engine\mi_ModifyCountriesInRegions_Ad\Parameters
     */
    public function clearCountryIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <country_id_null> value
     *
     * @return boolean
     */
    public function getCountryIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <country_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyCountriesInRegions_Ad\Parameters
     */
    public function setCountryIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <region_id> has a value
     *
     * @return boolean
     */
    public function hasRegionId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <region_id> value
     *
     * @return \dstore\engine\mi_ModifyCountriesInRegions_Ad\Parameters
     */
    public function clearRegionId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <region_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRegionId(){
      return $this->_get(2);
    }
    
    /**
     * Set <region_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_ModifyCountriesInRegions_Ad\Parameters
     */
    public function setRegionId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <region_id_null> has a value
     *
     * @return boolean
     */
    public function hasRegionIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <region_id_null> value
     *
     * @return \dstore\engine\mi_ModifyCountriesInRegions_Ad\Parameters
     */
    public function clearRegionIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <region_id_null> value
     *
     * @return boolean
     */
    public function getRegionIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <region_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyCountriesInRegions_Ad\Parameters
     */
    public function setRegionIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <revoke> has a value
     *
     * @return boolean
     */
    public function hasRevoke(){
      return $this->_has(3);
    }
    
    /**
     * Clear <revoke> value
     *
     * @return \dstore\engine\mi_ModifyCountriesInRegions_Ad\Parameters
     */
    public function clearRevoke(){
      return $this->_clear(3);
    }
    
    /**
     * Get <revoke> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getRevoke(){
      return $this->_get(3);
    }
    
    /**
     * Set <revoke> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyCountriesInRegions_Ad\Parameters
     */
    public function setRevoke(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <revoke_null> has a value
     *
     * @return boolean
     */
    public function hasRevokeNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <revoke_null> value
     *
     * @return \dstore\engine\mi_ModifyCountriesInRegions_Ad\Parameters
     */
    public function clearRevokeNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <revoke_null> value
     *
     * @return boolean
     */
    public function getRevokeNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <revoke_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyCountriesInRegions_Ad\Parameters
     */
    public function setRevokeNull( $value){
      return $this->_set(1003, $value);
    }
  }
}
