<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetTrolleySurchargeInfo_Pu.proto

namespace Dstore\Engine\Om_GetTrolleySurchargeInfo_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $unique_id = null;
    private $unique_id_null = false;
    private $position_no = null;
    private $position_no_null = false;
    private $information_type_id = null;
    private $information_type_id_null = false;

    public function getUniqueId()
    {
        return $this->unique_id;
    }

    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->unique_id = $var;
    }

    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    public function getPositionNo()
    {
        return $this->position_no;
    }

    public function setPositionNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->position_no = $var;
    }

    public function getPositionNoNull()
    {
        return $this->position_no_null;
    }

    public function setPositionNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->position_no_null = $var;
    }

    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->information_type_id = $var;
    }

    public function getInformationTypeIdNull()
    {
        return $this->information_type_id_null;
    }

    public function setInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetTrolleySurchargeInfo_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $information_type_id = null;
    private $position_no = null;
    private $information_type = null;
    private $information = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->information_type_id = $var;
    }

    public function getPositionNo()
    {
        return $this->position_no;
    }

    public function setPositionNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->position_no = $var;
    }

    public function getInformationType()
    {
        return $this->information_type;
    }

    public function setInformationType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->information_type = $var;
    }

    public function getInformation()
    {
        return $this->information;
    }

    public function setInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->information = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aeb070a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657454726f6c6c6579537572636861726765496e666f5f50752e" .
    "70726f746f122b6473746f72652e656e67696e652e6f6d5f47657454726f" .
    "6c6c6579537572636861726765496e666f5f50751a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22fe010a0a506172616d657465" .
    "7273122d0a09756e697175655f696418012001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512170a0e756e697175655f" .
    "69645f6e756c6c18e9072001280812300a0b706f736974696f6e5f6e6f18" .
    "022001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c756512190a10706f736974696f6e5f6e6f5f6e756c6c18ea07200128" .
    "0812380a13696e666f726d6174696f6e5f747970655f696418032001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "210a18696e666f726d6174696f6e5f747970655f69645f6e756c6c18eb07" .
    "2001280822bd030a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d65737361676512460a03726f77180420" .
    "03280b32392e6473746f72652e656e67696e652e6f6d5f47657454726f6c" .
    "6c6579537572636861726765496e666f5f50752e526573706f6e73652e52" .
    "6f771aed010a03526f77120f0a06726f775f696418904e2001280512390a" .
    "13696e666f726d6174696f6e5f747970655f696418914e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512310a0b" .
    "706f736974696f6e5f6e6f18924e2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512350a10696e666f726d617469" .
    "6f6e5f7479706518934e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c756512300a0b696e666f726d6174696f6e18944e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "7565425e0a1b696f2e6473746f72652e656e67696e652e70726f63656475" .
    "7265735a3f676f73646b2e6473746f72652e64652f656e67696e652f7072" .
    "6f636564757265732f6f6d5f47657454726f6c6c65795375726368617267" .
    "65496e666f5f5075620670726f746f33"
));

