<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the SubmitShipmentConfirmations operation.
 */
class SubmitShipmentConfirmationsResponse extends AbstractModel
{
    /**
     * The response payload for the SubmitShipmentConfirmations operation.
     *
     * @var \Amz\VendorShipments\Model\TransactionReference
     */
    public $payload = null;

    /**
     * @var \Amz\VendorShipments\Model\ErrorList
     */
    public $errors = null;
}
