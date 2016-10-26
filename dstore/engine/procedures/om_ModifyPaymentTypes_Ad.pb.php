<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyPaymentTypes_Ad.proto

namespace Dstore\Engine\Om_ModifyPaymentTypes_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $payment_type_id = null;
    private $payment_type_id_null = false;
    private $payment_type_description = null;
    private $payment_type_description_null = false;
    private $region_id = null;
    private $region_id_null = false;
    private $brutto_sum_from = null;
    private $brutto_sum_from_null = false;
    private $brutto_sum_to = null;
    private $brutto_sum_to_null = false;
    private $currency_id = null;
    private $currency_id_null = false;
    private $surcharge_type_id = null;
    private $surcharge_type_id_null = false;
    private $cost = null;
    private $cost_null = false;
    private $delete_payment_type = null;
    private $delete_payment_type_null = false;
    private $active = null;
    private $active_null = false;
    private $predef_bill_content_description = null;
    private $predef_bill_content_description_null = false;

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

    public function getPaymentTypeDescription()
    {
        return $this->payment_type_description;
    }

    public function setPaymentTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->payment_type_description = $var;
    }

    public function getPaymentTypeDescriptionNull()
    {
        return $this->payment_type_description_null;
    }

    public function setPaymentTypeDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->payment_type_description_null = $var;
    }

    public function getRegionId()
    {
        return $this->region_id;
    }

    public function setRegionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->region_id = $var;
    }

    public function getRegionIdNull()
    {
        return $this->region_id_null;
    }

    public function setRegionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->region_id_null = $var;
    }

    public function getBruttoSumFrom()
    {
        return $this->brutto_sum_from;
    }

    public function setBruttoSumFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->brutto_sum_from = $var;
    }

    public function getBruttoSumFromNull()
    {
        return $this->brutto_sum_from_null;
    }

    public function setBruttoSumFromNull($var)
    {
        GPBUtil::checkBool($var);
        $this->brutto_sum_from_null = $var;
    }

    public function getBruttoSumTo()
    {
        return $this->brutto_sum_to;
    }

    public function setBruttoSumTo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->brutto_sum_to = $var;
    }

    public function getBruttoSumToNull()
    {
        return $this->brutto_sum_to_null;
    }

    public function setBruttoSumToNull($var)
    {
        GPBUtil::checkBool($var);
        $this->brutto_sum_to_null = $var;
    }

    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    public function setCurrencyId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->currency_id = $var;
    }

    public function getCurrencyIdNull()
    {
        return $this->currency_id_null;
    }

    public function setCurrencyIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->currency_id_null = $var;
    }

    public function getSurchargeTypeId()
    {
        return $this->surcharge_type_id;
    }

    public function setSurchargeTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->surcharge_type_id = $var;
    }

    public function getSurchargeTypeIdNull()
    {
        return $this->surcharge_type_id_null;
    }

    public function setSurchargeTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->surcharge_type_id_null = $var;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->cost = $var;
    }

    public function getCostNull()
    {
        return $this->cost_null;
    }

    public function setCostNull($var)
    {
        GPBUtil::checkBool($var);
        $this->cost_null = $var;
    }

    public function getDeletePaymentType()
    {
        return $this->delete_payment_type;
    }

    public function setDeletePaymentType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_payment_type = $var;
    }

    public function getDeletePaymentTypeNull()
    {
        return $this->delete_payment_type_null;
    }

    public function setDeletePaymentTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_payment_type_null = $var;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->active = $var;
    }

    public function getActiveNull()
    {
        return $this->active_null;
    }

    public function setActiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->active_null = $var;
    }

    public function getPredefBillContentDescription()
    {
        return $this->predef_bill_content_description;
    }

    public function setPredefBillContentDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->predef_bill_content_description = $var;
    }

    public function getPredefBillContentDescriptionNull()
    {
        return $this->predef_bill_content_description_null;
    }

    public function setPredefBillContentDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->predef_bill_content_description_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyPaymentTypes_Ad\Response_Row::class);
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
    "0ab00b0a376473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f646966795061796d656e7454797065735f41642e70726f746f" .
    "12266473746f72652e656e67696e652e6f6d5f4d6f646966795061796d65" .
    "6e7454797065735f41641a136473746f72652f76616c7565732e70726f74" .
    "6f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f746f" .
    "1a236473746f72652f656e67696e652f6d657461696e666f726d6174696f" .
    "6e2e70726f746f22af070a0a506172616d657465727312340a0f7061796d" .
    "656e745f747970655f696418012001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c7565121d0a147061796d656e745f7479" .
    "70655f69645f6e756c6c18e90720012808123c0a187061796d656e745f74" .
    "7970655f6465736372697074696f6e18022001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512260a1d7061796d656e74" .
    "5f747970655f6465736372697074696f6e5f6e756c6c18ea072001280812" .
    "2e0a09726567696f6e5f696418032001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512170a0e726567696f6e5f6964" .
    "5f6e756c6c18eb072001280812340a0f62727574746f5f73756d5f66726f" .
    "6d18042001280b321b2e6473746f72652e76616c7565732e646563696d61" .
    "6c56616c7565121d0a1462727574746f5f73756d5f66726f6d5f6e756c6c" .
    "18ec072001280812320a0d62727574746f5f73756d5f746f18052001280b" .
    "321b2e6473746f72652e76616c7565732e646563696d616c56616c756512" .
    "1b0a1262727574746f5f73756d5f746f5f6e756c6c18ed07200128081230" .
    "0a0b63757272656e63795f696418062001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512190a1063757272656e6379" .
    "5f69645f6e756c6c18ee072001280812360a117375726368617267655f74" .
    "7970655f696418072001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565121f0a167375726368617267655f747970655f" .
    "69645f6e756c6c18ef072001280812290a04636f737418082001280b321b" .
    "2e6473746f72652e76616c7565732e646563696d616c56616c756512120a" .
    "09636f73745f6e756c6c18f0072001280812380a1364656c6574655f7061" .
    "796d656e745f7479706518092001280b321b2e6473746f72652e76616c75" .
    "65732e626f6f6c65616e56616c756512210a1864656c6574655f7061796d" .
    "656e745f747970655f6e756c6c18f10720012808122b0a06616374697665" .
    "180a2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c756512140a0b6163746976655f6e756c6c18f2072001280812430a" .
    "1f7072656465665f62696c6c5f636f6e74656e745f646573637269707469" .
    "6f6e180b2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565122d0a247072656465665f62696c6c5f636f6e74656e745f" .
    "6465736372697074696f6e5f6e756c6c18f3072001280822e0010a085265" .
    "73706f6e736512480a106d6574615f696e666f726d6174696f6e18022003" .
    "280b322e2e6473746f72652e656e67696e652e6d657461696e666f726d61" .
    "74696f6e2e4d657461496e666f726d6174696f6e122f0a076d6573736167" .
    "6518032003280b321e2e6473746f72652e656e67696e652e6d6573736167" .
    "652e4d65737361676512410a03726f7718042003280b32342e6473746f72" .
    "652e656e67696e652e6f6d5f4d6f646966795061796d656e745479706573" .
    "5f41642e526573706f6e73652e526f771a160a03526f77120f0a06726f77" .
    "5f696418904e2001280542590a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a3a676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f6f6d5f4d6f646966795061796d" .
    "656e7454797065735f4164620670726f746f33"
));

