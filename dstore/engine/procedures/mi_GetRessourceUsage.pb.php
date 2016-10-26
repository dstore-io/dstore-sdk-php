<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetRessourceUsage.proto

namespace Dstore\Engine\Mi_GetRessourceUsage;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $cpu = null;
    private $cpu_null = false;
    private $physicalio = null;
    private $physicalio_null = false;
    private $select_result = null;
    private $select_result_null = false;

    public function getCpu()
    {
        return $this->cpu;
    }

    public function setCpu(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->cpu = $var;
    }

    public function getCpuNull()
    {
        return $this->cpu_null;
    }

    public function setCpuNull($var)
    {
        GPBUtil::checkBool($var);
        $this->cpu_null = $var;
    }

    public function getPhysicalio()
    {
        return $this->physicalio;
    }

    public function setPhysicalio(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->physicalio = $var;
    }

    public function getPhysicalioNull()
    {
        return $this->physicalio_null;
    }

    public function setPhysicalioNull($var)
    {
        GPBUtil::checkBool($var);
        $this->physicalio_null = $var;
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
    private $cpu = null;
    private $physicalio = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetRessourceUsage\Response_Row::class);
        $this->row = $var;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function setCpu(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->cpu = $var;
    }

    public function getPhysicalio()
    {
        return $this->physicalio;
    }

    public function setPhysicalio(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->physicalio = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $c_p_u = null;
    private $physical_i_o = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getCPU()
    {
        return $this->c_p_u;
    }

    public function setCPU(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->c_p_u = $var;
    }

    public function getPhysicalIO()
    {
        return $this->physical_i_o;
    }

    public function setPhysicalIO(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->physical_i_o = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a92070a336473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f476574526573736f7572636555736167652e70726f746f12226473" .
    "746f72652e656e67696e652e6d695f476574526573736f75726365557361" .
    "67651a136473746f72652f76616c7565732e70726f746f1a1b6473746f72" .
    "652f656e67696e652f6d6573736167652e70726f746f1a236473746f7265" .
    "2f656e67696e652f6d657461696e666f726d6174696f6e2e70726f746f22" .
    "e5010a0a506172616d657465727312280a0363707518012001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512110a08" .
    "6370755f6e756c6c18e90720012808122f0a0a706879736963616c696f18" .
    "022001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c756512180a0f706879736963616c696f5f6e756c6c18ea0720012808" .
    "12320a0d73656c6563745f726573756c7418032001280b321b2e6473746f" .
    "72652e76616c7565732e626f6f6c65616e56616c7565121b0a1273656c65" .
    "63745f726573756c745f6e756c6c18eb07200128082298030a0852657370" .
    "6f6e736512480a106d6574615f696e666f726d6174696f6e18022003280b" .
    "322e2e6473746f72652e656e67696e652e6d657461696e666f726d617469" .
    "6f6e2e4d657461496e666f726d6174696f6e122f0a076d65737361676518" .
    "032003280b321e2e6473746f72652e656e67696e652e6d6573736167652e" .
    "4d657373616765123d0a03726f7718042003280b32302e6473746f72652e" .
    "656e67696e652e6d695f476574526573736f7572636555736167652e5265" .
    "73706f6e73652e526f7712280a0363707518652001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c7565122f0a0a70687973" .
    "6963616c696f18662001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c75651a770a03526f77120f0a06726f775f69641890" .
    "4e20012805122b0a05635f705f7518914e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512320a0c706879736963" .
    "616c5f695f6f18924e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c756542550a1b696f2e6473746f72652e656e6769" .
    "6e652e70726f636564757265735a36676f73646b2e6473746f72652e6465" .
    "2f656e67696e652f70726f636564757265732f6d695f476574526573736f" .
    "757263655573616765620670726f746f33"
));

