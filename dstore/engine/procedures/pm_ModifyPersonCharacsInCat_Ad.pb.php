<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPersonCharacsInCat_Ad.proto

namespace Dstore\Engine\Pm_ModifyPersonCharacsInCat_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_charac_category_id = null;
    private $person_charac_category_id_null = false;
    private $person_characteristic_id = null;
    private $person_characteristic_id_null = false;
    private $required = null;
    private $required_null = false;
    private $delete = null;
    private $delete_null = false;
    private $keep_properties_history_in_days = null;
    private $keep_properties_history_in_days_null = false;
    private $default_value = null;
    private $default_value_null = false;
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

    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_characteristic_id = $var;
    }

    public function getPersonCharacteristicIdNull()
    {
        return $this->person_characteristic_id_null;
    }

    public function setPersonCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_characteristic_id_null = $var;
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

    public function getRequiredNull()
    {
        return $this->required_null;
    }

    public function setRequiredNull($var)
    {
        GPBUtil::checkBool($var);
        $this->required_null = $var;
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

    public function getKeepPropertiesHistoryInDays()
    {
        return $this->keep_properties_history_in_days;
    }

    public function setKeepPropertiesHistoryInDays(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->keep_properties_history_in_days = $var;
    }

    public function getKeepPropertiesHistoryInDaysNull()
    {
        return $this->keep_properties_history_in_days_null;
    }

    public function setKeepPropertiesHistoryInDaysNull($var)
    {
        GPBUtil::checkBool($var);
        $this->keep_properties_history_in_days_null = $var;
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

    public function getDefaultValueNull()
    {
        return $this->default_value_null;
    }

    public function setDefaultValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->default_value_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_ModifyPersonCharacsInCat_Ad\Response_Row::class);
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
    "0a88090a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f4d6f64696679506572736f6e43686172616373496e4361745f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e706d5f4d6f646966" .
    "79506572736f6e43686172616373496e4361745f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22ef040a0a506172616d65" .
    "74657273123e0a19706572736f6e5f6368617261635f63617465676f7279" .
    "5f696418012001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512270a1e706572736f6e5f6368617261635f63617465" .
    "676f72795f69645f6e756c6c18e90720012808123d0a18706572736f6e5f" .
    "63686172616374657269737469635f696418022001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512260a1d70657273" .
    "6f6e5f63686172616374657269737469635f69645f6e756c6c18ea072001" .
    "2808122d0a08726571756972656418032001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c756512160a0d72657175697265" .
    "645f6e756c6c18eb0720012808122b0a0664656c65746518042001280b32" .
    "1b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75651214" .
    "0a0b64656c6574655f6e756c6c18ec072001280812440a1f6b6565705f70" .
    "726f706572746965735f686973746f72795f696e5f646179731805200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "122d0a246b6565705f70726f706572746965735f686973746f72795f696e" .
    "5f646179735f6e756c6c18ed072001280812310a0d64656661756c745f76" .
    "616c756518062001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c7565121b0a1264656661756c745f76616c75655f6e756c6c" .
    "18ee0720012808122b0a07636f756e74727918072001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c756512150a0c636f756e" .
    "7472795f6e756c6c18ef072001280822e6010a08526573706f6e73651248" .
    "0a106d6574615f696e666f726d6174696f6e18022003280b322e2e647374" .
    "6f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d6574" .
    "61496e666f726d6174696f6e122f0a076d65737361676518032003280b32" .
    "1e2e6473746f72652e656e67696e652e6d6573736167652e4d6573736167" .
    "6512470a03726f7718042003280b323a2e6473746f72652e656e67696e65" .
    "2e706d5f4d6f64696679506572736f6e43686172616373496e4361745f41" .
    "642e526573706f6e73652e526f771a160a03526f77120f0a06726f775f69" .
    "6418904e20012805425f0a1b696f2e6473746f72652e656e67696e652e70" .
    "726f636564757265735a40676f73646b2e6473746f72652e64652f656e67" .
    "696e652f70726f636564757265732f706d5f4d6f64696679506572736f6e" .
    "43686172616373496e4361745f4164620670726f746f33"
));

