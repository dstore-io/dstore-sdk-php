<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_MoveNodeCharacValue_Ad.proto

namespace Dstore\Engine\Im_MoveNodeCharacValue_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $value_id = null;
    private $value_id_null = false;
    private $move_up = null;
    private $move_up_null = false;
    private $steps = null;
    private $steps_null = false;

    public function getValueId()
    {
        return $this->value_id;
    }

    public function setValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->value_id = $var;
    }

    public function getValueIdNull()
    {
        return $this->value_id_null;
    }

    public function setValueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_id_null = $var;
    }

    public function getMoveUp()
    {
        return $this->move_up;
    }

    public function setMoveUp(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->move_up = $var;
    }

    public function getMoveUpNull()
    {
        return $this->move_up_null;
    }

    public function setMoveUpNull($var)
    {
        GPBUtil::checkBool($var);
        $this->move_up_null = $var;
    }

    public function getSteps()
    {
        return $this->steps;
    }

    public function setSteps(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->steps = $var;
    }

    public function getStepsNull()
    {
        return $this->steps_null;
    }

    public function setStepsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->steps_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_MoveNodeCharacValue_Ad\Response_Row::class);
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
    "0ade050a386473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4d6f76654e6f646543686172616356616c75655f41642e70726f74" .
    "6f12276473746f72652e656e67696e652e696d5f4d6f76654e6f64654368" .
    "6172616356616c75655f41641a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f22d9010a0a506172616d6574657273122d0a087661" .
    "6c75655f696418012001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512160a0d76616c75655f69645f6e756c6c18e9" .
    "0720012808122c0a076d6f76655f757018022001280b321b2e6473746f72" .
    "652e76616c7565732e626f6f6c65616e56616c756512150a0c6d6f76655f" .
    "75705f6e756c6c18ea0720012808122a0a05737465707318032001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651213" .
    "0a0a73746570735f6e756c6c18eb072001280822e1010a08526573706f6e" .
    "736512480a106d6574615f696e666f726d6174696f6e18022003280b322e" .
    "2e6473746f72652e656e67696e652e6d657461696e666f726d6174696f6e" .
    "2e4d657461496e666f726d6174696f6e122f0a076d657373616765180320" .
    "03280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d65" .
    "737361676512420a03726f7718042003280b32352e6473746f72652e656e" .
    "67696e652e696d5f4d6f76654e6f646543686172616356616c75655f4164" .
    "2e526573706f6e73652e526f771a160a03526f77120f0a06726f775f6964" .
    "18904e20012805425a0a1b696f2e6473746f72652e656e67696e652e7072" .
    "6f636564757265735a3b676f73646b2e6473746f72652e64652f656e6769" .
    "6e652f70726f636564757265732f696d5f4d6f76654e6f64654368617261" .
    "6356616c75655f4164620670726f746f33"
));
