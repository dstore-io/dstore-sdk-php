<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_CreateVoucherCodes_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_CreateVoucherCodes_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $voucher_type_id = null;
    
    /**  @var boolean */
    public $voucher_type_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $number_of_codes = null;
    
    /**  @var boolean */
    public $number_of_codes_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $valid_until = null;
    
    /**  @var boolean */
    public $valid_until_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_CreateVoucherCodes_Ad.Parameters');

      // OPTIONAL MESSAGE voucher_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "voucher_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL voucher_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "voucher_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE number_of_codes = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "number_of_codes";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL number_of_codes_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "number_of_codes_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE valid_until = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "valid_until";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL valid_until_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "valid_until_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <voucher_type_id> has a value
     *
     * @return boolean
     */
    public function hasVoucherTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <voucher_type_id> value
     *
     * @return \dstore\engine\om_CreateVoucherCodes_Ad\Parameters
     */
    public function clearVoucherTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <voucher_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVoucherTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <voucher_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_CreateVoucherCodes_Ad\Parameters
     */
    public function setVoucherTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <voucher_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasVoucherTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <voucher_type_id_null> value
     *
     * @return \dstore\engine\om_CreateVoucherCodes_Ad\Parameters
     */
    public function clearVoucherTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <voucher_type_id_null> value
     *
     * @return boolean
     */
    public function getVoucherTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <voucher_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_CreateVoucherCodes_Ad\Parameters
     */
    public function setVoucherTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <number_of_codes> has a value
     *
     * @return boolean
     */
    public function hasNumberOfCodes(){
      return $this->_has(2);
    }
    
    /**
     * Clear <number_of_codes> value
     *
     * @return \dstore\engine\om_CreateVoucherCodes_Ad\Parameters
     */
    public function clearNumberOfCodes(){
      return $this->_clear(2);
    }
    
    /**
     * Get <number_of_codes> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNumberOfCodes(){
      return $this->_get(2);
    }
    
    /**
     * Set <number_of_codes> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_CreateVoucherCodes_Ad\Parameters
     */
    public function setNumberOfCodes(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <number_of_codes_null> has a value
     *
     * @return boolean
     */
    public function hasNumberOfCodesNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <number_of_codes_null> value
     *
     * @return \dstore\engine\om_CreateVoucherCodes_Ad\Parameters
     */
    public function clearNumberOfCodesNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <number_of_codes_null> value
     *
     * @return boolean
     */
    public function getNumberOfCodesNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <number_of_codes_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_CreateVoucherCodes_Ad\Parameters
     */
    public function setNumberOfCodesNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <valid_until> has a value
     *
     * @return boolean
     */
    public function hasValidUntil(){
      return $this->_has(3);
    }
    
    /**
     * Clear <valid_until> value
     *
     * @return \dstore\engine\om_CreateVoucherCodes_Ad\Parameters
     */
    public function clearValidUntil(){
      return $this->_clear(3);
    }
    
    /**
     * Get <valid_until> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getValidUntil(){
      return $this->_get(3);
    }
    
    /**
     * Set <valid_until> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_CreateVoucherCodes_Ad\Parameters
     */
    public function setValidUntil(\dstore\engine\values\timestampValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <valid_until_null> has a value
     *
     * @return boolean
     */
    public function hasValidUntilNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <valid_until_null> value
     *
     * @return \dstore\engine\om_CreateVoucherCodes_Ad\Parameters
     */
    public function clearValidUntilNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <valid_until_null> value
     *
     * @return boolean
     */
    public function getValidUntilNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <valid_until_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_CreateVoucherCodes_Ad\Parameters
     */
    public function setValidUntilNull( $value){
      return $this->_set(1003, $value);
    }
  }
}
