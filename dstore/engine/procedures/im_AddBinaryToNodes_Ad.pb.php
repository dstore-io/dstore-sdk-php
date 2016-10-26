<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_AddBinaryToNodes_Ad.proto

namespace Dstore\Engine\Im_AddBinaryToNodes_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $binary_code_id = null;
    private $binary_code_id_null = false;
    private $node_ids = null;
    private $node_ids_null = false;
    private $from_date = null;
    private $from_date_null = false;
    private $to_date = null;
    private $to_date_null = false;
    private $from_time = null;
    private $from_time_null = false;
    private $to_time = null;
    private $to_time_null = false;
    private $auto_continue = null;
    private $auto_continue_null = false;

    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->binary_code_id = $var;
    }

    public function getBinaryCodeIdNull()
    {
        return $this->binary_code_id_null;
    }

    public function setBinaryCodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_code_id_null = $var;
    }

    public function getNodeIds()
    {
        return $this->node_ids;
    }

    public function setNodeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->node_ids = $var;
    }

    public function getNodeIdsNull()
    {
        return $this->node_ids_null;
    }

    public function setNodeIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_ids_null = $var;
    }

    public function getFromDate()
    {
        return $this->from_date;
    }

    public function setFromDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->from_date = $var;
    }

    public function getFromDateNull()
    {
        return $this->from_date_null;
    }

    public function setFromDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_date_null = $var;
    }

    public function getToDate()
    {
        return $this->to_date;
    }

    public function setToDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->to_date = $var;
    }

    public function getToDateNull()
    {
        return $this->to_date_null;
    }

    public function setToDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_date_null = $var;
    }

    public function getFromTime()
    {
        return $this->from_time;
    }

    public function setFromTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->from_time = $var;
    }

    public function getFromTimeNull()
    {
        return $this->from_time_null;
    }

    public function setFromTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_time_null = $var;
    }

    public function getToTime()
    {
        return $this->to_time;
    }

    public function setToTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->to_time = $var;
    }

    public function getToTimeNull()
    {
        return $this->to_time_null;
    }

    public function setToTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_time_null = $var;
    }

    public function getAutoContinue()
    {
        return $this->auto_continue;
    }

    public function setAutoContinue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->auto_continue = $var;
    }

    public function getAutoContinueNull()
    {
        return $this->auto_continue_null;
    }

    public function setAutoContinueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_continue_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_AddBinaryToNodes_Ad\Response_Row::class);
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
    "0a93080a356473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f41646442696e617279546f4e6f6465735f41642e70726f746f1224" .
    "6473746f72652e656e67696e652e696d5f41646442696e617279546f4e6f" .
    "6465735f41641a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f229a040a0a506172616d657465727312330a0e62696e6172795f63" .
    "6f64655f696418012001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565121c0a1362696e6172795f636f64655f69645f" .
    "6e756c6c18e90720012808122c0a086e6f64655f69647318022001280b32" .
    "1a2e6473746f72652e76616c7565732e737472696e6756616c756512160a" .
    "0d6e6f64655f6964735f6e756c6c18ea072001280812300a0966726f6d5f" .
    "6461746518032001280b321d2e6473746f72652e76616c7565732e74696d" .
    "657374616d7056616c756512170a0e66726f6d5f646174655f6e756c6c18" .
    "eb0720012808122e0a07746f5f6461746518042001280b321d2e6473746f" .
    "72652e76616c7565732e74696d657374616d7056616c756512150a0c746f" .
    "5f646174655f6e756c6c18ec072001280812300a0966726f6d5f74696d65" .
    "18052001280b321d2e6473746f72652e76616c7565732e74696d65737461" .
    "6d7056616c756512170a0e66726f6d5f74696d655f6e756c6c18ed072001" .
    "2808122e0a07746f5f74696d6518062001280b321d2e6473746f72652e76" .
    "616c7565732e74696d657374616d7056616c756512150a0c746f5f74696d" .
    "655f6e756c6c18ee072001280812320a0d6175746f5f636f6e74696e7565" .
    "18072001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c7565121b0a126175746f5f636f6e74696e75655f6e756c6c18ef07" .
    "2001280822de010a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d657373616765123f0a03726f77180420" .
    "03280b32322e6473746f72652e656e67696e652e696d5f41646442696e61" .
    "7279546f4e6f6465735f41642e526573706f6e73652e526f771a160a0352" .
    "6f77120f0a06726f775f696418904e2001280542570a1b696f2e6473746f" .
    "72652e656e67696e652e70726f636564757265735a38676f73646b2e6473" .
    "746f72652e64652f656e67696e652f70726f636564757265732f696d5f41" .
    "646442696e617279546f4e6f6465735f4164620670726f746f33"
));

