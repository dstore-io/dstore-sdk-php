<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPurchasePrices_Ad.proto

namespace Dstore\Engine\Om_GetPurchasePrices_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $tree_node_or_node_id = null;
    private $tree_node_or_node_id_null = false;
    private $is_tree_node_id = null;
    private $is_tree_node_id_null = false;
    private $quantity = null;
    private $quantity_null = false;
    private $supplier_id = null;
    private $supplier_id_null = false;
    private $date_for_property_determination = null;
    private $date_for_property_determination_null = false;
    private $node_characteristic_id = null;
    private $node_characteristic_id_null = false;

    public function getTreeNodeOrNodeId()
    {
        return $this->tree_node_or_node_id;
    }

    public function setTreeNodeOrNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->tree_node_or_node_id = $var;
    }

    public function getTreeNodeOrNodeIdNull()
    {
        return $this->tree_node_or_node_id_null;
    }

    public function setTreeNodeOrNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tree_node_or_node_id_null = $var;
    }

    public function getIsTreeNodeId()
    {
        return $this->is_tree_node_id;
    }

    public function setIsTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_tree_node_id = $var;
    }

    public function getIsTreeNodeIdNull()
    {
        return $this->is_tree_node_id_null;
    }

    public function setIsTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->is_tree_node_id_null = $var;
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

    public function getQuantityNull()
    {
        return $this->quantity_null;
    }

    public function setQuantityNull($var)
    {
        GPBUtil::checkBool($var);
        $this->quantity_null = $var;
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

    public function getSupplierIdNull()
    {
        return $this->supplier_id_null;
    }

    public function setSupplierIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->supplier_id_null = $var;
    }

    public function getDateForPropertyDetermination()
    {
        return $this->date_for_property_determination;
    }

    public function setDateForPropertyDetermination(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->date_for_property_determination = $var;
    }

    public function getDateForPropertyDeterminationNull()
    {
        return $this->date_for_property_determination_null;
    }

    public function setDateForPropertyDeterminationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_for_property_determination_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetPurchasePrices_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $suppl_charac_val2_restr_by_pattern = null;
    private $item_property = null;
    private $supplier_characteristic_value2 = null;
    private $total_net_price = null;
    private $quantity = null;
    private $supplier_characteristic_value1 = null;
    private $currency_id = null;
    private $currency_symbol = null;
    private $supplier_id = null;
    private $node_description = null;
    private $unit_net_price = null;
    private $h_tree_node_id = null;
    private $item_no = null;
    private $node_id = null;
    private $tree_node_id = null;
    private $suppl_charac_val1_restr_by_pattern = null;

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

    public function getItemProperty()
    {
        return $this->item_property;
    }

    public function setItemProperty(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->item_property = $var;
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

    public function getTotalNetPrice()
    {
        return $this->total_net_price;
    }

    public function setTotalNetPrice(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->total_net_price = $var;
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

    public function getSupplierCharacteristicValue1()
    {
        return $this->supplier_characteristic_value1;
    }

    public function setSupplierCharacteristicValue1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->supplier_characteristic_value1 = $var;
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

    public function getCurrencySymbol()
    {
        return $this->currency_symbol;
    }

    public function setCurrencySymbol(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->currency_symbol = $var;
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

    public function getNodeDescription()
    {
        return $this->node_description;
    }

    public function setNodeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->node_description = $var;
    }

    public function getUnitNetPrice()
    {
        return $this->unit_net_price;
    }

    public function setUnitNetPrice(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->unit_net_price = $var;
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

    public function getItemNo()
    {
        return $this->item_no;
    }

    public function setItemNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->item_no = $var;
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

    public function getSupplCharacVal1RestrByPattern()
    {
        return $this->suppl_charac_val1_restr_by_pattern;
    }

    public function setSupplCharacVal1RestrByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->suppl_charac_val1_restr_by_pattern = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab30f0a366473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657450757263686173655072696365735f41642e70726f746f12" .
    "256473746f72652e656e67696e652e6f6d5f476574507572636861736550" .
    "72696365735f41641a136473746f72652f76616c7565732e70726f746f1a" .
    "1b6473746f72652f656e67696e652f6d6573736167652e70726f746f1a23" .
    "6473746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e" .
    "70726f746f22ae040a0a506172616d657465727312390a14747265655f6e" .
    "6f64655f6f725f6e6f64655f696418012001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512220a19747265655f6e6f" .
    "64655f6f725f6e6f64655f69645f6e756c6c18e9072001280812340a0f69" .
    "735f747265655f6e6f64655f696418022001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c7565121d0a1469735f74726565" .
    "5f6e6f64655f69645f6e756c6c18ea0720012808122d0a087175616e7469" .
    "747918032001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512160a0d7175616e746974795f6e756c6c18eb07200128" .
    "0812300a0b737570706c6965725f696418042001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512190a10737570706c" .
    "6965725f69645f6e756c6c18ec072001280812460a1f646174655f666f72" .
    "5f70726f70657274795f64657465726d696e6174696f6e18052001280b32" .
    "1d2e6473746f72652e76616c7565732e74696d657374616d7056616c7565" .
    "122d0a24646174655f666f725f70726f70657274795f64657465726d696e" .
    "6174696f6e5f6e756c6c18ed0720012808123b0a166e6f64655f63686172" .
    "616374657269737469635f696418062001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512240a1b6e6f64655f636861" .
    "72616374657269737469635f69645f6e756c6c18ee072001280822e7080a" .
    "08526573706f6e736512480a106d6574615f696e666f726d6174696f6e18" .
    "022003280b322e2e6473746f72652e656e67696e652e6d657461696e666f" .
    "726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d6573" .
    "7361676518032003280b321e2e6473746f72652e656e67696e652e6d6573" .
    "736167652e4d65737361676512400a03726f7718042003280b32332e6473" .
    "746f72652e656e67696e652e6f6d5f476574507572636861736550726963" .
    "65735f41642e526573706f6e73652e526f771a9d070a03526f77120f0a06" .
    "726f775f696418904e2001280512470a22737570706c5f6368617261635f" .
    "76616c325f72657374725f62795f7061747465726e18914e2001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512320a0d" .
    "6974656d5f70726f706572747918924e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c756512430a1e737570706c696572" .
    "5f63686172616374657269737469635f76616c75653218934e2001280b32" .
    "1a2e6473746f72652e76616c7565732e737472696e6756616c756512350a" .
    "0f746f74616c5f6e65745f707269636518944e2001280b321b2e6473746f" .
    "72652e76616c7565732e646563696d616c56616c7565122e0a087175616e" .
    "7469747918954e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512430a1e737570706c6965725f63686172616374" .
    "657269737469635f76616c75653118964e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512310a0b63757272656e63" .
    "795f696418974e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512340a0f63757272656e63795f73796d626f6c18" .
    "984e2001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512310a0b737570706c6965725f696418994e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512350a106e" .
    "6f64655f6465736372697074696f6e189a4e2001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512340a0e756e69745f6e" .
    "65745f7072696365189b4e2001280b321b2e6473746f72652e76616c7565" .
    "732e646563696d616c56616c756512340a0e685f747265655f6e6f64655f" .
    "6964189c4e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565122c0a076974656d5f6e6f189d4e2001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c7565122d0a076e6f" .
    "64655f6964189e4e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512320a0c747265655f6e6f64655f6964189f4e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512470a22737570706c5f6368617261635f76616c315f7265737472" .
    "5f62795f7061747465726e18a04e2001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756542580a1b696f2e6473746f72652e" .
    "656e67696e652e70726f636564757265735a39676f73646b2e6473746f72" .
    "652e64652f656e67696e652f70726f636564757265732f6f6d5f47657450" .
    "757263686173655072696365735f4164620670726f746f33"
));
