<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Duration extends AbstractModel
{
    /**
     * Unit for duration.
     *
     * @var string
     */
    public $durationUnit = null;

    /**
     * Value for the duration in terms of the durationUnit.
     *
     * @var int
     */
    public $durationValue = null;
}
