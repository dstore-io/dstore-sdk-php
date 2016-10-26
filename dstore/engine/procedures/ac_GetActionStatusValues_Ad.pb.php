<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/ac_GetActionStatusValues_Ad.proto

namespace Dstore\Engine\Ac_GetActionStatusValues_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $command_id = null;
    private $command_id_null = false;
    private $status_category_id = null;
    private $status_category_id_null = false;

    public function getCommandId()
    {
        return $this->command_id;
    }

    public function setCommandId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->command_id = $var;
    }

    public function getCommandIdNull()
    {
        return $this->command_id_null;
    }

    public function setCommandIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->command_id_null = $var;
    }

    public function getStatusCategoryId()
    {
        return $this->status_category_id;
    }

    public function setStatusCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->status_category_id = $var;
    }

    public function getStatusCategoryIdNull()
    {
        return $this->status_category_id_null;
    }

    public function setStatusCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->status_category_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Ac_GetActionStatusValues_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $status = null;
    private $category_sort_no = null;
    private $status_description = null;
    private $category_description = null;
    private $command_id = null;
    private $sort_no = null;
    private $detailed_description = null;
    private $status_category_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->status = $var;
    }

    public function getCategorySortNo()
    {
        return $this->category_sort_no;
    }

    public function setCategorySortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->category_sort_no = $var;
    }

    public function getStatusDescription()
    {
        return $this->status_description;
    }

    public function setStatusDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->status_description = $var;
    }

    public function getCategoryDescription()
    {
        return $this->category_description;
    }

    public function setCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->category_description = $var;
    }

    public function getCommandId()
    {
        return $this->command_id;
    }

    public function setCommandId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->command_id = $var;
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

    public function getDetailedDescription()
    {
        return $this->detailed_description;
    }

    public function setDetailedDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->detailed_description = $var;
    }

    public function getStatusCategoryId()
    {
        return $this->status_category_id;
    }

    public function setStatusCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->status_category_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af0080a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "61635f476574416374696f6e53746174757356616c7565735f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e61635f476574416374696f" .
    "6e53746174757356616c7565735f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22b2010a0a506172616d6574657273122f" .
    "0a0a636f6d6d616e645f696418012001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512180a0f636f6d6d616e645f69" .
    "645f6e756c6c18e9072001280812370a127374617475735f63617465676f" .
    "72795f696418022001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512200a177374617475735f63617465676f72795f" .
    "69645f6e756c6c18ea07200128082294050a08526573706f6e736512480a" .
    "106d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f" .
    "72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461" .
    "496e666f726d6174696f6e122f0a076d65737361676518032003280b321e" .
    "2e6473746f72652e656e67696e652e6d6573736167652e4d657373616765" .
    "12440a03726f7718042003280b32372e6473746f72652e656e67696e652e" .
    "61635f476574416374696f6e53746174757356616c7565735f41642e5265" .
    "73706f6e73652e526f771ac6030a03526f77120f0a06726f775f69641890" .
    "4e20012805122c0a0673746174757318914e2001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512360a106361746567" .
    "6f72795f736f72745f6e6f18924e2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512370a127374617475735f6465" .
    "736372697074696f6e18934e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756512390a1463617465676f72795f646573" .
    "6372697074696f6e18944e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c756512300a0a636f6d6d616e645f696418954e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565122d0a07736f72745f6e6f18964e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512390a1464657461696c" .
    "65645f6465736372697074696f6e18974e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512380a127374617475735f" .
    "63617465676f72795f696418984e2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c7565425c0a1b696f2e6473746f7265" .
    "2e656e67696e652e70726f636564757265735a3d676f73646b2e6473746f" .
    "72652e64652f656e67696e652f70726f636564757265732f61635f476574" .
    "416374696f6e53746174757356616c7565735f4164620670726f746f33"
));

