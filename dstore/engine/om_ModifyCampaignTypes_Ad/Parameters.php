<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyCampaignTypes_Ad.proto
//   Date: 2015-10-06 11:20:02

namespace dstore\engine\om_ModifyCampaignTypes_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $campaign_type_id = null;
    
    /**  @var boolean */
    public $campaign_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $campaign_type = null;
    
    /**  @var boolean */
    public $campaign_type_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_campaign_type = null;
    
    /**  @var boolean */
    public $delete_campaign_type_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyCampaignTypes_Ad.Parameters');

      // OPTIONAL MESSAGE campaign_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "campaign_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL campaign_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "campaign_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE campaign_type = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "campaign_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL campaign_type_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "campaign_type_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_campaign_type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "delete_campaign_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_campaign_type_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "delete_campaign_type_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <campaign_type_id> has a value
     *
     * @return boolean
     */
    public function hasCampaignTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <campaign_type_id> value
     *
     * @return \dstore\engine\om_ModifyCampaignTypes_Ad\Parameters
     */
    public function clearCampaignTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <campaign_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCampaignTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <campaign_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignTypes_Ad\Parameters
     */
    public function setCampaignTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <campaign_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasCampaignTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <campaign_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignTypes_Ad\Parameters
     */
    public function clearCampaignTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <campaign_type_id_null> value
     *
     * @return boolean
     */
    public function getCampaignTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <campaign_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignTypes_Ad\Parameters
     */
    public function setCampaignTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <campaign_type> has a value
     *
     * @return boolean
     */
    public function hasCampaignType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <campaign_type> value
     *
     * @return \dstore\engine\om_ModifyCampaignTypes_Ad\Parameters
     */
    public function clearCampaignType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <campaign_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCampaignType(){
      return $this->_get(2);
    }
    
    /**
     * Set <campaign_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_ModifyCampaignTypes_Ad\Parameters
     */
    public function setCampaignType(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <campaign_type_null> has a value
     *
     * @return boolean
     */
    public function hasCampaignTypeNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <campaign_type_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignTypes_Ad\Parameters
     */
    public function clearCampaignTypeNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <campaign_type_null> value
     *
     * @return boolean
     */
    public function getCampaignTypeNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <campaign_type_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignTypes_Ad\Parameters
     */
    public function setCampaignTypeNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <delete_campaign_type> has a value
     *
     * @return boolean
     */
    public function hasDeleteCampaignType(){
      return $this->_has(3);
    }
    
    /**
     * Clear <delete_campaign_type> value
     *
     * @return \dstore\engine\om_ModifyCampaignTypes_Ad\Parameters
     */
    public function clearDeleteCampaignType(){
      return $this->_clear(3);
    }
    
    /**
     * Get <delete_campaign_type> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteCampaignType(){
      return $this->_get(3);
    }
    
    /**
     * Set <delete_campaign_type> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyCampaignTypes_Ad\Parameters
     */
    public function setDeleteCampaignType(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <delete_campaign_type_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteCampaignTypeNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <delete_campaign_type_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignTypes_Ad\Parameters
     */
    public function clearDeleteCampaignTypeNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <delete_campaign_type_null> value
     *
     * @return boolean
     */
    public function getDeleteCampaignTypeNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <delete_campaign_type_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignTypes_Ad\Parameters
     */
    public function setDeleteCampaignTypeNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

