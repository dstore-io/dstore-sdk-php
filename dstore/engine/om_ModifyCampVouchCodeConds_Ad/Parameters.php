<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyCampVouchCodeConds_Ad.proto
//   Date: 2015-10-06 11:20:01

namespace dstore\engine\om_ModifyCampVouchCodeConds_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $valid_code_of_voucher_type_id = null;
    
    /**  @var boolean */
    public $valid_code_of_voucher_type_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_voucher_code_condition = null;
    
    /**  @var boolean */
    public $delete_voucher_code_condition_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyCampVouchCodeConds_Ad.Parameters');

      // OPTIONAL MESSAGE valid_code_of_voucher_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "valid_code_of_voucher_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL valid_code_of_voucher_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "valid_code_of_voucher_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_voucher_code_condition = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "delete_voucher_code_condition";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_voucher_code_condition_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "delete_voucher_code_condition_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <valid_code_of_voucher_type_id> has a value
     *
     * @return boolean
     */
    public function hasValidCodeOfVoucherTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <valid_code_of_voucher_type_id> value
     *
     * @return \dstore\engine\om_ModifyCampVouchCodeConds_Ad\Parameters
     */
    public function clearValidCodeOfVoucherTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <valid_code_of_voucher_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getValidCodeOfVoucherTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <valid_code_of_voucher_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampVouchCodeConds_Ad\Parameters
     */
    public function setValidCodeOfVoucherTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <valid_code_of_voucher_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasValidCodeOfVoucherTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <valid_code_of_voucher_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampVouchCodeConds_Ad\Parameters
     */
    public function clearValidCodeOfVoucherTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <valid_code_of_voucher_type_id_null> value
     *
     * @return boolean
     */
    public function getValidCodeOfVoucherTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <valid_code_of_voucher_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampVouchCodeConds_Ad\Parameters
     */
    public function setValidCodeOfVoucherTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <delete_voucher_code_condition> has a value
     *
     * @return boolean
     */
    public function hasDeleteVoucherCodeCondition(){
      return $this->_has(2);
    }
    
    /**
     * Clear <delete_voucher_code_condition> value
     *
     * @return \dstore\engine\om_ModifyCampVouchCodeConds_Ad\Parameters
     */
    public function clearDeleteVoucherCodeCondition(){
      return $this->_clear(2);
    }
    
    /**
     * Get <delete_voucher_code_condition> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteVoucherCodeCondition(){
      return $this->_get(2);
    }
    
    /**
     * Set <delete_voucher_code_condition> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyCampVouchCodeConds_Ad\Parameters
     */
    public function setDeleteVoucherCodeCondition(\dstore\engine\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <delete_voucher_code_condition_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteVoucherCodeConditionNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <delete_voucher_code_condition_null> value
     *
     * @return \dstore\engine\om_ModifyCampVouchCodeConds_Ad\Parameters
     */
    public function clearDeleteVoucherCodeConditionNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <delete_voucher_code_condition_null> value
     *
     * @return boolean
     */
    public function getDeleteVoucherCodeConditionNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <delete_voucher_code_condition_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampVouchCodeConds_Ad\Parameters
     */
    public function setDeleteVoucherCodeConditionNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

