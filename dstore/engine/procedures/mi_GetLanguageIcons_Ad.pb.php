<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetLanguageIcons_Ad.proto

namespace Dstore\Engine\Mi_GetLanguageIcons_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetLanguageIcons_Ad\Response_Row::class);
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
    "0aea040a356473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4765744c616e677561676549636f6e735f41642e70726f746f1224" .
    "6473746f72652e656e67696e652e6d695f4765744c616e67756167654963" .
    "6f6e735f41641a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f220c0a0a506172616d657465727322c4020a08526573706f6e7365" .
    "12480a106d6574615f696e666f726d6174696f6e18022003280b322e2e64" .
    "73746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d" .
    "657461496e666f726d6174696f6e122f0a076d6573736167651803200328" .
    "0b321e2e6473746f72652e656e67696e652e6d6573736167652e4d657373" .
    "616765123f0a03726f7718042003280b32322e6473746f72652e656e6769" .
    "6e652e6d695f4765744c616e677561676549636f6e735f41642e52657370" .
    "6f6e73652e526f771a7c0a03526f77120f0a06726f775f696418904e2001" .
    "280512310a0d6c616e67756167655f69636f6e18914e2001280b32192e64" .
    "73746f72652e76616c7565732e627974657356616c756512310a0b6c616e" .
    "67756167655f696418924e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756542570a1b696f2e6473746f72652e656e" .
    "67696e652e70726f636564757265735a38676f73646b2e6473746f72652e" .
    "64652f656e67696e652f70726f636564757265732f6d695f4765744c616e" .
    "677561676549636f6e735f4164620670726f746f33"
));

