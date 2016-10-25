<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyGroupSurcharges_Ad.proto

namespace Dstore\Engine\Om_ModifyGroupSurcharges_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $group_id = null;
    private $group_id_null = false;
    private $tree_node_id = null;
    private $tree_node_id_null = false;
    private $surcharge_type_id = null;
    private $surcharge_type_id_null = false;
    private $surcharge_value = null;
    private $surcharge_value_null = false;
    private $delete_surcharge = null;
    private $delete_surcharge_null = false;

    public function getGroupId()
    {
        return $this->group_id;
    }

    public function setGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->group_id = $var;
    }

    public function getGroupIdNull()
    {
        return $this->group_id_null;
    }

    public function setGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->group_id_null = $var;
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

    public function getTreeNodeIdNull()
    {
        return $this->tree_node_id_null;
    }

    public function setTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_id_null = $var;
    }

    public function getSurchargeTypeId()
    {
        return $this->surcharge_type_id;
    }

    public function setSurchargeTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->surcharge_type_id = $var;
    }

    public function getSurchargeTypeIdNull()
    {
        return $this->surcharge_type_id_null;
    }

    public function setSurchargeTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->surcharge_type_id_null = $var;
    }

    public function getSurchargeValue()
    {
        return $this->surcharge_value;
    }

    public function setSurchargeValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->surcharge_value = $var;
    }

    public function getSurchargeValueNull()
    {
        return $this->surcharge_value_null;
    }

    public function setSurchargeValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->surcharge_value_null = $var;
    }

    public function getDeleteSurcharge()
    {
        return $this->delete_surcharge;
    }

    public function setDeleteSurcharge(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_surcharge = $var;
    }

    public function getDeleteSurchargeNull()
    {
        return $this->delete_surcharge_null;
    }

    public function setDeleteSurchargeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_surcharge_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyGroupSurcharges_Ad\Response_Row::class);
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
    "0ab4070a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f6469667947726f7570537572636861726765735f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e6f6d5f4d6f646966794772" .
    "6f7570537572636861726765735f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22a7030a0a506172616d6574657273122d" .
    "0a0867726f75705f696418012001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512160a0d67726f75705f69645f6e75" .
    "6c6c18e9072001280812310a0c747265655f6e6f64655f69641802200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "121a0a11747265655f6e6f64655f69645f6e756c6c18ea07200128081236" .
    "0a117375726368617267655f747970655f696418032001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565121f0a167375" .
    "726368617267655f747970655f69645f6e756c6c18eb072001280812340a" .
    "0f7375726368617267655f76616c756518042001280b321b2e6473746f72" .
    "652e76616c7565732e646563696d616c56616c7565121d0a147375726368" .
    "617267655f76616c75655f6e756c6c18ec072001280812350a1064656c65" .
    "74655f73757263686172676518052001280b321b2e6473746f72652e7661" .
    "6c7565732e626f6f6c65616e56616c7565121e0a1564656c6574655f7375" .
    "726368617267655f6e756c6c18ed072001280822e3010a08526573706f6e" .
    "736512480a106d6574615f696e666f726d6174696f6e18022003280b322e" .
    "2e6473746f72652e656e67696e652e6d657461696e666f726d6174696f6e" .
    "2e4d657461496e666f726d6174696f6e122f0a076d657373616765180320" .
    "03280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d65" .
    "737361676512440a03726f7718042003280b32372e6473746f72652e656e" .
    "67696e652e6f6d5f4d6f6469667947726f7570537572636861726765735f" .
    "41642e526573706f6e73652e526f771a160a03526f77120f0a06726f775f" .
    "696418904e20012805425c0a1b696f2e6473746f72652e656e67696e652e" .
    "70726f636564757265735a3d676f73646b2e6473746f72652e64652f656e" .
    "67696e652f70726f636564757265732f6f6d5f4d6f6469667947726f7570" .
    "537572636861726765735f4164620670726f746f33"
));
