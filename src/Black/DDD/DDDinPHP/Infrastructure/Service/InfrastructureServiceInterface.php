<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\DDD\DDDinPHP\Infrastructure\Service;

/**
 * Interface InfrastructureServiceInterface
 *
 * These are services that typically talk to external resources and are not part of the primary problem domain.
 * The common examples that I see for this are emailing and logging. When trying to categorize an Infrastructure service,
 * I think you can ask yourself the following questions:
 *
 * If I remove this service, will it affect the execution of my domain model?
 * If I remove this service, will it affect the execution of my application?
 *
 * @see     http://www.bennadel.com/blog/2385-application-services-vs-infrastructure-services-vs-domain-services.htm
 *
 * @author  Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
interface InfrastructureServiceInterface
{

} 
