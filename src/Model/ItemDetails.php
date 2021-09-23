<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Item details for be provided for every item in shipment at either the item or
 * carton or pallet level, whichever is appropriate.
 */
class ItemDetails extends AbstractModel
{
    /**
     * The Amazon purchase order number for the shipment being confirmed. If the items
     * in this shipment belong to multiple purchase order numbers that are in
     * particular carton or pallet within the shipment, then provide the
     * purchaseOrderNumber at the appropriate carton or pallet level. Formatting Notes:
     * 8-character alpha-numeric code.
     *
     * @var string
     */
    public $purchaseOrderNumber = null;

    /**
     * The batch or lot number associates an item with information the manufacturer
     * considers relevant for traceability of the trade item to which the Element
     * String is applied. The data may refer to the trade item itself or to items
     * contained. This field is mandatory for all perishable items.
     *
     * @var string
     */
    public $lotNumber = null;

    /**
     * Either expiryDate or mfgDate and expiryAfterDuration are mandatory for
     * perishable items.
     *
     * @var \Amz\VendorShipments\Model\Expiry
     */
    public $expiry = null;

    /**
     * Maximum retail price of the item being shipped.
     *
     * @var \Amz\VendorShipments\Model\Money
     */
    public $maximumRetailPrice = null;

    /**
     * Identification of the instructions on how specified item/carton/pallet should be
     * handled.
     *
     * @var string
     */
    public $handlingCode = null;
}
