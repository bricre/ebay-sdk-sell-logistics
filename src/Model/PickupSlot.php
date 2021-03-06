<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex type defines a time window for the pickup of a package.
 */
class PickupSlot extends AbstractModel
{
    /**
     * The date and time the pickup slot ends, formatted as an <a
     * href="https://www.iso.org/iso-8601-date-and-time-format.html"
     * title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based
     * on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b>
     * <code>[YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[SSS]Z</code> <br><b>Example:</b>
     * <code>2018-08-20T07:09:00.000Z</code>.
     *
     * @var string
     */
    public $pickupSlotEndTime = null;

    /**
     * Seller-defined name for the pickup slot. <!-- Max characters? -->.
     *
     * @var string
     */
    public $pickupSlotId = null;

    /**
     * The date and time the pickup slot begins, formatted as an <a
     * href="https://www.iso.org/iso-8601-date-and-time-format.html"
     * title="https://www.iso.org" target="_blank">ISO 8601</a> UTC string.
     *
     * @var string
     */
    public $pickupSlotStartTime = null;

    /**
     * The time zone of the pickup location, returned as <a
     * href="https://www.iana.org/time-zones" target="_blank">Time Zone Database</a> ID
     * (also know as an Olson time zone ID).
     *
     * @var string
     */
    public $pickupSlotTimeZone = null;
}
