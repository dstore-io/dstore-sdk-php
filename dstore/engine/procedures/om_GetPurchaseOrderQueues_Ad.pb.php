<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPurchaseOrderQueues_Ad.proto

namespace Dstore\Engine\Om_GetPurchaseOrderQueues_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $supplier_id = null;
    private $supplier_id_null = false;
    private $from_order_deadline = null;
    private $from_order_deadline_null = false;
    private $to_order_deadline = null;
    private $to_order_deadline_null = false;
    private $order_type_id = null;
    private $order_type_id_null = false;
    private $node_id = null;
    private $node_id_null = false;
    private $get_summary_only = null;
    private $get_summary_only_null = false;
    private $node_characteristic_id = null;
    private $node_characteristic_id_null = false;

    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    public function setSupplierId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->supplier_id = $var;
    }

    public function getSupplierIdNull()
    {
        return $this->supplier_id_null;
    }

    public function setSupplierIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->supplier_id_null = $var;
    }

    public function getFromOrderDeadline()
    {
        return $this->from_order_deadline;
    }

    public function setFromOrderDeadline(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->from_order_deadline = $var;
    }

    public function getFromOrderDeadlineNull()
    {
        return $this->from_order_deadline_null;
    }

    public function setFromOrderDeadlineNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_order_deadline_null = $var;
    }

    public function getToOrderDeadline()
    {
        return $this->to_order_deadline;
    }

    public function setToOrderDeadline(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->to_order_deadline = $var;
    }

    public function getToOrderDeadlineNull()
    {
        return $this->to_order_deadline_null;
    }

    public function setToOrderDeadlineNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_order_deadline_null = $var;
    }

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

    public function getNodeId()
    {
        return $this->node_id;
    }

    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_id = $var;
    }

    public function getNodeIdNull()
    {
        return $this->node_id_null;
    }

    public function setNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_id_null = $var;
    }

    public function getGetSummaryOnly()
    {
        return $this->get_summary_only;
    }

    public function setGetSummaryOnly(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->get_summary_only = $var;
    }

    public function getGetSummaryOnlyNull()
    {
        return $this->get_summary_only_null;
    }

    public function setGetSummaryOnlyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_summary_only_null = $var;
    }

    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_characteristic_id = $var;
    }

    public function getNodeCharacteristicIdNull()
    {
        return $this->node_characteristic_id_null;
    }

    public function setNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetPurchaseOrderQueues_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $suppl_charac_val2_restr_by_pattern = null;
    private $last_edited_by_user_id = null;
    private $currency_symbol = null;
    private $last_edited_at_date_and_time = null;
    private $supplier_id = null;
    private $net_sum = null;
    private $node_description = null;
    private $order_deadline = null;
    private $node_id = null;
    private $tree_node_id = null;
    private $created_by_user_name = null;
    private $comment = null;
    private $supplier_characteristic_value2 = null;
    private $item_property = null;
    private $supplier_characteristic_value1 = null;
    private $quantity = null;
    private $last_edited_by_user_name = null;
    private $currency_id = null;
    private $created_at_date_and_time = null;
    private $created_by_user_id = null;
    private $order_type_description = null;
    private $h_tree_node_id = null;
    private $order_type_id = null;
    private $item_no = null;
    private $suppl_charac_val1_restr_by_pattern = null;
    private $number_of_items = null;
    private $number_of_expired_deadlines = null;
    private $min_order_deadline = null;
    private $number_of_queues = null;
    private $max_order_deadline = null;
    private $number_of_suppliers = null;
    private $total_net_sum = null;
    private $purchase_price_characteristic_id = null;
    private $total_quantity = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getSupplCharacVal2RestrByPattern()
    {
        return $this->suppl_charac_val2_restr_by_pattern;
    }

    public function setSupplCharacVal2RestrByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->suppl_charac_val2_restr_by_pattern = $var;
    }

    public function getLastEditedByUserId()
    {
        return $this->last_edited_by_user_id;
    }

    public function setLastEditedByUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->last_edited_by_user_id = $var;
    }

    public function getCurrencySymbol()
    {
        return $this->currency_symbol;
    }

    public function setCurrencySymbol(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->currency_symbol = $var;
    }

    public function getLastEditedAtDateAndTime()
    {
        return $this->last_edited_at_date_and_time;
    }

    public function setLastEditedAtDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->last_edited_at_date_and_time = $var;
    }

    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    public function setSupplierId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->supplier_id = $var;
    }

    public function getNetSum()
    {
        return $this->net_sum;
    }

    public function setNetSum(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->net_sum = $var;
    }

    public function getNodeDescription()
    {
        return $this->node_description;
    }

    public function setNodeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->node_description = $var;
    }

    public function getOrderDeadline()
    {
        return $this->order_deadline;
    }

    public function setOrderDeadline(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->order_deadline = $var;
    }

    public function getNodeId()
    {
        return $this->node_id;
    }

    public function setNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->node_id = $var;
    }

    public function getTreeNodeId()
    {
        return $this->tree_node_id;
    }

    public function setTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tree_node_id = $var;
    }

    public function getCreatedByUserName()
    {
        return $this->created_by_user_name;
    }

    public function setCreatedByUserName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->created_by_user_name = $var;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->comment = $var;
    }

    public function getSupplierCharacteristicValue2()
    {
        return $this->supplier_characteristic_value2;
    }

    public function setSupplierCharacteristicValue2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->supplier_characteristic_value2 = $var;
    }

    public function getItemProperty()
    {
        return $this->item_property;
    }

    public function setItemProperty(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->item_property = $var;
    }

    public function getSupplierCharacteristicValue1()
    {
        return $this->supplier_characteristic_value1;
    }

    public function setSupplierCharacteristicValue1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->supplier_characteristic_value1 = $var;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->quantity = $var;
    }

    public function getLastEditedByUserName()
    {
        return $this->last_edited_by_user_name;
    }

    public function setLastEditedByUserName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->last_edited_by_user_name = $var;
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

    public function getCreatedAtDateAndTime()
    {
        return $this->created_at_date_and_time;
    }

    public function setCreatedAtDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->created_at_date_and_time = $var;
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

    public function getOrderTypeDescription()
    {
        return $this->order_type_description;
    }

    public function setOrderTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->order_type_description = $var;
    }

    public function getHTreeNodeId()
    {
        return $this->h_tree_node_id;
    }

    public function setHTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->h_tree_node_id = $var;
    }

    public function getOrderTypeId()
    {
        return $this->order_type_id;
    }

    public function setOrderTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->order_type_id = $var;
    }

    public function getItemNo()
    {
        return $this->item_no;
    }

    public function setItemNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->item_no = $var;
    }

    public function getSupplCharacVal1RestrByPattern()
    {
        return $this->suppl_charac_val1_restr_by_pattern;
    }

    public function setSupplCharacVal1RestrByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->suppl_charac_val1_restr_by_pattern = $var;
    }

    public function getNumberOfItems()
    {
        return $this->number_of_items;
    }

    public function setNumberOfItems(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->number_of_items = $var;
    }

    public function getNumberOfExpiredDeadlines()
    {
        return $this->number_of_expired_deadlines;
    }

    public function setNumberOfExpiredDeadlines(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->number_of_expired_deadlines = $var;
    }

    public function getMinOrderDeadline()
    {
        return $this->min_order_deadline;
    }

    public function setMinOrderDeadline(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->min_order_deadline = $var;
    }

    public function getNumberOfQueues()
    {
        return $this->number_of_queues;
    }

    public function setNumberOfQueues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->number_of_queues = $var;
    }

    public function getMaxOrderDeadline()
    {
        return $this->max_order_deadline;
    }

    public function setMaxOrderDeadline(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->max_order_deadline = $var;
    }

    public function getNumberOfSuppliers()
    {
        return $this->number_of_suppliers;
    }

    public function setNumberOfSuppliers(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->number_of_suppliers = $var;
    }

    public function getTotalNetSum()
    {
        return $this->total_net_sum;
    }

    public function setTotalNetSum(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->total_net_sum = $var;
    }

    public function getPurchasePriceCharacteristicId()
    {
        return $this->purchase_price_characteristic_id;
    }

    public function setPurchasePriceCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->purchase_price_characteristic_id = $var;
    }

    public function getTotalQuantity()
    {
        return $this->total_quantity;
    }

    public function setTotalQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->total_quantity = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aad180a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657450757263686173654f726465725175657565735f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e6f6d5f47657450757263" .
    "686173654f726465725175657565735f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f22e3040a0a506172616d6574657273" .
    "12300a0b737570706c6965725f696418012001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512190a10737570706c69" .
    "65725f69645f6e756c6c18e90720012808123a0a1366726f6d5f6f726465" .
    "725f646561646c696e6518022001280b321d2e6473746f72652e76616c75" .
    "65732e74696d657374616d7056616c756512210a1866726f6d5f6f726465" .
    "725f646561646c696e655f6e756c6c18ea072001280812380a11746f5f6f" .
    "726465725f646561646c696e6518032001280b321d2e6473746f72652e76" .
    "616c7565732e74696d657374616d7056616c7565121f0a16746f5f6f7264" .
    "65725f646561646c696e655f6e756c6c18eb072001280812320a0d6f7264" .
    "65725f747970655f696418042001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565121b0a126f726465725f747970655f" .
    "69645f6e756c6c18ec0720012808122c0a076e6f64655f69641805200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12150a0c6e6f64655f69645f6e756c6c18ed072001280812350a10676574" .
    "5f73756d6d6172795f6f6e6c7918062001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c7565121e0a156765745f73756d6d" .
    "6172795f6f6e6c795f6e756c6c18ee0720012808123b0a166e6f64655f63" .
    "686172616374657269737469635f696418072001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512240a1b6e6f64655f" .
    "63686172616374657269737469635f69645f6e756c6c18ef072001280822" .
    "9d110a08526573706f6e736512480a106d6574615f696e666f726d617469" .
    "6f6e18022003280b322e2e6473746f72652e656e67696e652e6d65746169" .
    "6e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a07" .
    "6d65737361676518032003280b321e2e6473746f72652e656e67696e652e" .
    "6d6573736167652e4d65737361676512450a03726f7718042003280b3238" .
    "2e6473746f72652e656e67696e652e6f6d5f47657450757263686173654f" .
    "726465725175657565735f41642e526573706f6e73652e526f771ace0f0a" .
    "03526f77120f0a06726f775f696418904e2001280512470a22737570706c" .
    "5f6368617261635f76616c325f72657374725f62795f7061747465726e18" .
    "914e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c7565123c0a166c6173745f6564697465645f62795f757365725f6964" .
    "18924e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512340a0f63757272656e63795f73796d626f6c18934e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12440a1c6c6173745f6564697465645f61745f646174655f616e645f7469" .
    "6d6518944e2001280b321d2e6473746f72652e76616c7565732e74696d65" .
    "7374616d7056616c756512310a0b737570706c6965725f696418954e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65122d0a076e65745f73756d18964e2001280b321b2e6473746f72652e76" .
    "616c7565732e646563696d616c56616c756512350a106e6f64655f646573" .
    "6372697074696f6e18974e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c756512360a0e6f726465725f646561646c696e" .
    "6518984e2001280b321d2e6473746f72652e76616c7565732e74696d6573" .
    "74616d7056616c7565122d0a076e6f64655f696418994e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512320a0c" .
    "747265655f6e6f64655f6964189a4e2001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512390a14637265617465645f" .
    "62795f757365725f6e616d65189b4e2001280b321a2e6473746f72652e76" .
    "616c7565732e737472696e6756616c7565122c0a07636f6d6d656e74189c" .
    "4e2001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c756512430a1e737570706c6965725f6368617261637465726973746963" .
    "5f76616c756532189d4e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c756512320a0d6974656d5f70726f706572747918" .
    "9e4e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512430a1e737570706c6965725f63686172616374657269737469" .
    "635f76616c756531189f4e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c7565122e0a087175616e7469747918a04e2001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65123d0a186c6173745f6564697465645f62795f757365725f6e616d6518" .
    "a14e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512310a0b63757272656e63795f696418a24e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512400a1863" .
    "7265617465645f61745f646174655f616e645f74696d6518a34e2001280b" .
    "321d2e6473746f72652e76616c7565732e74696d657374616d7056616c75" .
    "6512380a12637265617465645f62795f757365725f696418a44e2001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "3b0a166f726465725f747970655f6465736372697074696f6e18a54e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12340a0e685f747265655f6e6f64655f696418a64e2001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512330a0d6f72" .
    "6465725f747970655f696418a74e2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c7565122c0a076974656d5f6e6f18a8" .
    "4e2001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c756512470a22737570706c5f6368617261635f76616c315f7265737472" .
    "5f62795f7061747465726e18a94e2001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512360a0f6e756d6265725f6f665f" .
    "6974656d7318a19c012001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c756512420a1b6e756d6265725f6f665f65787069" .
    "7265645f646561646c696e657318a29c012001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512390a126d696e5f6f72" .
    "6465725f646561646c696e6518a39c012001280b321b2e6473746f72652e" .
    "76616c7565732e646563696d616c56616c756512370a106e756d6265725f" .
    "6f665f71756575657318a49c012001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512390a126d61785f6f726465725f" .
    "646561646c696e6518a59c012001280b321b2e6473746f72652e76616c75" .
    "65732e646563696d616c56616c7565123a0a136e756d6265725f6f665f73" .
    "7570706c6965727318a69c012001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512340a0d746f74616c5f6e65745f73" .
    "756d18b2ea012001280b321b2e6473746f72652e76616c7565732e646563" .
    "696d616c56616c756512470a2070757263686173655f70726963655f6368" .
    "6172616374657269737469635f696418b6ea012001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512350a0e746f7461" .
    "6c5f7175616e7469747918bcea012001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c7565425d0a1b696f2e6473746f7265" .
    "2e656e67696e652e70726f636564757265735a3e676f73646b2e6473746f" .
    "72652e64652f656e67696e652f70726f636564757265732f6f6d5f476574" .
    "50757263686173654f726465725175657565735f4164620670726f746f33"
));

