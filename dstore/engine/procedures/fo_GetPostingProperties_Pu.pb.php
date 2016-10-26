<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetPostingProperties_Pu.proto

namespace Dstore\Engine\Fo_GetPostingProperties_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_identification_values = null;
    private $person_identification_values_null = false;
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $unique_id = null;
    private $unique_id_null = false;
    private $posting_id = null;
    private $posting_id_null = false;
    private $person_id = null;
    private $person_id_null = false;
    private $characteristic_id_list = null;
    private $characteristic_id_list_null = false;
    private $date_format = null;
    private $date_format_null = false;
    private $get_additional_infos_for_charac = null;
    private $get_additional_infos_for_charac_null = false;
    private $separator_in_ident_vals = null;
    private $separator_in_ident_vals_null = false;

    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->person_identification_values = $var;
    }

    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_type_id = $var;
    }

    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

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

    public function getPostingId()
    {
        return $this->posting_id;
    }

    public function setPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_id = $var;
    }

    public function getPostingIdNull()
    {
        return $this->posting_id_null;
    }

    public function setPostingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_id_null = $var;
    }

    public function getPersonId()
    {
        return $this->person_id;
    }

    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_id = $var;
    }

    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    public function getCharacteristicIdList()
    {
        return $this->characteristic_id_list;
    }

    public function setCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_id_list = $var;
    }

    public function getCharacteristicIdListNull()
    {
        return $this->characteristic_id_list_null;
    }

    public function setCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list_null = $var;
    }

    public function getDateFormat()
    {
        return $this->date_format;
    }

    public function setDateFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->date_format = $var;
    }

    public function getDateFormatNull()
    {
        return $this->date_format_null;
    }

    public function setDateFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_format_null = $var;
    }

    public function getGetAdditionalInfosForCharac()
    {
        return $this->get_additional_infos_for_charac;
    }

    public function setGetAdditionalInfosForCharac(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_additional_infos_for_charac = $var;
    }

    public function getGetAdditionalInfosForCharacNull()
    {
        return $this->get_additional_infos_for_charac_null;
    }

    public function setGetAdditionalInfosForCharacNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_additional_infos_for_charac_null = $var;
    }

    public function getSeparatorInIdentVals()
    {
        return $this->separator_in_ident_vals;
    }

    public function setSeparatorInIdentVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->separator_in_ident_vals = $var;
    }

    public function getSeparatorInIdentValsNull()
    {
        return $this->separator_in_ident_vals_null;
    }

    public function setSeparatorInIdentValsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_ident_vals_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_GetPostingProperties_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $posting_id = null;
    private $value = null;
    private $characteristic_id = null;
    private $value_id = null;
    private $check_posting_visibility = null;
    private $characteristic_description = null;
    private $field_type_id = null;
    private $common_characteristic = null;
    private $property_modification_allowed = null;
    private $max_number_of_properties = null;
    private $predefined_values = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getPostingId()
    {
        return $this->posting_id;
    }

    public function setPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_id = $var;
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

    public function getCharacteristicId()
    {
        return $this->characteristic_id;
    }

    public function setCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->characteristic_id = $var;
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

    public function getCheckPostingVisibility()
    {
        return $this->check_posting_visibility;
    }

    public function setCheckPostingVisibility(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->check_posting_visibility = $var;
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

    public function getFieldTypeId()
    {
        return $this->field_type_id;
    }

    public function setFieldTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->field_type_id = $var;
    }

    public function getCommonCharacteristic()
    {
        return $this->common_characteristic;
    }

    public function setCommonCharacteristic(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->common_characteristic = $var;
    }

    public function getPropertyModificationAllowed()
    {
        return $this->property_modification_allowed;
    }

    public function setPropertyModificationAllowed(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->property_modification_allowed = $var;
    }

    public function getMaxNumberOfProperties()
    {
        return $this->max_number_of_properties;
    }

    public function setMaxNumberOfProperties(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_properties = $var;
    }

    public function getPredefinedValues()
    {
        return $this->predefined_values;
    }

    public function setPredefinedValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->predefined_values = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab90f0a396473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f476574506f7374696e6750726f706572746965735f50752e70726f" .
    "746f12286473746f72652e656e67696e652e666f5f476574506f7374696e" .
    "6750726f706572746965735f50751a136473746f72652f76616c7565732e" .
    "70726f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70" .
    "726f746f1a236473746f72652f656e67696e652f6d657461696e666f726d" .
    "6174696f6e2e70726f746f22b0060a0a506172616d657465727312400a1c" .
    "706572736f6e5f6964656e74696669636174696f6e5f76616c7565731801" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "7565122a0a21706572736f6e5f6964656e74696669636174696f6e5f7661" .
    "6c7565735f6e756c6c18e9072001280812330a0e706572736f6e5f747970" .
    "655f696418022001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565121c0a13706572736f6e5f747970655f69645f6e75" .
    "6c6c18ea0720012808122d0a09756e697175655f696418032001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512170a0e" .
    "756e697175655f69645f6e756c6c18eb0720012808122f0a0a706f737469" .
    "6e675f696418042001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512180a0f706f7374696e675f69645f6e756c6c18" .
    "ec0720012808122e0a09706572736f6e5f696418052001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512170a0e7065" .
    "72736f6e5f69645f6e756c6c18ed0720012808123a0a1663686172616374" .
    "657269737469635f69645f6c69737418062001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512240a1b63686172616374" .
    "657269737469635f69645f6c6973745f6e756c6c18ee0720012808122f0a" .
    "0b646174655f666f726d617418072001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512190a10646174655f666f726d61" .
    "745f6e756c6c18ef072001280812440a1f6765745f6164646974696f6e61" .
    "6c5f696e666f735f666f725f63686172616318082001280b321b2e647374" .
    "6f72652e76616c7565732e626f6f6c65616e56616c7565122d0a24676574" .
    "5f6164646974696f6e616c5f696e666f735f666f725f6368617261635f6e" .
    "756c6c18f00720012808123b0a17736570617261746f725f696e5f696465" .
    "6e745f76616c7318092001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c756512250a1c736570617261746f725f696e5f6964" .
    "656e745f76616c735f6e756c6c18f1072001280822e2060a08526573706f" .
    "6e736512480a106d6574615f696e666f726d6174696f6e18022003280b32" .
    "2e2e6473746f72652e656e67696e652e6d657461696e666f726d6174696f" .
    "6e2e4d657461496e666f726d6174696f6e122f0a076d6573736167651803" .
    "2003280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d" .
    "65737361676512430a03726f7718042003280b32362e6473746f72652e65" .
    "6e67696e652e666f5f476574506f7374696e6750726f706572746965735f" .
    "50752e526573706f6e73652e526f771a95050a03526f77120f0a06726f77" .
    "5f696418904e2001280512300a0a706f7374696e675f696418914e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "122a0a0576616c756518924e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756512370a11636861726163746572697374" .
    "69635f696418934e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565122e0a0876616c75655f696418944e2001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "3f0a18636865636b5f706f7374696e675f7669736962696c69747918a29c" .
    "012001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56" .
    "616c756512400a1a63686172616374657269737469635f64657363726970" .
    "74696f6e18a39c012001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756512340a0d6669656c645f747970655f696418a49c" .
    "012001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565123c0a15636f6d6d6f6e5f636861726163746572697374696318" .
    "a79c012001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512440a1d70726f70657274795f6d6f64696669636174696f" .
    "6e5f616c6c6f77656418a99c012001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c7565123f0a186d61785f6e756d626572" .
    "5f6f665f70726f7065727469657318aa9c012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512380a117072656465" .
    "66696e65645f76616c75657318ab9c012001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c7565425b0a1b696f2e6473746f" .
    "72652e656e67696e652e70726f636564757265735a3c676f73646b2e6473" .
    "746f72652e64652f656e67696e652f70726f636564757265732f666f5f47" .
    "6574506f7374696e6750726f706572746965735f5075620670726f746f33"
));

