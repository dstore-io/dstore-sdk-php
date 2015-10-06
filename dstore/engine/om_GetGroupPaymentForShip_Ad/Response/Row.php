<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetGroupPaymentForShip_Ad.proto
//   Date: 2015-10-06 11:19:57

namespace dstore\engine\om_GetGroupPaymentForShip_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $group_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $payment_for_shipping_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $description_for_admin = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $payment_for_shipping_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $group_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetGroupPaymentForShip_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE group_description = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "group_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE payment_for_shipping_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "payment_for_shipping_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE description_for_admin = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "description_for_admin";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE payment_for_shipping_description = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "payment_for_shipping_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE group_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "group_id";
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
     * @return \dstore\engine\om_GetGroupPaymentForShip_Ad\Response\Row
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
     * @return \dstore\engine\om_GetGroupPaymentForShip_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <group_description> has a value
     *
     * @return boolean
     */
    public function hasGroupDescription(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <group_description> value
     *
     * @return \dstore\engine\om_GetGroupPaymentForShip_Ad\Response\Row
     */
    public function clearGroupDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <group_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getGroupDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <group_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetGroupPaymentForShip_Ad\Response\Row
     */
    public function setGroupDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <payment_for_shipping_id> has a value
     *
     * @return boolean
     */
    public function hasPaymentForShippingId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <payment_for_shipping_id> value
     *
     * @return \dstore\engine\om_GetGroupPaymentForShip_Ad\Response\Row
     */
    public function clearPaymentForShippingId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <payment_for_shipping_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPaymentForShippingId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <payment_for_shipping_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetGroupPaymentForShip_Ad\Response\Row
     */
    public function setPaymentForShippingId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <description_for_admin> has a value
     *
     * @return boolean
     */
    public function hasDescriptionForAdmin(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <description_for_admin> value
     *
     * @return \dstore\engine\om_GetGroupPaymentForShip_Ad\Response\Row
     */
    public function clearDescriptionForAdmin(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <description_for_admin> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDescriptionForAdmin(){
      return $this->_get(10003);
    }
    
    /**
     * Set <description_for_admin> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetGroupPaymentForShip_Ad\Response\Row
     */
    public function setDescriptionForAdmin(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <payment_for_shipping_description> has a value
     *
     * @return boolean
     */
    public function hasPaymentForShippingDescription(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <payment_for_shipping_description> value
     *
     * @return \dstore\engine\om_GetGroupPaymentForShip_Ad\Response\Row
     */
    public function clearPaymentForShippingDescription(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <payment_for_shipping_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPaymentForShippingDescription(){
      return $this->_get(10004);
    }
    
    /**
     * Set <payment_for_shipping_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetGroupPaymentForShip_Ad\Response\Row
     */
    public function setPaymentForShippingDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <group_id> has a value
     *
     * @return boolean
     */
    public function hasGroupId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <group_id> value
     *
     * @return \dstore\engine\om_GetGroupPaymentForShip_Ad\Response\Row
     */
    public function clearGroupId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <group_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getGroupId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <group_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetGroupPaymentForShip_Ad\Response\Row
     */
    public function setGroupId(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
  }
}

