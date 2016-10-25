<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTRITriggerReplFuncts_Ad.proto

namespace Dstore\Engine\Mi_GetTRITriggerReplFuncts_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $trigger_id = null;
    private $trigger_id_null = false;
    private $function_definition_l_i_k_e = null;
    private $function_definition_l_i_k_e_null = false;
    private $replacement_function = null;
    private $replacement_function_null = false;

    public function getTriggerId()
    {
        return $this->trigger_id;
    }

    public function setTriggerId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->trigger_id = $var;
    }

    public function getTriggerIdNull()
    {
        return $this->trigger_id_null;
    }

    public function setTriggerIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->trigger_id_null = $var;
    }

    public function getFunctionDefinitionLIKE()
    {
        return $this->function_definition_l_i_k_e;
    }

    public function setFunctionDefinitionLIKE(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->function_definition_l_i_k_e = $var;
    }

    public function getFunctionDefinitionLIKENull()
    {
        return $this->function_definition_l_i_k_e_null;
    }

    public function setFunctionDefinitionLIKENull($var)
    {
        GPBUtil::checkBool($var);
        $this->function_definition_l_i_k_e_null = $var;
    }

    public function getReplacementFunction()
    {
        return $this->replacement_function;
    }

    public function setReplacementFunction(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->replacement_function = $var;
    }

    public function getReplacementFunctionNull()
    {
        return $this->replacement_function_null;
    }

    public function setReplacementFunctionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->replacement_function_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetTRITriggerReplFuncts_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $description = null;
    private $function_definition = null;
    private $replace_string = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->description = $var;
    }

    public function getFunctionDefinition()
    {
        return $this->function_definition;
    }

    public function setFunctionDefinition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->function_definition = $var;
    }

    public function getReplaceString()
    {
        return $this->replace_string;
    }

    public function setReplaceString(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->replace_string = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad8070a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f476574545249547269676765725265706c46756e6374735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e6d695f476574545249" .
    "547269676765725265706c46756e6374735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22a1020a0a506172616d657465" .
    "7273122f0a0a747269676765725f696418012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512180a0f7472696767" .
    "65725f69645f6e756c6c18e90720012808123f0a1b66756e6374696f6e5f" .
    "646566696e6974696f6e5f6c5f695f6b5f6518022001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c756512290a2066756e63" .
    "74696f6e5f646566696e6974696f6e5f6c5f695f6b5f655f6e756c6c18ea" .
    "072001280812380a147265706c6163656d656e745f66756e6374696f6e18" .
    "032001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c756512220a197265706c6163656d656e745f66756e6374696f6e5f6e75" .
    "6c6c18eb07200128082287030a08526573706f6e736512480a106d657461" .
    "5f696e666f726d6174696f6e18022003280b322e2e6473746f72652e656e" .
    "67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f72" .
    "6d6174696f6e122f0a076d65737361676518032003280b321e2e6473746f" .
    "72652e656e67696e652e6d6573736167652e4d65737361676512460a0372" .
    "6f7718042003280b32392e6473746f72652e656e67696e652e6d695f4765" .
    "74545249547269676765725265706c46756e6374735f41642e526573706f" .
    "6e73652e526f771ab7010a03526f77120f0a06726f775f696418904e2001" .
    "280512300a0b6465736372697074696f6e18914e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c756512380a1366756e63" .
    "74696f6e5f646566696e6974696f6e18924e2001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512330a0e7265706c6163" .
    "655f737472696e6718934e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c7565425e0a1b696f2e6473746f72652e656e67" .
    "696e652e70726f636564757265735a3f676f73646b2e6473746f72652e64" .
    "652f656e67696e652f70726f636564757265732f6d695f47657454524954" .
    "7269676765725265706c46756e6374735f4164620670726f746f33"
));
