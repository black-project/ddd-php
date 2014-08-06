<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\DDD\DDDinPHP\Infrastructure\CQRS;

/**
 * Interface CommandBusInterface
 *
 * The responsibility of the Command Dispatcher object is to hook right Command Handler object based
 * on the command object we have submitted to the Command Dispatcher object.
 *
 * @see     http://weblogs.asp.net/shijuvarghese/cqrs-commands-command-handlers-and-command-dispatcher
 *
 * @author  Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
interface CommandBusInterface
{
    public function handle($command);
} 
