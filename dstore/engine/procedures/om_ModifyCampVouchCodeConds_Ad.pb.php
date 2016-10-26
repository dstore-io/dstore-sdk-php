<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyCampVouchCodeConds_Ad.proto

namespace Dstore\Engine\Om_ModifyCampVouchCodeConds_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $condition_id = null;
    private $condition_id_null = false;
    private $valid_code_of_voucher_type_id = null;
    private $valid_code_of_voucher_type_id_null = false;
    private $delete_voucher_code_condition = null;
    private $delete_voucher_code_condition_null = false;

    public function getConditionId()
    {
        return $this->condition_id;
    }

    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_id = $var;
    }

    public function getConditionIdNull()
    {
        return $this->condition_id_null;
    }

    public function setConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_id_null = $var;
    }

    public function getValidCodeOfVoucherTypeId()
    {
        return $this->valid_code_of_voucher_type_id;
    }

    public function setValidCodeOfVoucherTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->valid_code_of_voucher_type_id = $var;
    }

    public function getValidCodeOfVoucherTypeIdNull()
    {
        return $this->valid_code_of_voucher_type_id_null;
    }

    public function setValidCodeOfVoucherTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->valid_code_of_voucher_type_id_null = $var;
    }

    public function getDeleteVoucherCodeCondition()
    {
        return $this->delete_voucher_code_condition;
    }

    public function setDeleteVoucherCodeCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_voucher_code_condition = $var;
    }

    public function getDeleteVoucherCodeConditionNull()
    {
        return $this->delete_voucher_code_condition_null;
    }

    public function setDeleteVoucherCodeConditionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_voucher_code_condition_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $condition_id = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyCampVouchCodeConds_Ad\Response_Row::class);
        $this->row = $var;
    }

    public function getConditionId()
    {
        return $this->condition_id;
    }

    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_id = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a89070a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f6469667943616d70566f756368436f6465436f6e64735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4d6f646966" .
    "7943616d70566f756368436f6465436f6e64735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22bd020a0a506172616d65" .
    "7465727312310a0c636f6e646974696f6e5f696418012001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565121a0a1163" .
    "6f6e646974696f6e5f69645f6e756c6c18e9072001280812420a1d76616c" .
    "69645f636f64655f6f665f766f75636865725f747970655f696418022001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65122b0a2276616c69645f636f64655f6f665f766f75636865725f747970" .
    "655f69645f6e756c6c18ea072001280812420a1d64656c6574655f766f75" .
    "636865725f636f64655f636f6e646974696f6e18032001280b321b2e6473" .
    "746f72652e76616c7565732e626f6f6c65616e56616c7565122b0a226465" .
    "6c6574655f766f75636865725f636f64655f636f6e646974696f6e5f6e75" .
    "6c6c18eb07200128082299020a08526573706f6e736512480a106d657461" .
    "5f696e666f726d6174696f6e18022003280b322e2e6473746f72652e656e" .
    "67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f72" .
    "6d6174696f6e122f0a076d65737361676518032003280b321e2e6473746f" .
    "72652e656e67696e652e6d6573736167652e4d65737361676512470a0372" .
    "6f7718042003280b323a2e6473746f72652e656e67696e652e6f6d5f4d6f" .
    "6469667943616d70566f756368436f6465436f6e64735f41642e52657370" .
    "6f6e73652e526f7712310a0c636f6e646974696f6e5f696418652001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c75651a" .
    "160a03526f77120f0a06726f775f696418904e20012805425f0a1b696f2e" .
    "6473746f72652e656e67696e652e70726f636564757265735a40676f7364" .
    "6b2e6473746f72652e64652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f6469667943616d70566f756368436f6465436f6e64735f4164" .
    "620670726f746f33"
));

