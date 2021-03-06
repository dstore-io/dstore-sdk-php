<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetUnits_Ad.proto

namespace Dstore\Engine\Mi_GetUnits_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetUnits_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * "0" : "UnitID" wird nicht mehr verwendet, muß aber noch gespeichert werden, da abhängige Datensätze (wie Aufträge) existieren (z.B. die Währung "DEM")"1" : "UnitID" ist aktiv, wird also verwendet"2" : "UnitID" ist nur für Administratoren sichtbar
     * </pre>
     *
     * <code>.dstore.values.IntegerValue active = 10001;</code>
     */
    private $active = null;
    /**
     * <pre>
     * ID einer Einheit, die im "dStore" definiert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue unit_id = 10002;</code>
     */
    private $unit_id = null;
    /**
     * <pre>
     * Symbol (im Regelfall der ISO-Code) für die Einheit "UnitID"
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_symbol = 10003;</code>
     */
    private $unit_symbol = null;
    /**
     * <pre>
     * Bezeichnung der Einheit "UnitID"
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_description = 10004;</code>
     */
    private $unit_description = null;
    /**
     * <pre>
     * ID einer Kategorie (z.B. "1" für "Währung"), zu der die Einheit "UnitID" gehört
     * </pre>
     *
     * <code>.dstore.values.IntegerValue unit_category_id = 10005;</code>
     */
    private $unit_category_id = null;
    /**
     * <pre>
     * "1" : Umrechnungen in andere Einheiten (der gleichen Kategorie) müssen u.U. über eine dritte Einheit stattfinden. Beispiel für eine "Dreiecks"-Umrechnung war die Übergangszeit vor dem Euro (z.B. DEM ==&gt; EUR ==&gt; ÖS)"0" : Keine "Dreiecks-Umrechnung" nötig
     * </pre>
     *
     * <code>.dstore.values.BooleanValue triangle_convert = 10006;</code>
     */
    private $triangle_convert = null;
    /**
     * <pre>
     * Bezeichnung der Kategorie "UnitCategoryID" (z.B. "Währung").
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_category_description = 10007;</code>
     */
    private $unit_category_description = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetUnitsAd::initOnce();
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
     * "0" : "UnitID" wird nicht mehr verwendet, muß aber noch gespeichert werden, da abhängige Datensätze (wie Aufträge) existieren (z.B. die Währung "DEM")"1" : "UnitID" ist aktiv, wird also verwendet"2" : "UnitID" ist nur für Administratoren sichtbar
     * </pre>
     *
     * <code>.dstore.values.IntegerValue active = 10001;</code>
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * <pre>
     * "0" : "UnitID" wird nicht mehr verwendet, muß aber noch gespeichert werden, da abhängige Datensätze (wie Aufträge) existieren (z.B. die Währung "DEM")"1" : "UnitID" ist aktiv, wird also verwendet"2" : "UnitID" ist nur für Administratoren sichtbar
     * </pre>
     *
     * <code>.dstore.values.IntegerValue active = 10001;</code>
     */
    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->active = $var;
    }

    /**
     * <pre>
     * ID einer Einheit, die im "dStore" definiert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue unit_id = 10002;</code>
     */
    public function getUnitId()
    {
        return $this->unit_id;
    }

    /**
     * <pre>
     * ID einer Einheit, die im "dStore" definiert ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue unit_id = 10002;</code>
     */
    public function setUnitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->unit_id = $var;
    }

    /**
     * <pre>
     * Symbol (im Regelfall der ISO-Code) für die Einheit "UnitID"
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_symbol = 10003;</code>
     */
    public function getUnitSymbol()
    {
        return $this->unit_symbol;
    }

    /**
     * <pre>
     * Symbol (im Regelfall der ISO-Code) für die Einheit "UnitID"
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_symbol = 10003;</code>
     */
    public function setUnitSymbol(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->unit_symbol = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Einheit "UnitID"
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_description = 10004;</code>
     */
    public function getUnitDescription()
    {
        return $this->unit_description;
    }

    /**
     * <pre>
     * Bezeichnung der Einheit "UnitID"
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_description = 10004;</code>
     */
    public function setUnitDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->unit_description = $var;
    }

    /**
     * <pre>
     * ID einer Kategorie (z.B. "1" für "Währung"), zu der die Einheit "UnitID" gehört
     * </pre>
     *
     * <code>.dstore.values.IntegerValue unit_category_id = 10005;</code>
     */
    public function getUnitCategoryId()
    {
        return $this->unit_category_id;
    }

    /**
     * <pre>
     * ID einer Kategorie (z.B. "1" für "Währung"), zu der die Einheit "UnitID" gehört
     * </pre>
     *
     * <code>.dstore.values.IntegerValue unit_category_id = 10005;</code>
     */
    public function setUnitCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->unit_category_id = $var;
    }

    /**
     * <pre>
     * "1" : Umrechnungen in andere Einheiten (der gleichen Kategorie) müssen u.U. über eine dritte Einheit stattfinden. Beispiel für eine "Dreiecks"-Umrechnung war die Übergangszeit vor dem Euro (z.B. DEM ==&gt; EUR ==&gt; ÖS)"0" : Keine "Dreiecks-Umrechnung" nötig
     * </pre>
     *
     * <code>.dstore.values.BooleanValue triangle_convert = 10006;</code>
     */
    public function getTriangleConvert()
    {
        return $this->triangle_convert;
    }

    /**
     * <pre>
     * "1" : Umrechnungen in andere Einheiten (der gleichen Kategorie) müssen u.U. über eine dritte Einheit stattfinden. Beispiel für eine "Dreiecks"-Umrechnung war die Übergangszeit vor dem Euro (z.B. DEM ==&gt; EUR ==&gt; ÖS)"0" : Keine "Dreiecks-Umrechnung" nötig
     * </pre>
     *
     * <code>.dstore.values.BooleanValue triangle_convert = 10006;</code>
     */
    public function setTriangleConvert(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->triangle_convert = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Kategorie "UnitCategoryID" (z.B. "Währung").
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_category_description = 10007;</code>
     */
    public function getUnitCategoryDescription()
    {
        return $this->unit_category_description;
    }

    /**
     * <pre>
     * Bezeichnung der Kategorie "UnitCategoryID" (z.B. "Währung").
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_category_description = 10007;</code>
     */
    public function setUnitCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->unit_category_description = $var;
    }

}

