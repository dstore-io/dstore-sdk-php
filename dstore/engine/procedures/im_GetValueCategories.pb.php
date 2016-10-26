<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetValueCategories.proto

namespace Dstore\Engine\Im_GetValueCategories;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetValueCategories\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $value_category_id = null;
    private $characteristic_description = null;
    private $node_characteristic_id = null;
    private $value_category_description = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getCharacteristicDescription()
    {
        return $this->characteristic_description;
    }

    public function setCharacteristicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_description = $var;
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

    public function getValueCategoryDescription()
    {
        return $this->value_category_description;
    }

    public function setValueCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value_category_description = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab7070a346473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f47657456616c756543617465676f726965732e70726f746f122364" .
    "73746f72652e656e67696e652e696d5f47657456616c756543617465676f" .
    "726965731a136473746f72652f76616c7565732e70726f746f1a1b647374" .
    "6f72652f656e67696e652f6d6573736167652e70726f746f1a236473746f" .
    "72652f656e67696e652f6d657461696e666f726d6174696f6e2e70726f74" .
    "6f22c8010a0a506172616d6574657273123b0a166e6f64655f6368617261" .
    "6374657269737469635f696418012001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512240a1b6e6f64655f63686172" .
    "616374657269737469635f69645f6e756c6c18e9072001280812360a1176" .
    "616c75655f63617465676f72795f696418022001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565121f0a1676616c7565" .
    "5f63617465676f72795f69645f6e756c6c18ea072001280822d7030a0852" .
    "6573706f6e736512480a106d6574615f696e666f726d6174696f6e180220" .
    "03280b322e2e6473746f72652e656e67696e652e6d657461696e666f726d" .
    "6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d65737361" .
    "676518032003280b321e2e6473746f72652e656e67696e652e6d65737361" .
    "67652e4d657373616765123e0a03726f7718042003280b32312e6473746f" .
    "72652e656e67696e652e696d5f47657456616c756543617465676f726965" .
    "732e526573706f6e73652e526f771a8f020a03526f77120f0a06726f775f" .
    "696418904e2001280512370a1176616c75655f63617465676f72795f6964" .
    "18914e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565123f0a1a63686172616374657269737469635f6465736372" .
    "697074696f6e18924e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565123c0a166e6f64655f63686172616374657269" .
    "737469635f696418934e2001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565123f0a1a76616c75655f63617465676f72" .
    "795f6465736372697074696f6e18944e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c756542560a1b696f2e6473746f72" .
    "652e656e67696e652e70726f636564757265735a37676f73646b2e647374" .
    "6f72652e64652f656e67696e652f70726f636564757265732f696d5f4765" .
    "7456616c756543617465676f72696573620670726f746f33"
));

