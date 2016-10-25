<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetTrolleyInformation_Pu.proto

namespace Dstore\Engine\Om_GetTrolleyInformation_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $unique_id = null;
    private $unique_id_null = false;
    private $information_type_id = null;
    private $information_type_id_null = false;

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

    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->information_type_id = $var;
    }

    public function getInformationTypeIdNull()
    {
        return $this->information_type_id_null;
    }

    public function setInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetTrolleyInformation_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $visitor_id = null;
    private $information_type_id = null;
    private $information = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getVisitorId()
    {
        return $this->visitor_id;
    }

    public function setVisitorId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->visitor_id = $var;
    }

    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->information_type_id = $var;
    }

    public function getInformation()
    {
        return $this->information;
    }

    public function setInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->information = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ade060a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657454726f6c6c6579496e666f726d6174696f6e5f50752e7072" .
    "6f746f12296473746f72652e656e67696e652e6f6d5f47657454726f6c6c" .
    "6579496e666f726d6174696f6e5f50751a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22b1010a0a506172616d6574657273122d" .
    "0a09756e697175655f696418012001280b321a2e6473746f72652e76616c" .
    "7565732e737472696e6756616c756512170a0e756e697175655f69645f6e" .
    "756c6c18e9072001280812380a13696e666f726d6174696f6e5f74797065" .
    "5f696418022001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512210a18696e666f726d6174696f6e5f747970655f69" .
    "645f6e756c6c18ea07200128082283030a08526573706f6e736512480a10" .
    "6d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f72" .
    "652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65746149" .
    "6e666f726d6174696f6e122f0a076d65737361676518032003280b321e2e" .
    "6473746f72652e656e67696e652e6d6573736167652e4d65737361676512" .
    "440a03726f7718042003280b32372e6473746f72652e656e67696e652e6f" .
    "6d5f47657454726f6c6c6579496e666f726d6174696f6e5f50752e526573" .
    "706f6e73652e526f771ab5010a03526f77120f0a06726f775f696418904e" .
    "2001280512300a0a76697369746f725f696418914e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512390a13696e" .
    "666f726d6174696f6e5f747970655f696418924e2001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512300a0b696e66" .
    "6f726d6174696f6e18934e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c7565425c0a1b696f2e6473746f72652e656e67" .
    "696e652e70726f636564757265735a3d676f73646b2e6473746f72652e64" .
    "652f656e67696e652f70726f636564757265732f6f6d5f47657454726f6c" .
    "6c6579496e666f726d6174696f6e5f5075620670726f746f33"
));
