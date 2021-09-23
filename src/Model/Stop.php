<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Contractual or operational port or point relevant to the movement of the cargo.
 */
class Stop extends AbstractModel
{
    /**
     * Provide the function code.
     *
     * @var string
     */
    public $functionCode = null;

    /**
     * @var \Amz\VendorShipments\Model\Location
     */
    public $locationIdentification = null;

    /**
     * Date and time of the arrival of the cargo.
     *
     * @var string
     */
    public $arrivalTime = null;

    /**
     * Date and time of the departure of the cargo.
     *
     * @var string
     */
    public $departureTime = null;
}
