<?php

namespace Amz\VendorShipments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class PartyIdentification extends AbstractModel
{
    /**
     * Identification of the party by address.
     *
     * @var \Amz\VendorShipments\Model\Address
     */
    public $address = null;

    /**
     * Assigned identification for the party.
     *
     * @var string
     */
    public $partyId = null;

    /**
     * Tax registration details of the entity.
     *
     * @var \Amz\VendorShipments\Model\TaxRegistrationDetails[]
     */
    public $taxRegistrationDetails = null;
}
