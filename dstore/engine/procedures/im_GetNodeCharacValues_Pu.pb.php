<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodeCharacValues_Pu.proto

namespace Dstore\Engine\Im_GetNodeCharacValues_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $node_characteristic_id = null;
    private $node_characteristic_id_null = false;
    private $value_category_id = null;
    private $value_category_id_null = false;

    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_characteristic_id = $var;
    }

    public function getNodeCharacteristicIdNull()
    {
        return $this->node_characteristic_id_null;
    }

    public function setNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id_null = $var;
    }

    public function getValueCategoryId()
    {
        return $this->value_category_id;
    }

    public function setValueCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->value_category_id = $var;
    }

    public function getValueCategoryIdNull()
    {
        return $this->value_category_id_null;
    }

    public function setValueCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_category_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetNodeCharacValues_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $node_characteristic_id = null;
    private $value = null;
    private $value_id = null;
    private $sort_no = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_characteristic_id = $var;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
    }

    public function getValueId()
    {
        return $this->value_id;
    }

    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->value_id = $var;
    }

    public function getSortNo()
    {
        return $this->sort_no;
    }

    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->sort_no = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a97070a386473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4765744e6f646543686172616356616c7565735f50752e70726f74" .
    "6f12276473746f72652e656e67696e652e696d5f4765744e6f6465436861" .
    "72616356616c7565735f50751a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f22c8010a0a506172616d6574657273123b0a166e6f" .
    "64655f63686172616374657269737469635f696418012001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512240a1b6e" .
    "6f64655f63686172616374657269737469635f69645f6e756c6c18e90720" .
    "01280812360a1176616c75655f63617465676f72795f696418022001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "1f0a1676616c75655f63617465676f72795f69645f6e756c6c18ea072001" .
    "280822ab030a08526573706f6e736512480a106d6574615f696e666f726d" .
    "6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d65" .
    "7461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e12" .
    "2f0a076d65737361676518032003280b321e2e6473746f72652e656e6769" .
    "6e652e6d6573736167652e4d65737361676512420a03726f771804200328" .
    "0b32352e6473746f72652e656e67696e652e696d5f4765744e6f64654368" .
    "6172616356616c7565735f50752e526573706f6e73652e526f771adf010a" .
    "03526f77120f0a06726f775f696418904e20012805123c0a166e6f64655f" .
    "63686172616374657269737469635f696418914e2001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c7565122a0a0576616c" .
    "756518924e2001280b321a2e6473746f72652e76616c7565732e73747269" .
    "6e6756616c7565122e0a0876616c75655f696418934e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565122d0a0773" .
    "6f72745f6e6f18944e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c7565425a0a1b696f2e6473746f72652e656e6769" .
    "6e652e70726f636564757265735a3b676f73646b2e6473746f72652e6465" .
    "2f656e67696e652f70726f636564757265732f696d5f4765744e6f646543" .
    "686172616356616c7565735f5075620670726f746f33"
));

