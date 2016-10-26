<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/do_GetSQLFunctionParameters_Ad.proto

namespace Dstore\Engine\Do_GetSQLFunctionParameters_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $s_q_l_function_name = null;
    private $s_q_l_function_name_null = false;

    public function getSQLFunctionName()
    {
        return $this->s_q_l_function_name;
    }

    public function setSQLFunctionName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->s_q_l_function_name = $var;
    }

    public function getSQLFunctionNameNull()
    {
        return $this->s_q_l_function_name_null;
    }

    public function setSQLFunctionNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->s_q_l_function_name_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Do_GetSQLFunctionParameters_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $default_value = null;
    private $length = null;
    private $introduced_indstore_version = null;
    private $data_type = null;
    private $precision_value = null;
    private $parameter_name = null;
    private $scale = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getDefaultValue()
    {
        return $this->default_value;
    }

    public function setDefaultValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->default_value = $var;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->length = $var;
    }

    public function getIntroducedIndstoreVersion()
    {
        return $this->introduced_indstore_version;
    }

    public function setIntroducedIndstoreVersion(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->introduced_indstore_version = $var;
    }

    public function getDataType()
    {
        return $this->data_type;
    }

    public function setDataType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->data_type = $var;
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

    public function getParameterName()
    {
        return $this->parameter_name;
    }

    public function setParameterName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->parameter_name = $var;
    }

    public function getScale()
    {
        return $this->scale;
    }

    public function setScale(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->scale = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aee070a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "646f5f47657453514c46756e6374696f6e506172616d65746572735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e646f5f4765745351" .
    "4c46756e6374696f6e506172616d65746572735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22680a0a506172616d6574" .
    "65727312370a13735f715f6c5f66756e6374696f6e5f6e616d6518012001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12210a18735f715f6c5f66756e6374696f6e5f6e616d655f6e756c6c18e9" .
    "072001280822d4040a08526573706f6e736512480a106d6574615f696e66" .
    "6f726d6174696f6e18022003280b322e2e6473746f72652e656e67696e65" .
    "2e6d657461696e666f726d6174696f6e2e4d657461496e666f726d617469" .
    "6f6e122f0a076d65737361676518032003280b321e2e6473746f72652e65" .
    "6e67696e652e6d6573736167652e4d65737361676512470a03726f771804" .
    "2003280b323a2e6473746f72652e656e67696e652e646f5f47657453514c" .
    "46756e6374696f6e506172616d65746572735f41642e526573706f6e7365" .
    "2e526f771a83030a03526f77120f0a06726f775f696418904e2001280512" .
    "320a0d64656661756c745f76616c756518914e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c7565122c0a066c656e6774" .
    "6818924e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512400a1b696e74726f64756365645f696e6473746f7265" .
    "5f76657273696f6e18934e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c7565122e0a09646174615f7479706518944e20" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512350a0f707265636973696f6e5f76616c756518954e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512330a0e" .
    "706172616d657465725f6e616d6518964e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565122b0a057363616c651897" .
    "4e2001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565425f0a1b696f2e6473746f72652e656e67696e652e70726f6365" .
    "64757265735a40676f73646b2e6473746f72652e64652f656e67696e652f" .
    "70726f636564757265732f646f5f47657453514c46756e6374696f6e5061" .
    "72616d65746572735f4164620670726f746f33"
));

