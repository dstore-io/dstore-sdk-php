<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_GetBinaryCharacteristics_Ad.proto

namespace Dstore\Engine\Im_GetBinaryCharacteristics_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $binary_characteristic_id = null;
    private $binary_characteristic_id_null = false;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_GetBinaryCharacteristics_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $characteristic_description = null;
    private $binary_characteristic_id = null;
    private $modify = null;
    private $sort_no = null;
    private $predefined_values = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getCharacteristicDescription()
    {
        return $this->characteristic_description;
    }

    public function setCharacteristicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_description = $var;
    }

    public function getBinaryCharacteristicId()
    {
        return $this->binary_characteristic_id;
    }

    public function setBinaryCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->binary_characteristic_id = $var;
    }

    public function getModify()
    {
        return $this->modify;
    }

    public function setModify(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->modify = $var;
    }

    public function getSortNo()
    {
        return $this->sort_no;
    }

    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->sort_no = $var;
    }

    public function getPredefinedValues()
    {
        return $this->predefined_values;
    }

    public function setPredefinedValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->predefined_values = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aa3070a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f47657442696e6172794368617261637465726973746963735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e696d5f4765744269" .
    "6e6172794368617261637465726973746963735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22730a0a506172616d6574" .
    "657273123d0a1862696e6172795f63686172616374657269737469635f69" .
    "6418012001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512260a1d62696e6172795f63686172616374657269737469" .
    "635f69645f6e756c6c18e9072001280822fe030a08526573706f6e736512" .
    "480a106d6574615f696e666f726d6174696f6e18022003280b322e2e6473" .
    "746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65" .
    "7461496e666f726d6174696f6e122f0a076d65737361676518032003280b" .
    "321e2e6473746f72652e656e67696e652e6d6573736167652e4d65737361" .
    "676512470a03726f7718042003280b323a2e6473746f72652e656e67696e" .
    "652e696d5f47657442696e6172794368617261637465726973746963735f" .
    "41642e526573706f6e73652e526f771aad020a03526f77120f0a06726f77" .
    "5f696418904e20012805123f0a1a63686172616374657269737469635f64" .
    "65736372697074696f6e18914e2001280b321a2e6473746f72652e76616c" .
    "7565732e737472696e6756616c7565123e0a1862696e6172795f63686172" .
    "616374657269737469635f696418924e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565122c0a066d6f6469667918" .
    "934e2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c7565122d0a07736f72745f6e6f18944e2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512370a1170726564" .
    "6566696e65645f76616c75657318954e2001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c7565425f0a1b696f2e6473746f" .
    "72652e656e67696e652e70726f636564757265735a40676f73646b2e6473" .
    "746f72652e64652f656e67696e652f70726f636564757265732f696d5f47" .
    "657442696e6172794368617261637465726973746963735f416462067072" .
    "6f746f33"
));
