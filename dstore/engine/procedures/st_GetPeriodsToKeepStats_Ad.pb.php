<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetPeriodsToKeepStats_Ad.proto

namespace Dstore\Engine\St_GetPeriodsToKeepStats_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $table_name = null;
    private $table_name_null = false;
    private $level_no = null;
    private $level_no_null = false;
    private $basic_characteristic_number = null;
    private $basic_characteristic_number_null = false;

    public function getTableName()
    {
        return $this->table_name;
    }

    public function setTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->table_name = $var;
    }

    public function getTableNameNull()
    {
        return $this->table_name_null;
    }

    public function setTableNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->table_name_null = $var;
    }

    public function getLevelNo()
    {
        return $this->level_no;
    }

    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_no = $var;
    }

    public function getLevelNoNull()
    {
        return $this->level_no_null;
    }

    public function setLevelNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->level_no_null = $var;
    }

    public function getBasicCharacteristicNumber()
    {
        return $this->basic_characteristic_number;
    }

    public function setBasicCharacteristicNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->basic_characteristic_number = $var;
    }

    public function getBasicCharacteristicNumberNull()
    {
        return $this->basic_characteristic_number_null;
    }

    public function setBasicCharacteristicNumberNull($var)
    {
        GPBUtil::checkBool($var);
        $this->basic_characteristic_number_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\St_GetPeriodsToKeepStats_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $table_name = null;
    private $level_no = null;
    private $level_description = null;
    private $basic_characteristic = null;
    private $keep_statistics = null;
    private $time_unit = null;
    private $basic_characteristic_number = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTableName()
    {
        return $this->table_name;
    }

    public function setTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->table_name = $var;
    }

    public function getLevelNo()
    {
        return $this->level_no;
    }

    public function setLevelNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->level_no = $var;
    }

    public function getLevelDescription()
    {
        return $this->level_description;
    }

    public function setLevelDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->level_description = $var;
    }

    public function getBasicCharacteristic()
    {
        return $this->basic_characteristic;
    }

    public function setBasicCharacteristic(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->basic_characteristic = $var;
    }

    public function getKeepStatistics()
    {
        return $this->keep_statistics;
    }

    public function setKeepStatistics(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->keep_statistics = $var;
    }

    public function getTimeUnit()
    {
        return $this->time_unit;
    }

    public function setTimeUnit(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->time_unit = $var;
    }

    public function getBasicCharacteristicNumber()
    {
        return $this->basic_characteristic_number;
    }

    public function setBasicCharacteristicNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->basic_characteristic_number = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a96090a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "73745f476574506572696f6473546f4b65657053746174735f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e73745f476574506572696f" .
    "6473546f4b65657053746174735f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f228a020a0a506172616d6574657273122e" .
    "0a0a7461626c655f6e616d6518012001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512180a0f7461626c655f6e616d65" .
    "5f6e756c6c18e90720012808122d0a086c6576656c5f6e6f18022001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "160a0d6c6576656c5f6e6f5f6e756c6c18ea072001280812400a1b626173" .
    "69635f63686172616374657269737469635f6e756d62657218032001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "290a2062617369635f63686172616374657269737469635f6e756d626572" .
    "5f6e756c6c18eb072001280822e2040a08526573706f6e736512480a106d" .
    "6574615f696e666f726d6174696f6e18022003280b322e2e6473746f7265" .
    "2e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e" .
    "666f726d6174696f6e122f0a076d65737361676518032003280b321e2e64" .
    "73746f72652e656e67696e652e6d6573736167652e4d6573736167651244" .
    "0a03726f7718042003280b32372e6473746f72652e656e67696e652e7374" .
    "5f476574506572696f6473546f4b65657053746174735f41642e52657370" .
    "6f6e73652e526f771a94030a03526f77120f0a06726f775f696418904e20" .
    "012805122f0a0a7461626c655f6e616d6518914e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565122e0a086c657665" .
    "6c5f6e6f18924e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512360a116c6576656c5f6465736372697074696f" .
    "6e18934e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c756512390a1462617369635f6368617261637465726973746963" .
    "18944e2001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c756512350a0f6b6565705f7374617469737469637318954e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "122e0a0974696d655f756e697418964e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c756512410a1b62617369635f6368" .
    "6172616374657269737469635f6e756d62657218974e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c7565425c0a1b69" .
    "6f2e6473746f72652e656e67696e652e70726f636564757265735a3d676f" .
    "73646b2e6473746f72652e64652f656e67696e652f70726f636564757265" .
    "732f73745f476574506572696f6473546f4b65657053746174735f416462" .
    "0670726f746f33"
));

