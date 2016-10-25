<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_InsertTemp_CharacConditions.proto

namespace Dstore\Engine\Mi_InsertTemp_CharacConditions;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $characteristic_id_list = null;
    private $characteristic_id_list_null = false;
    private $basic_field_type_id_list = null;
    private $basic_field_type_id_list_null = false;
    private $operator1_list = null;
    private $operator1_list_null = false;
    private $condition1_list = null;
    private $condition1_list_null = false;
    private $operator2_list = null;
    private $operator2_list_null = false;
    private $condition2_list = null;
    private $condition2_list_null = false;
    private $estimated_rows_affected_list = null;
    private $estimated_rows_affected_list_null = false;
    private $delete = null;
    private $delete_null = false;
    private $separator = null;
    private $separator_null = false;
    private $check_byte_length_for_strings = null;
    private $check_byte_length_for_strings_null = false;

    public function getCharacteristicIdList()
    {
        return $this->characteristic_id_list;
    }

    public function setCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_id_list = $var;
    }

    public function getCharacteristicIdListNull()
    {
        return $this->characteristic_id_list_null;
    }

    public function setCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list_null = $var;
    }

    public function getBasicFieldTypeIdList()
    {
        return $this->basic_field_type_id_list;
    }

    public function setBasicFieldTypeIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->basic_field_type_id_list = $var;
    }

    public function getBasicFieldTypeIdListNull()
    {
        return $this->basic_field_type_id_list_null;
    }

    public function setBasicFieldTypeIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->basic_field_type_id_list_null = $var;
    }

    public function getOperator1List()
    {
        return $this->operator1_list;
    }

    public function setOperator1List(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->operator1_list = $var;
    }

    public function getOperator1ListNull()
    {
        return $this->operator1_list_null;
    }

    public function setOperator1ListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->operator1_list_null = $var;
    }

    public function getCondition1List()
    {
        return $this->condition1_list;
    }

    public function setCondition1List(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition1_list = $var;
    }

    public function getCondition1ListNull()
    {
        return $this->condition1_list_null;
    }

    public function setCondition1ListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition1_list_null = $var;
    }

    public function getOperator2List()
    {
        return $this->operator2_list;
    }

    public function setOperator2List(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->operator2_list = $var;
    }

    public function getOperator2ListNull()
    {
        return $this->operator2_list_null;
    }

    public function setOperator2ListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->operator2_list_null = $var;
    }

    public function getCondition2List()
    {
        return $this->condition2_list;
    }

    public function setCondition2List(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition2_list = $var;
    }

    public function getCondition2ListNull()
    {
        return $this->condition2_list_null;
    }

    public function setCondition2ListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition2_list_null = $var;
    }

    public function getEstimatedRowsAffectedList()
    {
        return $this->estimated_rows_affected_list;
    }

    public function setEstimatedRowsAffectedList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->estimated_rows_affected_list = $var;
    }

    public function getEstimatedRowsAffectedListNull()
    {
        return $this->estimated_rows_affected_list_null;
    }

    public function setEstimatedRowsAffectedListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->estimated_rows_affected_list_null = $var;
    }

    public function getDelete()
    {
        return $this->delete;
    }

    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete = $var;
    }

    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

    public function getSeparator()
    {
        return $this->separator;
    }

    public function setSeparator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->separator = $var;
    }

    public function getSeparatorNull()
    {
        return $this->separator_null;
    }

    public function setSeparatorNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_null = $var;
    }

    public function getCheckByteLengthForStrings()
    {
        return $this->check_byte_length_for_strings;
    }

    public function setCheckByteLengthForStrings(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->check_byte_length_for_strings = $var;
    }

    public function getCheckByteLengthForStringsNull()
    {
        return $this->check_byte_length_for_strings_null;
    }

    public function setCheckByteLengthForStringsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_byte_length_for_strings_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_InsertTemp_CharacConditions\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aa30b0a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f496e7365727454656d705f436861726163436f6e646974696f6e73" .
    "2e70726f746f122c6473746f72652e656e67696e652e6d695f496e736572" .
    "7454656d705f436861726163436f6e646974696f6e731a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f228a070a0a506172616d65" .
    "74657273123a0a1663686172616374657269737469635f69645f6c697374" .
    "18012001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512240a1b63686172616374657269737469635f69645f6c697374" .
    "5f6e756c6c18e90720012808123c0a1862617369635f6669656c645f7479" .
    "70655f69645f6c69737418022001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756512260a1d62617369635f6669656c645f" .
    "747970655f69645f6c6973745f6e756c6c18ea072001280812320a0e6f70" .
    "657261746f72315f6c69737418032001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c7565121c0a136f70657261746f72315f" .
    "6c6973745f6e756c6c18eb072001280812330a0f636f6e646974696f6e31" .
    "5f6c69737418042001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565121d0a14636f6e646974696f6e315f6c6973745f6e" .
    "756c6c18ec072001280812320a0e6f70657261746f72325f6c6973741805" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "7565121c0a136f70657261746f72325f6c6973745f6e756c6c18ed072001" .
    "280812330a0f636f6e646974696f6e325f6c69737418062001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c7565121d0a1463" .
    "6f6e646974696f6e325f6c6973745f6e756c6c18ee072001280812400a1c" .
    "657374696d617465645f726f77735f61666665637465645f6c6973741807" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "7565122a0a21657374696d617465645f726f77735f61666665637465645f" .
    "6c6973745f6e756c6c18ef0720012808122b0a0664656c65746518082001" .
    "280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75" .
    "6512140a0b64656c6574655f6e756c6c18f00720012808122d0a09736570" .
    "617261746f7218092001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756512170a0e736570617261746f725f6e756c6c18f1" .
    "072001280812420a1d636865636b5f627974655f6c656e6774685f666f72" .
    "5f737472696e6773180a2001280b321b2e6473746f72652e76616c756573" .
    "2e626f6f6c65616e56616c7565122b0a22636865636b5f627974655f6c65" .
    "6e6774685f666f725f737472696e67735f6e756c6c18f2072001280822e6" .
    "010a08526573706f6e736512480a106d6574615f696e666f726d6174696f" .
    "6e18022003280b322e2e6473746f72652e656e67696e652e6d657461696e" .
    "666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d" .
    "65737361676518032003280b321e2e6473746f72652e656e67696e652e6d" .
    "6573736167652e4d65737361676512470a03726f7718042003280b323a2e" .
    "6473746f72652e656e67696e652e6d695f496e7365727454656d705f4368" .
    "61726163436f6e646974696f6e732e526573706f6e73652e526f771a160a" .
    "03526f77120f0a06726f775f696418904e20012805425f0a1b696f2e6473" .
    "746f72652e656e67696e652e70726f636564757265735a40676f73646b2e" .
    "6473746f72652e64652f656e67696e652f70726f636564757265732f6d69" .
    "5f496e7365727454656d705f436861726163436f6e646974696f6e736206" .
    "70726f746f33"
));
