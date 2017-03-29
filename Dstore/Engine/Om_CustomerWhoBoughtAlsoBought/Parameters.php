<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_CustomerWhoBoughtAlsoBought.proto

namespace Dstore\Engine\Om_CustomerWhoBoughtAlsoBought;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_CustomerWhoBoughtAlsoBought.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue variant_or_item_no = 1;</code>
     */
    private $variant_or_item_no = null;
    /**
     * <code>bool variant_or_item_no_null = 1001;</code>
     */
    private $variant_or_item_no_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_sibling_variants = 2;</code>
     */
    private $include_sibling_variants = null;
    /**
     * <code>bool include_sibling_variants_null = 1002;</code>
     */
    private $include_sibling_variants_null = false;
    /**
     * <code>.dstore.values.TimestampValue from_date = 3;</code>
     */
    private $from_date = null;
    /**
     * <code>bool from_date_null = 1003;</code>
     */
    private $from_date_null = false;
    /**
     * <code>.dstore.values.TimestampValue to_date = 4;</code>
     */
    private $to_date = null;
    /**
     * <code>bool to_date_null = 1004;</code>
     */
    private $to_date_null = false;
    /**
     * <code>.dstore.values.BooleanValue only_active = 5;</code>
     */
    private $only_active = null;
    /**
     * <code>bool only_active_null = 1005;</code>
     */
    private $only_active_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_additional_info = 6;</code>
     */
    private $get_additional_info = null;
    /**
     * <code>bool get_additional_info_null = 1006;</code>
     */
    private $get_additional_info_null = false;
    /**
     * <code>.dstore.values.IntegerValue filter_by_characteristic_id = 7;</code>
     */
    private $filter_by_characteristic_id = null;
    /**
     * <code>bool filter_by_characteristic_id_null = 1007;</code>
     */
    private $filter_by_characteristic_id_null = false;
    /**
     * <code>.dstore.values.StringValue filter_by_charac_value = 8;</code>
     */
    private $filter_by_charac_value = null;
    /**
     * <code>bool filter_by_charac_value_null = 1008;</code>
     */
    private $filter_by_charac_value_null = false;
    /**
     * <code>.dstore.values.BooleanValue negate_filter_by_params = 9;</code>
     */
    private $negate_filter_by_params = null;
    /**
     * <code>bool negate_filter_by_params_null = 1009;</code>
     */
    private $negate_filter_by_params_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_variant_or_item_no_nodes = 10;</code>
     */
    private $include_variant_or_item_no_nodes = null;
    /**
     * <code>bool include_variant_or_item_no_nodes_null = 1010;</code>
     */
    private $include_variant_or_item_no_nodes_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmCustomerWhoBoughtAlsoBought::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue variant_or_item_no = 1;</code>
     */
    public function getVariantOrItemNo()
    {
        return $this->variant_or_item_no;
    }

    /**
     * <code>.dstore.values.StringValue variant_or_item_no = 1;</code>
     */
    public function setVariantOrItemNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->variant_or_item_no = $var;
    }

    /**
     * <code>bool variant_or_item_no_null = 1001;</code>
     */
    public function getVariantOrItemNoNull()
    {
        return $this->variant_or_item_no_null;
    }

    /**
     * <code>bool variant_or_item_no_null = 1001;</code>
     */
    public function setVariantOrItemNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->variant_or_item_no_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_sibling_variants = 2;</code>
     */
    public function getIncludeSiblingVariants()
    {
        return $this->include_sibling_variants;
    }

    /**
     * <code>.dstore.values.BooleanValue include_sibling_variants = 2;</code>
     */
    public function setIncludeSiblingVariants(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_sibling_variants = $var;
    }

    /**
     * <code>bool include_sibling_variants_null = 1002;</code>
     */
    public function getIncludeSiblingVariantsNull()
    {
        return $this->include_sibling_variants_null;
    }

    /**
     * <code>bool include_sibling_variants_null = 1002;</code>
     */
    public function setIncludeSiblingVariantsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_sibling_variants_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date = 3;</code>
     */
    public function getFromDate()
    {
        return $this->from_date;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date = 3;</code>
     */
    public function setFromDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->from_date = $var;
    }

    /**
     * <code>bool from_date_null = 1003;</code>
     */
    public function getFromDateNull()
    {
        return $this->from_date_null;
    }

    /**
     * <code>bool from_date_null = 1003;</code>
     */
    public function setFromDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_date_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date = 4;</code>
     */
    public function getToDate()
    {
        return $this->to_date;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date = 4;</code>
     */
    public function setToDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->to_date = $var;
    }

    /**
     * <code>bool to_date_null = 1004;</code>
     */
    public function getToDateNull()
    {
        return $this->to_date_null;
    }

    /**
     * <code>bool to_date_null = 1004;</code>
     */
    public function setToDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_date_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue only_active = 5;</code>
     */
    public function getOnlyActive()
    {
        return $this->only_active;
    }

    /**
     * <code>.dstore.values.BooleanValue only_active = 5;</code>
     */
    public function setOnlyActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->only_active = $var;
    }

    /**
     * <code>bool only_active_null = 1005;</code>
     */
    public function getOnlyActiveNull()
    {
        return $this->only_active_null;
    }

    /**
     * <code>bool only_active_null = 1005;</code>
     */
    public function setOnlyActiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_active_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_additional_info = 6;</code>
     */
    public function getGetAdditionalInfo()
    {
        return $this->get_additional_info;
    }

    /**
     * <code>.dstore.values.BooleanValue get_additional_info = 6;</code>
     */
    public function setGetAdditionalInfo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_additional_info = $var;
    }

    /**
     * <code>bool get_additional_info_null = 1006;</code>
     */
    public function getGetAdditionalInfoNull()
    {
        return $this->get_additional_info_null;
    }

    /**
     * <code>bool get_additional_info_null = 1006;</code>
     */
    public function setGetAdditionalInfoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_additional_info_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue filter_by_characteristic_id = 7;</code>
     */
    public function getFilterByCharacteristicId()
    {
        return $this->filter_by_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue filter_by_characteristic_id = 7;</code>
     */
    public function setFilterByCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->filter_by_characteristic_id = $var;
    }

    /**
     * <code>bool filter_by_characteristic_id_null = 1007;</code>
     */
    public function getFilterByCharacteristicIdNull()
    {
        return $this->filter_by_characteristic_id_null;
    }

    /**
     * <code>bool filter_by_characteristic_id_null = 1007;</code>
     */
    public function setFilterByCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue filter_by_charac_value = 8;</code>
     */
    public function getFilterByCharacValue()
    {
        return $this->filter_by_charac_value;
    }

    /**
     * <code>.dstore.values.StringValue filter_by_charac_value = 8;</code>
     */
    public function setFilterByCharacValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->filter_by_charac_value = $var;
    }

    /**
     * <code>bool filter_by_charac_value_null = 1008;</code>
     */
    public function getFilterByCharacValueNull()
    {
        return $this->filter_by_charac_value_null;
    }

    /**
     * <code>bool filter_by_charac_value_null = 1008;</code>
     */
    public function setFilterByCharacValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_charac_value_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue negate_filter_by_params = 9;</code>
     */
    public function getNegateFilterByParams()
    {
        return $this->negate_filter_by_params;
    }

    /**
     * <code>.dstore.values.BooleanValue negate_filter_by_params = 9;</code>
     */
    public function setNegateFilterByParams(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->negate_filter_by_params = $var;
    }

    /**
     * <code>bool negate_filter_by_params_null = 1009;</code>
     */
    public function getNegateFilterByParamsNull()
    {
        return $this->negate_filter_by_params_null;
    }

    /**
     * <code>bool negate_filter_by_params_null = 1009;</code>
     */
    public function setNegateFilterByParamsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->negate_filter_by_params_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_variant_or_item_no_nodes = 10;</code>
     */
    public function getIncludeVariantOrItemNoNodes()
    {
        return $this->include_variant_or_item_no_nodes;
    }

    /**
     * <code>.dstore.values.BooleanValue include_variant_or_item_no_nodes = 10;</code>
     */
    public function setIncludeVariantOrItemNoNodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_variant_or_item_no_nodes = $var;
    }

    /**
     * <code>bool include_variant_or_item_no_nodes_null = 1010;</code>
     */
    public function getIncludeVariantOrItemNoNodesNull()
    {
        return $this->include_variant_or_item_no_nodes_null;
    }

    /**
     * <code>bool include_variant_or_item_no_nodes_null = 1010;</code>
     */
    public function setIncludeVariantOrItemNoNodesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_variant_or_item_no_nodes_null = $var;
    }

}
