<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ShipmentConfirmation extends AbstractModel
{
    /**
     * Unique shipment ID (not used over the last 365 days).
     *
     * @var string
     */
    public $shipmentIdentifier = null;

    /**
     * Indicates if this shipment confirmation is the initial confirmation, or intended
     * to replace an already posted shipment confirmation. If replacing an existing
     * shipment confirmation, be sure to provide the identical shipmentIdentifier and
     * sellingParty information as in the previous confirmation.
     *
     * @var string
     */
    public $shipmentConfirmationType = null;

    /**
     * The type of shipment.
     *
     * @var string
     */
    public $shipmentType = null;

    /**
     * Shipment hierarchical structure.
     *
     * @var string
     */
    public $shipmentStructure = null;

    /**
     * Transportation details for this shipment.
     *
     * @var \Amz\VendorShipments\Model\TransportationDetails
     */
    public $transportationDetails = null;

    /**
     * The Amazon Reference Number is a unique identifier generated by Amazon for all
     * Collect/WePay shipments when you submit  a routing request. This field is
     * mandatory for Collect/WePay shipments.
     *
     * @var string
     */
    public $amazonReferenceNumber = null;

    /**
     * Date on which the shipment confirmation was submitted.
     *
     * @var string
     */
    public $shipmentConfirmationDate = null;

    /**
     * The date and time of the departure of the shipment from the vendor's location.
     * Vendors are requested to send ASNs within 30 minutes of departure from their
     * warehouse/distribution center or at least 6 hours prior to the appointment time
     * at the Amazon destination warehouse, whichever is sooner. Shipped date mentioned
     * in the shipment confirmation should not be in the future.
     *
     * @var string
     */
    public $shippedDate = null;

    /**
     * The date and time on which the shipment is expected to reach buyer's warehouse.
     * It needs to be an estimate based on the average transit time between ship from
     * location and the destination. The exact appointment time will be provided by the
     * buyer and is potentially not known when creating the shipment confirmation.
     *
     * @var string
     */
    public $estimatedDeliveryDate = null;

    /**
     * Name/Address and tax details of the selling party.
     *
     * @var \Amz\VendorShipments\Model\PartyIdentification
     */
    public $sellingParty = null;

    /**
     * Name/Address and tax details of the ship from party.
     *
     * @var \Amz\VendorShipments\Model\PartyIdentification
     */
    public $shipFromParty = null;

    /**
     * Name/Address of the destination warehouse where the shipment is being shipped
     * to.
     *
     * @var \Amz\VendorShipments\Model\PartyIdentification
     */
    public $shipToParty = null;

    /**
     * @var \Amz\VendorShipments\Model\ShipmentMeasurements
     */
    public $shipmentMeasurements = null;

    /**
     * Provide these fields only if this shipment is a direct import.
     *
     * @var \Amz\VendorShipments\Model\ImportDetails
     */
    public $importDetails = null;

    /**
     * A list of the items in this shipment and their associated details. If any of the
     * item detail fields are common at a carton or a pallet level, provide them at the
     * corresponding carton or pallet level.
     *
     * @var \Amz\VendorShipments\Model\Item[]
     */
    public $shippedItems = null;

    /**
     * A list of the cartons in this shipment.
     *
     * @var \Amz\VendorShipments\Model\Carton[]
     */
    public $cartons = null;

    /**
     * A list of the pallets in this shipment.
     *
     * @var \Amz\VendorShipments\Model\Pallet[]
     */
    public $pallets = null;
}
