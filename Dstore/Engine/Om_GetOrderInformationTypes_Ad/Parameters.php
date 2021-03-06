<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrderInformationTypes_Ad.proto

namespace Dstore\Engine\Om_GetOrderInformationTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetOrderInformationTypes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue information_type_id = 1;</code>
     */
    private $information_type_id = null;
    /**
     * <code>bool information_type_id_null = 1001;</code>
     */
    private $information_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 2;</code>
     */
    private $person_characteristic_id = null;
    /**
     * <code>bool person_characteristic_id_null = 1002;</code>
     */
    private $person_characteristic_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetOrderInformationTypesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 1;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 1;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <code>bool information_type_id_null = 1001;</code>
     */
    public function getInformationTypeIdNull()
    {
        return $this->information_type_id_null;
    }

    /**
     * <code>bool information_type_id_null = 1001;</code>
     */
    public function setInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 2;</code>
     */
    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_characteristic_id = 2;</code>
     */
    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_characteristic_id = $var;
    }

    /**
     * <code>bool person_characteristic_id_null = 1002;</code>
     */
    public function getPersonCharacteristicIdNull()
    {
        return $this->person_characteristic_id_null;
    }

    /**
     * <code>bool person_characteristic_id_null = 1002;</code>
     */
    public function setPersonCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_characteristic_id_null = $var;
    }

}

