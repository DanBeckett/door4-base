<?php

/*
 * This file is part of Twig.
 *
<<<<<<< HEAD
 * (c) Fabien Potencier
=======
 * (c) 2015 Fabien Potencier
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Implements a no-cache strategy.
 *
<<<<<<< HEAD
 * @final
 *
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Cache_Null implements Twig_CacheInterface
{
<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    public function generateKey($name, $className)
    {
        return '';
    }

<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    public function write($key, $content)
    {
    }

<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    public function load($key)
    {
    }

<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    public function getTimestamp($key)
    {
        return 0;
    }
}
