<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Twig_Node_Expression_NullCoalesce extends Twig_Node_Expression_Conditional
{
    public function __construct(Twig_NodeInterface $left, Twig_NodeInterface $right, $lineno)
    {
        $test = new Twig_Node_Expression_Binary_And(
<<<<<<< HEAD
            new Twig_Node_Expression_Test_Defined(clone $left, 'defined', new Twig_Node(), $left->getTemplateLine()),
            new Twig_Node_Expression_Unary_Not(new Twig_Node_Expression_Test_Null($left, 'null', new Twig_Node(), $left->getTemplateLine()), $left->getTemplateLine()),
            $left->getTemplateLine()
=======
            new Twig_Node_Expression_Test_Defined(clone $left, 'defined', new Twig_Node(), $left->getLine()),
            new Twig_Node_Expression_Unary_Not(new Twig_Node_Expression_Test_Null($left, 'null', new Twig_Node(), $left->getLine()), $left->getLine()),
            $left->getLine()
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        );

        parent::__construct($test, $left, $right, $lineno);
    }
<<<<<<< HEAD

    public function compile(Twig_Compiler $compiler)
    {
        /*
         * This optimizes only one case. PHP 7 also supports more complex expressions
         * that can return null. So, for instance, if log is defined, log("foo") ?? "..." works,
         * but log($a["foo"]) ?? "..." does not if $a["foo"] is not defined. More advanced
         * cases might be implemented as an optimizer node visitor, but has not been done
         * as benefits are probably not worth the added complexity.
         */
        if (PHP_VERSION_ID >= 70000 && $this->getNode('expr2') instanceof Twig_Node_Expression_Name) {
            $this->getNode('expr2')->setAttribute('always_defined', true);
            $compiler
                ->raw('((')
                ->subcompile($this->getNode('expr2'))
                ->raw(') ?? (')
                ->subcompile($this->getNode('expr3'))
                ->raw('))')
            ;
        } else {
            parent::compile($compiler);
        }
    }
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
}
