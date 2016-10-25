<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampCondCriteriaTypes_Ad.proto

namespace Dstore\Engine\Om_GetCampCondCriteriaTypes_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $criteria_type_id = null;
    private $criteria_type_id_null = false;

    public function getCriteriaTypeId()
    {
        return $this->criteria_type_id;
    }

    public function setCriteriaTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->criteria_type_id = $var;
    }

    public function getCriteriaTypeIdNull()
    {
        return $this->criteria_type_id_null;
    }

    public function setCriteriaTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->criteria_type_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetCampCondCriteriaTypes_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $criterai_type = null;
    private $criteria_type_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getCriteraiType()
    {
        return $this->criterai_type;
    }

    public function setCriteraiType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->criterai_type = $var;
    }

    public function getCriteriaTypeId()
    {
        return $this->criteria_type_id;
    }

    public function setCriteriaTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->criteria_type_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae8050a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657443616d70436f6e64437269746572696154797065735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4765744361" .
    "6d70436f6e64437269746572696154797065735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22630a0a506172616d6574" .
    "65727312350a1063726974657269615f747970655f696418012001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c7565121e" .
    "0a1563726974657269615f747970655f69645f6e756c6c18e90720012808" .
    "22d3020a08526573706f6e736512480a106d6574615f696e666f726d6174" .
    "696f6e18022003280b322e2e6473746f72652e656e67696e652e6d657461" .
    "696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a" .
    "076d65737361676518032003280b321e2e6473746f72652e656e67696e65" .
    "2e6d6573736167652e4d65737361676512470a03726f7718042003280b32" .
    "3a2e6473746f72652e656e67696e652e6f6d5f47657443616d70436f6e64" .
    "437269746572696154797065735f41642e526573706f6e73652e526f771a" .
    "82010a03526f77120f0a06726f775f696418904e2001280512320a0d6372" .
    "6974657261695f7479706518914e2001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512360a1063726974657269615f74" .
    "7970655f696418924e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c7565425f0a1b696f2e6473746f72652e656e6769" .
    "6e652e70726f636564757265735a40676f73646b2e6473746f72652e6465" .
    "2f656e67696e652f70726f636564757265732f6f6d5f47657443616d7043" .
    "6f6e64437269746572696154797065735f4164620670726f746f33"
));
