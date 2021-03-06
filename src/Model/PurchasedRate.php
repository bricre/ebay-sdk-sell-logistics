<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The "rate" that has been selected and purchased for the shipment, as referenced
 * by the <b>rateId</b> value.
 */
class PurchasedRate extends AbstractModel
{
    /**
     * An list of additional, optional features that have been purchased for the
     * shipment.
     *
     * @var \Ebay\Sell\Logistics\Model\AdditionalOption[]
     */
    public $additionalOptions = null;

    /**
     * The amount of the "base cost" for the shipment as set by the given carrier for
     * the specified service. This cost excludes any addition costs accrued from the
     * addition of any optional shipping options.
     *
     * @var \Ebay\Sell\Logistics\Model\Amount
     */
    public $baseShippingCost = null;

    /**
     * The time zone of the destination according to <a
     * href="https://www.iana.org/time-zones" target="_blank">Time Zone Database</a>.
     * For example, "America/Los_Angeles".
     *
     * @var string
     */
    public $destinationTimeZone = null;

    /**
     * A string value representing maximum (latest) estimated delivery time, formatted
     * as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html"
     * title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based
     * on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b>
     * <code>[YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[SSS]Z</code> <br><b>Example:</b>
     * <code>2018-08-20T07:09:00.000Z</code>.
     *
     * @var string
     */
    public $maxEstimatedDeliveryDate = null;

    /**
     * A string value representing minimum (earliest) estimated delivery time,
     * formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html"
     * title="https://www.iso.org" target="_blank">ISO 8601</a>ISO 8601</a> UTC string.
     *
     * @var string
     */
    public $minEstimatedDeliveryDate = null;

    /**
     * A list of pickup networks compatible with the shipping service.
     *
     * @var string[]
     */
    public $pickupNetworks = null;

    /**
     * This unique eBay-assigned ID value is returned only if the shipment has been
     * configured for a scheduled pickup.
     *
     * @var string
     */
    public $pickupSlotId = null;

    /**
     * The type of pickup or drop off configured for the shipment. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/logistics/types/api:PickupTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $pickupType = null;

    /**
     * The eBay-generated ID of the shipping rate that the seller has chosen to
     * purchase for the shipment.
     *
     * @var string
     */
    public $rateId = null;

    /**
     * The ID code for the carrier that was selected for the package shipment.
     *
     * @var string
     */
    public $shippingCarrierCode = null;

    /**
     * The name of the shipping carrier.
     *
     * @var string
     */
    public $shippingCarrierName = null;

    /**
     * The unique eBay-generated ID of the <i>shipping quote</i> from which the seller
     * selected a shipping rate (<b>rateId</b>).
     *
     * @var string
     */
    public $shippingQuoteId = null;

    /**
     * String ID code for the shipping service selected for the package shipment. This
     * is a service that the shipping carrier supplies.
     *
     * @var string
     */
    public $shippingServiceCode = null;

    /**
     * The name of the shipping service.
     *
     * @var string
     */
    public $shippingServiceName = null;

    /**
     * The total shipping cost, which is the sum cost of the base shipping cost and the
     * cost of all the selected shipping options.
     *
     * @var \Ebay\Sell\Logistics\Model\Amount
     */
    public $totalShippingCost = null;
}
