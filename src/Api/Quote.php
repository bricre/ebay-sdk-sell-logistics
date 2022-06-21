<?php

namespace Ebay\Sell\Logistics\Api;

use Ebay\Sell\Logistics\Model\ShippingQuote;
use Ebay\Sell\Logistics\Model\ShippingQuoteRequest;
use OpenAPI\Runtime\UnexpectedResponse;

class Quote extends AbstractAPI
{
    /**
     * The <b>createShippingQuote</b> method returns a <i>shipping quote </i> that
     * contains a list of live "rates."  <br><br>Each rate represents an offer made by
     * a shipping carrier for a specific service and each offer has a live quote for
     * the base service cost. Rates have a time window in which they are "live," and
     * rates expire when their purchase window ends. If offered by the carrier, rates
     * can include shipping options (and their associated prices), and users can add
     * any offered shipping option to the base service should they desire.  Also,
     * depending on the services required, rates can also include pickup and delivery
     * windows.  <br><br>Each rate is for a single package and is based on the
     * following information: <ul><li>The shipping origin</li> <li>The shipping
     * destination</li> <li>The package size (weight and dimensions)</li></ul>  Rates
     * are identified by a unique eBay-assigned <b>rateId</b> and rates are based on
     * price points, pickup and delivery time frames, and other user requirements.
     * Because each rate offered must be compliant with the eBay shipping program, all
     * rates reflect eBay-negotiated prices.  <br><br>The various rates returned in a
     * shipping quote offer the user a choice from which they can choose a shipping
     * service that best fits their needs. Select the rate for your shipment and using
     * the associated <b>rateId</b>, call <b>createFromShippingQuote</b> to create a
     * shipment and generate a shipping label that you can use to ship the package.
     *
     * @param ShippingQuoteRequest $Model   the request object for
     *                                      <b>createShippingQuote</b>
     * @param array                $headers options:
     *                                      'X-EBAY-C-MARKETPLACE-ID'	string	This header parameter specifies the eBay
     *                                      marketplace for the shipping quote that is being created. For a list of valid
     *                                      values, refer to the section <a
     *                                      href="/api-docs/static/rest-request-components.html#marketpl"
     *                                      target="_blank">Marketplace ID Values</a> in the <b>Using eBay RESTful APIs</b>
     *                                      guide.
     *
     * @return ShippingQuote|UnexpectedResponse
     */
    public function create(ShippingQuoteRequest $Model, array $headers = [])
    {
        return $this->request(
        'createShippingQuote',
        'POST',
        'shipping_quote',
        $Model->getArrayCopy(),
        [],
        $headers
        );
    }

    /**
     * This method retrieves the complete details of the shipping quote associated with
     * the specified <b>shippingQuoteId</b> value.  <br><br>A "shipping quote" pertains
     * to a single specific package and contains a set of shipping "rates" that quote
     * the cost to ship the package by different shipping carriers and services. The
     * quotes are based on the package's origin, destination, and size.  <br><br>Call
     * <b>createShippingQuote</b> to create a <b>shippingQuoteId</b>.
     *
     * @param string $shippingQuoteId This path parameter specifies the unique
     *                                eBay-assigned ID of the shipping quote you want to retrieve. The
     *                                <b>shippingQuoteId</b> value is generated and returned by a call to
     *                                <b>createShippingQuote</b>.
     *
     * @return ShippingQuote|UnexpectedResponse
     */
    public function get(string $shippingQuoteId)
    {
        return $this->request(
        'getShippingQuote',
        'GET',
        "shipping_quote/$shippingQuoteId",
        null,
        [],
        []
        );
    }
}
