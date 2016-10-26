<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetPosting_Pu.proto

namespace Dstore\Engine\Fo_GetPosting_Pu;

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
    private $posting_id = null;
    private $posting_id_null = false;
    private $additional_infos = null;
    private $additional_infos_null = false;
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

    public function getPostingId()
    {
        return $this->posting_id;
    }

    public function setPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_id = $var;
    }

    public function getPostingIdNull()
    {
        return $this->posting_id_null;
    }

    public function setPostingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_id_null = $var;
    }

    public function getAdditionalInfos()
    {
        return $this->additional_infos;
    }

    public function setAdditionalInfos(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->additional_infos = $var;
    }

    public function getAdditionalInfosNull()
    {
        return $this->additional_infos_null;
    }

    public function setAdditionalInfosNull($var)
    {
        GPBUtil::checkBool($var);
        $this->additional_infos_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_GetPosting_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $small_body = null;
    private $forum_id = null;
    private $value3 = null;
    private $reply_to_posting_id = null;
    private $value1 = null;
    private $value2 = null;
    private $subject = null;
    private $e_mail_of_author = null;
    private $author_person_id = null;
    private $main_posting_id = null;
    private $has_binaries = null;
    private $visible = null;
    private $author = null;
    private $has_successors = null;
    private $post_date = null;
    private $body = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getSmallBody()
    {
        return $this->small_body;
    }

    public function setSmallBody(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->small_body = $var;
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

    public function getValue3()
    {
        return $this->value3;
    }

    public function setValue3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value3 = $var;
    }

    public function getReplyToPostingId()
    {
        return $this->reply_to_posting_id;
    }

    public function setReplyToPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->reply_to_posting_id = $var;
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

    public function getValue2()
    {
        return $this->value2;
    }

    public function setValue2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value2 = $var;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->subject = $var;
    }

    public function getEMailOfAuthor()
    {
        return $this->e_mail_of_author;
    }

    public function setEMailOfAuthor(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->e_mail_of_author = $var;
    }

    public function getAuthorPersonId()
    {
        return $this->author_person_id;
    }

    public function setAuthorPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->author_person_id = $var;
    }

    public function getMainPostingId()
    {
        return $this->main_posting_id;
    }

    public function setMainPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->main_posting_id = $var;
    }

    public function getHasBinaries()
    {
        return $this->has_binaries;
    }

    public function setHasBinaries(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->has_binaries = $var;
    }

    public function getVisible()
    {
        return $this->visible;
    }

    public function setVisible(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->visible = $var;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->author = $var;
    }

    public function getHasSuccessors()
    {
        return $this->has_successors;
    }

    public function setHasSuccessors(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->has_successors = $var;
    }

    public function getPostDate()
    {
        return $this->post_date;
    }

    public function setPostDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->post_date = $var;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->body = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a950e0a2f6473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f476574506f7374696e675f50752e70726f746f121e6473746f7265" .
    "2e656e67696e652e666f5f476574506f7374696e675f50751a136473746f" .
    "72652f76616c7565732e70726f746f1a1b6473746f72652f656e67696e65" .
    "2f6d6573736167652e70726f746f1a236473746f72652f656e67696e652f" .
    "6d657461696e666f726d6174696f6e2e70726f746f229b040a0a50617261" .
    "6d657465727312400a1c706572736f6e5f6964656e74696669636174696f" .
    "6e5f76616c75657318012001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c7565122a0a21706572736f6e5f6964656e746966" .
    "69636174696f6e5f76616c7565735f6e756c6c18e9072001280812330a0e" .
    "706572736f6e5f747970655f696418022001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565121c0a13706572736f6e5f" .
    "747970655f69645f6e756c6c18ea0720012808122d0a09756e697175655f" .
    "696418032001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c756512170a0e756e697175655f69645f6e756c6c18eb07200128" .
    "08122f0a0a706f7374696e675f696418042001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512180a0f706f7374696e" .
    "675f69645f6e756c6c18ec072001280812350a106164646974696f6e616c" .
    "5f696e666f7318052001280b321b2e6473746f72652e76616c7565732e62" .
    "6f6f6c65616e56616c7565121e0a156164646974696f6e616c5f696e666f" .
    "735f6e756c6c18ed0720012808123b0a17736570617261746f725f696e5f" .
    "6964656e745f76616c7318062001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756512250a1c736570617261746f725f696e" .
    "5f6964656e745f76616c735f6e756c6c18ee072001280822f1070a085265" .
    "73706f6e736512480a106d6574615f696e666f726d6174696f6e18022003" .
    "280b322e2e6473746f72652e656e67696e652e6d657461696e666f726d61" .
    "74696f6e2e4d657461496e666f726d6174696f6e122f0a076d6573736167" .
    "6518032003280b321e2e6473746f72652e656e67696e652e6d6573736167" .
    "652e4d65737361676512390a03726f7718042003280b322c2e6473746f72" .
    "652e656e67696e652e666f5f476574506f7374696e675f50752e52657370" .
    "6f6e73652e526f771aae060a03526f77120f0a06726f775f696418904e20" .
    "012805122f0a0a736d616c6c5f626f647918914e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565122e0a08666f7275" .
    "6d5f696418924e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565122b0a0676616c75653318934e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c756512390a1372" .
    "65706c795f746f5f706f7374696e675f696418944e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565122b0a067661" .
    "6c75653118954e2001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565122b0a0676616c75653218964e2001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c7565122c0a077375" .
    "626a65637418974e2001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756512350a10655f6d61696c5f6f665f617574686f72" .
    "18984e2001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c756512360a10617574686f725f706572736f6e5f696418994e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512350a0f6d61696e5f706f7374696e675f6964189a4e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512320a0c" .
    "6861735f62696e6172696573189b4e2001280b321b2e6473746f72652e76" .
    "616c7565732e626f6f6c65616e56616c7565122d0a0776697369626c6518" .
    "9c4e2001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c7565122b0a06617574686f72189d4e2001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512340a0e6861735f7375" .
    "63636573736f7273189e4e2001280b321b2e6473746f72652e76616c7565" .
    "732e626f6f6c65616e56616c7565122e0a09706f73745f64617465189f4e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "756512290a04626f647918a04e2001280b321a2e6473746f72652e76616c" .
    "7565732e737472696e6756616c756542510a1b696f2e6473746f72652e65" .
    "6e67696e652e70726f636564757265735a32676f73646b2e6473746f7265" .
    "2e64652f656e67696e652f70726f636564757265732f666f5f476574506f" .
    "7374696e675f5075620670726f746f33"
));

