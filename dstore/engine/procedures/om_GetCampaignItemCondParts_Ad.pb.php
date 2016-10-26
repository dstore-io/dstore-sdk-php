<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignItemCondParts_Ad.proto

namespace Dstore\Engine\Om_GetCampaignItemCondParts_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $condition_id = null;
    private $condition_id_null = false;
    private $item_condition_part_id = null;
    private $item_condition_part_id_null = false;

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

    public function getItemConditionPartId()
    {
        return $this->item_condition_part_id;
    }

    public function setItemConditionPartId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_condition_part_id = $var;
    }

    public function getItemConditionPartIdNull()
    {
        return $this->item_condition_part_id_null;
    }

    public function setItemConditionPartIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->item_condition_part_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetCampaignItemCondParts_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $operator1 = null;
    private $condition1 = null;
    private $condition2 = null;
    private $operator2 = null;
    private $recursive_evaluation = null;
    private $domain_tree_node_ids = null;
    private $node_characteristic_id = null;
    private $item_condition_part_id = null;
    private $extended_item_cond_part_descr = null;
    private $min_number_of_items = null;
    private $to_quantity = null;
    private $from_basic_price_sum = null;
    private $max_number_of_items = null;
    private $to_basic_price_sum = null;
    private $level_ids = null;
    private $condition_id = null;
    private $to_item_basic_price = null;
    private $from_quantity = null;
    private $inherit_depth = null;
    private $from_item_basic_price = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getOperator2()
    {
        return $this->operator2;
    }

    public function setOperator2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->operator2 = $var;
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

    public function getExtendedItemCondPartDescr()
    {
        return $this->extended_item_cond_part_descr;
    }

    public function setExtendedItemCondPartDescr(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->extended_item_cond_part_descr = $var;
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

    public function getToQuantity()
    {
        return $this->to_quantity;
    }

    public function setToQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_quantity = $var;
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

    public function getMaxNumberOfItems()
    {
        return $this->max_number_of_items;
    }

    public function setMaxNumberOfItems(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_items = $var;
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

    public function getLevelIds()
    {
        return $this->level_ids;
    }

    public function setLevelIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->level_ids = $var;
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

    public function getFromQuantity()
    {
        return $this->from_quantity;
    }

    public function setFromQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_quantity = $var;
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

    public function getFromItemBasicPrice()
    {
        return $this->from_item_basic_price;
    }

    public function setFromItemBasicPrice(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->from_item_basic_price = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab60e0a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657443616d706169676e4974656d436f6e6450617274735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4765744361" .
    "6d706169676e4974656d436f6e6450617274735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22be010a0a506172616d65" .
    "7465727312310a0c636f6e646974696f6e5f696418012001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565121a0a1163" .
    "6f6e646974696f6e5f69645f6e756c6c18e90720012808123b0a16697465" .
    "6d5f636f6e646974696f6e5f706172745f696418022001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512240a1b6974" .
    "656d5f636f6e646974696f6e5f706172745f69645f6e756c6c18ea072001" .
    "280822c50a0a08526573706f6e736512480a106d6574615f696e666f726d" .
    "6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d65" .
    "7461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e12" .
    "2f0a076d65737361676518032003280b321e2e6473746f72652e656e6769" .
    "6e652e6d6573736167652e4d65737361676512470a03726f771804200328" .
    "0b323a2e6473746f72652e656e67696e652e6f6d5f47657443616d706169" .
    "676e4974656d436f6e6450617274735f41642e526573706f6e73652e526f" .
    "771af4080a03526f77120f0a06726f775f696418904e20012805122e0a09" .
    "6f70657261746f723118914e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565122f0a0a636f6e646974696f6e311892" .
    "4e2001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c7565122f0a0a636f6e646974696f6e3218934e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565122e0a096f706572" .
    "61746f723218944e2001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c7565123a0a147265637572736976655f6576616c7561" .
    "74696f6e18954e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512390a14646f6d61696e5f747265655f6e6f6465" .
    "5f69647318964e2001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565123c0a166e6f64655f636861726163746572697374" .
    "69635f696418974e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565123c0a166974656d5f636f6e646974696f6e5f" .
    "706172745f696418984e2001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756512420a1d657874656e6465645f6974656d" .
    "5f636f6e645f706172745f646573637218994e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512390a136d696e5f6e" .
    "756d6265725f6f665f6974656d73189a4e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512310a0b746f5f717561" .
    "6e74697479189b4e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565123a0a1466726f6d5f62617369635f70726963" .
    "655f73756d189c4e2001280b321b2e6473746f72652e76616c7565732e64" .
    "6563696d616c56616c756512390a136d61785f6e756d6265725f6f665f69" .
    "74656d73189d4e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512380a12746f5f62617369635f70726963655f73" .
    "756d189e4e2001280b321b2e6473746f72652e76616c7565732e64656369" .
    "6d616c56616c7565122e0a096c6576656c5f696473189f4e2001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512320a0c" .
    "636f6e646974696f6e5f696418a04e2001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512390a13746f5f6974656d5f" .
    "62617369635f707269636518a14e2001280b321b2e6473746f72652e7661" .
    "6c7565732e646563696d616c56616c756512330a0d66726f6d5f7175616e" .
    "7469747918a24e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512330a0d696e68657269745f646570746818a34e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565123b0a1566726f6d5f6974656d5f62617369635f707269636518a4" .
    "4e2001280b321b2e6473746f72652e76616c7565732e646563696d616c56" .
    "616c7565425f0a1b696f2e6473746f72652e656e67696e652e70726f6365" .
    "64757265735a40676f73646b2e6473746f72652e64652f656e67696e652f" .
    "70726f636564757265732f6f6d5f47657443616d706169676e4974656d43" .
    "6f6e6450617274735f4164620670726f746f33"
));

