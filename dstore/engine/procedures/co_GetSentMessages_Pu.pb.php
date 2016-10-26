<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetSentMessages_Pu.proto

namespace Dstore\Engine\Co_GetSentMessages_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $message_no = null;
    private $message_no_null = false;
    private $unique_id = null;
    private $unique_id_null = false;
    private $person_identification_values = null;
    private $person_identification_values_null = false;
    private $community_id = null;
    private $community_id_null = false;
    private $only_messages_to_member_id = null;
    private $only_messages_to_member_id_null = false;
    private $date_and_time_format = null;
    private $date_and_time_format_null = false;
    private $from_row_number = null;
    private $from_row_number_null = false;
    private $max_number_of_rows = null;
    private $max_number_of_rows_null = false;
    private $from_message_status = null;
    private $from_message_status_null = false;
    private $to_message_status = null;
    private $to_message_status_null = false;
    private $order_desc = null;
    private $order_desc_null = false;
    private $order_by_nick = null;
    private $order_by_nick_null = false;
    private $separator_in_ident_vals = null;
    private $separator_in_ident_vals_null = false;

    public function getMessageNo()
    {
        return $this->message_no;
    }

    public function setMessageNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->message_no = $var;
    }

    public function getMessageNoNull()
    {
        return $this->message_no_null;
    }

    public function setMessageNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->message_no_null = $var;
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

    public function getCommunityId()
    {
        return $this->community_id;
    }

    public function setCommunityId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->community_id = $var;
    }

    public function getCommunityIdNull()
    {
        return $this->community_id_null;
    }

    public function setCommunityIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_id_null = $var;
    }

    public function getOnlyMessagesToMemberId()
    {
        return $this->only_messages_to_member_id;
    }

    public function setOnlyMessagesToMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->only_messages_to_member_id = $var;
    }

    public function getOnlyMessagesToMemberIdNull()
    {
        return $this->only_messages_to_member_id_null;
    }

    public function setOnlyMessagesToMemberIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_messages_to_member_id_null = $var;
    }

    public function getDateAndTimeFormat()
    {
        return $this->date_and_time_format;
    }

    public function setDateAndTimeFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->date_and_time_format = $var;
    }

    public function getDateAndTimeFormatNull()
    {
        return $this->date_and_time_format_null;
    }

    public function setDateAndTimeFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_and_time_format_null = $var;
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

    public function getMaxNumberOfRows()
    {
        return $this->max_number_of_rows;
    }

    public function setMaxNumberOfRows(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_rows = $var;
    }

    public function getMaxNumberOfRowsNull()
    {
        return $this->max_number_of_rows_null;
    }

    public function setMaxNumberOfRowsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_number_of_rows_null = $var;
    }

    public function getFromMessageStatus()
    {
        return $this->from_message_status;
    }

    public function setFromMessageStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_message_status = $var;
    }

    public function getFromMessageStatusNull()
    {
        return $this->from_message_status_null;
    }

    public function setFromMessageStatusNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_message_status_null = $var;
    }

    public function getToMessageStatus()
    {
        return $this->to_message_status;
    }

    public function setToMessageStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_message_status = $var;
    }

    public function getToMessageStatusNull()
    {
        return $this->to_message_status_null;
    }

    public function setToMessageStatusNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_message_status_null = $var;
    }

    public function getOrderDesc()
    {
        return $this->order_desc;
    }

    public function setOrderDesc(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->order_desc = $var;
    }

    public function getOrderDescNull()
    {
        return $this->order_desc_null;
    }

    public function setOrderDescNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_desc_null = $var;
    }

    public function getOrderByNick()
    {
        return $this->order_by_nick;
    }

    public function setOrderByNick(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->order_by_nick = $var;
    }

    public function getOrderByNickNull()
    {
        return $this->order_by_nick_null;
    }

    public function setOrderByNickNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_by_nick_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Co_GetSentMessages_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $message_status = null;
    private $to_community_member_id = null;
    private $message = null;
    private $message_no = null;
    private $message_date_and_time = null;
    private $to_community_member_nickname = null;
    private $message_date_and_time_char = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getMessageStatus()
    {
        return $this->message_status;
    }

    public function setMessageStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->message_status = $var;
    }

    public function getToCommunityMemberId()
    {
        return $this->to_community_member_id;
    }

    public function setToCommunityMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_community_member_id = $var;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->message = $var;
    }

    public function getMessageNo()
    {
        return $this->message_no;
    }

    public function setMessageNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->message_no = $var;
    }

    public function getMessageDateAndTime()
    {
        return $this->message_date_and_time;
    }

    public function setMessageDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->message_date_and_time = $var;
    }

    public function getToCommunityMemberNickname()
    {
        return $this->to_community_member_nickname;
    }

    public function setToCommunityMemberNickname(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->to_community_member_nickname = $var;
    }

    public function getMessageDateAndTimeChar()
    {
        return $this->message_date_and_time_char;
    }

    public function setMessageDateAndTimeChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->message_date_and_time_char = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a99100a346473746f72652f656e67696e652f70726f636564757265732f" .
    "636f5f47657453656e744d657373616765735f50752e70726f746f122364" .
    "73746f72652e656e67696e652e636f5f47657453656e744d657373616765" .
    "735f50751a136473746f72652f76616c7565732e70726f746f1a1b647374" .
    "6f72652f656e67696e652f6d6573736167652e70726f746f1a236473746f" .
    "72652f656e67696e652f6d657461696e666f726d6174696f6e2e70726f74" .
    "6f228c090a0a506172616d6574657273122f0a0a6d6573736167655f6e6f" .
    "18012001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512180a0f6d6573736167655f6e6f5f6e756c6c18e907200128" .
    "08122d0a09756e697175655f696418022001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c756512170a0e756e697175655f69" .
    "645f6e756c6c18ea072001280812400a1c706572736f6e5f6964656e7469" .
    "6669636174696f6e5f76616c75657318032001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565122a0a21706572736f6e5f" .
    "6964656e74696669636174696f6e5f76616c7565735f6e756c6c18eb0720" .
    "01280812310a0c636f6d6d756e6974795f696418042001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565121a0a11636f" .
    "6d6d756e6974795f69645f6e756c6c18ec0720012808123f0a1a6f6e6c79" .
    "5f6d657373616765735f746f5f6d656d6265725f696418052001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c756512280a" .
    "1f6f6e6c795f6d657373616765735f746f5f6d656d6265725f69645f6e75" .
    "6c6c18ed072001280812390a14646174655f616e645f74696d655f666f72" .
    "6d617418062001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512220a19646174655f616e645f74696d655f666f726d" .
    "61745f6e756c6c18ee072001280812340a0f66726f6d5f726f775f6e756d" .
    "62657218072001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565121d0a1466726f6d5f726f775f6e756d6265725f6e75" .
    "6c6c18ef072001280812370a126d61785f6e756d6265725f6f665f726f77" .
    "7318082001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512200a176d61785f6e756d6265725f6f665f726f77735f6e" .
    "756c6c18f0072001280812380a1366726f6d5f6d6573736167655f737461" .
    "74757318092001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512210a1866726f6d5f6d6573736167655f7374617475" .
    "735f6e756c6c18f1072001280812360a11746f5f6d6573736167655f7374" .
    "61747573180a2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565121f0a16746f5f6d6573736167655f737461747573" .
    "5f6e756c6c18f20720012808122f0a0a6f726465725f64657363180b2001" .
    "280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75" .
    "6512180a0f6f726465725f646573635f6e756c6c18f3072001280812320a" .
    "0d6f726465725f62795f6e69636b180c2001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c7565121b0a126f726465725f62" .
    "795f6e69636b5f6e756c6c18f40720012808123b0a17736570617261746f" .
    "725f696e5f6964656e745f76616c73180d2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512250a1c73657061726174" .
    "6f725f696e5f6964656e745f76616c735f6e756c6c18f5072001280822f5" .
    "040a08526573706f6e736512480a106d6574615f696e666f726d6174696f" .
    "6e18022003280b322e2e6473746f72652e656e67696e652e6d657461696e" .
    "666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d" .
    "65737361676518032003280b321e2e6473746f72652e656e67696e652e6d" .
    "6573736167652e4d657373616765123e0a03726f7718042003280b32312e" .
    "6473746f72652e656e67696e652e636f5f47657453656e744d6573736167" .
    "65735f50752e526573706f6e73652e526f771aad030a03526f77120f0a06" .
    "726f775f696418904e2001280512340a0e6d6573736167655f7374617475" .
    "7318914e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565123c0a16746f5f636f6d6d756e6974795f6d656d626572" .
    "5f696418924e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565122c0a076d65737361676518934e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c756512300a0a6d" .
    "6573736167655f6e6f18944e2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565123d0a156d6573736167655f646174" .
    "655f616e645f74696d6518954e2001280b321d2e6473746f72652e76616c" .
    "7565732e74696d657374616d7056616c756512410a1c746f5f636f6d6d75" .
    "6e6974795f6d656d6265725f6e69636b6e616d6518964e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c7565123f0a1a6d" .
    "6573736167655f646174655f616e645f74696d655f6368617218974e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "42560a1b696f2e6473746f72652e656e67696e652e70726f636564757265" .
    "735a37676f73646b2e6473746f72652e64652f656e67696e652f70726f63" .
    "6564757265732f636f5f47657453656e744d657373616765735f50756206" .
    "70726f746f33"
));

