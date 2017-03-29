<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonCharacsInCats_Ad.proto

namespace Dstore\Engine\Pm_GetPersonCharacsInCats_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPersonCharacsInCats_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue person_charac_category_id = 1;</code>
     */
    private $person_charac_category_id = null;
    /**
     * <code>bool person_charac_category_id_null = 1001;</code>
     */
    private $person_charac_category_id_null = false;
    /**
     * <code>.dstore.values.StringValue country = 2;</code>
     */
    private $country = null;
    /**
     * <code>bool country_null = 1002;</code>
     */
    private $country_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPersonCharacsInCatsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue person_charac_category_id = 1;</code>
     */
    public function getPersonCharacCategoryId()
    {
        return $this->person_charac_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_charac_category_id = 1;</code>
     */
    public function setPersonCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_charac_category_id = $var;
    }

    /**
     * <code>bool person_charac_category_id_null = 1001;</code>
     */
    public function getPersonCharacCategoryIdNull()
    {
        return $this->person_charac_category_id_null;
    }

    /**
     * <code>bool person_charac_category_id_null = 1001;</code>
     */
    public function setPersonCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_charac_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue country = 2;</code>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <code>.dstore.values.StringValue country = 2;</code>
     */
    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->country = $var;
    }

    /**
     * <code>bool country_null = 1002;</code>
     */
    public function getCountryNull()
    {
        return $this->country_null;
    }

    /**
     * <code>bool country_null = 1002;</code>
     */
    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
    }

}
