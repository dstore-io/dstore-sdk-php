<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyPurchaseOrderTypes_Ad.proto

namespace Dstore\Engine\Om_ModifyPurchaseOrderTypes_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $order_type_id = null;
    private $order_type_id_null = false;
    private $order_type_description = null;
    private $order_type_description_null = false;
    private $delete_order_type = null;
    private $delete_order_type_null = false;

    public function getOrderTypeId()
    {
        return $this->order_type_id;
    }

    public function setOrderTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->order_type_id = $var;
    }

    public function getOrderTypeIdNull()
    {
        return $this->order_type_id_null;
    }

    public function setOrderTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_type_id_null = $var;
    }

    public function getOrderTypeDescription()
    {
        return $this->order_type_description;
    }

    public function setOrderTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->order_type_description = $var;
    }

    public function getOrderTypeDescriptionNull()
    {
        return $this->order_type_description_null;
    }

    public function setOrderTypeDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_type_description_null = $var;
    }

    public function getDeleteOrderType()
    {
        return $this->delete_order_type;
    }

    public function setDeleteOrderType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_order_type = $var;
    }

    public function getDeleteOrderTypeNull()
    {
        return $this->delete_order_type_null;
    }

    public function setDeleteOrderTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_order_type_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyPurchaseOrderTypes_Ad\Response_Row::class);
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
    "0ab1060a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f6469667950757263686173654f7264657254797065735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4d6f646966" .
    "7950757263686173654f7264657254797065735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f2298020a0a506172616d65" .
    "7465727312320a0d6f726465725f747970655f696418012001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c7565121b0a12" .
    "6f726465725f747970655f69645f6e756c6c18e90720012808123a0a166f" .
    "726465725f747970655f6465736372697074696f6e18022001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c756512240a1b6f" .
    "726465725f747970655f6465736372697074696f6e5f6e756c6c18ea0720" .
    "01280812360a1164656c6574655f6f726465725f7479706518032001280b" .
    "321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512" .
    "1f0a1664656c6574655f6f726465725f747970655f6e756c6c18eb072001" .
    "280822e6010a08526573706f6e736512480a106d6574615f696e666f726d" .
    "6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d65" .
    "7461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e12" .
    "2f0a076d65737361676518032003280b321e2e6473746f72652e656e6769" .
    "6e652e6d6573736167652e4d65737361676512470a03726f771804200328" .
    "0b323a2e6473746f72652e656e67696e652e6f6d5f4d6f64696679507572" .
    "63686173654f7264657254797065735f41642e526573706f6e73652e526f" .
    "771a160a03526f77120f0a06726f775f696418904e20012805425f0a1b69" .
    "6f2e6473746f72652e656e67696e652e70726f636564757265735a40676f" .
    "73646b2e6473746f72652e64652f656e67696e652f70726f636564757265" .
    "732f6f6d5f4d6f6469667950757263686173654f7264657254797065735f" .
    "4164620670726f746f33"
));

