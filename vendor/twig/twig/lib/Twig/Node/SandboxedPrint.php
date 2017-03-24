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
 * Twig_Node_SandboxedPrint adds a check for the __toString() method
 * when the variable is an object and the sandbox is activated.
 *
 * When there is a simple Print statement, like {{ article }},
 * and if the sandbox is enabled, we need to check that the __toString()
 * method is allowed if 'article' is an object.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_SandboxedPrint extends Twig_Node_Print
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
<<<<<<< HEAD
            ->write('echo $this->env->getExtension(\'Twig_Extension_Sandbox\')->ensureToStringAllowed(')
=======
            ->write('echo $this->env->getExtension(\'sandbox\')->ensureToStringAllowed(')
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            ->subcompile($this->getNode('expr'))
            ->raw(");\n")
        ;
    }

    /**
     * Removes node filters.
     *
     * This is mostly needed when another visitor adds filters (like the escaper one).
     *
<<<<<<< HEAD
     * @return Twig_Node
     */
    protected function removeNodeFilter(Twig_Node $node)
=======
     * @param Twig_Node $node A Node
     *
     * @return Twig_Node
     */
    protected function removeNodeFilter($node)
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    {
        if ($node instanceof Twig_Node_Expression_Filter) {
            return $this->removeNodeFilter($node->getNode('node'));
        }

        return $node;
    }
}
