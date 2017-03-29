<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTemplateCombinations_Ad.proto

namespace Dstore\Engine\Mi_GetTemplateCombinations_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetTemplateCombinations_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID eines Templates (Näheres zu "Templates" : siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue target_template_id = 10001;</code>
     */
    private $target_template_id = null;
    /**
     * <pre>
     * ID eines "SourceTemplates". Damit ist eine Art "Kontext" gemeint, unter dem ein "Elelement" dargestellt wird. Z.B. soll die Produktansicht eines Artikel-Elementes in einem Suchergebnis anders sein als in der "Normalansicht".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue source_template_id = 10002;</code>
     */
    private $source_template_id = null;
    /**
     * <pre>
     * Beschreibung zur "TargetTemplateID" in der Form:&lt;Bezeichnung des Templates "TargetTemplateID"&gt; + ' (' + &lt;"FrameName" des Templates (siehe "mi_GetTemplates_Ad")&gt; + ', ' + &lt;Symbol der Sprache des Templates&gt; + ')'
     * </pre>
     *
     * <code>.dstore.values.StringValue target_template_description = 10003;</code>
     */
    private $target_template_description = null;
    /**
     * <pre>
     * Beschreibung zur "SourceTemplateID" in der Form:&lt;Bezeichnung des Templates "SourceTemplateID"&gt; + ' (' + &lt;Symbol der Sprache des Templates&gt; + ')'
     * </pre>
     *
     * <code>.dstore.values.StringValue source_template_description = 10004;</code>
     */
    private $source_template_description = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetTemplateCombinationsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function getRowId()
    {
        return $this->row_id;
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    /**
     * <pre>
     * ID eines Templates (Näheres zu "Templates" : siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue target_template_id = 10001;</code>
     */
    public function getTargetTemplateId()
    {
        return $this->target_template_id;
    }

    /**
     * <pre>
     * ID eines Templates (Näheres zu "Templates" : siehe Beschreibung)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue target_template_id = 10001;</code>
     */
    public function setTargetTemplateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->target_template_id = $var;
    }

    /**
     * <pre>
     * ID eines "SourceTemplates". Damit ist eine Art "Kontext" gemeint, unter dem ein "Elelement" dargestellt wird. Z.B. soll die Produktansicht eines Artikel-Elementes in einem Suchergebnis anders sein als in der "Normalansicht".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue source_template_id = 10002;</code>
     */
    public function getSourceTemplateId()
    {
        return $this->source_template_id;
    }

    /**
     * <pre>
     * ID eines "SourceTemplates". Damit ist eine Art "Kontext" gemeint, unter dem ein "Elelement" dargestellt wird. Z.B. soll die Produktansicht eines Artikel-Elementes in einem Suchergebnis anders sein als in der "Normalansicht".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue source_template_id = 10002;</code>
     */
    public function setSourceTemplateId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->source_template_id = $var;
    }

    /**
     * <pre>
     * Beschreibung zur "TargetTemplateID" in der Form:&lt;Bezeichnung des Templates "TargetTemplateID"&gt; + ' (' + &lt;"FrameName" des Templates (siehe "mi_GetTemplates_Ad")&gt; + ', ' + &lt;Symbol der Sprache des Templates&gt; + ')'
     * </pre>
     *
     * <code>.dstore.values.StringValue target_template_description = 10003;</code>
     */
    public function getTargetTemplateDescription()
    {
        return $this->target_template_description;
    }

    /**
     * <pre>
     * Beschreibung zur "TargetTemplateID" in der Form:&lt;Bezeichnung des Templates "TargetTemplateID"&gt; + ' (' + &lt;"FrameName" des Templates (siehe "mi_GetTemplates_Ad")&gt; + ', ' + &lt;Symbol der Sprache des Templates&gt; + ')'
     * </pre>
     *
     * <code>.dstore.values.StringValue target_template_description = 10003;</code>
     */
    public function setTargetTemplateDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->target_template_description = $var;
    }

    /**
     * <pre>
     * Beschreibung zur "SourceTemplateID" in der Form:&lt;Bezeichnung des Templates "SourceTemplateID"&gt; + ' (' + &lt;Symbol der Sprache des Templates&gt; + ')'
     * </pre>
     *
     * <code>.dstore.values.StringValue source_template_description = 10004;</code>
     */
    public function getSourceTemplateDescription()
    {
        return $this->source_template_description;
    }

    /**
     * <pre>
     * Beschreibung zur "SourceTemplateID" in der Form:&lt;Bezeichnung des Templates "SourceTemplateID"&gt; + ' (' + &lt;Symbol der Sprache des Templates&gt; + ')'
     * </pre>
     *
     * <code>.dstore.values.StringValue source_template_description = 10004;</code>
     */
    public function setSourceTemplateDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->source_template_description = $var;
    }

}
