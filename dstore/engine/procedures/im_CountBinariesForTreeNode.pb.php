<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_CountBinariesForTreeNode.proto

namespace Dstore\Engine\Im_CountBinariesForTreeNode;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_CountBinariesForTreeNode\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $number_of_binaries = null;
    private $node_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getNumberOfBinaries()
    {
        return $this->number_of_binaries;
    }

    public function setNumberOfBinaries(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->number_of_binaries = $var;
    }

    public function getNodeId()
    {
        return $this->node_id;
    }

    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad0050a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f436f756e7442696e6172696573466f72547265654e6f64652e7072" .
    "6f746f12296473746f72652e656e67696e652e696d5f436f756e7442696e" .
    "6172696573466f72547265654e6f64651a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f225b0a0a506172616d657465727312310a" .
    "0c747265655f6e6f64655f696418012001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c7565121a0a11747265655f6e6f64" .
    "655f69645f6e756c6c18e9072001280822cc020a08526573706f6e736512" .
    "480a106d6574615f696e666f726d6174696f6e18022003280b322e2e6473" .
    "746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65" .
    "7461496e666f726d6174696f6e122f0a076d65737361676518032003280b" .
    "321e2e6473746f72652e656e67696e652e6d6573736167652e4d65737361" .
    "676512440a03726f7718042003280b32372e6473746f72652e656e67696e" .
    "652e696d5f436f756e7442696e6172696573466f72547265654e6f64652e" .
    "526573706f6e73652e526f771a7f0a03526f77120f0a06726f775f696418" .
    "904e2001280512380a126e756d6265725f6f665f62696e61726965731891" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565122d0a076e6f64655f696418924e2001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565425c0a1b696f2e6473" .
    "746f72652e656e67696e652e70726f636564757265735a3d676f73646b2e" .
    "6473746f72652e64652f656e67696e652f70726f636564757265732f696d" .
    "5f436f756e7442696e6172696573466f72547265654e6f6465620670726f" .
    "746f33"
));
