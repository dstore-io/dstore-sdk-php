<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_SearchCharacteristics_Pu.proto

namespace Dstore\Engine\Im_SearchCharacteristics_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $node_characteristic_ids = null;
    private $node_characteristic_ids_null = false;
    private $value = null;
    private $value_null = false;
    private $is_like = null;
    private $is_like_null = false;
    private $date = null;
    private $date_null = false;
    private $include_inherited = null;
    private $include_inherited_null = false;
    private $language_id = null;
    private $language_id_null = false;
    private $include_node_description = null;
    private $include_node_description_null = false;
    private $result_up_to_level_no = null;
    private $result_up_to_level_no_null = false;
    private $search_up_to_level_no = null;
    private $search_up_to_level_no_null = false;
    private $start_at_row_no = null;
    private $start_at_row_no_null = false;
    private $row_count = null;
    private $row_count_null = false;
    private $maintain_search_item_lacks = null;
    private $maintain_search_item_lacks_null = false;
    private $filter_by_characteristic_id = null;
    private $filter_by_characteristic_id_null = false;
    private $filter_by_charac_value = null;
    private $filter_by_charac_value_null = false;
    private $sort_result = null;
    private $sort_result_null = false;
    private $negate_filter_by_params = null;
    private $negate_filter_by_params_null = false;

    public function getNodeCharacteristicIds()
    {
        return $this->node_characteristic_ids;
    }

    public function setNodeCharacteristicIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->node_characteristic_ids = $var;
    }

    public function getNodeCharacteristicIdsNull()
    {
        return $this->node_characteristic_ids_null;
    }

    public function setNodeCharacteristicIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_ids_null = $var;
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

    public function getValueNull()
    {
        return $this->value_null;
    }

    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
    }

    public function getIsLike()
    {
        return $this->is_like;
    }

    public function setIsLike(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_like = $var;
    }

    public function getIsLikeNull()
    {
        return $this->is_like_null;
    }

    public function setIsLikeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->is_like_null = $var;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->date = $var;
    }

    public function getDateNull()
    {
        return $this->date_null;
    }

    public function setDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_null = $var;
    }

    public function getIncludeInherited()
    {
        return $this->include_inherited;
    }

    public function setIncludeInherited(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_inherited = $var;
    }

    public function getIncludeInheritedNull()
    {
        return $this->include_inherited_null;
    }

    public function setIncludeInheritedNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_inherited_null = $var;
    }

    public function getLanguageId()
    {
        return $this->language_id;
    }

    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->language_id = $var;
    }

    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    public function getIncludeNodeDescription()
    {
        return $this->include_node_description;
    }

    public function setIncludeNodeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_node_description = $var;
    }

    public function getIncludeNodeDescriptionNull()
    {
        return $this->include_node_description_null;
    }

    public function setIncludeNodeDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_node_description_null = $var;
    }

    public function getResultUpToLevelNo()
    {
        return $this->result_up_to_level_no;
    }

    public function setResultUpToLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->result_up_to_level_no = $var;
    }

    public function getResultUpToLevelNoNull()
    {
        return $this->result_up_to_level_no_null;
    }

    public function setResultUpToLevelNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->result_up_to_level_no_null = $var;
    }

    public function getSearchUpToLevelNo()
    {
        return $this->search_up_to_level_no;
    }

    public function setSearchUpToLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->search_up_to_level_no = $var;
    }

    public function getSearchUpToLevelNoNull()
    {
        return $this->search_up_to_level_no_null;
    }

    public function setSearchUpToLevelNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_up_to_level_no_null = $var;
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

    public function getMaintainSearchItemLacks()
    {
        return $this->maintain_search_item_lacks;
    }

    public function setMaintainSearchItemLacks(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->maintain_search_item_lacks = $var;
    }

    public function getMaintainSearchItemLacksNull()
    {
        return $this->maintain_search_item_lacks_null;
    }

    public function setMaintainSearchItemLacksNull($var)
    {
        GPBUtil::checkBool($var);
        $this->maintain_search_item_lacks_null = $var;
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

    public function getSortResult()
    {
        return $this->sort_result;
    }

    public function setSortResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->sort_result = $var;
    }

    public function getSortResultNull()
    {
        return $this->sort_result_null;
    }

    public function setSortResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_result_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_SearchCharacteristics_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $inherited = null;
    private $level_no = null;
    private $node_characteristic_id = null;
    private $value_id = null;
    private $node_description = null;
    private $h_tree_node_id = null;
    private $tree_node_id = null;
    private $node_id = null;
    private $value = null;
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

    public function getInherited()
    {
        return $this->inherited;
    }

    public function setInherited(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->inherited = $var;
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

    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_characteristic_id = $var;
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

    public function getNodeDescription()
    {
        return $this->node_description;
    }

    public function setNodeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->node_description = $var;
    }

    public function getHTreeNodeId()
    {
        return $this->h_tree_node_id;
    }

    public function setHTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->h_tree_node_id = $var;
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

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
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
    "0af0140a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f5365617263684368617261637465726973746963735f50752e7072" .
    "6f746f12296473746f72652e656e67696e652e696d5f5365617263684368" .
    "617261637465726973746963735f50751a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f228f0b0a0a506172616d6574657273123b" .
    "0a176e6f64655f63686172616374657269737469635f6964731801200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "250a1c6e6f64655f63686172616374657269737469635f6964735f6e756c" .
    "6c18e9072001280812290a0576616c756518022001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512130a0a76616c7565" .
    "5f6e756c6c18ea0720012808122c0a0769735f6c696b6518032001280b32" .
    "1b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75651215" .
    "0a0c69735f6c696b655f6e756c6c18eb0720012808122b0a046461746518" .
    "042001280b321d2e6473746f72652e76616c7565732e74696d657374616d" .
    "7056616c756512120a09646174655f6e756c6c18ec072001280812360a11" .
    "696e636c7564655f696e6865726974656418052001280b321b2e6473746f" .
    "72652e76616c7565732e626f6f6c65616e56616c7565121f0a16696e636c" .
    "7564655f696e686572697465645f6e756c6c18ed072001280812300a0b6c" .
    "616e67756167655f696418062001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512190a106c616e67756167655f6964" .
    "5f6e756c6c18ee0720012808123d0a18696e636c7564655f6e6f64655f64" .
    "65736372697074696f6e18072001280b321b2e6473746f72652e76616c75" .
    "65732e626f6f6c65616e56616c756512260a1d696e636c7564655f6e6f64" .
    "655f6465736372697074696f6e5f6e756c6c18ef0720012808123a0a1572" .
    "6573756c745f75705f746f5f6c6576656c5f6e6f18082001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512230a1a72" .
    "6573756c745f75705f746f5f6c6576656c5f6e6f5f6e756c6c18f0072001" .
    "2808123a0a157365617263685f75705f746f5f6c6576656c5f6e6f180920" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "756512230a1a7365617263685f75705f746f5f6c6576656c5f6e6f5f6e75" .
    "6c6c18f1072001280812340a0f73746172745f61745f726f775f6e6f180a" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565121d0a1473746172745f61745f726f775f6e6f5f6e756c6c18f207" .
    "20012808122e0a09726f775f636f756e74180b2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512170a0e726f775f" .
    "636f756e745f6e756c6c18f30720012808123f0a1a6d61696e7461696e5f" .
    "7365617263685f6974656d5f6c61636b73180c2001280b321b2e6473746f" .
    "72652e76616c7565732e626f6f6c65616e56616c756512280a1f6d61696e" .
    "7461696e5f7365617263685f6974656d5f6c61636b735f6e756c6c18f407" .
    "2001280812400a1b66696c7465725f62795f636861726163746572697374" .
    "69635f6964180d2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512290a2066696c7465725f62795f636861726163" .
    "74657269737469635f69645f6e756c6c18f50720012808123a0a1666696c" .
    "7465725f62795f6368617261635f76616c7565180e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c756512240a1b66696c" .
    "7465725f62795f6368617261635f76616c75655f6e756c6c18f607200128" .
    "0812300a0b736f72745f726573756c74180f2001280b321b2e6473746f72" .
    "652e76616c7565732e626f6f6c65616e56616c756512190a10736f72745f" .
    "726573756c745f6e756c6c18f70720012808123c0a176e65676174655f66" .
    "696c7465725f62795f706172616d7318102001280b321b2e6473746f7265" .
    "2e76616c7565732e626f6f6c65616e56616c756512250a1c6e6567617465" .
    "5f66696c7465725f62795f706172616d735f6e756c6c18f8072001280822" .
    "b7070a08526573706f6e736512480a106d6574615f696e666f726d617469" .
    "6f6e18022003280b322e2e6473746f72652e656e67696e652e6d65746169" .
    "6e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a07" .
    "6d65737361676518032003280b321e2e6473746f72652e656e67696e652e" .
    "6d6573736167652e4d65737361676512440a03726f7718042003280b3237" .
    "2e6473746f72652e656e67696e652e696d5f536561726368436861726163" .
    "7465726973746963735f50752e526573706f6e73652e526f771ae9050a03" .
    "526f77120f0a06726f775f696418904e20012805122f0a09696e68657269" .
    "74656418914e2001280b321b2e6473746f72652e76616c7565732e626f6f" .
    "6c65616e56616c7565122e0a086c6576656c5f6e6f18924e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565123c0a" .
    "166e6f64655f63686172616374657269737469635f696418934e2001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "2e0a0876616c75655f696418944e2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512350a106e6f64655f64657363" .
    "72697074696f6e18954e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c756512340a0e685f747265655f6e6f64655f6964" .
    "18964e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512320a0c747265655f6e6f64655f696418974e2001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c7565122d" .
    "0a076e6f64655f696418984e2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565122a0a0576616c756518994e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "410a1c7072655f7072656465636573736f72735f6465736372697074696f" .
    "6e189a4e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c756512430a1d7072655f7072656465636573736f72735f747265" .
    "655f6e6f64655f6964189b4e2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565123f0a197072656465636573736f72" .
    "735f747265655f6e6f64655f6964189c4e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c7565123d0a18707265646563" .
    "6573736f72735f6465736372697074696f6e189d4e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565425c0a1b696f2e" .
    "6473746f72652e656e67696e652e70726f636564757265735a3d676f7364" .
    "6b2e6473746f72652e64652f656e67696e652f70726f636564757265732f" .
    "696d5f5365617263684368617261637465726973746963735f5075620670" .
    "726f746f33"
));
