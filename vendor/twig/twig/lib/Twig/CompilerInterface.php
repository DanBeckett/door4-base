<?php

/*
 * This file is part of Twig.
 *
<<<<<<< HEAD
 * (c) Fabien Potencier
=======
 * (c) 2009 Fabien Potencier
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Interface implemented by compiler classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 3.0)
 */
interface Twig_CompilerInterface
{
    /**
     * Compiles a node.
     *
<<<<<<< HEAD
     * @return $this
=======
     * @param Twig_NodeInterface $node The node to compile
     *
     * @return Twig_CompilerInterface The current compiler instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function compile(Twig_NodeInterface $node);

    /**
     * Gets the current PHP code after compilation.
     *
     * @return string The PHP code
     */
    public function getSource();
}
