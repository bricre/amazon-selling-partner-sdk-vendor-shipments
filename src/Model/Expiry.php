<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Expiry extends AbstractModel
{
    /**
     * Production, packaging or assembly date determined by the manufacturer. Its
     * meaning is determined based on the trade item context.
     *
     * @var string
     */
    public $manufacturerDate = null;

    /**
     * The date that determines the limit of consumption or use of a product. Its
     * meaning is determined based on the trade item context.
     *
     * @var string
     */
    public $expiryDate = null;

    /**
     * Duration after manufacturing date during which the product is valid for
     * consumption.
     *
     * @var \Amz\VendorShipments\Model\Duration
     */
    public $expiryAfterDuration = null;
}
