<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonProperties_Ad.proto

namespace Dstore\Engine\Pm_GetPersonProperties_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPersonProperties_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    private $person_id = null;
    /**
     * <code>bool person_id_null = 1001;</code>
     */
    private $person_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    private $language_id = null;
    /**
     * <code>bool language_id_null = 1002;</code>
     */
    private $language_id_null = false;
    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 3;</code>
     */
    private $characteristic_id_list = null;
    /**
     * <code>bool characteristic_id_list_null = 1003;</code>
     */
    private $characteristic_id_list_null = false;
    /**
     * <code>.dstore.values.StringValue date_format = 4;</code>
     */
    private $date_format = null;
    /**
     * <code>bool date_format_null = 1004;</code>
     */
    private $date_format_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_charac_category_id = 5;</code>
     */
    private $person_charac_category_id = null;
    /**
     * <code>bool person_charac_category_id_null = 1005;</code>
     */
    private $person_charac_category_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_creation_date_and_time = 6;</code>
     */
    private $include_creation_date_and_time = null;
    /**
     * <code>bool include_creation_date_and_time_null = 1006;</code>
     */
    private $include_creation_date_and_time_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_person_charac_category_id = 7;</code>
     */
    private $include_person_charac_category_id = null;
    /**
     * <code>bool include_person_charac_category_id_null = 1007;</code>
     */
    private $include_person_charac_category_id_null = false;
    /**
     * <code>.dstore.values.TimestampValue date_and_time = 8;</code>
     */
    private $date_and_time = null;
    /**
     * <code>bool date_and_time_null = 1008;</code>
     */
    private $date_and_time_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_actual_properties = 9;</code>
     */
    private $get_actual_properties = null;
    /**
     * <code>bool get_actual_properties_null = 1009;</code>
     */
    private $get_actual_properties_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_person_type_id_only = 10;</code>
     */
    private $get_person_type_id_only = null;
    /**
     * <code>bool get_person_type_id_only_null = 1010;</code>
     */
    private $get_person_type_id_only_null = false;
    /**
     * <code>.dstore.values.BooleanValue ignore_bad_person_ids_in_one_id = 11;</code>
     */
    private $ignore_bad_person_ids_in_one_id = null;
    /**
     * <code>bool ignore_bad_person_ids_in_one_id_null = 1011;</code>
     */
    private $ignore_bad_person_ids_in_one_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue only_rows_for_existing_properties = 12;</code>
     */
    private $only_rows_for_existing_properties = null;
    /**
     * <code>bool only_rows_for_existing_properties_null = 1012;</code>
     */
    private $only_rows_for_existing_properties_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_details_info = 13;</code>
     */
    private $get_details_info = null;
    /**
     * <code>bool get_details_info_null = 1013;</code>
     */
    private $get_details_info_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPersonPropertiesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 1;</code>
     */
    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_id = $var;
    }

    /**
     * <code>bool person_id_null = 1001;</code>
     */
    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    /**
     * <code>bool person_id_null = 1001;</code>
     */
    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 2;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

    /**
     * <code>bool language_id_null = 1002;</code>
     */
    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    /**
     * <code>bool language_id_null = 1002;</code>
     */
    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 3;</code>
     */
    public function getCharacteristicIdList()
    {
        return $this->characteristic_id_list;
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 3;</code>
     */
    public function setCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->characteristic_id_list = $var;
    }

    /**
     * <code>bool characteristic_id_list_null = 1003;</code>
     */
    public function getCharacteristicIdListNull()
    {
        return $this->characteristic_id_list_null;
    }

    /**
     * <code>bool characteristic_id_list_null = 1003;</code>
     */
    public function setCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue date_format = 4;</code>
     */
    public function getDateFormat()
    {
        return $this->date_format;
    }

    /**
     * <code>.dstore.values.StringValue date_format = 4;</code>
     */
    public function setDateFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->date_format = $var;
    }

    /**
     * <code>bool date_format_null = 1004;</code>
     */
    public function getDateFormatNull()
    {
        return $this->date_format_null;
    }

    /**
     * <code>bool date_format_null = 1004;</code>
     */
    public function setDateFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_format_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_charac_category_id = 5;</code>
     */
    public function getPersonCharacCategoryId()
    {
        return $this->person_charac_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_charac_category_id = 5;</code>
     */
    public function setPersonCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_charac_category_id = $var;
    }

    /**
     * <code>bool person_charac_category_id_null = 1005;</code>
     */
    public function getPersonCharacCategoryIdNull()
    {
        return $this->person_charac_category_id_null;
    }

    /**
     * <code>bool person_charac_category_id_null = 1005;</code>
     */
    public function setPersonCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_charac_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_creation_date_and_time = 6;</code>
     */
    public function getIncludeCreationDateAndTime()
    {
        return $this->include_creation_date_and_time;
    }

    /**
     * <code>.dstore.values.BooleanValue include_creation_date_and_time = 6;</code>
     */
    public function setIncludeCreationDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_creation_date_and_time = $var;
    }

    /**
     * <code>bool include_creation_date_and_time_null = 1006;</code>
     */
    public function getIncludeCreationDateAndTimeNull()
    {
        return $this->include_creation_date_and_time_null;
    }

    /**
     * <code>bool include_creation_date_and_time_null = 1006;</code>
     */
    public function setIncludeCreationDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_creation_date_and_time_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_person_charac_category_id = 7;</code>
     */
    public function getIncludePersonCharacCategoryId()
    {
        return $this->include_person_charac_category_id;
    }

    /**
     * <code>.dstore.values.BooleanValue include_person_charac_category_id = 7;</code>
     */
    public function setIncludePersonCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_person_charac_category_id = $var;
    }

    /**
     * <code>bool include_person_charac_category_id_null = 1007;</code>
     */
    public function getIncludePersonCharacCategoryIdNull()
    {
        return $this->include_person_charac_category_id_null;
    }

    /**
     * <code>bool include_person_charac_category_id_null = 1007;</code>
     */
    public function setIncludePersonCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_person_charac_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue date_and_time = 8;</code>
     */
    public function getDateAndTime()
    {
        return $this->date_and_time;
    }

    /**
     * <code>.dstore.values.TimestampValue date_and_time = 8;</code>
     */
    public function setDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->date_and_time = $var;
    }

    /**
     * <code>bool date_and_time_null = 1008;</code>
     */
    public function getDateAndTimeNull()
    {
        return $this->date_and_time_null;
    }

    /**
     * <code>bool date_and_time_null = 1008;</code>
     */
    public function setDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_and_time_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_actual_properties = 9;</code>
     */
    public function getGetActualProperties()
    {
        return $this->get_actual_properties;
    }

    /**
     * <code>.dstore.values.BooleanValue get_actual_properties = 9;</code>
     */
    public function setGetActualProperties(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_actual_properties = $var;
    }

    /**
     * <code>bool get_actual_properties_null = 1009;</code>
     */
    public function getGetActualPropertiesNull()
    {
        return $this->get_actual_properties_null;
    }

    /**
     * <code>bool get_actual_properties_null = 1009;</code>
     */
    public function setGetActualPropertiesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_actual_properties_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_person_type_id_only = 10;</code>
     */
    public function getGetPersonTypeIdOnly()
    {
        return $this->get_person_type_id_only;
    }

    /**
     * <code>.dstore.values.BooleanValue get_person_type_id_only = 10;</code>
     */
    public function setGetPersonTypeIdOnly(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_person_type_id_only = $var;
    }

    /**
     * <code>bool get_person_type_id_only_null = 1010;</code>
     */
    public function getGetPersonTypeIdOnlyNull()
    {
        return $this->get_person_type_id_only_null;
    }

    /**
     * <code>bool get_person_type_id_only_null = 1010;</code>
     */
    public function setGetPersonTypeIdOnlyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_person_type_id_only_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue ignore_bad_person_ids_in_one_id = 11;</code>
     */
    public function getIgnoreBadPersonIdsInOneId()
    {
        return $this->ignore_bad_person_ids_in_one_id;
    }

    /**
     * <code>.dstore.values.BooleanValue ignore_bad_person_ids_in_one_id = 11;</code>
     */
    public function setIgnoreBadPersonIdsInOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->ignore_bad_person_ids_in_one_id = $var;
    }

    /**
     * <code>bool ignore_bad_person_ids_in_one_id_null = 1011;</code>
     */
    public function getIgnoreBadPersonIdsInOneIdNull()
    {
        return $this->ignore_bad_person_ids_in_one_id_null;
    }

    /**
     * <code>bool ignore_bad_person_ids_in_one_id_null = 1011;</code>
     */
    public function setIgnoreBadPersonIdsInOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_bad_person_ids_in_one_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue only_rows_for_existing_properties = 12;</code>
     */
    public function getOnlyRowsForExistingProperties()
    {
        return $this->only_rows_for_existing_properties;
    }

    /**
     * <code>.dstore.values.BooleanValue only_rows_for_existing_properties = 12;</code>
     */
    public function setOnlyRowsForExistingProperties(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->only_rows_for_existing_properties = $var;
    }

    /**
     * <code>bool only_rows_for_existing_properties_null = 1012;</code>
     */
    public function getOnlyRowsForExistingPropertiesNull()
    {
        return $this->only_rows_for_existing_properties_null;
    }

    /**
     * <code>bool only_rows_for_existing_properties_null = 1012;</code>
     */
    public function setOnlyRowsForExistingPropertiesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_rows_for_existing_properties_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_details_info = 13;</code>
     */
    public function getGetDetailsInfo()
    {
        return $this->get_details_info;
    }

    /**
     * <code>.dstore.values.BooleanValue get_details_info = 13;</code>
     */
    public function setGetDetailsInfo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_details_info = $var;
    }

    /**
     * <code>bool get_details_info_null = 1013;</code>
     */
    public function getGetDetailsInfoNull()
    {
        return $this->get_details_info_null;
    }

    /**
     * <code>bool get_details_info_null = 1013;</code>
     */
    public function setGetDetailsInfoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_details_info_null = $var;
    }

}
