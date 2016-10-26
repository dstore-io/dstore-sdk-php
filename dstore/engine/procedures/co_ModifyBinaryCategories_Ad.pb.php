<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_ModifyBinaryCategories_Ad.proto

namespace Dstore\Engine\Co_ModifyBinaryCategories_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $community_binary_category_id = null;
    private $community_binary_category_id_null = false;
    private $community_id = null;
    private $community_id_null = false;
    private $community_binary_category = null;
    private $community_binary_category_null = false;
    private $sort_no = null;
    private $sort_no_null = false;
    private $access_level = null;
    private $access_level_null = false;
    private $binary_quota_in_k_b = null;
    private $binary_quota_in_k_b_null = false;
    private $max_number_of_binaries = null;
    private $max_number_of_binaries_null = false;
    private $delete_binary_category = null;
    private $delete_binary_category_null = false;

    public function getCommunityBinaryCategoryId()
    {
        return $this->community_binary_category_id;
    }

    public function setCommunityBinaryCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->community_binary_category_id = $var;
    }

    public function getCommunityBinaryCategoryIdNull()
    {
        return $this->community_binary_category_id_null;
    }

    public function setCommunityBinaryCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_binary_category_id_null = $var;
    }

    public function getCommunityId()
    {
        return $this->community_id;
    }

    public function setCommunityId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->community_id = $var;
    }

    public function getCommunityIdNull()
    {
        return $this->community_id_null;
    }

    public function setCommunityIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_id_null = $var;
    }

    public function getCommunityBinaryCategory()
    {
        return $this->community_binary_category;
    }

    public function setCommunityBinaryCategory(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->community_binary_category = $var;
    }

    public function getCommunityBinaryCategoryNull()
    {
        return $this->community_binary_category_null;
    }

    public function setCommunityBinaryCategoryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_binary_category_null = $var;
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

    public function getAccessLevel()
    {
        return $this->access_level;
    }

    public function setAccessLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->access_level = $var;
    }

    public function getAccessLevelNull()
    {
        return $this->access_level_null;
    }

    public function setAccessLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->access_level_null = $var;
    }

    public function getBinaryQuotaInKB()
    {
        return $this->binary_quota_in_k_b;
    }

    public function setBinaryQuotaInKB(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->binary_quota_in_k_b = $var;
    }

    public function getBinaryQuotaInKBNull()
    {
        return $this->binary_quota_in_k_b_null;
    }

    public function setBinaryQuotaInKBNull($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_quota_in_k_b_null = $var;
    }

    public function getMaxNumberOfBinaries()
    {
        return $this->max_number_of_binaries;
    }

    public function setMaxNumberOfBinaries(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_binaries = $var;
    }

    public function getMaxNumberOfBinariesNull()
    {
        return $this->max_number_of_binaries_null;
    }

    public function setMaxNumberOfBinariesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_number_of_binaries_null = $var;
    }

    public function getDeleteBinaryCategory()
    {
        return $this->delete_binary_category;
    }

    public function setDeleteBinaryCategory(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete_binary_category = $var;
    }

    public function getDeleteBinaryCategoryNull()
    {
        return $this->delete_binary_category_null;
    }

    public function setDeleteBinaryCategoryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_binary_category_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Co_ModifyBinaryCategories_Ad\Response_Row::class);
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
    "0afa090a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "636f5f4d6f6469667942696e61727943617465676f726965735f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e636f5f4d6f6469667942" .
    "696e61727943617465676f726965735f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f22e9050a0a506172616d6574657273" .
    "12410a1c636f6d6d756e6974795f62696e6172795f63617465676f72795f" .
    "696418012001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565122a0a21636f6d6d756e6974795f62696e6172795f6361" .
    "7465676f72795f69645f6e756c6c18e9072001280812310a0c636f6d6d75" .
    "6e6974795f696418022001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c7565121a0a11636f6d6d756e6974795f69645f6e" .
    "756c6c18ea0720012808123d0a19636f6d6d756e6974795f62696e617279" .
    "5f63617465676f727918032001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c756512270a1e636f6d6d756e6974795f62696e" .
    "6172795f63617465676f72795f6e756c6c18eb0720012808122c0a07736f" .
    "72745f6e6f18042001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512150a0c736f72745f6e6f5f6e756c6c18ec0720" .
    "01280812310a0c6163636573735f6c6576656c18052001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565121a0a116163" .
    "636573735f6c6576656c5f6e756c6c18ed072001280812380a1362696e61" .
    "72795f71756f74615f696e5f6b5f6218062001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512210a1862696e617279" .
    "5f71756f74615f696e5f6b5f625f6e756c6c18ee0720012808123b0a166d" .
    "61785f6e756d6265725f6f665f62696e617269657318072001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512240a1b" .
    "6d61785f6e756d6265725f6f665f62696e61726965735f6e756c6c18ef07" .
    "20012808123b0a1664656c6574655f62696e6172795f63617465676f7279" .
    "18082001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c756512240a1b64656c6574655f62696e6172795f63617465676f72" .
    "795f6e756c6c18f0072001280822e4010a08526573706f6e736512480a10" .
    "6d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f72" .
    "652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65746149" .
    "6e666f726d6174696f6e122f0a076d65737361676518032003280b321e2e" .
    "6473746f72652e656e67696e652e6d6573736167652e4d65737361676512" .
    "450a03726f7718042003280b32382e6473746f72652e656e67696e652e63" .
    "6f5f4d6f6469667942696e61727943617465676f726965735f41642e5265" .
    "73706f6e73652e526f771a160a03526f77120f0a06726f775f696418904e" .
    "20012805425d0a1b696f2e6473746f72652e656e67696e652e70726f6365" .
    "64757265735a3e676f73646b2e6473746f72652e64652f656e67696e652f" .
    "70726f636564757265732f636f5f4d6f6469667942696e61727943617465" .
    "676f726965735f4164620670726f746f33"
));

