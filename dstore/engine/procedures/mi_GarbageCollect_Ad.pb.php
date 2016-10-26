<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GarbageCollect_Ad.proto

namespace Dstore\Engine\Mi_GarbageCollect_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $check_for_correct_date = null;
    private $check_for_correct_date_null = false;
    private $tables_to_garbage_collect = null;
    private $tables_to_garbage_collect_null = false;
    private $print_status_msg = null;
    private $print_status_msg_null = false;

    public function getCheckForCorrectDate()
    {
        return $this->check_for_correct_date;
    }

    public function setCheckForCorrectDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->check_for_correct_date = $var;
    }

    public function getCheckForCorrectDateNull()
    {
        return $this->check_for_correct_date_null;
    }

    public function setCheckForCorrectDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_for_correct_date_null = $var;
    }

    public function getTablesToGarbageCollect()
    {
        return $this->tables_to_garbage_collect;
    }

    public function setTablesToGarbageCollect(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->tables_to_garbage_collect = $var;
    }

    public function getTablesToGarbageCollectNull()
    {
        return $this->tables_to_garbage_collect_null;
    }

    public function setTablesToGarbageCollectNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tables_to_garbage_collect_null = $var;
    }

    public function getPrintStatusMsg()
    {
        return $this->print_status_msg;
    }

    public function setPrintStatusMsg(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->print_status_msg = $var;
    }

    public function getPrintStatusMsgNull()
    {
        return $this->print_status_msg_null;
    }

    public function setPrintStatusMsgNull($var)
    {
        GPBUtil::checkBool($var);
        $this->print_status_msg_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GarbageCollect_Ad\Response_Row::class);
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
    "0a9f060a336473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f47617262616765436f6c6c6563745f41642e70726f746f12226473" .
    "746f72652e656e67696e652e6d695f47617262616765436f6c6c6563745f" .
    "41641a136473746f72652f76616c7565732e70726f746f1a1b6473746f72" .
    "652f656e67696e652f6d6573736167652e70726f746f1a236473746f7265" .
    "2f656e67696e652f6d657461696e666f726d6174696f6e2e70726f746f22" .
    "ae020a0a506172616d6574657273123b0a16636865636b5f666f725f636f" .
    "72726563745f6461746518012001280b321b2e6473746f72652e76616c75" .
    "65732e626f6f6c65616e56616c756512240a1b636865636b5f666f725f63" .
    "6f72726563745f646174655f6e756c6c18e90720012808123d0a19746162" .
    "6c65735f746f5f676172626167655f636f6c6c65637418022001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512270a1e" .
    "7461626c65735f746f5f676172626167655f636f6c6c6563745f6e756c6c" .
    "18ea072001280812350a107072696e745f7374617475735f6d7367180320" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565121e0a157072696e745f7374617475735f6d73675f6e756c6c18eb07" .
    "2001280822dc010a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d657373616765123d0a03726f77180420" .
    "03280b32302e6473746f72652e656e67696e652e6d695f47617262616765" .
    "436f6c6c6563745f41642e526573706f6e73652e526f771a160a03526f77" .
    "120f0a06726f775f696418904e2001280542550a1b696f2e6473746f7265" .
    "2e656e67696e652e70726f636564757265735a36676f73646b2e6473746f" .
    "72652e64652f656e67696e652f70726f636564757265732f6d695f476172" .
    "62616765436f6c6c6563745f4164620670726f746f33"
));

