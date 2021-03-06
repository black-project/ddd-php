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
 * Interface Repository
 *
 * Mediates between the domain and data mapping layers using a collection-like
 * interface for accessing domain objects.
 *
 * Your concrete implementation must be in Infrastructure layer in Persistence directory
 *
 * @see     http://martinfowler.com/eaaCatalog/repository.html
 */
interface Repository
{
    public function findAll();

    public function find(ValueObject $vo);

    public function add(Entity $entity);

    public function remove(Entity $entity);
}
