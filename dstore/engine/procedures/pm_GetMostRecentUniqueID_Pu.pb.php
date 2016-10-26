<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetMostRecentUniqueID_Pu.proto

namespace Dstore\Engine\Pm_GetMostRecentUniqueID_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_identification_values = null;
    private $person_identification_values_null = false;
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $case_sensitive = null;
    private $case_sensitive_null = false;

    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->person_identification_values = $var;
    }

    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_type_id = $var;
    }

    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    public function setCaseSensitive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->case_sensitive = $var;
    }

    public function getCaseSensitiveNull()
    {
        return $this->case_sensitive_null;
    }

    public function setCaseSensitiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetMostRecentUniqueID_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $visitor_id = null;
    private $unique_id = null;
    private $person_id = null;
    private $valid_from = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getVisitorId()
    {
        return $this->visitor_id;
    }

    public function setVisitorId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->visitor_id = $var;
    }

    public function getUniqueId()
    {
        return $this->unique_id;
    }

    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->unique_id = $var;
    }

    public function getPersonId()
    {
        return $this->person_id;
    }

    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_id = $var;
    }

    public function getValidFrom()
    {
        return $this->valid_from;
    }

    public function setValidFrom(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->valid_from = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af5070a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f4765744d6f7374526563656e74556e6971756549445f50752e7072" .
    "6f746f12296473746f72652e656e67696e652e706d5f4765744d6f737452" .
    "6563656e74556e6971756549445f50751a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22a0020a0a506172616d65746572731240" .
    "0a1c706572736f6e5f6964656e74696669636174696f6e5f76616c756573" .
    "18012001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c7565122a0a21706572736f6e5f6964656e74696669636174696f6e5f" .
    "76616c7565735f6e756c6c18e9072001280812330a0e706572736f6e5f74" .
    "7970655f696418022001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565121c0a13706572736f6e5f747970655f69645f" .
    "6e756c6c18ea072001280812330a0e636173655f73656e73697469766518" .
    "032001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56" .
    "616c7565121c0a13636173655f73656e7369746976655f6e756c6c18eb07" .
    "2001280822ab030a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d65737361676512440a03726f77180420" .
    "03280b32372e6473746f72652e656e67696e652e706d5f4765744d6f7374" .
    "526563656e74556e6971756549445f50752e526573706f6e73652e526f77" .
    "1add010a03526f77120f0a06726f775f696418904e2001280512300a0a76" .
    "697369746f725f696418914e2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565122e0a09756e697175655f69641892" .
    "4e2001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c7565122f0a09706572736f6e5f696418934e2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512320a0a76616c69" .
    "645f66726f6d18944e2001280b321d2e6473746f72652e76616c7565732e" .
    "74696d657374616d7056616c7565425c0a1b696f2e6473746f72652e656e" .
    "67696e652e70726f636564757265735a3d676f73646b2e6473746f72652e" .
    "64652f656e67696e652f70726f636564757265732f706d5f4765744d6f73" .
    "74526563656e74556e6971756549445f5075620670726f746f33"
));

