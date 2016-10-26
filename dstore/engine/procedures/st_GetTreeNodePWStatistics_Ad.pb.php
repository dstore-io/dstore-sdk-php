<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetTreeNodePWStatistics_Ad.proto

namespace Dstore\Engine\St_GetTreeNodePWStatistics_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $from_week = null;
    private $from_week_null = false;
    private $from_year = null;
    private $from_year_null = false;
    private $to_week = null;
    private $to_week_null = false;
    private $to_year = null;
    private $to_year_null = false;
    private $basic_characteristic_numbers = null;
    private $basic_characteristic_numbers_null = false;
    private $h_tree_node_ids = null;
    private $h_tree_node_ids_null = false;
    private $summarize_weeks = null;
    private $summarize_weeks_null = false;

    public function getFromWeek()
    {
        return $this->from_week;
    }

    public function setFromWeek(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_week = $var;
    }

    public function getFromWeekNull()
    {
        return $this->from_week_null;
    }

    public function setFromWeekNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_week_null = $var;
    }

    public function getFromYear()
    {
        return $this->from_year;
    }

    public function setFromYear(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_year = $var;
    }

    public function getFromYearNull()
    {
        return $this->from_year_null;
    }

    public function setFromYearNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_year_null = $var;
    }

    public function getToWeek()
    {
        return $this->to_week;
    }

    public function setToWeek(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_week = $var;
    }

    public function getToWeekNull()
    {
        return $this->to_week_null;
    }

    public function setToWeekNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_week_null = $var;
    }

    public function getToYear()
    {
        return $this->to_year;
    }

    public function setToYear(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_year = $var;
    }

    public function getToYearNull()
    {
        return $this->to_year_null;
    }

    public function setToYearNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_year_null = $var;
    }

    public function getBasicCharacteristicNumbers()
    {
        return $this->basic_characteristic_numbers;
    }

    public function setBasicCharacteristicNumbers(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->basic_characteristic_numbers = $var;
    }

    public function getBasicCharacteristicNumbersNull()
    {
        return $this->basic_characteristic_numbers_null;
    }

    public function setBasicCharacteristicNumbersNull($var)
    {
        GPBUtil::checkBool($var);
        $this->basic_characteristic_numbers_null = $var;
    }

    public function getHTreeNodeIds()
    {
        return $this->h_tree_node_ids;
    }

    public function setHTreeNodeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->h_tree_node_ids = $var;
    }

    public function getHTreeNodeIdsNull()
    {
        return $this->h_tree_node_ids_null;
    }

    public function setHTreeNodeIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->h_tree_node_ids_null = $var;
    }

    public function getSummarizeWeeks()
    {
        return $this->summarize_weeks;
    }

    public function setSummarizeWeeks(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->summarize_weeks = $var;
    }

    public function getSummarizeWeeksNull()
    {
        return $this->summarize_weeks_null;
    }

    public function setSummarizeWeeksNull($var)
    {
        GPBUtil::checkBool($var);
        $this->summarize_weeks_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;

    public function getMetaInformation()
    {
        return $this->meta_information;
    }

    public function setMetaInformation(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Metainformation\MetaInformation::class);
        $this->meta_information = $var;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Message\Message::class);
        $this->message = $var;
    }

    public function getRow()
    {
        return $this->row;
    }

    public function setRow(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\St_GetTreeNodePWStatistics_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $total_value = null;
    private $year = null;
    private $h_tree_node_id = null;
    private $direct_value = null;
    private $week = null;
    private $basic_characteristic_number = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTotalValue()
    {
        return $this->total_value;
    }

    public function setTotalValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->total_value = $var;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->year = $var;
    }

    public function getHTreeNodeId()
    {
        return $this->h_tree_node_id;
    }

    public function setHTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->h_tree_node_id = $var;
    }

    public function getDirectValue()
    {
        return $this->direct_value;
    }

    public function setDirectValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->direct_value = $var;
    }

    public function getWeek()
    {
        return $this->week;
    }

    public function setWeek(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->week = $var;
    }

    public function getBasicCharacteristicNumber()
    {
        return $this->basic_characteristic_number;
    }

    public function setBasicCharacteristicNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->basic_characteristic_number = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a8d0b0a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "73745f476574547265654e6f64655057537461746973746963735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e73745f476574547265" .
    "654e6f64655057537461746973746963735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22bf040a0a506172616d657465" .
    "7273122e0a0966726f6d5f7765656b18012001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512170a0e66726f6d5f77" .
    "65656b5f6e756c6c18e90720012808122e0a0966726f6d5f796561721802" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512170a0e66726f6d5f796561725f6e756c6c18ea0720012808122c" .
    "0a07746f5f7765656b18032001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756512150a0c746f5f7765656b5f6e756c6c" .
    "18eb0720012808122c0a07746f5f7965617218042001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512150a0c746f5f" .
    "796561725f6e756c6c18ec072001280812400a1c62617369635f63686172" .
    "616374657269737469635f6e756d6265727318052001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565122a0a2162617369" .
    "635f63686172616374657269737469635f6e756d626572735f6e756c6c18" .
    "ed072001280812330a0f685f747265655f6e6f64655f6964731806200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "1d0a14685f747265655f6e6f64655f6964735f6e756c6c18ee0720012808" .
    "12340a0f73756d6d6172697a655f7765656b7318072001280b321b2e6473" .
    "746f72652e76616c7565732e626f6f6c65616e56616c7565121d0a147375" .
    "6d6d6172697a655f7765656b735f6e756c6c18ef0720012808229e040a08" .
    "526573706f6e736512480a106d6574615f696e666f726d6174696f6e1802" .
    "2003280b322e2e6473746f72652e656e67696e652e6d657461696e666f72" .
    "6d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d657373" .
    "61676518032003280b321e2e6473746f72652e656e67696e652e6d657373" .
    "6167652e4d65737361676512460a03726f7718042003280b32392e647374" .
    "6f72652e656e67696e652e73745f476574547265654e6f64655057537461" .
    "746973746963735f41642e526573706f6e73652e526f771ace020a03526f" .
    "77120f0a06726f775f696418904e2001280512310a0b746f74616c5f7661" .
    "6c756518914e2001280b321b2e6473746f72652e76616c7565732e646563" .
    "696d616c56616c7565122a0a047965617218924e2001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512340a0e685f74" .
    "7265655f6e6f64655f696418934e2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512320a0c6469726563745f7661" .
    "6c756518944e2001280b321b2e6473746f72652e76616c7565732e646563" .
    "696d616c56616c7565122a0a047765656b18954e2001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512410a1b626173" .
    "69635f63686172616374657269737469635f6e756d62657218964e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "425e0a1b696f2e6473746f72652e656e67696e652e70726f636564757265" .
    "735a3f676f73646b2e6473746f72652e64652f656e67696e652f70726f63" .
    "6564757265732f73745f476574547265654e6f6465505753746174697374" .
    "6963735f4164620670726f746f33"
));

