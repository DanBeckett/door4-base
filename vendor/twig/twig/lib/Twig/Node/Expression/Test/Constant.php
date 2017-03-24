<?php

/*
 * This file is part of Twig.
 *
<<<<<<< HEAD
 * (c) Fabien Potencier
=======
 * (c) 2011 Fabien Potencier
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Checks if a variable is the exact same value as a constant.
 *
 * <pre>
 *  {% if post.status is constant('Post::PUBLISHED') %}
 *    the status attribute is exactly the same as Post::PUBLISHED
 *  {% endif %}
 * </pre>
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Expression_Test_Constant extends Twig_Node_Expression_Test
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('(')
            ->subcompile($this->getNode('node'))
            ->raw(' === constant(')
        ;

        if ($this->getNode('arguments')->hasNode(1)) {
            $compiler
                ->raw('get_class(')
                ->subcompile($this->getNode('arguments')->getNode(1))
                ->raw(')."::".')
            ;
        }

        $compiler
            ->subcompile($this->getNode('arguments')->getNode(0))
            ->raw('))')
        ;
    }
}
