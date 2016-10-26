<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodeCharacDescr_Ad.proto

namespace Dstore\Engine\Im_GetNodeCharacDescr_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $node_characteristic_id = null;
    private $node_characteristic_id_null = false;
    private $language_id = null;
    private $language_id_null = false;

    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_characteristic_id = $var;
    }

    public function getNodeCharacteristicIdNull()
    {
        return $this->node_characteristic_id_null;
    }

    public function setNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetNodeCharacDescr_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $language_symbol = null;
    private $language = null;
    private $characteristic_description = null;
    private $translated_description = null;
    private $node_characteristic_id = null;
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

    public function getCharacteristicDescription()
    {
        return $this->characteristic_description;
    }

    public function setCharacteristicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_description = $var;
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

    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_characteristic_id = $var;
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
    "0a92080a376473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4765744e6f646543686172616344657363725f41642e70726f746f" .
    "12266473746f72652e656e67696e652e696d5f4765744e6f646543686172" .
    "616344657363725f41641a136473746f72652f76616c7565732e70726f74" .
    "6f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f746f" .
    "1a236473746f72652f656e67696e652f6d657461696e666f726d6174696f" .
    "6e2e70726f746f22bc010a0a506172616d6574657273123b0a166e6f6465" .
    "5f63686172616374657269737469635f696418012001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512240a1b6e6f64" .
    "655f63686172616374657269737469635f69645f6e756c6c18e907200128" .
    "0812300a0b6c616e67756167655f696418022001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512190a106c616e6775" .
    "6167655f69645f6e756c6c18ea072001280822b5040a08526573706f6e73" .
    "6512480a106d6574615f696e666f726d6174696f6e18022003280b322e2e" .
    "6473746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e" .
    "4d657461496e666f726d6174696f6e122f0a076d65737361676518032003" .
    "280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d6573" .
    "7361676512410a03726f7718042003280b32342e6473746f72652e656e67" .
    "696e652e696d5f4765744e6f646543686172616344657363725f41642e52" .
    "6573706f6e73652e526f771aea020a03526f77120f0a06726f775f696418" .
    "904e2001280512340a0f6c616e67756167655f73796d626f6c18914e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "122d0a086c616e677561676518924e2001280b321a2e6473746f72652e76" .
    "616c7565732e737472696e6756616c7565123f0a1a636861726163746572" .
    "69737469635f6465736372697074696f6e18934e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565123b0a167472616e" .
    "736c617465645f6465736372697074696f6e18944e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565123c0a166e6f64" .
    "655f63686172616374657269737469635f696418954e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512310a0b6c" .
    "616e67756167655f696418964e2001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756542590a1b696f2e6473746f72652e" .
    "656e67696e652e70726f636564757265735a3a676f73646b2e6473746f72" .
    "652e64652f656e67696e652f70726f636564757265732f696d5f4765744e" .
    "6f646543686172616344657363725f4164620670726f746f33"
));

