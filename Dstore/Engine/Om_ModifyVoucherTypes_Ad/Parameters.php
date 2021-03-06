<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyVoucherTypes_Ad.proto

namespace Dstore\Engine\Om_ModifyVoucherTypes_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyVoucherTypes_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue voucher_type_id = 1;</code>
     */
    private $voucher_type_id = null;
    /**
     * <code>bool voucher_type_id_null = 1001;</code>
     */
    private $voucher_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue description = 2;</code>
     */
    private $description = null;
    /**
     * <code>bool description_null = 1002;</code>
     */
    private $description_null = false;
    /**
     * <code>.dstore.values.IntegerValue v_code_origin_type_id = 3;</code>
     */
    private $v_code_origin_type_id = null;
    /**
     * <code>bool v_code_origin_type_id_null = 1003;</code>
     */
    private $v_code_origin_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue generation_pattern = 4;</code>
     */
    private $generation_pattern = null;
    /**
     * <code>bool generation_pattern_null = 1004;</code>
     */
    private $generation_pattern_null = false;
    /**
     * <code>.dstore.values.IntegerValue benefit_type_id = 5;</code>
     */
    private $benefit_type_id = null;
    /**
     * <code>bool benefit_type_id_null = 1005;</code>
     */
    private $benefit_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue valid_for_x_days = 6;</code>
     */
    private $valid_for_x_days = null;
    /**
     * <code>bool valid_for_x_days_null = 1006;</code>
     */
    private $valid_for_x_days_null = false;
    /**
     * <code>.dstore.values.TimestampValue default_valid_until = 7;</code>
     */
    private $default_valid_until = null;
    /**
     * <code>bool default_valid_until_null = 1007;</code>
     */
    private $default_valid_until_null = false;
    /**
     * <code>.dstore.values.IntegerValue code_status = 8;</code>
     */
    private $code_status = null;
    /**
     * <code>bool code_status_null = 1008;</code>
     */
    private $code_status_null = false;
    /**
     * <code>.dstore.values.IntegerValue x_times_usable = 9;</code>
     */
    private $x_times_usable = null;
    /**
     * <code>bool x_times_usable_null = 1009;</code>
     */
    private $x_times_usable_null = false;
    /**
     * <code>.dstore.values.IntegerValue x_times_usable_per_person = 10;</code>
     */
    private $x_times_usable_per_person = null;
    /**
     * <code>bool x_times_usable_per_person_null = 1010;</code>
     */
    private $x_times_usable_per_person_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_voucher_type = 11;</code>
     */
    private $delete_voucher_type = null;
    /**
     * <code>bool delete_voucher_type_null = 1011;</code>
     */
    private $delete_voucher_type_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyVoucherTypesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue voucher_type_id = 1;</code>
     */
    public function getVoucherTypeId()
    {
        return $this->voucher_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue voucher_type_id = 1;</code>
     */
    public function setVoucherTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->voucher_type_id = $var;
    }

    /**
     * <code>bool voucher_type_id_null = 1001;</code>
     */
    public function getVoucherTypeIdNull()
    {
        return $this->voucher_type_id_null;
    }

    /**
     * <code>bool voucher_type_id_null = 1001;</code>
     */
    public function setVoucherTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->voucher_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue description = 2;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <code>.dstore.values.StringValue description = 2;</code>
     */
    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description = $var;
    }

    /**
     * <code>bool description_null = 1002;</code>
     */
    public function getDescriptionNull()
    {
        return $this->description_null;
    }

    /**
     * <code>bool description_null = 1002;</code>
     */
    public function setDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->description_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue v_code_origin_type_id = 3;</code>
     */
    public function getVCodeOriginTypeId()
    {
        return $this->v_code_origin_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue v_code_origin_type_id = 3;</code>
     */
    public function setVCodeOriginTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->v_code_origin_type_id = $var;
    }

    /**
     * <code>bool v_code_origin_type_id_null = 1003;</code>
     */
    public function getVCodeOriginTypeIdNull()
    {
        return $this->v_code_origin_type_id_null;
    }

    /**
     * <code>bool v_code_origin_type_id_null = 1003;</code>
     */
    public function setVCodeOriginTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->v_code_origin_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue generation_pattern = 4;</code>
     */
    public function getGenerationPattern()
    {
        return $this->generation_pattern;
    }

    /**
     * <code>.dstore.values.StringValue generation_pattern = 4;</code>
     */
    public function setGenerationPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->generation_pattern = $var;
    }

    /**
     * <code>bool generation_pattern_null = 1004;</code>
     */
    public function getGenerationPatternNull()
    {
        return $this->generation_pattern_null;
    }

    /**
     * <code>bool generation_pattern_null = 1004;</code>
     */
    public function setGenerationPatternNull($var)
    {
        GPBUtil::checkBool($var);
        $this->generation_pattern_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue benefit_type_id = 5;</code>
     */
    public function getBenefitTypeId()
    {
        return $this->benefit_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue benefit_type_id = 5;</code>
     */
    public function setBenefitTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->benefit_type_id = $var;
    }

    /**
     * <code>bool benefit_type_id_null = 1005;</code>
     */
    public function getBenefitTypeIdNull()
    {
        return $this->benefit_type_id_null;
    }

    /**
     * <code>bool benefit_type_id_null = 1005;</code>
     */
    public function setBenefitTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->benefit_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue valid_for_x_days = 6;</code>
     */
    public function getValidForXDays()
    {
        return $this->valid_for_x_days;
    }

    /**
     * <code>.dstore.values.IntegerValue valid_for_x_days = 6;</code>
     */
    public function setValidForXDays(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->valid_for_x_days = $var;
    }

    /**
     * <code>bool valid_for_x_days_null = 1006;</code>
     */
    public function getValidForXDaysNull()
    {
        return $this->valid_for_x_days_null;
    }

    /**
     * <code>bool valid_for_x_days_null = 1006;</code>
     */
    public function setValidForXDaysNull($var)
    {
        GPBUtil::checkBool($var);
        $this->valid_for_x_days_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue default_valid_until = 7;</code>
     */
    public function getDefaultValidUntil()
    {
        return $this->default_valid_until;
    }

    /**
     * <code>.dstore.values.TimestampValue default_valid_until = 7;</code>
     */
    public function setDefaultValidUntil(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->default_valid_until = $var;
    }

    /**
     * <code>bool default_valid_until_null = 1007;</code>
     */
    public function getDefaultValidUntilNull()
    {
        return $this->default_valid_until_null;
    }

    /**
     * <code>bool default_valid_until_null = 1007;</code>
     */
    public function setDefaultValidUntilNull($var)
    {
        GPBUtil::checkBool($var);
        $this->default_valid_until_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue code_status = 8;</code>
     */
    public function getCodeStatus()
    {
        return $this->code_status;
    }

    /**
     * <code>.dstore.values.IntegerValue code_status = 8;</code>
     */
    public function setCodeStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->code_status = $var;
    }

    /**
     * <code>bool code_status_null = 1008;</code>
     */
    public function getCodeStatusNull()
    {
        return $this->code_status_null;
    }

    /**
     * <code>bool code_status_null = 1008;</code>
     */
    public function setCodeStatusNull($var)
    {
        GPBUtil::checkBool($var);
        $this->code_status_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue x_times_usable = 9;</code>
     */
    public function getXTimesUsable()
    {
        return $this->x_times_usable;
    }

    /**
     * <code>.dstore.values.IntegerValue x_times_usable = 9;</code>
     */
    public function setXTimesUsable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->x_times_usable = $var;
    }

    /**
     * <code>bool x_times_usable_null = 1009;</code>
     */
    public function getXTimesUsableNull()
    {
        return $this->x_times_usable_null;
    }

    /**
     * <code>bool x_times_usable_null = 1009;</code>
     */
    public function setXTimesUsableNull($var)
    {
        GPBUtil::checkBool($var);
        $this->x_times_usable_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue x_times_usable_per_person = 10;</code>
     */
    public function getXTimesUsablePerPerson()
    {
        return $this->x_times_usable_per_person;
    }

    /**
     * <code>.dstore.values.IntegerValue x_times_usable_per_person = 10;</code>
     */
    public function setXTimesUsablePerPerson(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->x_times_usable_per_person = $var;
    }

    /**
     * <code>bool x_times_usable_per_person_null = 1010;</code>
     */
    public function getXTimesUsablePerPersonNull()
    {
        return $this->x_times_usable_per_person_null;
    }

    /**
     * <code>bool x_times_usable_per_person_null = 1010;</code>
     */
    public function setXTimesUsablePerPersonNull($var)
    {
        GPBUtil::checkBool($var);
        $this->x_times_usable_per_person_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_voucher_type = 11;</code>
     */
    public function getDeleteVoucherType()
    {
        return $this->delete_voucher_type;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_voucher_type = 11;</code>
     */
    public function setDeleteVoucherType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_voucher_type = $var;
    }

    /**
     * <code>bool delete_voucher_type_null = 1011;</code>
     */
    public function getDeleteVoucherTypeNull()
    {
        return $this->delete_voucher_type_null;
    }

    /**
     * <code>bool delete_voucher_type_null = 1011;</code>
     */
    public function setDeleteVoucherTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_voucher_type_null = $var;
    }

}

