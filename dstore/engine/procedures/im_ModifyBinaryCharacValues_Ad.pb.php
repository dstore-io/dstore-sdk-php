<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ModifyBinaryCharacValues_Ad.proto

namespace Dstore\Engine\Im_ModifyBinaryCharacValues_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $binary_characteristic_id = null;
    private $binary_characteristic_id_null = false;
    private $value = null;
    private $value_null = false;
    private $delete_value = null;
    private $delete_value_null = false;

    public function getBinaryCharacteristicId()
    {
        return $this->binary_characteristic_id;
    }

    public function setBinaryCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->binary_characteristic_id = $var;
    }

    public function getBinaryCharacteristicIdNull()
    {
        return $this->binary_characteristic_id_null;
    }

    public function setBinaryCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_characteristic_id_null = $var;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
    }

    public function getValueNull()
    {
        return $this->value_null;
    }

    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
    }

    public function getDeleteValue()
    {
        return $this->delete_value;
    }

    public function setDeleteValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_value = $var;
    }

    public function getDeleteValueNull()
    {
        return $this->delete_value_null;
    }

    public function setDeleteValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_value_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_ModifyBinaryCharacValues_Ad\Response_Row::class);
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
    "0a9b060a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f4d6f6469667942696e61727943686172616356616c7565735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e696d5f4d6f646966" .
    "7942696e61727943686172616356616c7565735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f2282020a0a506172616d65" .
    "74657273123d0a1862696e6172795f63686172616374657269737469635f" .
    "696418012001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512260a1d62696e6172795f636861726163746572697374" .
    "69635f69645f6e756c6c18e9072001280812290a0576616c756518022001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12130a0a76616c75655f6e756c6c18ea072001280812310a0c64656c6574" .
    "655f76616c756518032001280b321b2e6473746f72652e76616c7565732e" .
    "626f6f6c65616e56616c7565121a0a1164656c6574655f76616c75655f6e" .
    "756c6c18eb072001280822e6010a08526573706f6e736512480a106d6574" .
    "615f696e666f726d6174696f6e18022003280b322e2e6473746f72652e65" .
    "6e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f" .
    "726d6174696f6e122f0a076d65737361676518032003280b321e2e647374" .
    "6f72652e656e67696e652e6d6573736167652e4d65737361676512470a03" .
    "726f7718042003280b323a2e6473746f72652e656e67696e652e696d5f4d" .
    "6f6469667942696e61727943686172616356616c7565735f41642e526573" .
    "706f6e73652e526f771a160a03526f77120f0a06726f775f696418904e20" .
    "012805425f0a1b696f2e6473746f72652e656e67696e652e70726f636564" .
    "757265735a40676f73646b2e6473746f72652e64652f656e67696e652f70" .
    "726f636564757265732f696d5f4d6f6469667942696e6172794368617261" .
    "6356616c7565735f4164620670726f746f33"
));

