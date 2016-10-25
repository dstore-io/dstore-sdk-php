<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyOrderStates_Ad.proto

namespace Dstore\Engine\Om_ModifyOrderStates_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $order_state_id = null;
    private $order_state_id_null = false;
    private $order_state = null;
    private $order_state_null = false;
    private $public_description = null;
    private $public_description_null = false;
    private $insert_update_or_delete = null;
    private $insert_update_or_delete_null = false;
    private $active = null;
    private $active_null = false;
    private $change_order_state_trigger_id = null;
    private $change_order_state_trigger_id_null = false;

    public function getOrderStateId()
    {
        return $this->order_state_id;
    }

    public function setOrderStateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->order_state_id = $var;
    }

    public function getOrderStateIdNull()
    {
        return $this->order_state_id_null;
    }

    public function setOrderStateIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_state_id_null = $var;
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

    public function getOrderStateNull()
    {
        return $this->order_state_null;
    }

    public function setOrderStateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_state_null = $var;
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

    public function getPublicDescriptionNull()
    {
        return $this->public_description_null;
    }

    public function setPublicDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->public_description_null = $var;
    }

    public function getInsertUpdateOrDelete()
    {
        return $this->insert_update_or_delete;
    }

    public function setInsertUpdateOrDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->insert_update_or_delete = $var;
    }

    public function getInsertUpdateOrDeleteNull()
    {
        return $this->insert_update_or_delete_null;
    }

    public function setInsertUpdateOrDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->insert_update_or_delete_null = $var;
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

    public function getChangeOrderStateTriggerId()
    {
        return $this->change_order_state_trigger_id;
    }

    public function setChangeOrderStateTriggerId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->change_order_state_trigger_id = $var;
    }

    public function getChangeOrderStateTriggerIdNull()
    {
        return $this->change_order_state_trigger_id_null;
    }

    public function setChangeOrderStateTriggerIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->change_order_state_trigger_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyOrderStates_Ad\Response_Row::class);
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
    "0a9b080a366473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f646966794f726465725374617465735f41642e70726f746f12" .
    "256473746f72652e656e67696e652e6f6d5f4d6f646966794f7264657253" .
    "74617465735f41641a136473746f72652f76616c7565732e70726f746f1a" .
    "1b6473746f72652f656e67696e652f6d6573736167652e70726f746f1a23" .
    "6473746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e" .
    "70726f746f229e040a0a506172616d657465727312330a0e6f726465725f" .
    "73746174655f696418012001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565121c0a136f726465725f73746174655f69" .
    "645f6e756c6c18e90720012808122f0a0b6f726465725f73746174651802" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "756512190a106f726465725f73746174655f6e756c6c18ea072001280812" .
    "360a127075626c69635f6465736372697074696f6e18032001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c756512200a1770" .
    "75626c69635f6465736372697074696f6e5f6e756c6c18eb072001280812" .
    "3c0a17696e736572745f7570646174655f6f725f64656c65746518042001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512250a1c696e736572745f7570646174655f6f725f64656c6574655f6e" .
    "756c6c18ec0720012808122b0a0661637469766518052001280b321b2e64" .
    "73746f72652e76616c7565732e626f6f6c65616e56616c756512140a0b61" .
    "63746976655f6e756c6c18ed072001280812420a1d6368616e67655f6f72" .
    "6465725f73746174655f747269676765725f696418062001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565122b0a2263" .
    "68616e67655f6f726465725f73746174655f747269676765725f69645f6e" .
    "756c6c18ee072001280822df010a08526573706f6e736512480a106d6574" .
    "615f696e666f726d6174696f6e18022003280b322e2e6473746f72652e65" .
    "6e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f" .
    "726d6174696f6e122f0a076d65737361676518032003280b321e2e647374" .
    "6f72652e656e67696e652e6d6573736167652e4d65737361676512400a03" .
    "726f7718042003280b32332e6473746f72652e656e67696e652e6f6d5f4d" .
    "6f646966794f726465725374617465735f41642e526573706f6e73652e52" .
    "6f771a160a03526f77120f0a06726f775f696418904e2001280542580a1b" .
    "696f2e6473746f72652e656e67696e652e70726f636564757265735a3967" .
    "6f73646b2e6473746f72652e64652f656e67696e652f70726f6365647572" .
    "65732f6f6d5f4d6f646966794f726465725374617465735f416462067072" .
    "6f746f33"
));
