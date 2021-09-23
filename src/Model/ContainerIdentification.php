<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ContainerIdentification extends AbstractModel
{
    /**
     * The container identification type.
     *
     * @var string
     */
    public $containerIdentificationType = null;

    /**
     * Container identification number that adheres to the definition of the container
     * identification type.
     *
     * @var string
     */
    public $containerIdentificationNumber = null;
}
