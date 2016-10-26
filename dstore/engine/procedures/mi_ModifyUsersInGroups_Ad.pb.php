<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyUsersInGroups_Ad.proto

namespace Dstore\Engine\Mi_ModifyUsersInGroups_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $user_id = null;
    private $user_id_null = false;
    private $user_group_id = null;
    private $user_group_id_null = false;
    private $move_priority = null;
    private $move_priority_null = false;

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

    public function getUserGroupId()
    {
        return $this->user_group_id;
    }

    public function setUserGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_group_id = $var;
    }

    public function getUserGroupIdNull()
    {
        return $this->user_group_id_null;
    }

    public function setUserGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_group_id_null = $var;
    }

    public function getMovePriority()
    {
        return $this->move_priority;
    }

    public function setMovePriority(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->move_priority = $var;
    }

    public function getMovePriorityNull()
    {
        return $this->move_priority_null;
    }

    public function setMovePriorityNull($var)
    {
        GPBUtil::checkBool($var);
        $this->move_priority_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_ModifyUsersInGroups_Ad\Response_Row::class);
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
    "0af8050a386473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4d6f646966795573657273496e47726f7570735f41642e70726f74" .
    "6f12276473746f72652e656e67696e652e6d695f4d6f6469667955736572" .
    "73496e47726f7570735f41641a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f22f3010a0a506172616d6574657273122c0a077573" .
    "65725f696418012001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512150a0c757365725f69645f6e756c6c18e90720" .
    "01280812320a0d757365725f67726f75705f696418022001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565121b0a1275" .
    "7365725f67726f75705f69645f6e756c6c18ea072001280812320a0d6d6f" .
    "76655f7072696f7269747918032001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c7565121b0a126d6f76655f7072696f72" .
    "6974795f6e756c6c18eb072001280822e1010a08526573706f6e73651248" .
    "0a106d6574615f696e666f726d6174696f6e18022003280b322e2e647374" .
    "6f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d6574" .
    "61496e666f726d6174696f6e122f0a076d65737361676518032003280b32" .
    "1e2e6473746f72652e656e67696e652e6d6573736167652e4d6573736167" .
    "6512420a03726f7718042003280b32352e6473746f72652e656e67696e65" .
    "2e6d695f4d6f646966795573657273496e47726f7570735f41642e526573" .
    "706f6e73652e526f771a160a03526f77120f0a06726f775f696418904e20" .
    "012805425a0a1b696f2e6473746f72652e656e67696e652e70726f636564" .
    "757265735a3b676f73646b2e6473746f72652e64652f656e67696e652f70" .
    "726f636564757265732f6d695f4d6f646966795573657273496e47726f75" .
    "70735f4164620670726f746f33"
));

