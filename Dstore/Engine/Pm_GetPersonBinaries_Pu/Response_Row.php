<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonBinaries_Pu.proto

namespace Dstore\Engine\Pm_GetPersonBinaries_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_GetPersonBinaries_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID der identifizierten Person, falls "&#64;PersonID" nicht angegeben wurde, sonst "&#64;PersonID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_id = 10001;</code>
     */
    private $person_id = null;
    /**
     * <pre>
     * Bezeichnung/Beschreibung der "BinaryCodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_description = 10002;</code>
     */
    private $binary_description = null;
    /**
     * <pre>
     * ID eines "Binaries", das der Person "PersonID" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10003;</code>
     */
    private $binary_code_id = null;
    /**
     * <pre>
     * Der zur "BinaryCodeID" zugehörige Code des "Thumbnails" (ein kleines Bild, das das eigentliche Binärobjekt symbolisieren soll). Kann je nach "&#64;IncludeBinaryCode" "NULL" sein.
     * </pre>
     *
     * <code>.dstore.values.BytesValue thumbnail_code = 10004;</code>
     */
    private $thumbnail_code = null;
    /**
     * <pre>
     * Der zur "BinaryCodeID" zugehörige Code, also quasi das Binärobjekt selbst. Kann je nach "&#64;IncludeBinaryCode" "NULL" sein.
     * </pre>
     *
     * <code>.dstore.values.BytesValue binary_code = 10005;</code>
     */
    private $binary_code = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmGetPersonBinariesPu::initOnce();
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
     * ID der identifizierten Person, falls "&#64;PersonID" nicht angegeben wurde, sonst "&#64;PersonID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_id = 10001;</code>
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * <pre>
     * ID der identifizierten Person, falls "&#64;PersonID" nicht angegeben wurde, sonst "&#64;PersonID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue person_id = 10001;</code>
     */
    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung/Beschreibung der "BinaryCodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_description = 10002;</code>
     */
    public function getBinaryDescription()
    {
        return $this->binary_description;
    }

    /**
     * <pre>
     * Bezeichnung/Beschreibung der "BinaryCodeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue binary_description = 10002;</code>
     */
    public function setBinaryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->binary_description = $var;
    }

    /**
     * <pre>
     * ID eines "Binaries", das der Person "PersonID" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10003;</code>
     */
    public function getBinaryCodeId()
    {
        return $this->binary_code_id;
    }

    /**
     * <pre>
     * ID eines "Binaries", das der Person "PersonID" zugeordnet ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue binary_code_id = 10003;</code>
     */
    public function setBinaryCodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->binary_code_id = $var;
    }

    /**
     * <pre>
     * Der zur "BinaryCodeID" zugehörige Code des "Thumbnails" (ein kleines Bild, das das eigentliche Binärobjekt symbolisieren soll). Kann je nach "&#64;IncludeBinaryCode" "NULL" sein.
     * </pre>
     *
     * <code>.dstore.values.BytesValue thumbnail_code = 10004;</code>
     */
    public function getThumbnailCode()
    {
        return $this->thumbnail_code;
    }

    /**
     * <pre>
     * Der zur "BinaryCodeID" zugehörige Code des "Thumbnails" (ein kleines Bild, das das eigentliche Binärobjekt symbolisieren soll). Kann je nach "&#64;IncludeBinaryCode" "NULL" sein.
     * </pre>
     *
     * <code>.dstore.values.BytesValue thumbnail_code = 10004;</code>
     */
    public function setThumbnailCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BytesValue::class);
        $this->thumbnail_code = $var;
    }

    /**
     * <pre>
     * Der zur "BinaryCodeID" zugehörige Code, also quasi das Binärobjekt selbst. Kann je nach "&#64;IncludeBinaryCode" "NULL" sein.
     * </pre>
     *
     * <code>.dstore.values.BytesValue binary_code = 10005;</code>
     */
    public function getBinaryCode()
    {
        return $this->binary_code;
    }

    /**
     * <pre>
     * Der zur "BinaryCodeID" zugehörige Code, also quasi das Binärobjekt selbst. Kann je nach "&#64;IncludeBinaryCode" "NULL" sein.
     * </pre>
     *
     * <code>.dstore.values.BytesValue binary_code = 10005;</code>
     */
    public function setBinaryCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BytesValue::class);
        $this->binary_code = $var;
    }

}

