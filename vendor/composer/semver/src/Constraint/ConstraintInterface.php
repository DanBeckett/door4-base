<?php

/*
 * This file is part of composer/semver.
 *
 * (c) Composer <https://github.com/composer>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Composer\Semver\Constraint;

interface ConstraintInterface
{
    /**
     * @param ConstraintInterface $provider
     *
     * @return bool
     */
    public function matches(ConstraintInterface $provider);

    /**
<<<<<<< HEAD
=======
     * @param string $prettyString
     */
    public function setPrettyString($prettyString);

    /**
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     * @return string
     */
    public function getPrettyString();

    /**
     * @return string
     */
    public function __toString();
}
