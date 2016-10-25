<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifySearchItems_Ad.proto

namespace Dstore\Engine\Mi_ModifySearchItems_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $table_id = null;
    private $table_id_null = false;
    private $characteristic_id = null;
    private $characteristic_id_null = false;
    private $search_value = null;
    private $search_value_null = false;
    private $matching_value = null;
    private $matching_value_null = false;
    private $use_like = null;
    private $use_like_null = false;
    private $delete = null;
    private $delete_null = false;

    public function getTableId()
    {
        return $this->table_id;
    }

    public function setTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->table_id = $var;
    }

    public function getTableIdNull()
    {
        return $this->table_id_null;
    }

    public function setTableIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->table_id_null = $var;
    }

    public function getCharacteristicId()
    {
        return $this->characteristic_id;
    }

    public function setCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->characteristic_id = $var;
    }

    public function getCharacteristicIdNull()
    {
        return $this->characteristic_id_null;
    }

    public function setCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_null = $var;
    }

    public function getSearchValue()
    {
        return $this->search_value;
    }

    public function setSearchValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->search_value = $var;
    }

    public function getSearchValueNull()
    {
        return $this->search_value_null;
    }

    public function setSearchValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_value_null = $var;
    }

    public function getMatchingValue()
    {
        return $this->matching_value;
    }

    public function setMatchingValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->matching_value = $var;
    }

    public function getMatchingValueNull()
    {
        return $this->matching_value_null;
    }

    public function setMatchingValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->matching_value_null = $var;
    }

    public function getUseLike()
    {
        return $this->use_like;
    }

    public function setUseLike(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->use_like = $var;
    }

    public function getUseLikeNull()
    {
        return $this->use_like_null;
    }

    public function setUseLikeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->use_like_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_ModifySearchItems_Ad\Response_Row::class);
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
    "0ad3070a366473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4d6f646966795365617263684974656d735f41642e70726f746f12" .
    "256473746f72652e656e67696e652e6d695f4d6f64696679536561726368" .
    "4974656d735f41641a136473746f72652f76616c7565732e70726f746f1a" .
    "1b6473746f72652f656e67696e652f6d6573736167652e70726f746f1a23" .
    "6473746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e" .
    "70726f746f22d6030a0a506172616d6574657273122d0a087461626c655f" .
    "696418012001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512160a0d7461626c655f69645f6e756c6c18e907200128" .
    "0812360a1163686172616374657269737469635f696418022001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565121f0a" .
    "1663686172616374657269737469635f69645f6e756c6c18ea0720012808" .
    "12300a0c7365617263685f76616c756518032001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c7565121a0a11736561726368" .
    "5f76616c75655f6e756c6c18eb072001280812320a0e6d61746368696e67" .
    "5f76616c756518042001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c7565121c0a136d61746368696e675f76616c75655f6e" .
    "756c6c18ec0720012808122d0a087573655f6c696b6518052001280b321b" .
    "2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512160a" .
    "0d7573655f6c696b655f6e756c6c18ed0720012808122b0a0664656c6574" .
    "6518062001280b321b2e6473746f72652e76616c7565732e626f6f6c6561" .
    "6e56616c756512140a0b64656c6574655f6e756c6c18ee072001280822df" .
    "010a08526573706f6e736512480a106d6574615f696e666f726d6174696f" .
    "6e18022003280b322e2e6473746f72652e656e67696e652e6d657461696e" .
    "666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d" .
    "65737361676518032003280b321e2e6473746f72652e656e67696e652e6d" .
    "6573736167652e4d65737361676512400a03726f7718042003280b32332e" .
    "6473746f72652e656e67696e652e6d695f4d6f6469667953656172636849" .
    "74656d735f41642e526573706f6e73652e526f771a160a03526f77120f0a" .
    "06726f775f696418904e2001280542580a1b696f2e6473746f72652e656e" .
    "67696e652e70726f636564757265735a39676f73646b2e6473746f72652e" .
    "64652f656e67696e652f70726f636564757265732f6d695f4d6f64696679" .
    "5365617263684974656d735f4164620670726f746f33"
));
