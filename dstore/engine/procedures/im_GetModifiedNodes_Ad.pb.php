<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetModifiedNodes_Ad.proto

namespace Dstore\Engine\Im_GetModifiedNodes_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $from_date_and_time = null;
    private $from_date_and_time_null = false;
    private $to_date_and_time = null;
    private $to_date_and_time_null = false;
    private $domain_tree_node_id = null;
    private $domain_tree_node_id_null = false;
    private $get_tree_node_ids = null;
    private $get_tree_node_ids_null = false;
    private $filter_ids_in_one_id = null;
    private $filter_ids_in_one_id_null = false;
    private $output_into_one_id = null;
    private $output_into_one_id_null = false;
    private $include_deactivated_nodes = null;
    private $include_deactivated_nodes_null = false;
    private $level_id = null;
    private $level_id_null = false;
    private $node_modif_def_meta_info_type_ids = null;
    private $node_modif_def_meta_info_type_ids_null = false;
    private $t_node_modif_def_meta_info_type_ids = null;
    private $t_node_modif_def_meta_info_type_ids_null = false;
    private $start_at_row_no = null;
    private $start_at_row_no_null = false;
    private $row_count = null;
    private $row_count_null = false;
    private $number_of_elements_in_result = null;
    private $number_of_elements_in_result_null = false;

    public function getFromDateAndTime()
    {
        return $this->from_date_and_time;
    }

    public function setFromDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->from_date_and_time = $var;
    }

    public function getFromDateAndTimeNull()
    {
        return $this->from_date_and_time_null;
    }

    public function setFromDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_date_and_time_null = $var;
    }

    public function getToDateAndTime()
    {
        return $this->to_date_and_time;
    }

    public function setToDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->to_date_and_time = $var;
    }

    public function getToDateAndTimeNull()
    {
        return $this->to_date_and_time_null;
    }

    public function setToDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_date_and_time_null = $var;
    }

    public function getDomainTreeNodeId()
    {
        return $this->domain_tree_node_id;
    }

    public function setDomainTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->domain_tree_node_id = $var;
    }

    public function getDomainTreeNodeIdNull()
    {
        return $this->domain_tree_node_id_null;
    }

    public function setDomainTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->domain_tree_node_id_null = $var;
    }

    public function getGetTreeNodeIds()
    {
        return $this->get_tree_node_ids;
    }

    public function setGetTreeNodeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_tree_node_ids = $var;
    }

    public function getGetTreeNodeIdsNull()
    {
        return $this->get_tree_node_ids_null;
    }

    public function setGetTreeNodeIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_tree_node_ids_null = $var;
    }

    public function getFilterIdsInOneId()
    {
        return $this->filter_ids_in_one_id;
    }

    public function setFilterIdsInOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->filter_ids_in_one_id = $var;
    }

    public function getFilterIdsInOneIdNull()
    {
        return $this->filter_ids_in_one_id_null;
    }

    public function setFilterIdsInOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_ids_in_one_id_null = $var;
    }

    public function getOutputIntoOneId()
    {
        return $this->output_into_one_id;
    }

    public function setOutputIntoOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->output_into_one_id = $var;
    }

    public function getOutputIntoOneIdNull()
    {
        return $this->output_into_one_id_null;
    }

    public function setOutputIntoOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->output_into_one_id_null = $var;
    }

    public function getIncludeDeactivatedNodes()
    {
        return $this->include_deactivated_nodes;
    }

    public function setIncludeDeactivatedNodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_deactivated_nodes = $var;
    }

    public function getIncludeDeactivatedNodesNull()
    {
        return $this->include_deactivated_nodes_null;
    }

    public function setIncludeDeactivatedNodesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_deactivated_nodes_null = $var;
    }

    public function getLevelId()
    {
        return $this->level_id;
    }

    public function setLevelId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_id = $var;
    }

    public function getLevelIdNull()
    {
        return $this->level_id_null;
    }

    public function setLevelIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->level_id_null = $var;
    }

    public function getNodeModifDefMetaInfoTypeIds()
    {
        return $this->node_modif_def_meta_info_type_ids;
    }

    public function setNodeModifDefMetaInfoTypeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->node_modif_def_meta_info_type_ids = $var;
    }

    public function getNodeModifDefMetaInfoTypeIdsNull()
    {
        return $this->node_modif_def_meta_info_type_ids_null;
    }

    public function setNodeModifDefMetaInfoTypeIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_modif_def_meta_info_type_ids_null = $var;
    }

    public function getTNodeModifDefMetaInfoTypeIds()
    {
        return $this->t_node_modif_def_meta_info_type_ids;
    }

    public function setTNodeModifDefMetaInfoTypeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->t_node_modif_def_meta_info_type_ids = $var;
    }

    public function getTNodeModifDefMetaInfoTypeIdsNull()
    {
        return $this->t_node_modif_def_meta_info_type_ids_null;
    }

    public function setTNodeModifDefMetaInfoTypeIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->t_node_modif_def_meta_info_type_ids_null = $var;
    }

    public function getStartAtRowNo()
    {
        return $this->start_at_row_no;
    }

    public function setStartAtRowNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->start_at_row_no = $var;
    }

    public function getStartAtRowNoNull()
    {
        return $this->start_at_row_no_null;
    }

    public function setStartAtRowNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->start_at_row_no_null = $var;
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

    public function getNumberOfElementsInResult()
    {
        return $this->number_of_elements_in_result;
    }

    public function setNumberOfElementsInResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->number_of_elements_in_result = $var;
    }

    public function getNumberOfElementsInResultNull()
    {
        return $this->number_of_elements_in_result_null;
    }

    public function setNumberOfElementsInResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->number_of_elements_in_result_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $number_of_elements_in_result = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetModifiedNodes_Ad\Response_Row::class);
        $this->row = $var;
    }

    public function getNumberOfElementsInResult()
    {
        return $this->number_of_elements_in_result;
    }

    public function setNumberOfElementsInResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->number_of_elements_in_result = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $node_description = null;
    private $node_id = null;
    private $matched_info_type_ids_t_node = null;
    private $matched_info_type_ids_node = null;
    private $level_id = null;
    private $active = null;
    private $tree_node_id = null;
    private $pre_predecessors_description = null;
    private $pre_predecessors_tree_node_id = null;
    private $predecessors_tree_node_id = null;
    private $predecessors_description = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getNodeId()
    {
        return $this->node_id;
    }

    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_id = $var;
    }

    public function getMatchedInfoTypeIdsTNode()
    {
        return $this->matched_info_type_ids_t_node;
    }

    public function setMatchedInfoTypeIdsTNode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->matched_info_type_ids_t_node = $var;
    }

    public function getMatchedInfoTypeIdsNode()
    {
        return $this->matched_info_type_ids_node;
    }

    public function setMatchedInfoTypeIdsNode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->matched_info_type_ids_node = $var;
    }

    public function getLevelId()
    {
        return $this->level_id;
    }

    public function setLevelId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_id = $var;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->active = $var;
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

    public function getPrePredecessorsDescription()
    {
        return $this->pre_predecessors_description;
    }

    public function setPrePredecessorsDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->pre_predecessors_description = $var;
    }

    public function getPrePredecessorsTreeNodeId()
    {
        return $this->pre_predecessors_tree_node_id;
    }

    public function setPrePredecessorsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->pre_predecessors_tree_node_id = $var;
    }

    public function getPredecessorsTreeNodeId()
    {
        return $this->predecessors_tree_node_id;
    }

    public function setPredecessorsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->predecessors_tree_node_id = $var;
    }

    public function getPredecessorsDescription()
    {
        return $this->predecessors_description;
    }

    public function setPredecessorsDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->predecessors_description = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aaa130a356473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4765744d6f6469666965644e6f6465735f41642e70726f746f1224" .
    "6473746f72652e656e67696e652e696d5f4765744d6f6469666965644e6f" .
    "6465735f41641a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f22e3090a0a506172616d657465727312390a1266726f6d5f646174" .
    "655f616e645f74696d6518012001280b321d2e6473746f72652e76616c75" .
    "65732e74696d657374616d7056616c756512200a1766726f6d5f64617465" .
    "5f616e645f74696d655f6e756c6c18e9072001280812370a10746f5f6461" .
    "74655f616e645f74696d6518022001280b321d2e6473746f72652e76616c" .
    "7565732e74696d657374616d7056616c7565121e0a15746f5f646174655f" .
    "616e645f74696d655f6e756c6c18ea072001280812380a13646f6d61696e" .
    "5f747265655f6e6f64655f696418032001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512210a18646f6d61696e5f74" .
    "7265655f6e6f64655f69645f6e756c6c18eb072001280812360a11676574" .
    "5f747265655f6e6f64655f69647318042001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c7565121f0a166765745f747265" .
    "655f6e6f64655f6964735f6e756c6c18ec072001280812390a1466696c74" .
    "65725f6964735f696e5f6f6e655f696418052001280b321b2e6473746f72" .
    "652e76616c7565732e626f6f6c65616e56616c756512220a1966696c7465" .
    "725f6964735f696e5f6f6e655f69645f6e756c6c18ed072001280812370a" .
    "126f75747075745f696e746f5f6f6e655f696418062001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512200a176f75" .
    "747075745f696e746f5f6f6e655f69645f6e756c6c18ee0720012808123e" .
    "0a19696e636c7564655f64656163746976617465645f6e6f646573180720" .
    "01280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c" .
    "756512270a1e696e636c7564655f64656163746976617465645f6e6f6465" .
    "735f6e756c6c18ef0720012808122d0a086c6576656c5f69641808200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12160a0d6c6576656c5f69645f6e756c6c18f0072001280812450a216e6f" .
    "64655f6d6f6469665f6465665f6d6574615f696e666f5f747970655f6964" .
    "7318092001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c7565122f0a266e6f64655f6d6f6469665f6465665f6d6574615f69" .
    "6e666f5f747970655f6964735f6e756c6c18f1072001280812470a23745f" .
    "6e6f64655f6d6f6469665f6465665f6d6574615f696e666f5f747970655f" .
    "696473180a2001280b321a2e6473746f72652e76616c7565732e73747269" .
    "6e6756616c756512310a28745f6e6f64655f6d6f6469665f6465665f6d65" .
    "74615f696e666f5f747970655f6964735f6e756c6c18f207200128081234" .
    "0a0f73746172745f61745f726f775f6e6f180b2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c7565121d0a1473746172" .
    "745f61745f726f775f6e6f5f6e756c6c18f30720012808122e0a09726f77" .
    "5f636f756e74180c2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512170a0e726f775f636f756e745f6e756c6c18" .
    "f4072001280812410a1c6e756d6265725f6f665f656c656d656e74735f69" .
    "6e5f726573756c74180d2001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565122a0a216e756d6265725f6f665f656c65" .
    "6d656e74735f696e5f726573756c745f6e756c6c18f5072001280822ac07" .
    "0a08526573706f6e736512480a106d6574615f696e666f726d6174696f6e" .
    "18022003280b322e2e6473746f72652e656e67696e652e6d657461696e66" .
    "6f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d65" .
    "737361676518032003280b321e2e6473746f72652e656e67696e652e6d65" .
    "73736167652e4d657373616765123f0a03726f7718042003280b32322e64" .
    "73746f72652e656e67696e652e696d5f4765744d6f6469666965644e6f64" .
    "65735f41642e526573706f6e73652e526f7712410a1c6e756d6265725f6f" .
    "665f656c656d656e74735f696e5f726573756c7418652001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c75651aa0050a03" .
    "526f77120f0a06726f775f696418904e2001280512350a106e6f64655f64" .
    "65736372697074696f6e18914e2001280b321a2e6473746f72652e76616c" .
    "7565732e737472696e6756616c7565122d0a076e6f64655f696418924e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "756512410a1c6d6174636865645f696e666f5f747970655f6964735f745f" .
    "6e6f646518934e2001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565123f0a1a6d6174636865645f696e666f5f74797065" .
    "5f6964735f6e6f646518944e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565122e0a086c6576656c5f696418954e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565122d0a0661637469766518a19c012001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c756512330a0c747265655f6e6f" .
    "64655f696418a39c012001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c756512420a1c7072655f7072656465636573736f" .
    "72735f6465736372697074696f6e18a59c012001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512440a1d7072655f7072" .
    "656465636573736f72735f747265655f6e6f64655f696418a79c01200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12400a197072656465636573736f72735f747265655f6e6f64655f696418" .
    "a99c012001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565123e0a187072656465636573736f72735f64657363726970" .
    "74696f6e18aa9c012001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756542570a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a38676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f696d5f4765744d6f6469666965" .
    "644e6f6465735f4164620670726f746f33"
));
