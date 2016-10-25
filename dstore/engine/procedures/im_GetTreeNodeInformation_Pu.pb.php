<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetTreeNodeInformation_Pu.proto

namespace Dstore\Engine\Im_GetTreeNodeInformation_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $node_or_tree_node_id = null;
    private $node_or_tree_node_id_null = false;
    private $is_tree_node_id = null;
    private $is_tree_node_id_null = false;

    public function getNodeOrTreeNodeId()
    {
        return $this->node_or_tree_node_id;
    }

    public function setNodeOrTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_or_tree_node_id = $var;
    }

    public function getNodeOrTreeNodeIdNull()
    {
        return $this->node_or_tree_node_id_null;
    }

    public function setNodeOrTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_or_tree_node_id_null = $var;
    }

    public function getIsTreeNodeId()
    {
        return $this->is_tree_node_id;
    }

    public function setIsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_tree_node_id = $var;
    }

    public function getIsTreeNodeIdNull()
    {
        return $this->is_tree_node_id_null;
    }

    public function setIsTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->is_tree_node_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetTreeNodeInformation_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $predecessor = null;
    private $level_no = null;
    private $node_id = null;
    private $tree_node_id = null;
    private $inherits_from = null;
    private $level_id = null;
    private $symbol_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getPredecessor()
    {
        return $this->predecessor;
    }

    public function setPredecessor(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->predecessor = $var;
    }

    public function getLevelNo()
    {
        return $this->level_no;
    }

    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_no = $var;
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

    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tree_node_id = $var;
    }

    public function getInheritsFrom()
    {
        return $this->inherits_from;
    }

    public function setInheritsFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->inherits_from = $var;
    }

    public function getLevelId()
    {
        return $this->level_id;
    }

    public function setLevelId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_id = $var;
    }

    public function getSymbolId()
    {
        return $this->symbol_id;
    }

    public function setSymbolId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->symbol_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aae080a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f476574547265654e6f6465496e666f726d6174696f6e5f50752e70" .
    "726f746f122a6473746f72652e656e67696e652e696d5f47657454726565" .
    "4e6f6465496e666f726d6174696f6e5f50751a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f22c0010a0a506172616d6574657273" .
    "12390a146e6f64655f6f725f747265655f6e6f64655f696418012001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "220a196e6f64655f6f725f747265655f6e6f64655f69645f6e756c6c18e9" .
    "072001280812340a0f69735f747265655f6e6f64655f696418022001280b" .
    "321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512" .
    "1d0a1469735f747265655f6e6f64655f69645f6e756c6c18ea0720012808" .
    "22c1040a08526573706f6e736512480a106d6574615f696e666f726d6174" .
    "696f6e18022003280b322e2e6473746f72652e656e67696e652e6d657461" .
    "696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a" .
    "076d65737361676518032003280b321e2e6473746f72652e656e67696e65" .
    "2e6d6573736167652e4d65737361676512450a03726f7718042003280b32" .
    "382e6473746f72652e656e67696e652e696d5f476574547265654e6f6465" .
    "496e666f726d6174696f6e5f50752e526573706f6e73652e526f771af202" .
    "0a03526f77120f0a06726f775f696418904e2001280512310a0b70726564" .
    "65636573736f7218914e2001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565122e0a086c6576656c5f6e6f18924e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65122d0a076e6f64655f696418934e2001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512320a0c747265655f6e6f64" .
    "655f696418944e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512330a0d696e6865726974735f66726f6d18954e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565122e0a086c6576656c5f696418964e2001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565122f0a0973796d626f" .
    "6c5f696418974e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565425d0a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a3e676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f696d5f476574547265654e6f64" .
    "65496e666f726d6174696f6e5f5075620670726f746f33"
));
