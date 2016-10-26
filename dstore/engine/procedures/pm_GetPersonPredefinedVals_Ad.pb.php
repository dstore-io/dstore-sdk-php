<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonPredefinedVals_Ad.proto

namespace Dstore\Engine\Pm_GetPersonPredefinedVals_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_characteristic_id = null;
    private $person_characteristic_id_null = false;
    private $language_id = null;
    private $language_id_null = false;
    private $value = null;
    private $value_null = false;
    private $get_references_for_table_id = null;
    private $get_references_for_table_id_null = false;

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

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
    }

    public function getValueNull()
    {
        return $this->value_null;
    }

    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
    }

    public function getGetReferencesForTableId()
    {
        return $this->get_references_for_table_id;
    }

    public function setGetReferencesForTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->get_references_for_table_id = $var;
    }

    public function getGetReferencesForTableIdNull()
    {
        return $this->get_references_for_table_id_null;
    }

    public function setGetReferencesForTableIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_references_for_table_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetPersonPredefinedVals_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $table_id = null;
    private $value_restricted_by_pattern = null;
    private $translated_value = null;
    private $characteristic_sort_no = null;
    private $person_characteristic_id = null;
    private $value = null;
    private $is_currently_valid = null;
    private $value_sort_no = null;
    private $table_key_id = null;
    private $value_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTableId()
    {
        return $this->table_id;
    }

    public function setTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->table_id = $var;
    }

    public function getValueRestrictedByPattern()
    {
        return $this->value_restricted_by_pattern;
    }

    public function setValueRestrictedByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value_restricted_by_pattern = $var;
    }

    public function getTranslatedValue()
    {
        return $this->translated_value;
    }

    public function setTranslatedValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->translated_value = $var;
    }

    public function getCharacteristicSortNo()
    {
        return $this->characteristic_sort_no;
    }

    public function setCharacteristicSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->characteristic_sort_no = $var;
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

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
    }

    public function getIsCurrentlyValid()
    {
        return $this->is_currently_valid;
    }

    public function setIsCurrentlyValid(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_currently_valid = $var;
    }

    public function getValueSortNo()
    {
        return $this->value_sort_no;
    }

    public function setValueSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->value_sort_no = $var;
    }

    public function getTableKeyId()
    {
        return $this->table_key_id;
    }

    public function setTableKeyId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->table_key_id = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aa90b0a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f476574506572736f6e507265646566696e656456616c735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e706d5f476574506572" .
    "736f6e507265646566696e656456616c735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22ed020a0a506172616d657465" .
    "7273123d0a18706572736f6e5f63686172616374657269737469635f6964" .
    "18012001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512260a1d706572736f6e5f6368617261637465726973746963" .
    "5f69645f6e756c6c18e9072001280812300a0b6c616e67756167655f6964" .
    "18022001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512190a106c616e67756167655f69645f6e756c6c18ea072001" .
    "280812290a0576616c756518032001280b321a2e6473746f72652e76616c" .
    "7565732e737472696e6756616c756512130a0a76616c75655f6e756c6c18" .
    "eb072001280812400a1b6765745f7265666572656e6365735f666f725f74" .
    "61626c655f696418042001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c756512290a206765745f7265666572656e636573" .
    "5f666f725f7461626c655f69645f6e756c6c18ec0720012808228c060a08" .
    "526573706f6e736512480a106d6574615f696e666f726d6174696f6e1802" .
    "2003280b322e2e6473746f72652e656e67696e652e6d657461696e666f72" .
    "6d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d657373" .
    "61676518032003280b321e2e6473746f72652e656e67696e652e6d657373" .
    "6167652e4d65737361676512460a03726f7718042003280b32392e647374" .
    "6f72652e656e67696e652e706d5f476574506572736f6e50726564656669" .
    "6e656456616c735f41642e526573706f6e73652e526f771abc040a03526f" .
    "77120f0a06726f775f696418904e20012805122e0a087461626c655f6964" .
    "18914e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512400a1b76616c75655f726573747269637465645f62795f" .
    "7061747465726e18924e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c756512350a107472616e736c617465645f76616c" .
    "756518934e2001280b321a2e6473746f72652e76616c7565732e73747269" .
    "6e6756616c7565123c0a1663686172616374657269737469635f736f7274" .
    "5f6e6f18944e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565123e0a18706572736f6e5f63686172616374657269" .
    "737469635f696418954e2001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565122a0a0576616c756518964e2001280b32" .
    "1a2e6473746f72652e76616c7565732e737472696e6756616c756512380a" .
    "1269735f63757272656e746c795f76616c696418974e2001280b321b2e64" .
    "73746f72652e76616c7565732e626f6f6c65616e56616c756512330a0d76" .
    "616c75655f736f72745f6e6f18984e2001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512320a0c7461626c655f6b65" .
    "795f696418994e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565122e0a0876616c75655f6964189a4e2001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c7565425e" .
    "0a1b696f2e6473746f72652e656e67696e652e70726f636564757265735a" .
    "3f676f73646b2e6473746f72652e64652f656e67696e652f70726f636564" .
    "757265732f706d5f476574506572736f6e507265646566696e656456616c" .
    "735f4164620670726f746f33"
));

