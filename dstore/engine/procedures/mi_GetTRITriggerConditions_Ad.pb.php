<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTRITriggerConditions_Ad.proto

namespace Dstore\Engine\Mi_GetTRITriggerConditions_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $trigger_id = null;
    private $trigger_id_null = false;
    private $work_step_no = null;
    private $work_step_no_null = false;

    public function getTriggerId()
    {
        return $this->trigger_id;
    }

    public function setTriggerId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->trigger_id = $var;
    }

    public function getTriggerIdNull()
    {
        return $this->trigger_id_null;
    }

    public function setTriggerIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->trigger_id_null = $var;
    }

    public function getWorkStepNo()
    {
        return $this->work_step_no;
    }

    public function setWorkStepNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->work_step_no = $var;
    }

    public function getWorkStepNoNull()
    {
        return $this->work_step_no_null;
    }

    public function setWorkStepNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->work_step_no_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetTRITriggerConditions_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $operator = null;
    private $condition = null;
    private $negate_condition = null;
    private $check_each_affected_id = null;
    private $condition_number = null;
    private $str_to_compare = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    public function setOperator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->operator = $var;
    }

    public function getCondition()
    {
        return $this->condition;
    }

    public function setCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition = $var;
    }

    public function getNegateCondition()
    {
        return $this->negate_condition;
    }

    public function setNegateCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->negate_condition = $var;
    }

    public function getCheckEachAffectedId()
    {
        return $this->check_each_affected_id;
    }

    public function setCheckEachAffectedId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->check_each_affected_id = $var;
    }

    public function getConditionNumber()
    {
        return $this->condition_number;
    }

    public function setConditionNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_number = $var;
    }

    public function getStrToCompare()
    {
        return $this->str_to_compare;
    }

    public function setStrToCompare(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->str_to_compare = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0afe070a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f47657454524954726967676572436f6e646974696f6e735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e6d695f476574545249" .
    "54726967676572436f6e646974696f6e735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22a6010a0a506172616d657465" .
    "7273122f0a0a747269676765725f696418012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512180a0f7472696767" .
    "65725f69645f6e756c6c18e9072001280812310a0c776f726b5f73746570" .
    "5f6e6f18022001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565121a0a11776f726b5f737465705f6e6f5f6e756c6c18" .
    "ea072001280822a8040a08526573706f6e736512480a106d6574615f696e" .
    "666f726d6174696f6e18022003280b322e2e6473746f72652e656e67696e" .
    "652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174" .
    "696f6e122f0a076d65737361676518032003280b321e2e6473746f72652e" .
    "656e67696e652e6d6573736167652e4d65737361676512460a03726f7718" .
    "042003280b32392e6473746f72652e656e67696e652e6d695f4765745452" .
    "4954726967676572436f6e646974696f6e735f41642e526573706f6e7365" .
    "2e526f771ad8020a03526f77120f0a06726f775f696418904e2001280512" .
    "2d0a086f70657261746f7218914e2001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c7565122e0a09636f6e646974696f6e18" .
    "924e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512360a106e65676174655f636f6e646974696f6e18934e200128" .
    "0b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565" .
    "123c0a16636865636b5f656163685f61666665637465645f696418944e20" .
    "01280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c" .
    "756512360a10636f6e646974696f6e5f6e756d62657218954e2001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651233" .
    "0a0e7374725f746f5f636f6d7061726518964e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c7565425e0a1b696f2e6473" .
    "746f72652e656e67696e652e70726f636564757265735a3f676f73646b2e" .
    "6473746f72652e64652f656e67696e652f70726f636564757265732f6d69" .
    "5f47657454524954726967676572436f6e646974696f6e735f4164620670" .
    "726f746f33"
));

