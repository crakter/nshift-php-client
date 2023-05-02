<?php

/*
 * This file is part of the BringApi package.
 *
 * (c) Martin Madsen <crakter@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crakter\nShift\Response;

use Crakter\nShift\SetGetCall;

class Tracking
{
    use SetGetCall;
    public $uuid;
    public $dateModified;
    public $shipmentType;
    public $shipmentTypeName;
    public $installationId;
    public $installation;
    public $locationName;
    public $actor;
    public $actorName;
    public $carrier;
    public $carrierName;
    public $product;
    public $productName;
    public $submitDate;
    public $pickupDate;
    public $isDeleted;
    public $height;
    public $length;
    public $width;
    public $dimensionalWeight;
    public $senderAccountAtCarrier;
    public $payerAccountAtCarrier;
    public $insuranceGroup;
    public $labelsCount;
    public $freightBillsCount;
    public $orderNumber;
    public $isAnonymized;
    public $externalBooked;
    public $addresses;
}