<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonAccessCharacs_Pu.proto

namespace Dstore\Engine\Pm_GetPersonAccessCharacs_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $language_id = null;
    private $language_id_null = false;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetPersonAccessCharacs_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $description = null;
    private $precision_value = null;
    private $modify = null;
    private $max_length = null;
    private $sort_no = null;
    private $predefined_values = null;
    private $read_access_restriction_pattern = null;
    private $format = null;
    private $required = null;
    private $basic_field_type = null;
    private $visible = null;
    private $basic_field_type_id = null;
    private $id = null;
    private $language_id = null;

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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0abc0a0a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f476574506572736f6e416363657373436861726163735f50752e70" .
    "726f746f122a6473746f72652e656e67696e652e706d5f47657450657273" .
    "6f6e416363657373436861726163735f50751a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f22590a0a506172616d657465727312" .
    "300a0b6c616e67756167655f696418012001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512190a106c616e67756167" .
    "655f69645f6e756c6c18e9072001280822b7070a08526573706f6e736512" .
    "480a106d6574615f696e666f726d6174696f6e18022003280b322e2e6473" .
    "746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65" .
    "7461496e666f726d6174696f6e122f0a076d65737361676518032003280b" .
    "321e2e6473746f72652e656e67696e652e6d6573736167652e4d65737361" .
    "676512450a03726f7718042003280b32382e6473746f72652e656e67696e" .
    "652e706d5f476574506572736f6e416363657373436861726163735f5075" .
    "2e526573706f6e73652e526f771ae8050a03526f77120f0a06726f775f69" .
    "6418904e2001280512300a0b6465736372697074696f6e18914e2001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c75651235" .
    "0a0f707265636973696f6e5f76616c756518924e2001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c7565122c0a066d6f64" .
    "69667918934e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c756512300a0a6d61785f6c656e67746818944e2001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "2d0a07736f72745f6e6f18954e2001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512370a11707265646566696e6564" .
    "5f76616c75657318964e2001280b321b2e6473746f72652e76616c756573" .
    "2e626f6f6c65616e56616c756512440a1f726561645f6163636573735f72" .
    "65737472696374696f6e5f7061747465726e18974e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565122b0a06666f72" .
    "6d617418984e2001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c7565122e0a08726571756972656418994e2001280b321b2e" .
    "6473746f72652e76616c7565732e626f6f6c65616e56616c756512350a10" .
    "62617369635f6669656c645f74797065189a4e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c7565122d0a077669736962" .
    "6c65189b4e2001280b321b2e6473746f72652e76616c7565732e626f6f6c" .
    "65616e56616c756512390a1362617369635f6669656c645f747970655f69" .
    "64189c4e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512280a026964189d4e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512310a0b6c616e67756167" .
    "655f6964189e4e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565425d0a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a3e676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f706d5f476574506572736f6e41" .
    "6363657373436861726163735f5075620670726f746f33"
));
