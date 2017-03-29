<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetMessages_Pu.proto

namespace Dstore\Engine\Co_GetMessages_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_GetMessages_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Eigenschaft des Mitglieds "FromCommunityMemberID" zu dem Merkmal, anhand dessen die Communitymitglieder sich untereinander unterscheiden bzw. erkennen können. (Eintrag in "CommunitySettings" zum Schlüssel "IdentifyingCharacteristicID")
     * </pre>
     *
     * <code>.dstore.values.StringValue from_community_member_nickname = 10001;</code>
     */
    private $from_community_member_nickname = null;
    /**
     * <pre>
     * Status der Nachricht "Message". Bedeutung(en) :* 0 bis 99 : neu (ungelesen)   (z.B könnte "1" bedeuten, "Schicke es auch als SMS")* 100 bis 199 : alt (gelesen)* 200 bis 254 : &lt;undefiniert&gt;* 255 : gelöscht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_status = 10002;</code>
     */
    private $message_status = null;
    /**
     * <pre>
     * Die Nachricht von "FromCommunityMemberID" an das (durch "&#64;PersonIdentificationValues" identifizierte) Community-Mitglied
     * </pre>
     *
     * <code>.dstore.values.StringValue message = 10003;</code>
     */
    private $message = null;
    /**
     * <pre>
     * Nummer der Nachricht "Message". Gibt an, um die wievielte Nachricht es sich für das (durch "&#64;PersonIdentificationValues" identifizierte) Mitglied handelt. ACHTUNG : es werden negative Werte zurückgegeben !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_no = 10004;</code>
     */
    private $message_no = null;
    /**
     * <pre>
     * Wann wurde die Nachricht "Message" geschickt. Falls "&#64;DateAndTimeFormat = NULL" übergeben wurde, ist das Format "07.02.2000 17:30:21". Ansonsten wird "&#64;DateAndTimeFormat" für die "style"-Option der ASE-Funktion "convert" verwendet (siehe Beschreibung).
     * </pre>
     *
     * <code>.dstore.values.TimestampValue message_date_and_time = 10005;</code>
     */
    private $message_date_and_time = null;
    /**
     * <pre>
     * ID des Community-Mitglieds, von dem die Nachricht "Message" stammt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue from_community_member_id = 10006;</code>
     */
    private $from_community_member_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoGetMessagesPu::initOnce();
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
     * Eigenschaft des Mitglieds "FromCommunityMemberID" zu dem Merkmal, anhand dessen die Communitymitglieder sich untereinander unterscheiden bzw. erkennen können. (Eintrag in "CommunitySettings" zum Schlüssel "IdentifyingCharacteristicID")
     * </pre>
     *
     * <code>.dstore.values.StringValue from_community_member_nickname = 10001;</code>
     */
    public function getFromCommunityMemberNickname()
    {
        return $this->from_community_member_nickname;
    }

    /**
     * <pre>
     * Eigenschaft des Mitglieds "FromCommunityMemberID" zu dem Merkmal, anhand dessen die Communitymitglieder sich untereinander unterscheiden bzw. erkennen können. (Eintrag in "CommunitySettings" zum Schlüssel "IdentifyingCharacteristicID")
     * </pre>
     *
     * <code>.dstore.values.StringValue from_community_member_nickname = 10001;</code>
     */
    public function setFromCommunityMemberNickname(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->from_community_member_nickname = $var;
    }

    /**
     * <pre>
     * Status der Nachricht "Message". Bedeutung(en) :* 0 bis 99 : neu (ungelesen)   (z.B könnte "1" bedeuten, "Schicke es auch als SMS")* 100 bis 199 : alt (gelesen)* 200 bis 254 : &lt;undefiniert&gt;* 255 : gelöscht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_status = 10002;</code>
     */
    public function getMessageStatus()
    {
        return $this->message_status;
    }

    /**
     * <pre>
     * Status der Nachricht "Message". Bedeutung(en) :* 0 bis 99 : neu (ungelesen)   (z.B könnte "1" bedeuten, "Schicke es auch als SMS")* 100 bis 199 : alt (gelesen)* 200 bis 254 : &lt;undefiniert&gt;* 255 : gelöscht
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_status = 10002;</code>
     */
    public function setMessageStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->message_status = $var;
    }

    /**
     * <pre>
     * Die Nachricht von "FromCommunityMemberID" an das (durch "&#64;PersonIdentificationValues" identifizierte) Community-Mitglied
     * </pre>
     *
     * <code>.dstore.values.StringValue message = 10003;</code>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <pre>
     * Die Nachricht von "FromCommunityMemberID" an das (durch "&#64;PersonIdentificationValues" identifizierte) Community-Mitglied
     * </pre>
     *
     * <code>.dstore.values.StringValue message = 10003;</code>
     */
    public function setMessage(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->message = $var;
    }

    /**
     * <pre>
     * Nummer der Nachricht "Message". Gibt an, um die wievielte Nachricht es sich für das (durch "&#64;PersonIdentificationValues" identifizierte) Mitglied handelt. ACHTUNG : es werden negative Werte zurückgegeben !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_no = 10004;</code>
     */
    public function getMessageNo()
    {
        return $this->message_no;
    }

    /**
     * <pre>
     * Nummer der Nachricht "Message". Gibt an, um die wievielte Nachricht es sich für das (durch "&#64;PersonIdentificationValues" identifizierte) Mitglied handelt. ACHTUNG : es werden negative Werte zurückgegeben !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue message_no = 10004;</code>
     */
    public function setMessageNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->message_no = $var;
    }

    /**
     * <pre>
     * Wann wurde die Nachricht "Message" geschickt. Falls "&#64;DateAndTimeFormat = NULL" übergeben wurde, ist das Format "07.02.2000 17:30:21". Ansonsten wird "&#64;DateAndTimeFormat" für die "style"-Option der ASE-Funktion "convert" verwendet (siehe Beschreibung).
     * </pre>
     *
     * <code>.dstore.values.TimestampValue message_date_and_time = 10005;</code>
     */
    public function getMessageDateAndTime()
    {
        return $this->message_date_and_time;
    }

    /**
     * <pre>
     * Wann wurde die Nachricht "Message" geschickt. Falls "&#64;DateAndTimeFormat = NULL" übergeben wurde, ist das Format "07.02.2000 17:30:21". Ansonsten wird "&#64;DateAndTimeFormat" für die "style"-Option der ASE-Funktion "convert" verwendet (siehe Beschreibung).
     * </pre>
     *
     * <code>.dstore.values.TimestampValue message_date_and_time = 10005;</code>
     */
    public function setMessageDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->message_date_and_time = $var;
    }

    /**
     * <pre>
     * ID des Community-Mitglieds, von dem die Nachricht "Message" stammt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue from_community_member_id = 10006;</code>
     */
    public function getFromCommunityMemberId()
    {
        return $this->from_community_member_id;
    }

    /**
     * <pre>
     * ID des Community-Mitglieds, von dem die Nachricht "Message" stammt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue from_community_member_id = 10006;</code>
     */
    public function setFromCommunityMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->from_community_member_id = $var;
    }

}
