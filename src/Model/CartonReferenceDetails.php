<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CartonReferenceDetails extends AbstractModel
{
    /**
     * Pallet level carton count is mandatory for single item pallet and optional for
     * mixed item pallet.
     *
     * @var int
     */
    public $cartonCount = null;

    /**
     * Array of reference numbers for the carton that are part of this pallet/shipment.
     * Please provide the cartonSequenceNumber from the 'cartons' segment to refer to
     * that carton's details here.
     *
     * @var string[]
     */
    public $cartonReferenceNumbers = null;
}
