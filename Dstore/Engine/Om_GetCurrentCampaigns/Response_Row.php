<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCurrentCampaigns.proto

namespace Dstore\Engine\Om_GetCurrentCampaigns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetCurrentCampaigns.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID einer Verkaufs-Aktion
     * </pre>
     *
     * <code>.dstore.values.IntegerValue campaign_id = 10001;</code>
     */
    private $campaign_id = null;
    /**
     * <pre>
     * Beschreibung (kann Kommentar, Zeitraum etc. enthalten) der Verkaufs-Aktion "CampaignID"
     * </pre>
     *
     * <code>.dstore.values.StringValue campaign_description = 10002;</code>
     */
    private $campaign_description = null;
    /**
     * <pre>
     * Bezeichnung der Verkaufs-Aktion "CampaignID"
     * </pre>
     *
     * <code>.dstore.values.StringValue campaign_name = 10003;</code>
     */
    private $campaign_name = null;
    /**
     * <pre>
     * ID eines Benefits vom Typ "BenefitTypeID", der für die Aktion gewährt wird
     * </pre>
     *
     * <code>.dstore.values.IntegerValue benefit_id = 20001;</code>
     */
    private $benefit_id = null;
    /**
     * <pre>
     * Die ID der "Art von Benefit" (z.B. Rabatt), von der "BenefitID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue benefit_type_id = 20005;</code>
     */
    private $benefit_type_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetCurrentCampaigns::initOnce();
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
     * ID einer Verkaufs-Aktion
     * </pre>
     *
     * <code>.dstore.values.IntegerValue campaign_id = 10001;</code>
     */
    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    /**
     * <pre>
     * ID einer Verkaufs-Aktion
     * </pre>
     *
     * <code>.dstore.values.IntegerValue campaign_id = 10001;</code>
     */
    public function setCampaignId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->campaign_id = $var;
    }

    /**
     * <pre>
     * Beschreibung (kann Kommentar, Zeitraum etc. enthalten) der Verkaufs-Aktion "CampaignID"
     * </pre>
     *
     * <code>.dstore.values.StringValue campaign_description = 10002;</code>
     */
    public function getCampaignDescription()
    {
        return $this->campaign_description;
    }

    /**
     * <pre>
     * Beschreibung (kann Kommentar, Zeitraum etc. enthalten) der Verkaufs-Aktion "CampaignID"
     * </pre>
     *
     * <code>.dstore.values.StringValue campaign_description = 10002;</code>
     */
    public function setCampaignDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->campaign_description = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Verkaufs-Aktion "CampaignID"
     * </pre>
     *
     * <code>.dstore.values.StringValue campaign_name = 10003;</code>
     */
    public function getCampaignName()
    {
        return $this->campaign_name;
    }

    /**
     * <pre>
     * Bezeichnung der Verkaufs-Aktion "CampaignID"
     * </pre>
     *
     * <code>.dstore.values.StringValue campaign_name = 10003;</code>
     */
    public function setCampaignName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->campaign_name = $var;
    }

    /**
     * <pre>
     * ID eines Benefits vom Typ "BenefitTypeID", der für die Aktion gewährt wird
     * </pre>
     *
     * <code>.dstore.values.IntegerValue benefit_id = 20001;</code>
     */
    public function getBenefitId()
    {
        return $this->benefit_id;
    }

    /**
     * <pre>
     * ID eines Benefits vom Typ "BenefitTypeID", der für die Aktion gewährt wird
     * </pre>
     *
     * <code>.dstore.values.IntegerValue benefit_id = 20001;</code>
     */
    public function setBenefitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->benefit_id = $var;
    }

    /**
     * <pre>
     * Die ID der "Art von Benefit" (z.B. Rabatt), von der "BenefitID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue benefit_type_id = 20005;</code>
     */
    public function getBenefitTypeId()
    {
        return $this->benefit_type_id;
    }

    /**
     * <pre>
     * Die ID der "Art von Benefit" (z.B. Rabatt), von der "BenefitID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue benefit_type_id = 20005;</code>
     */
    public function setBenefitTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->benefit_type_id = $var;
    }

}

