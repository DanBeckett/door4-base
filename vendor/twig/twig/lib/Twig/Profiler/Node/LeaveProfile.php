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
 * Represents a profile leave node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Profiler_Node_LeaveProfile extends Twig_Node
{
    public function __construct($varName)
    {
        parent::__construct(array(), array('var_name' => $varName));
    }

<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->write("\n")
            ->write(sprintf("\$%s->leave(\$%s);\n\n", $this->getAttribute('var_name'), $this->getAttribute('var_name').'_prof'))
        ;
    }
}
