<?php

/*
 * This file is part of the BringApi package.
 *
 * (c) Martin Madsen <crakter@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crakter\nShift\Entity;

/**
 * BringApi TrackingEntity
 *
 * An class to supply correct information to Bring Api servers
 *
 * Quick setup: <code>$reports = (new TrackingEntity)
 *                     ->setQ('7071737171');</code>
 *
 * @property string $q                This should be either trackingnumber or Reference number
 * @property string $callback         This can be a JSONP callback
 * @method ApiEntityInterface setCallback(string $string)
 * @method string getCallback()
 * @method ApiEntityInterface setQ(string $string)
 * @method string getQ()
 * @author Martin Madsen <crakter@gmail.com>
 */
class Tracking extends ApiEntityBase implements ApiEntityInterface
{
    public $query;
    public $startDate;
    public $endDate;
    public $pageSize;
    public $pageIndex;
    public $installationTags;
    public $actorTags;
    public $carrierTags;
}
