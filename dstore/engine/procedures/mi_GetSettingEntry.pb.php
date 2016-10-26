<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetSettingEntry.proto

namespace Dstore\Engine\Mi_GetSettingEntry;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $user_id = null;
    private $user_id_null = false;
    private $key_variable = null;
    private $key_variable_null = false;
    private $value = null;
    private $value_null = false;
    private $select_result = null;
    private $select_result_null = false;

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

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
    }

    public function getValueNull()
    {
        return $this->value_null;
    }

    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
    }

    public function getSelectResult()
    {
        return $this->select_result;
    }

    public function setSelectResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->select_result = $var;
    }

    public function getSelectResultNull()
    {
        return $this->select_result_null;
    }

    public function setSelectResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->select_result_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $value = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetSettingEntry\Response_Row::class);
        $this->row = $var;
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

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $value = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af0060a316473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f47657453657474696e67456e7472792e70726f746f12206473746f" .
    "72652e656e67696e652e6d695f47657453657474696e67456e7472791a13" .
    "6473746f72652f76616c7565732e70726f746f1a1b6473746f72652f656e" .
    "67696e652f6d6573736167652e70726f746f1a236473746f72652f656e67" .
    "696e652f6d657461696e666f726d6174696f6e2e70726f746f22b0020a0a" .
    "506172616d6574657273122c0a07757365725f696418012001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512150a0c" .
    "757365725f69645f6e756c6c18e9072001280812300a0c6b65795f766172" .
    "6961626c6518022001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565121a0a116b65795f7661726961626c655f6e756c6c" .
    "18ea072001280812290a0576616c756518032001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512130a0a76616c75655f" .
    "6e756c6c18eb072001280812320a0d73656c6563745f726573756c741804" .
    "2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e5661" .
    "6c7565121b0a1273656c6563745f726573756c745f6e756c6c18ec072001" .
    "280822b1020a08526573706f6e736512480a106d6574615f696e666f726d" .
    "6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d65" .
    "7461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e12" .
    "2f0a076d65737361676518032003280b321e2e6473746f72652e656e6769" .
    "6e652e6d6573736167652e4d657373616765123b0a03726f771804200328" .
    "0b322e2e6473746f72652e656e67696e652e6d695f47657453657474696e" .
    "67456e7472792e526573706f6e73652e526f7712290a0576616c75651865" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "75651a420a03526f77120f0a06726f775f696418904e20012805122a0a05" .
    "76616c756518914e2001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756542530a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a34676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f6d695f47657453657474696e67" .
    "456e747279620670726f746f33"
));

