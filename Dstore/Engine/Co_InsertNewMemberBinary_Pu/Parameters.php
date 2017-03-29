<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_InsertNewMemberBinary_Pu.proto

namespace Dstore\Engine\Co_InsertNewMemberBinary_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_InsertNewMemberBinary_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue unique_id = 1;</code>
     */
    private $unique_id = null;
    /**
     * <code>bool unique_id_null = 1001;</code>
     */
    private $unique_id_null = false;
    /**
     * <code>.dstore.values.StringValue person_identification_values = 2;</code>
     */
    private $person_identification_values = null;
    /**
     * <code>bool person_identification_values_null = 1002;</code>
     */
    private $person_identification_values_null = false;
    /**
     * <code>.dstore.values.IntegerValue community_id = 3;</code>
     */
    private $community_id = null;
    /**
     * <code>bool community_id_null = 1003;</code>
     */
    private $community_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue community_member_id = 4;</code>
     */
    private $community_member_id = null;
    /**
     * <code>bool community_member_id_null = 1004;</code>
     */
    private $community_member_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue community_binary_category_id = 5;</code>
     */
    private $community_binary_category_id = null;
    /**
     * <code>bool community_binary_category_id_null = 1005;</code>
     */
    private $community_binary_category_id_null = false;
    /**
     * <code>.dstore.values.StringValue binary_description = 6;</code>
     */
    private $binary_description = null;
    /**
     * <code>bool binary_description_null = 1006;</code>
     */
    private $binary_description_null = false;
    /**
     * <code>.dstore.values.StringValue m_d5_hash = 7;</code>
     */
    private $m_d5_hash = null;
    /**
     * <code>bool m_d5_hash_null = 1007;</code>
     */
    private $m_d5_hash_null = false;
    /**
     * <code>.dstore.values.TimestampValue file_date_and_time = 8;</code>
     */
    private $file_date_and_time = null;
    /**
     * <code>bool file_date_and_time_null = 1008;</code>
     */
    private $file_date_and_time_null = false;
    /**
     * <code>.dstore.values.IntegerValue filesize_in_k_b = 9;</code>
     */
    private $filesize_in_k_b = null;
    /**
     * <code>bool filesize_in_k_b_null = 1009;</code>
     */
    private $filesize_in_k_b_null = false;
    /**
     * <code>.dstore.values.StringValue content_type = 10;</code>
     */
    private $content_type = null;
    /**
     * <code>bool content_type_null = 1010;</code>
     */
    private $content_type_null = false;
    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 11;</code>
     */
    private $separator_in_ident_vals = null;
    /**
     * <code>bool separator_in_ident_vals_null = 1011;</code>
     */
    private $separator_in_ident_vals_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoInsertNewMemberBinaryPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 1;</code>
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 1;</code>
     */
    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->unique_id = $var;
    }

    /**
     * <code>bool unique_id_null = 1001;</code>
     */
    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    /**
     * <code>bool unique_id_null = 1001;</code>
     */
    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 2;</code>
     */
    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 2;</code>
     */
    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->person_identification_values = $var;
    }

    /**
     * <code>bool person_identification_values_null = 1002;</code>
     */
    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    /**
     * <code>bool person_identification_values_null = 1002;</code>
     */
    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue community_id = 3;</code>
     */
    public function getCommunityId()
    {
        return $this->community_id;
    }

    /**
     * <code>.dstore.values.IntegerValue community_id = 3;</code>
     */
    public function setCommunityId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->community_id = $var;
    }

    /**
     * <code>bool community_id_null = 1003;</code>
     */
    public function getCommunityIdNull()
    {
        return $this->community_id_null;
    }

    /**
     * <code>bool community_id_null = 1003;</code>
     */
    public function setCommunityIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue community_member_id = 4;</code>
     */
    public function getCommunityMemberId()
    {
        return $this->community_member_id;
    }

    /**
     * <code>.dstore.values.IntegerValue community_member_id = 4;</code>
     */
    public function setCommunityMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->community_member_id = $var;
    }

    /**
     * <code>bool community_member_id_null = 1004;</code>
     */
    public function getCommunityMemberIdNull()
    {
        return $this->community_member_id_null;
    }

    /**
     * <code>bool community_member_id_null = 1004;</code>
     */
    public function setCommunityMemberIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_member_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue community_binary_category_id = 5;</code>
     */
    public function getCommunityBinaryCategoryId()
    {
        return $this->community_binary_category_id;
    }

    /**
     * <code>.dstore.values.IntegerValue community_binary_category_id = 5;</code>
     */
    public function setCommunityBinaryCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->community_binary_category_id = $var;
    }

    /**
     * <code>bool community_binary_category_id_null = 1005;</code>
     */
    public function getCommunityBinaryCategoryIdNull()
    {
        return $this->community_binary_category_id_null;
    }

    /**
     * <code>bool community_binary_category_id_null = 1005;</code>
     */
    public function setCommunityBinaryCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_binary_category_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue binary_description = 6;</code>
     */
    public function getBinaryDescription()
    {
        return $this->binary_description;
    }

    /**
     * <code>.dstore.values.StringValue binary_description = 6;</code>
     */
    public function setBinaryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->binary_description = $var;
    }

    /**
     * <code>bool binary_description_null = 1006;</code>
     */
    public function getBinaryDescriptionNull()
    {
        return $this->binary_description_null;
    }

    /**
     * <code>bool binary_description_null = 1006;</code>
     */
    public function setBinaryDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_description_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue m_d5_hash = 7;</code>
     */
    public function getMD5Hash()
    {
        return $this->m_d5_hash;
    }

    /**
     * <code>.dstore.values.StringValue m_d5_hash = 7;</code>
     */
    public function setMD5Hash(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->m_d5_hash = $var;
    }

    /**
     * <code>bool m_d5_hash_null = 1007;</code>
     */
    public function getMD5HashNull()
    {
        return $this->m_d5_hash_null;
    }

    /**
     * <code>bool m_d5_hash_null = 1007;</code>
     */
    public function setMD5HashNull($var)
    {
        GPBUtil::checkBool($var);
        $this->m_d5_hash_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue file_date_and_time = 8;</code>
     */
    public function getFileDateAndTime()
    {
        return $this->file_date_and_time;
    }

    /**
     * <code>.dstore.values.TimestampValue file_date_and_time = 8;</code>
     */
    public function setFileDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->file_date_and_time = $var;
    }

    /**
     * <code>bool file_date_and_time_null = 1008;</code>
     */
    public function getFileDateAndTimeNull()
    {
        return $this->file_date_and_time_null;
    }

    /**
     * <code>bool file_date_and_time_null = 1008;</code>
     */
    public function setFileDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->file_date_and_time_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue filesize_in_k_b = 9;</code>
     */
    public function getFilesizeInKB()
    {
        return $this->filesize_in_k_b;
    }

    /**
     * <code>.dstore.values.IntegerValue filesize_in_k_b = 9;</code>
     */
    public function setFilesizeInKB(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->filesize_in_k_b = $var;
    }

    /**
     * <code>bool filesize_in_k_b_null = 1009;</code>
     */
    public function getFilesizeInKBNull()
    {
        return $this->filesize_in_k_b_null;
    }

    /**
     * <code>bool filesize_in_k_b_null = 1009;</code>
     */
    public function setFilesizeInKBNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filesize_in_k_b_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue content_type = 10;</code>
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * <code>.dstore.values.StringValue content_type = 10;</code>
     */
    public function setContentType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->content_type = $var;
    }

    /**
     * <code>bool content_type_null = 1010;</code>
     */
    public function getContentTypeNull()
    {
        return $this->content_type_null;
    }

    /**
     * <code>bool content_type_null = 1010;</code>
     */
    public function setContentTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->content_type_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 11;</code>
     */
    public function getSeparatorInIdentVals()
    {
        return $this->separator_in_ident_vals;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 11;</code>
     */
    public function setSeparatorInIdentVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->separator_in_ident_vals = $var;
    }

    /**
     * <code>bool separator_in_ident_vals_null = 1011;</code>
     */
    public function getSeparatorInIdentValsNull()
    {
        return $this->separator_in_ident_vals_null;
    }

    /**
     * <code>bool separator_in_ident_vals_null = 1011;</code>
     */
    public function setSeparatorInIdentValsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_ident_vals_null = $var;
    }

}
