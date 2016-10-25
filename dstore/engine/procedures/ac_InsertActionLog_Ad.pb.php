<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/ac_InsertActionLog_Ad.proto

namespace Dstore\Engine\Ac_InsertActionLog_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $result = null;
    private $result_null = false;
    private $action_id = null;
    private $action_id_null = false;
    private $replace_last_log_part = null;
    private $replace_last_log_part_null = false;
    private $posting_id = null;
    private $posting_id_null = false;
    private $maintain_search_postings = null;
    private $maintain_search_postings_null = false;
    private $save_posting_properties = null;
    private $save_posting_properties_null = false;
    private $country = null;
    private $country_null = false;

    public function getResult()
    {
        return $this->result;
    }

    public function setResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->result = $var;
    }

    public function getResultNull()
    {
        return $this->result_null;
    }

    public function setResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->result_null = $var;
    }

    public function getActionId()
    {
        return $this->action_id;
    }

    public function setActionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->action_id = $var;
    }

    public function getActionIdNull()
    {
        return $this->action_id_null;
    }

    public function setActionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->action_id_null = $var;
    }

    public function getReplaceLastLogPart()
    {
        return $this->replace_last_log_part;
    }

    public function setReplaceLastLogPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->replace_last_log_part = $var;
    }

    public function getReplaceLastLogPartNull()
    {
        return $this->replace_last_log_part_null;
    }

    public function setReplaceLastLogPartNull($var)
    {
        GPBUtil::checkBool($var);
        $this->replace_last_log_part_null = $var;
    }

    public function getPostingId()
    {
        return $this->posting_id;
    }

    public function setPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_id = $var;
    }

    public function getPostingIdNull()
    {
        return $this->posting_id_null;
    }

    public function setPostingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_id_null = $var;
    }

    public function getMaintainSearchPostings()
    {
        return $this->maintain_search_postings;
    }

    public function setMaintainSearchPostings(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->maintain_search_postings = $var;
    }

    public function getMaintainSearchPostingsNull()
    {
        return $this->maintain_search_postings_null;
    }

    public function setMaintainSearchPostingsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->maintain_search_postings_null = $var;
    }

    public function getSavePostingProperties()
    {
        return $this->save_posting_properties;
    }

    public function setSavePostingProperties(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->save_posting_properties = $var;
    }

    public function getSavePostingPropertiesNull()
    {
        return $this->save_posting_properties_null;
    }

    public function setSavePostingPropertiesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->save_posting_properties_null = $var;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->country = $var;
    }

    public function getCountryNull()
    {
        return $this->country_null;
    }

    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $posting_id = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Ac_InsertActionLog_Ad\Response_Row::class);
        $this->row = $var;
    }

    public function getPostingId()
    {
        return $this->posting_id;
    }

    public function setPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_id = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $posting_characteristic_id = null;
    private $value = null;
    private $error_code = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getPostingCharacteristicId()
    {
        return $this->posting_characteristic_id;
    }

    public function setPostingCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_characteristic_id = $var;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
    }

    public function getErrorCode()
    {
        return $this->error_code;
    }

    public function setErrorCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->error_code = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a9a0a0a346473746f72652f656e67696e652f70726f636564757265732f" .
    "61635f496e73657274416374696f6e4c6f675f41642e70726f746f122364" .
    "73746f72652e656e67696e652e61635f496e73657274416374696f6e4c6f" .
    "675f41641a136473746f72652f76616c7565732e70726f746f1a1b647374" .
    "6f72652f656e67696e652f6d6573736167652e70726f746f1a236473746f" .
    "72652f656e67696e652f6d657461696e666f726d6174696f6e2e70726f74" .
    "6f22d4040a0a506172616d6574657273122b0a06726573756c7418012001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512140a0b726573756c745f6e756c6c18e90720012808122e0a09616374" .
    "696f6e5f696418022001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512170a0e616374696f6e5f69645f6e756c6c18" .
    "ea0720012808123a0a157265706c6163655f6c6173745f6c6f675f706172" .
    "7418032001280b321b2e6473746f72652e76616c7565732e626f6f6c6561" .
    "6e56616c756512230a1a7265706c6163655f6c6173745f6c6f675f706172" .
    "745f6e756c6c18eb0720012808122f0a0a706f7374696e675f6964180420" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "756512180a0f706f7374696e675f69645f6e756c6c18ec0720012808123d" .
    "0a186d61696e7461696e5f7365617263685f706f7374696e677318052001" .
    "280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75" .
    "6512260a1d6d61696e7461696e5f7365617263685f706f7374696e67735f" .
    "6e756c6c18ed0720012808123c0a17736176655f706f7374696e675f7072" .
    "6f7065727469657318062001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756512250a1c736176655f706f7374696e675f" .
    "70726f706572746965735f6e756c6c18ee0720012808122b0a07636f756e" .
    "74727918072001280b321a2e6473746f72652e76616c7565732e73747269" .
    "6e6756616c756512150a0c636f756e7472795f6e756c6c18ef0720012808" .
    "22ae030a08526573706f6e736512480a106d6574615f696e666f726d6174" .
    "696f6e18022003280b322e2e6473746f72652e656e67696e652e6d657461" .
    "696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a" .
    "076d65737361676518032003280b321e2e6473746f72652e656e67696e65" .
    "2e6d6573736167652e4d657373616765123e0a03726f7718042003280b32" .
    "312e6473746f72652e656e67696e652e61635f496e73657274416374696f" .
    "6e4c6f675f41642e526573706f6e73652e526f77122f0a0a706f7374696e" .
    "675f696418652001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c75651ab5010a03526f77120f0a06726f775f696418904e" .
    "20012805123f0a19706f7374696e675f6368617261637465726973746963" .
    "5f696418914e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565122a0a0576616c756518924e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c756512300a0a657272" .
    "6f725f636f646518934e2001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756542560a1b696f2e6473746f72652e656e67" .
    "696e652e70726f636564757265735a37676f73646b2e6473746f72652e64" .
    "652f656e67696e652f70726f636564757265732f61635f496e7365727441" .
    "6374696f6e4c6f675f4164620670726f746f33"
));
