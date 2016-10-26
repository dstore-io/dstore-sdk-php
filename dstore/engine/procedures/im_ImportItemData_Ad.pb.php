<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_ImportItemData_Ad.proto

namespace Dstore\Engine\Im_ImportItemData_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $log_errors = null;
    private $log_errors_null = false;
    private $update_sort_no = null;
    private $update_sort_no_null = false;
    private $check_text_and_bit_characs = null;
    private $check_text_and_bit_characs_null = false;
    private $check_except_text_and_bit_characs = null;
    private $check_except_text_and_bit_characs_null = false;
    private $performance_tuning = null;
    private $performance_tuning_null = false;
    private $activate_imported_items = null;
    private $activate_imported_items_null = false;
    private $handle_existing_item_not_imported = null;
    private $handle_existing_item_not_imported_null = false;
    private $dump_transaction = null;
    private $dump_transaction_null = false;
    private $country = null;
    private $country_null = false;
    private $empty_string_to_delete_details = null;
    private $empty_string_to_delete_details_null = false;
    private $empty_string_to_delete_property = null;
    private $empty_string_to_delete_property_null = false;
    private $error_date_and_time = null;
    private $error_date_and_time_null = false;
    private $import_from_table_name = null;
    private $import_from_table_name_null = false;
    private $debug_mode = null;
    private $debug_mode_null = false;

    public function getLogErrors()
    {
        return $this->log_errors;
    }

    public function setLogErrors(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->log_errors = $var;
    }

    public function getLogErrorsNull()
    {
        return $this->log_errors_null;
    }

    public function setLogErrorsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->log_errors_null = $var;
    }

    public function getUpdateSortNo()
    {
        return $this->update_sort_no;
    }

    public function setUpdateSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->update_sort_no = $var;
    }

    public function getUpdateSortNoNull()
    {
        return $this->update_sort_no_null;
    }

    public function setUpdateSortNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->update_sort_no_null = $var;
    }

    public function getCheckTextAndBitCharacs()
    {
        return $this->check_text_and_bit_characs;
    }

    public function setCheckTextAndBitCharacs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->check_text_and_bit_characs = $var;
    }

    public function getCheckTextAndBitCharacsNull()
    {
        return $this->check_text_and_bit_characs_null;
    }

    public function setCheckTextAndBitCharacsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_text_and_bit_characs_null = $var;
    }

    public function getCheckExceptTextAndBitCharacs()
    {
        return $this->check_except_text_and_bit_characs;
    }

    public function setCheckExceptTextAndBitCharacs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->check_except_text_and_bit_characs = $var;
    }

    public function getCheckExceptTextAndBitCharacsNull()
    {
        return $this->check_except_text_and_bit_characs_null;
    }

    public function setCheckExceptTextAndBitCharacsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_except_text_and_bit_characs_null = $var;
    }

    public function getPerformanceTuning()
    {
        return $this->performance_tuning;
    }

    public function setPerformanceTuning(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->performance_tuning = $var;
    }

    public function getPerformanceTuningNull()
    {
        return $this->performance_tuning_null;
    }

    public function setPerformanceTuningNull($var)
    {
        GPBUtil::checkBool($var);
        $this->performance_tuning_null = $var;
    }

    public function getActivateImportedItems()
    {
        return $this->activate_imported_items;
    }

    public function setActivateImportedItems(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->activate_imported_items = $var;
    }

    public function getActivateImportedItemsNull()
    {
        return $this->activate_imported_items_null;
    }

    public function setActivateImportedItemsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->activate_imported_items_null = $var;
    }

    public function getHandleExistingItemNotImported()
    {
        return $this->handle_existing_item_not_imported;
    }

    public function setHandleExistingItemNotImported(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->handle_existing_item_not_imported = $var;
    }

    public function getHandleExistingItemNotImportedNull()
    {
        return $this->handle_existing_item_not_imported_null;
    }

    public function setHandleExistingItemNotImportedNull($var)
    {
        GPBUtil::checkBool($var);
        $this->handle_existing_item_not_imported_null = $var;
    }

    public function getDumpTransaction()
    {
        return $this->dump_transaction;
    }

    public function setDumpTransaction(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->dump_transaction = $var;
    }

    public function getDumpTransactionNull()
    {
        return $this->dump_transaction_null;
    }

    public function setDumpTransactionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->dump_transaction_null = $var;
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

    public function getEmptyStringToDeleteDetails()
    {
        return $this->empty_string_to_delete_details;
    }

    public function setEmptyStringToDeleteDetails(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->empty_string_to_delete_details = $var;
    }

    public function getEmptyStringToDeleteDetailsNull()
    {
        return $this->empty_string_to_delete_details_null;
    }

    public function setEmptyStringToDeleteDetailsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->empty_string_to_delete_details_null = $var;
    }

    public function getEmptyStringToDeleteProperty()
    {
        return $this->empty_string_to_delete_property;
    }

    public function setEmptyStringToDeleteProperty(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->empty_string_to_delete_property = $var;
    }

    public function getEmptyStringToDeletePropertyNull()
    {
        return $this->empty_string_to_delete_property_null;
    }

    public function setEmptyStringToDeletePropertyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->empty_string_to_delete_property_null = $var;
    }

    public function getErrorDateAndTime()
    {
        return $this->error_date_and_time;
    }

    public function setErrorDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->error_date_and_time = $var;
    }

    public function getErrorDateAndTimeNull()
    {
        return $this->error_date_and_time_null;
    }

    public function setErrorDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->error_date_and_time_null = $var;
    }

    public function getImportFromTableName()
    {
        return $this->import_from_table_name;
    }

    public function setImportFromTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->import_from_table_name = $var;
    }

    public function getImportFromTableNameNull()
    {
        return $this->import_from_table_name_null;
    }

    public function setImportFromTableNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->import_from_table_name_null = $var;
    }

    public function getDebugMode()
    {
        return $this->debug_mode;
    }

    public function setDebugMode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->debug_mode = $var;
    }

    public function getDebugModeNull()
    {
        return $this->debug_mode_null;
    }

    public function setDebugModeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->debug_mode_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $error_date_and_time = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Im_ImportItemData_Ad\Response_Row::class);
        $this->row = $var;
    }

    public function getErrorDateAndTime()
    {
        return $this->error_date_and_time;
    }

    public function setErrorDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->error_date_and_time = $var;
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
    "0a820f0a336473746f72652f656e67696e652f70726f636564757265732f" .
    "696d5f496d706f72744974656d446174615f41642e70726f746f12226473" .
    "746f72652e656e67696e652e696d5f496d706f72744974656d446174615f" .
    "41641a136473746f72652f76616c7565732e70726f746f1a1b6473746f72" .
    "652f656e67696e652f6d6573736167652e70726f746f1a236473746f7265" .
    "2f656e67696e652f6d657461696e666f726d6174696f6e2e70726f746f22" .
    "d50a0a0a506172616d6574657273122f0a0a6c6f675f6572726f72731801" .
    "2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e5661" .
    "6c756512180a0f6c6f675f6572726f72735f6e756c6c18e9072001280812" .
    "330a0e7570646174655f736f72745f6e6f18022001280b321b2e6473746f" .
    "72652e76616c7565732e626f6f6c65616e56616c7565121c0a1375706461" .
    "74655f736f72745f6e6f5f6e756c6c18ea0720012808123f0a1a63686563" .
    "6b5f746578745f616e645f6269745f6368617261637318032001280b321b" .
    "2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512280a" .
    "1f636865636b5f746578745f616e645f6269745f636861726163735f6e75" .
    "6c6c18eb072001280812460a21636865636b5f6578636570745f74657874" .
    "5f616e645f6269745f6368617261637318042001280b321b2e6473746f72" .
    "652e76616c7565732e626f6f6c65616e56616c7565122f0a26636865636b" .
    "5f6578636570745f746578745f616e645f6269745f636861726163735f6e" .
    "756c6c18ec072001280812370a12706572666f726d616e63655f74756e69" .
    "6e6718052001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512200a17706572666f726d616e63655f74756e696e675f" .
    "6e756c6c18ed0720012808123c0a1761637469766174655f696d706f7274" .
    "65645f6974656d7318062001280b321b2e6473746f72652e76616c756573" .
    "2e626f6f6c65616e56616c756512250a1c61637469766174655f696d706f" .
    "727465645f6974656d735f6e756c6c18ee072001280812460a2168616e64" .
    "6c655f6578697374696e675f6974656d5f6e6f745f696d706f7274656418" .
    "072001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c7565122f0a2668616e646c655f6578697374696e675f6974656d5f6e" .
    "6f745f696d706f727465645f6e756c6c18ef072001280812350a1064756d" .
    "705f7472616e73616374696f6e18082001280b321b2e6473746f72652e76" .
    "616c7565732e626f6f6c65616e56616c7565121e0a1564756d705f747261" .
    "6e73616374696f6e5f6e756c6c18f00720012808122b0a07636f756e7472" .
    "7918092001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c756512150a0c636f756e7472795f6e756c6c18f107200128081243" .
    "0a1e656d7074795f737472696e675f746f5f64656c6574655f6465746169" .
    "6c73180a2001280b321b2e6473746f72652e76616c7565732e626f6f6c65" .
    "616e56616c7565122c0a23656d7074795f737472696e675f746f5f64656c" .
    "6574655f64657461696c735f6e756c6c18f2072001280812440a1f656d70" .
    "74795f737472696e675f746f5f64656c6574655f70726f7065727479180b" .
    "2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e5661" .
    "6c7565122d0a24656d7074795f737472696e675f746f5f64656c6574655f" .
    "70726f70657274795f6e756c6c18f30720012808123a0a136572726f725f" .
    "646174655f616e645f74696d65180c2001280b321d2e6473746f72652e76" .
    "616c7565732e74696d657374616d7056616c756512210a186572726f725f" .
    "646174655f616e645f74696d655f6e756c6c18f40720012808123a0a1669" .
    "6d706f72745f66726f6d5f7461626c655f6e616d65180d2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c756512240a1b69" .
    "6d706f72745f66726f6d5f7461626c655f6e616d655f6e756c6c18f50720" .
    "012808122e0a0a64656275675f6d6f6465180e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512180a0f6465627567" .
    "5f6d6f64655f6e756c6c18f607200128082298020a08526573706f6e7365" .
    "12480a106d6574615f696e666f726d6174696f6e18022003280b322e2e64" .
    "73746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d" .
    "657461496e666f726d6174696f6e122f0a076d6573736167651803200328" .
    "0b321e2e6473746f72652e656e67696e652e6d6573736167652e4d657373" .
    "616765123d0a03726f7718042003280b32302e6473746f72652e656e6769" .
    "6e652e696d5f496d706f72744974656d446174615f41642e526573706f6e" .
    "73652e526f77123a0a136572726f725f646174655f616e645f74696d6518" .
    "652001280b321d2e6473746f72652e76616c7565732e74696d657374616d" .
    "7056616c75651a160a03526f77120f0a06726f775f696418904e20012805" .
    "42550a1b696f2e6473746f72652e656e67696e652e70726f636564757265" .
    "735a36676f73646b2e6473746f72652e64652f656e67696e652f70726f63" .
    "6564757265732f696d5f496d706f72744974656d446174615f4164620670" .
    "726f746f33"
));

