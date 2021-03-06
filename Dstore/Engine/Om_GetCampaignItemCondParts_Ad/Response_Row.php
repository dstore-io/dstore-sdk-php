<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignItemCondParts_Ad.proto

namespace Dstore\Engine\Om_GetCampaignItemCondParts_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetCampaignItemCondParts_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Operator für die Bedingung "Condition1". Mögliche Werte :- "="- "!=" / "&lt;&gt;"  - "~" / "!~" (LIKE / NOT LIKE)- "&gt;"- "&lt;"- "&gt;="- "&lt;="- "IN" / "!I" (in / NICHT in Menge von "Value"-Werten)- "E" / "!E" (IRGENDEINE / KEINE Eigenschaft)
     * </pre>
     *
     * <code>.dstore.values.StringValue operator1 = 10001;</code>
     */
    private $operator1 = null;
    /**
     * <pre>
     * Bedingung, die in Verbindung mit "Operator1" anzuwenden ist ("NULL", falls "Operator1" den Wert "E" oder "!E" hat)
     * </pre>
     *
     * <code>.dstore.values.StringValue condition1 = 10002;</code>
     */
    private $condition1 = null;
    /**
     * <pre>
     * Bedingung, die in Verbindung mit "Operator2" anzuwenden ist (nur belegt, wenn "Operator2" den Wert "&lt;" oder "&lt;=" enthält)
     * </pre>
     *
     * <code>.dstore.values.StringValue condition2 = 10003;</code>
     */
    private $condition2 = null;
    /**
     * <pre>
     * Operator für die Bedingung "Condition2". Mögliche Werte :- "&lt;" oder "&lt;=", falls "Operator1" "&gt;" oder "&gt;=" enthält- bel. Zeichen (Trennzeichen für Werte-Menge), falls "Operator1" "IN" oder "!I" enthält
     * </pre>
     *
     * <code>.dstore.values.StringValue operator2 = 10004;</code>
     */
    private $operator2 = null;
    /**
     * <pre>
     * Was soll zwecks Prüfung der Bedingung zu "NodeCharacteristicID" (wenn rekursiv) gewählt werden ?"0" : direkte Eigenschaft (also eine Merkmal-ID)"1" : rekursiv ausgewertete Eigenschaft"2" : zugehör. Beschreibung der Eigenschaft (also der Merkmal-ID)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue recursive_evaluation = 10005;</code>
     */
    private $recursive_evaluation = null;
    /**
     * <pre>
     * Um den (Artikel-)Bedingungs-Teil "ItemConditionPartID" zu erfüllen, muß ein Element im Artikelbaum ein Vorgänger-Element besitzen, dessen "TreeNodeID" aus der hier angegebenen Menge von IDs kommt. Sonderfall ",," bedeutet "beliebiger Vorgänger".
     * </pre>
     *
     * <code>.dstore.values.StringValue domain_tree_node_ids = 10006;</code>
     */
    private $domain_tree_node_ids = null;
    /**
     * <pre>
     * ID eines Merkmals. Um "ItemConditionPartID" zu erfüllen, muß ein Element im Artikelbaum eine Eigenschaft zu diesem Merkmal besitzen, die der Bedingung ("Operator1" etc.) genügt. Sonderfall "-1" : "KEINE Eigenschafts-Bedingung" (ist also immer erfüllt).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10007;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <pre>
     * ID der Artikel-Bedingung, auf der "ConditionID" basiert - natürlich identisch mit "&#64;ItemConditionPartID" wenn angegeben
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_part_id = 10008;</code>
     */
    private $item_condition_part_id = null;
    /**
     * <pre>
     * Bezeichnung des (um Mengen- und/oder Warenwert-Kriterium erweiterten) Bedingungs-Teils "ItemConditionPartID"
     * </pre>
     *
     * <code>.dstore.values.StringValue extended_item_cond_part_descr = 10009;</code>
     */
    private $extended_item_cond_part_descr = null;
    /**
     * <pre>
     * Die Anzahl VERSCHIEDENER Artikel-Elemente, die den Bedingungs-Teil "ItemConditionPartID" erfüllen, muß zwischen diesem Wert und "MaxNumberOfItems" (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue min_number_of_items = 10010;</code>
     */
    private $min_number_of_items = null;
    /**
     * <pre>
     * Die Gesamt-Menge (Summe "Quantity") ALLER Artikel-Elemente, die den Bedingungs-Teil "ItemConditionPartID" erfüllen, muß zwischen "FromQuantity" und diesem Wert (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue to_quantity = 10011;</code>
     */
    private $to_quantity = null;
    /**
     * <pre>
     * Die Gesamt-Summe für alle Artikel-Elemente (Summe aller Einzelpreise, die "_om_GetBasicPrices" liefert, mit der jeweiligen "Quantity" multipliziert), die den Bedingungsteil "ItemConditionPartID" erfüllen, muß zw. diesem Wert und "ToBasicPriceSum" liegen
     * </pre>
     *
     * <code>.dstore.values.DecimalValue from_basic_price_sum = 10012;</code>
     */
    private $from_basic_price_sum = null;
    /**
     * <pre>
     * Die Anzahl VERSCHIEDENER Artikel-Elemente, die den Bedingungs-Teil "ItemConditionPartID" erfüllen, muß zwischen "MinNumberOfItems" und diesem Wert (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue max_number_of_items = 10013;</code>
     */
    private $max_number_of_items = null;
    /**
     * <pre>
     * Die Gesamt-Summe für alle Artikel-Elemente (Summe aller Einzelpreise, die "_om_GetBasicPrices" liefert, mit der jeweiligen "Quantity" multipliziert), die den Bedingungsteil "ItemConditionPartID" erfüllen, muß zw. "FromBasicPriceSum" und diesem Wert liegen
     * </pre>
     *
     * <code>.dstore.values.DecimalValue to_basic_price_sum = 10014;</code>
     */
    private $to_basic_price_sum = null;
    /**
     * <pre>
     * Um den (Artikel-)Bedingungs-Teil "ItemConditionPartID" zu erfüllen, muß die Hierarchie ("LevelID") eines Artikel-Elementes aus der hier angegebenen Menge der Hierarchien ("LevelID"s) kommen. Sonderfall ",," bedeutet "beliebige Hierarchie".
     * </pre>
     *
     * <code>.dstore.values.StringValue level_ids = 10015;</code>
     */
    private $level_ids = null;
    /**
     * <pre>
     * ID einer Verkaufs-Aktions-Bedingung (die auf einer Artikel-Bedingung basiert) - natürlich identisch mit "&#64;ConditionID" wenn angegeben
     * </pre>
     *
     * <code>.dstore.values.IntegerValue condition_id = 10016;</code>
     */
    private $condition_id = null;
    /**
     * <pre>
     * Der EINZEL-Preis, den "_om_GetBasicPrices" für ein Artikel-Element, das den Bedingungs-Teil "ItemConditionPartID" erfüllt, liefert, muß zwischen "FromItemBasicPrice" und diesem Wert (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.DecimalValue to_item_basic_price = 10017;</code>
     */
    private $to_item_basic_price = null;
    /**
     * <pre>
     * Die Gesamt-Menge (Summe "Quantity") ALLER Artikel-Elemente, die den Bedingungs-Teil "ItemConditionPartID" erfüllen, muß zwischen diesem Wert und "ToQuantity" (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue from_quantity = 10018;</code>
     */
    private $from_quantity = null;
    /**
     * <pre>
     * Welche Eigenschaften zu "NodeCharacteristicID" hinsichtlich Vererbung sollen bei Prüfung der Eigenschafts-Bedingung beachtet werden :"-1" : Alle"0" : unvererbte"1" : direkte u. einfach geerbte"2" : direkte u. einfach oder zweifach geerbteusw.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue inherit_depth = 10019;</code>
     */
    private $inherit_depth = null;
    /**
     * <pre>
     * Der EINZEL-Preis, den "_om_GetBasicPrices" für ein Artikel-Element, das den Bedingungs-Teil "ItemConditionPartID" erfüllt, liefert, muß zwischen diesem Wert und "ToItemBasicPrice" (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.DecimalValue from_item_basic_price = 10020;</code>
     */
    private $from_item_basic_price = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetCampaignItemCondPartsAd::initOnce();
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
     * Operator für die Bedingung "Condition1". Mögliche Werte :- "="- "!=" / "&lt;&gt;"  - "~" / "!~" (LIKE / NOT LIKE)- "&gt;"- "&lt;"- "&gt;="- "&lt;="- "IN" / "!I" (in / NICHT in Menge von "Value"-Werten)- "E" / "!E" (IRGENDEINE / KEINE Eigenschaft)
     * </pre>
     *
     * <code>.dstore.values.StringValue operator1 = 10001;</code>
     */
    public function getOperator1()
    {
        return $this->operator1;
    }

    /**
     * <pre>
     * Operator für die Bedingung "Condition1". Mögliche Werte :- "="- "!=" / "&lt;&gt;"  - "~" / "!~" (LIKE / NOT LIKE)- "&gt;"- "&lt;"- "&gt;="- "&lt;="- "IN" / "!I" (in / NICHT in Menge von "Value"-Werten)- "E" / "!E" (IRGENDEINE / KEINE Eigenschaft)
     * </pre>
     *
     * <code>.dstore.values.StringValue operator1 = 10001;</code>
     */
    public function setOperator1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->operator1 = $var;
    }

    /**
     * <pre>
     * Bedingung, die in Verbindung mit "Operator1" anzuwenden ist ("NULL", falls "Operator1" den Wert "E" oder "!E" hat)
     * </pre>
     *
     * <code>.dstore.values.StringValue condition1 = 10002;</code>
     */
    public function getCondition1()
    {
        return $this->condition1;
    }

    /**
     * <pre>
     * Bedingung, die in Verbindung mit "Operator1" anzuwenden ist ("NULL", falls "Operator1" den Wert "E" oder "!E" hat)
     * </pre>
     *
     * <code>.dstore.values.StringValue condition1 = 10002;</code>
     */
    public function setCondition1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->condition1 = $var;
    }

    /**
     * <pre>
     * Bedingung, die in Verbindung mit "Operator2" anzuwenden ist (nur belegt, wenn "Operator2" den Wert "&lt;" oder "&lt;=" enthält)
     * </pre>
     *
     * <code>.dstore.values.StringValue condition2 = 10003;</code>
     */
    public function getCondition2()
    {
        return $this->condition2;
    }

    /**
     * <pre>
     * Bedingung, die in Verbindung mit "Operator2" anzuwenden ist (nur belegt, wenn "Operator2" den Wert "&lt;" oder "&lt;=" enthält)
     * </pre>
     *
     * <code>.dstore.values.StringValue condition2 = 10003;</code>
     */
    public function setCondition2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->condition2 = $var;
    }

    /**
     * <pre>
     * Operator für die Bedingung "Condition2". Mögliche Werte :- "&lt;" oder "&lt;=", falls "Operator1" "&gt;" oder "&gt;=" enthält- bel. Zeichen (Trennzeichen für Werte-Menge), falls "Operator1" "IN" oder "!I" enthält
     * </pre>
     *
     * <code>.dstore.values.StringValue operator2 = 10004;</code>
     */
    public function getOperator2()
    {
        return $this->operator2;
    }

    /**
     * <pre>
     * Operator für die Bedingung "Condition2". Mögliche Werte :- "&lt;" oder "&lt;=", falls "Operator1" "&gt;" oder "&gt;=" enthält- bel. Zeichen (Trennzeichen für Werte-Menge), falls "Operator1" "IN" oder "!I" enthält
     * </pre>
     *
     * <code>.dstore.values.StringValue operator2 = 10004;</code>
     */
    public function setOperator2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->operator2 = $var;
    }

    /**
     * <pre>
     * Was soll zwecks Prüfung der Bedingung zu "NodeCharacteristicID" (wenn rekursiv) gewählt werden ?"0" : direkte Eigenschaft (also eine Merkmal-ID)"1" : rekursiv ausgewertete Eigenschaft"2" : zugehör. Beschreibung der Eigenschaft (also der Merkmal-ID)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue recursive_evaluation = 10005;</code>
     */
    public function getRecursiveEvaluation()
    {
        return $this->recursive_evaluation;
    }

    /**
     * <pre>
     * Was soll zwecks Prüfung der Bedingung zu "NodeCharacteristicID" (wenn rekursiv) gewählt werden ?"0" : direkte Eigenschaft (also eine Merkmal-ID)"1" : rekursiv ausgewertete Eigenschaft"2" : zugehör. Beschreibung der Eigenschaft (also der Merkmal-ID)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue recursive_evaluation = 10005;</code>
     */
    public function setRecursiveEvaluation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->recursive_evaluation = $var;
    }

    /**
     * <pre>
     * Um den (Artikel-)Bedingungs-Teil "ItemConditionPartID" zu erfüllen, muß ein Element im Artikelbaum ein Vorgänger-Element besitzen, dessen "TreeNodeID" aus der hier angegebenen Menge von IDs kommt. Sonderfall ",," bedeutet "beliebiger Vorgänger".
     * </pre>
     *
     * <code>.dstore.values.StringValue domain_tree_node_ids = 10006;</code>
     */
    public function getDomainTreeNodeIds()
    {
        return $this->domain_tree_node_ids;
    }

    /**
     * <pre>
     * Um den (Artikel-)Bedingungs-Teil "ItemConditionPartID" zu erfüllen, muß ein Element im Artikelbaum ein Vorgänger-Element besitzen, dessen "TreeNodeID" aus der hier angegebenen Menge von IDs kommt. Sonderfall ",," bedeutet "beliebiger Vorgänger".
     * </pre>
     *
     * <code>.dstore.values.StringValue domain_tree_node_ids = 10006;</code>
     */
    public function setDomainTreeNodeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->domain_tree_node_ids = $var;
    }

    /**
     * <pre>
     * ID eines Merkmals. Um "ItemConditionPartID" zu erfüllen, muß ein Element im Artikelbaum eine Eigenschaft zu diesem Merkmal besitzen, die der Bedingung ("Operator1" etc.) genügt. Sonderfall "-1" : "KEINE Eigenschafts-Bedingung" (ist also immer erfüllt).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10007;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <pre>
     * ID eines Merkmals. Um "ItemConditionPartID" zu erfüllen, muß ein Element im Artikelbaum eine Eigenschaft zu diesem Merkmal besitzen, die der Bedingung ("Operator1" etc.) genügt. Sonderfall "-1" : "KEINE Eigenschafts-Bedingung" (ist also immer erfüllt).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10007;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

    /**
     * <pre>
     * ID der Artikel-Bedingung, auf der "ConditionID" basiert - natürlich identisch mit "&#64;ItemConditionPartID" wenn angegeben
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_part_id = 10008;</code>
     */
    public function getItemConditionPartId()
    {
        return $this->item_condition_part_id;
    }

    /**
     * <pre>
     * ID der Artikel-Bedingung, auf der "ConditionID" basiert - natürlich identisch mit "&#64;ItemConditionPartID" wenn angegeben
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_part_id = 10008;</code>
     */
    public function setItemConditionPartId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->item_condition_part_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung des (um Mengen- und/oder Warenwert-Kriterium erweiterten) Bedingungs-Teils "ItemConditionPartID"
     * </pre>
     *
     * <code>.dstore.values.StringValue extended_item_cond_part_descr = 10009;</code>
     */
    public function getExtendedItemCondPartDescr()
    {
        return $this->extended_item_cond_part_descr;
    }

    /**
     * <pre>
     * Bezeichnung des (um Mengen- und/oder Warenwert-Kriterium erweiterten) Bedingungs-Teils "ItemConditionPartID"
     * </pre>
     *
     * <code>.dstore.values.StringValue extended_item_cond_part_descr = 10009;</code>
     */
    public function setExtendedItemCondPartDescr(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->extended_item_cond_part_descr = $var;
    }

    /**
     * <pre>
     * Die Anzahl VERSCHIEDENER Artikel-Elemente, die den Bedingungs-Teil "ItemConditionPartID" erfüllen, muß zwischen diesem Wert und "MaxNumberOfItems" (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue min_number_of_items = 10010;</code>
     */
    public function getMinNumberOfItems()
    {
        return $this->min_number_of_items;
    }

    /**
     * <pre>
     * Die Anzahl VERSCHIEDENER Artikel-Elemente, die den Bedingungs-Teil "ItemConditionPartID" erfüllen, muß zwischen diesem Wert und "MaxNumberOfItems" (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue min_number_of_items = 10010;</code>
     */
    public function setMinNumberOfItems(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->min_number_of_items = $var;
    }

    /**
     * <pre>
     * Die Gesamt-Menge (Summe "Quantity") ALLER Artikel-Elemente, die den Bedingungs-Teil "ItemConditionPartID" erfüllen, muß zwischen "FromQuantity" und diesem Wert (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue to_quantity = 10011;</code>
     */
    public function getToQuantity()
    {
        return $this->to_quantity;
    }

    /**
     * <pre>
     * Die Gesamt-Menge (Summe "Quantity") ALLER Artikel-Elemente, die den Bedingungs-Teil "ItemConditionPartID" erfüllen, muß zwischen "FromQuantity" und diesem Wert (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue to_quantity = 10011;</code>
     */
    public function setToQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->to_quantity = $var;
    }

    /**
     * <pre>
     * Die Gesamt-Summe für alle Artikel-Elemente (Summe aller Einzelpreise, die "_om_GetBasicPrices" liefert, mit der jeweiligen "Quantity" multipliziert), die den Bedingungsteil "ItemConditionPartID" erfüllen, muß zw. diesem Wert und "ToBasicPriceSum" liegen
     * </pre>
     *
     * <code>.dstore.values.DecimalValue from_basic_price_sum = 10012;</code>
     */
    public function getFromBasicPriceSum()
    {
        return $this->from_basic_price_sum;
    }

    /**
     * <pre>
     * Die Gesamt-Summe für alle Artikel-Elemente (Summe aller Einzelpreise, die "_om_GetBasicPrices" liefert, mit der jeweiligen "Quantity" multipliziert), die den Bedingungsteil "ItemConditionPartID" erfüllen, muß zw. diesem Wert und "ToBasicPriceSum" liegen
     * </pre>
     *
     * <code>.dstore.values.DecimalValue from_basic_price_sum = 10012;</code>
     */
    public function setFromBasicPriceSum(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->from_basic_price_sum = $var;
    }

    /**
     * <pre>
     * Die Anzahl VERSCHIEDENER Artikel-Elemente, die den Bedingungs-Teil "ItemConditionPartID" erfüllen, muß zwischen "MinNumberOfItems" und diesem Wert (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue max_number_of_items = 10013;</code>
     */
    public function getMaxNumberOfItems()
    {
        return $this->max_number_of_items;
    }

    /**
     * <pre>
     * Die Anzahl VERSCHIEDENER Artikel-Elemente, die den Bedingungs-Teil "ItemConditionPartID" erfüllen, muß zwischen "MinNumberOfItems" und diesem Wert (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue max_number_of_items = 10013;</code>
     */
    public function setMaxNumberOfItems(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->max_number_of_items = $var;
    }

    /**
     * <pre>
     * Die Gesamt-Summe für alle Artikel-Elemente (Summe aller Einzelpreise, die "_om_GetBasicPrices" liefert, mit der jeweiligen "Quantity" multipliziert), die den Bedingungsteil "ItemConditionPartID" erfüllen, muß zw. "FromBasicPriceSum" und diesem Wert liegen
     * </pre>
     *
     * <code>.dstore.values.DecimalValue to_basic_price_sum = 10014;</code>
     */
    public function getToBasicPriceSum()
    {
        return $this->to_basic_price_sum;
    }

    /**
     * <pre>
     * Die Gesamt-Summe für alle Artikel-Elemente (Summe aller Einzelpreise, die "_om_GetBasicPrices" liefert, mit der jeweiligen "Quantity" multipliziert), die den Bedingungsteil "ItemConditionPartID" erfüllen, muß zw. "FromBasicPriceSum" und diesem Wert liegen
     * </pre>
     *
     * <code>.dstore.values.DecimalValue to_basic_price_sum = 10014;</code>
     */
    public function setToBasicPriceSum(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->to_basic_price_sum = $var;
    }

    /**
     * <pre>
     * Um den (Artikel-)Bedingungs-Teil "ItemConditionPartID" zu erfüllen, muß die Hierarchie ("LevelID") eines Artikel-Elementes aus der hier angegebenen Menge der Hierarchien ("LevelID"s) kommen. Sonderfall ",," bedeutet "beliebige Hierarchie".
     * </pre>
     *
     * <code>.dstore.values.StringValue level_ids = 10015;</code>
     */
    public function getLevelIds()
    {
        return $this->level_ids;
    }

    /**
     * <pre>
     * Um den (Artikel-)Bedingungs-Teil "ItemConditionPartID" zu erfüllen, muß die Hierarchie ("LevelID") eines Artikel-Elementes aus der hier angegebenen Menge der Hierarchien ("LevelID"s) kommen. Sonderfall ",," bedeutet "beliebige Hierarchie".
     * </pre>
     *
     * <code>.dstore.values.StringValue level_ids = 10015;</code>
     */
    public function setLevelIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->level_ids = $var;
    }

    /**
     * <pre>
     * ID einer Verkaufs-Aktions-Bedingung (die auf einer Artikel-Bedingung basiert) - natürlich identisch mit "&#64;ConditionID" wenn angegeben
     * </pre>
     *
     * <code>.dstore.values.IntegerValue condition_id = 10016;</code>
     */
    public function getConditionId()
    {
        return $this->condition_id;
    }

    /**
     * <pre>
     * ID einer Verkaufs-Aktions-Bedingung (die auf einer Artikel-Bedingung basiert) - natürlich identisch mit "&#64;ConditionID" wenn angegeben
     * </pre>
     *
     * <code>.dstore.values.IntegerValue condition_id = 10016;</code>
     */
    public function setConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_id = $var;
    }

    /**
     * <pre>
     * Der EINZEL-Preis, den "_om_GetBasicPrices" für ein Artikel-Element, das den Bedingungs-Teil "ItemConditionPartID" erfüllt, liefert, muß zwischen "FromItemBasicPrice" und diesem Wert (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.DecimalValue to_item_basic_price = 10017;</code>
     */
    public function getToItemBasicPrice()
    {
        return $this->to_item_basic_price;
    }

    /**
     * <pre>
     * Der EINZEL-Preis, den "_om_GetBasicPrices" für ein Artikel-Element, das den Bedingungs-Teil "ItemConditionPartID" erfüllt, liefert, muß zwischen "FromItemBasicPrice" und diesem Wert (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.DecimalValue to_item_basic_price = 10017;</code>
     */
    public function setToItemBasicPrice(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->to_item_basic_price = $var;
    }

    /**
     * <pre>
     * Die Gesamt-Menge (Summe "Quantity") ALLER Artikel-Elemente, die den Bedingungs-Teil "ItemConditionPartID" erfüllen, muß zwischen diesem Wert und "ToQuantity" (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue from_quantity = 10018;</code>
     */
    public function getFromQuantity()
    {
        return $this->from_quantity;
    }

    /**
     * <pre>
     * Die Gesamt-Menge (Summe "Quantity") ALLER Artikel-Elemente, die den Bedingungs-Teil "ItemConditionPartID" erfüllen, muß zwischen diesem Wert und "ToQuantity" (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue from_quantity = 10018;</code>
     */
    public function setFromQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->from_quantity = $var;
    }

    /**
     * <pre>
     * Welche Eigenschaften zu "NodeCharacteristicID" hinsichtlich Vererbung sollen bei Prüfung der Eigenschafts-Bedingung beachtet werden :"-1" : Alle"0" : unvererbte"1" : direkte u. einfach geerbte"2" : direkte u. einfach oder zweifach geerbteusw.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue inherit_depth = 10019;</code>
     */
    public function getInheritDepth()
    {
        return $this->inherit_depth;
    }

    /**
     * <pre>
     * Welche Eigenschaften zu "NodeCharacteristicID" hinsichtlich Vererbung sollen bei Prüfung der Eigenschafts-Bedingung beachtet werden :"-1" : Alle"0" : unvererbte"1" : direkte u. einfach geerbte"2" : direkte u. einfach oder zweifach geerbteusw.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue inherit_depth = 10019;</code>
     */
    public function setInheritDepth(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->inherit_depth = $var;
    }

    /**
     * <pre>
     * Der EINZEL-Preis, den "_om_GetBasicPrices" für ein Artikel-Element, das den Bedingungs-Teil "ItemConditionPartID" erfüllt, liefert, muß zwischen diesem Wert und "ToItemBasicPrice" (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.DecimalValue from_item_basic_price = 10020;</code>
     */
    public function getFromItemBasicPrice()
    {
        return $this->from_item_basic_price;
    }

    /**
     * <pre>
     * Der EINZEL-Preis, den "_om_GetBasicPrices" für ein Artikel-Element, das den Bedingungs-Teil "ItemConditionPartID" erfüllt, liefert, muß zwischen diesem Wert und "ToItemBasicPrice" (sofern nicht "NULL") liegen (um "ConditionID" zu erfüllen)
     * </pre>
     *
     * <code>.dstore.values.DecimalValue from_item_basic_price = 10020;</code>
     */
    public function setFromItemBasicPrice(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->from_item_basic_price = $var;
    }

}

