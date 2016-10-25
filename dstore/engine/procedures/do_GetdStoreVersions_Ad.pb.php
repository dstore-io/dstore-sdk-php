<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetdStoreVersions_Ad.proto

namespace Dstore\Engine\Do_GetdStoreVersions_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $procedure_name = null;
    private $procedure_name_null = false;
    private $get_all_versions_for_procedure = null;
    private $get_all_versions_for_procedure_null = false;

    public function getProcedureName()
    {
        return $this->procedure_name;
    }

    public function setProcedureName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->procedure_name = $var;
    }

    public function getProcedureNameNull()
    {
        return $this->procedure_name_null;
    }

    public function setProcedureNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_name_null = $var;
    }

    public function getGetAllVersionsForProcedure()
    {
        return $this->get_all_versions_for_procedure;
    }

    public function setGetAllVersionsForProcedure(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_all_versions_for_procedure = $var;
    }

    public function getGetAllVersionsForProcedureNull()
    {
        return $this->get_all_versions_for_procedure_null;
    }

    public function setGetAllVersionsForProcedureNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_all_versions_for_procedure_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Do_GetdStoreVersions_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $version_sort_no = null;
    private $dstore_version = null;
    private $release_date_and_time = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getVersionSortNo()
    {
        return $this->version_sort_no;
    }

    public function setVersionSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->version_sort_no = $var;
    }

    public function getDstoreVersion()
    {
        return $this->dstore_version;
    }

    public function setDstoreVersion(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->dstore_version = $var;
    }

    public function getReleaseDateAndTime()
    {
        return $this->release_date_and_time;
    }

    public function setReleaseDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->release_date_and_time = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0afa060a366473746f72652f656e67696e652f70726f636564757265732f" .
    "646f5f4765746453746f726556657273696f6e735f41642e70726f746f12" .
    "256473746f72652e656e67696e652e646f5f4765746453746f7265566572" .
    "73696f6e735f41641a136473746f72652f76616c7565732e70726f746f1a" .
    "1b6473746f72652f656e67696e652f6d6573736167652e70726f746f1a23" .
    "6473746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e" .
    "70726f746f22d1010a0a506172616d657465727312320a0e70726f636564" .
    "7572655f6e616d6518012001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c7565121c0a1370726f6365647572655f6e616d65" .
    "5f6e756c6c18e9072001280812430a1e6765745f616c6c5f76657273696f" .
    "6e735f666f725f70726f63656475726518022001280b321b2e6473746f72" .
    "652e76616c7565732e626f6f6c65616e56616c7565122c0a236765745f61" .
    "6c6c5f76657273696f6e735f666f725f70726f6365647572655f6e756c6c" .
    "18ea0720012808228b030a08526573706f6e736512480a106d6574615f69" .
    "6e666f726d6174696f6e18022003280b322e2e6473746f72652e656e6769" .
    "6e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d61" .
    "74696f6e122f0a076d65737361676518032003280b321e2e6473746f7265" .
    "2e656e67696e652e6d6573736167652e4d65737361676512400a03726f77" .
    "18042003280b32332e6473746f72652e656e67696e652e646f5f47657464" .
    "53746f726556657273696f6e735f41642e526573706f6e73652e526f771a" .
    "c1010a03526f77120f0a06726f775f696418904e2001280512350a0f7665" .
    "7273696f6e5f736f72745f6e6f18914e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512330a0e6473746f72655f" .
    "76657273696f6e18924e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c7565123d0a1572656c656173655f646174655f61" .
    "6e645f74696d6518934e2001280b321d2e6473746f72652e76616c756573" .
    "2e74696d657374616d7056616c756542580a1b696f2e6473746f72652e65" .
    "6e67696e652e70726f636564757265735a39676f73646b2e6473746f7265" .
    "2e64652f656e67696e652f70726f636564757265732f646f5f4765746453" .
    "746f726556657273696f6e735f4164620670726f746f33"
));
