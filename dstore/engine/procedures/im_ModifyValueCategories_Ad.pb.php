<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyValueCategories_Ad.proto

namespace Dstore\Engine\Im_ModifyValueCategories_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $value_category_id = null;
    private $value_category_id_null = false;
    private $value_category_description = null;
    private $value_category_description_null = false;
    private $node_characteristic_id = null;
    private $node_characteristic_id_null = false;
    private $delete = null;
    private $delete_null = false;

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

    public function getValueCategoryDescription()
    {
        return $this->value_category_description;
    }

    public function setValueCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value_category_description = $var;
    }

    public function getValueCategoryDescriptionNull()
    {
        return $this->value_category_description_null;
    }

    public function setValueCategoryDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_category_description_null = $var;
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

    public function getNodeCharacteristicIdNull()
    {
        return $this->node_characteristic_id_null;
    }

    public function setNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id_null = $var;
    }

    public function getDelete()
    {
        return $this->delete;
    }

    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete = $var;
    }

    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $value_category_id = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_ModifyValueCategories_Ad\Response_Row::class);
        $this->row = $var;
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
    "0aba070a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4d6f6469667956616c756543617465676f726965735f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e696d5f4d6f646966795661" .
    "6c756543617465676f726965735f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22f5020a0a506172616d65746572731236" .
    "0a1176616c75655f63617465676f72795f696418012001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565121f0a167661" .
    "6c75655f63617465676f72795f69645f6e756c6c18e90720012808123e0a" .
    "1a76616c75655f63617465676f72795f6465736372697074696f6e180220" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512280a1f76616c75655f63617465676f72795f6465736372697074696f" .
    "6e5f6e756c6c18ea0720012808123b0a166e6f64655f6368617261637465" .
    "7269737469635f696418032001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756512240a1b6e6f64655f63686172616374" .
    "657269737469635f69645f6e756c6c18eb0720012808122b0a0664656c65" .
    "746518042001280b321b2e6473746f72652e76616c7565732e626f6f6c65" .
    "616e56616c756512140a0b64656c6574655f6e756c6c18ec072001280822" .
    "9b020a08526573706f6e736512480a106d6574615f696e666f726d617469" .
    "6f6e18022003280b322e2e6473746f72652e656e67696e652e6d65746169" .
    "6e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a07" .
    "6d65737361676518032003280b321e2e6473746f72652e656e67696e652e" .
    "6d6573736167652e4d65737361676512440a03726f7718042003280b3237" .
    "2e6473746f72652e656e67696e652e696d5f4d6f6469667956616c756543" .
    "617465676f726965735f41642e526573706f6e73652e526f7712360a1176" .
    "616c75655f63617465676f72795f696418652001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c75651a160a03526f77120f" .
    "0a06726f775f696418904e20012805425c0a1b696f2e6473746f72652e65" .
    "6e67696e652e70726f636564757265735a3d676f73646b2e6473746f7265" .
    "2e64652f656e67696e652f70726f636564757265732f696d5f4d6f646966" .
    "7956616c756543617465676f726965735f4164620670726f746f33"
));
