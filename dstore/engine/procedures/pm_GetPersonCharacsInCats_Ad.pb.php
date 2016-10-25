<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonCharacsInCats_Ad.proto

namespace Dstore\Engine\Pm_GetPersonCharacsInCats_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_charac_category_id = null;
    private $person_charac_category_id_null = false;
    private $country = null;
    private $country_null = false;

    public function getPersonCharacCategoryId()
    {
        return $this->person_charac_category_id;
    }

    public function setPersonCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_charac_category_id = $var;
    }

    public function getPersonCharacCategoryIdNull()
    {
        return $this->person_charac_category_id_null;
    }

    public function setPersonCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_charac_category_id_null = $var;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->country = $var;
    }

    public function getCountryNull()
    {
        return $this->country_null;
    }

    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetPersonCharacsInCats_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $default_value = null;
    private $required = null;
    private $characteristic_description = null;
    private $person_characteristic_id = null;
    private $description_for_admin = null;
    private $category_description = null;
    private $keep_properties_history_in_days = null;
    private $def_val_restricted_by_pattern = null;
    private $person_charac_category_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getDefaultValue()
    {
        return $this->default_value;
    }

    public function setDefaultValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->default_value = $var;
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function setRequired(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->required = $var;
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

    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_characteristic_id = $var;
    }

    public function getDescriptionForAdmin()
    {
        return $this->description_for_admin;
    }

    public function setDescriptionForAdmin(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->description_for_admin = $var;
    }

    public function getCategoryDescription()
    {
        return $this->category_description;
    }

    public function setCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->category_description = $var;
    }

    public function getKeepPropertiesHistoryInDays()
    {
        return $this->keep_properties_history_in_days;
    }

    public function setKeepPropertiesHistoryInDays(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->keep_properties_history_in_days = $var;
    }

    public function getDefValRestrictedByPattern()
    {
        return $this->def_val_restricted_by_pattern;
    }

    public function setDefValRestrictedByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->def_val_restricted_by_pattern = $var;
    }

    public function getPersonCharacCategoryId()
    {
        return $this->person_charac_category_id;
    }

    public function setPersonCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_charac_category_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af3090a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f476574506572736f6e43686172616373496e436174735f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e706d5f47657450657273" .
    "6f6e43686172616373496e436174735f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f22b9010a0a506172616d6574657273" .
    "123e0a19706572736f6e5f6368617261635f63617465676f72795f696418" .
    "012001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c756512270a1e706572736f6e5f6368617261635f63617465676f7279" .
    "5f69645f6e756c6c18e90720012808122b0a07636f756e74727918022001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12150a0c636f756e7472795f6e756c6c18ea0720012808228d060a085265" .
    "73706f6e736512480a106d6574615f696e666f726d6174696f6e18022003" .
    "280b322e2e6473746f72652e656e67696e652e6d657461696e666f726d61" .
    "74696f6e2e4d657461496e666f726d6174696f6e122f0a076d6573736167" .
    "6518032003280b321e2e6473746f72652e656e67696e652e6d6573736167" .
    "652e4d65737361676512450a03726f7718042003280b32382e6473746f72" .
    "652e656e67696e652e706d5f476574506572736f6e43686172616373496e" .
    "436174735f41642e526573706f6e73652e526f771abe040a03526f77120f" .
    "0a06726f775f696418904e2001280512320a0d64656661756c745f76616c" .
    "756518914e2001280b321a2e6473746f72652e76616c7565732e73747269" .
    "6e6756616c7565122e0a08726571756972656418924e2001280b321b2e64" .
    "73746f72652e76616c7565732e626f6f6c65616e56616c7565123f0a1a63" .
    "686172616374657269737469635f6465736372697074696f6e18934e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "123e0a18706572736f6e5f63686172616374657269737469635f69641894" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565123a0a156465736372697074696f6e5f666f725f61646d696e18" .
    "954e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512390a1463617465676f72795f6465736372697074696f6e1896" .
    "4e2001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c756512450a1f6b6565705f70726f706572746965735f686973746f7279" .
    "5f696e5f6461797318974e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756512420a1d6465665f76616c5f72657374" .
    "7269637465645f62795f7061747465726e18984e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565123f0a1970657273" .
    "6f6e5f6368617261635f63617465676f72795f696418994e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565425d0a" .
    "1b696f2e6473746f72652e656e67696e652e70726f636564757265735a3e" .
    "676f73646b2e6473746f72652e64652f656e67696e652f70726f63656475" .
    "7265732f706d5f476574506572736f6e43686172616373496e436174735f" .
    "4164620670726f746f33"
));
