<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonTypeMetaInfo_Ad.proto

namespace Dstore\Engine\Pm_GetPersonTypeMetaInfo_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $meta_information_type_id_list = null;
    private $meta_information_type_id_list_null = false;

    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_type_id = $var;
    }

    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    public function getMetaInformationTypeIdList()
    {
        return $this->meta_information_type_id_list;
    }

    public function setMetaInformationTypeIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->meta_information_type_id_list = $var;
    }

    public function getMetaInformationTypeIdListNull()
    {
        return $this->meta_information_type_id_list_null;
    }

    public function setMetaInformationTypeIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->meta_information_type_id_list_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetPersonTypeMetaInfo_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $meta_information_type_id = null;
    private $meta_information_type = null;
    private $meta_information = null;
    private $person_type_id = null;
    private $translated_meta_information = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getMetaInformationTypeId()
    {
        return $this->meta_information_type_id;
    }

    public function setMetaInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->meta_information_type_id = $var;
    }

    public function getMetaInformationType()
    {
        return $this->meta_information_type;
    }

    public function setMetaInformationType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->meta_information_type = $var;
    }

    public function getMetaInformation()
    {
        return $this->meta_information;
    }

    public function setMetaInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->meta_information = $var;
    }

    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_type_id = $var;
    }

    public function getTranslatedMetaInformation()
    {
        return $this->translated_meta_information;
    }

    public function setTranslatedMetaInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->translated_meta_information = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a89080a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f476574506572736f6e547970654d657461496e666f5f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e706d5f476574506572736f" .
    "6e547970654d657461496e666f5f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22cf010a0a506172616d65746572731233" .
    "0a0e706572736f6e5f747970655f696418012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565121c0a13706572736f" .
    "6e5f747970655f69645f6e756c6c18e9072001280812410a1d6d6574615f" .
    "696e666f726d6174696f6e5f747970655f69645f6c69737418022001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c7565122b" .
    "0a226d6574615f696e666f726d6174696f6e5f747970655f69645f6c6973" .
    "745f6e756c6c18ea07200128082290040a08526573706f6e736512480a10" .
    "6d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f72" .
    "652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65746149" .
    "6e666f726d6174696f6e122f0a076d65737361676518032003280b321e2e" .
    "6473746f72652e656e67696e652e6d6573736167652e4d65737361676512" .
    "440a03726f7718042003280b32372e6473746f72652e656e67696e652e70" .
    "6d5f476574506572736f6e547970654d657461496e666f5f41642e526573" .
    "706f6e73652e526f771ac2020a03526f77120f0a06726f775f696418904e" .
    "20012805123e0a186d6574615f696e666f726d6174696f6e5f747970655f" .
    "696418914e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565123a0a156d6574615f696e666f726d6174696f6e5f74" .
    "79706518924e2001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c756512360a106d6574615f696e666f726d6174696f6e1893" .
    "4e2001280b321b2e6473746f72652e76616c7565732e646563696d616c56" .
    "616c756512340a0e706572736f6e5f747970655f696418944e2001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651240" .
    "0a1b7472616e736c617465645f6d6574615f696e666f726d6174696f6e18" .
    "954e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c7565425c0a1b696f2e6473746f72652e656e67696e652e70726f6365" .
    "64757265735a3d676f73646b2e6473746f72652e64652f656e67696e652f" .
    "70726f636564757265732f706d5f476574506572736f6e547970654d6574" .
    "61496e666f5f4164620670726f746f33"
));
