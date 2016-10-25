<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyCountries_Ad.proto

namespace Dstore\Engine\Mi_ModifyCountries_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $country_id = null;
    private $country_id_null = false;
    private $country_description = null;
    private $country_description_null = false;
    private $country_code = null;
    private $country_code_null = false;
    private $sort_no = null;
    private $sort_no_null = false;
    private $language_id = null;
    private $language_id_null = false;
    private $delete_country = null;
    private $delete_country_null = false;

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

    public function getCountryDescription()
    {
        return $this->country_description;
    }

    public function setCountryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->country_description = $var;
    }

    public function getCountryDescriptionNull()
    {
        return $this->country_description_null;
    }

    public function setCountryDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_description_null = $var;
    }

    public function getCountryCode()
    {
        return $this->country_code;
    }

    public function setCountryCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->country_code = $var;
    }

    public function getCountryCodeNull()
    {
        return $this->country_code_null;
    }

    public function setCountryCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_code_null = $var;
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

    public function getSortNoNull()
    {
        return $this->sort_no_null;
    }

    public function setSortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_no_null = $var;
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

    public function getDeleteCountry()
    {
        return $this->delete_country;
    }

    public function setDeleteCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_country = $var;
    }

    public function getDeleteCountryNull()
    {
        return $this->delete_country_null;
    }

    public function setDeleteCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_country_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_ModifyCountries_Ad\Response_Row::class);
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
    "0adb070a346473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4d6f64696679436f756e74726965735f41642e70726f746f122364" .
    "73746f72652e656e67696e652e6d695f4d6f64696679436f756e74726965" .
    "735f41641a136473746f72652f76616c7565732e70726f746f1a1b647374" .
    "6f72652f656e67696e652f6d6573736167652e70726f746f1a236473746f" .
    "72652f656e67696e652f6d657461696e666f726d6174696f6e2e70726f74" .
    "6f22e6030a0a506172616d6574657273122f0a0a636f756e7472795f6964" .
    "18012001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512180a0f636f756e7472795f69645f6e756c6c18e907200128" .
    "0812370a13636f756e7472795f6465736372697074696f6e18022001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c75651221" .
    "0a18636f756e7472795f6465736372697074696f6e5f6e756c6c18ea0720" .
    "01280812300a0c636f756e7472795f636f646518032001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565121a0a11636f75" .
    "6e7472795f636f64655f6e756c6c18eb0720012808122c0a07736f72745f" .
    "6e6f18042001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512150a0c736f72745f6e6f5f6e756c6c18ec0720012808" .
    "12300a0b6c616e67756167655f696418052001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512190a106c616e677561" .
    "67655f69645f6e756c6c18ed072001280812330a0e64656c6574655f636f" .
    "756e74727918062001280b321b2e6473746f72652e76616c7565732e626f" .
    "6f6c65616e56616c7565121c0a1364656c6574655f636f756e7472795f6e" .
    "756c6c18ee072001280822dd010a08526573706f6e736512480a106d6574" .
    "615f696e666f726d6174696f6e18022003280b322e2e6473746f72652e65" .
    "6e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f" .
    "726d6174696f6e122f0a076d65737361676518032003280b321e2e647374" .
    "6f72652e656e67696e652e6d6573736167652e4d657373616765123e0a03" .
    "726f7718042003280b32312e6473746f72652e656e67696e652e6d695f4d" .
    "6f64696679436f756e74726965735f41642e526573706f6e73652e526f77" .
    "1a160a03526f77120f0a06726f775f696418904e2001280542560a1b696f" .
    "2e6473746f72652e656e67696e652e70726f636564757265735a37676f73" .
    "646b2e6473746f72652e64652f656e67696e652f70726f63656475726573" .
    "2f6d695f4d6f64696679436f756e74726965735f4164620670726f746f33"
));
