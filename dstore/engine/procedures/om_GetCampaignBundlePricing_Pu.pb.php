<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignBundlePricing_Pu.proto

namespace Dstore\Engine\Om_GetCampaignBundlePricing_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $benefit_id = null;
    private $benefit_id_null = false;
    private $only_definition = null;
    private $only_definition_null = false;
    private $filter_by_item_set_id = null;
    private $filter_by_item_set_id_null = false;
    private $sort_by_characteristic_id_list = null;
    private $sort_by_characteristic_id_list_null = false;
    private $sort_option_list = null;
    private $sort_option_list_null = false;
    private $inherit_depth_option_list = null;
    private $inherit_depth_option_list_null = false;
    private $recursive_evaluation_option_list = null;
    private $recursive_evaluation_option_list_null = false;
    private $get_values_for_sort_by_characs = null;
    private $get_values_for_sort_by_characs_null = false;

    public function getBenefitId()
    {
        return $this->benefit_id;
    }

    public function setBenefitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->benefit_id = $var;
    }

    public function getBenefitIdNull()
    {
        return $this->benefit_id_null;
    }

    public function setBenefitIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->benefit_id_null = $var;
    }

    public function getOnlyDefinition()
    {
        return $this->only_definition;
    }

    public function setOnlyDefinition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->only_definition = $var;
    }

    public function getOnlyDefinitionNull()
    {
        return $this->only_definition_null;
    }

    public function setOnlyDefinitionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_definition_null = $var;
    }

    public function getFilterByItemSetId()
    {
        return $this->filter_by_item_set_id;
    }

    public function setFilterByItemSetId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->filter_by_item_set_id = $var;
    }

    public function getFilterByItemSetIdNull()
    {
        return $this->filter_by_item_set_id_null;
    }

    public function setFilterByItemSetIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_item_set_id_null = $var;
    }

    public function getSortByCharacteristicIdList()
    {
        return $this->sort_by_characteristic_id_list;
    }

    public function setSortByCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->sort_by_characteristic_id_list = $var;
    }

    public function getSortByCharacteristicIdListNull()
    {
        return $this->sort_by_characteristic_id_list_null;
    }

    public function setSortByCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_by_characteristic_id_list_null = $var;
    }

    public function getSortOptionList()
    {
        return $this->sort_option_list;
    }

    public function setSortOptionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->sort_option_list = $var;
    }

    public function getSortOptionListNull()
    {
        return $this->sort_option_list_null;
    }

    public function setSortOptionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_option_list_null = $var;
    }

    public function getInheritDepthOptionList()
    {
        return $this->inherit_depth_option_list;
    }

    public function setInheritDepthOptionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->inherit_depth_option_list = $var;
    }

    public function getInheritDepthOptionListNull()
    {
        return $this->inherit_depth_option_list_null;
    }

    public function setInheritDepthOptionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->inherit_depth_option_list_null = $var;
    }

    public function getRecursiveEvaluationOptionList()
    {
        return $this->recursive_evaluation_option_list;
    }

    public function setRecursiveEvaluationOptionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->recursive_evaluation_option_list = $var;
    }

    public function getRecursiveEvaluationOptionListNull()
    {
        return $this->recursive_evaluation_option_list_null;
    }

    public function setRecursiveEvaluationOptionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->recursive_evaluation_option_list_null = $var;
    }

    public function getGetValuesForSortByCharacs()
    {
        return $this->get_values_for_sort_by_characs;
    }

    public function setGetValuesForSortByCharacs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_values_for_sort_by_characs = $var;
    }

    public function getGetValuesForSortByCharacsNull()
    {
        return $this->get_values_for_sort_by_characs_null;
    }

    public function setGetValuesForSortByCharacsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_values_for_sort_by_characs_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetCampaignBundlePricing_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $net_based_pricing = null;
    private $item_condition_id = null;
    private $bundle_pricing_type_id = null;
    private $bundle_pricing_type = null;
    private $item_set_id = null;
    private $quantity = null;
    private $distinct_items_only = null;
    private $item_condition_description = null;
    private $sort_no = null;
    private $bundle_price_or_discount = null;
    private $condition1 = null;
    private $condition2 = null;
    private $recursive_evaluation = null;
    private $domain_tree_node_ids = null;
    private $node_characteristic_id = null;
    private $item_condition_part_id = null;
    private $combine_groups_with_a_n_d_operator = null;
    private $item_condition_part_description = null;
    private $level_ids = null;
    private $item_condition_group_id = null;
    private $item_group_sort_no = null;
    private $operator1 = null;
    private $operator2 = null;
    private $item_condition_group_description = null;
    private $combine_parts_with_a_n_d_operator = null;
    private $item_part_sort_no = null;
    private $inherit_depth = null;
    private $node_description = null;
    private $value2 = null;
    private $value3 = null;
    private $value1 = null;
    private $tree_node_id = null;
    private $node_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getNetBasedPricing()
    {
        return $this->net_based_pricing;
    }

    public function setNetBasedPricing(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->net_based_pricing = $var;
    }

    public function getItemConditionId()
    {
        return $this->item_condition_id;
    }

    public function setItemConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_condition_id = $var;
    }

    public function getBundlePricingTypeId()
    {
        return $this->bundle_pricing_type_id;
    }

    public function setBundlePricingTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->bundle_pricing_type_id = $var;
    }

    public function getBundlePricingType()
    {
        return $this->bundle_pricing_type;
    }

    public function setBundlePricingType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->bundle_pricing_type = $var;
    }

    public function getItemSetId()
    {
        return $this->item_set_id;
    }

    public function setItemSetId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_set_id = $var;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->quantity = $var;
    }

    public function getDistinctItemsOnly()
    {
        return $this->distinct_items_only;
    }

    public function setDistinctItemsOnly(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->distinct_items_only = $var;
    }

    public function getItemConditionDescription()
    {
        return $this->item_condition_description;
    }

    public function setItemConditionDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->item_condition_description = $var;
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

    public function getBundlePriceOrDiscount()
    {
        return $this->bundle_price_or_discount;
    }

    public function setBundlePriceOrDiscount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->bundle_price_or_discount = $var;
    }

    public function getCondition1()
    {
        return $this->condition1;
    }

    public function setCondition1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition1 = $var;
    }

    public function getCondition2()
    {
        return $this->condition2;
    }

    public function setCondition2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition2 = $var;
    }

    public function getRecursiveEvaluation()
    {
        return $this->recursive_evaluation;
    }

    public function setRecursiveEvaluation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->recursive_evaluation = $var;
    }

    public function getDomainTreeNodeIds()
    {
        return $this->domain_tree_node_ids;
    }

    public function setDomainTreeNodeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->domain_tree_node_ids = $var;
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

    public function getItemConditionPartId()
    {
        return $this->item_condition_part_id;
    }

    public function setItemConditionPartId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_condition_part_id = $var;
    }

    public function getCombineGroupsWithANDOperator()
    {
        return $this->combine_groups_with_a_n_d_operator;
    }

    public function setCombineGroupsWithANDOperator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->combine_groups_with_a_n_d_operator = $var;
    }

    public function getItemConditionPartDescription()
    {
        return $this->item_condition_part_description;
    }

    public function setItemConditionPartDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->item_condition_part_description = $var;
    }

    public function getLevelIds()
    {
        return $this->level_ids;
    }

    public function setLevelIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->level_ids = $var;
    }

    public function getItemConditionGroupId()
    {
        return $this->item_condition_group_id;
    }

    public function setItemConditionGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_condition_group_id = $var;
    }

    public function getItemGroupSortNo()
    {
        return $this->item_group_sort_no;
    }

    public function setItemGroupSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_group_sort_no = $var;
    }

    public function getOperator1()
    {
        return $this->operator1;
    }

    public function setOperator1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->operator1 = $var;
    }

    public function getOperator2()
    {
        return $this->operator2;
    }

    public function setOperator2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->operator2 = $var;
    }

    public function getItemConditionGroupDescription()
    {
        return $this->item_condition_group_description;
    }

    public function setItemConditionGroupDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->item_condition_group_description = $var;
    }

    public function getCombinePartsWithANDOperator()
    {
        return $this->combine_parts_with_a_n_d_operator;
    }

    public function setCombinePartsWithANDOperator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->combine_parts_with_a_n_d_operator = $var;
    }

    public function getItemPartSortNo()
    {
        return $this->item_part_sort_no;
    }

    public function setItemPartSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_part_sort_no = $var;
    }

    public function getInheritDepth()
    {
        return $this->inherit_depth;
    }

    public function setInheritDepth(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->inherit_depth = $var;
    }

    public function getNodeDescription()
    {
        return $this->node_description;
    }

    public function setNodeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->node_description = $var;
    }

    public function getValue2()
    {
        return $this->value2;
    }

    public function setValue2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value2 = $var;
    }

    public function getValue3()
    {
        return $this->value3;
    }

    public function setValue3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value3 = $var;
    }

    public function getValue1()
    {
        return $this->value1;
    }

    public function setValue1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value1 = $var;
    }

    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tree_node_id = $var;
    }

    public function getNodeId()
    {
        return $this->node_id;
    }

    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a9c190a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657443616d706169676e42756e646c6550726963696e675f5075" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4765744361" .
    "6d706169676e42756e646c6550726963696e675f50751a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22a6060a0a506172616d65" .
    "74657273122f0a0a62656e656669745f696418012001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512180a0f62656e" .
    "656669745f69645f6e756c6c18e9072001280812340a0f6f6e6c795f6465" .
    "66696e6974696f6e18022001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565121d0a146f6e6c795f646566696e697469" .
    "6f6e5f6e756c6c18ea0720012808123a0a1566696c7465725f62795f6974" .
    "656d5f7365745f696418032001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756512230a1a66696c7465725f62795f6974" .
    "656d5f7365745f69645f6e756c6c18eb072001280812420a1e736f72745f" .
    "62795f63686172616374657269737469635f69645f6c6973741804200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "2c0a23736f72745f62795f63686172616374657269737469635f69645f6c" .
    "6973745f6e756c6c18ec072001280812340a10736f72745f6f7074696f6e" .
    "5f6c69737418052001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565121e0a15736f72745f6f7074696f6e5f6c6973745f" .
    "6e756c6c18ed0720012808123d0a19696e68657269745f64657074685f6f" .
    "7074696f6e5f6c69737418062001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756512270a1e696e68657269745f64657074" .
    "685f6f7074696f6e5f6c6973745f6e756c6c18ee072001280812440a2072" .
    "65637572736976655f6576616c756174696f6e5f6f7074696f6e5f6c6973" .
    "7418072001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c7565122e0a257265637572736976655f6576616c756174696f6e5f" .
    "6f7074696f6e5f6c6973745f6e756c6c18ef072001280812430a1e676574" .
    "5f76616c7565735f666f725f736f72745f62795f63686172616373180820" .
    "01280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c" .
    "7565122c0a236765745f76616c7565735f666f725f736f72745f62795f63" .
    "6861726163735f6e756c6c18f0072001280822c3100a08526573706f6e73" .
    "6512480a106d6574615f696e666f726d6174696f6e18022003280b322e2e" .
    "6473746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e" .
    "4d657461496e666f726d6174696f6e122f0a076d65737361676518032003" .
    "280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d6573" .
    "7361676512470a03726f7718042003280b323a2e6473746f72652e656e67" .
    "696e652e6f6d5f47657443616d706169676e42756e646c6550726963696e" .
    "675f50752e526573706f6e73652e526f771af20e0a03526f77120f0a0672" .
    "6f775f696418904e2001280512370a116e65745f62617365645f70726963" .
    "696e6718914e2001280b321b2e6473746f72652e76616c7565732e626f6f" .
    "6c65616e56616c756512370a116974656d5f636f6e646974696f6e5f6964" .
    "18924e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565123c0a1662756e646c655f70726963696e675f747970655f" .
    "696418934e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512380a1362756e646c655f70726963696e675f747970" .
    "6518944e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c756512310a0b6974656d5f7365745f696418954e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565122e0a" .
    "087175616e7469747918964e2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512390a1364697374696e63745f6974" .
    "656d735f6f6e6c7918974e2001280b321b2e6473746f72652e76616c7565" .
    "732e626f6f6c65616e56616c7565123f0a1a6974656d5f636f6e64697469" .
    "6f6e5f6465736372697074696f6e18984e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565122d0a07736f72745f6e6f" .
    "18994e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565123e0a1862756e646c655f70726963655f6f725f64697363" .
    "6f756e74189a4e2001280b321b2e6473746f72652e76616c7565732e6465" .
    "63696d616c56616c756512300a0a636f6e646974696f6e3118a19c012001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12300a0a636f6e646974696f6e3218a29c012001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c7565123b0a14726563757273" .
    "6976655f6576616c756174696f6e18a39c012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565123a0a14646f6d6169" .
    "6e5f747265655f6e6f64655f69647318a49c012001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c7565123d0a166e6f64655f" .
    "63686172616374657269737469635f696418a59c012001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565123d0a166974" .
    "656d5f636f6e646974696f6e5f706172745f696418a69c012001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c756512490a" .
    "22636f6d62696e655f67726f7570735f776974685f615f6e5f645f6f7065" .
    "7261746f7218a89c012001280b321b2e6473746f72652e76616c7565732e" .
    "626f6f6c65616e56616c756512450a1f6974656d5f636f6e646974696f6e" .
    "5f706172745f6465736372697074696f6e18a99c012001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565122f0a096c6576" .
    "656c5f69647318ab9c012001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c7565123e0a176974656d5f636f6e646974696f6e" .
    "5f67726f75705f696418ac9c012001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512390a126974656d5f67726f7570" .
    "5f736f72745f6e6f18ad9c012001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565122f0a096f70657261746f723118ae" .
    "9c012001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c7565122f0a096f70657261746f723218b09c012001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c756512460a20697465" .
    "6d5f636f6e646974696f6e5f67726f75705f6465736372697074696f6e18" .
    "b19c012001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c756512480a21636f6d62696e655f70617274735f776974685f615f" .
    "6e5f645f6f70657261746f7218b29c012001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c756512380a116974656d5f7061" .
    "72745f736f72745f6e6f18b39c012001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512340a0d696e68657269745f64" .
    "6570746818bb9c012001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512360a106e6f64655f6465736372697074696f" .
    "6e18b1ea012001280b321a2e6473746f72652e76616c7565732e73747269" .
    "6e6756616c7565122c0a0676616c75653218b2ea012001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565122c0a0676616c" .
    "75653318b3ea012001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565122c0a0676616c75653118b4ea012001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c756512330a0c74" .
    "7265655f6e6f64655f696418b6ea012001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c7565122e0a076e6f64655f696418" .
    "b7ea012001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565425f0a1b696f2e6473746f72652e656e67696e652e70726f" .
    "636564757265735a40676f73646b2e6473746f72652e64652f656e67696e" .
    "652f70726f636564757265732f6f6d5f47657443616d706169676e42756e" .
    "646c6550726963696e675f5075620670726f746f33"
));

