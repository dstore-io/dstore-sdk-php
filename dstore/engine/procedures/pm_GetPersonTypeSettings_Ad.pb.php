<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonTypeSettings_Ad.proto

namespace Dstore\Engine\Pm_GetPersonTypeSettings_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $key_variable = null;
    private $key_variable_null = false;

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

    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->key_variable = $var;
    }

    public function getKeyVariableNull()
    {
        return $this->key_variable_null;
    }

    public function setKeyVariableNull($var)
    {
        GPBUtil::checkBool($var);
        $this->key_variable_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetPersonTypeSettings_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $person_type_description = null;
    private $value = null;
    private $key_variable = null;
    private $person_type_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getPersonTypeDescription()
    {
        return $this->person_type_description;
    }

    public function setPersonTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->person_type_description = $var;
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

    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->key_variable = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a8e070a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f476574506572736f6e5479706553657474696e67735f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e706d5f476574506572736f" .
    "6e5479706553657474696e67735f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22ad010a0a506172616d65746572731233" .
    "0a0e706572736f6e5f747970655f696418012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565121c0a13706572736f" .
    "6e5f747970655f69645f6e756c6c18e9072001280812300a0c6b65795f76" .
    "61726961626c6518022001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565121a0a116b65795f7661726961626c655f6e75" .
    "6c6c18ea072001280822b7030a08526573706f6e736512480a106d657461" .
    "5f696e666f726d6174696f6e18022003280b322e2e6473746f72652e656e" .
    "67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f72" .
    "6d6174696f6e122f0a076d65737361676518032003280b321e2e6473746f" .
    "72652e656e67696e652e6d6573736167652e4d65737361676512440a0372" .
    "6f7718042003280b32372e6473746f72652e656e67696e652e706d5f4765" .
    "74506572736f6e5479706553657474696e67735f41642e526573706f6e73" .
    "652e526f771ae9010a03526f77120f0a06726f775f696418904e20012805" .
    "123c0a17706572736f6e5f747970655f6465736372697074696f6e18914e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "7565122a0a0576616c756518924e2001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512310a0c6b65795f766172696162" .
    "6c6518934e2001280b321a2e6473746f72652e76616c7565732e73747269" .
    "6e6756616c756512340a0e706572736f6e5f747970655f696418944e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65425c0a1b696f2e6473746f72652e656e67696e652e70726f6365647572" .
    "65735a3d676f73646b2e6473746f72652e64652f656e67696e652f70726f" .
    "636564757265732f706d5f476574506572736f6e5479706553657474696e" .
    "67735f4164620670726f746f33"
));

