<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ResetSymbolIDs_Ad.proto

namespace Dstore\Engine\Im_ResetSymbolIDs_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_ResetSymbolIDs_Ad\Response_Row::class);
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
    "0afc030a336473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f526573657453796d626f6c4944735f41642e70726f746f12226473" .
    "746f72652e656e67696e652e696d5f526573657453796d626f6c4944735f" .
    "41641a136473746f72652f76616c7565732e70726f746f1a1b6473746f72" .
    "652f656e67696e652f6d6573736167652e70726f746f1a236473746f7265" .
    "2f656e67696e652f6d657461696e666f726d6174696f6e2e70726f746f22" .
    "0c0a0a506172616d657465727322dc010a08526573706f6e736512480a10" .
    "6d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f72" .
    "652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65746149" .
    "6e666f726d6174696f6e122f0a076d65737361676518032003280b321e2e" .
    "6473746f72652e656e67696e652e6d6573736167652e4d65737361676512" .
    "3d0a03726f7718042003280b32302e6473746f72652e656e67696e652e69" .
    "6d5f526573657453796d626f6c4944735f41642e526573706f6e73652e52" .
    "6f771a160a03526f77120f0a06726f775f696418904e2001280542550a1b" .
    "696f2e6473746f72652e656e67696e652e70726f636564757265735a3667" .
    "6f73646b2e6473746f72652e64652f656e67696e652f70726f6365647572" .
    "65732f696d5f526573657453796d626f6c4944735f4164620670726f746f" .
    "33"
));
