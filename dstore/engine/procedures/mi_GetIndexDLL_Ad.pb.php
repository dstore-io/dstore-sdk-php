<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetIndexDLL_Ad.proto

namespace Dstore\Engine\Mi_GetIndexDLL_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $table_name = null;
    private $table_name_null = false;
    private $index_name = null;
    private $index_name_null = false;

    public function getTableName()
    {
        return $this->table_name;
    }

    public function setTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->table_name = $var;
    }

    public function getTableNameNull()
    {
        return $this->table_name_null;
    }

    public function setTableNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->table_name_null = $var;
    }

    public function getIndexName()
    {
        return $this->index_name;
    }

    public function setIndexName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->index_name = $var;
    }

    public function getIndexNameNull()
    {
        return $this->index_name_null;
    }

    public function setIndexNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->index_name_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetIndexDLL_Ad\Response_Row::class);
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
    "0a85050a306473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f476574496e646578444c4c5f41642e70726f746f121f6473746f72" .
    "652e656e67696e652e6d695f476574496e646578444c4c5f41641a136473" .
    "746f72652f76616c7565732e70726f746f1a1b6473746f72652f656e6769" .
    "6e652f6d6573736167652e70726f746f1a236473746f72652f656e67696e" .
    "652f6d657461696e666f726d6174696f6e2e70726f746f22a0010a0a5061" .
    "72616d6574657273122e0a0a7461626c655f6e616d6518012001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512180a0f" .
    "7461626c655f6e616d655f6e756c6c18e90720012808122e0a0a696e6465" .
    "785f6e616d6518022001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756512180a0f696e6465785f6e616d655f6e756c6c18" .
    "ea072001280822d9010a08526573706f6e736512480a106d6574615f696e" .
    "666f726d6174696f6e18022003280b322e2e6473746f72652e656e67696e" .
    "652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174" .
    "696f6e122f0a076d65737361676518032003280b321e2e6473746f72652e" .
    "656e67696e652e6d6573736167652e4d657373616765123a0a03726f7718" .
    "042003280b322d2e6473746f72652e656e67696e652e6d695f476574496e" .
    "646578444c4c5f41642e526573706f6e73652e526f771a160a03526f7712" .
    "0f0a06726f775f696418904e2001280542520a1b696f2e6473746f72652e" .
    "656e67696e652e70726f636564757265735a33676f73646b2e6473746f72" .
    "652e64652f656e67696e652f70726f636564757265732f6d695f47657449" .
    "6e646578444c4c5f4164620670726f746f33"
));

