<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrderStateDescr_Ad.proto

namespace Dstore\Engine\Om_GetOrderStateDescr_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $order_state_id = null;
    private $order_state_id_null = false;
    private $language_id = null;
    private $language_id_null = false;

    public function getOrderStateId()
    {
        return $this->order_state_id;
    }

    public function setOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->order_state_id = $var;
    }

    public function getOrderStateIdNull()
    {
        return $this->order_state_id_null;
    }

    public function setOrderStateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_state_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetOrderStateDescr_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $language_symbol = null;
    private $language = null;
    private $translated_description = null;
    private $order_state_id = null;
    private $public_description = null;
    private $order_state = null;
    private $language_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getLanguageSymbol()
    {
        return $this->language_symbol;
    }

    public function setLanguageSymbol(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->language_symbol = $var;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->language = $var;
    }

    public function getTranslatedDescription()
    {
        return $this->translated_description;
    }

    public function setTranslatedDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->translated_description = $var;
    }

    public function getOrderStateId()
    {
        return $this->order_state_id;
    }

    public function setOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->order_state_id = $var;
    }

    public function getPublicDescription()
    {
        return $this->public_description;
    }

    public function setPublicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->public_description = $var;
    }

    public function getOrderState()
    {
        return $this->order_state;
    }

    public function setOrderState(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->order_state = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aa4080a376473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4765744f72646572537461746544657363725f41642e70726f746f" .
    "12266473746f72652e656e67696e652e6f6d5f4765744f72646572537461" .
    "746544657363725f41641a136473746f72652f76616c7565732e70726f74" .
    "6f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f746f" .
    "1a236473746f72652f656e67696e652f6d657461696e666f726d6174696f" .
    "6e2e70726f746f22ac010a0a506172616d657465727312330a0e6f726465" .
    "725f73746174655f696418012001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565121c0a136f726465725f7374617465" .
    "5f69645f6e756c6c18e9072001280812300a0b6c616e67756167655f6964" .
    "18022001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512190a106c616e67756167655f69645f6e756c6c18ea072001" .
    "280822d7040a08526573706f6e736512480a106d6574615f696e666f726d" .
    "6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d65" .
    "7461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e12" .
    "2f0a076d65737361676518032003280b321e2e6473746f72652e656e6769" .
    "6e652e6d6573736167652e4d65737361676512410a03726f771804200328" .
    "0b32342e6473746f72652e656e67696e652e6f6d5f4765744f7264657253" .
    "7461746544657363725f41642e526573706f6e73652e526f771a8c030a03" .
    "526f77120f0a06726f775f696418904e2001280512340a0f6c616e677561" .
    "67655f73796d626f6c18914e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565122d0a086c616e677561676518924e20" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "65123b0a167472616e736c617465645f6465736372697074696f6e18934e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "756512340a0e6f726465725f73746174655f696418944e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512370a12" .
    "7075626c69635f6465736372697074696f6e18954e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c756512300a0b6f7264" .
    "65725f737461746518964e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c756512310a0b6c616e67756167655f69641897" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c756542590a1b696f2e6473746f72652e656e67696e652e70726f6365" .
    "64757265735a3a676f73646b2e6473746f72652e64652f656e67696e652f" .
    "70726f636564757265732f6f6d5f4765744f726465725374617465446573" .
    "63725f4164620670726f746f33"
));

