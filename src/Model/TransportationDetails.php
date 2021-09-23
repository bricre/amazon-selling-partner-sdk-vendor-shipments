<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class TransportationDetails extends AbstractModel
{
    /**
     * Code that identifies the carrier for the shipment. The Standard Carrier Alpha
     * Code (SCAC) is a unique two to four letter code used to identify a carrier.
     * Carrier SCAC codes are assigned and maintained by the NMFTA (National Motor
     * Freight Association). This field is mandatory for US, CA, MX shipment
     * confirmations.
     *
     * @var string
     */
    public $carrierScac = null;

    /**
     * The field also known as PRO number is a unique number assigned by the carrier.
     * It is used to identify and track the shipment that goes out for delivery. This
     * field is mandatory for UA, CA, MX shipment confirmations.
     *
     * @var string
     */
    public $carrierShipmentReferenceNumber = null;

    /**
     * The mode of transportation for this shipment.
     *
     * @var string
     */
    public $transportationMode = null;

    /**
     * Bill Of Lading (BOL) number is the unique number assigned by the vendor. The BOL
     * present in the Shipment Confirmation message ideally matches the paper BOL
     * provided with the shipment, but that is no must. Instead of BOL, an alternative
     * reference number (like Delivery Note Number) for the shipment can also be sent
     * in this field.
     *
     * @var string
     */
    public $billOfLadingNumber = null;
}
