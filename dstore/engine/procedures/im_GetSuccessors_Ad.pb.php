<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetSuccessors_Ad.proto

namespace Dstore\Engine\Im_GetSuccessors_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $tree_node_list = null;
    private $tree_node_list_null = false;
    private $level_no = null;
    private $level_no_null = false;
    private $include_deactivated_nodes = null;
    private $include_deactivated_nodes_null = false;
    private $output_into_one_id = null;
    private $output_into_one_id_null = false;
    private $filter_by_characteristic_id = null;
    private $filter_by_characteristic_id_null = false;
    private $filter_by_charac_value = null;
    private $filter_by_charac_value_null = false;
    private $binary_characteristic_value_id = null;
    private $binary_characteristic_value_id_null = false;
    private $negate_filter_by_params = null;
    private $negate_filter_by_params_null = false;
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
    private $from_row_number = null;
    private $from_row_number_null = false;
    private $max_number_of_nodes = null;
    private $max_number_of_nodes_null = false;
    private $count = null;
    private $count_null = false;

    public function getTreeNodeList()
    {
        return $this->tree_node_list;
    }

    public function setTreeNodeList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->tree_node_list = $var;
    }

    public function getTreeNodeListNull()
    {
        return $this->tree_node_list_null;
    }

    public function setTreeNodeListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_list_null = $var;
    }

    public function getLevelNo()
    {
        return $this->level_no;
    }

    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_no = $var;
    }

    public function getLevelNoNull()
    {
        return $this->level_no_null;
    }

    public function setLevelNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->level_no_null = $var;
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

    public function getOutputIntoOneId()
    {
        return $this->output_into_one_id;
    }

    public function setOutputIntoOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
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

    public function getFilterByCharacteristicId()
    {
        return $this->filter_by_characteristic_id;
    }

    public function setFilterByCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->filter_by_characteristic_id = $var;
    }

    public function getFilterByCharacteristicIdNull()
    {
        return $this->filter_by_characteristic_id_null;
    }

    public function setFilterByCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_characteristic_id_null = $var;
    }

    public function getFilterByCharacValue()
    {
        return $this->filter_by_charac_value;
    }

    public function setFilterByCharacValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->filter_by_charac_value = $var;
    }

    public function getFilterByCharacValueNull()
    {
        return $this->filter_by_charac_value_null;
    }

    public function setFilterByCharacValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_by_charac_value_null = $var;
    }

    public function getBinaryCharacteristicValueId()
    {
        return $this->binary_characteristic_value_id;
    }

    public function setBinaryCharacteristicValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->binary_characteristic_value_id = $var;
    }

    public function getBinaryCharacteristicValueIdNull()
    {
        return $this->binary_characteristic_value_id_null;
    }

    public function setBinaryCharacteristicValueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_characteristic_value_id_null = $var;
    }

    public function getNegateFilterByParams()
    {
        return $this->negate_filter_by_params;
    }

    public function setNegateFilterByParams(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->negate_filter_by_params = $var;
    }

    public function getNegateFilterByParamsNull()
    {
        return $this->negate_filter_by_params_null;
    }

    public function setNegateFilterByParamsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->negate_filter_by_params_null = $var;
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

    public function getFromRowNumber()
    {
        return $this->from_row_number;
    }

    public function setFromRowNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_row_number = $var;
    }

    public function getFromRowNumberNull()
    {
        return $this->from_row_number_null;
    }

    public function setFromRowNumberNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_row_number_null = $var;
    }

    public function getMaxNumberOfNodes()
    {
        return $this->max_number_of_nodes;
    }

    public function setMaxNumberOfNodes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_nodes = $var;
    }

    public function getMaxNumberOfNodesNull()
    {
        return $this->max_number_of_nodes_null;
    }

    public function setMaxNumberOfNodesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_number_of_nodes_null = $var;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->count = $var;
    }

    public function getCountNull()
    {
        return $this->count_null;
    }

    public function setCountNull($var)
    {
        GPBUtil::checkBool($var);
        $this->count_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $count = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetSuccessors_Ad\Response_Row::class);
        $this->row = $var;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->count = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $predecessor = null;
    private $node_description = null;
    private $value2 = null;
    private $value3 = null;
    private $value1 = null;
    private $binary_code_id = null;
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

    public function getPredecessor()
    {
        return $this->predecessor;
    }

    public function setPredecessor(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->predecessor = $var;
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

    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->binary_code_id = $var;
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
    "0ac0130a326473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f476574537563636573736f72735f41642e70726f746f1221647374" .
    "6f72652e656e67696e652e696d5f476574537563636573736f72735f4164" .
    "1a136473746f72652f76616c7565732e70726f746f1a1b6473746f72652f" .
    "656e67696e652f6d6573736167652e70726f746f1a236473746f72652f65" .
    "6e67696e652f6d657461696e666f726d6174696f6e2e70726f746f229c0c" .
    "0a0a506172616d657465727312320a0e747265655f6e6f64655f6c697374" .
    "18012001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c7565121c0a13747265655f6e6f64655f6c6973745f6e756c6c18e907" .
    "20012808122d0a086c6576656c5f6e6f18022001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512160a0d6c6576656c" .
    "5f6e6f5f6e756c6c18ea0720012808123e0a19696e636c7564655f646561" .
    "63746976617465645f6e6f64657318032001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c756512270a1e696e636c756465" .
    "5f64656163746976617465645f6e6f6465735f6e756c6c18eb0720012808" .
    "12370a126f75747075745f696e746f5f6f6e655f696418042001280b321b" .
    "2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512200a" .
    "176f75747075745f696e746f5f6f6e655f69645f6e756c6c18ec07200128" .
    "0812400a1b66696c7465725f62795f63686172616374657269737469635f" .
    "696418052001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512290a2066696c7465725f62795f636861726163746572" .
    "69737469635f69645f6e756c6c18ed0720012808123a0a1666696c746572" .
    "5f62795f6368617261635f76616c756518062001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512240a1b66696c746572" .
    "5f62795f6368617261635f76616c75655f6e756c6c18ee07200128081243" .
    "0a1e62696e6172795f63686172616374657269737469635f76616c75655f" .
    "696418072001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565122c0a2362696e6172795f636861726163746572697374" .
    "69635f76616c75655f69645f6e756c6c18ef0720012808123c0a176e6567" .
    "6174655f66696c7465725f62795f706172616d7318082001280b321b2e64" .
    "73746f72652e76616c7565732e626f6f6c65616e56616c756512250a1c6e" .
    "65676174655f66696c7465725f62795f706172616d735f6e756c6c18f007" .
    "2001280812420a1e736f72745f62795f6368617261637465726973746963" .
    "5f69645f6c69737418092001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c7565122c0a23736f72745f62795f636861726163" .
    "74657269737469635f69645f6c6973745f6e756c6c18f107200128081234" .
    "0a10736f72745f6f7074696f6e5f6c697374180a2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565121e0a15736f7274" .
    "5f6f7074696f6e5f6c6973745f6e756c6c18f20720012808123d0a19696e" .
    "68657269745f64657074685f6f7074696f6e5f6c697374180b2001280b32" .
    "1a2e6473746f72652e76616c7565732e737472696e6756616c756512270a" .
    "1e696e68657269745f64657074685f6f7074696f6e5f6c6973745f6e756c" .
    "6c18f3072001280812440a207265637572736976655f6576616c75617469" .
    "6f6e5f6f7074696f6e5f6c697374180c2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c7565122e0a257265637572736976" .
    "655f6576616c756174696f6e5f6f7074696f6e5f6c6973745f6e756c6c18" .
    "f4072001280812430a1e6765745f76616c7565735f666f725f736f72745f" .
    "62795f63686172616373180d2001280b321b2e6473746f72652e76616c75" .
    "65732e626f6f6c65616e56616c7565122c0a236765745f76616c7565735f" .
    "666f725f736f72745f62795f636861726163735f6e756c6c18f507200128" .
    "0812340a0f66726f6d5f726f775f6e756d626572180e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565121d0a1466" .
    "726f6d5f726f775f6e756d6265725f6e756c6c18f6072001280812380a13" .
    "6d61785f6e756d6265725f6f665f6e6f646573180f2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512210a186d61" .
    "785f6e756d6265725f6f665f6e6f6465735f6e756c6c18f7072001280812" .
    "2a0a05636f756e7418102001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756512130a0a636f756e745f6e756c6c18f807" .
    "200128082292050a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d657373616765123c0a03726f77180420" .
    "03280b322f2e6473746f72652e656e67696e652e696d5f47657453756363" .
    "6573736f72735f41642e526573706f6e73652e526f77122a0a05636f756e" .
    "7418652001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c75651aa0030a03526f77120f0a06726f775f696418904e200128" .
    "0512310a0b7072656465636573736f7218914e2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512350a106e6f6465" .
    "5f6465736372697074696f6e18924e2001280b321a2e6473746f72652e76" .
    "616c7565732e737472696e6756616c7565122b0a0676616c75653218934e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "7565122b0a0676616c75653318944e2001280b321a2e6473746f72652e76" .
    "616c7565732e737472696e6756616c7565122b0a0676616c75653118954e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "756512340a0e62696e6172795f636f64655f696418964e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512320a0c" .
    "747265655f6e6f64655f696418974e2001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c7565122d0a076e6f64655f696418" .
    "984e2001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756542540a1b696f2e6473746f72652e656e67696e652e70726f63" .
    "6564757265735a35676f73646b2e6473746f72652e64652f656e67696e65" .
    "2f70726f636564757265732f696d5f476574537563636573736f72735f41" .
    "64620670726f746f33"
));

