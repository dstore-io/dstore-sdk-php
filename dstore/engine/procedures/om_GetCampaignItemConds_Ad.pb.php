<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignItemConds_Ad.proto

namespace Dstore\Engine\Om_GetCampaignItemConds_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $condition_id = null;
    private $condition_id_null = false;
    private $item_condition_id = null;
    private $item_condition_id_null = false;
    private $get_unused_conditions = null;
    private $get_unused_conditions_null = false;

    public function getConditionId()
    {
        return $this->condition_id;
    }

    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_id = $var;
    }

    public function getConditionIdNull()
    {
        return $this->condition_id_null;
    }

    public function setConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_id_null = $var;
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

    public function getItemConditionIdNull()
    {
        return $this->item_condition_id_null;
    }

    public function setItemConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->item_condition_id_null = $var;
    }

    public function getGetUnusedConditions()
    {
        return $this->get_unused_conditions;
    }

    public function setGetUnusedConditions(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_unused_conditions = $var;
    }

    public function getGetUnusedConditionsNull()
    {
        return $this->get_unused_conditions_null;
    }

    public function setGetUnusedConditionsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_unused_conditions_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetCampaignItemConds_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $condition_description = null;
    private $condition1 = null;
    private $condition2 = null;
    private $to_basic_price_sum_group = null;
    private $recursive_evaluation = null;
    private $to_basic_price_sum_part = null;
    private $max_number_of_items_group = null;
    private $domain_tree_node_ids = null;
    private $node_characteristic_id = null;
    private $item_condition_part_id = null;
    private $from_basic_price_sum_part = null;
    private $to_quantity = null;
    private $from_quantity_group = null;
    private $item_condition_id = null;
    private $max_number_of_items = null;
    private $combine_groups_with_a_n_d_operator = null;
    private $from_basic_price_sum_group = null;
    private $to_item_basic_price_part = null;
    private $item_condition_part_description = null;
    private $level_ids = null;
    private $item_condition_group_id = null;
    private $extended_item_cond_group_descr = null;
    private $from_quantity = null;
    private $from_item_basic_price = null;
    private $item_group_sort_no = null;
    private $operator1 = null;
    private $operator2 = null;
    private $item_condition_group_description = null;
    private $combine_parts_with_a_n_d_operator = null;
    private $min_number_of_items_part = null;
    private $item_part_sort_no = null;
    private $to_item_basic_price_group = null;
    private $extended_item_cond_part_descr = null;
    private $max_number_of_items_part = null;
    private $from_item_basic_price_part = null;
    private $min_number_of_items = null;
    private $from_basic_price_sum = null;
    private $to_basic_price_sum = null;
    private $to_quantity_group = null;
    private $from_item_basic_price_group = null;
    private $condition_id = null;
    private $item_condition_description = null;
    private $to_item_basic_price = null;
    private $to_quantity_part = null;
    private $from_quantity_part = null;
    private $min_number_of_items_group = null;
    private $inherit_depth = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getConditionDescription()
    {
        return $this->condition_description;
    }

    public function setConditionDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition_description = $var;
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

    public function getToBasicPriceSumGroup()
    {
        return $this->to_basic_price_sum_group;
    }

    public function setToBasicPriceSumGroup(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->to_basic_price_sum_group = $var;
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

    public function getToBasicPriceSumPart()
    {
        return $this->to_basic_price_sum_part;
    }

    public function setToBasicPriceSumPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->to_basic_price_sum_part = $var;
    }

    public function getMaxNumberOfItemsGroup()
    {
        return $this->max_number_of_items_group;
    }

    public function setMaxNumberOfItemsGroup(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_items_group = $var;
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

    public function getFromBasicPriceSumPart()
    {
        return $this->from_basic_price_sum_part;
    }

    public function setFromBasicPriceSumPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->from_basic_price_sum_part = $var;
    }

    public function getToQuantity()
    {
        return $this->to_quantity;
    }

    public function setToQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_quantity = $var;
    }

    public function getFromQuantityGroup()
    {
        return $this->from_quantity_group;
    }

    public function setFromQuantityGroup(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_quantity_group = $var;
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

    public function getMaxNumberOfItems()
    {
        return $this->max_number_of_items;
    }

    public function setMaxNumberOfItems(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_items = $var;
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

    public function getFromBasicPriceSumGroup()
    {
        return $this->from_basic_price_sum_group;
    }

    public function setFromBasicPriceSumGroup(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->from_basic_price_sum_group = $var;
    }

    public function getToItemBasicPricePart()
    {
        return $this->to_item_basic_price_part;
    }

    public function setToItemBasicPricePart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->to_item_basic_price_part = $var;
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

    public function getExtendedItemCondGroupDescr()
    {
        return $this->extended_item_cond_group_descr;
    }

    public function setExtendedItemCondGroupDescr(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->extended_item_cond_group_descr = $var;
    }

    public function getFromQuantity()
    {
        return $this->from_quantity;
    }

    public function setFromQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_quantity = $var;
    }

    public function getFromItemBasicPrice()
    {
        return $this->from_item_basic_price;
    }

    public function setFromItemBasicPrice(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->from_item_basic_price = $var;
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

    public function getMinNumberOfItemsPart()
    {
        return $this->min_number_of_items_part;
    }

    public function setMinNumberOfItemsPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->min_number_of_items_part = $var;
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

    public function getToItemBasicPriceGroup()
    {
        return $this->to_item_basic_price_group;
    }

    public function setToItemBasicPriceGroup(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->to_item_basic_price_group = $var;
    }

    public function getExtendedItemCondPartDescr()
    {
        return $this->extended_item_cond_part_descr;
    }

    public function setExtendedItemCondPartDescr(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->extended_item_cond_part_descr = $var;
    }

    public function getMaxNumberOfItemsPart()
    {
        return $this->max_number_of_items_part;
    }

    public function setMaxNumberOfItemsPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_items_part = $var;
    }

    public function getFromItemBasicPricePart()
    {
        return $this->from_item_basic_price_part;
    }

    public function setFromItemBasicPricePart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->from_item_basic_price_part = $var;
    }

    public function getMinNumberOfItems()
    {
        return $this->min_number_of_items;
    }

    public function setMinNumberOfItems(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->min_number_of_items = $var;
    }

    public function getFromBasicPriceSum()
    {
        return $this->from_basic_price_sum;
    }

    public function setFromBasicPriceSum(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->from_basic_price_sum = $var;
    }

    public function getToBasicPriceSum()
    {
        return $this->to_basic_price_sum;
    }

    public function setToBasicPriceSum(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->to_basic_price_sum = $var;
    }

    public function getToQuantityGroup()
    {
        return $this->to_quantity_group;
    }

    public function setToQuantityGroup(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_quantity_group = $var;
    }

    public function getFromItemBasicPriceGroup()
    {
        return $this->from_item_basic_price_group;
    }

    public function setFromItemBasicPriceGroup(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->from_item_basic_price_group = $var;
    }

    public function getConditionId()
    {
        return $this->condition_id;
    }

    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_id = $var;
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

    public function getToItemBasicPrice()
    {
        return $this->to_item_basic_price;
    }

    public function setToItemBasicPrice(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->to_item_basic_price = $var;
    }

    public function getToQuantityPart()
    {
        return $this->to_quantity_part;
    }

    public function setToQuantityPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_quantity_part = $var;
    }

    public function getFromQuantityPart()
    {
        return $this->from_quantity_part;
    }

    public function setFromQuantityPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_quantity_part = $var;
    }

    public function getMinNumberOfItemsGroup()
    {
        return $this->min_number_of_items_group;
    }

    public function setMinNumberOfItemsGroup(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->min_number_of_items_group = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aba1c0a396473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657443616d706169676e4974656d436f6e64735f41642e70726f" .
    "746f12286473746f72652e656e67696e652e6f6d5f47657443616d706169" .
    "676e4974656d436f6e64735f41641a136473746f72652f76616c7565732e" .
    "70726f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70" .
    "726f746f1a236473746f72652f656e67696e652f6d657461696e666f726d" .
    "6174696f6e2e70726f746f2295020a0a506172616d657465727312310a0c" .
    "636f6e646974696f6e5f696418012001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c7565121a0a11636f6e646974696f6e" .
    "5f69645f6e756c6c18e9072001280812360a116974656d5f636f6e646974" .
    "696f6e5f696418022001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565121f0a166974656d5f636f6e646974696f6e5f" .
    "69645f6e756c6c18ea0720012808123a0a156765745f756e757365645f63" .
    "6f6e646974696f6e7318032001280b321b2e6473746f72652e76616c7565" .
    "732e626f6f6c65616e56616c756512230a1a6765745f756e757365645f63" .
    "6f6e646974696f6e735f6e756c6c18eb072001280822fe170a0852657370" .
    "6f6e736512480a106d6574615f696e666f726d6174696f6e18022003280b" .
    "322e2e6473746f72652e656e67696e652e6d657461696e666f726d617469" .
    "6f6e2e4d657461496e666f726d6174696f6e122f0a076d65737361676518" .
    "032003280b321e2e6473746f72652e656e67696e652e6d6573736167652e" .
    "4d65737361676512430a03726f7718042003280b32362e6473746f72652e" .
    "656e67696e652e6f6d5f47657443616d706169676e4974656d436f6e6473" .
    "5f41642e526573706f6e73652e526f771ab1160a03526f77120f0a06726f" .
    "775f696418904e20012805123a0a15636f6e646974696f6e5f6465736372" .
    "697074696f6e18914e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565122f0a0a636f6e646974696f6e3118924e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "122f0a0a636f6e646974696f6e3218934e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565123e0a18746f5f62617369" .
    "635f70726963655f73756d5f67726f757018944e2001280b321b2e647374" .
    "6f72652e76616c7565732e646563696d616c56616c7565123a0a14726563" .
    "7572736976655f6576616c756174696f6e18954e2001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c7565123d0a17746f5f" .
    "62617369635f70726963655f73756d5f7061727418964e2001280b321b2e" .
    "6473746f72652e76616c7565732e646563696d616c56616c7565123f0a19" .
    "6d61785f6e756d6265725f6f665f6974656d735f67726f757018974e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512390a14646f6d61696e5f747265655f6e6f64655f69647318984e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "123c0a166e6f64655f63686172616374657269737469635f696418994e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565123c0a166974656d5f636f6e646974696f6e5f706172745f6964189a" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565123f0a1966726f6d5f62617369635f70726963655f73756d5f70" .
    "617274189b4e2001280b321b2e6473746f72652e76616c7565732e646563" .
    "696d616c56616c756512310a0b746f5f7175616e74697479189c4e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12390a1366726f6d5f7175616e746974795f67726f7570189d4e2001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "370a116974656d5f636f6e646974696f6e5f6964189e4e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512390a13" .
    "6d61785f6e756d6265725f6f665f6974656d73189f4e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512480a2263" .
    "6f6d62696e655f67726f7570735f776974685f615f6e5f645f6f70657261" .
    "746f7218a04e2001280b321b2e6473746f72652e76616c7565732e626f6f" .
    "6c65616e56616c756512400a1a66726f6d5f62617369635f70726963655f" .
    "73756d5f67726f757018a14e2001280b321b2e6473746f72652e76616c75" .
    "65732e646563696d616c56616c7565123e0a18746f5f6974656d5f626173" .
    "69635f70726963655f7061727418a24e2001280b321b2e6473746f72652e" .
    "76616c7565732e646563696d616c56616c756512440a1f6974656d5f636f" .
    "6e646974696f6e5f706172745f6465736372697074696f6e18a34e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "2e0a096c6576656c5f69647318a44e2001280b321a2e6473746f72652e76" .
    "616c7565732e737472696e6756616c7565123d0a176974656d5f636f6e64" .
    "6974696f6e5f67726f75705f696418a54e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512430a1e657874656e64" .
    "65645f6974656d5f636f6e645f67726f75705f646573637218a64e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "330a0d66726f6d5f7175616e7469747918a74e2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c7565123b0a1566726f6d" .
    "5f6974656d5f62617369635f707269636518a84e2001280b321b2e647374" .
    "6f72652e76616c7565732e646563696d616c56616c756512380a12697465" .
    "6d5f67726f75705f736f72745f6e6f18a94e2001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565122e0a096f70657261" .
    "746f723118aa4e2001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565122e0a096f70657261746f723218ab4e2001280b32" .
    "1a2e6473746f72652e76616c7565732e737472696e6756616c756512450a" .
    "206974656d5f636f6e646974696f6e5f67726f75705f6465736372697074" .
    "696f6e18ac4e2001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c756512470a21636f6d62696e655f70617274735f77697468" .
    "5f615f6e5f645f6f70657261746f7218ad4e2001280b321b2e6473746f72" .
    "652e76616c7565732e626f6f6c65616e56616c7565123e0a186d696e5f6e" .
    "756d6265725f6f665f6974656d735f7061727418ae4e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512370a1169" .
    "74656d5f706172745f736f72745f6e6f18af4e2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c7565123f0a19746f5f69" .
    "74656d5f62617369635f70726963655f67726f757018b04e2001280b321b" .
    "2e6473746f72652e76616c7565732e646563696d616c56616c756512420a" .
    "1d657874656e6465645f6974656d5f636f6e645f706172745f6465736372" .
    "18b14e2001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c7565123e0a186d61785f6e756d6265725f6f665f6974656d735f70" .
    "61727418b24e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c756512400a1a66726f6d5f6974656d5f62617369635f70" .
    "726963655f7061727418b34e2001280b321b2e6473746f72652e76616c75" .
    "65732e646563696d616c56616c756512390a136d696e5f6e756d6265725f" .
    "6f665f6974656d7318b44e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c7565123a0a1466726f6d5f62617369635f70" .
    "726963655f73756d18b54e2001280b321b2e6473746f72652e76616c7565" .
    "732e646563696d616c56616c756512380a12746f5f62617369635f707269" .
    "63655f73756d18b64e2001280b321b2e6473746f72652e76616c7565732e" .
    "646563696d616c56616c756512370a11746f5f7175616e746974795f6772" .
    "6f757018b74e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c756512410a1b66726f6d5f6974656d5f62617369635f70" .
    "726963655f67726f757018b84e2001280b321b2e6473746f72652e76616c" .
    "7565732e646563696d616c56616c756512320a0c636f6e646974696f6e5f" .
    "696418b94e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565123f0a1a6974656d5f636f6e646974696f6e5f646573" .
    "6372697074696f6e18ba4e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c756512390a13746f5f6974656d5f6261736963" .
    "5f707269636518bb4e2001280b321b2e6473746f72652e76616c7565732e" .
    "646563696d616c56616c756512360a10746f5f7175616e746974795f7061" .
    "727418bc4e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512380a1266726f6d5f7175616e746974795f70617274" .
    "18bd4e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565123f0a196d696e5f6e756d6265725f6f665f6974656d735f" .
    "67726f757018be4e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512330a0d696e68657269745f646570746818bf" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565425b0a1b696f2e6473746f72652e656e67696e652e70726f6365" .
    "64757265735a3c676f73646b2e6473746f72652e64652f656e67696e652f" .
    "70726f636564757265732f6f6d5f47657443616d706169676e4974656d43" .
    "6f6e64735f4164620670726f746f33"
));

