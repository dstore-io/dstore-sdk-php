<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTRITriggerWorkflow_Ad.proto

namespace Dstore\Engine\Mi_GetTRITriggerWorkflow_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetTRITriggerWorkflow_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Optionaler Iterator für den Arbeitsschritt "WorkStepNo" (s. a. "mi_ModifyTRITriggerWorkflow_Ad", Parameter "&#64;IterationList")
     * </pre>
     *
     * <code>.dstore.values.StringValue iteration_list = 10001;</code>
     */
    private $iteration_list = null;
    /**
     * <pre>
     * Bezeichnung des Arbeitsschritts "WorkStepNo" (optional, kann also "NULL" sein)
     * </pre>
     *
     * <code>.dstore.values.StringValue work_step = 10002;</code>
     */
    private $work_step = null;
    /**
     * <pre>
     * Optionale ausführlichere Beschreibung/Doku des Arbeitsschritts "WorkStepNo"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10003;</code>
     */
    private $description = null;
    /**
     * <pre>
     * Eindeutige Nummer eines Arbeitsschrittes für den Trigger "&#64;TriggerID". Bestimmt die Reihenfolge des Arbeitsschritts innerhalb aller Arbeitsschritte des Triggers.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue work_step_no = 10004;</code>
     */
    private $work_step_no = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetTRITriggerWorkflowAd::initOnce();
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
     * Optionaler Iterator für den Arbeitsschritt "WorkStepNo" (s. a. "mi_ModifyTRITriggerWorkflow_Ad", Parameter "&#64;IterationList")
     * </pre>
     *
     * <code>.dstore.values.StringValue iteration_list = 10001;</code>
     */
    public function getIterationList()
    {
        return $this->iteration_list;
    }

    /**
     * <pre>
     * Optionaler Iterator für den Arbeitsschritt "WorkStepNo" (s. a. "mi_ModifyTRITriggerWorkflow_Ad", Parameter "&#64;IterationList")
     * </pre>
     *
     * <code>.dstore.values.StringValue iteration_list = 10001;</code>
     */
    public function setIterationList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->iteration_list = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Arbeitsschritts "WorkStepNo" (optional, kann also "NULL" sein)
     * </pre>
     *
     * <code>.dstore.values.StringValue work_step = 10002;</code>
     */
    public function getWorkStep()
    {
        return $this->work_step;
    }

    /**
     * <pre>
     * Bezeichnung des Arbeitsschritts "WorkStepNo" (optional, kann also "NULL" sein)
     * </pre>
     *
     * <code>.dstore.values.StringValue work_step = 10002;</code>
     */
    public function setWorkStep(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->work_step = $var;
    }

    /**
     * <pre>
     * Optionale ausführlichere Beschreibung/Doku des Arbeitsschritts "WorkStepNo"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10003;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * Optionale ausführlichere Beschreibung/Doku des Arbeitsschritts "WorkStepNo"
     * </pre>
     *
     * <code>.dstore.values.StringValue description = 10003;</code>
     */
    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->description = $var;
    }

    /**
     * <pre>
     * Eindeutige Nummer eines Arbeitsschrittes für den Trigger "&#64;TriggerID". Bestimmt die Reihenfolge des Arbeitsschritts innerhalb aller Arbeitsschritte des Triggers.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue work_step_no = 10004;</code>
     */
    public function getWorkStepNo()
    {
        return $this->work_step_no;
    }

    /**
     * <pre>
     * Eindeutige Nummer eines Arbeitsschrittes für den Trigger "&#64;TriggerID". Bestimmt die Reihenfolge des Arbeitsschritts innerhalb aller Arbeitsschritte des Triggers.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue work_step_no = 10004;</code>
     */
    public function setWorkStepNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->work_step_no = $var;
    }

}

