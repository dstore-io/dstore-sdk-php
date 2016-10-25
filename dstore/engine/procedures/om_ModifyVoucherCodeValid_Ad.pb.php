<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyVoucherCodeValid_Ad.proto

namespace Dstore\Engine\Om_ModifyVoucherCodeValid_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $voucher_code = null;
    private $voucher_code_null = false;
    private $new_valid_to_date_and_time = null;
    private $new_valid_to_date_and_time_null = false;

    public function getVoucherCode()
    {
        return $this->voucher_code;
    }

    public function setVoucherCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->voucher_code = $var;
    }

    public function getVoucherCodeNull()
    {
        return $this->voucher_code_null;
    }

    public function setVoucherCodeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->voucher_code_null = $var;
    }

    public function getNewValidToDateAndTime()
    {
        return $this->new_valid_to_date_and_time;
    }

    public function setNewValidToDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->new_valid_to_date_and_time = $var;
    }

    public function getNewValidToDateAndTimeNull()
    {
        return $this->new_valid_to_date_and_time_null;
    }

    public function setNewValidToDateAndTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->new_valid_to_date_and_time_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_ModifyVoucherCodeValid_Ad\Response_Row::class);
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
    "0ad8050a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f4d6f64696679566f7563686572436f646556616c69645f41642e70" .
    "726f746f122a6473746f72652e656e67696e652e6f6d5f4d6f6469667956" .
    "6f7563686572436f646556616c69645f41641a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f22c7010a0a506172616d6574657273" .
    "12300a0c766f75636865725f636f646518012001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c7565121a0a11766f75636865" .
    "725f636f64655f6e756c6c18e9072001280812410a1a6e65775f76616c69" .
    "645f746f5f646174655f616e645f74696d6518022001280b321d2e647374" .
    "6f72652e76616c7565732e74696d657374616d7056616c756512280a1f6e" .
    "65775f76616c69645f746f5f646174655f616e645f74696d655f6e756c6c" .
    "18ea072001280822e4010a08526573706f6e736512480a106d6574615f69" .
    "6e666f726d6174696f6e18022003280b322e2e6473746f72652e656e6769" .
    "6e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d61" .
    "74696f6e122f0a076d65737361676518032003280b321e2e6473746f7265" .
    "2e656e67696e652e6d6573736167652e4d65737361676512450a03726f77" .
    "18042003280b32382e6473746f72652e656e67696e652e6f6d5f4d6f6469" .
    "6679566f7563686572436f646556616c69645f41642e526573706f6e7365" .
    "2e526f771a160a03526f77120f0a06726f775f696418904e20012805425d" .
    "0a1b696f2e6473746f72652e656e67696e652e70726f636564757265735a" .
    "3e676f73646b2e6473746f72652e64652f656e67696e652f70726f636564" .
    "757265732f6f6d5f4d6f64696679566f7563686572436f646556616c6964" .
    "5f4164620670726f746f33"
));
