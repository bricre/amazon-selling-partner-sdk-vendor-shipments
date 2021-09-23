<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ImportDetails extends AbstractModel
{
    /**
     * This is used for import purchase orders only. If the recipient requests, this
     * field will contain the shipment method of payment.
     *
     * @var string
     */
    public $methodOfPayment = null;

    /**
     * The container's seal number.
     *
     * @var string
     */
    public $sealNumber = null;

    /**
     * The route and stop details for this shipment.
     *
     * @var \Amz\VendorShipments\Model\Route
     */
    public $route = null;

    /**
     * Types and numbers of container(s) for import purchase orders. Can be a
     * comma-separated list if shipment has multiple containers.
     *
     * @var string
     */
    public $importContainers = null;

    /**
     * Billable weight of the direct imports shipment.
     *
     * @var \Amz\VendorShipments\Model\Weight
     */
    public $billableWeight = null;

    /**
     * Date on which the shipment is expected to be shipped. This value should not be
     * in the past and not more than 60 days out in the future.
     *
     * @var string
     */
    public $estimatedShipByDate = null;
}
