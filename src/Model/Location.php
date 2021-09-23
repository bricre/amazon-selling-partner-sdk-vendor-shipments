<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Location identifier.
 */
class Location extends AbstractModel
{
    /**
     * Type of location identification.
     *
     * @var string
     */
    public $type = null;

    /**
     * Location code.
     *
     * @var string
     */
    public $locationCode = null;

    /**
     * The two digit country code. In ISO 3166-1 alpha-2 format.
     *
     * @var string
     */
    public $countryCode = null;
}
