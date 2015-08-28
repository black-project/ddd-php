<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\DDD\DDDinPHP\Domain\Event;

/**
 * Interface DomainEvent
 *
 * Domain events are similar to messaging-style eventing, with one key difference.
 * With true messaging and a service bus, a message is fired and handled to asynchronously.
 * With domain events, the response is synchronous.
 *
 * Using domain events is rather straight forward.
 *
 * @see     http://lostechies.com/jimmybogard/2010/04/08/strengthening-your-domain-domain-events/
 */
interface DomainEvent
{

}
