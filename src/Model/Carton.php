<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of the carton/package being shipped.
 */
class Carton extends AbstractModel
{
    /**
     * A list of carton identifiers.
     *
     * @var \Amz\VendorShipments\Model\ContainerIdentification[]
     */
    public $cartonIdentifiers = null;

    /**
     * Carton sequence number for the carton. The first carton will be 001, the second
     * 002, and so on. This number is used as a reference to refer to this carton from
     * the pallet level.
     *
     * @var string
     */
    public $cartonSequenceNumber = null;

    /**
     * @var \Amz\VendorShipments\Model\Dimensions
     */
    public $dimensions = null;

    /**
     * @var \Amz\VendorShipments\Model\Weight
     */
    public $weight = null;

    /**
     * This is required to be provided for every carton in the small parcel shipments.
     *
     * @var string
     */
    public $trackingNumber = null;

    /**
     * A list of container item details.
     *
     * @var \Amz\VendorShipments\Model\ContainerItem[]
     */
    public $items = null;
}
