<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPersonsInGroups_Ad.proto

namespace Dstore\Engine\Pm_ModifyPersonsInGroups_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_id = null;
    private $person_id_null = false;
    private $group_id = null;
    private $group_id_null = false;
    private $revoke = null;
    private $revoke_null = false;

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

    public function getGroupId()
    {
        return $this->group_id;
    }

    public function setGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->group_id = $var;
    }

    public function getGroupIdNull()
    {
        return $this->group_id_null;
    }

    public function setGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->group_id_null = $var;
    }

    public function getRevoke()
    {
        return $this->revoke;
    }

    public function setRevoke(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->revoke = $var;
    }

    public function getRevokeNull()
    {
        return $this->revoke_null;
    }

    public function setRevokeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->revoke_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_ModifyPersonsInGroups_Ad\Response_Row::class);
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
    "0aec050a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f4d6f64696679506572736f6e73496e47726f7570735f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e706d5f4d6f646966795065" .
    "72736f6e73496e47726f7570735f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22df010a0a506172616d6574657273122e" .
    "0a09706572736f6e5f696418012001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512170a0e706572736f6e5f69645f" .
    "6e756c6c18e90720012808122d0a0867726f75705f696418022001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651216" .
    "0a0d67726f75705f69645f6e756c6c18ea0720012808122b0a067265766f" .
    "6b6518032001280b321b2e6473746f72652e76616c7565732e626f6f6c65" .
    "616e56616c756512140a0b7265766f6b655f6e756c6c18eb072001280822" .
    "e3010a08526573706f6e736512480a106d6574615f696e666f726d617469" .
    "6f6e18022003280b322e2e6473746f72652e656e67696e652e6d65746169" .
    "6e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a07" .
    "6d65737361676518032003280b321e2e6473746f72652e656e67696e652e" .
    "6d6573736167652e4d65737361676512440a03726f7718042003280b3237" .
    "2e6473746f72652e656e67696e652e706d5f4d6f64696679506572736f6e" .
    "73496e47726f7570735f41642e526573706f6e73652e526f771a160a0352" .
    "6f77120f0a06726f775f696418904e20012805425c0a1b696f2e6473746f" .
    "72652e656e67696e652e70726f636564757265735a3d676f73646b2e6473" .
    "746f72652e64652f656e67696e652f70726f636564757265732f706d5f4d" .
    "6f64696679506572736f6e73496e47726f7570735f4164620670726f746f" .
    "33"
));

