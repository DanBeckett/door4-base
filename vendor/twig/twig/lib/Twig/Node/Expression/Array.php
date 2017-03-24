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
class Twig_Node_Expression_Array extends Twig_Node_Expression
{
    protected $index;

    public function __construct(array $elements, $lineno)
    {
        parent::__construct($elements, array(), $lineno);

        $this->index = -1;
        foreach ($this->getKeyValuePairs() as $pair) {
            if ($pair['key'] instanceof Twig_Node_Expression_Constant && ctype_digit((string) $pair['key']->getAttribute('value')) && $pair['key']->getAttribute('value') > $this->index) {
                $this->index = $pair['key']->getAttribute('value');
            }
        }
    }

    public function getKeyValuePairs()
    {
        $pairs = array();

        foreach (array_chunk($this->nodes, 2) as $pair) {
            $pairs[] = array(
                'key' => $pair[0],
                'value' => $pair[1],
            );
        }

        return $pairs;
    }

    public function hasElement(Twig_Node_Expression $key)
    {
        foreach ($this->getKeyValuePairs() as $pair) {
            // we compare the string representation of the keys
            // to avoid comparing the line numbers which are not relevant here.
<<<<<<< HEAD
            if ((string) $key === (string) $pair['key']) {
=======
            if ((string) $key == (string) $pair['key']) {
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
                return true;
            }
        }

        return false;
    }

    public function addElement(Twig_Node_Expression $value, Twig_Node_Expression $key = null)
    {
        if (null === $key) {
<<<<<<< HEAD
            $key = new Twig_Node_Expression_Constant(++$this->index, $value->getTemplateLine());
=======
            $key = new Twig_Node_Expression_Constant(++$this->index, $value->getLine());
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        }

        array_push($this->nodes, $key, $value);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler->raw('array(');
        $first = true;
        foreach ($this->getKeyValuePairs() as $pair) {
            if (!$first) {
                $compiler->raw(', ');
            }
            $first = false;

            $compiler
                ->subcompile($pair['key'])
                ->raw(' => ')
                ->subcompile($pair['value'])
            ;
        }
        $compiler->raw(')');
    }
}
