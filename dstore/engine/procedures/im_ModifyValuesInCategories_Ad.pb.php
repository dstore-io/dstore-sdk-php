<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyValuesInCategories_Ad.proto

namespace Dstore\Engine\Im_ModifyValuesInCategories_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $value_id = null;
    private $value_id_null = false;
    private $value_category_id = null;
    private $value_category_id_null = false;
    private $delete = null;
    private $delete_null = false;

    public function getValueId()
    {
        return $this->value_id;
    }

    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->value_id = $var;
    }

    public function getValueIdNull()
    {
        return $this->value_id_null;
    }

    public function setValueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_ModifyValuesInCategories_Ad\Response_Row::class);
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
    "0a88060a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4d6f6469667956616c756573496e43617465676f726965735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e696d5f4d6f646966" .
    "7956616c756573496e43617465676f726965735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22ef010a0a506172616d65" .
    "74657273122d0a0876616c75655f696418012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512160a0d76616c7565" .
    "5f69645f6e756c6c18e9072001280812360a1176616c75655f6361746567" .
    "6f72795f696418022001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565121f0a1676616c75655f63617465676f72795f" .
    "69645f6e756c6c18ea0720012808122b0a0664656c65746518032001280b" .
    "321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512" .
    "140a0b64656c6574655f6e756c6c18eb072001280822e6010a0852657370" .
    "6f6e736512480a106d6574615f696e666f726d6174696f6e18022003280b" .
    "322e2e6473746f72652e656e67696e652e6d657461696e666f726d617469" .
    "6f6e2e4d657461496e666f726d6174696f6e122f0a076d65737361676518" .
    "032003280b321e2e6473746f72652e656e67696e652e6d6573736167652e" .
    "4d65737361676512470a03726f7718042003280b323a2e6473746f72652e" .
    "656e67696e652e696d5f4d6f6469667956616c756573496e43617465676f" .
    "726965735f41642e526573706f6e73652e526f771a160a03526f77120f0a" .
    "06726f775f696418904e20012805425f0a1b696f2e6473746f72652e656e" .
    "67696e652e70726f636564757265735a40676f73646b2e6473746f72652e" .
    "64652f656e67696e652f70726f636564757265732f696d5f4d6f64696679" .
    "56616c756573496e43617465676f726965735f4164620670726f746f33"
));

