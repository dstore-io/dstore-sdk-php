<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetForumStatistics_Pu.proto

namespace Dstore\Engine\Fo_GetForumStatistics_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_identification_values = null;
    private $person_identification_values_null = false;
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $unique_id = null;
    private $unique_id_null = false;
    private $forum_id = null;
    private $forum_id_null = false;
    private $list_of_statistic_information_ids = null;
    private $list_of_statistic_information_ids_null = false;
    private $from_date = null;
    private $from_date_null = false;
    private $to_date = null;
    private $to_date_null = false;
    private $date_format = null;
    private $date_format_null = false;
    private $visibility = null;
    private $visibility_null = false;
    private $separator_in_ident_vals = null;
    private $separator_in_ident_vals_null = false;

    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->person_identification_values = $var;
    }

    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_type_id = $var;
    }

    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    public function getUniqueId()
    {
        return $this->unique_id;
    }

    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->unique_id = $var;
    }

    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    public function getForumId()
    {
        return $this->forum_id;
    }

    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->forum_id = $var;
    }

    public function getForumIdNull()
    {
        return $this->forum_id_null;
    }

    public function setForumIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->forum_id_null = $var;
    }

    public function getListOfStatisticInformationIds()
    {
        return $this->list_of_statistic_information_ids;
    }

    public function setListOfStatisticInformationIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->list_of_statistic_information_ids = $var;
    }

    public function getListOfStatisticInformationIdsNull()
    {
        return $this->list_of_statistic_information_ids_null;
    }

    public function setListOfStatisticInformationIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->list_of_statistic_information_ids_null = $var;
    }

    public function getFromDate()
    {
        return $this->from_date;
    }

    public function setFromDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->from_date = $var;
    }

    public function getFromDateNull()
    {
        return $this->from_date_null;
    }

    public function setFromDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_date_null = $var;
    }

    public function getToDate()
    {
        return $this->to_date;
    }

    public function setToDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->to_date = $var;
    }

    public function getToDateNull()
    {
        return $this->to_date_null;
    }

    public function setToDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_date_null = $var;
    }

    public function getDateFormat()
    {
        return $this->date_format;
    }

    public function setDateFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->date_format = $var;
    }

    public function getDateFormatNull()
    {
        return $this->date_format_null;
    }

    public function setDateFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_format_null = $var;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }

    public function setVisibility(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->visibility = $var;
    }

    public function getVisibilityNull()
    {
        return $this->visibility_null;
    }

    public function setVisibilityNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visibility_null = $var;
    }

    public function getSeparatorInIdentVals()
    {
        return $this->separator_in_ident_vals;
    }

    public function setSeparatorInIdentVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->separator_in_ident_vals = $var;
    }

    public function getSeparatorInIdentValsNull()
    {
        return $this->separator_in_ident_vals_null;
    }

    public function setSeparatorInIdentValsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_ident_vals_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_GetForumStatistics_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $forum_id = null;
    private $value = null;
    private $statistic_information_id = null;
    private $statistic_information = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getForumId()
    {
        return $this->forum_id;
    }

    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->forum_id = $var;
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

    public function getStatisticInformationId()
    {
        return $this->statistic_information_id;
    }

    public function setStatisticInformationId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->statistic_information_id = $var;
    }

    public function getStatisticInformation()
    {
        return $this->statistic_information;
    }

    public function setStatisticInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->statistic_information = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0abb0c0a376473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f476574466f72756d537461746973746963735f50752e70726f746f" .
    "12266473746f72652e656e67696e652e666f5f476574466f72756d537461" .
    "746973746963735f50751a136473746f72652f76616c7565732e70726f74" .
    "6f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f746f" .
    "1a236473746f72652f656e67696e652f6d657461696e666f726d6174696f" .
    "6e2e70726f746f22e1060a0a506172616d657465727312400a1c70657273" .
    "6f6e5f6964656e74696669636174696f6e5f76616c75657318012001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c7565122a" .
    "0a21706572736f6e5f6964656e74696669636174696f6e5f76616c756573" .
    "5f6e756c6c18e9072001280812330a0e706572736f6e5f747970655f6964" .
    "18022001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c7565121c0a13706572736f6e5f747970655f69645f6e756c6c18ea" .
    "0720012808122d0a09756e697175655f696418032001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c756512170a0e756e6971" .
    "75655f69645f6e756c6c18eb0720012808122d0a08666f72756d5f696418" .
    "042001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c756512160a0d666f72756d5f69645f6e756c6c18ec07200128081245" .
    "0a216c6973745f6f665f7374617469737469635f696e666f726d6174696f" .
    "6e5f69647318052001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565122f0a266c6973745f6f665f737461746973746963" .
    "5f696e666f726d6174696f6e5f6964735f6e756c6c18ed07200128081230" .
    "0a0966726f6d5f6461746518062001280b321d2e6473746f72652e76616c" .
    "7565732e74696d657374616d7056616c756512170a0e66726f6d5f646174" .
    "655f6e756c6c18ee0720012808122e0a07746f5f6461746518072001280b" .
    "321d2e6473746f72652e76616c7565732e74696d657374616d7056616c75" .
    "6512150a0c746f5f646174655f6e756c6c18ef0720012808122f0a0b6461" .
    "74655f666f726d617418082001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c756512190a10646174655f666f726d61745f6e" .
    "756c6c18f00720012808122f0a0a7669736962696c69747918092001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "180a0f7669736962696c6974795f6e756c6c18f10720012808123b0a1773" .
    "6570617261746f725f696e5f6964656e745f76616c73180a2001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512250a1c" .
    "736570617261746f725f696e5f6964656e745f76616c735f6e756c6c18f2" .
    "072001280822b9030a08526573706f6e736512480a106d6574615f696e66" .
    "6f726d6174696f6e18022003280b322e2e6473746f72652e656e67696e65" .
    "2e6d657461696e666f726d6174696f6e2e4d657461496e666f726d617469" .
    "6f6e122f0a076d65737361676518032003280b321e2e6473746f72652e65" .
    "6e67696e652e6d6573736167652e4d65737361676512410a03726f771804" .
    "2003280b32342e6473746f72652e656e67696e652e666f5f476574466f72" .
    "756d537461746973746963735f50752e526573706f6e73652e526f771aee" .
    "010a03526f77120f0a06726f775f696418904e20012805122e0a08666f72" .
    "756d5f696418914e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565122a0a0576616c756518924e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c7565123e0a1873" .
    "74617469737469635f696e666f726d6174696f6e5f696418934e2001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "3a0a157374617469737469635f696e666f726d6174696f6e18944e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756542" .
    "590a1b696f2e6473746f72652e656e67696e652e70726f63656475726573" .
    "5a3a676f73646b2e6473746f72652e64652f656e67696e652f70726f6365" .
    "64757265732f666f5f476574466f72756d537461746973746963735f5075" .
    "620670726f746f33"
));
