<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_DeletePageTreeNodes_Ad.proto

namespace Dstore\Engine\Im_DeletePageTreeNodes_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $tree_node_id = null;
    private $tree_node_id_null = false;

    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tree_node_id = $var;
    }

    public function getTreeNodeIdNull()
    {
        return $this->tree_node_id_null;
    }

    public function setTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_DeletePageTreeNodes_Ad\Response_Row::class);
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
    "0adf040a386473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f44656c65746550616765547265654e6f6465735f41642e70726f74" .
    "6f12276473746f72652e656e67696e652e696d5f44656c65746550616765" .
    "547265654e6f6465735f41641a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f225b0a0a506172616d657465727312310a0c747265" .
    "655f6e6f64655f696418012001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c7565121a0a11747265655f6e6f64655f6964" .
    "5f6e756c6c18e9072001280822e1010a08526573706f6e736512480a106d" .
    "6574615f696e666f726d6174696f6e18022003280b322e2e6473746f7265" .
    "2e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e" .
    "666f726d6174696f6e122f0a076d65737361676518032003280b321e2e64" .
    "73746f72652e656e67696e652e6d6573736167652e4d6573736167651242" .
    "0a03726f7718042003280b32352e6473746f72652e656e67696e652e696d" .
    "5f44656c65746550616765547265654e6f6465735f41642e526573706f6e" .
    "73652e526f771a160a03526f77120f0a06726f775f696418904e20012805" .
    "425a0a1b696f2e6473746f72652e656e67696e652e70726f636564757265" .
    "735a3b676f73646b2e6473746f72652e64652f656e67696e652f70726f63" .
    "6564757265732f696d5f44656c65746550616765547265654e6f6465735f" .
    "4164620670726f746f33"
));

