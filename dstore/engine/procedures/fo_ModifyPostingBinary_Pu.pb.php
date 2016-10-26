<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_ModifyPostingBinary_Pu.proto

namespace Dstore\Engine\Fo_ModifyPostingBinary_Pu;

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
    private $posting_id = null;
    private $posting_id_null = false;
    private $sort_no_of_binary_to_modify = null;
    private $sort_no_of_binary_to_modify_null = false;
    private $new_description = null;
    private $new_description_null = false;
    private $move_sort_no = null;
    private $move_sort_no_null = false;
    private $posting_binary_identifier = null;
    private $posting_binary_identifier_null = false;
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

    public function getSortNoOfBinaryToModify()
    {
        return $this->sort_no_of_binary_to_modify;
    }

    public function setSortNoOfBinaryToModify(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->sort_no_of_binary_to_modify = $var;
    }

    public function getSortNoOfBinaryToModifyNull()
    {
        return $this->sort_no_of_binary_to_modify_null;
    }

    public function setSortNoOfBinaryToModifyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_no_of_binary_to_modify_null = $var;
    }

    public function getNewDescription()
    {
        return $this->new_description;
    }

    public function setNewDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->new_description = $var;
    }

    public function getNewDescriptionNull()
    {
        return $this->new_description_null;
    }

    public function setNewDescriptionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->new_description_null = $var;
    }

    public function getMoveSortNo()
    {
        return $this->move_sort_no;
    }

    public function setMoveSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->move_sort_no = $var;
    }

    public function getMoveSortNoNull()
    {
        return $this->move_sort_no_null;
    }

    public function setMoveSortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->move_sort_no_null = $var;
    }

    public function getPostingBinaryIdentifier()
    {
        return $this->posting_binary_identifier;
    }

    public function setPostingBinaryIdentifier(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->posting_binary_identifier = $var;
    }

    public function getPostingBinaryIdentifierNull()
    {
        return $this->posting_binary_identifier_null;
    }

    public function setPostingBinaryIdentifierNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_binary_identifier_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_ModifyPostingBinary_Pu\Response_Row::class);
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
    "0ac10a0a386473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f4d6f64696679506f7374696e6742696e6172795f50752e70726f74" .
    "6f12276473746f72652e656e67696e652e666f5f4d6f64696679506f7374" .
    "696e6742696e6172795f50751a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f22bc060a0a506172616d657465727312400a1c7065" .
    "72736f6e5f6964656e74696669636174696f6e5f76616c75657318012001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "122a0a21706572736f6e5f6964656e74696669636174696f6e5f76616c75" .
    "65735f6e756c6c18e9072001280812330a0e706572736f6e5f747970655f" .
    "696418022001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565121c0a13706572736f6e5f747970655f69645f6e756c6c" .
    "18ea0720012808122d0a09756e697175655f696418032001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c756512170a0e756e" .
    "697175655f69645f6e756c6c18eb0720012808122f0a0a706f7374696e67" .
    "5f696418042001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512180a0f706f7374696e675f69645f6e756c6c18ec07" .
    "2001280812400a1b736f72745f6e6f5f6f665f62696e6172795f746f5f6d" .
    "6f6469667918052001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512290a20736f72745f6e6f5f6f665f62696e6172" .
    "795f746f5f6d6f646966795f6e756c6c18ed072001280812330a0f6e6577" .
    "5f6465736372697074696f6e18062001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c7565121d0a146e65775f646573637269" .
    "7074696f6e5f6e756c6c18ee072001280812310a0c6d6f76655f736f7274" .
    "5f6e6f18072001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c7565121a0a116d6f76655f736f72745f6e6f5f6e756c6c18" .
    "ef0720012808123d0a19706f7374696e675f62696e6172795f6964656e74" .
    "696669657218082001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c756512270a1e706f7374696e675f62696e6172795f6964" .
    "656e7469666965725f6e756c6c18f00720012808123b0a17736570617261" .
    "746f725f696e5f6964656e745f76616c7318092001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512250a1c7365706172" .
    "61746f725f696e5f6964656e745f76616c735f6e756c6c18f10720012808" .
    "22e1010a08526573706f6e736512480a106d6574615f696e666f726d6174" .
    "696f6e18022003280b322e2e6473746f72652e656e67696e652e6d657461" .
    "696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a" .
    "076d65737361676518032003280b321e2e6473746f72652e656e67696e65" .
    "2e6d6573736167652e4d65737361676512420a03726f7718042003280b32" .
    "352e6473746f72652e656e67696e652e666f5f4d6f64696679506f737469" .
    "6e6742696e6172795f50752e526573706f6e73652e526f771a160a03526f" .
    "77120f0a06726f775f696418904e20012805425a0a1b696f2e6473746f72" .
    "652e656e67696e652e70726f636564757265735a3b676f73646b2e647374" .
    "6f72652e64652f656e67696e652f70726f636564757265732f666f5f4d6f" .
    "64696679506f7374696e6742696e6172795f5075620670726f746f33"
));

