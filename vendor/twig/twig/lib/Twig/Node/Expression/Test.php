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
class Twig_Node_Expression_Test extends Twig_Node_Expression_Call
{
    public function __construct(Twig_NodeInterface $node, $name, Twig_NodeInterface $arguments = null, $lineno)
    {
<<<<<<< HEAD
        $nodes = array('node' => $node);
        if (null !== $arguments) {
            $nodes['arguments'] = $arguments;
        }

        parent::__construct($nodes, array('name' => $name), $lineno);
=======
        parent::__construct(array('node' => $node, 'arguments' => $arguments), array('name' => $name), $lineno);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    public function compile(Twig_Compiler $compiler)
    {
        $name = $this->getAttribute('name');
        $test = $compiler->getEnvironment()->getTest($name);

        $this->setAttribute('name', $name);
        $this->setAttribute('type', 'test');
        $this->setAttribute('thing', $test);
        if ($test instanceof Twig_TestCallableInterface || $test instanceof Twig_SimpleTest) {
            $this->setAttribute('callable', $test->getCallable());
        }
        if ($test instanceof Twig_SimpleTest) {
            $this->setAttribute('is_variadic', $test->isVariadic());
        }

        $this->compileCallable($compiler);
    }
}
