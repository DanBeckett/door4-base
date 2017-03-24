<?php

/*
 * This file is part of Twig.
 *
<<<<<<< HEAD
 * (c) Fabien Potencier
=======
 * (c) 2010 Fabien Potencier
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Represents a node in the AST.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 3.0)
 */
interface Twig_NodeInterface extends Countable, IteratorAggregate
{
    /**
     * Compiles the node to PHP.
<<<<<<< HEAD
     */
    public function compile(Twig_Compiler $compiler);

    /**
     * @deprecated since 1.27 (to be removed in 2.0)
     */
=======
     *
     * @param Twig_Compiler $compiler A Twig_Compiler instance
     */
    public function compile(Twig_Compiler $compiler);

>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    public function getLine();

    public function getNodeTag();
}
