<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_ModifyCampOrderSurchDisc_Ad.proto

namespace Dstore\Engine\Om_ModifyCampOrderSurchDisc_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_ModifyCampOrderSurchDisc_Ad.Response</code>
 */
class Response extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .dstore.engine.MetaInformation meta_information = 2;</code>
     */
    private $meta_information;
    /**
     * <code>repeated .dstore.engine.Message message = 3;</code>
     */
    private $message;
    /**
     * <code>repeated .dstore.engine.om_ModifyCampOrderSurchDisc_Ad.Response.Row row = 4;</code>
     */
    private $row;
    /**
     * <code>.dstore.values.IntegerValue benefit_id = 101;</code>
     */
    private $benefit_id = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmModifyCampOrderSurchDiscAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .dstore.engine.MetaInformation meta_information = 2;</code>
     */
    public function getMetaInformation()
    {
        return $this->meta_information;
    }

    /**
     * <code>repeated .dstore.engine.MetaInformation meta_information = 2;</code>
     */
    public function setMetaInformation(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Engine\MetaInformation::class);
        $this->meta_information = $var;
    }

    /**
     * <code>repeated .dstore.engine.Message message = 3;</code>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <code>repeated .dstore.engine.Message message = 3;</code>
     */
    public function setMessage(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Engine\Message::class);
        $this->message = $var;
    }

    /**
     * <code>repeated .dstore.engine.om_ModifyCampOrderSurchDisc_Ad.Response.Row row = 4;</code>
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * <code>repeated .dstore.engine.om_ModifyCampOrderSurchDisc_Ad.Response.Row row = 4;</code>
     */
    public function setRow(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Engine\Om_ModifyCampOrderSurchDisc_Ad\Response_Row::class);
        $this->row = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue benefit_id = 101;</code>
     */
    public function getBenefitId()
    {
        return $this->benefit_id;
    }

    /**
     * <code>.dstore.values.IntegerValue benefit_id = 101;</code>
     */
    public function setBenefitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->benefit_id = $var;
    }

}
