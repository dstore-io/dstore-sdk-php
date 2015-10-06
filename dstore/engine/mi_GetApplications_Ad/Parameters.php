<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetApplications_Ad.proto
//   Date: 2015-10-06 11:19:50

namespace dstore\engine\mi_GetApplications_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $application_id = null;
    
    /**  @var boolean */
    public $application_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $application_name = null;
    
    /**  @var boolean */
    public $application_name_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $search_for_app_name_with_like = null;
    
    /**  @var boolean */
    public $search_for_app_name_with_like_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetApplications_Ad.Parameters');

      // OPTIONAL MESSAGE application_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "application_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL application_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "application_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE application_name = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "application_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL application_name_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "application_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE search_for_app_name_with_like = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "search_for_app_name_with_like";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL search_for_app_name_with_like_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "search_for_app_name_with_like_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <application_id> has a value
     *
     * @return boolean
     */
    public function hasApplicationId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <application_id> value
     *
     * @return \dstore\engine\mi_GetApplications_Ad\Parameters
     */
    public function clearApplicationId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <application_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getApplicationId(){
      return $this->_get(1);
    }
    
    /**
     * Set <application_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetApplications_Ad\Parameters
     */
    public function setApplicationId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <application_id_null> has a value
     *
     * @return boolean
     */
    public function hasApplicationIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <application_id_null> value
     *
     * @return \dstore\engine\mi_GetApplications_Ad\Parameters
     */
    public function clearApplicationIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <application_id_null> value
     *
     * @return boolean
     */
    public function getApplicationIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <application_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetApplications_Ad\Parameters
     */
    public function setApplicationIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <application_name> has a value
     *
     * @return boolean
     */
    public function hasApplicationName(){
      return $this->_has(2);
    }
    
    /**
     * Clear <application_name> value
     *
     * @return \dstore\engine\mi_GetApplications_Ad\Parameters
     */
    public function clearApplicationName(){
      return $this->_clear(2);
    }
    
    /**
     * Get <application_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getApplicationName(){
      return $this->_get(2);
    }
    
    /**
     * Set <application_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetApplications_Ad\Parameters
     */
    public function setApplicationName(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <application_name_null> has a value
     *
     * @return boolean
     */
    public function hasApplicationNameNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <application_name_null> value
     *
     * @return \dstore\engine\mi_GetApplications_Ad\Parameters
     */
    public function clearApplicationNameNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <application_name_null> value
     *
     * @return boolean
     */
    public function getApplicationNameNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <application_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetApplications_Ad\Parameters
     */
    public function setApplicationNameNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <search_for_app_name_with_like> has a value
     *
     * @return boolean
     */
    public function hasSearchForAppNameWithLike(){
      return $this->_has(3);
    }
    
    /**
     * Clear <search_for_app_name_with_like> value
     *
     * @return \dstore\engine\mi_GetApplications_Ad\Parameters
     */
    public function clearSearchForAppNameWithLike(){
      return $this->_clear(3);
    }
    
    /**
     * Get <search_for_app_name_with_like> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getSearchForAppNameWithLike(){
      return $this->_get(3);
    }
    
    /**
     * Set <search_for_app_name_with_like> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetApplications_Ad\Parameters
     */
    public function setSearchForAppNameWithLike(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <search_for_app_name_with_like_null> has a value
     *
     * @return boolean
     */
    public function hasSearchForAppNameWithLikeNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <search_for_app_name_with_like_null> value
     *
     * @return \dstore\engine\mi_GetApplications_Ad\Parameters
     */
    public function clearSearchForAppNameWithLikeNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <search_for_app_name_with_like_null> value
     *
     * @return boolean
     */
    public function getSearchForAppNameWithLikeNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <search_for_app_name_with_like_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetApplications_Ad\Parameters
     */
    public function setSearchForAppNameWithLikeNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

