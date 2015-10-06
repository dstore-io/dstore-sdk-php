<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCampaignsInCategories_Ad.proto
//   Date: 2015-10-06 11:19:57

namespace dstore\engine\om_GetCampaignsInCategories_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $campaign_category_id = null;
    
    /**  @var boolean */
    public $campaign_category_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $campaign_id = null;
    
    /**  @var boolean */
    public $campaign_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCampaignsInCategories_Ad.Parameters');

      // OPTIONAL MESSAGE campaign_category_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "campaign_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL campaign_category_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "campaign_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE campaign_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "campaign_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL campaign_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "campaign_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <campaign_category_id> has a value
     *
     * @return boolean
     */
    public function hasCampaignCategoryId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <campaign_category_id> value
     *
     * @return \dstore\engine\om_GetCampaignsInCategories_Ad\Parameters
     */
    public function clearCampaignCategoryId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <campaign_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCampaignCategoryId(){
      return $this->_get(1);
    }
    
    /**
     * Set <campaign_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignsInCategories_Ad\Parameters
     */
    public function setCampaignCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <campaign_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasCampaignCategoryIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <campaign_category_id_null> value
     *
     * @return \dstore\engine\om_GetCampaignsInCategories_Ad\Parameters
     */
    public function clearCampaignCategoryIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <campaign_category_id_null> value
     *
     * @return boolean
     */
    public function getCampaignCategoryIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <campaign_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCampaignsInCategories_Ad\Parameters
     */
    public function setCampaignCategoryIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <campaign_id> has a value
     *
     * @return boolean
     */
    public function hasCampaignId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <campaign_id> value
     *
     * @return \dstore\engine\om_GetCampaignsInCategories_Ad\Parameters
     */
    public function clearCampaignId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <campaign_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCampaignId(){
      return $this->_get(2);
    }
    
    /**
     * Set <campaign_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignsInCategories_Ad\Parameters
     */
    public function setCampaignId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <campaign_id_null> has a value
     *
     * @return boolean
     */
    public function hasCampaignIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <campaign_id_null> value
     *
     * @return \dstore\engine\om_GetCampaignsInCategories_Ad\Parameters
     */
    public function clearCampaignIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <campaign_id_null> value
     *
     * @return boolean
     */
    public function getCampaignIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <campaign_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCampaignsInCategories_Ad\Parameters
     */
    public function setCampaignIdNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

