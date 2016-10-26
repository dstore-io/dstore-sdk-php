<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrderStates_Ad.proto

namespace Dstore\Engine\Om_GetOrderStates_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $active = null;
    private $active_null = false;
    private $language_id = null;
    private $language_id_null = false;

    public function getActive()
    {
        return $this->active;
    }

    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetOrderStates_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $active = null;
    private $order_state_id = null;
    private $change_order_state_trigger_id = null;
    private $public_description = null;
    private $order_state = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getOrderStateId()
    {
        return $this->order_state_id;
    }

    public function setOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->order_state_id = $var;
    }

    public function getChangeOrderStateTriggerId()
    {
        return $this->change_order_state_trigger_id;
    }

    public function setChangeOrderStateTriggerId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->change_order_state_trigger_id = $var;
    }

    public function getPublicDescription()
    {
        return $this->public_description;
    }

    public function setPublicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->public_description = $var;
    }

    public function getOrderState()
    {
        return $this->order_state;
    }

    public function setOrderState(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->order_state = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aa2070a336473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4765744f726465725374617465735f41642e70726f746f12226473" .
    "746f72652e656e67696e652e6f6d5f4765744f726465725374617465735f" .
    "41641a136473746f72652f76616c7565732e70726f746f1a1b6473746f72" .
    "652f656e67696e652f6d6573736167652e70726f746f1a236473746f7265" .
    "2f656e67696e652f6d657461696e666f726d6174696f6e2e70726f746f22" .
    "9c010a0a506172616d6574657273122b0a0661637469766518012001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "140a0b6163746976655f6e756c6c18e9072001280812300a0b6c616e6775" .
    "6167655f696418022001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512190a106c616e67756167655f69645f6e756c" .
    "6c18ea072001280822f1030a08526573706f6e736512480a106d6574615f" .
    "696e666f726d6174696f6e18022003280b322e2e6473746f72652e656e67" .
    "696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d" .
    "6174696f6e122f0a076d65737361676518032003280b321e2e6473746f72" .
    "652e656e67696e652e6d6573736167652e4d657373616765123d0a03726f" .
    "7718042003280b32302e6473746f72652e656e67696e652e6f6d5f476574" .
    "4f726465725374617465735f41642e526573706f6e73652e526f771aaa02" .
    "0a03526f77120f0a06726f775f696418904e20012805122c0a0661637469" .
    "766518914e2001280b321b2e6473746f72652e76616c7565732e626f6f6c" .
    "65616e56616c756512340a0e6f726465725f73746174655f696418924e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "756512430a1d6368616e67655f6f726465725f73746174655f7472696767" .
    "65725f696418934e2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512370a127075626c69635f6465736372697074" .
    "696f6e18944e2001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c756512300a0b6f726465725f737461746518954e2001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c75654255" .
    "0a1b696f2e6473746f72652e656e67696e652e70726f636564757265735a" .
    "36676f73646b2e6473746f72652e64652f656e67696e652f70726f636564" .
    "757265732f6f6d5f4765744f726465725374617465735f4164620670726f" .
    "746f33"
));

