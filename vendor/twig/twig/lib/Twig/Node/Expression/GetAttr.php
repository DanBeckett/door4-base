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
class Twig_Node_Expression_GetAttr extends Twig_Node_Expression
{
    public function __construct(Twig_Node_Expression $node, Twig_Node_Expression $attribute, Twig_Node_Expression $arguments = null, $type, $lineno)
    {
<<<<<<< HEAD
        $nodes = array('node' => $node, 'attribute' => $attribute);
        if (null !== $arguments) {
            $nodes['arguments'] = $arguments;
        }

        parent::__construct($nodes, array('type' => $type, 'is_defined_test' => false, 'ignore_strict_check' => false, 'disable_c_ext' => false), $lineno);
=======
        parent::__construct(array('node' => $node, 'attribute' => $attribute, 'arguments' => $arguments), array('type' => $type, 'is_defined_test' => false, 'ignore_strict_check' => false, 'disable_c_ext' => false), $lineno);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    public function compile(Twig_Compiler $compiler)
    {
<<<<<<< HEAD
        if ($this->getAttribute('disable_c_ext')) {
            @trigger_error(sprintf('Using the "disable_c_ext" attribute on %s is deprecated since version 1.30 and will be removed in 2.0.', __CLASS__), E_USER_DEPRECATED);
        }

=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        if (function_exists('twig_template_get_attributes') && !$this->getAttribute('disable_c_ext')) {
            $compiler->raw('twig_template_get_attributes($this, ');
        } else {
            $compiler->raw('$this->getAttribute(');
        }

        if ($this->getAttribute('ignore_strict_check')) {
            $this->getNode('node')->setAttribute('ignore_strict_check', true);
        }

        $compiler->subcompile($this->getNode('node'));

        $compiler->raw(', ')->subcompile($this->getNode('attribute'));

        // only generate optional arguments when needed (to make generated code more readable)
        $needFourth = $this->getAttribute('ignore_strict_check');
        $needThird = $needFourth || $this->getAttribute('is_defined_test');
        $needSecond = $needThird || Twig_Template::ANY_CALL !== $this->getAttribute('type');
<<<<<<< HEAD
        $needFirst = $needSecond || $this->hasNode('arguments');

        if ($needFirst) {
            if ($this->hasNode('arguments')) {
=======
        $needFirst = $needSecond || null !== $this->getNode('arguments');

        if ($needFirst) {
            if (null !== $this->getNode('arguments')) {
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
                $compiler->raw(', ')->subcompile($this->getNode('arguments'));
            } else {
                $compiler->raw(', array()');
            }
        }

        if ($needSecond) {
            $compiler->raw(', ')->repr($this->getAttribute('type'));
        }

        if ($needThird) {
            $compiler->raw(', ')->repr($this->getAttribute('is_defined_test'));
        }

        if ($needFourth) {
            $compiler->raw(', ')->repr($this->getAttribute('ignore_strict_check'));
        }

        $compiler->raw(')');
    }
}
