<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetUserInfo_Ad.proto

namespace Dstore\Engine\Mi_GetUserInfo_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $user_id = null;
    private $user_id_null = false;
    private $include_special_user = null;
    private $include_special_user_null = false;
    private $get_assigned_groups = null;
    private $get_assigned_groups_null = false;

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_id = $var;
    }

    public function getUserIdNull()
    {
        return $this->user_id_null;
    }

    public function setUserIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_id_null = $var;
    }

    public function getIncludeSpecialUser()
    {
        return $this->include_special_user;
    }

    public function setIncludeSpecialUser(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_special_user = $var;
    }

    public function getIncludeSpecialUserNull()
    {
        return $this->include_special_user_null;
    }

    public function setIncludeSpecialUserNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_special_user_null = $var;
    }

    public function getGetAssignedGroups()
    {
        return $this->get_assigned_groups;
    }

    public function setGetAssignedGroups(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_assigned_groups = $var;
    }

    public function getGetAssignedGroupsNull()
    {
        return $this->get_assigned_groups_null;
    }

    public function setGetAssignedGroupsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_assigned_groups_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetUserInfo_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $user_name = null;
    private $user_id = null;
    private $group_name = null;
    private $group_description = null;
    private $user_group_id = null;
    private $sort_no = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getUserName()
    {
        return $this->user_name;
    }

    public function setUserName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->user_name = $var;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_id = $var;
    }

    public function getGroupName()
    {
        return $this->group_name;
    }

    public function setGroupName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->group_name = $var;
    }

    public function getGroupDescription()
    {
        return $this->group_description;
    }

    public function setGroupDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->group_description = $var;
    }

    public function getUserGroupId()
    {
        return $this->user_group_id;
    }

    public function setUserGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_group_id = $var;
    }

    public function getSortNo()
    {
        return $this->sort_no;
    }

    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->sort_no = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aa3080a306473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f47657455736572496e666f5f41642e70726f746f121f6473746f72" .
    "652e656e67696e652e6d695f47657455736572496e666f5f41641a136473" .
    "746f72652f76616c7565732e70726f746f1a1b6473746f72652f656e6769" .
    "6e652f6d6573736167652e70726f746f1a236473746f72652f656e67696e" .
    "652f6d657461696e666f726d6174696f6e2e70726f746f228d020a0a5061" .
    "72616d6574657273122c0a07757365725f696418012001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512150a0c7573" .
    "65725f69645f6e756c6c18e9072001280812390a14696e636c7564655f73" .
    "70656369616c5f7573657218022001280b321b2e6473746f72652e76616c" .
    "7565732e626f6f6c65616e56616c756512220a19696e636c7564655f7370" .
    "656369616c5f757365725f6e756c6c18ea072001280812380a136765745f" .
    "61737369676e65645f67726f75707318032001280b321b2e6473746f7265" .
    "2e76616c7565732e626f6f6c65616e56616c756512210a186765745f6173" .
    "7369676e65645f67726f7570735f6e756c6c18eb0720012808228a040a08" .
    "526573706f6e736512480a106d6574615f696e666f726d6174696f6e1802" .
    "2003280b322e2e6473746f72652e656e67696e652e6d657461696e666f72" .
    "6d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d657373" .
    "61676518032003280b321e2e6473746f72652e656e67696e652e6d657373" .
    "6167652e4d657373616765123a0a03726f7718042003280b322d2e647374" .
    "6f72652e656e67696e652e6d695f47657455736572496e666f5f41642e52" .
    "6573706f6e73652e526f771ac6020a03526f77120f0a06726f775f696418" .
    "904e20012805122e0a09757365725f6e616d6518914e2001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c7565122d0a077573" .
    "65725f696418924e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512300a0a67726f75705f6e616d6518a19c0120" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512370a1167726f75705f6465736372697074696f6e18a29c012001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c75651234" .
    "0a0d757365725f67726f75705f696418a59c012001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c7565122e0a07736f7274" .
    "5f6e6f18a69c012001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756542520a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a33676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f6d695f47657455736572496e66" .
    "6f5f4164620670726f746f33"
));
