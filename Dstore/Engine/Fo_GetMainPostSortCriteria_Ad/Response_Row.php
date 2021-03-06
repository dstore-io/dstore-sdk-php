<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetMainPostSortCriteria_Ad.proto

namespace Dstore\Engine\Fo_GetMainPostSortCriteria_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_GetMainPostSortCriteria_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Zeitpunkt, an dem die Definition des Sortier-Kriteriums zuletzt geändert wurde
     * </pre>
     *
     * <code>.dstore.values.TimestampValue last_edited_at_date_and_time = 10001;</code>
     */
    private $last_edited_at_date_and_time = null;
    /**
     * <pre>
     * Einstellungen/Optionen zum Sortier-Kriterium "SortingCriteria_1st", u.a. ob die Sortierung auf- oder absteigend ist. Details : s. Beschreibung "Grundsätzliches zu Sortier-Kriterien", Punkt 4 !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_optionsfirst = 10002;</code>
     */
    private $sorting_optionsfirst = null;
    /**
     * <pre>
     * Zeitpunkt, an dem das Sortier-Kriteriums zuletzt aktiviert wurde (d.h. wann "IsActive" zuletzt auf "1" gesetzt wurde)
     * </pre>
     *
     * <code>.dstore.values.TimestampValue last_activated_at_date_and_time = 10003;</code>
     */
    private $last_activated_at_date_and_time = null;
    /**
     * <pre>
     * Entweder- eine "PostingCharacteristicID",oder- der Wert "-1" (steht für das "PostDate")Die "allgemeine" Eigenschaft (zur "PersonID = 0") zum Merkmal bzw. das "PostDate" wird zum Vergleich zweier Hauptbeiträge herangezogen.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_criteriafirst = 10004;</code>
     */
    private $sorting_criteriafirst = null;
    /**
     * <pre>
     * Mögliche Werte :- "0" : Sortierung ist inaktiv (ist also nicht verwendbar)- "1" : Sortierung ist aktiv (ist also verwendbar)- "2" : Sortierung wird initialisiert (ist also nicht verwendbar)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue is_active = 10005;</code>
     */
    private $is_active = null;
    /**
     * <pre>
     * Nummer eines Sortier-Kriteriums für das Forum "&#64;ForumID" (eindeutig innerhalb "&#64;ForumID")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_criteria_no = 10006;</code>
     */
    private $sorting_criteria_no = null;
    /**
     * <pre>
     * Entweder- eine "PostingCharacteristicID",oder- der Wert "-1" (steht für das "PostDate")Die "allgemeine" Eigenschaft (zur "PersonID = 0") zum Merkmal bzw. das "PostDate" wird zum Vergleich zweier Hauptbeiträge herangezogen.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_criteriathird = 10007;</code>
     */
    private $sorting_criteriathird = null;
    /**
     * <pre>
     * Einstellungen/Optionen zum Sortier-Kriterium "SortingCriteria_2nd", u.a. ob die Sortierung auf- oder absteigend ist. Details : s. Beschreibung "Grundsätzliches zu Sortier-Kriterien", Punkt 4 !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_optionssecond = 10008;</code>
     */
    private $sorting_optionssecond = null;
    /**
     * <pre>
     * Einstellungen/Optionen zum Sortier-Kriterium "SortingCriteria_3rd", u.a. ob die Sortierung auf- oder absteigend ist. Details : s. Beschreibung "Grundsätzliches zu Sortier-Kriterien", Punkt 4 !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_optionsthird = 10009;</code>
     */
    private $sorting_optionsthird = null;
    /**
     * <pre>
     * Entweder- eine "PostingCharacteristicID",oder- der Wert "-1" (steht für das "PostDate")Die "allgemeine" Eigenschaft (zur "PersonID = 0") zum Merkmal bzw. das "PostDate" wird zum Vergleich zweier Hauptbeiträge herangezogen.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_criteriasecond = 10010;</code>
     */
    private $sorting_criteriasecond = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoGetMainPostSortCriteriaAd::initOnce();
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
     * Zeitpunkt, an dem die Definition des Sortier-Kriteriums zuletzt geändert wurde
     * </pre>
     *
     * <code>.dstore.values.TimestampValue last_edited_at_date_and_time = 10001;</code>
     */
    public function getLastEditedAtDateAndTime()
    {
        return $this->last_edited_at_date_and_time;
    }

    /**
     * <pre>
     * Zeitpunkt, an dem die Definition des Sortier-Kriteriums zuletzt geändert wurde
     * </pre>
     *
     * <code>.dstore.values.TimestampValue last_edited_at_date_and_time = 10001;</code>
     */
    public function setLastEditedAtDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->last_edited_at_date_and_time = $var;
    }

    /**
     * <pre>
     * Einstellungen/Optionen zum Sortier-Kriterium "SortingCriteria_1st", u.a. ob die Sortierung auf- oder absteigend ist. Details : s. Beschreibung "Grundsätzliches zu Sortier-Kriterien", Punkt 4 !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_optionsfirst = 10002;</code>
     */
    public function getSortingOptionsfirst()
    {
        return $this->sorting_optionsfirst;
    }

    /**
     * <pre>
     * Einstellungen/Optionen zum Sortier-Kriterium "SortingCriteria_1st", u.a. ob die Sortierung auf- oder absteigend ist. Details : s. Beschreibung "Grundsätzliches zu Sortier-Kriterien", Punkt 4 !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_optionsfirst = 10002;</code>
     */
    public function setSortingOptionsfirst(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_optionsfirst = $var;
    }

    /**
     * <pre>
     * Zeitpunkt, an dem das Sortier-Kriteriums zuletzt aktiviert wurde (d.h. wann "IsActive" zuletzt auf "1" gesetzt wurde)
     * </pre>
     *
     * <code>.dstore.values.TimestampValue last_activated_at_date_and_time = 10003;</code>
     */
    public function getLastActivatedAtDateAndTime()
    {
        return $this->last_activated_at_date_and_time;
    }

    /**
     * <pre>
     * Zeitpunkt, an dem das Sortier-Kriteriums zuletzt aktiviert wurde (d.h. wann "IsActive" zuletzt auf "1" gesetzt wurde)
     * </pre>
     *
     * <code>.dstore.values.TimestampValue last_activated_at_date_and_time = 10003;</code>
     */
    public function setLastActivatedAtDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->last_activated_at_date_and_time = $var;
    }

    /**
     * <pre>
     * Entweder- eine "PostingCharacteristicID",oder- der Wert "-1" (steht für das "PostDate")Die "allgemeine" Eigenschaft (zur "PersonID = 0") zum Merkmal bzw. das "PostDate" wird zum Vergleich zweier Hauptbeiträge herangezogen.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_criteriafirst = 10004;</code>
     */
    public function getSortingCriteriafirst()
    {
        return $this->sorting_criteriafirst;
    }

    /**
     * <pre>
     * Entweder- eine "PostingCharacteristicID",oder- der Wert "-1" (steht für das "PostDate")Die "allgemeine" Eigenschaft (zur "PersonID = 0") zum Merkmal bzw. das "PostDate" wird zum Vergleich zweier Hauptbeiträge herangezogen.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_criteriafirst = 10004;</code>
     */
    public function setSortingCriteriafirst(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_criteriafirst = $var;
    }

    /**
     * <pre>
     * Mögliche Werte :- "0" : Sortierung ist inaktiv (ist also nicht verwendbar)- "1" : Sortierung ist aktiv (ist also verwendbar)- "2" : Sortierung wird initialisiert (ist also nicht verwendbar)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue is_active = 10005;</code>
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * <pre>
     * Mögliche Werte :- "0" : Sortierung ist inaktiv (ist also nicht verwendbar)- "1" : Sortierung ist aktiv (ist also verwendbar)- "2" : Sortierung wird initialisiert (ist also nicht verwendbar)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue is_active = 10005;</code>
     */
    public function setIsActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->is_active = $var;
    }

    /**
     * <pre>
     * Nummer eines Sortier-Kriteriums für das Forum "&#64;ForumID" (eindeutig innerhalb "&#64;ForumID")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_criteria_no = 10006;</code>
     */
    public function getSortingCriteriaNo()
    {
        return $this->sorting_criteria_no;
    }

    /**
     * <pre>
     * Nummer eines Sortier-Kriteriums für das Forum "&#64;ForumID" (eindeutig innerhalb "&#64;ForumID")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_criteria_no = 10006;</code>
     */
    public function setSortingCriteriaNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_criteria_no = $var;
    }

    /**
     * <pre>
     * Entweder- eine "PostingCharacteristicID",oder- der Wert "-1" (steht für das "PostDate")Die "allgemeine" Eigenschaft (zur "PersonID = 0") zum Merkmal bzw. das "PostDate" wird zum Vergleich zweier Hauptbeiträge herangezogen.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_criteriathird = 10007;</code>
     */
    public function getSortingCriteriathird()
    {
        return $this->sorting_criteriathird;
    }

    /**
     * <pre>
     * Entweder- eine "PostingCharacteristicID",oder- der Wert "-1" (steht für das "PostDate")Die "allgemeine" Eigenschaft (zur "PersonID = 0") zum Merkmal bzw. das "PostDate" wird zum Vergleich zweier Hauptbeiträge herangezogen.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_criteriathird = 10007;</code>
     */
    public function setSortingCriteriathird(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_criteriathird = $var;
    }

    /**
     * <pre>
     * Einstellungen/Optionen zum Sortier-Kriterium "SortingCriteria_2nd", u.a. ob die Sortierung auf- oder absteigend ist. Details : s. Beschreibung "Grundsätzliches zu Sortier-Kriterien", Punkt 4 !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_optionssecond = 10008;</code>
     */
    public function getSortingOptionssecond()
    {
        return $this->sorting_optionssecond;
    }

    /**
     * <pre>
     * Einstellungen/Optionen zum Sortier-Kriterium "SortingCriteria_2nd", u.a. ob die Sortierung auf- oder absteigend ist. Details : s. Beschreibung "Grundsätzliches zu Sortier-Kriterien", Punkt 4 !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_optionssecond = 10008;</code>
     */
    public function setSortingOptionssecond(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_optionssecond = $var;
    }

    /**
     * <pre>
     * Einstellungen/Optionen zum Sortier-Kriterium "SortingCriteria_3rd", u.a. ob die Sortierung auf- oder absteigend ist. Details : s. Beschreibung "Grundsätzliches zu Sortier-Kriterien", Punkt 4 !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_optionsthird = 10009;</code>
     */
    public function getSortingOptionsthird()
    {
        return $this->sorting_optionsthird;
    }

    /**
     * <pre>
     * Einstellungen/Optionen zum Sortier-Kriterium "SortingCriteria_3rd", u.a. ob die Sortierung auf- oder absteigend ist. Details : s. Beschreibung "Grundsätzliches zu Sortier-Kriterien", Punkt 4 !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_optionsthird = 10009;</code>
     */
    public function setSortingOptionsthird(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_optionsthird = $var;
    }

    /**
     * <pre>
     * Entweder- eine "PostingCharacteristicID",oder- der Wert "-1" (steht für das "PostDate")Die "allgemeine" Eigenschaft (zur "PersonID = 0") zum Merkmal bzw. das "PostDate" wird zum Vergleich zweier Hauptbeiträge herangezogen.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_criteriasecond = 10010;</code>
     */
    public function getSortingCriteriasecond()
    {
        return $this->sorting_criteriasecond;
    }

    /**
     * <pre>
     * Entweder- eine "PostingCharacteristicID",oder- der Wert "-1" (steht für das "PostDate")Die "allgemeine" Eigenschaft (zur "PersonID = 0") zum Merkmal bzw. das "PostDate" wird zum Vergleich zweier Hauptbeiträge herangezogen.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sorting_criteriasecond = 10010;</code>
     */
    public function setSortingCriteriasecond(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_criteriasecond = $var;
    }

}

