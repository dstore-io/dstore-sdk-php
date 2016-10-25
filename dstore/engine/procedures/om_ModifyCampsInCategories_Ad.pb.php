<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyCampsInCategories_Ad.proto

namespace Dstore\Engine\Om_ModifyCampsInCategories_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $campaign_id = null;
    private $campaign_id_null = false;
    private $campaign_category_id = null;
    private $campaign_category_id_null = false;
    private $sort_no = null;
    private $sort_no_null = false;
    private $delete = null;
    private $delete_null = false;

    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    public function setCampaignId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->campaign_id = $var;
    }

    public function getCampaignIdNull()
    {
        return $this->campaign_id_null;
    }

    public function setCampaignIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->campaign_id_null = $var;
    }

    public function getCampaignCategoryId()
    {
        return $this->campaign_category_id;
    }

    public function setCampaignCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->campaign_category_id = $var;
    }

    public function getCampaignCategoryIdNull()
    {
        return $this->campaign_category_id_null;
    }

    public function setCampaignCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->campaign_category_id_null = $var;
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

    public function getSortNoNull()
    {
        return $this->sort_no_null;
    }

    public function setSortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_no_null = $var;
    }

    public function getDelete()
    {
        return $this->delete;
    }

    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete = $var;
    }

    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyCampsInCategories_Ad\Response_Row::class);
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
    "0ad5060a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f6469667943616d7073496e43617465676f726965735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e6f6d5f4d6f64696679" .
    "43616d7073496e43617465676f726965735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22c0020a0a506172616d657465" .
    "727312300a0b63616d706169676e5f696418012001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512190a1063616d70" .
    "6169676e5f69645f6e756c6c18e9072001280812390a1463616d70616967" .
    "6e5f63617465676f72795f696418022001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512220a1963616d706169676e" .
    "5f63617465676f72795f69645f6e756c6c18ea0720012808122c0a07736f" .
    "72745f6e6f18032001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512150a0c736f72745f6e6f5f6e756c6c18eb0720" .
    "012808122b0a0664656c65746518042001280b321b2e6473746f72652e76" .
    "616c7565732e626f6f6c65616e56616c756512140a0b64656c6574655f6e" .
    "756c6c18ec072001280822e5010a08526573706f6e736512480a106d6574" .
    "615f696e666f726d6174696f6e18022003280b322e2e6473746f72652e65" .
    "6e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f" .
    "726d6174696f6e122f0a076d65737361676518032003280b321e2e647374" .
    "6f72652e656e67696e652e6d6573736167652e4d65737361676512460a03" .
    "726f7718042003280b32392e6473746f72652e656e67696e652e6f6d5f4d" .
    "6f6469667943616d7073496e43617465676f726965735f41642e52657370" .
    "6f6e73652e526f771a160a03526f77120f0a06726f775f696418904e2001" .
    "2805425e0a1b696f2e6473746f72652e656e67696e652e70726f63656475" .
    "7265735a3f676f73646b2e6473746f72652e64652f656e67696e652f7072" .
    "6f636564757265732f6f6d5f4d6f6469667943616d7073496e4361746567" .
    "6f726965735f4164620670726f746f33"
));
