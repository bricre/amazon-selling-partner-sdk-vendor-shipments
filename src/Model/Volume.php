<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The volume of the container.
 */
class Volume extends AbstractModel
{
    /**
     * The unit of measurement.
     *
     * @var string
     */
    public $unitOfMeasure = null;

    /**
     * The measurement value.
     *
     * @var \Amz\VendorShipments\Model\Decimal
     */
    public $value = null;
}
