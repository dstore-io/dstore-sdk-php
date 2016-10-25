<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetApplications_Ad.proto

namespace Dstore\Engine\Mi_GetApplications_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $application_id = null;
    private $application_id_null = false;
    private $application_name = null;
    private $application_name_null = false;
    private $search_for_app_name_with_like = null;
    private $search_for_app_name_with_like_null = false;

    public function getApplicationId()
    {
        return $this->application_id;
    }

    public function setApplicationId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->application_id = $var;
    }

    public function getApplicationIdNull()
    {
        return $this->application_id_null;
    }

    public function setApplicationIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->application_id_null = $var;
    }

    public function getApplicationName()
    {
        return $this->application_name;
    }

    public function setApplicationName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->application_name = $var;
    }

    public function getApplicationNameNull()
    {
        return $this->application_name_null;
    }

    public function setApplicationNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->application_name_null = $var;
    }

    public function getSearchForAppNameWithLike()
    {
        return $this->search_for_app_name_with_like;
    }

    public function setSearchForAppNameWithLike(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->search_for_app_name_with_like = $var;
    }

    public function getSearchForAppNameWithLikeNull()
    {
        return $this->search_for_app_name_with_like_null;
    }

    public function setSearchForAppNameWithLikeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_for_app_name_with_like_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetApplications_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $application_name = null;
    private $application_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getApplicationName()
    {
        return $this->application_name;
    }

    public function setApplicationName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->application_name = $var;
    }

    public function getApplicationId()
    {
        return $this->application_id;
    }

    public function setApplicationId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->application_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a89070a346473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4765744170706c69636174696f6e735f41642e70726f746f122364" .
    "73746f72652e656e67696e652e6d695f4765744170706c69636174696f6e" .
    "735f41641a136473746f72652f76616c7565732e70726f746f1a1b647374" .
    "6f72652f656e67696e652f6d6573736167652e70726f746f1a236473746f" .
    "72652f656e67696e652f6d657461696e666f726d6174696f6e2e70726f74" .
    "6f22a6020a0a506172616d657465727312330a0e6170706c69636174696f" .
    "6e5f696418012001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565121c0a136170706c69636174696f6e5f69645f6e75" .
    "6c6c18e9072001280812340a106170706c69636174696f6e5f6e616d6518" .
    "022001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c7565121e0a156170706c69636174696f6e5f6e616d655f6e756c6c18ea" .
    "072001280812420a1d7365617263685f666f725f6170705f6e616d655f77" .
    "6974685f6c696b6518032001280b321b2e6473746f72652e76616c756573" .
    "2e626f6f6c65616e56616c7565122b0a227365617263685f666f725f6170" .
    "705f6e616d655f776974685f6c696b655f6e756c6c18eb072001280822cb" .
    "020a08526573706f6e736512480a106d6574615f696e666f726d6174696f" .
    "6e18022003280b322e2e6473746f72652e656e67696e652e6d657461696e" .
    "666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d" .
    "65737361676518032003280b321e2e6473746f72652e656e67696e652e6d" .
    "6573736167652e4d657373616765123e0a03726f7718042003280b32312e" .
    "6473746f72652e656e67696e652e6d695f4765744170706c69636174696f" .
    "6e735f41642e526573706f6e73652e526f771a83010a03526f77120f0a06" .
    "726f775f696418904e2001280512350a106170706c69636174696f6e5f6e" .
    "616d6518914e2001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c756512340a0e6170706c69636174696f6e5f696418924e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "756542560a1b696f2e6473746f72652e656e67696e652e70726f63656475" .
    "7265735a37676f73646b2e6473746f72652e64652f656e67696e652f7072" .
    "6f636564757265732f6d695f4765744170706c69636174696f6e735f4164" .
    "620670726f746f33"
));
