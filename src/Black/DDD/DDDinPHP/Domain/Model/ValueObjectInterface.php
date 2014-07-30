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
 * Interface ValueObjectInterface
 *
 * @author  Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
interface ValueObjectInterface
{
    /**
     * Return the value of the ValueObject. The value *MUST* be immutable
     *
     * @return mixed
     */
    public function getValue();
} 
