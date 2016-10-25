<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetBundleItemSets_Ad.proto

namespace Dstore\Engine\Om_GetBundleItemSets_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $item_set_id = null;
    private $item_set_id_null = false;
    private $item_condition_id = null;
    private $item_condition_id_null = false;
    private $get_unused_sets = null;
    private $get_unused_sets_null = false;

    public function getItemSetId()
    {
        return $this->item_set_id;
    }

    public function setItemSetId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_set_id = $var;
    }

    public function getItemSetIdNull()
    {
        return $this->item_set_id_null;
    }

    public function setItemSetIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->item_set_id_null = $var;
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

    public function getGetUnusedSets()
    {
        return $this->get_unused_sets;
    }

    public function setGetUnusedSets(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_unused_sets = $var;
    }

    public function getGetUnusedSetsNull()
    {
        return $this->get_unused_sets_null;
    }

    public function setGetUnusedSetsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_unused_sets_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetBundleItemSets_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $item_group_sort_no = null;
    private $operator1 = null;
    private $condition1 = null;
    private $condition2 = null;
    private $operator2 = null;
    private $item_condition_group_description = null;
    private $combine_parts_with_a_n_d_operator = null;
    private $recursive_evaluation = null;
    private $item_part_sort_no = null;
    private $item_set_id = null;
    private $domain_tree_node_ids = null;
    private $node_characteristic_id = null;
    private $quantity = null;
    private $item_condition_part_id = null;
    private $item_condition_id = null;
    private $combine_groups_with_a_n_d_operator = null;
    private $item_condition_part_description = null;
    private $level_ids = null;
    private $distinct_items_only = null;
    private $item_condition_group_id = null;
    private $item_condition_description = null;
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

    public function getRecursiveEvaluation()
    {
        return $this->recursive_evaluation;
    }

    public function setRecursiveEvaluation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->recursive_evaluation = $var;
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

    public function getItemSetId()
    {
        return $this->item_set_id;
    }

    public function setItemSetId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_set_id = $var;
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

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->quantity = $var;
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

    public function getItemConditionId()
    {
        return $this->item_condition_id;
    }

    public function setItemConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->item_condition_id = $var;
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

    public function getDistinctItemsOnly()
    {
        return $this->distinct_items_only;
    }

    public function setDistinctItemsOnly(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->distinct_items_only = $var;
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

    public function getItemConditionDescription()
    {
        return $this->item_condition_description;
    }

    public function setItemConditionDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->item_condition_description = $var;
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
    "0a89100a366473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657442756e646c654974656d536574735f41642e70726f746f12" .
    "256473746f72652e656e67696e652e6f6d5f47657442756e646c65497465" .
    "6d536574735f41641a136473746f72652f76616c7565732e70726f746f1a" .
    "1b6473746f72652f656e67696e652f6d6573736167652e70726f746f1a23" .
    "6473746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e" .
    "70726f746f2287020a0a506172616d657465727312300a0b6974656d5f73" .
    "65745f696418012001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512190a106974656d5f7365745f69645f6e756c6c" .
    "18e9072001280812360a116974656d5f636f6e646974696f6e5f69641802" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565121f0a166974656d5f636f6e646974696f6e5f69645f6e756c6c18" .
    "ea072001280812340a0f6765745f756e757365645f736574731803200128" .
    "0b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565" .
    "121d0a146765745f756e757365645f736574735f6e756c6c18eb07200128" .
    "0822e40b0a08526573706f6e736512480a106d6574615f696e666f726d61" .
    "74696f6e18022003280b322e2e6473746f72652e656e67696e652e6d6574" .
    "61696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f" .
    "0a076d65737361676518032003280b321e2e6473746f72652e656e67696e" .
    "652e6d6573736167652e4d65737361676512400a03726f7718042003280b" .
    "32332e6473746f72652e656e67696e652e6f6d5f47657442756e646c6549" .
    "74656d536574735f41642e526573706f6e73652e526f771a9a0a0a03526f" .
    "77120f0a06726f775f696418904e2001280512380a126974656d5f67726f" .
    "75705f736f72745f6e6f18914e2001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c7565122e0a096f70657261746f723118" .
    "924e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c7565122f0a0a636f6e646974696f6e3118934e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565122f0a0a636f6e" .
    "646974696f6e3218944e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c7565122e0a096f70657261746f723218954e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12450a206974656d5f636f6e646974696f6e5f67726f75705f6465736372" .
    "697074696f6e18964e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c756512470a21636f6d62696e655f70617274735f77" .
    "6974685f615f6e5f645f6f70657261746f7218974e2001280b321b2e6473" .
    "746f72652e76616c7565732e626f6f6c65616e56616c7565123a0a147265" .
    "637572736976655f6576616c756174696f6e18984e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512370a116974" .
    "656d5f706172745f736f72745f6e6f18994e2001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512310a0b6974656d5f" .
    "7365745f6964189a4e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c756512390a14646f6d61696e5f747265655f6e6f" .
    "64655f696473189b4e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565123c0a166e6f64655f63686172616374657269" .
    "737469635f6964189c4e2001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565122e0a087175616e74697479189d4e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65123c0a166974656d5f636f6e646974696f6e5f706172745f6964189e4e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512370a116974656d5f636f6e646974696f6e5f6964189f4e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12480a22636f6d62696e655f67726f7570735f776974685f615f6e5f645f" .
    "6f70657261746f7218a04e2001280b321b2e6473746f72652e76616c7565" .
    "732e626f6f6c65616e56616c756512440a1f6974656d5f636f6e64697469" .
    "6f6e5f706172745f6465736372697074696f6e18a14e2001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c7565122e0a096c65" .
    "76656c5f69647318a24e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c756512390a1364697374696e63745f6974656d73" .
    "5f6f6e6c7918a34e2001280b321b2e6473746f72652e76616c7565732e62" .
    "6f6f6c65616e56616c7565123d0a176974656d5f636f6e646974696f6e5f" .
    "67726f75705f696418a44e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c7565123f0a1a6974656d5f636f6e64697469" .
    "6f6e5f6465736372697074696f6e18a54e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512330a0d696e6865726974" .
    "5f646570746818a64e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c756542580a1b696f2e6473746f72652e656e6769" .
    "6e652e70726f636564757265735a39676f73646b2e6473746f72652e6465" .
    "2f656e67696e652f70726f636564757265732f6f6d5f47657442756e646c" .
    "654974656d536574735f4164620670726f746f33"
));
