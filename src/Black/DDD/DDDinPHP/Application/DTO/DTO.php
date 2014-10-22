<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\DDD\DDDinPHP\Application\DTO;

/**
 * Interface DTO
 *
 * Data transfer object (DTO) is an object that carries data between processes. The motivation for its use has to do
 * with the fact that communication between processes is usually done resorting to remote interfaces
 * (e.g. web services), where each call is an expensive operation.
 *
 * Because the majority of the cost of each call is related to the round-trip time between the client and the server,
 * one way of reducing the number of calls is to use an object (the DTO) that aggregates the data that would have
 * been transferred by the several calls, but that is served by one call only.
 *
 * @see     http://en.wikipedia.org/wiki/Data_transfer_object
 *
 * @author  Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
interface DTO extends \Serializable
{

}
