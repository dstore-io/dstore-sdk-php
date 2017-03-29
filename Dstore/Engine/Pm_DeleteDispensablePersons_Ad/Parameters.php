<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_DeleteDispensablePersons_Ad.proto

namespace Dstore\Engine\Pm_DeleteDispensablePersons_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_DeleteDispensablePersons_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue person_type_id = 1;</code>
     */
    private $person_type_id = null;
    /**
     * <code>bool person_type_id_null = 1001;</code>
     */
    private $person_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue max_number_of_persons_to_delete = 2;</code>
     */
    private $max_number_of_persons_to_delete = null;
    /**
     * <code>bool max_number_of_persons_to_delete_null = 1002;</code>
     */
    private $max_number_of_persons_to_delete_null = false;
    /**
     * <code>.dstore.values.IntegerValue persons_created_during_last_x_days = 3;</code>
     */
    private $persons_created_during_last_x_days = null;
    /**
     * <code>bool persons_created_during_last_x_days_null = 1003;</code>
     */
    private $persons_created_during_last_x_days_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmDeleteDispensablePersonsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 1;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 1;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

    /**
     * <code>bool person_type_id_null = 1001;</code>
     */
    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    /**
     * <code>bool person_type_id_null = 1001;</code>
     */
    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue max_number_of_persons_to_delete = 2;</code>
     */
    public function getMaxNumberOfPersonsToDelete()
    {
        return $this->max_number_of_persons_to_delete;
    }

    /**
     * <code>.dstore.values.IntegerValue max_number_of_persons_to_delete = 2;</code>
     */
    public function setMaxNumberOfPersonsToDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->max_number_of_persons_to_delete = $var;
    }

    /**
     * <code>bool max_number_of_persons_to_delete_null = 1002;</code>
     */
    public function getMaxNumberOfPersonsToDeleteNull()
    {
        return $this->max_number_of_persons_to_delete_null;
    }

    /**
     * <code>bool max_number_of_persons_to_delete_null = 1002;</code>
     */
    public function setMaxNumberOfPersonsToDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_number_of_persons_to_delete_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue persons_created_during_last_x_days = 3;</code>
     */
    public function getPersonsCreatedDuringLastXDays()
    {
        return $this->persons_created_during_last_x_days;
    }

    /**
     * <code>.dstore.values.IntegerValue persons_created_during_last_x_days = 3;</code>
     */
    public function setPersonsCreatedDuringLastXDays(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->persons_created_during_last_x_days = $var;
    }

    /**
     * <code>bool persons_created_during_last_x_days_null = 1003;</code>
     */
    public function getPersonsCreatedDuringLastXDaysNull()
    {
        return $this->persons_created_during_last_x_days_null;
    }

    /**
     * <code>bool persons_created_during_last_x_days_null = 1003;</code>
     */
    public function setPersonsCreatedDuringLastXDaysNull($var)
    {
        GPBUtil::checkBool($var);
        $this->persons_created_during_last_x_days_null = $var;
    }

}
