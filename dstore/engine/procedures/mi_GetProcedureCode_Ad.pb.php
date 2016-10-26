<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetProcedureCode_Ad.proto

namespace Dstore\Engine\Mi_GetProcedureCode_Ad;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $procedure_name = null;
    private $procedure_name_null = false;
    private $only_proc_header = null;
    private $only_proc_header_null = false;
    private $ignore_comments = null;
    private $ignore_comments_null = false;
    private $get_code_lines_as_result_set = null;
    private $get_code_lines_as_result_set_null = false;
    private $include_statements_for_creation = null;
    private $include_statements_for_creation_null = false;
    private $database_name = null;
    private $database_name_null = false;

    public function getProcedureName()
    {
        return $this->procedure_name;
    }

    public function setProcedureName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->procedure_name = $var;
    }

    public function getProcedureNameNull()
    {
        return $this->procedure_name_null;
    }

    public function setProcedureNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->procedure_name_null = $var;
    }

    public function getOnlyProcHeader()
    {
        return $this->only_proc_header;
    }

    public function setOnlyProcHeader(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->only_proc_header = $var;
    }

    public function getOnlyProcHeaderNull()
    {
        return $this->only_proc_header_null;
    }

    public function setOnlyProcHeaderNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_proc_header_null = $var;
    }

    public function getIgnoreComments()
    {
        return $this->ignore_comments;
    }

    public function setIgnoreComments(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->ignore_comments = $var;
    }

    public function getIgnoreCommentsNull()
    {
        return $this->ignore_comments_null;
    }

    public function setIgnoreCommentsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_comments_null = $var;
    }

    public function getGetCodeLinesAsResultSet()
    {
        return $this->get_code_lines_as_result_set;
    }

    public function setGetCodeLinesAsResultSet(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_code_lines_as_result_set = $var;
    }

    public function getGetCodeLinesAsResultSetNull()
    {
        return $this->get_code_lines_as_result_set_null;
    }

    public function setGetCodeLinesAsResultSetNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_code_lines_as_result_set_null = $var;
    }

    public function getIncludeStatementsForCreation()
    {
        return $this->include_statements_for_creation;
    }

    public function setIncludeStatementsForCreation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_statements_for_creation = $var;
    }

    public function getIncludeStatementsForCreationNull()
    {
        return $this->include_statements_for_creation_null;
    }

    public function setIncludeStatementsForCreationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_statements_for_creation_null = $var;
    }

    public function getDatabaseName()
    {
        return $this->database_name;
    }

    public function setDatabaseName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->database_name = $var;
    }

    public function getDatabaseNameNull()
    {
        return $this->database_name_null;
    }

    public function setDatabaseNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->database_name_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetProcedureCode_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $code_line_number = null;
    private $code_part_line_number = null;
    private $code_line = null;
    private $comment_part = null;
    private $code_part = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getCodeLineNumber()
    {
        return $this->code_line_number;
    }

    public function setCodeLineNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->code_line_number = $var;
    }

    public function getCodePartLineNumber()
    {
        return $this->code_part_line_number;
    }

    public function setCodePartLineNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->code_part_line_number = $var;
    }

    public function getCodeLine()
    {
        return $this->code_line;
    }

    public function setCodeLine(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->code_line = $var;
    }

    public function getCommentPart()
    {
        return $this->comment_part;
    }

    public function setCommentPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->comment_part = $var;
    }

    public function getCodePart()
    {
        return $this->code_part;
    }

    public function setCodePart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->code_part = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ac00a0a356473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f47657450726f636564757265436f64655f41642e70726f746f1224" .
    "6473746f72652e656e67696e652e6d695f47657450726f63656475726543" .
    "6f64655f41641a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f22be040a0a506172616d657465727312320a0e70726f6365647572" .
    "655f6e616d6518012001280b321a2e6473746f72652e76616c7565732e73" .
    "7472696e6756616c7565121c0a1370726f6365647572655f6e616d655f6e" .
    "756c6c18e9072001280812350a106f6e6c795f70726f635f686561646572" .
    "18022001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c7565121e0a156f6e6c795f70726f635f6865616465725f6e756c6c" .
    "18ea072001280812340a0f69676e6f72655f636f6d6d656e747318032001" .
    "280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75" .
    "65121d0a1469676e6f72655f636f6d6d656e74735f6e756c6c18eb072001" .
    "280812410a1c6765745f636f64655f6c696e65735f61735f726573756c74" .
    "5f73657418042001280b321b2e6473746f72652e76616c7565732e626f6f" .
    "6c65616e56616c7565122a0a216765745f636f64655f6c696e65735f6173" .
    "5f726573756c745f7365745f6e756c6c18ec072001280812440a1f696e63" .
    "6c7564655f73746174656d656e74735f666f725f6372656174696f6e1805" .
    "2001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e5661" .
    "6c7565122d0a24696e636c7564655f73746174656d656e74735f666f725f" .
    "6372656174696f6e5f6e756c6c18ed072001280812310a0d646174616261" .
    "73655f6e616d6518062001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565121b0a1264617461626173655f6e616d655f6e" .
    "756c6c18ee072001280822e7030a08526573706f6e736512480a106d6574" .
    "615f696e666f726d6174696f6e18022003280b322e2e6473746f72652e65" .
    "6e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f" .
    "726d6174696f6e122f0a076d65737361676518032003280b321e2e647374" .
    "6f72652e656e67696e652e6d6573736167652e4d657373616765123f0a03" .
    "726f7718042003280b32322e6473746f72652e656e67696e652e6d695f47" .
    "657450726f636564757265436f64655f41642e526573706f6e73652e526f" .
    "771a9e020a03526f77120f0a06726f775f696418904e2001280512360a10" .
    "636f64655f6c696e655f6e756d62657218914e2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c7565123b0a15636f6465" .
    "5f706172745f6c696e655f6e756d62657218924e2001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c7565122e0a09636f64" .
    "655f6c696e6518934e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c756512310a0c636f6d6d656e745f7061727418944e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "7565122e0a09636f64655f7061727418954e2001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756542570a1b696f2e647374" .
    "6f72652e656e67696e652e70726f636564757265735a38676f73646b2e64" .
    "73746f72652e64652f656e67696e652f70726f636564757265732f6d695f" .
    "47657450726f636564757265436f64655f4164620670726f746f33"
));

