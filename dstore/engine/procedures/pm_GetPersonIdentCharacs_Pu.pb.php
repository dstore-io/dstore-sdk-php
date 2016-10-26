<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonIdentCharacs_Pu.proto

namespace Dstore\Engine\Pm_GetPersonIdentCharacs_Pu;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $language_id = null;
    private $language_id_null = false;

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

    public function getLanguageId()
    {
        return $this->language_id;
    }

    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->language_id = $var;
    }

    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetPersonIdentCharacs_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $description = null;
    private $position = null;
    private $precision_value = null;
    private $modify = null;
    private $max_length = null;
    private $sort_no = null;
    private $predefined_values = null;
    private $read_access_restriction_pattern = null;
    private $format = null;
    private $person_type_description = null;
    private $required = null;
    private $basic_field_type = null;
    private $visible = null;
    private $basic_field_type_id = null;
    private $id = null;
    private $language_id = null;
    private $person_type_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->description = $var;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->position = $var;
    }

    public function getPrecisionValue()
    {
        return $this->precision_value;
    }

    public function setPrecisionValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->precision_value = $var;
    }

    public function getModify()
    {
        return $this->modify;
    }

    public function setModify(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->modify = $var;
    }

    public function getMaxLength()
    {
        return $this->max_length;
    }

    public function setMaxLength(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_length = $var;
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

    public function getReadAccessRestrictionPattern()
    {
        return $this->read_access_restriction_pattern;
    }

    public function setReadAccessRestrictionPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->read_access_restriction_pattern = $var;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->format = $var;
    }

    public function getPersonTypeDescription()
    {
        return $this->person_type_description;
    }

    public function setPersonTypeDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->person_type_description = $var;
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function setRequired(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->required = $var;
    }

    public function getBasicFieldType()
    {
        return $this->basic_field_type;
    }

    public function setBasicFieldType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->basic_field_type = $var;
    }

    public function getVisible()
    {
        return $this->visible;
    }

    public function setVisible(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->visible = $var;
    }

    public function getBasicFieldTypeId()
    {
        return $this->basic_field_type_id;
    }

    public function setBasicFieldTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->basic_field_type_id = $var;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->id = $var;
    }

    public function getLanguageId()
    {
        return $this->language_id;
    }

    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->language_id = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab00c0a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f476574506572736f6e4964656e74436861726163735f50752e7072" .
    "6f746f12296473746f72652e656e67696e652e706d5f476574506572736f" .
    "6e4964656e74436861726163735f50751a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22ac010a0a506172616d65746572731233" .
    "0a0e706572736f6e5f747970655f696418012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565121c0a13706572736f" .
    "6e5f747970655f69645f6e756c6c18e9072001280812300a0b6c616e6775" .
    "6167655f696418022001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512190a106c616e67756167655f69645f6e756c" .
    "6c18ea072001280822da080a08526573706f6e736512480a106d6574615f" .
    "696e666f726d6174696f6e18022003280b322e2e6473746f72652e656e67" .
    "696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d" .
    "6174696f6e122f0a076d65737361676518032003280b321e2e6473746f72" .
    "652e656e67696e652e6d6573736167652e4d65737361676512440a03726f" .
    "7718042003280b32372e6473746f72652e656e67696e652e706d5f476574" .
    "506572736f6e4964656e74436861726163735f50752e526573706f6e7365" .
    "2e526f771a8c070a03526f77120f0a06726f775f696418904e2001280512" .
    "300a0b6465736372697074696f6e18914e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565122e0a08706f736974696f" .
    "6e18924e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512350a0f707265636973696f6e5f76616c756518934e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565122c0a066d6f6469667918944e2001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512300a0a6d61785f6c656e67" .
    "746818954e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565122d0a07736f72745f6e6f18964e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512370a1170" .
    "7265646566696e65645f76616c75657318974e2001280b321b2e6473746f" .
    "72652e76616c7565732e626f6f6c65616e56616c756512440a1f72656164" .
    "5f6163636573735f7265737472696374696f6e5f7061747465726e18984e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "7565122b0a06666f726d617418994e2001280b321a2e6473746f72652e76" .
    "616c7565732e737472696e6756616c7565123c0a17706572736f6e5f7479" .
    "70655f6465736372697074696f6e189a4e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565122e0a0872657175697265" .
    "64189b4e2001280b321b2e6473746f72652e76616c7565732e626f6f6c65" .
    "616e56616c756512350a1062617369635f6669656c645f74797065189c4e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "7565122d0a0776697369626c65189d4e2001280b321b2e6473746f72652e" .
    "76616c7565732e626f6f6c65616e56616c756512390a1362617369635f66" .
    "69656c645f747970655f6964189e4e2001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512280a026964189f4e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12310a0b6c616e67756167655f696418a04e2001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512340a0e706572736f" .
    "6e5f747970655f696418a14e2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565425c0a1b696f2e6473746f72652e65" .
    "6e67696e652e70726f636564757265735a3d676f73646b2e6473746f7265" .
    "2e64652f656e67696e652f70726f636564757265732f706d5f4765745065" .
    "72736f6e4964656e74436861726163735f5075620670726f746f33"
));

