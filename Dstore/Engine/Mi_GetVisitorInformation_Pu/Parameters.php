<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetVisitorInformation_Pu.proto

namespace Dstore\Engine\Mi_GetVisitorInformation_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetVisitorInformation_Pu.Parameters</code>
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
     * <code>.dstore.values.IntegerValue information_type_id = 2;</code>
     */
    private $information_type_id = null;
    /**
     * <code>bool information_type_id_null = 1002;</code>
     */
    private $information_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue start_at_row_no = 3;</code>
     */
    private $start_at_row_no = null;
    /**
     * <code>bool start_at_row_no_null = 1003;</code>
     */
    private $start_at_row_no_null = false;
    /**
     * <code>.dstore.values.IntegerValue number_of_rows = 4;</code>
     */
    private $number_of_rows = null;
    /**
     * <code>bool number_of_rows_null = 1004;</code>
     */
    private $number_of_rows_null = false;
    /**
     * <code>.dstore.values.BooleanValue sort_desc = 5;</code>
     */
    private $sort_desc = null;
    /**
     * <code>bool sort_desc_null = 1005;</code>
     */
    private $sort_desc_null = false;
    /**
     * <code>.dstore.values.BooleanValue sort_by_information_type_id = 6;</code>
     */
    private $sort_by_information_type_id = null;
    /**
     * <code>bool sort_by_information_type_id_null = 1006;</code>
     */
    private $sort_by_information_type_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetVisitorInformationPu::initOnce();
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
     * <code>.dstore.values.IntegerValue information_type_id = 2;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 2;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <code>bool information_type_id_null = 1002;</code>
     */
    public function getInformationTypeIdNull()
    {
        return $this->information_type_id_null;
    }

    /**
     * <code>bool information_type_id_null = 1002;</code>
     */
    public function setInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue start_at_row_no = 3;</code>
     */
    public function getStartAtRowNo()
    {
        return $this->start_at_row_no;
    }

    /**
     * <code>.dstore.values.IntegerValue start_at_row_no = 3;</code>
     */
    public function setStartAtRowNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->start_at_row_no = $var;
    }

    /**
     * <code>bool start_at_row_no_null = 1003;</code>
     */
    public function getStartAtRowNoNull()
    {
        return $this->start_at_row_no_null;
    }

    /**
     * <code>bool start_at_row_no_null = 1003;</code>
     */
    public function setStartAtRowNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->start_at_row_no_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_rows = 4;</code>
     */
    public function getNumberOfRows()
    {
        return $this->number_of_rows;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_rows = 4;</code>
     */
    public function setNumberOfRows(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->number_of_rows = $var;
    }

    /**
     * <code>bool number_of_rows_null = 1004;</code>
     */
    public function getNumberOfRowsNull()
    {
        return $this->number_of_rows_null;
    }

    /**
     * <code>bool number_of_rows_null = 1004;</code>
     */
    public function setNumberOfRowsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->number_of_rows_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue sort_desc = 5;</code>
     */
    public function getSortDesc()
    {
        return $this->sort_desc;
    }

    /**
     * <code>.dstore.values.BooleanValue sort_desc = 5;</code>
     */
    public function setSortDesc(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->sort_desc = $var;
    }

    /**
     * <code>bool sort_desc_null = 1005;</code>
     */
    public function getSortDescNull()
    {
        return $this->sort_desc_null;
    }

    /**
     * <code>bool sort_desc_null = 1005;</code>
     */
    public function setSortDescNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_desc_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue sort_by_information_type_id = 6;</code>
     */
    public function getSortByInformationTypeId()
    {
        return $this->sort_by_information_type_id;
    }

    /**
     * <code>.dstore.values.BooleanValue sort_by_information_type_id = 6;</code>
     */
    public function setSortByInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->sort_by_information_type_id = $var;
    }

    /**
     * <code>bool sort_by_information_type_id_null = 1006;</code>
     */
    public function getSortByInformationTypeIdNull()
    {
        return $this->sort_by_information_type_id_null;
    }

    /**
     * <code>bool sort_by_information_type_id_null = 1006;</code>
     */
    public function setSortByInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_by_information_type_id_null = $var;
    }

}

