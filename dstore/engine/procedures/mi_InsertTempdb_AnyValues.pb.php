<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_InsertTempdb_AnyValues.proto

namespace Dstore\Engine\Mi_InsertTempdb_AnyValues;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $id_list = null;
    private $id_list_null = false;
    private $value_list = null;
    private $value_list_null = false;
    private $delete = null;
    private $delete_null = false;
    private $separator = null;
    private $separator_null = false;
    private $check_byte_length_for_strings = null;
    private $check_byte_length_for_strings_null = false;

    public function getIdList()
    {
        return $this->id_list;
    }

    public function setIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->id_list = $var;
    }

    public function getIdListNull()
    {
        return $this->id_list_null;
    }

    public function setIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->id_list_null = $var;
    }

    public function getValueList()
    {
        return $this->value_list;
    }

    public function setValueList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value_list = $var;
    }

    public function getValueListNull()
    {
        return $this->value_list_null;
    }

    public function setValueListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_list_null = $var;
    }

    public function getDelete()
    {
        return $this->delete;
    }

    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete = $var;
    }

    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

    public function getSeparator()
    {
        return $this->separator;
    }

    public function setSeparator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->separator = $var;
    }

    public function getSeparatorNull()
    {
        return $this->separator_null;
    }

    public function setSeparatorNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_null = $var;
    }

    public function getCheckByteLengthForStrings()
    {
        return $this->check_byte_length_for_strings;
    }

    public function setCheckByteLengthForStrings(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->check_byte_length_for_strings = $var;
    }

    public function getCheckByteLengthForStringsNull()
    {
        return $this->check_byte_length_for_strings_null;
    }

    public function setCheckByteLengthForStringsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_byte_length_for_strings_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_InsertTempdb_AnyValues\Response_Row::class);
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
    "0a9b070a386473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f496e7365727454656d7064625f416e7956616c7565732e70726f74" .
    "6f12276473746f72652e656e67696e652e6d695f496e7365727454656d70" .
    "64625f416e7956616c7565731a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f2296030a0a506172616d6574657273122b0a076964" .
    "5f6c69737418012001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c756512150a0c69645f6c6973745f6e756c6c18e9072001" .
    "2808122e0a0a76616c75655f6c69737418022001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512180a0f76616c75655f" .
    "6c6973745f6e756c6c18ea0720012808122b0a0664656c65746518032001" .
    "280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75" .
    "6512140a0b64656c6574655f6e756c6c18eb0720012808122d0a09736570" .
    "617261746f7218042001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756512170a0e736570617261746f725f6e756c6c18ec" .
    "072001280812420a1d636865636b5f627974655f6c656e6774685f666f72" .
    "5f737472696e677318052001280b321b2e6473746f72652e76616c756573" .
    "2e626f6f6c65616e56616c7565122b0a22636865636b5f627974655f6c65" .
    "6e6774685f666f725f737472696e67735f6e756c6c18ed072001280822e1" .
    "010a08526573706f6e736512480a106d6574615f696e666f726d6174696f" .
    "6e18022003280b322e2e6473746f72652e656e67696e652e6d657461696e" .
    "666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d" .
    "65737361676518032003280b321e2e6473746f72652e656e67696e652e6d" .
    "6573736167652e4d65737361676512420a03726f7718042003280b32352e" .
    "6473746f72652e656e67696e652e6d695f496e7365727454656d7064625f" .
    "416e7956616c7565732e526573706f6e73652e526f771a160a03526f7712" .
    "0f0a06726f775f696418904e20012805425a0a1b696f2e6473746f72652e" .
    "656e67696e652e70726f636564757265735a3b676f73646b2e6473746f72" .
    "652e64652f656e67696e652f70726f636564757265732f6d695f496e7365" .
    "727454656d7064625f416e7956616c756573620670726f746f33"
));
