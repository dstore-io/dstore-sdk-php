<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_RemoveVoucherFromTrolley_Pu.proto

namespace Dstore\Engine\Om_RemoveVoucherFromTrolley_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $voucher_code = null;
    private $voucher_code_null = false;
    private $unique_id = null;
    private $unique_id_null = false;

    public function getVoucherCode()
    {
        return $this->voucher_code;
    }

    public function setVoucherCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->voucher_code = $var;
    }

    public function getVoucherCodeNull()
    {
        return $this->voucher_code_null;
    }

    public function setVoucherCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->voucher_code_null = $var;
    }

    public function getUniqueId()
    {
        return $this->unique_id;
    }

    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->unique_id = $var;
    }

    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_RemoveVoucherFromTrolley_Pu\Response_Row::class);
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
    "0abb050a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f52656d6f7665566f756368657246726f6d54726f6c6c65795f5075" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f52656d6f76" .
    "65566f756368657246726f6d54726f6c6c65795f50751a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22a2010a0a506172616d65" .
    "7465727312300a0c766f75636865725f636f646518012001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c7565121a0a11766f" .
    "75636865725f636f64655f6e756c6c18e90720012808122d0a09756e6971" .
    "75655f696418022001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c756512170a0e756e697175655f69645f6e756c6c18ea07" .
    "2001280822e6010a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d65737361676512470a03726f77180420" .
    "03280b323a2e6473746f72652e656e67696e652e6f6d5f52656d6f766556" .
    "6f756368657246726f6d54726f6c6c65795f50752e526573706f6e73652e" .
    "526f771a160a03526f77120f0a06726f775f696418904e20012805425f0a" .
    "1b696f2e6473746f72652e656e67696e652e70726f636564757265735a40" .
    "676f73646b2e6473746f72652e64652f656e67696e652f70726f63656475" .
    "7265732f6f6d5f52656d6f7665566f756368657246726f6d54726f6c6c65" .
    "795f5075620670726f746f33"
));

