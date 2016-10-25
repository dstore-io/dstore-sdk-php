<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_FormARelationship_Pu.proto

namespace Dstore\Engine\Pm_FormARelationship_Pu;

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
    private $related_person_id = null;
    private $related_person_id_null = false;
    private $relationship_id = null;
    private $relationship_id_null = false;
    private $access_level = null;
    private $access_level_null = false;
    private $related_identification_values = null;
    private $related_identification_values_null = false;
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

    public function getRelatedPersonId()
    {
        return $this->related_person_id;
    }

    public function setRelatedPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->related_person_id = $var;
    }

    public function getRelatedPersonIdNull()
    {
        return $this->related_person_id_null;
    }

    public function setRelatedPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->related_person_id_null = $var;
    }

    public function getRelationshipId()
    {
        return $this->relationship_id;
    }

    public function setRelationshipId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->relationship_id = $var;
    }

    public function getRelationshipIdNull()
    {
        return $this->relationship_id_null;
    }

    public function setRelationshipIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->relationship_id_null = $var;
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

    public function getRelatedIdentificationValues()
    {
        return $this->related_identification_values;
    }

    public function setRelatedIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->related_identification_values = $var;
    }

    public function getRelatedIdentificationValuesNull()
    {
        return $this->related_identification_values_null;
    }

    public function setRelatedIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->related_identification_values_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_FormARelationship_Pu\Response_Row::class);
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
    "0ae3090a366473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f466f726d4152656c6174696f6e736869705f50752e70726f746f12" .
    "256473746f72652e656e67696e652e706d5f466f726d4152656c6174696f" .
    "6e736869705f50751a136473746f72652f76616c7565732e70726f746f1a" .
    "1b6473746f72652f656e67696e652f6d6573736167652e70726f746f1a23" .
    "6473746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e" .
    "70726f746f22e6050a0a506172616d657465727312400a1c706572736f6e" .
    "5f6964656e74696669636174696f6e5f76616c75657318012001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c7565122a0a21" .
    "706572736f6e5f6964656e74696669636174696f6e5f76616c7565735f6e" .
    "756c6c18e9072001280812330a0e706572736f6e5f747970655f69641802" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565121c0a13706572736f6e5f747970655f69645f6e756c6c18ea0720" .
    "012808122d0a09756e697175655f696418032001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512170a0e756e69717565" .
    "5f69645f6e756c6c18eb072001280812360a1172656c617465645f706572" .
    "736f6e5f696418042001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565121f0a1672656c617465645f706572736f6e5f" .
    "69645f6e756c6c18ec072001280812340a0f72656c6174696f6e73686970" .
    "5f696418052001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565121d0a1472656c6174696f6e736869705f69645f6e75" .
    "6c6c18ed072001280812310a0c6163636573735f6c6576656c1806200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "121a0a116163636573735f6c6576656c5f6e756c6c18ee07200128081241" .
    "0a1d72656c617465645f6964656e74696669636174696f6e5f76616c7565" .
    "7318072001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c7565122b0a2272656c617465645f6964656e74696669636174696f" .
    "6e5f76616c7565735f6e756c6c18ef0720012808123b0a17736570617261" .
    "746f725f696e5f6964656e745f76616c7318082001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512250a1c7365706172" .
    "61746f725f696e5f6964656e745f76616c735f6e756c6c18f00720012808" .
    "22df010a08526573706f6e736512480a106d6574615f696e666f726d6174" .
    "696f6e18022003280b322e2e6473746f72652e656e67696e652e6d657461" .
    "696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a" .
    "076d65737361676518032003280b321e2e6473746f72652e656e67696e65" .
    "2e6d6573736167652e4d65737361676512400a03726f7718042003280b32" .
    "332e6473746f72652e656e67696e652e706d5f466f726d4152656c617469" .
    "6f6e736869705f50752e526573706f6e73652e526f771a160a03526f7712" .
    "0f0a06726f775f696418904e2001280542580a1b696f2e6473746f72652e" .
    "656e67696e652e70726f636564757265735a39676f73646b2e6473746f72" .
    "652e64652f656e67696e652f70726f636564757265732f706d5f466f726d" .
    "4152656c6174696f6e736869705f5075620670726f746f33"
));
