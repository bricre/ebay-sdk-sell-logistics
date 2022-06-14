<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex type contains live quote information about a shipping service
 * that's available for a given shipping quote request, including the shipping
 * carrier and service, delivery window, shipping cost, and additional shipping
 * options.
 */
class Rate extends AbstractModel
{
    /**
     * Contains service and pricing information for one or more shipping options that
     * are offered by the carrier and can be purchased in addition to the base shipping
     * service provided by this rate. Shipping options can include items such as
     * <code>INSURANCE</code> and <code>SIGNATURE</code>.
     *
     * @var \Ebay\Sell\Logistics\Model\AdditionalOption[]
     */
    public $additionalOptions = null;

    /**
     * A live quote for the cost that the carrier (identified by
     * <b>shippingCarrierCode</b>) is charging for the shipping service being offered
     * (identified by <b>shippingServiceCode</b>), excluding any additional shipping
     * options.
     *
     * @var \Ebay\Sell\Logistics\Model\Amount
     */
    public $baseShippingCost = null;

    /**
     * The name of the time zone region, as defined in the <a
     * href="http://www.iana.org/time-zones"  target="_blank">IANA Time Zone
     * Database</a>, to which the package is being shipped.  <br><br>Delivery dates are
     * calculated relative to this time zone.  <br><br><span
     * class="tablenote"><strong>Note:</strong> This is different from a Coordinated
     * Universal Time (UTC) offset. For example, the <i>America/Los_Angeles</i> time
     * zone identifies a region with the UTC standard time offset of
     * <code>-08:00</code>, but so do several other time zones, including
     * <i>America/Tijuana</i>,<i>America/Dawson</i>, and
     * <i>Pacific/Pitcairn</i>.</span>.
     *
     * @var string
     */
    public $destinationTimeZone = null;

    /**
     * The latest stated date and time the shipment will be delivered at this rate.
     * <br><br>The time stamp is formatted as an <a
     * href="https://www.iso.org/iso-8601-date-and-time-format.html"
     * title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based
     * on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b>
     * <code>[YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[SSS]Z</code> <br><b>Example:</b>
     * <code>2018-08-20T07:09:00.000Z</code>.
     *
     * @var string
     */
    public $maxEstimatedDeliveryDate = null;

    /**
     * The estimated earliest date and time the shipment will be delivered at this
     * rate. The time stamp is formatted as an ISO 8601 UTC string.
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
     * A list of available pickup slots for the package.
     *
     * @var \Ebay\Sell\Logistics\Model\PickupSlot[]
     */
    public $pickupSlots = null;

    /**
     * The type of pickup or drop-off service associated with the <b>pickupSlots</b>
     * time frames. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/logistics/types/api:PickupTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $pickupType = null;

    /**
     * The unique eBay-assigned ID for this shipping rate.
     *
     * @var string
     */
    public $rateId = null;

    /**
     * A list of reasons this rate is recommended. Available values are: <ul>
     * <li><code>BUYER_CHOSEN</code> &mdash; The rate meets or exceeds the requirements
     * of the buyer's preferred shipping option.</li> <li><code>CHEAPEST_ON_TIME</code>
     * &mdash; The rate is the cheapest rate available that will provide delivery
     * within the seller's time frame commitment.</li>  <li><code>EBAY_PLUS_OK</code>
     * &mdash; The rate complies with the shipping requirements of the eBay Plus
     * program.</li> <li><code>FASTEST_ON_TIME</code> &mdash; The rate has the fastest
     * shipping time, and will provide delivery within the seller's time frame
     * commitment.</li> <li><code>GUARANTEED_DELIVERY_OK</code> &mdash; The rate
     * complies with the shipping requirements of the eBay Guaranteed Delivery
     * program.</li></ul>.
     *
     * @var string[]|
     */
    public $rateRecommendation = null;

    /**
     * The code name of the shipping carrier who will provide the service identified by
     * <b>shippingServiceCode</b>.
     *
     * @var string
     */
    public $shippingCarrierCode = null;

    /**
     * The common name of the shipping carrier.
     *
     * @var string
     */
    public $shippingCarrierName = null;

    /**
     * The code name of the shipping service to be provided by the carrier identified
     * by <b>shippingCarrierCode</b>.
     *
     * @var string
     */
    public $shippingServiceCode = null;

    /**
     * The common name of the shipping service.
     *
     * @var string
     */
    public $shippingServiceName = null;
}
