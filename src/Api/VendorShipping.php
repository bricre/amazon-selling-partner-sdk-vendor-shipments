<?php

namespace Amz\VendorShipments\Api;

use Amz\VendorShipments\Model\SubmitShipmentConfirmationsRequest as SubmitShipmentConfirmationsRequest;
use Amz\VendorShipments\Model\SubmitShipmentConfirmationsResponse as SubmitShipmentConfirmationsResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class VendorShipping extends AbstractAPI
{
    /**
     * Submits one or more shipment confirmations for vendor orders.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param SubmitShipmentConfirmationsRequest $Model Submits one or more shipment
     *                                                  confirmations for vendor orders.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return SubmitShipmentConfirmationsResponse
     */
    public function SubmitShipmentConfirmations(SubmitShipmentConfirmationsRequest $Model): SubmitShipmentConfirmationsResponse
    {
        return $this->client->request('SubmitShipmentConfirmations', 'POST', 'vendor/shipping/v1/shipmentConfirmations',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
