<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of the Pallet/Tare being shipped.
 */
class Pallet extends AbstractModel
{
    /**
     * A list of pallet identifiers.
     *
     * @var \Amz\VendorShipments\Model\ContainerIdentification[]
     */
    public $palletIdentifiers = null;

    /**
     * Number of layers per pallet.
     *
     * @var int
     */
    public $tier = null;

    /**
     * Number of cartons per layer on the pallet.
     *
     * @var int
     */
    public $block = null;

    /**
     * @var \Amz\VendorShipments\Model\Dimensions
     */
    public $dimensions = null;

    /**
     * @var \Amz\VendorShipments\Model\Weight
     */
    public $weight = null;

    /**
     * Carton reference details.
     *
     * @var \Amz\VendorShipments\Model\CartonReferenceDetails
     */
    public $cartonReferenceDetails = null;

    /**
     * A list of container item details.
     *
     * @var \Amz\VendorShipments\Model\ContainerItem[]
     */
    public $items = null;
}
