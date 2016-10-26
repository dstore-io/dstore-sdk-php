<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPersonCharacDescr_Ad.proto

namespace Dstore\Engine\Pm_ModifyPersonCharacDescr_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_characteristic_id = null;
    private $person_characteristic_id_null = false;
    private $language_id = null;
    private $language_id_null = false;
    private $characteristic_description = null;
    private $characteristic_description_null = false;

    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_characteristic_id = $var;
    }

    public function getPersonCharacteristicIdNull()
    {
        return $this->person_characteristic_id_null;
    }

    public function setPersonCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_characteristic_id_null = $var;
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

    public function getCharacteristicDescription()
    {
        return $this->characteristic_description;
    }

    public function setCharacteristicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_description = $var;
    }

    public function getCharacteristicDescriptionNull()
    {
        return $this->characteristic_description_null;
    }

    public function setCharacteristicDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_description_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_ModifyPersonCharacDescr_Ad\Response_Row::class);
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
    "0abf060a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f4d6f64696679506572736f6e43686172616344657363725f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e706d5f4d6f64696679" .
    "506572736f6e43686172616344657363725f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22aa020a0a506172616d657465" .
    "7273123d0a18706572736f6e5f63686172616374657269737469635f6964" .
    "18012001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512260a1d706572736f6e5f6368617261637465726973746963" .
    "5f69645f6e756c6c18e9072001280812300a0b6c616e67756167655f6964" .
    "18022001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512190a106c616e67756167655f69645f6e756c6c18ea072001" .
    "2808123e0a1a63686172616374657269737469635f646573637269707469" .
    "6f6e18032001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c756512280a1f63686172616374657269737469635f6465736372" .
    "697074696f6e5f6e756c6c18eb072001280822e5010a08526573706f6e73" .
    "6512480a106d6574615f696e666f726d6174696f6e18022003280b322e2e" .
    "6473746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e" .
    "4d657461496e666f726d6174696f6e122f0a076d65737361676518032003" .
    "280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d6573" .
    "7361676512460a03726f7718042003280b32392e6473746f72652e656e67" .
    "696e652e706d5f4d6f64696679506572736f6e4368617261634465736372" .
    "5f41642e526573706f6e73652e526f771a160a03526f77120f0a06726f77" .
    "5f696418904e20012805425e0a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a3f676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f706d5f4d6f6469667950657273" .
    "6f6e43686172616344657363725f4164620670726f746f33"
));

