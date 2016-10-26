<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetLanguageIcons_Pu.proto

namespace Dstore\Engine\Mi_GetLanguageIcons_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $language_id = null;
    private $language_id_null = false;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetLanguageIcons_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $language_icon = null;
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

    public function getLanguageIcon()
    {
        return $this->language_icon;
    }

    public function setLanguageIcon(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\bytesValue::class);
        $this->language_icon = $var;
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
    "0ab7050a356473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4765744c616e677561676549636f6e735f50752e70726f746f1224" .
    "6473746f72652e656e67696e652e6d695f4765744c616e67756167654963" .
    "6f6e735f50751a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f22590a0a506172616d657465727312300a0b6c616e67756167655f" .
    "696418012001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512190a106c616e67756167655f69645f6e756c6c18e907" .
    "2001280822c4020a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d657373616765123f0a03726f77180420" .
    "03280b32322e6473746f72652e656e67696e652e6d695f4765744c616e67" .
    "7561676549636f6e735f50752e526573706f6e73652e526f771a7c0a0352" .
    "6f77120f0a06726f775f696418904e2001280512310a0d6c616e67756167" .
    "655f69636f6e18914e2001280b32192e6473746f72652e76616c7565732e" .
    "627974657356616c756512310a0b6c616e67756167655f696418924e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6542570a1b696f2e6473746f72652e656e67696e652e70726f6365647572" .
    "65735a38676f73646b2e6473746f72652e64652f656e67696e652f70726f" .
    "636564757265732f6d695f4765744c616e677561676549636f6e735f5075" .
    "620670726f746f33"
));

