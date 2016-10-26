<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrderInformation_Ad.proto

namespace Dstore\Engine\Om_GetOrderInformation_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $order_id = null;
    private $order_id_null = false;
    private $information_type_id = null;
    private $information_type_id_null = false;

    public function getOrderId()
    {
        return $this->order_id;
    }

    public function setOrderId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->order_id = $var;
    }

    public function getOrderIdNull()
    {
        return $this->order_id_null;
    }

    public function setOrderIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetOrderInformation_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $created_by_user_id = null;
    private $information_type_id = null;
    private $person_characteristic_id = null;
    private $order_id = null;
    private $information_type = null;
    private $information = null;
    private $created_at_date_and_time = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getCreatedByUserId()
    {
        return $this->created_by_user_id;
    }

    public function setCreatedByUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->created_by_user_id = $var;
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

    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_characteristic_id = $var;
    }

    public function getOrderId()
    {
        return $this->order_id;
    }

    public function setOrderId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->order_id = $var;
    }

    public function getInformationType()
    {
        return $this->information_type;
    }

    public function setInformationType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->information_type = $var;
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

    public function getCreatedAtDateAndTime()
    {
        return $this->created_at_date_and_time;
    }

    public function setCreatedAtDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->created_at_date_and_time = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ac6080a386473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4765744f72646572496e666f726d6174696f6e5f41642e70726f74" .
    "6f12276473746f72652e656e67696e652e6f6d5f4765744f72646572496e" .
    "666f726d6174696f6e5f41641a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f22b0010a0a506172616d6574657273122d0a086f72" .
    "6465725f696418012001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512160a0d6f726465725f69645f6e756c6c18e9" .
    "072001280812380a13696e666f726d6174696f6e5f747970655f69641802" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512210a18696e666f726d6174696f6e5f747970655f69645f6e756c" .
    "6c18ea072001280822f2040a08526573706f6e736512480a106d6574615f" .
    "696e666f726d6174696f6e18022003280b322e2e6473746f72652e656e67" .
    "696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d" .
    "6174696f6e122f0a076d65737361676518032003280b321e2e6473746f72" .
    "652e656e67696e652e6d6573736167652e4d65737361676512420a03726f" .
    "7718042003280b32352e6473746f72652e656e67696e652e6f6d5f476574" .
    "4f72646572496e666f726d6174696f6e5f41642e526573706f6e73652e52" .
    "6f771aa6030a03526f77120f0a06726f775f696418904e2001280512380a" .
    "12637265617465645f62795f757365725f696418914e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512390a1369" .
    "6e666f726d6174696f6e5f747970655f696418924e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565123e0a187065" .
    "72736f6e5f63686172616374657269737469635f696418934e2001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c7565122e" .
    "0a086f726465725f696418944e2001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512350a10696e666f726d6174696f" .
    "6e5f7479706518954e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c756512300a0b696e666f726d6174696f6e18964e20" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512400a18637265617465645f61745f646174655f616e645f74696d6518" .
    "974e2001280b321d2e6473746f72652e76616c7565732e74696d65737461" .
    "6d7056616c7565425a0a1b696f2e6473746f72652e656e67696e652e7072" .
    "6f636564757265735a3b676f73646b2e6473746f72652e64652f656e6769" .
    "6e652f70726f636564757265732f6f6d5f4765744f72646572496e666f72" .
    "6d6174696f6e5f4164620670726f746f33"
));

