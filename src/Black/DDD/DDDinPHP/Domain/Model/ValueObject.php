<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\DDD\DDDinPHP\Domain\Model;

/**
 * Interface ValueObject
 *
 * Objects that matter only has the combination of their attributes.
 * Two value objects with the same values for all their attributes are considered equal.
 *
 * @see     http://martinfowler.com/bliki/EvansClassification.html
 */
interface ValueObject
{
    /**
     * Return the value of the ValueObject. The value *MUST* be immutable
     *
     * @return mixed
     */
    public function getValue();
}
