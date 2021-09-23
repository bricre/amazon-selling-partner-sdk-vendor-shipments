<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An amount of money, including units in the form of currency.
 */
class Money extends AbstractModel
{
    /**
     * Three digit currency code in ISO 4217 format.
     *
     * @var string
     */
    public $currencyCode = null;

    /**
     * @var \Amz\VendorShipments\Model\Decimal
     */
    public $amount = null;
}
