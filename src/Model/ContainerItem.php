<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Carton/Pallet level details for the item.
 */
class ContainerItem extends AbstractModel
{
    /**
     * The reference number for the item. Please provide the itemSequenceNumber from
     * the 'items' segment to refer to that item's details here.
     *
     * @var string
     */
    public $itemReference = null;

    /**
     * Total item quantity shipped in this carton/pallet.
     *
     * @var \Amz\VendorShipments\Model\ItemQuantity
     */
    public $shippedQuantity = null;

    /**
     * @var \Amz\VendorShipments\Model\ItemDetails
     */
    public $itemDetails = null;
}
