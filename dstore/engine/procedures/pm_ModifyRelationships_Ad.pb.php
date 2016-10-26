<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyRelationships_Ad.proto

namespace Dstore\Engine\Pm_ModifyRelationships_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $relationship_id = null;
    private $relationship_id_null = false;
    private $relationship = null;
    private $relationship_null = false;
    private $delete_relationship = null;
    private $delete_relationship_null = false;

    public function getRelationshipId()
    {
        return $this->relationship_id;
    }

    public function setRelationshipId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->relationship_id = $var;
    }

    public function getRelationshipIdNull()
    {
        return $this->relationship_id_null;
    }

    public function setRelationshipIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->relationship_id_null = $var;
    }

    public function getRelationship()
    {
        return $this->relationship;
    }

    public function setRelationship(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->relationship = $var;
    }

    public function getRelationshipNull()
    {
        return $this->relationship_null;
    }

    public function setRelationshipNull($var)
    {
        GPBUtil::checkBool($var);
        $this->relationship_null = $var;
    }

    public function getDeleteRelationship()
    {
        return $this->delete_relationship;
    }

    public function setDeleteRelationship(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_relationship = $var;
    }

    public function getDeleteRelationshipNull()
    {
        return $this->delete_relationship_null;
    }

    public function setDeleteRelationshipNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_relationship_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_ModifyRelationships_Ad\Response_Row::class);
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
    "0a91060a386473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f4d6f6469667952656c6174696f6e73686970735f41642e70726f74" .
    "6f12276473746f72652e656e67696e652e706d5f4d6f6469667952656c61" .
    "74696f6e73686970735f41641a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f228c020a0a506172616d657465727312340a0f7265" .
    "6c6174696f6e736869705f696418012001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c7565121d0a1472656c6174696f6e" .
    "736869705f69645f6e756c6c18e9072001280812300a0c72656c6174696f" .
    "6e7368697018022001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565121a0a1172656c6174696f6e736869705f6e756c6c" .
    "18ea072001280812380a1364656c6574655f72656c6174696f6e73686970" .
    "18032001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c756512210a1864656c6574655f72656c6174696f6e736869705f6e" .
    "756c6c18eb072001280822e1010a08526573706f6e736512480a106d6574" .
    "615f696e666f726d6174696f6e18022003280b322e2e6473746f72652e65" .
    "6e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f" .
    "726d6174696f6e122f0a076d65737361676518032003280b321e2e647374" .
    "6f72652e656e67696e652e6d6573736167652e4d65737361676512420a03" .
    "726f7718042003280b32352e6473746f72652e656e67696e652e706d5f4d" .
    "6f6469667952656c6174696f6e73686970735f41642e526573706f6e7365" .
    "2e526f771a160a03526f77120f0a06726f775f696418904e20012805425a" .
    "0a1b696f2e6473746f72652e656e67696e652e70726f636564757265735a" .
    "3b676f73646b2e6473746f72652e64652f656e67696e652f70726f636564" .
    "757265732f706d5f4d6f6469667952656c6174696f6e73686970735f4164" .
    "620670726f746f33"
));

