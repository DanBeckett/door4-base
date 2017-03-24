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
class Twig_Node_Expression_Binary_FloorDiv extends Twig_Node_Expression_Binary
{
    public function compile(Twig_Compiler $compiler)
    {
<<<<<<< HEAD
        $compiler->raw('(int) floor(');
        parent::compile($compiler);
        $compiler->raw(')');
=======
        $compiler->raw('intval(floor(');
        parent::compile($compiler);
        $compiler->raw('))');
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    public function operator(Twig_Compiler $compiler)
    {
        return $compiler->raw('/');
    }
}
