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
 * BringApi ApiEntityInterface
 *
 * An Interface for Entity classes to implement
 *
 * Quick setup: <code>class ReportsEntity extends ApiEntityBase implements ApiEntityInterface {}</code>
 *
 * @author Martin Madsen <crakter@gmail.com>
 */
interface ApiEntityInterface
{
    /**
     * Set Required Parameters
     * @param  array              $parameters
     * @return ApiEntityInterface
     */
    public function setRequiredParameters(array $parameters): ApiEntityInterface;
    public function toArray(): array;
}
