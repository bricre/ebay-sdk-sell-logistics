<?php

namespace Ebay\Sell\Logistics\Api;

use Ebay\Sell\Logistics\Model\CreateShipmentFromQuoteRequest;
use Ebay\Sell\Logistics\Model\Shipment as ShipmentModel;
use OpenAPI\Runtime\UnexpectedResponse;

class Shipment extends AbstractAPI
{
    /**
     * This method creates a "shipment" based on the <b>shippingQuoteId</b> and
     * <b>rateId</b> values supplied in the request. The rate identified by the
     * <b>rateId</b> value specifies the carrier and service for the package shipment,
     * and the rate ID must be contained in the shipping quote identified by the
     * <b>shippingQuoteId</b> value. Call <b>createShippingQuote</b> to retrieve a set
     * of live shipping rates.  <br><br>When you create a shipment, eBay generates a
     * shipping label that you can download and use to ship your package.  <br><br>In a
     * <b>createFromShippingQuote</b> request, sellers can include a list of shipping
     * options they want to add to the base service quoted in the selected rate. The
     * list of available shipping options is specific to each quoted rate and if
     * available, the options are listed in the rate container of the of the shipping
     * quote.  <br><br>In addition to a configurable return-to location and other
     * details about the shipment, the response to this method includes:  <ul><li>The
     * shipping carrier and service to be used for the package shipment</li> <li>A list
     * of selected shipping options, if any</li> <li>The shipment tracking number</li>
     * <li>The total shipping cost (the sum cost of the base shipping service and any
     * added options)</li></ul> When you create a shipment, your billing agreement
     * account is charged the sum of the <b>baseShippingCost</b> and the total cost of
     * any additional shipping options you might have selected. Use the URL returned in
     * <b>labelDownloadUrl</b> field, or call <b>downloadLabelFile</b> with the
     * <b>shipmentId</b> value from the response, to download a shipping label for your
     * package. <p class="tablenote"><b>Important!</b> Sellers must set up their
     * payment method with eBay before they can use this method to create a shipment
     * and the associated shipping label.</p>.
     *
     * @param CreateShipmentFromQuoteRequest $Model the create shipment from quote
     *                                              request
     *
     * @return ShipmentModel|UnexpectedResponse
     */
    public function createFromShippingQuote(CreateShipmentFromQuoteRequest $Model)
    {
        return $this->request(
        'createFromShippingQuote',
        'POST',
        'shipment/create_from_shipping_quote',
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method retrieves the shipment details for the specified shipment ID. Call
     * <b>createFromShippingQuote</b> to generate a shipment ID.
     *
     * @param string $shipmentId This path parameter specifies the unique eBay-assigned
     *                           ID of the shipment you want to retrieve. The <b>shipmentId</b> value is
     *                           generated and returned by a call to <b>createFromShippingQuote</b>.
     *
     * @return ShipmentModel|UnexpectedResponse
     */
    public function get(string $shipmentId)
    {
        return $this->request(
        'getShipment',
        'GET',
        "shipment/$shipmentId",
        null,
        [],
        []
        );
    }

    /**
     * This method returns the shipping label file that was generated for the
     * <b>shipmentId</b> value specified in the request. Call
     * <b>createFromShippingQuote</b> to generate a shipment ID.  <br><br>Use the
     * <code>Accept</code> HTTP header to specify the format of the returned file. The
     * default file format is a PDF file. <!-- Are other options available? -->.
     *
     * @param string $shipmentId This path parameter specifies the unique eBay-assigned
     *                           ID of the shipment associated with the shipping label you want to download. The
     *                           <b>shipmentId</b> value is generated and returned by a call to
     *                           <b>createFromShippingQuote</b>.
     *
     * @return UnexpectedResponse
     */
    public function downloadLabelFile(string $shipmentId): UnexpectedResponse
    {
        return $this->request(
        'downloadLabelFile',
        'GET',
        "shipment/$shipmentId/download_label_file",
        null,
        [],
        []
        );
    }

    /**
     * This method cancels the shipment associated with the specified shipment ID and
     * the associated shipping label is deleted. When you cancel a shipment, the
     * <b>totalShippingCost</b> of the canceled shipment is refunded to the account
     * established by the user's billing agreement.  <br><br>Note that you cannot
     * cancel a shipment if you have used the associated shipping label.
     *
     * @param string $shipmentId This path parameter specifies the unique eBay-assigned
     *                           ID of the shipment to be canceled. The <b>shipmentId</b> value is generated and
     *                           returned by a call to <b>createFromShippingQuote</b>.
     *
     * @return ShipmentModel|UnexpectedResponse
     */
    public function cancel(string $shipmentId)
    {
        return $this->request(
        'cancelShipment',
        'POST',
        "shipment/$shipmentId/cancel",
        null,
        [],
        []
        );
    }
}
