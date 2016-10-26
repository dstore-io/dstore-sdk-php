<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_CloseVisitorPersons_Pu.proto

namespace Dstore\Engine\Pm_CloseVisitorPersons_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $unique_id = null;
    private $unique_id_null = false;

    public function getUniqueId()
    {
        return $this->unique_id;
    }

    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->unique_id = $var;
    }

    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_CloseVisitorPersons_Pu\Response_Row::class);
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
    "0ad8040a386473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f436c6f736556697369746f72506572736f6e735f50752e70726f74" .
    "6f12276473746f72652e656e67696e652e706d5f436c6f73655669736974" .
    "6f72506572736f6e735f50751a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f22540a0a506172616d6574657273122d0a09756e69" .
    "7175655f696418012001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756512170a0e756e697175655f69645f6e756c6c18e9" .
    "072001280822e1010a08526573706f6e736512480a106d6574615f696e66" .
    "6f726d6174696f6e18022003280b322e2e6473746f72652e656e67696e65" .
    "2e6d657461696e666f726d6174696f6e2e4d657461496e666f726d617469" .
    "6f6e122f0a076d65737361676518032003280b321e2e6473746f72652e65" .
    "6e67696e652e6d6573736167652e4d65737361676512420a03726f771804" .
    "2003280b32352e6473746f72652e656e67696e652e706d5f436c6f736556" .
    "697369746f72506572736f6e735f50752e526573706f6e73652e526f771a" .
    "160a03526f77120f0a06726f775f696418904e20012805425a0a1b696f2e" .
    "6473746f72652e656e67696e652e70726f636564757265735a3b676f7364" .
    "6b2e6473746f72652e64652f656e67696e652f70726f636564757265732f" .
    "706d5f436c6f736556697369746f72506572736f6e735f5075620670726f" .
    "746f33"
));

