<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex type defines the request body for <b>createShippingQuote</b>.
 * Sellers <i>request a quote</i> for a shipment by defining the "To" and "From"
 * addresses for the package, plus the package's size.  <br><br>Carriers respond by
 * offering up a "rate" for the service of theirs that best fits seller's needs.
 */
class ShippingQuoteRequest extends AbstractModel
{
    /**
     * A seller-defined list that contains information about the orders in the package.
     * This allows sellers to include information about the line items in the package
     * with the shipment information.  <br><br>A package can contain any number of line
     * items from one or more orders, providing they all ship in the same package.
     * <br><br><b>Maximum list size:</b> 10.
     *
     * @var \Ebay\Sell\Logistics\Model\Order[]
     */
    public $orders = null;

    /**
     * Declares the weight and dimensions of the package.
     *
     * @var \Ebay\Sell\Logistics\Model\PackageSpecification
     */
    public $packageSpecification = null;

    /**
     * The address and contact details pertaining to the origin of the shipment.
     *
     * @var \Ebay\Sell\Logistics\Model\Contact
     */
    public $shipFrom = null;

    /**
     * The address and contact details pertaining to the shipment's destination.
     * <!--<br><br>If you are using eBay's Global Shipping Program (GSP) to ship
     * internationally, supply the address to -->.
     *
     * @var \Ebay\Sell\Logistics\Model\Contact
     */
    public $shipTo = null;
}
