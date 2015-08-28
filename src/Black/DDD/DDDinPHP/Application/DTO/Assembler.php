<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\DDD\DDDinPHP\Application\DTO;

use Black\DDD\DDDinPHP\Domain\Model\Entity;

/**
 * Interface Assembler
 *
 * A DTO assembler is a special service to transform/reverse transform an Entity to a Data Transfer Object.
 * Use this (optional) and not pure-DDD service if you want to centralize the transformation of your Data Transfer
 * Object.
 */
interface Assembler
{
    /**
     * Transform an Entity to a Data Transfer Object
     *
     * @param  Entity $entity
     * @return mixed
     */
    public function transform(Entity $entity);

    /**
     * Transform a Data Transfer Object to an Entity
     *
     * @param  DTO   $dto
     * @return mixed
     */
    public function reverseTransform(DTO $dto);
}
