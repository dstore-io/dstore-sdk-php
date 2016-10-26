<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetNodeCharacteristics_Ad.proto

namespace Dstore\Engine\Im_GetNodeCharacteristics_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $include_currency_information = null;
    private $include_currency_information_null = false;
    private $include_currency_informations = null;
    private $include_currency_informations_null = false;
    private $only_ids_in_table_one_id = null;
    private $only_ids_in_table_one_id_null = false;
    private $node_charac_category_id = null;
    private $node_charac_category_id_null = false;
    private $sort_order = null;
    private $sort_order_null = false;
    private $get_category_information = null;
    private $get_category_information_null = false;

    public function getIncludeCurrencyInformation()
    {
        return $this->include_currency_information;
    }

    public function setIncludeCurrencyInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_currency_information = $var;
    }

    public function getIncludeCurrencyInformationNull()
    {
        return $this->include_currency_information_null;
    }

    public function setIncludeCurrencyInformationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_currency_information_null = $var;
    }

    public function getIncludeCurrencyInformations()
    {
        return $this->include_currency_informations;
    }

    public function setIncludeCurrencyInformations(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_currency_informations = $var;
    }

    public function getIncludeCurrencyInformationsNull()
    {
        return $this->include_currency_informations_null;
    }

    public function setIncludeCurrencyInformationsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_currency_informations_null = $var;
    }

    public function getOnlyIdsInTableOneId()
    {
        return $this->only_ids_in_table_one_id;
    }

    public function setOnlyIdsInTableOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->only_ids_in_table_one_id = $var;
    }

    public function getOnlyIdsInTableOneIdNull()
    {
        return $this->only_ids_in_table_one_id_null;
    }

    public function setOnlyIdsInTableOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_ids_in_table_one_id_null = $var;
    }

    public function getNodeCharacCategoryId()
    {
        return $this->node_charac_category_id;
    }

    public function setNodeCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_charac_category_id = $var;
    }

    public function getNodeCharacCategoryIdNull()
    {
        return $this->node_charac_category_id_null;
    }

    public function setNodeCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_charac_category_id_null = $var;
    }

    public function getSortOrder()
    {
        return $this->sort_order;
    }

    public function setSortOrder(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->sort_order = $var;
    }

    public function getSortOrderNull()
    {
        return $this->sort_order_null;
    }

    public function setSortOrderNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_order_null = $var;
    }

    public function getGetCategoryInformation()
    {
        return $this->get_category_information;
    }

    public function setGetCategoryInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_category_information = $var;
    }

    public function getGetCategoryInformationNull()
    {
        return $this->get_category_information_null;
    }

    public function setGetCategoryInformationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_category_information_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetNodeCharacteristics_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $deleteable = null;
    private $predecessor_category_id = null;
    private $characteristic_description = null;
    private $value_language = null;
    private $field_type_id = null;
    private $in_netto = null;
    private $node_characteristic_id = null;
    private $sort_no = null;
    private $keep_properties_history_in_hours = null;
    private $predefined_values = null;
    private $node_charac_category_id = null;
    private $has_currency_unit_vals_are_net_vals = null;
    private $category_sort_no = null;
    private $unit_id = null;
    private $is_unique = null;
    private $value_language_id = null;
    private $category_description = null;
    private $recursive = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getDeleteable()
    {
        return $this->deleteable;
    }

    public function setDeleteable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->deleteable = $var;
    }

    public function getPredecessorCategoryId()
    {
        return $this->predecessor_category_id;
    }

    public function setPredecessorCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->predecessor_category_id = $var;
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

    public function getValueLanguage()
    {
        return $this->value_language;
    }

    public function setValueLanguage(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value_language = $var;
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

    public function getInNetto()
    {
        return $this->in_netto;
    }

    public function setInNetto(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->in_netto = $var;
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

    public function getSortNo()
    {
        return $this->sort_no;
    }

    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->sort_no = $var;
    }

    public function getKeepPropertiesHistoryInHours()
    {
        return $this->keep_properties_history_in_hours;
    }

    public function setKeepPropertiesHistoryInHours(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->keep_properties_history_in_hours = $var;
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

    public function getNodeCharacCategoryId()
    {
        return $this->node_charac_category_id;
    }

    public function setNodeCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_charac_category_id = $var;
    }

    public function getHasCurrencyUnitValsAreNetVals()
    {
        return $this->has_currency_unit_vals_are_net_vals;
    }

    public function setHasCurrencyUnitValsAreNetVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->has_currency_unit_vals_are_net_vals = $var;
    }

    public function getCategorySortNo()
    {
        return $this->category_sort_no;
    }

    public function setCategorySortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->category_sort_no = $var;
    }

    public function getUnitId()
    {
        return $this->unit_id;
    }

    public function setUnitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->unit_id = $var;
    }

    public function getIsUnique()
    {
        return $this->is_unique;
    }

    public function setIsUnique(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_unique = $var;
    }

    public function getValueLanguageId()
    {
        return $this->value_language_id;
    }

    public function setValueLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->value_language_id = $var;
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

    public function getRecursive()
    {
        return $this->recursive;
    }

    public function setRecursive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->recursive = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0afd100a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4765744e6f64654368617261637465726973746963735f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e696d5f4765744e6f6465" .
    "4368617261637465726973746963735f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f22ea040a0a506172616d6574657273" .
    "12410a1c696e636c7564655f63757272656e63795f696e666f726d617469" .
    "6f6e18012001280b321b2e6473746f72652e76616c7565732e626f6f6c65" .
    "616e56616c7565122a0a21696e636c7564655f63757272656e63795f696e" .
    "666f726d6174696f6e5f6e756c6c18e9072001280812420a1d696e636c75" .
    "64655f63757272656e63795f696e666f726d6174696f6e7318022001280b" .
    "321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512" .
    "2b0a22696e636c7564655f63757272656e63795f696e666f726d6174696f" .
    "6e735f6e756c6c18ea0720012808123d0a186f6e6c795f6964735f696e5f" .
    "7461626c655f6f6e655f696418032001280b321b2e6473746f72652e7661" .
    "6c7565732e626f6f6c65616e56616c756512260a1d6f6e6c795f6964735f" .
    "696e5f7461626c655f6f6e655f69645f6e756c6c18eb0720012808123c0a" .
    "176e6f64655f6368617261635f63617465676f72795f696418042001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "250a1c6e6f64655f6368617261635f63617465676f72795f69645f6e756c" .
    "6c18ec0720012808122f0a0a736f72745f6f7264657218052001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c756512180a" .
    "0f736f72745f6f726465725f6e756c6c18ed0720012808123d0a18676574" .
    "5f63617465676f72795f696e666f726d6174696f6e18062001280b321b2e" .
    "6473746f72652e76616c7565732e626f6f6c65616e56616c756512260a1d" .
    "6765745f63617465676f72795f696e666f726d6174696f6e5f6e756c6c18" .
    "ee072001280822e6090a08526573706f6e736512480a106d6574615f696e" .
    "666f726d6174696f6e18022003280b322e2e6473746f72652e656e67696e" .
    "652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174" .
    "696f6e122f0a076d65737361676518032003280b321e2e6473746f72652e" .
    "656e67696e652e6d6573736167652e4d65737361676512450a03726f7718" .
    "042003280b32382e6473746f72652e656e67696e652e696d5f4765744e6f" .
    "64654368617261637465726973746963735f41642e526573706f6e73652e" .
    "526f771a97080a03526f77120f0a06726f775f696418904e200128051230" .
    "0a0a64656c65746561626c6518914e2001280b321b2e6473746f72652e76" .
    "616c7565732e626f6f6c65616e56616c7565123d0a177072656465636573" .
    "736f725f63617465676f72795f696418924e2001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565123f0a1a6368617261" .
    "6374657269737469635f6465736372697074696f6e18934e2001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512330a0e" .
    "76616c75655f6c616e677561676518944e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512330a0d6669656c645f74" .
    "7970655f696418954e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c7565122e0a08696e5f6e6574746f18964e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "123c0a166e6f64655f63686172616374657269737469635f696418974e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565122d0a07736f72745f6e6f18984e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512460a206b6565705f7072" .
    "6f706572746965735f686973746f72795f696e5f686f75727318994e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512370a11707265646566696e65645f76616c756573189a4e2001280b32" .
    "1b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565123d" .
    "0a176e6f64655f6368617261635f63617465676f72795f6964189b4e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512490a236861735f63757272656e63795f756e69745f76616c735f6172" .
    "655f6e65745f76616c73189c4e2001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512360a1063617465676f72795f73" .
    "6f72745f6e6f189d4e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c7565122d0a07756e69745f6964189e4e2001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "2f0a0969735f756e69717565189f4e2001280b321b2e6473746f72652e76" .
    "616c7565732e626f6f6c65616e56616c756512370a1176616c75655f6c61" .
    "6e67756167655f696418a04e2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512390a1463617465676f72795f6465" .
    "736372697074696f6e18a14e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565122f0a0972656375727369766518a24e" .
    "2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e5661" .
    "6c7565425d0a1b696f2e6473746f72652e656e67696e652e70726f636564" .
    "757265735a3e676f73646b2e6473746f72652e64652f656e67696e652f70" .
    "726f636564757265732f696d5f4765744e6f646543686172616374657269" .
    "73746963735f4164620670726f746f33"
));

