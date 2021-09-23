<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This is used only for direct import shipment confirmations.
 */
class Route extends AbstractModel
{
    /**
     * @var \Amz\VendorShipments\Model\Stop[]
     */
    public $stops = null;
}
