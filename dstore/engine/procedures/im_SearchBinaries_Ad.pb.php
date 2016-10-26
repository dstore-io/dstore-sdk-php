<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_SearchBinaries_Ad.proto

namespace Dstore\Engine\Im_SearchBinaries_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $assigned_to_table = null;
    private $assigned_to_table_null = false;
    private $input_nest_level_conds = null;
    private $input_nest_level_conds_null = false;
    private $value_separator_i_n_operator = null;
    private $value_separator_i_n_operator_null = false;
    private $start_at_row_no = null;
    private $start_at_row_no_null = false;
    private $row_count = null;
    private $row_count_null = false;
    private $number_of_elements_in_result = null;
    private $number_of_elements_in_result_null = false;
    private $output_binary_charac_id1 = null;
    private $output_binary_charac_id1_null = false;
    private $output_binary_charac_id2 = null;
    private $output_binary_charac_id2_null = false;
    private $output_binary_charac_id3 = null;
    private $output_binary_charac_id3_null = false;
    private $include_binary_code = null;
    private $include_binary_code_null = false;
    private $node_characteristic_id1 = null;
    private $node_characteristic_id1_null = false;
    private $node_characteristic_id2 = null;
    private $node_characteristic_id2_null = false;
    private $node_characteristic_id3 = null;
    private $node_characteristic_id3_null = false;

    public function getAssignedToTable()
    {
        return $this->assigned_to_table;
    }

    public function setAssignedToTable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->assigned_to_table = $var;
    }

    public function getAssignedToTableNull()
    {
        return $this->assigned_to_table_null;
    }

    public function setAssignedToTableNull($var)
    {
        GPBUtil::checkBool($var);
        $this->assigned_to_table_null = $var;
    }

    public function getInputNestLevelConds()
    {
        return $this->input_nest_level_conds;
    }

    public function setInputNestLevelConds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->input_nest_level_conds = $var;
    }

    public function getInputNestLevelCondsNull()
    {
        return $this->input_nest_level_conds_null;
    }

    public function setInputNestLevelCondsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->input_nest_level_conds_null = $var;
    }

    public function getValueSeparatorINOperator()
    {
        return $this->value_separator_i_n_operator;
    }

    public function setValueSeparatorINOperator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value_separator_i_n_operator = $var;
    }

    public function getValueSeparatorINOperatorNull()
    {
        return $this->value_separator_i_n_operator_null;
    }

    public function setValueSeparatorINOperatorNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_separator_i_n_operator_null = $var;
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

    public function getOutputBinaryCharacId1()
    {
        return $this->output_binary_charac_id1;
    }

    public function setOutputBinaryCharacId1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->output_binary_charac_id1 = $var;
    }

    public function getOutputBinaryCharacId1Null()
    {
        return $this->output_binary_charac_id1_null;
    }

    public function setOutputBinaryCharacId1Null($var)
    {
        GPBUtil::checkBool($var);
        $this->output_binary_charac_id1_null = $var;
    }

    public function getOutputBinaryCharacId2()
    {
        return $this->output_binary_charac_id2;
    }

    public function setOutputBinaryCharacId2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->output_binary_charac_id2 = $var;
    }

    public function getOutputBinaryCharacId2Null()
    {
        return $this->output_binary_charac_id2_null;
    }

    public function setOutputBinaryCharacId2Null($var)
    {
        GPBUtil::checkBool($var);
        $this->output_binary_charac_id2_null = $var;
    }

    public function getOutputBinaryCharacId3()
    {
        return $this->output_binary_charac_id3;
    }

    public function setOutputBinaryCharacId3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->output_binary_charac_id3 = $var;
    }

    public function getOutputBinaryCharacId3Null()
    {
        return $this->output_binary_charac_id3_null;
    }

    public function setOutputBinaryCharacId3Null($var)
    {
        GPBUtil::checkBool($var);
        $this->output_binary_charac_id3_null = $var;
    }

    public function getIncludeBinaryCode()
    {
        return $this->include_binary_code;
    }

    public function setIncludeBinaryCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_binary_code = $var;
    }

    public function getIncludeBinaryCodeNull()
    {
        return $this->include_binary_code_null;
    }

    public function setIncludeBinaryCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_binary_code_null = $var;
    }

    public function getNodeCharacteristicId1()
    {
        return $this->node_characteristic_id1;
    }

    public function setNodeCharacteristicId1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_characteristic_id1 = $var;
    }

    public function getNodeCharacteristicId1Null()
    {
        return $this->node_characteristic_id1_null;
    }

    public function setNodeCharacteristicId1Null($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id1_null = $var;
    }

    public function getNodeCharacteristicId2()
    {
        return $this->node_characteristic_id2;
    }

    public function setNodeCharacteristicId2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_characteristic_id2 = $var;
    }

    public function getNodeCharacteristicId2Null()
    {
        return $this->node_characteristic_id2_null;
    }

    public function setNodeCharacteristicId2Null($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id2_null = $var;
    }

    public function getNodeCharacteristicId3()
    {
        return $this->node_characteristic_id3;
    }

    public function setNodeCharacteristicId3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_characteristic_id3 = $var;
    }

    public function getNodeCharacteristicId3Null()
    {
        return $this->node_characteristic_id3_null;
    }

    public function setNodeCharacteristicId3Null($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id3_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_SearchBinaries_Ad\Response_Row::class);
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
    private $binary_code_id = null;
    private $node_id = null;
    private $chosen_tree_node_id = null;
    private $value3 = null;
    private $binary_value1 = null;
    private $value1 = null;
    private $binary_value3 = null;
    private $value2 = null;
    private $binary_value2 = null;
    private $thumbnail_code = null;
    private $binary_code = null;
    private $node_characteristic_id = null;
    private $value = null;
    private $value_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getNodeId()
    {
        return $this->node_id;
    }

    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_id = $var;
    }

    public function getChosenTreeNodeId()
    {
        return $this->chosen_tree_node_id;
    }

    public function setChosenTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->chosen_tree_node_id = $var;
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

    public function getBinaryValue1()
    {
        return $this->binary_value1;
    }

    public function setBinaryValue1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->binary_value1 = $var;
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

    public function getBinaryValue3()
    {
        return $this->binary_value3;
    }

    public function setBinaryValue3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->binary_value3 = $var;
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

    public function getBinaryValue2()
    {
        return $this->binary_value2;
    }

    public function setBinaryValue2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->binary_value2 = $var;
    }

    public function getThumbnailCode()
    {
        return $this->thumbnail_code;
    }

    public function setThumbnailCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\bytesValue::class);
        $this->thumbnail_code = $var;
    }

    public function getBinaryCode()
    {
        return $this->binary_code;
    }

    public function setBinaryCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\bytesValue::class);
        $this->binary_code = $var;
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

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a80140a336473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f53656172636842696e61726965735f41642e70726f746f12226473" .
    "746f72652e656e67696e652e696d5f53656172636842696e61726965735f" .
    "41641a136473746f72652f76616c7565732e70726f746f1a1b6473746f72" .
    "652f656e67696e652f6d6573736167652e70726f746f1a236473746f7265" .
    "2f656e67696e652f6d657461696e666f726d6174696f6e2e70726f746f22" .
    "840a0a0a506172616d657465727312360a1161737369676e65645f746f5f" .
    "7461626c6518012001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565121f0a1661737369676e65645f746f5f7461626c" .
    "655f6e756c6c18e90720012808123b0a16696e7075745f6e6573745f6c65" .
    "76656c5f636f6e647318022001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756512240a1b696e7075745f6e6573745f6c" .
    "6576656c5f636f6e64735f6e756c6c18ea072001280812400a1c76616c75" .
    "655f736570617261746f725f695f6e5f6f70657261746f7218032001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c7565122a" .
    "0a2176616c75655f736570617261746f725f695f6e5f6f70657261746f72" .
    "5f6e756c6c18eb072001280812340a0f73746172745f61745f726f775f6e" .
    "6f18042001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565121d0a1473746172745f61745f726f775f6e6f5f6e756c6c" .
    "18ec0720012808122e0a09726f775f636f756e7418052001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512170a0e72" .
    "6f775f636f756e745f6e756c6c18ed072001280812410a1c6e756d626572" .
    "5f6f665f656c656d656e74735f696e5f726573756c7418062001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565122a0a" .
    "216e756d6265725f6f665f656c656d656e74735f696e5f726573756c745f" .
    "6e756c6c18ee0720012808123d0a186f75747075745f62696e6172795f63" .
    "68617261635f69643118072001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756512260a1d6f75747075745f62696e6172" .
    "795f6368617261635f6964315f6e756c6c18ef0720012808123d0a186f75" .
    "747075745f62696e6172795f6368617261635f69643218082001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c756512260a" .
    "1d6f75747075745f62696e6172795f6368617261635f6964325f6e756c6c" .
    "18f00720012808123d0a186f75747075745f62696e6172795f6368617261" .
    "635f69643318092001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512260a1d6f75747075745f62696e6172795f6368" .
    "617261635f6964335f6e756c6c18f1072001280812380a13696e636c7564" .
    "655f62696e6172795f636f6465180a2001280b321b2e6473746f72652e76" .
    "616c7565732e626f6f6c65616e56616c756512210a18696e636c7564655f" .
    "62696e6172795f636f64655f6e756c6c18f20720012808123c0a176e6f64" .
    "655f63686172616374657269737469635f696431180b2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512250a1c6e" .
    "6f64655f63686172616374657269737469635f6964315f6e756c6c18f307" .
    "20012808123c0a176e6f64655f63686172616374657269737469635f6964" .
    "32180c2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512250a1c6e6f64655f63686172616374657269737469635f" .
    "6964325f6e756c6c18f40720012808123c0a176e6f64655f636861726163" .
    "74657269737469635f696433180d2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512250a1c6e6f64655f63686172" .
    "616374657269737469635f6964335f6e756c6c18f5072001280822e7070a" .
    "08526573706f6e736512480a106d6574615f696e666f726d6174696f6e18" .
    "022003280b322e2e6473746f72652e656e67696e652e6d657461696e666f" .
    "726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d6573" .
    "7361676518032003280b321e2e6473746f72652e656e67696e652e6d6573" .
    "736167652e4d657373616765123d0a03726f7718042003280b32302e6473" .
    "746f72652e656e67696e652e696d5f53656172636842696e61726965735f" .
    "41642e526573706f6e73652e526f7712410a1c6e756d6265725f6f665f65" .
    "6c656d656e74735f696e5f726573756c7418652001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c75651add050a03526f77" .
    "120f0a06726f775f696418904e2001280512340a0e62696e6172795f636f" .
    "64655f696418914e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565122d0a076e6f64655f696418924e2001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651239" .
    "0a1363686f73656e5f747265655f6e6f64655f696418934e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565122b0a" .
    "0676616c75653318944e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c756512320a0d62696e6172795f76616c75653118" .
    "954e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c7565122b0a0676616c75653118964e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512320a0d62696e6172795f" .
    "76616c75653318974e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565122b0a0676616c75653218984e2001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512320a0d" .
    "62696e6172795f76616c75653218994e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c756512330a0e7468756d626e6169" .
    "6c5f636f646518a89c012001280b32192e6473746f72652e76616c756573" .
    "2e627974657356616c756512300a0b62696e6172795f636f646518ab9c01" .
    "2001280b32192e6473746f72652e76616c7565732e627974657356616c75" .
    "65123d0a166e6f64655f63686172616374657269737469635f696418b2ea" .
    "012001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565122b0a0576616c756518b3ea012001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565122f0a0876616c75655f69" .
    "6418b5ea012001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756542550a1b696f2e6473746f72652e656e67696e652e70" .
    "726f636564757265735a36676f73646b2e6473746f72652e64652f656e67" .
    "696e652f70726f636564757265732f696d5f53656172636842696e617269" .
    "65735f4164620670726f746f33"
));

