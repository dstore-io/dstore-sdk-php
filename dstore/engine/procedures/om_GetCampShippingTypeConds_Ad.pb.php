<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampShippingTypeConds_Ad.proto

namespace Dstore\Engine\Om_GetCampShippingTypeConds_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $condition_id = null;
    private $condition_id_null = false;

    public function getConditionId()
    {
        return $this->condition_id;
    }

    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_id = $var;
    }

    public function getConditionIdNull()
    {
        return $this->condition_id_null;
    }

    public function setConditionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetCampShippingTypeConds_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $filter_by_shipping_type_ids = null;
    private $condition_id = null;
    private $negate_filter = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getFilterByShippingTypeIds()
    {
        return $this->filter_by_shipping_type_ids;
    }

    public function setFilterByShippingTypeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->filter_by_shipping_type_ids = $var;
    }

    public function getConditionId()
    {
        return $this->condition_id;
    }

    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->condition_id = $var;
    }

    public function getNegateFilter()
    {
        return $this->negate_filter;
    }

    public function setNegateFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->negate_filter = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a9f060a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657443616d705368697070696e6754797065436f6e64735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4765744361" .
    "6d705368697070696e6754797065436f6e64735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f225b0a0a506172616d6574" .
    "65727312310a0c636f6e646974696f6e5f696418012001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565121a0a11636f" .
    "6e646974696f6e5f69645f6e756c6c18e907200128082292030a08526573" .
    "706f6e736512480a106d6574615f696e666f726d6174696f6e1802200328" .
    "0b322e2e6473746f72652e656e67696e652e6d657461696e666f726d6174" .
    "696f6e2e4d657461496e666f726d6174696f6e122f0a076d657373616765" .
    "18032003280b321e2e6473746f72652e656e67696e652e6d657373616765" .
    "2e4d65737361676512470a03726f7718042003280b323a2e6473746f7265" .
    "2e656e67696e652e6f6d5f47657443616d705368697070696e6754797065" .
    "436f6e64735f41642e526573706f6e73652e526f771ac1010a03526f7712" .
    "0f0a06726f775f696418904e2001280512400a1b66696c7465725f62795f" .
    "7368697070696e675f747970655f69647318914e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c756512320a0c636f6e64" .
    "6974696f6e5f696418924e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756512330a0d6e65676174655f66696c7465" .
    "7218934e2001280b321b2e6473746f72652e76616c7565732e626f6f6c65" .
    "616e56616c7565425f0a1b696f2e6473746f72652e656e67696e652e7072" .
    "6f636564757265735a40676f73646b2e6473746f72652e64652f656e6769" .
    "6e652f70726f636564757265732f6f6d5f47657443616d70536869707069" .
    "6e6754797065436f6e64735f4164620670726f746f33"
));

