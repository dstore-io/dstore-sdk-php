<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_ModifyForumAccess_Pu.proto

namespace Dstore\Engine\Fo_ModifyForumAccess_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
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
    private $unique_id = null;
    private $unique_id_null = false;
    private $forum_id = null;
    private $forum_id_null = false;
    private $person_or_group_id = null;
    private $person_or_group_id_null = false;
    private $is_group_id = null;
    private $is_group_id_null = false;
    private $access_level = null;
    private $access_level_null = false;
    private $separator_in_ident_vals = null;
    private $separator_in_ident_vals_null = false;

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

    public function getForumId()
    {
        return $this->forum_id;
    }

    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->forum_id = $var;
    }

    public function getForumIdNull()
    {
        return $this->forum_id_null;
    }

    public function setForumIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->forum_id_null = $var;
    }

    public function getPersonOrGroupId()
    {
        return $this->person_or_group_id;
    }

    public function setPersonOrGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_or_group_id = $var;
    }

    public function getPersonOrGroupIdNull()
    {
        return $this->person_or_group_id_null;
    }

    public function setPersonOrGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_or_group_id_null = $var;
    }

    public function getIsGroupId()
    {
        return $this->is_group_id;
    }

    public function setIsGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_group_id = $var;
    }

    public function getIsGroupIdNull()
    {
        return $this->is_group_id_null;
    }

    public function setIsGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->is_group_id_null = $var;
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

    public function getSeparatorInIdentVals()
    {
        return $this->separator_in_ident_vals;
    }

    public function setSeparatorInIdentVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->separator_in_ident_vals = $var;
    }

    public function getSeparatorInIdentValsNull()
    {
        return $this->separator_in_ident_vals_null;
    }

    public function setSeparatorInIdentValsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_ident_vals_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_ModifyForumAccess_Pu\Response_Row::class);
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
    "0ab4090a366473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f4d6f64696679466f72756d4163636573735f50752e70726f746f12" .
    "256473746f72652e656e67696e652e666f5f4d6f64696679466f72756d41" .
    "63636573735f50751a136473746f72652f76616c7565732e70726f746f1a" .
    "1b6473746f72652f656e67696e652f6d6573736167652e70726f746f1a23" .
    "6473746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e" .
    "70726f746f22b7050a0a506172616d657465727312400a1c706572736f6e" .
    "5f6964656e74696669636174696f6e5f76616c75657318012001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c7565122a0a21" .
    "706572736f6e5f6964656e74696669636174696f6e5f76616c7565735f6e" .
    "756c6c18e9072001280812330a0e706572736f6e5f747970655f69641802" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565121c0a13706572736f6e5f747970655f69645f6e756c6c18ea0720" .
    "012808122d0a09756e697175655f696418032001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512170a0e756e69717565" .
    "5f69645f6e756c6c18eb0720012808122d0a08666f72756d5f6964180420" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "756512160a0d666f72756d5f69645f6e756c6c18ec072001280812370a12" .
    "706572736f6e5f6f725f67726f75705f696418052001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512200a17706572" .
    "736f6e5f6f725f67726f75705f69645f6e756c6c18ed072001280812300a" .
    "0b69735f67726f75705f696418062001280b321b2e6473746f72652e7661" .
    "6c7565732e626f6f6c65616e56616c756512190a1069735f67726f75705f" .
    "69645f6e756c6c18ee072001280812310a0c6163636573735f6c6576656c" .
    "18072001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c7565121a0a116163636573735f6c6576656c5f6e756c6c18ef0720" .
    "012808123b0a17736570617261746f725f696e5f6964656e745f76616c73" .
    "18082001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c756512250a1c736570617261746f725f696e5f6964656e745f76616c" .
    "735f6e756c6c18f0072001280822df010a08526573706f6e736512480a10" .
    "6d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f72" .
    "652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65746149" .
    "6e666f726d6174696f6e122f0a076d65737361676518032003280b321e2e" .
    "6473746f72652e656e67696e652e6d6573736167652e4d65737361676512" .
    "400a03726f7718042003280b32332e6473746f72652e656e67696e652e66" .
    "6f5f4d6f64696679466f72756d4163636573735f50752e526573706f6e73" .
    "652e526f771a160a03526f77120f0a06726f775f696418904e2001280542" .
    "580a1b696f2e6473746f72652e656e67696e652e70726f63656475726573" .
    "5a39676f73646b2e6473746f72652e64652f656e67696e652f70726f6365" .
    "64757265732f666f5f4d6f64696679466f72756d4163636573735f507562" .
    "0670726f746f33"
));
