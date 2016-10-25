<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyLockedNodeCharacs_Ad.proto

namespace Dstore\Engine\Im_ModifyLockedNodeCharacs_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $user_id = null;
    private $user_id_null = false;
    private $node_characteristic_id = null;
    private $node_characteristic_id_null = false;
    private $lock_status = null;
    private $lock_status_null = false;

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

    public function getLockStatus()
    {
        return $this->lock_status;
    }

    public function setLockStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->lock_status = $var;
    }

    public function getLockStatusNull()
    {
        return $this->lock_status_null;
    }

    public function setLockStatusNull($var)
    {
        GPBUtil::checkBool($var);
        $this->lock_status_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_ModifyLockedNodeCharacs_Ad\Response_Row::class);
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
    "0a96060a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4d6f646966794c6f636b65644e6f6465436861726163735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e696d5f4d6f64696679" .
    "4c6f636b65644e6f6465436861726163735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f2281020a0a506172616d657465" .
    "7273122c0a07757365725f696418012001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512150a0c757365725f69645f" .
    "6e756c6c18e90720012808123b0a166e6f64655f63686172616374657269" .
    "737469635f696418022001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c756512240a1b6e6f64655f636861726163746572" .
    "69737469635f69645f6e756c6c18ea072001280812300a0b6c6f636b5f73" .
    "746174757318032001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512190a106c6f636b5f7374617475735f6e756c6c" .
    "18eb072001280822e5010a08526573706f6e736512480a106d6574615f69" .
    "6e666f726d6174696f6e18022003280b322e2e6473746f72652e656e6769" .
    "6e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d61" .
    "74696f6e122f0a076d65737361676518032003280b321e2e6473746f7265" .
    "2e656e67696e652e6d6573736167652e4d65737361676512460a03726f77" .
    "18042003280b32392e6473746f72652e656e67696e652e696d5f4d6f6469" .
    "66794c6f636b65644e6f6465436861726163735f41642e526573706f6e73" .
    "652e526f771a160a03526f77120f0a06726f775f696418904e2001280542" .
    "5e0a1b696f2e6473746f72652e656e67696e652e70726f63656475726573" .
    "5a3f676f73646b2e6473746f72652e64652f656e67696e652f70726f6365" .
    "64757265732f696d5f4d6f646966794c6f636b65644e6f64654368617261" .
    "63735f4164620670726f746f33"
));
