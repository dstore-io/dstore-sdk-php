<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetItemConditionGroups_Ad.proto

namespace Dstore\Engine\Im_GetItemConditionGroups_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $condition_group_id = null;
    private $condition_group_id_null = false;
    private $condition_group_description_like = null;
    private $condition_group_description_like_null = false;
    private $get_unused_condition_groups = null;
    private $get_unused_condition_groups_null = false;
    private $order_by = null;
    private $order_by_null = false;
    private $row_count = null;
    private $row_count_null = false;
    private $filter_by_cond_part_ids_in_one_id = null;
    private $filter_by_cond_part_ids_in_one_id_null = false;

    public function getConditionGroupId()
    {
        return $this->condition_group_id;
    }

    public function setConditionGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_group_id = $var;
    }

    public function getConditionGroupIdNull()
    {
        return $this->condition_group_id_null;
    }

    public function setConditionGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_group_id_null = $var;
    }

    public function getConditionGroupDescriptionLike()
    {
        return $this->condition_group_description_like;
    }

    public function setConditionGroupDescriptionLike(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition_group_description_like = $var;
    }

    public function getConditionGroupDescriptionLikeNull()
    {
        return $this->condition_group_description_like_null;
    }

    public function setConditionGroupDescriptionLikeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_group_description_like_null = $var;
    }

    public function getGetUnusedConditionGroups()
    {
        return $this->get_unused_condition_groups;
    }

    public function setGetUnusedConditionGroups(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_unused_condition_groups = $var;
    }

    public function getGetUnusedConditionGroupsNull()
    {
        return $this->get_unused_condition_groups_null;
    }

    public function setGetUnusedConditionGroupsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_unused_condition_groups_null = $var;
    }

    public function getOrderBy()
    {
        return $this->order_by;
    }

    public function setOrderBy(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->order_by = $var;
    }

    public function getOrderByNull()
    {
        return $this->order_by_null;
    }

    public function setOrderByNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_by_null = $var;
    }

    public function getRowCount()
    {
        return $this->row_count;
    }

    public function setRowCount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->row_count = $var;
    }

    public function getRowCountNull()
    {
        return $this->row_count_null;
    }

    public function setRowCountNull($var)
    {
        GPBUtil::checkBool($var);
        $this->row_count_null = $var;
    }

    public function getFilterByCondPartIdsInOneId()
    {
        return $this->filter_by_cond_part_ids_in_one_id;
    }

    public function setFilterByCondPartIdsInOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->filter_by_cond_part_ids_in_one_id = $var;
    }

    public function getFilterByCondPartIdsInOneIdNull()
    {
        return $this->filter_by_cond_part_ids_in_one_id_null;
    }

    public function setFilterByCondPartIdsInOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_cond_part_ids_in_one_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetItemConditionGroups_Ad\Response_Row::class);
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
    private $condition_group_description = null;
    private $combine_parts_with_a_n_d_operator = null;
    private $recursive_evaluation = null;
    private $condition_part_id = null;
    private $domain_tree_node_ids = null;
    private $node_characteristic_id = null;
    private $created_at_date_and_time = null;
    private $used_in_an_item_condition = null;
    private $used_in_campaign_item_cond_groups = null;
    private $level_ids = null;
    private $edited_at_date_and_time = null;
    private $part_sort_no = null;
    private $condition_part_description = null;
    private $inherit_depth = null;
    private $condition_group_id = null;

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

    public function getConditionGroupDescription()
    {
        return $this->condition_group_description;
    }

    public function setConditionGroupDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition_group_description = $var;
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

    public function getRecursiveEvaluation()
    {
        return $this->recursive_evaluation;
    }

    public function setRecursiveEvaluation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->recursive_evaluation = $var;
    }

    public function getConditionPartId()
    {
        return $this->condition_part_id;
    }

    public function setConditionPartId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_part_id = $var;
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

    public function getCreatedAtDateAndTime()
    {
        return $this->created_at_date_and_time;
    }

    public function setCreatedAtDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->created_at_date_and_time = $var;
    }

    public function getUsedInAnItemCondition()
    {
        return $this->used_in_an_item_condition;
    }

    public function setUsedInAnItemCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->used_in_an_item_condition = $var;
    }

    public function getUsedInCampaignItemCondGroups()
    {
        return $this->used_in_campaign_item_cond_groups;
    }

    public function setUsedInCampaignItemCondGroups(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->used_in_campaign_item_cond_groups = $var;
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

    public function getEditedAtDateAndTime()
    {
        return $this->edited_at_date_and_time;
    }

    public function setEditedAtDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->edited_at_date_and_time = $var;
    }

    public function getPartSortNo()
    {
        return $this->part_sort_no;
    }

    public function setPartSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->part_sort_no = $var;
    }

    public function getConditionPartDescription()
    {
        return $this->condition_part_description;
    }

    public function setConditionPartDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition_part_description = $var;
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

    public function getConditionGroupId()
    {
        return $this->condition_group_id;
    }

    public function setConditionGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_group_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ac2110a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4765744974656d436f6e646974696f6e47726f7570735f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e696d5f4765744974656d" .
    "436f6e646974696f6e47726f7570735f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f22d3040a0a506172616d6574657273" .
    "12370a12636f6e646974696f6e5f67726f75705f696418012001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c756512200a" .
    "17636f6e646974696f6e5f67726f75705f69645f6e756c6c18e907200128" .
    "0812440a20636f6e646974696f6e5f67726f75705f646573637269707469" .
    "6f6e5f6c696b6518022001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565122e0a25636f6e646974696f6e5f67726f7570" .
    "5f6465736372697074696f6e5f6c696b655f6e756c6c18ea072001280812" .
    "400a1b6765745f756e757365645f636f6e646974696f6e5f67726f757073" .
    "18032001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c756512290a206765745f756e757365645f636f6e646974696f6e5f" .
    "67726f7570735f6e756c6c18eb0720012808122d0a086f726465725f6279" .
    "18042001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512160a0d6f726465725f62795f6e756c6c18ec072001280812" .
    "2e0a09726f775f636f756e7418052001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512170a0e726f775f636f756e74" .
    "5f6e756c6c18ed072001280812460a2166696c7465725f62795f636f6e64" .
    "5f706172745f6964735f696e5f6f6e655f696418062001280b321b2e6473" .
    "746f72652e76616c7565732e626f6f6c65616e56616c7565122f0a266669" .
    "6c7465725f62795f636f6e645f706172745f6964735f696e5f6f6e655f69" .
    "645f6e756c6c18ee072001280822c20a0a08526573706f6e736512480a10" .
    "6d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f72" .
    "652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65746149" .
    "6e666f726d6174696f6e122f0a076d65737361676518032003280b321e2e" .
    "6473746f72652e656e67696e652e6d6573736167652e4d65737361676512" .
    "450a03726f7718042003280b32382e6473746f72652e656e67696e652e69" .
    "6d5f4765744974656d436f6e646974696f6e47726f7570735f41642e5265" .
    "73706f6e73652e526f771af3080a03526f77120f0a06726f775f69641890" .
    "4e20012805122e0a096f70657261746f723118914e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565122f0a0a636f6e" .
    "646974696f6e3118924e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c7565122f0a0a636f6e646974696f6e3218934e20" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "65122e0a096f70657261746f723218944e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512400a1b636f6e64697469" .
    "6f6e5f67726f75705f6465736372697074696f6e18954e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c756512470a2163" .
    "6f6d62696e655f70617274735f776974685f615f6e5f645f6f7065726174" .
    "6f7218964e2001280b321b2e6473746f72652e76616c7565732e626f6f6c" .
    "65616e56616c7565123a0a147265637572736976655f6576616c75617469" .
    "6f6e18974e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512370a11636f6e646974696f6e5f706172745f696418" .
    "984e2001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512390a14646f6d61696e5f747265655f6e6f64655f69647318" .
    "994e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c7565123c0a166e6f64655f63686172616374657269737469635f6964" .
    "189a4e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512400a18637265617465645f61745f646174655f616e645f" .
    "74696d65189b4e2001280b321d2e6473746f72652e76616c7565732e7469" .
    "6d657374616d7056616c7565123f0a19757365645f696e5f616e5f697465" .
    "6d5f636f6e646974696f6e189c4e2001280b321b2e6473746f72652e7661" .
    "6c7565732e626f6f6c65616e56616c756512470a21757365645f696e5f63" .
    "616d706169676e5f6974656d5f636f6e645f67726f757073189d4e200128" .
    "0b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565" .
    "122e0a096c6576656c5f696473189e4e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c7565123f0a176564697465645f61" .
    "745f646174655f616e645f74696d65189f4e2001280b321d2e6473746f72" .
    "652e76616c7565732e74696d657374616d7056616c756512320a0c706172" .
    "745f736f72745f6e6f18a04e2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565123f0a1a636f6e646974696f6e5f70" .
    "6172745f6465736372697074696f6e18a14e2001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512330a0d696e68657269" .
    "745f646570746818a24e2001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756512390a12636f6e646974696f6e5f67726f" .
    "75705f696418a29c012001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c7565425d0a1b696f2e6473746f72652e656e6769" .
    "6e652e70726f636564757265735a3e676f73646b2e6473746f72652e6465" .
    "2f656e67696e652f70726f636564757265732f696d5f4765744974656d43" .
    "6f6e646974696f6e47726f7570735f4164620670726f746f33"
));
