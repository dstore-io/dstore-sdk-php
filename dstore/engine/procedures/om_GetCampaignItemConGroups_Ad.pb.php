<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignItemConGroups_Ad.proto

namespace Dstore\Engine\Om_GetCampaignItemConGroups_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $condition_id = null;
    private $condition_id_null = false;
    private $item_condition_group_id = null;
    private $item_condition_group_id_null = false;

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

    public function getItemConditionGroupId()
    {
        return $this->item_condition_group_id;
    }

    public function setItemConditionGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_condition_group_id = $var;
    }

    public function getItemConditionGroupIdNull()
    {
        return $this->item_condition_group_id_null;
    }

    public function setItemConditionGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->item_condition_group_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetCampaignItemConGroups_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $condition1 = null;
    private $condition2 = null;
    private $recursive_evaluation = null;
    private $to_basic_price_sum_part = null;
    private $domain_tree_node_ids = null;
    private $node_characteristic_id = null;
    private $item_condition_part_id = null;
    private $from_basic_price_sum_part = null;
    private $to_quantity = null;
    private $max_number_of_items = null;
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
    private $combine_parts_with_a_n_d_operator = null;
    private $min_number_of_items_part = null;
    private $item_part_sort_no = null;
    private $extended_item_cond_part_descr = null;
    private $max_number_of_items_part = null;
    private $from_item_basic_price_part = null;
    private $min_number_of_items = null;
    private $from_basic_price_sum = null;
    private $to_basic_price_sum = null;
    private $condition_id = null;
    private $to_item_basic_price = null;
    private $to_quantity_part = null;
    private $from_quantity_part = null;
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

    public function getToBasicPriceSumPart()
    {
        return $this->to_basic_price_sum_part;
    }

    public function setToBasicPriceSumPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->to_basic_price_sum_part = $var;
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

    public function getMaxNumberOfItems()
    {
        return $this->max_number_of_items;
    }

    public function setMaxNumberOfItems(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_items = $var;
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

    public function getConditionId()
    {
        return $this->condition_id;
    }

    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_id = $var;
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
    "0ab2150a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657443616d706169676e4974656d436f6e47726f7570735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4765744361" .
    "6d706169676e4974656d436f6e47726f7570735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22c0010a0a506172616d65" .
    "7465727312310a0c636f6e646974696f6e5f696418012001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565121a0a1163" .
    "6f6e646974696f6e5f69645f6e756c6c18e90720012808123c0a17697465" .
    "6d5f636f6e646974696f6e5f67726f75705f696418022001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512250a1c69" .
    "74656d5f636f6e646974696f6e5f67726f75705f69645f6e756c6c18ea07" .
    "2001280822bf110a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d65737361676512470a03726f77180420" .
    "03280b323a2e6473746f72652e656e67696e652e6f6d5f47657443616d70" .
    "6169676e4974656d436f6e47726f7570735f41642e526573706f6e73652e" .
    "526f771aee0f0a03526f77120f0a06726f775f696418904e20012805122f" .
    "0a0a636f6e646974696f6e3118914e2001280b321a2e6473746f72652e76" .
    "616c7565732e737472696e6756616c7565122f0a0a636f6e646974696f6e" .
    "3218924e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565123a0a147265637572736976655f6576616c756174696f6e" .
    "18934e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565123d0a17746f5f62617369635f70726963655f73756d5f70" .
    "61727418944e2001280b321b2e6473746f72652e76616c7565732e646563" .
    "696d616c56616c756512390a14646f6d61696e5f747265655f6e6f64655f" .
    "69647318954e2001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c7565123c0a166e6f64655f63686172616374657269737469" .
    "635f696418964e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565123c0a166974656d5f636f6e646974696f6e5f70" .
    "6172745f696418974e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c7565123f0a1966726f6d5f62617369635f707269" .
    "63655f73756d5f7061727418984e2001280b321b2e6473746f72652e7661" .
    "6c7565732e646563696d616c56616c756512310a0b746f5f7175616e7469" .
    "747918994e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512390a136d61785f6e756d6265725f6f665f6974656d" .
    "73189a4e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565123e0a18746f5f6974656d5f62617369635f7072696365" .
    "5f70617274189b4e2001280b321b2e6473746f72652e76616c7565732e64" .
    "6563696d616c56616c756512440a1f6974656d5f636f6e646974696f6e5f" .
    "706172745f6465736372697074696f6e189c4e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c7565122e0a096c6576656c" .
    "5f696473189d4e2001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565123d0a176974656d5f636f6e646974696f6e5f6772" .
    "6f75705f6964189e4e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c756512430a1e657874656e6465645f6974656d5f" .
    "636f6e645f67726f75705f6465736372189f4e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512330a0d66726f6d5f" .
    "7175616e7469747918a04e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c7565123b0a1566726f6d5f6974656d5f6261" .
    "7369635f707269636518a14e2001280b321b2e6473746f72652e76616c75" .
    "65732e646563696d616c56616c756512380a126974656d5f67726f75705f" .
    "736f72745f6e6f18a24e2001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565122e0a096f70657261746f723118a34e20" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "65122e0a096f70657261746f723218a44e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512470a21636f6d62696e65" .
    "5f70617274735f776974685f615f6e5f645f6f70657261746f7218a54e20" .
    "01280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c" .
    "7565123e0a186d696e5f6e756d6265725f6f665f6974656d735f70617274" .
    "18a64e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512370a116974656d5f706172745f736f72745f6e6f18a74e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512420a1d657874656e6465645f6974656d5f636f6e645f70617274" .
    "5f646573637218a84e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565123e0a186d61785f6e756d6265725f6f665f69" .
    "74656d735f7061727418a94e2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512400a1a66726f6d5f6974656d5f62" .
    "617369635f70726963655f7061727418aa4e2001280b321b2e6473746f72" .
    "652e76616c7565732e646563696d616c56616c756512390a136d696e5f6e" .
    "756d6265725f6f665f6974656d7318ab4e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c7565123a0a1466726f6d5f62" .
    "617369635f70726963655f73756d18ac4e2001280b321b2e6473746f7265" .
    "2e76616c7565732e646563696d616c56616c756512380a12746f5f626173" .
    "69635f70726963655f73756d18ad4e2001280b321b2e6473746f72652e76" .
    "616c7565732e646563696d616c56616c756512320a0c636f6e646974696f" .
    "6e5f696418ae4e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512390a13746f5f6974656d5f62617369635f7072" .
    "69636518af4e2001280b321b2e6473746f72652e76616c7565732e646563" .
    "696d616c56616c756512360a10746f5f7175616e746974795f7061727418" .
    "b04e2001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512380a1266726f6d5f7175616e746974795f7061727418b14e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512330a0d696e68657269745f646570746818b24e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c7565425f0a1b" .
    "696f2e6473746f72652e656e67696e652e70726f636564757265735a4067" .
    "6f73646b2e6473746f72652e64652f656e67696e652f70726f6365647572" .
    "65732f6f6d5f47657443616d706169676e4974656d436f6e47726f757073" .
    "5f4164620670726f746f33"
));
