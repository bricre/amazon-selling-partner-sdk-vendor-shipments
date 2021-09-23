<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The weight.
 */
class Weight extends AbstractModel
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
