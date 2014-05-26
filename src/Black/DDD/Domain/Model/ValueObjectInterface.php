<?php

namespace Black\DDD\Domain\Model;

/*
 * This file is part of the DDD-PHP package.
 *
 * (c) Alexandre Balmes <albalmes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Interface ValueObjectInterface
 *
 * @package Black\DDD\Domain\Model
 */
interface ValueObjectInterface
{
    /**
     * Return the value of the ValueObject.
     * The value *MUST* be immutable
     *
     * @return mixed
     */
    public function getValue();
} 
