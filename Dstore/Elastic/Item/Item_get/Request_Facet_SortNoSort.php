<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/elastic/item/item_get.proto

namespace Dstore\Elastic\Item\Item_get;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.elastic.item.item_get.Request.Facet.SortNoSort</code>
 */
class Request_Facet_SortNoSort extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.elastic.Sort.Order sort_order = 1;</code>
     */
    private $sort_order = 0;

    public function __construct() {
        \GPBMetadata\Dstore\Elastic\Item\ItemGet::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.elastic.Sort.Order sort_order = 1;</code>
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * <code>.dstore.elastic.Sort.Order sort_order = 1;</code>
     */
    public function setSortOrder($var)
    {
        GPBUtil::checkEnum($var, \Dstore\Elastic\Sort_Order::class);
        $this->sort_order = $var;
    }

}
