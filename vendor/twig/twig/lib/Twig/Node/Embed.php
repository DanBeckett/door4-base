<?php

/*
 * This file is part of Twig.
 *
<<<<<<< HEAD
 * (c) Fabien Potencier
=======
 * (c) 2012 Fabien Potencier
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Represents an embed node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Embed extends Twig_Node_Include
{
    // we don't inject the module to avoid node visitors to traverse it twice (as it will be already visited in the main module)
<<<<<<< HEAD
    public function __construct($name, $index, Twig_Node_Expression $variables = null, $only = false, $ignoreMissing = false, $lineno, $tag = null)
    {
        parent::__construct(new Twig_Node_Expression_Constant('not_used', $lineno), $variables, $only, $ignoreMissing, $lineno, $tag);

        $this->setAttribute('name', $name);
        // to be removed in 2.0, used name instead
        $this->setAttribute('filename', $name);
=======
    public function __construct($filename, $index, Twig_Node_Expression $variables = null, $only = false, $ignoreMissing = false, $lineno, $tag = null)
    {
        parent::__construct(new Twig_Node_Expression_Constant('not_used', $lineno), $variables, $only, $ignoreMissing, $lineno, $tag);

        $this->setAttribute('filename', $filename);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        $this->setAttribute('index', $index);
    }

    protected function addGetTemplate(Twig_Compiler $compiler)
    {
        $compiler
            ->write('$this->loadTemplate(')
<<<<<<< HEAD
            ->string($this->getAttribute('name'))
            ->raw(', ')
            ->repr($this->getTemplateName())
            ->raw(', ')
            ->repr($this->getTemplateLine())
=======
            ->string($this->getAttribute('filename'))
            ->raw(', ')
            ->repr($compiler->getFilename())
            ->raw(', ')
            ->repr($this->getLine())
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            ->raw(', ')
            ->string($this->getAttribute('index'))
            ->raw(')')
        ;
    }
}
