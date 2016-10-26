<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetShippingCost_Pu.proto

namespace Dstore\Engine\Om_GetShippingCost_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $shipping_type_id = null;
    private $shipping_type_id_null = false;
    private $currency_id = null;
    private $currency_id_null = false;
    private $total_brutto_price = null;
    private $total_brutto_price_null = false;
    private $total_netto_price = null;
    private $total_netto_price_null = false;
    private $shipping_cost = null;
    private $shipping_cost_null = false;
    private $shipping_cost_brutto = null;
    private $shipping_cost_brutto_null = false;
    private $select_result = null;
    private $select_result_null = false;
    private $date = null;
    private $date_null = false;
    private $unique_id = null;
    private $unique_id_null = false;
    private $person_id = null;
    private $person_id_null = false;
    private $delivery_person_id = null;
    private $delivery_person_id_null = false;
    private $price_node_characteristic_id = null;
    private $price_node_characteristic_id_null = false;
    private $payment_type_id = null;
    private $payment_type_id_null = false;

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

    public function getTotalBruttoPrice()
    {
        return $this->total_brutto_price;
    }

    public function setTotalBruttoPrice(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->total_brutto_price = $var;
    }

    public function getTotalBruttoPriceNull()
    {
        return $this->total_brutto_price_null;
    }

    public function setTotalBruttoPriceNull($var)
    {
        GPBUtil::checkBool($var);
        $this->total_brutto_price_null = $var;
    }

    public function getTotalNettoPrice()
    {
        return $this->total_netto_price;
    }

    public function setTotalNettoPrice(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->total_netto_price = $var;
    }

    public function getTotalNettoPriceNull()
    {
        return $this->total_netto_price_null;
    }

    public function setTotalNettoPriceNull($var)
    {
        GPBUtil::checkBool($var);
        $this->total_netto_price_null = $var;
    }

    public function getShippingCost()
    {
        return $this->shipping_cost;
    }

    public function setShippingCost(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->shipping_cost = $var;
    }

    public function getShippingCostNull()
    {
        return $this->shipping_cost_null;
    }

    public function setShippingCostNull($var)
    {
        GPBUtil::checkBool($var);
        $this->shipping_cost_null = $var;
    }

    public function getShippingCostBrutto()
    {
        return $this->shipping_cost_brutto;
    }

    public function setShippingCostBrutto(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->shipping_cost_brutto = $var;
    }

    public function getShippingCostBruttoNull()
    {
        return $this->shipping_cost_brutto_null;
    }

    public function setShippingCostBruttoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->shipping_cost_brutto_null = $var;
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

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->date = $var;
    }

    public function getDateNull()
    {
        return $this->date_null;
    }

    public function setDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_null = $var;
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

    public function getPersonId()
    {
        return $this->person_id;
    }

    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_id = $var;
    }

    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    public function getDeliveryPersonId()
    {
        return $this->delivery_person_id;
    }

    public function setDeliveryPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->delivery_person_id = $var;
    }

    public function getDeliveryPersonIdNull()
    {
        return $this->delivery_person_id_null;
    }

    public function setDeliveryPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delivery_person_id_null = $var;
    }

    public function getPriceNodeCharacteristicId()
    {
        return $this->price_node_characteristic_id;
    }

    public function setPriceNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->price_node_characteristic_id = $var;
    }

    public function getPriceNodeCharacteristicIdNull()
    {
        return $this->price_node_characteristic_id_null;
    }

    public function setPriceNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->price_node_characteristic_id_null = $var;
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

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $shipping_cost = null;
    private $shipping_cost_brutto = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetShippingCost_Pu\Response_Row::class);
        $this->row = $var;
    }

    public function getShippingCost()
    {
        return $this->shipping_cost;
    }

    public function setShippingCost(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->shipping_cost = $var;
    }

    public function getShippingCostBrutto()
    {
        return $this->shipping_cost_brutto;
    }

    public function setShippingCostBrutto(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->shipping_cost_brutto = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $shipping_cost = null;
    private $shipping_cost_brutto = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getShippingCost()
    {
        return $this->shipping_cost;
    }

    public function setShippingCost(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->shipping_cost = $var;
    }

    public function getShippingCostBrutto()
    {
        return $this->shipping_cost_brutto;
    }

    public function setShippingCostBrutto(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->shipping_cost_brutto = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aac0e0a346473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4765745368697070696e67436f73745f50752e70726f746f122364" .
    "73746f72652e656e67696e652e6f6d5f4765745368697070696e67436f73" .
    "745f50751a136473746f72652f76616c7565732e70726f746f1a1b647374" .
    "6f72652f656e67696e652f6d6573736167652e70726f746f1a236473746f" .
    "72652f656e67696e652f6d657461696e666f726d6174696f6e2e70726f74" .
    "6f22d6080a0a506172616d657465727312350a107368697070696e675f74" .
    "7970655f696418012001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565121e0a157368697070696e675f747970655f69" .
    "645f6e756c6c18e9072001280812300a0b63757272656e63795f69641802" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512190a1063757272656e63795f69645f6e756c6c18ea0720012808" .
    "12370a12746f74616c5f62727574746f5f707269636518032001280b321b" .
    "2e6473746f72652e76616c7565732e646563696d616c56616c756512200a" .
    "17746f74616c5f62727574746f5f70726963655f6e756c6c18eb07200128" .
    "0812360a11746f74616c5f6e6574746f5f707269636518042001280b321b" .
    "2e6473746f72652e76616c7565732e646563696d616c56616c7565121f0a" .
    "16746f74616c5f6e6574746f5f70726963655f6e756c6c18ec0720012808" .
    "12320a0d7368697070696e675f636f737418052001280b321b2e6473746f" .
    "72652e76616c7565732e646563696d616c56616c7565121b0a1273686970" .
    "70696e675f636f73745f6e756c6c18ed072001280812390a147368697070" .
    "696e675f636f73745f62727574746f18062001280b321b2e6473746f7265" .
    "2e76616c7565732e646563696d616c56616c756512220a19736869707069" .
    "6e675f636f73745f62727574746f5f6e756c6c18ee072001280812320a0d" .
    "73656c6563745f726573756c7418072001280b321b2e6473746f72652e76" .
    "616c7565732e626f6f6c65616e56616c7565121b0a1273656c6563745f72" .
    "6573756c745f6e756c6c18ef0720012808122b0a04646174651808200128" .
    "0b321d2e6473746f72652e76616c7565732e74696d657374616d7056616c" .
    "756512120a09646174655f6e756c6c18f00720012808122d0a09756e6971" .
    "75655f696418092001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c756512170a0e756e697175655f69645f6e756c6c18f107" .
    "20012808122e0a09706572736f6e5f6964180a2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512170a0e70657273" .
    "6f6e5f69645f6e756c6c18f2072001280812370a1264656c69766572795f" .
    "706572736f6e5f6964180b2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756512200a1764656c69766572795f706572" .
    "736f6e5f69645f6e756c6c18f3072001280812410a1c70726963655f6e6f" .
    "64655f63686172616374657269737469635f6964180c2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565122a0a2170" .
    "726963655f6e6f64655f63686172616374657269737469635f69645f6e75" .
    "6c6c18f4072001280812340a0f7061796d656e745f747970655f6964180d" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565121d0a147061796d656e745f747970655f69645f6e756c6c18f507" .
    "2001280822be030a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d657373616765123e0a03726f77180420" .
    "03280b32312e6473746f72652e656e67696e652e6f6d5f47657453686970" .
    "70696e67436f73745f50752e526573706f6e73652e526f7712320a0d7368" .
    "697070696e675f636f737418652001280b321b2e6473746f72652e76616c" .
    "7565732e646563696d616c56616c756512390a147368697070696e675f63" .
    "6f73745f62727574746f18662001280b321b2e6473746f72652e76616c75" .
    "65732e646563696d616c56616c75651a87010a03526f77120f0a06726f77" .
    "5f696418904e2001280512330a0d7368697070696e675f636f737418914e" .
    "2001280b321b2e6473746f72652e76616c7565732e646563696d616c5661" .
    "6c7565123a0a147368697070696e675f636f73745f62727574746f18924e" .
    "2001280b321b2e6473746f72652e76616c7565732e646563696d616c5661" .
    "6c756542560a1b696f2e6473746f72652e656e67696e652e70726f636564" .
    "757265735a37676f73646b2e6473746f72652e64652f656e67696e652f70" .
    "726f636564757265732f6f6d5f4765745368697070696e67436f73745f50" .
    "75620670726f746f33"
));

