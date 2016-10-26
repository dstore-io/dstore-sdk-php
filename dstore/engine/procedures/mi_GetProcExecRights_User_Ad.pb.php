<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetProcExecRights_User_Ad.proto

namespace Dstore\Engine\Mi_GetProcExecRights_User_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $user_id = null;
    private $user_id_null = false;
    private $procedure_id = null;
    private $procedure_id_null = false;
    private $procedure_category_id = null;
    private $procedure_category_id_null = false;

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

    public function getProcedureId()
    {
        return $this->procedure_id;
    }

    public function setProcedureId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->procedure_id = $var;
    }

    public function getProcedureIdNull()
    {
        return $this->procedure_id_null;
    }

    public function setProcedureIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_id_null = $var;
    }

    public function getProcedureCategoryId()
    {
        return $this->procedure_category_id;
    }

    public function setProcedureCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->procedure_category_id = $var;
    }

    public function getProcedureCategoryIdNull()
    {
        return $this->procedure_category_id_null;
    }

    public function setProcedureCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_category_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetProcExecRights_User_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $execution_right = null;
    private $procedure_id = null;
    private $user_name = null;
    private $procedure_name = null;
    private $user_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getExecutionRight()
    {
        return $this->execution_right;
    }

    public function setExecutionRight(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->execution_right = $var;
    }

    public function getProcedureId()
    {
        return $this->procedure_id;
    }

    public function setProcedureId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->procedure_id = $var;
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

    public function getProcedureName()
    {
        return $this->procedure_name;
    }

    public function setProcedureName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->procedure_name = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a92080a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f47657450726f63457865635269676874735f557365725f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e6d695f47657450726f63" .
    "457865635269676874735f557365725f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f2281020a0a506172616d6574657273" .
    "122c0a07757365725f696418012001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512150a0c757365725f69645f6e75" .
    "6c6c18e9072001280812310a0c70726f6365647572655f69641802200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "121a0a1170726f6365647572655f69645f6e756c6c18ea0720012808123a" .
    "0a1570726f6365647572655f63617465676f72795f696418032001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651223" .
    "0a1a70726f6365647572655f63617465676f72795f69645f6e756c6c18eb" .
    "072001280822e4030a08526573706f6e736512480a106d6574615f696e66" .
    "6f726d6174696f6e18022003280b322e2e6473746f72652e656e67696e65" .
    "2e6d657461696e666f726d6174696f6e2e4d657461496e666f726d617469" .
    "6f6e122f0a076d65737361676518032003280b321e2e6473746f72652e65" .
    "6e67696e652e6d6573736167652e4d65737361676512450a03726f771804" .
    "2003280b32382e6473746f72652e656e67696e652e6d695f47657450726f" .
    "63457865635269676874735f557365725f41642e526573706f6e73652e52" .
    "6f771a95020a03526f77120f0a06726f775f696418904e2001280512350a" .
    "0f657865637574696f6e5f726967687418914e2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512320a0c70726f63" .
    "65647572655f696418924e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c7565122e0a09757365725f6e616d6518934e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "756512330a0e70726f6365647572655f6e616d6518944e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c7565122d0a0775" .
    "7365725f696418954e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c7565425d0a1b696f2e6473746f72652e656e6769" .
    "6e652e70726f636564757265735a3e676f73646b2e6473746f72652e6465" .
    "2f656e67696e652f70726f636564757265732f6d695f47657450726f6345" .
    "7865635269676874735f557365725f4164620670726f746f33"
));

