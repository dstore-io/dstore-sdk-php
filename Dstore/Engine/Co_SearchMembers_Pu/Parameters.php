<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_SearchMembers_Pu.proto

namespace Dstore\Engine\Co_SearchMembers_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_SearchMembers_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue rowcount = 1;</code>
     */
    private $rowcount = null;
    /**
     * <code>bool rowcount_null = 1001;</code>
     */
    private $rowcount_null = false;
    /**
     * <code>.dstore.values.IntegerValue result = 2;</code>
     */
    private $result = null;
    /**
     * <code>bool result_null = 1002;</code>
     */
    private $result_null = false;
    /**
     * <code>.dstore.values.StringValue unique_id = 3;</code>
     */
    private $unique_id = null;
    /**
     * <code>bool unique_id_null = 1003;</code>
     */
    private $unique_id_null = false;
    /**
     * <code>.dstore.values.StringValue person_identification_values = 4;</code>
     */
    private $person_identification_values = null;
    /**
     * <code>bool person_identification_values_null = 1004;</code>
     */
    private $person_identification_values_null = false;
    /**
     * <code>.dstore.values.IntegerValue community_id = 5;</code>
     */
    private $community_id = null;
    /**
     * <code>bool community_id_null = 1005;</code>
     */
    private $community_id_null = false;
    /**
     * <code>.dstore.values.StringValue search_string = 6;</code>
     */
    private $search_string = null;
    /**
     * <code>bool search_string_null = 1006;</code>
     */
    private $search_string_null = false;
    /**
     * <code>.dstore.values.IntegerValue max_number_of_rows = 7;</code>
     */
    private $max_number_of_rows = null;
    /**
     * <code>bool max_number_of_rows_null = 1007;</code>
     */
    private $max_number_of_rows_null = false;
    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 8;</code>
     */
    private $case_sensitive = null;
    /**
     * <code>bool case_sensitive_null = 1008;</code>
     */
    private $case_sensitive_null = false;
    /**
     * <code>.dstore.values.IntegerValue output_characteristic_id1 = 9;</code>
     */
    private $output_characteristic_id1 = null;
    /**
     * <code>bool output_characteristic_id1_null = 1009;</code>
     */
    private $output_characteristic_id1_null = false;
    /**
     * <code>.dstore.values.IntegerValue output_characteristic_id2 = 10;</code>
     */
    private $output_characteristic_id2 = null;
    /**
     * <code>bool output_characteristic_id2_null = 1010;</code>
     */
    private $output_characteristic_id2_null = false;
    /**
     * <code>.dstore.values.IntegerValue output_characteristic_id3 = 11;</code>
     */
    private $output_characteristic_id3 = null;
    /**
     * <code>bool output_characteristic_id3_null = 1011;</code>
     */
    private $output_characteristic_id3_null = false;
    /**
     * <code>.dstore.values.IntegerValue community_binary_category_id = 12;</code>
     */
    private $community_binary_category_id = null;
    /**
     * <code>bool community_binary_category_id_null = 1012;</code>
     */
    private $community_binary_category_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue exact_matching = 13;</code>
     */
    private $exact_matching = null;
    /**
     * <code>bool exact_matching_null = 1013;</code>
     */
    private $exact_matching_null = false;
    /**
     * <code>.dstore.values.BooleanValue online_status_instead_of_is_online = 14;</code>
     */
    private $online_status_instead_of_is_online = null;
    /**
     * <code>bool online_status_instead_of_is_online_null = 1014;</code>
     */
    private $online_status_instead_of_is_online_null = false;
    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 15;</code>
     */
    private $characteristic_id_list = null;
    /**
     * <code>bool characteristic_id_list_null = 1015;</code>
     */
    private $characteristic_id_list_null = false;
    /**
     * <code>.dstore.values.StringValue condition_list = 16;</code>
     */
    private $condition_list = null;
    /**
     * <code>bool condition_list_null = 1016;</code>
     */
    private $condition_list_null = false;
    /**
     * <code>.dstore.values.StringValue country = 17;</code>
     */
    private $country = null;
    /**
     * <code>bool country_null = 1017;</code>
     */
    private $country_null = false;
    /**
     * <code>.dstore.values.IntegerValue output_into_one_id = 18;</code>
     */
    private $output_into_one_id = null;
    /**
     * <code>bool output_into_one_id_null = 1018;</code>
     */
    private $output_into_one_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue search_only_members_in_one_id = 19;</code>
     */
    private $search_only_members_in_one_id = null;
    /**
     * <code>bool search_only_members_in_one_id_null = 1019;</code>
     */
    private $search_only_members_in_one_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue filter_by_binary_category_id = 20;</code>
     */
    private $filter_by_binary_category_id = null;
    /**
     * <code>bool filter_by_binary_category_id_null = 1020;</code>
     */
    private $filter_by_binary_category_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue count = 21;</code>
     */
    private $count = null;
    /**
     * <code>bool count_null = 1021;</code>
     */
    private $count_null = false;
    /**
     * <code>.dstore.values.StringValue last_nickname = 22;</code>
     */
    private $last_nickname = null;
    /**
     * <code>bool last_nickname_null = 1022;</code>
     */
    private $last_nickname_null = false;
    /**
     * <code>.dstore.values.BooleanValue next = 23;</code>
     */
    private $next = null;
    /**
     * <code>bool next_null = 1023;</code>
     */
    private $next_null = false;
    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 24;</code>
     */
    private $separator_in_ident_vals = null;
    /**
     * <code>bool separator_in_ident_vals_null = 1024;</code>
     */
    private $separator_in_ident_vals_null = false;
    /**
     * <code>.dstore.values.StringValue separator_in_condition_list = 25;</code>
     */
    private $separator_in_condition_list = null;
    /**
     * <code>bool separator_in_condition_list_null = 1025;</code>
     */
    private $separator_in_condition_list_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoSearchMembersPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue rowcount = 1;</code>
     */
    public function getRowcount()
    {
        return $this->rowcount;
    }

    /**
     * <code>.dstore.values.IntegerValue rowcount = 1;</code>
     */
    public function setRowcount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->rowcount = $var;
    }

    /**
     * <code>bool rowcount_null = 1001;</code>
     */
    public function getRowcountNull()
    {
        return $this->rowcount_null;
    }

    /**
     * <code>bool rowcount_null = 1001;</code>
     */
    public function setRowcountNull($var)
    {
        GPBUtil::checkBool($var);
        $this->rowcount_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue result = 2;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.dstore.values.IntegerValue result = 2;</code>
     */
    public function setResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->result = $var;
    }

    /**
     * <code>bool result_null = 1002;</code>
     */
    public function getResultNull()
    {
        return $this->result_null;
    }

    /**
     * <code>bool result_null = 1002;</code>
     */
    public function setResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->result_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 3;</code>
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 3;</code>
     */
    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->unique_id = $var;
    }

    /**
     * <code>bool unique_id_null = 1003;</code>
     */
    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    /**
     * <code>bool unique_id_null = 1003;</code>
     */
    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 4;</code>
     */
    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 4;</code>
     */
    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->person_identification_values = $var;
    }

    /**
     * <code>bool person_identification_values_null = 1004;</code>
     */
    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    /**
     * <code>bool person_identification_values_null = 1004;</code>
     */
    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue community_id = 5;</code>
     */
    public function getCommunityId()
    {
        return $this->community_id;
    }

    /**
     * <code>.dstore.values.IntegerValue community_id = 5;</code>
     */
    public function setCommunityId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->community_id = $var;
    }

    /**
     * <code>bool community_id_null = 1005;</code>
     */
    public function getCommunityIdNull()
    {
        return $this->community_id_null;
    }

    /**
     * <code>bool community_id_null = 1005;</code>
     */
    public function setCommunityIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue search_string = 6;</code>
     */
    public function getSearchString()
    {
        return $this->search_string;
    }

    /**
     * <code>.dstore.values.StringValue search_string = 6;</code>
     */
    public function setSearchString(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->search_string = $var;
    }

    /**
     * <code>bool search_string_null = 1006;</code>
     */
    public function getSearchStringNull()
    {
        return $this->search_string_null;
    }

    /**
     * <code>bool search_string_null = 1006;</code>
     */
    public function setSearchStringNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_string_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue max_number_of_rows = 7;</code>
     */
    public function getMaxNumberOfRows()
    {
        return $this->max_number_of_rows;
    }

    /**
     * <code>.dstore.values.IntegerValue max_number_of_rows = 7;</code>
     */
    public function setMaxNumberOfRows(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->max_number_of_rows = $var;
    }

    /**
     * <code>bool max_number_of_rows_null = 1007;</code>
     */
    public function getMaxNumberOfRowsNull()
    {
        return $this->max_number_of_rows_null;
    }

    /**
     * <code>bool max_number_of_rows_null = 1007;</code>
     */
    public function setMaxNumberOfRowsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_number_of_rows_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 8;</code>
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 8;</code>
     */
    public function setCaseSensitive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->case_sensitive = $var;
    }

    /**
     * <code>bool case_sensitive_null = 1008;</code>
     */
    public function getCaseSensitiveNull()
    {
        return $this->case_sensitive_null;
    }

    /**
     * <code>bool case_sensitive_null = 1008;</code>
     */
    public function setCaseSensitiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue output_characteristic_id1 = 9;</code>
     */
    public function getOutputCharacteristicId1()
    {
        return $this->output_characteristic_id1;
    }

    /**
     * <code>.dstore.values.IntegerValue output_characteristic_id1 = 9;</code>
     */
    public function setOutputCharacteristicId1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->output_characteristic_id1 = $var;
    }

    /**
     * <code>bool output_characteristic_id1_null = 1009;</code>
     */
    public function getOutputCharacteristicId1Null()
    {
        return $this->output_characteristic_id1_null;
    }

    /**
     * <code>bool output_characteristic_id1_null = 1009;</code>
     */
    public function setOutputCharacteristicId1Null($var)
    {
        GPBUtil::checkBool($var);
        $this->output_characteristic_id1_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue output_characteristic_id2 = 10;</code>
     */
    public function getOutputCharacteristicId2()
    {
        return $this->output_characteristic_id2;
    }

    /**
     * <code>.dstore.values.IntegerValue output_characteristic_id2 = 10;</code>
     */
    public function setOutputCharacteristicId2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->output_characteristic_id2 = $var;
    }

    /**
     * <code>bool output_characteristic_id2_null = 1010;</code>
     */
    public function getOutputCharacteristicId2Null()
    {
        return $this->output_characteristic_id2_null;
    }

    /**
     * <code>bool output_characteristic_id2_null = 1010;</code>
     */
    public function setOutputCharacteristicId2Null($var)
    {
        GPBUtil::checkBool($var);
        $this->output_characteristic_id2_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue output_characteristic_id3 = 11;</code>
     */
    public function getOutputCharacteristicId3()
    {
        return $this->output_characteristic_id3;
    }

    /**
     * <code>.dstore.values.IntegerValue output_characteristic_id3 = 11;</code>
     */
    public function setOutputCharacteristicId3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->output_characteristic_id3 = $var;
    }

    /**
     * <code>bool output_characteristic_id3_null = 1011;</code>
     */
    public function getOutputCharacteristicId3Null()
    {
        return $this->output_characteristic_id3_null;
    }

    /**
     * <code>bool output_characteristic_id3_null = 1011;</code>
     */
    public function setOutputCharacteristicId3Null($var)
    {
        GPBUtil::checkBool($var);
        $this->output_characteristic_id3_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue community_binary_category_id = 12;</code>
     */
    public function getCommunityBinaryCategoryId()
    {
        return $this->community_binary_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue community_binary_category_id = 12;</code>
     */
    public function setCommunityBinaryCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->community_binary_category_id = $var;
    }

    /**
     * <code>bool community_binary_category_id_null = 1012;</code>
     */
    public function getCommunityBinaryCategoryIdNull()
    {
        return $this->community_binary_category_id_null;
    }

    /**
     * <code>bool community_binary_category_id_null = 1012;</code>
     */
    public function setCommunityBinaryCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_binary_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue exact_matching = 13;</code>
     */
    public function getExactMatching()
    {
        return $this->exact_matching;
    }

    /**
     * <code>.dstore.values.BooleanValue exact_matching = 13;</code>
     */
    public function setExactMatching(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->exact_matching = $var;
    }

    /**
     * <code>bool exact_matching_null = 1013;</code>
     */
    public function getExactMatchingNull()
    {
        return $this->exact_matching_null;
    }

    /**
     * <code>bool exact_matching_null = 1013;</code>
     */
    public function setExactMatchingNull($var)
    {
        GPBUtil::checkBool($var);
        $this->exact_matching_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue online_status_instead_of_is_online = 14;</code>
     */
    public function getOnlineStatusInsteadOfIsOnline()
    {
        return $this->online_status_instead_of_is_online;
    }

    /**
     * <code>.dstore.values.BooleanValue online_status_instead_of_is_online = 14;</code>
     */
    public function setOnlineStatusInsteadOfIsOnline(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->online_status_instead_of_is_online = $var;
    }

    /**
     * <code>bool online_status_instead_of_is_online_null = 1014;</code>
     */
    public function getOnlineStatusInsteadOfIsOnlineNull()
    {
        return $this->online_status_instead_of_is_online_null;
    }

    /**
     * <code>bool online_status_instead_of_is_online_null = 1014;</code>
     */
    public function setOnlineStatusInsteadOfIsOnlineNull($var)
    {
        GPBUtil::checkBool($var);
        $this->online_status_instead_of_is_online_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 15;</code>
     */
    public function getCharacteristicIdList()
    {
        return $this->characteristic_id_list;
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 15;</code>
     */
    public function setCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->characteristic_id_list = $var;
    }

    /**
     * <code>bool characteristic_id_list_null = 1015;</code>
     */
    public function getCharacteristicIdListNull()
    {
        return $this->characteristic_id_list_null;
    }

    /**
     * <code>bool characteristic_id_list_null = 1015;</code>
     */
    public function setCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue condition_list = 16;</code>
     */
    public function getConditionList()
    {
        return $this->condition_list;
    }

    /**
     * <code>.dstore.values.StringValue condition_list = 16;</code>
     */
    public function setConditionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->condition_list = $var;
    }

    /**
     * <code>bool condition_list_null = 1016;</code>
     */
    public function getConditionListNull()
    {
        return $this->condition_list_null;
    }

    /**
     * <code>bool condition_list_null = 1016;</code>
     */
    public function setConditionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue country = 17;</code>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <code>.dstore.values.StringValue country = 17;</code>
     */
    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->country = $var;
    }

    /**
     * <code>bool country_null = 1017;</code>
     */
    public function getCountryNull()
    {
        return $this->country_null;
    }

    /**
     * <code>bool country_null = 1017;</code>
     */
    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue output_into_one_id = 18;</code>
     */
    public function getOutputIntoOneId()
    {
        return $this->output_into_one_id;
    }

    /**
     * <code>.dstore.values.IntegerValue output_into_one_id = 18;</code>
     */
    public function setOutputIntoOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->output_into_one_id = $var;
    }

    /**
     * <code>bool output_into_one_id_null = 1018;</code>
     */
    public function getOutputIntoOneIdNull()
    {
        return $this->output_into_one_id_null;
    }

    /**
     * <code>bool output_into_one_id_null = 1018;</code>
     */
    public function setOutputIntoOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->output_into_one_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue search_only_members_in_one_id = 19;</code>
     */
    public function getSearchOnlyMembersInOneId()
    {
        return $this->search_only_members_in_one_id;
    }

    /**
     * <code>.dstore.values.IntegerValue search_only_members_in_one_id = 19;</code>
     */
    public function setSearchOnlyMembersInOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->search_only_members_in_one_id = $var;
    }

    /**
     * <code>bool search_only_members_in_one_id_null = 1019;</code>
     */
    public function getSearchOnlyMembersInOneIdNull()
    {
        return $this->search_only_members_in_one_id_null;
    }

    /**
     * <code>bool search_only_members_in_one_id_null = 1019;</code>
     */
    public function setSearchOnlyMembersInOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_only_members_in_one_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue filter_by_binary_category_id = 20;</code>
     */
    public function getFilterByBinaryCategoryId()
    {
        return $this->filter_by_binary_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue filter_by_binary_category_id = 20;</code>
     */
    public function setFilterByBinaryCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->filter_by_binary_category_id = $var;
    }

    /**
     * <code>bool filter_by_binary_category_id_null = 1020;</code>
     */
    public function getFilterByBinaryCategoryIdNull()
    {
        return $this->filter_by_binary_category_id_null;
    }

    /**
     * <code>bool filter_by_binary_category_id_null = 1020;</code>
     */
    public function setFilterByBinaryCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_binary_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue count = 21;</code>
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <code>.dstore.values.IntegerValue count = 21;</code>
     */
    public function setCount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->count = $var;
    }

    /**
     * <code>bool count_null = 1021;</code>
     */
    public function getCountNull()
    {
        return $this->count_null;
    }

    /**
     * <code>bool count_null = 1021;</code>
     */
    public function setCountNull($var)
    {
        GPBUtil::checkBool($var);
        $this->count_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue last_nickname = 22;</code>
     */
    public function getLastNickname()
    {
        return $this->last_nickname;
    }

    /**
     * <code>.dstore.values.StringValue last_nickname = 22;</code>
     */
    public function setLastNickname(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->last_nickname = $var;
    }

    /**
     * <code>bool last_nickname_null = 1022;</code>
     */
    public function getLastNicknameNull()
    {
        return $this->last_nickname_null;
    }

    /**
     * <code>bool last_nickname_null = 1022;</code>
     */
    public function setLastNicknameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->last_nickname_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue next = 23;</code>
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * <code>.dstore.values.BooleanValue next = 23;</code>
     */
    public function setNext(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->next = $var;
    }

    /**
     * <code>bool next_null = 1023;</code>
     */
    public function getNextNull()
    {
        return $this->next_null;
    }

    /**
     * <code>bool next_null = 1023;</code>
     */
    public function setNextNull($var)
    {
        GPBUtil::checkBool($var);
        $this->next_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 24;</code>
     */
    public function getSeparatorInIdentVals()
    {
        return $this->separator_in_ident_vals;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 24;</code>
     */
    public function setSeparatorInIdentVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->separator_in_ident_vals = $var;
    }

    /**
     * <code>bool separator_in_ident_vals_null = 1024;</code>
     */
    public function getSeparatorInIdentValsNull()
    {
        return $this->separator_in_ident_vals_null;
    }

    /**
     * <code>bool separator_in_ident_vals_null = 1024;</code>
     */
    public function setSeparatorInIdentValsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_ident_vals_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_condition_list = 25;</code>
     */
    public function getSeparatorInConditionList()
    {
        return $this->separator_in_condition_list;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_condition_list = 25;</code>
     */
    public function setSeparatorInConditionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->separator_in_condition_list = $var;
    }

    /**
     * <code>bool separator_in_condition_list_null = 1025;</code>
     */
    public function getSeparatorInConditionListNull()
    {
        return $this->separator_in_condition_list_null;
    }

    /**
     * <code>bool separator_in_condition_list_null = 1025;</code>
     */
    public function setSeparatorInConditionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_condition_list_null = $var;
    }

}

