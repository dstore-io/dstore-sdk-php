<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_ModifyPageCategories_Ad.proto

namespace Dstore\Engine\St_ModifyPageCategories_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $page_category_id = null;
    private $page_category_id_null = false;
    private $page_category_description = null;
    private $page_category_description_null = false;

    public function getPageCategoryId()
    {
        return $this->page_category_id;
    }

    public function setPageCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->page_category_id = $var;
    }

    public function getPageCategoryIdNull()
    {
        return $this->page_category_id_null;
    }

    public function setPageCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->page_category_id_null = $var;
    }

    public function getPageCategoryDescription()
    {
        return $this->page_category_description;
    }

    public function setPageCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->page_category_description = $var;
    }

    public function getPageCategoryDescriptionNull()
    {
        return $this->page_category_description_null;
    }

    public function setPageCategoryDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->page_category_description_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\St_ModifyPageCategories_Ad\Response_Row::class);
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
    "0ad4050a396473746f72652f656e67696e652f70726f636564757265732f" .
    "73745f4d6f646966795061676543617465676f726965735f41642e70726f" .
    "746f12286473746f72652e656e67696e652e73745f4d6f64696679506167" .
    "6543617465676f726965735f41641a136473746f72652f76616c7565732e" .
    "70726f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70" .
    "726f746f1a236473746f72652f656e67696e652f6d657461696e666f726d" .
    "6174696f6e2e70726f746f22cb010a0a506172616d657465727312350a10" .
    "706167655f63617465676f72795f696418012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565121e0a15706167655f" .
    "63617465676f72795f69645f6e756c6c18e90720012808123d0a19706167" .
    "655f63617465676f72795f6465736372697074696f6e18022001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512270a1e" .
    "706167655f63617465676f72795f6465736372697074696f6e5f6e756c6c" .
    "18ea072001280822e2010a08526573706f6e736512480a106d6574615f69" .
    "6e666f726d6174696f6e18022003280b322e2e6473746f72652e656e6769" .
    "6e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d61" .
    "74696f6e122f0a076d65737361676518032003280b321e2e6473746f7265" .
    "2e656e67696e652e6d6573736167652e4d65737361676512430a03726f77" .
    "18042003280b32362e6473746f72652e656e67696e652e73745f4d6f6469" .
    "66795061676543617465676f726965735f41642e526573706f6e73652e52" .
    "6f771a160a03526f77120f0a06726f775f696418904e20012805425b0a1b" .
    "696f2e6473746f72652e656e67696e652e70726f636564757265735a3c67" .
    "6f73646b2e6473746f72652e64652f656e67696e652f70726f6365647572" .
    "65732f73745f4d6f646966795061676543617465676f726965735f416462" .
    "0670726f746f33"
));

