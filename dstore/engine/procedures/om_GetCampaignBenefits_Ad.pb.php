<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignBenefits_Ad.proto

namespace Dstore\Engine\Om_GetCampaignBenefits_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $campaign_id = null;
    private $campaign_id_null = false;
    private $benefit_type_id = null;
    private $benefit_type_id_null = false;

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

    public function getBenefitTypeId()
    {
        return $this->benefit_type_id;
    }

    public function setBenefitTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->benefit_type_id = $var;
    }

    public function getBenefitTypeIdNull()
    {
        return $this->benefit_type_id_null;
    }

    public function setBenefitTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->benefit_type_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetCampaignBenefits_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $benefit_id = null;
    private $campaign_id = null;
    private $benefit_type_description = null;
    private $benefit_type_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getBenefitId()
    {
        return $this->benefit_id;
    }

    public function setBenefitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->benefit_id = $var;
    }

    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    public function setCampaignId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->campaign_id = $var;
    }

    public function getBenefitTypeDescription()
    {
        return $this->benefit_type_description;
    }

    public function setBenefitTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->benefit_type_description = $var;
    }

    public function getBenefitTypeId()
    {
        return $this->benefit_type_id;
    }

    public function setBenefitTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->benefit_type_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a8f070a386473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657443616d706169676e42656e65666974735f41642e70726f74" .
    "6f12276473746f72652e656e67696e652e6f6d5f47657443616d70616967" .
    "6e42656e65666974735f41641a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f22ae010a0a506172616d657465727312300a0b6361" .
    "6d706169676e5f696418012001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756512190a1063616d706169676e5f69645f" .
    "6e756c6c18e9072001280812340a0f62656e656669745f747970655f6964" .
    "18022001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c7565121d0a1462656e656669745f747970655f69645f6e756c6c18" .
    "ea072001280822bd030a08526573706f6e736512480a106d6574615f696e" .
    "666f726d6174696f6e18022003280b322e2e6473746f72652e656e67696e" .
    "652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174" .
    "696f6e122f0a076d65737361676518032003280b321e2e6473746f72652e" .
    "656e67696e652e6d6573736167652e4d65737361676512420a03726f7718" .
    "042003280b32352e6473746f72652e656e67696e652e6f6d5f4765744361" .
    "6d706169676e42656e65666974735f41642e526573706f6e73652e526f77" .
    "1af1010a03526f77120f0a06726f775f696418904e2001280512300a0a62" .
    "656e656669745f696418914e2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512310a0b63616d706169676e5f6964" .
    "18924e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c7565123d0a1862656e656669745f747970655f64657363726970" .
    "74696f6e18934e2001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c756512350a0f62656e656669745f747970655f69641894" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565425a0a1b696f2e6473746f72652e656e67696e652e70726f6365" .
    "64757265735a3b676f73646b2e6473746f72652e64652f656e67696e652f" .
    "70726f636564757265732f6f6d5f47657443616d706169676e42656e6566" .
    "6974735f4164620670726f746f33"
));

