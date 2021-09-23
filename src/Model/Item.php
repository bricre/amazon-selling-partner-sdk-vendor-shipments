<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of the item being shipped.
 */
class Item extends AbstractModel
{
    /**
     * Item sequence number for the item. The first item will be 001, the second 002,
     * and so on. This number is used as a reference to refer to this item from the
     * carton or pallet level.
     *
     * @var string
     */
    public $itemSequenceNumber = null;

    /**
     * Amazon Standard Identification Number (ASIN) of an item.
     *
     * @var string
     */
    public $amazonProductIdentifier = null;

    /**
     * The vendor selected product identification of the item. Should be the same as
     * was sent in the purchase order.
     *
     * @var string
     */
    public $vendorProductIdentifier = null;

    /**
     * Total item quantity shipped in this shipment.
     *
     * @var \Amz\VendorShipments\Model\ItemQuantity
     */
    public $shippedQuantity = null;

    /**
     * @var \Amz\VendorShipments\Model\ItemDetails
     */
    public $itemDetails = null;
}
