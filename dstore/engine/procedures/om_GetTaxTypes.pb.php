<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetTaxTypes.proto

namespace Dstore\Engine\Om_GetTaxTypes;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $tax_type_id = null;
    private $tax_type_id_null = false;

    public function getTaxTypeId()
    {
        return $this->tax_type_id;
    }

    public function setTaxTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tax_type_id = $var;
    }

    public function getTaxTypeIdNull()
    {
        return $this->tax_type_id_null;
    }

    public function setTaxTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tax_type_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetTaxTypes\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $tax_type = null;
    private $tax_type_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTaxType()
    {
        return $this->tax_type;
    }

    public function setTaxType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->tax_type = $var;
    }

    public function getTaxTypeId()
    {
        return $this->tax_type_id;
    }

    public function setTaxTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tax_type_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a93050a2d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657454617854797065732e70726f746f121c6473746f72652e65" .
    "6e67696e652e6f6d5f47657454617854797065731a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22590a0a506172616d65746572" .
    "7312300a0b7461785f747970655f696418012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512190a107461785f74" .
    "7970655f69645f6e756c6c18e9072001280822b8020a08526573706f6e73" .
    "6512480a106d6574615f696e666f726d6174696f6e18022003280b322e2e" .
    "6473746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e" .
    "4d657461496e666f726d6174696f6e122f0a076d65737361676518032003" .
    "280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d6573" .
    "7361676512370a03726f7718042003280b322a2e6473746f72652e656e67" .
    "696e652e6f6d5f47657454617854797065732e526573706f6e73652e526f" .
    "771a780a03526f77120f0a06726f775f696418904e20012805122d0a0874" .
    "61785f7479706518914e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c756512310a0b7461785f747970655f696418924e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565424f0a1b696f2e6473746f72652e656e67696e652e70726f636564" .
    "757265735a30676f73646b2e6473746f72652e64652f656e67696e652f70" .
    "726f636564757265732f6f6d5f4765745461785479706573620670726f74" .
    "6f33"
));

