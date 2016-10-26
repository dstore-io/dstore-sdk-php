<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyPaymentTypeDescr_Ad.proto

namespace Dstore\Engine\Om_ModifyPaymentTypeDescr_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $payment_type_id = null;
    private $payment_type_id_null = false;
    private $language_id = null;
    private $language_id_null = false;
    private $payment_type_description = null;
    private $payment_type_description_null = false;

    public function getPaymentTypeId()
    {
        return $this->payment_type_id;
    }

    public function setPaymentTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->payment_type_id = $var;
    }

    public function getPaymentTypeIdNull()
    {
        return $this->payment_type_id_null;
    }

    public function setPaymentTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->payment_type_id_null = $var;
    }

    public function getLanguageId()
    {
        return $this->language_id;
    }

    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->language_id = $var;
    }

    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    public function getPaymentTypeDescription()
    {
        return $this->payment_type_description;
    }

    public function setPaymentTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->payment_type_description = $var;
    }

    public function getPaymentTypeDescriptionNull()
    {
        return $this->payment_type_description_null;
    }

    public function setPaymentTypeDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->payment_type_description_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyPaymentTypeDescr_Ad\Response_Row::class);
        $this->row = $var;
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
    "0aa5060a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f646966795061796d656e745479706544657363725f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e6f6d5f4d6f6469667950" .
    "61796d656e745479706544657363725f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f2294020a0a506172616d6574657273" .
    "12340a0f7061796d656e745f747970655f696418012001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565121d0a147061" .
    "796d656e745f747970655f69645f6e756c6c18e9072001280812300a0b6c" .
    "616e67756167655f696418022001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512190a106c616e67756167655f6964" .
    "5f6e756c6c18ea0720012808123c0a187061796d656e745f747970655f64" .
    "65736372697074696f6e18032001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756512260a1d7061796d656e745f74797065" .
    "5f6465736372697074696f6e5f6e756c6c18eb072001280822e4010a0852" .
    "6573706f6e736512480a106d6574615f696e666f726d6174696f6e180220" .
    "03280b322e2e6473746f72652e656e67696e652e6d657461696e666f726d" .
    "6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d65737361" .
    "676518032003280b321e2e6473746f72652e656e67696e652e6d65737361" .
    "67652e4d65737361676512450a03726f7718042003280b32382e6473746f" .
    "72652e656e67696e652e6f6d5f4d6f646966795061796d656e7454797065" .
    "44657363725f41642e526573706f6e73652e526f771a160a03526f77120f" .
    "0a06726f775f696418904e20012805425d0a1b696f2e6473746f72652e65" .
    "6e67696e652e70726f636564757265735a3e676f73646b2e6473746f7265" .
    "2e64652f656e67696e652f70726f636564757265732f6f6d5f4d6f646966" .
    "795061796d656e745479706544657363725f4164620670726f746f33"
));

