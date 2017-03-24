<?php

/*
 * This file is part of Twig.
 *
<<<<<<< HEAD
 * (c) Fabien Potencier
 * (c) Armin Ronacher
=======
 * (c) 2009 Fabien Potencier
 * (c) 2009 Armin Ronacher
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Represents an if node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_If extends Twig_Node
{
    public function __construct(Twig_NodeInterface $tests, Twig_NodeInterface $else = null, $lineno, $tag = null)
    {
<<<<<<< HEAD
        $nodes = array('tests' => $tests);
        if (null !== $else) {
            $nodes['else'] = $else;
        }

        parent::__construct($nodes, array(), $lineno, $tag);
=======
        parent::__construct(array('tests' => $tests, 'else' => $else), array(), $lineno, $tag);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler->addDebugInfo($this);
        for ($i = 0, $count = count($this->getNode('tests')); $i < $count; $i += 2) {
            if ($i > 0) {
                $compiler
                    ->outdent()
                    ->write('} elseif (')
                ;
            } else {
                $compiler
                    ->write('if (')
                ;
            }

            $compiler
                ->subcompile($this->getNode('tests')->getNode($i))
                ->raw(") {\n")
                ->indent()
                ->subcompile($this->getNode('tests')->getNode($i + 1))
            ;
        }

<<<<<<< HEAD
        if ($this->hasNode('else')) {
=======
        if ($this->hasNode('else') && null !== $this->getNode('else')) {
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            $compiler
                ->outdent()
                ->write("} else {\n")
                ->indent()
                ->subcompile($this->getNode('else'))
            ;
        }

        $compiler
            ->outdent()
            ->write("}\n");
    }
}
