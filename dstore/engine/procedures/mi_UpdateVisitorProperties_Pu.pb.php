<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_UpdateVisitorProperties_Pu.proto

namespace Dstore\Engine\Mi_UpdateVisitorProperties_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $unique_id = null;
    private $unique_id_null = false;
    private $country_id = null;
    private $country_id_null = false;
    private $language_id = null;
    private $language_id_null = false;
    private $currency_id = null;
    private $currency_id_null = false;

    public function getUniqueId()
    {
        return $this->unique_id;
    }

    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->unique_id = $var;
    }

    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    public function getCountryId()
    {
        return $this->country_id;
    }

    public function setCountryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->country_id = $var;
    }

    public function getCountryIdNull()
    {
        return $this->country_id_null;
    }

    public function setCountryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_id_null = $var;
    }

    public function getLanguageId()
    {
        return $this->language_id;
    }

    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->language_id = $var;
    }

    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    public function setCurrencyId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->currency_id = $var;
    }

    public function getCurrencyIdNull()
    {
        return $this->currency_id_null;
    }

    public function setCurrencyIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->currency_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_UpdateVisitorProperties_Pu\Response_Row::class);
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
    "0ace060a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f55706461746556697369746f7250726f706572746965735f50752e" .
    "70726f746f122b6473746f72652e656e67696e652e6d695f557064617465" .
    "56697369746f7250726f706572746965735f50751a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22b9020a0a506172616d657465" .
    "7273122d0a09756e697175655f696418012001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512170a0e756e697175655f" .
    "69645f6e756c6c18e90720012808122f0a0a636f756e7472795f69641802" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512180a0f636f756e7472795f69645f6e756c6c18ea072001280812" .
    "300a0b6c616e67756167655f696418032001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512190a106c616e67756167" .
    "655f69645f6e756c6c18eb072001280812300a0b63757272656e63795f69" .
    "6418042001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512190a1063757272656e63795f69645f6e756c6c18ec0720" .
    "01280822e5010a08526573706f6e736512480a106d6574615f696e666f72" .
    "6d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d" .
    "657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e" .
    "122f0a076d65737361676518032003280b321e2e6473746f72652e656e67" .
    "696e652e6d6573736167652e4d65737361676512460a03726f7718042003" .
    "280b32392e6473746f72652e656e67696e652e6d695f5570646174655669" .
    "7369746f7250726f706572746965735f50752e526573706f6e73652e526f" .
    "771a160a03526f77120f0a06726f775f696418904e20012805425e0a1b69" .
    "6f2e6473746f72652e656e67696e652e70726f636564757265735a3f676f" .
    "73646b2e6473746f72652e64652f656e67696e652f70726f636564757265" .
    "732f6d695f55706461746556697369746f7250726f706572746965735f50" .
    "75620670726f746f33"
));

