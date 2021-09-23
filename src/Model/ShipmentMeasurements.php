<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Shipment measurement details.
 */
class ShipmentMeasurements extends AbstractModel
{
    /**
     * Gross weight of the shipment.
     *
     * @var \Amz\VendorShipments\Model\Weight
     */
    public $grossShipmentWeight = null;

    /**
     * Volume of the shipment.
     *
     * @var \Amz\VendorShipments\Model\Volume
     */
    public $shipmentVolume = null;

    /**
     * Number of cartons present in the shipment. Provide the cartonCount only for
     * unpalletized shipments.
     *
     * @var int
     */
    public $cartonCount = null;

    /**
     * Number of pallets present in the shipment. Provide the palletCount only for
     * palletized shipments.
     *
     * @var int
     */
    public $palletCount = null;
}
