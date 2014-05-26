<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\DDD\DDDinPHP\Infrastructure\Persistence;

/**
 * Interface RepositoryInterface
 *
 * @package Black\DDD\DDDinPHP\Infrastructure\Persistence
 */
interface RepositoryInterface
{
    public function findAll();
} 
