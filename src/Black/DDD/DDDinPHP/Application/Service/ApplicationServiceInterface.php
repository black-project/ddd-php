<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\DDD\DDDinPHP\Application\Service;

/**
 * Interface ApplicationServiceInterface
 *
 * Application Services are the interface used by the outside world, where the outside world can’t communicate via our
 * Entity objects, but may have other representations of them.  Application Services could map outside messages to
 * internal operations and processes, communicating with services in the Domain and Infrastructure layers to provide
 * cohesive operations for outside clients.
 *
 * @see     http://lostechies.com/jimmybogard/2008/08/21/services-in-domain-driven-design/
 *
 * @author  Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
interface ApplicationServiceInterface
{

} 
