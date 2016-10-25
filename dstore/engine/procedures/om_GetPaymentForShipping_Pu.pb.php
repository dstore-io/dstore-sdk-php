<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPaymentForShipping_Pu.proto

namespace Dstore\Engine\Om_GetPaymentForShipping_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $shipping_type_id = null;
    private $shipping_type_id_null = false;
    private $payment_type_id = null;
    private $payment_type_id_null = false;
    private $language_id = null;
    private $language_id_null = false;

    public function getShippingTypeId()
    {
        return $this->shipping_type_id;
    }

    public function setShippingTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->shipping_type_id = $var;
    }

    public function getShippingTypeIdNull()
    {
        return $this->shipping_type_id_null;
    }

    public function setShippingTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->shipping_type_id_null = $var;
    }

    public function getPaymentTypeId()
    {
        return $this->payment_type_id;
    }

    public function setPaymentTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->payment_type_id = $var;
    }

    public function getPaymentTypeIdNull()
    {
        return $this->payment_type_id_null;
    }

    public function setPaymentTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->payment_type_id_null = $var;
    }

    public function getLanguageId()
    {
        return $this->language_id;
    }

    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->language_id = $var;
    }

    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetPaymentForShipping_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $payment_type_description = null;
    private $payment_for_shipping_id = null;
    private $shipping_type_description = null;
    private $payment_for_shipping_description = null;
    private $detailed_description = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getPaymentTypeDescription()
    {
        return $this->payment_type_description;
    }

    public function setPaymentTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->payment_type_description = $var;
    }

    public function getPaymentForShippingId()
    {
        return $this->payment_for_shipping_id;
    }

    public function setPaymentForShippingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->payment_for_shipping_id = $var;
    }

    public function getShippingTypeDescription()
    {
        return $this->shipping_type_description;
    }

    public function setShippingTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->shipping_type_description = $var;
    }

    public function getPaymentForShippingDescription()
    {
        return $this->payment_for_shipping_description;
    }

    public function setPaymentForShippingDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->payment_for_shipping_description = $var;
    }

    public function getDetailedDescription()
    {
        return $this->detailed_description;
    }

    public function setDetailedDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->detailed_description = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad3080a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4765745061796d656e74466f725368697070696e675f50752e7072" .
    "6f746f12296473746f72652e656e67696e652e6f6d5f4765745061796d65" .
    "6e74466f725368697070696e675f50751a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f2285020a0a506172616d65746572731235" .
    "0a107368697070696e675f747970655f696418012001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c7565121e0a15736869" .
    "7070696e675f747970655f69645f6e756c6c18e9072001280812340a0f70" .
    "61796d656e745f747970655f696418022001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565121d0a147061796d656e74" .
    "5f747970655f69645f6e756c6c18ea072001280812300a0b6c616e677561" .
    "67655f696418032001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512190a106c616e67756167655f69645f6e756c6c" .
    "18eb072001280822a4040a08526573706f6e736512480a106d6574615f69" .
    "6e666f726d6174696f6e18022003280b322e2e6473746f72652e656e6769" .
    "6e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d61" .
    "74696f6e122f0a076d65737361676518032003280b321e2e6473746f7265" .
    "2e656e67696e652e6d6573736167652e4d65737361676512440a03726f77" .
    "18042003280b32372e6473746f72652e656e67696e652e6f6d5f47657450" .
    "61796d656e74466f725368697070696e675f50752e526573706f6e73652e" .
    "526f771ad6020a03526f77120f0a06726f775f696418904e20012805123d" .
    "0a187061796d656e745f747970655f6465736372697074696f6e18914e20" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "65123d0a177061796d656e745f666f725f7368697070696e675f69641892" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565123e0a197368697070696e675f747970655f6465736372697074" .
    "696f6e18934e2001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c756512450a207061796d656e745f666f725f736869707069" .
    "6e675f6465736372697074696f6e18944e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512390a1464657461696c65" .
    "645f6465736372697074696f6e18954e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c7565425c0a1b696f2e6473746f72" .
    "652e656e67696e652e70726f636564757265735a3d676f73646b2e647374" .
    "6f72652e64652f656e67696e652f70726f636564757265732f6f6d5f4765" .
    "745061796d656e74466f725368697070696e675f5075620670726f746f33"
));
