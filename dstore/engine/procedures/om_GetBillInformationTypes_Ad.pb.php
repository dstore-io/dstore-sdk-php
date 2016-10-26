<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetBillInformationTypes_Ad.proto

namespace Dstore\Engine\Om_GetBillInformationTypes_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $information_type_id = null;
    private $information_type_id_null = false;

    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->information_type_id = $var;
    }

    public function getInformationTypeIdNull()
    {
        return $this->information_type_id_null;
    }

    public function setInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetBillInformationTypes_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $field_type_id = null;
    private $bill_information_type_id = null;
    private $information_type = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getFieldTypeId()
    {
        return $this->field_type_id;
    }

    public function setFieldTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->field_type_id = $var;
    }

    public function getBillInformationTypeId()
    {
        return $this->bill_information_type_id;
    }

    public function setBillInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->bill_information_type_id = $var;
    }

    public function getInformationType()
    {
        return $this->information_type;
    }

    public function setInformationType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->information_type = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aaa060a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657442696c6c496e666f726d6174696f6e54797065735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e6f6d5f47657442696c" .
    "6c496e666f726d6174696f6e54797065735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22690a0a506172616d65746572" .
    "7312380a13696e666f726d6174696f6e5f747970655f696418012001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "210a18696e666f726d6174696f6e5f747970655f69645f6e756c6c18e907" .
    "200128082292030a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d65737361676512460a03726f77180420" .
    "03280b32392e6473746f72652e656e67696e652e6f6d5f47657442696c6c" .
    "496e666f726d6174696f6e54797065735f41642e526573706f6e73652e52" .
    "6f771ac2010a03526f77120f0a06726f775f696418904e2001280512330a" .
    "0d6669656c645f747970655f696418914e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c7565123e0a1862696c6c5f69" .
    "6e666f726d6174696f6e5f747970655f696418924e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512350a10696e" .
    "666f726d6174696f6e5f7479706518934e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565425e0a1b696f2e6473746f" .
    "72652e656e67696e652e70726f636564757265735a3f676f73646b2e6473" .
    "746f72652e64652f656e67696e652f70726f636564757265732f6f6d5f47" .
    "657442696c6c496e666f726d6174696f6e54797065735f4164620670726f" .
    "746f33"
));

