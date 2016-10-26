<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetPostingThread_Pu.proto

namespace Dstore\Engine\Fo_GetPostingThread_Pu;

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
    private $posting_id = null;
    private $posting_id_null = false;
    private $root_posting_id = null;
    private $root_posting_id_null = false;
    private $max_number_of_levels = null;
    private $max_number_of_levels_null = false;
    private $max_number_of_postings = null;
    private $max_number_of_postings_null = false;
    private $include_posting_bodies = null;
    private $include_posting_bodies_null = false;
    private $visibility = null;
    private $visibility_null = false;
    private $order_desc = null;
    private $order_desc_null = false;
    private $get_own_not_approved_postings = null;
    private $get_own_not_approved_postings_null = false;
    private $output_into_one_id = null;
    private $output_into_one_id_null = false;
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

    public function getRootPostingId()
    {
        return $this->root_posting_id;
    }

    public function setRootPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->root_posting_id = $var;
    }

    public function getRootPostingIdNull()
    {
        return $this->root_posting_id_null;
    }

    public function setRootPostingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->root_posting_id_null = $var;
    }

    public function getMaxNumberOfLevels()
    {
        return $this->max_number_of_levels;
    }

    public function setMaxNumberOfLevels(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_levels = $var;
    }

    public function getMaxNumberOfLevelsNull()
    {
        return $this->max_number_of_levels_null;
    }

    public function setMaxNumberOfLevelsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_number_of_levels_null = $var;
    }

    public function getMaxNumberOfPostings()
    {
        return $this->max_number_of_postings;
    }

    public function setMaxNumberOfPostings(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_postings = $var;
    }

    public function getMaxNumberOfPostingsNull()
    {
        return $this->max_number_of_postings_null;
    }

    public function setMaxNumberOfPostingsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_number_of_postings_null = $var;
    }

    public function getIncludePostingBodies()
    {
        return $this->include_posting_bodies;
    }

    public function setIncludePostingBodies(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_posting_bodies = $var;
    }

    public function getIncludePostingBodiesNull()
    {
        return $this->include_posting_bodies_null;
    }

    public function setIncludePostingBodiesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_posting_bodies_null = $var;
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

    public function getGetOwnNotApprovedPostings()
    {
        return $this->get_own_not_approved_postings;
    }

    public function setGetOwnNotApprovedPostings(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_own_not_approved_postings = $var;
    }

    public function getGetOwnNotApprovedPostingsNull()
    {
        return $this->get_own_not_approved_postings_null;
    }

    public function setGetOwnNotApprovedPostingsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_own_not_approved_postings_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_GetPostingThread_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $already_read = null;
    private $small_body = null;
    private $posting_id = null;
    private $level_no = null;
    private $reply_to_posting_id = null;
    private $subject = null;
    private $postings_in_thread = null;
    private $e_mail_of_author = null;
    private $person_id = null;
    private $is_expanded = null;
    private $main_posting_id = null;
    private $has_binaries = null;
    private $visible = null;
    private $author = null;
    private $has_successors = null;
    private $post_date = null;
    private $new_postings_in_thread = null;
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

    public function getAlreadyRead()
    {
        return $this->already_read;
    }

    public function setAlreadyRead(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->already_read = $var;
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

    public function getLevelNo()
    {
        return $this->level_no;
    }

    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_no = $var;
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

    public function getPostingsInThread()
    {
        return $this->postings_in_thread;
    }

    public function setPostingsInThread(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->postings_in_thread = $var;
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

    public function getPersonId()
    {
        return $this->person_id;
    }

    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_id = $var;
    }

    public function getIsExpanded()
    {
        return $this->is_expanded;
    }

    public function setIsExpanded(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_expanded = $var;
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

    public function getNewPostingsInThread()
    {
        return $this->new_postings_in_thread;
    }

    public function setNewPostingsInThread(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->new_postings_in_thread = $var;
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
    "0afc140a356473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f476574506f7374696e675468726561645f50752e70726f746f1224" .
    "6473746f72652e656e67696e652e666f5f476574506f7374696e67546872" .
    "6561645f50751a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f22e7090a0a506172616d657465727312400a1c706572736f6e5f69" .
    "64656e74696669636174696f6e5f76616c75657318012001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c7565122a0a217065" .
    "72736f6e5f6964656e74696669636174696f6e5f76616c7565735f6e756c" .
    "6c18e9072001280812330a0e706572736f6e5f747970655f696418022001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65121c0a13706572736f6e5f747970655f69645f6e756c6c18ea07200128" .
    "08122d0a09756e697175655f696418032001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c756512170a0e756e697175655f69" .
    "645f6e756c6c18eb0720012808122d0a08666f72756d5f69641804200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12160a0d666f72756d5f69645f6e756c6c18ec0720012808122f0a0a706f" .
    "7374696e675f696418052001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756512180a0f706f7374696e675f69645f6e75" .
    "6c6c18ed072001280812340a0f726f6f745f706f7374696e675f69641806" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565121d0a14726f6f745f706f7374696e675f69645f6e756c6c18ee07" .
    "2001280812390a146d61785f6e756d6265725f6f665f6c6576656c731807" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512220a196d61785f6e756d6265725f6f665f6c6576656c735f6e75" .
    "6c6c18ef0720012808123b0a166d61785f6e756d6265725f6f665f706f73" .
    "74696e677318082001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512240a1b6d61785f6e756d6265725f6f665f706f" .
    "7374696e67735f6e756c6c18f00720012808123b0a16696e636c7564655f" .
    "706f7374696e675f626f6469657318092001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c756512240a1b696e636c756465" .
    "5f706f7374696e675f626f646965735f6e756c6c18f10720012808122f0a" .
    "0a7669736962696c697479180a2001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512180a0f7669736962696c697479" .
    "5f6e756c6c18f20720012808122f0a0a6f726465725f64657363180b2001" .
    "280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75" .
    "6512180a0f6f726465725f646573635f6e756c6c18f3072001280812420a" .
    "1d6765745f6f776e5f6e6f745f617070726f7665645f706f7374696e6773" .
    "180c2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c7565122b0a226765745f6f776e5f6e6f745f617070726f7665645f" .
    "706f7374696e67735f6e756c6c18f4072001280812370a126f7574707574" .
    "5f696e746f5f6f6e655f6964180d2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512200a176f75747075745f696e" .
    "746f5f6f6e655f69645f6e756c6c18f50720012808123b0a177365706172" .
    "61746f725f696e5f6964656e745f76616c73180e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c756512250a1c73657061" .
    "7261746f725f696e5f6964656e745f76616c735f6e756c6c18f607200128" .
    "0822fa080a08526573706f6e736512480a106d6574615f696e666f726d61" .
    "74696f6e18022003280b322e2e6473746f72652e656e67696e652e6d6574" .
    "61696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f" .
    "0a076d65737361676518032003280b321e2e6473746f72652e656e67696e" .
    "652e6d6573736167652e4d657373616765123f0a03726f7718042003280b" .
    "32322e6473746f72652e656e67696e652e666f5f476574506f7374696e67" .
    "5468726561645f50752e526573706f6e73652e526f771ab1070a03526f77" .
    "120f0a06726f775f696418904e2001280512320a0c616c72656164795f72" .
    "65616418914e2001280b321b2e6473746f72652e76616c7565732e626f6f" .
    "6c65616e56616c7565122f0a0a736d616c6c5f626f647918924e2001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c75651230" .
    "0a0a706f7374696e675f696418934e2001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c7565122e0a086c6576656c5f6e6f" .
    "18944e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512390a137265706c795f746f5f706f7374696e675f696418" .
    "954e2001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c7565122c0a077375626a65637418964e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512380a12706f737469" .
    "6e67735f696e5f74687265616418974e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512350a10655f6d61696c5f" .
    "6f665f617574686f7218984e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565122f0a09706572736f6e5f696418994e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512310a0b69735f657870616e646564189a4e2001280b321b2e6473" .
    "746f72652e76616c7565732e626f6f6c65616e56616c756512350a0f6d61" .
    "696e5f706f7374696e675f6964189b4e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512320a0c6861735f62696e" .
    "6172696573189c4e2001280b321b2e6473746f72652e76616c7565732e62" .
    "6f6f6c65616e56616c7565122d0a0776697369626c65189d4e2001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c7565122b" .
    "0a06617574686f72189e4e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c756512340a0e6861735f737563636573736f72" .
    "73189f4e2001280b321b2e6473746f72652e76616c7565732e626f6f6c65" .
    "616e56616c7565122e0a09706f73745f6461746518a04e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c7565123c0a166e" .
    "65775f706f7374696e67735f696e5f74687265616418a14e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c756512290a" .
    "04626f647918a24e2001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756542570a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a38676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f666f5f476574506f7374696e67" .
    "5468726561645f5075620670726f746f33"
));

