<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of item quantity.
 */
class ItemQuantity extends AbstractModel
{
    /**
     * Amount of units shipped for a specific item at a shipment level. If the item is
     * present only in certain cartons or pallets within the shipment, please provide
     * this at the appropriate carton or pallet level.
     *
     * @var int
     */
    public $amount = null;

    /**
     * Unit of measure for the shipped quantity.
     *
     * @var string
     */
    public $unitOfMeasure = null;

    /**
     * The case size, in the event that we ordered using cases. Otherwise, 1.
     *
     * @var int
     */
    public $unitSize = null;
}
