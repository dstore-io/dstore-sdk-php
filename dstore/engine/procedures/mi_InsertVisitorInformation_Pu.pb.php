<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_InsertVisitorInformation_Pu.proto

namespace Dstore\Engine\Mi_InsertVisitorInformation_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $unique_id = null;
    private $unique_id_null = false;
    private $visitor_information_type_id = null;
    private $visitor_information_type_id_null = false;
    private $visitor_information = null;
    private $visitor_information_null = false;

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

    public function getVisitorInformationTypeId()
    {
        return $this->visitor_information_type_id;
    }

    public function setVisitorInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->visitor_information_type_id = $var;
    }

    public function getVisitorInformationTypeIdNull()
    {
        return $this->visitor_information_type_id_null;
    }

    public function setVisitorInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visitor_information_type_id_null = $var;
    }

    public function getVisitorInformation()
    {
        return $this->visitor_information;
    }

    public function setVisitorInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->visitor_information = $var;
    }

    public function getVisitorInformationNull()
    {
        return $this->visitor_information_null;
    }

    public function setVisitorInformationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visitor_information_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_InsertVisitorInformation_Pu\Response_Row::class);
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
    "0ab6060a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f496e7365727456697369746f72496e666f726d6174696f6e5f5075" .
    "2e70726f746f122c6473746f72652e656e67696e652e6d695f496e736572" .
    "7456697369746f72496e666f726d6174696f6e5f50751a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f229d020a0a506172616d65" .
    "74657273122d0a09756e697175655f696418012001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512170a0e756e697175" .
    "655f69645f6e756c6c18e9072001280812400a1b76697369746f725f696e" .
    "666f726d6174696f6e5f747970655f696418022001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512290a2076697369" .
    "746f725f696e666f726d6174696f6e5f747970655f69645f6e756c6c18ea" .
    "072001280812370a1376697369746f725f696e666f726d6174696f6e1803" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "756512210a1876697369746f725f696e666f726d6174696f6e5f6e756c6c" .
    "18eb072001280822e6010a08526573706f6e736512480a106d6574615f69" .
    "6e666f726d6174696f6e18022003280b322e2e6473746f72652e656e6769" .
    "6e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d61" .
    "74696f6e122f0a076d65737361676518032003280b321e2e6473746f7265" .
    "2e656e67696e652e6d6573736167652e4d65737361676512470a03726f77" .
    "18042003280b323a2e6473746f72652e656e67696e652e6d695f496e7365" .
    "727456697369746f72496e666f726d6174696f6e5f50752e526573706f6e" .
    "73652e526f771a160a03526f77120f0a06726f775f696418904e20012805" .
    "425f0a1b696f2e6473746f72652e656e67696e652e70726f636564757265" .
    "735a40676f73646b2e6473746f72652e64652f656e67696e652f70726f63" .
    "6564757265732f6d695f496e7365727456697369746f72496e666f726d61" .
    "74696f6e5f5075620670726f746f33"
));

