<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_DeletePerson_Ad.proto

namespace Dstore\Engine\Pm_DeletePerson_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_id = null;
    private $person_id_null = false;
    private $force_delete = null;
    private $force_delete_null = false;

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

    public function getForceDelete()
    {
        return $this->force_delete;
    }

    public function setForceDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->force_delete = $var;
    }

    public function getForceDeleteNull()
    {
        return $this->force_delete_null;
    }

    public function setForceDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->force_delete_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_DeletePerson_Ad\Response_Row::class);
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
    "0a8d050a316473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f44656c657465506572736f6e5f41642e70726f746f12206473746f" .
    "72652e656e67696e652e706d5f44656c657465506572736f6e5f41641a13" .
    "6473746f72652f76616c7565732e70726f746f1a1b6473746f72652f656e" .
    "67696e652f6d6573736167652e70726f746f1a236473746f72652f656e67" .
    "696e652f6d657461696e666f726d6174696f6e2e70726f746f22a4010a0a" .
    "506172616d6574657273122e0a09706572736f6e5f696418012001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651217" .
    "0a0e706572736f6e5f69645f6e756c6c18e9072001280812310a0c666f72" .
    "63655f64656c65746518022001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c7565121a0a11666f7263655f64656c657465" .
    "5f6e756c6c18ea072001280822da010a08526573706f6e736512480a106d" .
    "6574615f696e666f726d6174696f6e18022003280b322e2e6473746f7265" .
    "2e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e" .
    "666f726d6174696f6e122f0a076d65737361676518032003280b321e2e64" .
    "73746f72652e656e67696e652e6d6573736167652e4d657373616765123b" .
    "0a03726f7718042003280b322e2e6473746f72652e656e67696e652e706d" .
    "5f44656c657465506572736f6e5f41642e526573706f6e73652e526f771a" .
    "160a03526f77120f0a06726f775f696418904e2001280542530a1b696f2e" .
    "6473746f72652e656e67696e652e70726f636564757265735a34676f7364" .
    "6b2e6473746f72652e64652f656e67696e652f70726f636564757265732f" .
    "706d5f44656c657465506572736f6e5f4164620670726f746f33"
));
