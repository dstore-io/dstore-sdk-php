<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrderStateRules_Ad.proto

namespace Dstore\Engine\Om_GetOrderStateRules_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $user_id = null;
    private $user_id_null = false;
    private $from_order_state_id = null;
    private $from_order_state_id_null = false;
    private $to_order_state_id = null;
    private $to_order_state_id_null = false;
    private $payment_for_shipping_id = null;
    private $payment_for_shipping_id_null = false;

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

    public function getFromOrderStateId()
    {
        return $this->from_order_state_id;
    }

    public function setFromOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_order_state_id = $var;
    }

    public function getFromOrderStateIdNull()
    {
        return $this->from_order_state_id_null;
    }

    public function setFromOrderStateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_order_state_id_null = $var;
    }

    public function getToOrderStateId()
    {
        return $this->to_order_state_id;
    }

    public function setToOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_order_state_id = $var;
    }

    public function getToOrderStateIdNull()
    {
        return $this->to_order_state_id_null;
    }

    public function setToOrderStateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_order_state_id_null = $var;
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

    public function getPaymentForShippingIdNull()
    {
        return $this->payment_for_shipping_id_null;
    }

    public function setPaymentForShippingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->payment_for_shipping_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetOrderStateRules_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $user_name = null;
    private $to_order_state_id = null;
    private $user_id = null;
    private $payment_for_shipping_id = null;
    private $from_order_state_id = null;
    private $to_order_state = null;
    private $payment_for_shipping_description = null;
    private $from_order_state = null;
    private $allowed = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getToOrderStateId()
    {
        return $this->to_order_state_id;
    }

    public function setToOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_order_state_id = $var;
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

    public function getPaymentForShippingId()
    {
        return $this->payment_for_shipping_id;
    }

    public function setPaymentForShippingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->payment_for_shipping_id = $var;
    }

    public function getFromOrderStateId()
    {
        return $this->from_order_state_id;
    }

    public function setFromOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_order_state_id = $var;
    }

    public function getToOrderState()
    {
        return $this->to_order_state;
    }

    public function setToOrderState(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->to_order_state = $var;
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

    public function getFromOrderState()
    {
        return $this->from_order_state;
    }

    public function setFromOrderState(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->from_order_state = $var;
    }

    public function getAllowed()
    {
        return $this->allowed;
    }

    public function setAllowed(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->allowed = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae20a0a376473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4765744f72646572537461746552756c65735f41642e70726f746f" .
    "12266473746f72652e656e67696e652e6f6d5f4765744f72646572537461" .
    "746552756c65735f41641a136473746f72652f76616c7565732e70726f74" .
    "6f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f746f" .
    "1a236473746f72652f656e67696e652f6d657461696e666f726d6174696f" .
    "6e2e70726f746f22ec020a0a506172616d6574657273122c0a0775736572" .
    "5f696418012001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512150a0c757365725f69645f6e756c6c18e907200128" .
    "0812380a1366726f6d5f6f726465725f73746174655f696418022001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "210a1866726f6d5f6f726465725f73746174655f69645f6e756c6c18ea07" .
    "2001280812360a11746f5f6f726465725f73746174655f69641803200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "121f0a16746f5f6f726465725f73746174655f69645f6e756c6c18eb0720" .
    "012808123c0a177061796d656e745f666f725f7368697070696e675f6964" .
    "18042001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512250a1c7061796d656e745f666f725f7368697070696e675f" .
    "69645f6e756c6c18ec072001280822d5050a08526573706f6e736512480a" .
    "106d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f" .
    "72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461" .
    "496e666f726d6174696f6e122f0a076d65737361676518032003280b321e" .
    "2e6473746f72652e656e67696e652e6d6573736167652e4d657373616765" .
    "12410a03726f7718042003280b32342e6473746f72652e656e67696e652e" .
    "6f6d5f4765744f72646572537461746552756c65735f41642e526573706f" .
    "6e73652e526f771a8a040a03526f77120f0a06726f775f696418904e2001" .
    "2805122e0a09757365725f6e616d6518914e2001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512370a11746f5f6f7264" .
    "65725f73746174655f696418924e2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c7565122d0a07757365725f69641893" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565123d0a177061796d656e745f666f725f7368697070696e675f69" .
    "6418944e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512390a1366726f6d5f6f726465725f73746174655f6964" .
    "18954e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512330a0e746f5f6f726465725f737461746518964e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "450a207061796d656e745f666f725f7368697070696e675f646573637269" .
    "7074696f6e18974e2001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c756512350a1066726f6d5f6f726465725f7374617465" .
    "18984e2001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c7565122d0a07616c6c6f77656418994e2001280b321b2e6473746f" .
    "72652e76616c7565732e626f6f6c65616e56616c756542590a1b696f2e64" .
    "73746f72652e656e67696e652e70726f636564757265735a3a676f73646b" .
    "2e6473746f72652e64652f656e67696e652f70726f636564757265732f6f" .
    "6d5f4765744f72646572537461746552756c65735f4164620670726f746f" .
    "33"
));

