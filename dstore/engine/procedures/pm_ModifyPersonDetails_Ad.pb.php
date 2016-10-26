<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPersonDetails_Ad.proto

namespace Dstore\Engine\Pm_ModifyPersonDetails_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_id = null;
    private $person_id_null = false;
    private $person_characteristic_id = null;
    private $person_characteristic_id_null = false;
    private $sort_no = null;
    private $sort_no_null = false;

    public function getPersonId()
    {
        return $this->person_id;
    }

    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_id = $var;
    }

    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

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

    public function getSortNo()
    {
        return $this->sort_no;
    }

    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->sort_no = $var;
    }

    public function getSortNoNull()
    {
        return $this->sort_no_null;
    }

    public function setSortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_no_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_ModifyPersonDetails_Ad\Response_Row::class);
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
    "0a86060a386473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f4d6f64696679506572736f6e44657461696c735f41642e70726f74" .
    "6f12276473746f72652e656e67696e652e706d5f4d6f6469667950657273" .
    "6f6e44657461696c735f41641a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f2281020a0a506172616d6574657273122e0a097065" .
    "72736f6e5f696418012001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c756512170a0e706572736f6e5f69645f6e756c6c" .
    "18e90720012808123d0a18706572736f6e5f636861726163746572697374" .
    "69635f696418022001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512260a1d706572736f6e5f636861726163746572" .
    "69737469635f69645f6e756c6c18ea0720012808122c0a07736f72745f6e" .
    "6f18032001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512150a0c736f72745f6e6f5f6e756c6c18eb072001280822" .
    "e1010a08526573706f6e736512480a106d6574615f696e666f726d617469" .
    "6f6e18022003280b322e2e6473746f72652e656e67696e652e6d65746169" .
    "6e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a07" .
    "6d65737361676518032003280b321e2e6473746f72652e656e67696e652e" .
    "6d6573736167652e4d65737361676512420a03726f7718042003280b3235" .
    "2e6473746f72652e656e67696e652e706d5f4d6f64696679506572736f6e" .
    "44657461696c735f41642e526573706f6e73652e526f771a160a03526f77" .
    "120f0a06726f775f696418904e20012805425a0a1b696f2e6473746f7265" .
    "2e656e67696e652e70726f636564757265735a3b676f73646b2e6473746f" .
    "72652e64652f656e67696e652f70726f636564757265732f706d5f4d6f64" .
    "696679506572736f6e44657461696c735f4164620670726f746f33"
));

