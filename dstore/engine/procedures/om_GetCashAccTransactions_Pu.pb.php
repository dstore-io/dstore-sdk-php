<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCashAccTransactions_Pu.proto

namespace Dstore\Engine\Om_GetCashAccTransactions_Pu;

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
    private $cash_account_type_id = null;
    private $cash_account_type_id_null = false;
    private $separator_in_ident_vals = null;
    private $separator_in_ident_vals_null = false;
    private $account_balance = null;
    private $account_balance_null = false;
    private $only_transactions_since = null;
    private $only_transactions_since_null = false;

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

    public function getCashAccountTypeId()
    {
        return $this->cash_account_type_id;
    }

    public function setCashAccountTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->cash_account_type_id = $var;
    }

    public function getCashAccountTypeIdNull()
    {
        return $this->cash_account_type_id_null;
    }

    public function setCashAccountTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->cash_account_type_id_null = $var;
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

    public function getAccountBalance()
    {
        return $this->account_balance;
    }

    public function setAccountBalance(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->account_balance = $var;
    }

    public function getAccountBalanceNull()
    {
        return $this->account_balance_null;
    }

    public function setAccountBalanceNull($var)
    {
        GPBUtil::checkBool($var);
        $this->account_balance_null = $var;
    }

    public function getOnlyTransactionsSince()
    {
        return $this->only_transactions_since;
    }

    public function setOnlyTransactionsSince(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->only_transactions_since = $var;
    }

    public function getOnlyTransactionsSinceNull()
    {
        return $this->only_transactions_since_null;
    }

    public function setOnlyTransactionsSinceNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_transactions_since_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $account_balance = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetCashAccTransactions_Pu\Response_Row::class);
        $this->row = $var;
    }

    public function getAccountBalance()
    {
        return $this->account_balance;
    }

    public function setAccountBalance(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->account_balance = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $transaction_type = null;
    private $person_id = null;
    private $transaction_date_and_time = null;
    private $transaction_value = null;
    private $transaction_comment = null;
    private $transaction_type_id = null;
    private $cash_account_type_id = null;
    private $suspended_until = null;
    private $transaction_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTransactionType()
    {
        return $this->transaction_type;
    }

    public function setTransactionType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->transaction_type = $var;
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

    public function getTransactionDateAndTime()
    {
        return $this->transaction_date_and_time;
    }

    public function setTransactionDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->transaction_date_and_time = $var;
    }

    public function getTransactionValue()
    {
        return $this->transaction_value;
    }

    public function setTransactionValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->transaction_value = $var;
    }

    public function getTransactionComment()
    {
        return $this->transaction_comment;
    }

    public function setTransactionComment(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->transaction_comment = $var;
    }

    public function getTransactionTypeId()
    {
        return $this->transaction_type_id;
    }

    public function setTransactionTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->transaction_type_id = $var;
    }

    public function getCashAccountTypeId()
    {
        return $this->cash_account_type_id;
    }

    public function setCashAccountTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->cash_account_type_id = $var;
    }

    public function getSuspendedUntil()
    {
        return $this->suspended_until;
    }

    public function setSuspendedUntil(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->suspended_until = $var;
    }

    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    public function setTransactionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->transaction_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae00d0a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f476574436173684163635472616e73616374696f6e735f50752e70" .
    "726f746f122a6473746f72652e656e67696e652e6f6d5f47657443617368" .
    "4163635472616e73616374696f6e735f50751a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f2294050a0a506172616d6574657273" .
    "12400a1c706572736f6e5f6964656e74696669636174696f6e5f76616c75" .
    "657318012001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565122a0a21706572736f6e5f6964656e74696669636174696f" .
    "6e5f76616c7565735f6e756c6c18e9072001280812330a0e706572736f6e" .
    "5f747970655f696418022001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565121c0a13706572736f6e5f747970655f69" .
    "645f6e756c6c18ea0720012808122d0a09756e697175655f696418032001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12170a0e756e697175655f69645f6e756c6c18eb072001280812390a1463" .
    "6173685f6163636f756e745f747970655f696418042001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512220a196361" .
    "73685f6163636f756e745f747970655f69645f6e756c6c18ec0720012808" .
    "123b0a17736570617261746f725f696e5f6964656e745f76616c73180520" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "6512250a1c736570617261746f725f696e5f6964656e745f76616c735f6e" .
    "756c6c18ed072001280812340a0f6163636f756e745f62616c616e636518" .
    "062001280b321b2e6473746f72652e76616c7565732e646563696d616c56" .
    "616c7565121d0a146163636f756e745f62616c616e63655f6e756c6c18ee" .
    "0720012808123e0a176f6e6c795f7472616e73616374696f6e735f73696e" .
    "636518072001280b321d2e6473746f72652e76616c7565732e74696d6573" .
    "74616d7056616c756512250a1c6f6e6c795f7472616e73616374696f6e73" .
    "5f73696e63655f6e756c6c18ef0720012808229f060a08526573706f6e73" .
    "6512480a106d6574615f696e666f726d6174696f6e18022003280b322e2e" .
    "6473746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e" .
    "4d657461496e666f726d6174696f6e122f0a076d65737361676518032003" .
    "280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d6573" .
    "7361676512450a03726f7718042003280b32382e6473746f72652e656e67" .
    "696e652e6f6d5f476574436173684163635472616e73616374696f6e735f" .
    "50752e526573706f6e73652e526f7712340a0f6163636f756e745f62616c" .
    "616e636518652001280b321b2e6473746f72652e76616c7565732e646563" .
    "696d616c56616c75651a9a040a03526f77120f0a06726f775f696418904e" .
    "2001280512350a107472616e73616374696f6e5f7479706518914e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "2f0a09706572736f6e5f696418924e2001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512410a197472616e73616374" .
    "696f6e5f646174655f616e645f74696d6518934e2001280b321d2e647374" .
    "6f72652e76616c7565732e74696d657374616d7056616c756512370a1174" .
    "72616e73616374696f6e5f76616c756518944e2001280b321b2e6473746f" .
    "72652e76616c7565732e646563696d616c56616c756512380a137472616e" .
    "73616374696f6e5f636f6d6d656e7418954e2001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512390a137472616e7361" .
    "6374696f6e5f747970655f696418964e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565123a0a14636173685f6163" .
    "636f756e745f747970655f696418974e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512370a0f73757370656e64" .
    "65645f756e74696c18984e2001280b321d2e6473746f72652e76616c7565" .
    "732e74696d657374616d7056616c756512340a0e7472616e73616374696f" .
    "6e5f696418994e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565425d0a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a3e676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f6f6d5f47657443617368416363" .
    "5472616e73616374696f6e735f5075620670726f746f33"
));

