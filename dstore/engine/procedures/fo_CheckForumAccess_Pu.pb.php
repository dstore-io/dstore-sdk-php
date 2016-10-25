<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_CheckForumAccess_Pu.proto

namespace Dstore\Engine\Fo_CheckForumAccess_Pu;

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
    private $access_level = null;
    private $access_level_null = false;
    private $forum_id = null;
    private $forum_id_null = false;
    private $check_forum_ids_in_one_id = null;
    private $check_forum_ids_in_one_id_null = false;
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

    public function getCheckForumIdsInOneId()
    {
        return $this->check_forum_ids_in_one_id;
    }

    public function setCheckForumIdsInOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->check_forum_ids_in_one_id = $var;
    }

    public function getCheckForumIdsInOneIdNull()
    {
        return $this->check_forum_ids_in_one_id_null;
    }

    public function setCheckForumIdsInOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_forum_ids_in_one_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_CheckForumAccess_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $language = null;
    private $forum_id = null;
    private $forum_name = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->language = $var;
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

    public function getForumName()
    {
        return $this->forum_name;
    }

    public function setForumName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->forum_name = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a820a0a356473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f436865636b466f72756d4163636573735f50752e70726f746f1224" .
    "6473746f72652e656e67696e652e666f5f436865636b466f72756d416363" .
    "6573735f50751a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f22f8040a0a506172616d657465727312400a1c706572736f6e5f69" .
    "64656e74696669636174696f6e5f76616c75657318012001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c7565122a0a217065" .
    "72736f6e5f6964656e74696669636174696f6e5f76616c7565735f6e756c" .
    "6c18e9072001280812330a0e706572736f6e5f747970655f696418022001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65121c0a13706572736f6e5f747970655f69645f6e756c6c18ea07200128" .
    "08122d0a09756e697175655f696418032001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c756512170a0e756e697175655f69" .
    "645f6e756c6c18eb072001280812310a0c6163636573735f6c6576656c18" .
    "042001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565121a0a116163636573735f6c6576656c5f6e756c6c18ec072001" .
    "2808122d0a08666f72756d5f696418052001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512160a0d666f72756d5f69" .
    "645f6e756c6c18ed0720012808123e0a19636865636b5f666f72756d5f69" .
    "64735f696e5f6f6e655f696418062001280b321b2e6473746f72652e7661" .
    "6c7565732e626f6f6c65616e56616c756512270a1e636865636b5f666f72" .
    "756d5f6964735f696e5f6f6e655f69645f6e756c6c18ee0720012808123b" .
    "0a17736570617261746f725f696e5f6964656e745f76616c731807200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "250a1c736570617261746f725f696e5f6964656e745f76616c735f6e756c" .
    "6c18ef072001280822ef020a08526573706f6e736512480a106d6574615f" .
    "696e666f726d6174696f6e18022003280b322e2e6473746f72652e656e67" .
    "696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d" .
    "6174696f6e122f0a076d65737361676518032003280b321e2e6473746f72" .
    "652e656e67696e652e6d6573736167652e4d657373616765123f0a03726f" .
    "7718042003280b32322e6473746f72652e656e67696e652e666f5f436865" .
    "636b466f72756d4163636573735f50752e526573706f6e73652e526f771a" .
    "a6010a03526f77120f0a06726f775f696418904e20012805122d0a086c61" .
    "6e677561676518914e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565122e0a08666f72756d5f696418924e2001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "2f0a0a666f72756d5f6e616d6518934e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c756542570a1b696f2e6473746f72" .
    "652e656e67696e652e70726f636564757265735a38676f73646b2e647374" .
    "6f72652e64652f656e67696e652f70726f636564757265732f666f5f4368" .
    "65636b466f72756d4163636573735f5075620670726f746f33"
));
