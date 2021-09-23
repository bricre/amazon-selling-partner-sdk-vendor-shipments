<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the SubmitShipmentConfirmations operation.
 */
class SubmitShipmentConfirmationsRequest extends AbstractModel
{
    /**
     * @var \Amz\VendorShipments\Model\ShipmentConfirmation[]
     */
    public $shipmentConfirmations = null;
}
