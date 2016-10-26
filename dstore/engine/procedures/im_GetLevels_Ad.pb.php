<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetLevels_Ad.proto

namespace Dstore\Engine\Im_GetLevels_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $level = null;
    private $level_null = false;
    private $is_id = null;
    private $is_id_null = false;
    private $order_by_level_no = null;
    private $order_by_level_no_null = false;

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level = $var;
    }

    public function getLevelNull()
    {
        return $this->level_null;
    }

    public function setLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->level_null = $var;
    }

    public function getIsId()
    {
        return $this->is_id;
    }

    public function setIsId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_id = $var;
    }

    public function getIsIdNull()
    {
        return $this->is_id_null;
    }

    public function setIsIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->is_id_null = $var;
    }

    public function getOrderByLevelNo()
    {
        return $this->order_by_level_no;
    }

    public function setOrderByLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->order_by_level_no = $var;
    }

    public function getOrderByLevelNoNull()
    {
        return $this->order_by_level_no_null;
    }

    public function setOrderByLevelNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_by_level_no_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetLevels_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $level_no = null;
    private $level_description = null;
    private $default_template_id = null;
    private $default_symbol_id = null;
    private $level_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getLevelNo()
    {
        return $this->level_no;
    }

    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_no = $var;
    }

    public function getLevelDescription()
    {
        return $this->level_description;
    }

    public function setLevelDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->level_description = $var;
    }

    public function getDefaultTemplateId()
    {
        return $this->default_template_id;
    }

    public function setDefaultTemplateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->default_template_id = $var;
    }

    public function getDefaultSymbolId()
    {
        return $this->default_symbol_id;
    }

    public function setDefaultSymbolId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->default_symbol_id = $var;
    }

    public function getLevelId()
    {
        return $this->level_id;
    }

    public function setLevelId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad1070a2e6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4765744c6576656c735f41642e70726f746f121d6473746f72652e" .
    "656e67696e652e696d5f4765744c6576656c735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22e7010a0a506172616d65" .
    "74657273122a0a056c6576656c18012001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512130a0a6c6576656c5f6e75" .
    "6c6c18e90720012808122a0a0569735f696418022001280b321b2e647374" .
    "6f72652e76616c7565732e626f6f6c65616e56616c756512130a0a69735f" .
    "69645f6e756c6c18ea072001280812360a116f726465725f62795f6c6576" .
    "656c5f6e6f18032001280b321b2e6473746f72652e76616c7565732e626f" .
    "6f6c65616e56616c7565121f0a166f726465725f62795f6c6576656c5f6e" .
    "6f5f6e756c6c18eb072001280822e4030a08526573706f6e736512480a10" .
    "6d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f72" .
    "652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65746149" .
    "6e666f726d6174696f6e122f0a076d65737361676518032003280b321e2e" .
    "6473746f72652e656e67696e652e6d6573736167652e4d65737361676512" .
    "380a03726f7718042003280b322b2e6473746f72652e656e67696e652e69" .
    "6d5f4765744c6576656c735f41642e526573706f6e73652e526f771aa202" .
    "0a03526f77120f0a06726f775f696418904e20012805122e0a086c657665" .
    "6c5f6e6f18914e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512360a116c6576656c5f6465736372697074696f" .
    "6e18924e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c756512390a1364656661756c745f74656d706c6174655f696418" .
    "934e2001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512370a1164656661756c745f73796d626f6c5f696418944e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565122e0a086c6576656c5f696418954e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756542500a1b696f2e647374" .
    "6f72652e656e67696e652e70726f636564757265735a31676f73646b2e64" .
    "73746f72652e64652f656e67696e652f70726f636564757265732f696d5f" .
    "4765744c6576656c735f4164620670726f746f33"
));

