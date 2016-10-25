<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetPostingsOfOnePerson_Ad.proto

namespace Dstore\Engine\Fo_GetPostingsOfOnePerson_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_id = null;
    private $person_id_null = false;
    private $forum_id = null;
    private $forum_id_null = false;
    private $from_date = null;
    private $from_date_null = false;
    private $to_date = null;
    private $to_date_null = false;
    private $include_bodies = null;
    private $include_bodies_null = false;

    public function getPersonId()
    {
        return $this->person_id;
    }

    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_id = $var;
    }

    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
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

    public function getIncludeBodies()
    {
        return $this->include_bodies;
    }

    public function setIncludeBodies(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_bodies = $var;
    }

    public function getIncludeBodiesNull()
    {
        return $this->include_bodies_null;
    }

    public function setIncludeBodiesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_bodies_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_GetPostingsOfOnePerson_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $small_body = null;
    private $posting_id = null;
    private $forum_id = null;
    private $forum_name = null;
    private $reply_to_posting_id = null;
    private $subject = null;
    private $e_mail_of_author = null;
    private $post_date_char = null;
    private $main_posting_id = null;
    private $visible = null;
    private $author = null;
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

    public function getPostingId()
    {
        return $this->posting_id;
    }

    public function setPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_id = $var;
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

    public function getForumName()
    {
        return $this->forum_name;
    }

    public function setForumName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->forum_name = $var;
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

    public function getPostDateChar()
    {
        return $this->post_date_char;
    }

    public function setPostDateChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->post_date_char = $var;
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

    public function getPostDate()
    {
        return $this->post_date;
    }

    public function setPostDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
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
    "0a9d0c0a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f476574506f7374696e67734f664f6e65506572736f6e5f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e666f5f476574506f7374" .
    "696e67734f664f6e65506572736f6e5f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f2281030a0a506172616d6574657273" .
    "122e0a09706572736f6e5f696418012001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512170a0e706572736f6e5f69" .
    "645f6e756c6c18e90720012808122d0a08666f72756d5f69641802200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12160a0d666f72756d5f69645f6e756c6c18ea072001280812300a096672" .
    "6f6d5f6461746518032001280b321d2e6473746f72652e76616c7565732e" .
    "74696d657374616d7056616c756512170a0e66726f6d5f646174655f6e75" .
    "6c6c18eb0720012808122e0a07746f5f6461746518042001280b321d2e64" .
    "73746f72652e76616c7565732e74696d657374616d7056616c756512150a" .
    "0c746f5f646174655f6e756c6c18ec072001280812330a0e696e636c7564" .
    "655f626f6469657318052001280b321b2e6473746f72652e76616c756573" .
    "2e626f6f6c65616e56616c7565121c0a13696e636c7564655f626f646965" .
    "735f6e756c6c18ed072001280822ef060a08526573706f6e736512480a10" .
    "6d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f72" .
    "652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65746149" .
    "6e666f726d6174696f6e122f0a076d65737361676518032003280b321e2e" .
    "6473746f72652e656e67696e652e6d6573736167652e4d65737361676512" .
    "450a03726f7718042003280b32382e6473746f72652e656e67696e652e66" .
    "6f5f476574506f7374696e67734f664f6e65506572736f6e5f41642e5265" .
    "73706f6e73652e526f771aa0050a03526f77120f0a06726f775f69641890" .
    "4e20012805122f0a0a736d616c6c5f626f647918914e2001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c756512300a0a706f" .
    "7374696e675f696418924e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c7565122e0a08666f72756d5f696418934e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565122f0a0a666f72756d5f6e616d6518944e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512390a137265706c79" .
    "5f746f5f706f7374696e675f696418954e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c7565122c0a077375626a6563" .
    "7418964e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c756512350a10655f6d61696c5f6f665f617574686f7218974e20" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512330a0e706f73745f646174655f6368617218984e2001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c756512350a0f6d61" .
    "696e5f706f7374696e675f696418994e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565122d0a0776697369626c65" .
    "189a4e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565122b0a06617574686f72189b4e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512310a09706f73745f" .
    "64617465189c4e2001280b321d2e6473746f72652e76616c7565732e7469" .
    "6d657374616d7056616c756512290a04626f6479189d4e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c7565425d0a1b69" .
    "6f2e6473746f72652e656e67696e652e70726f636564757265735a3e676f" .
    "73646b2e6473746f72652e64652f656e67696e652f70726f636564757265" .
    "732f666f5f476574506f7374696e67734f664f6e65506572736f6e5f4164" .
    "620670726f746f33"
));
