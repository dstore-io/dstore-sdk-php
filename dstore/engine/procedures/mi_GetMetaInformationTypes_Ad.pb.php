<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetMetaInformationTypes_Ad.proto

namespace Dstore\Engine\Mi_GetMetaInformationTypes_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $table_id = null;
    private $table_id_null = false;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetMetaInformationTypes_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $table_id = null;
    private $meta_information_type_id = null;
    private $table_name = null;
    private $description = null;
    private $meta_information_type = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTableId()
    {
        return $this->table_id;
    }

    public function setTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->table_id = $var;
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

    public function getTableName()
    {
        return $this->table_name;
    }

    public function setTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->table_name = $var;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->description = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af7060a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4765744d657461496e666f726d6174696f6e54797065735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e6d695f4765744d6574" .
    "61496e666f726d6174696f6e54797065735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22530a0a506172616d65746572" .
    "73122d0a087461626c655f696418012001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512160a0d7461626c655f6964" .
    "5f6e756c6c18e9072001280822f5030a08526573706f6e736512480a106d" .
    "6574615f696e666f726d6174696f6e18022003280b322e2e6473746f7265" .
    "2e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e" .
    "666f726d6174696f6e122f0a076d65737361676518032003280b321e2e64" .
    "73746f72652e656e67696e652e6d6573736167652e4d6573736167651246" .
    "0a03726f7718042003280b32392e6473746f72652e656e67696e652e6d69" .
    "5f4765744d657461496e666f726d6174696f6e54797065735f41642e5265" .
    "73706f6e73652e526f771aa5020a03526f77120f0a06726f775f69641890" .
    "4e20012805122e0a087461626c655f696418914e2001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c7565123e0a186d6574" .
    "615f696e666f726d6174696f6e5f747970655f696418924e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565122f0a" .
    "0a7461626c655f6e616d6518934e2001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512300a0b6465736372697074696f" .
    "6e18944e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565123a0a156d6574615f696e666f726d6174696f6e5f747970" .
    "6518954e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565425e0a1b696f2e6473746f72652e656e67696e652e70726f" .
    "636564757265735a3f676f73646b2e6473746f72652e64652f656e67696e" .
    "652f70726f636564757265732f6d695f4765744d657461496e666f726d61" .
    "74696f6e54797065735f4164620670726f746f33"
));

