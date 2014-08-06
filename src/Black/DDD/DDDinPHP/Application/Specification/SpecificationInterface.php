<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\DDD\DDDinPHP\Application\Specification;

/**
 * Interface SpecificationInterface
 *
 * A specification pattern outlines a business rule that is combinable with other business rules.
 * In this pattern, a unit of business logic inherits its functionality from the abstract aggregate
 * Composite Specification class. The Composite Specification class has one function called IsSatisfiedBy that returns a
 * boolean value. After instantiation, the specification is "chained" with other specifications,
 * making new specifications easily maintainable, yet highly customizable business logic.
 * Furthermore upon instantiation the business logic may, through method invocation or inversion of control,
 * have its state altered in order to become,a delegate of other classes such as a persistence repository.
 *
 * @see     http://en.wikipedia.org/wiki/Specification_pattern
 *
 * @author  Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
interface SpecificationInterface
{

} 
