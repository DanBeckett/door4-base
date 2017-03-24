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
 * Represents an include node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Include extends Twig_Node implements Twig_NodeOutputInterface
{
    public function __construct(Twig_Node_Expression $expr, Twig_Node_Expression $variables = null, $only = false, $ignoreMissing = false, $lineno, $tag = null)
    {
<<<<<<< HEAD
        $nodes = array('expr' => $expr);
        if (null !== $variables) {
            $nodes['variables'] = $variables;
        }

        parent::__construct($nodes, array('only' => (bool) $only, 'ignore_missing' => (bool) $ignoreMissing), $lineno, $tag);
=======
        parent::__construct(array('expr' => $expr, 'variables' => $variables), array('only' => (bool) $only, 'ignore_missing' => (bool) $ignoreMissing), $lineno, $tag);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler->addDebugInfo($this);

        if ($this->getAttribute('ignore_missing')) {
            $compiler
                ->write("try {\n")
                ->indent()
            ;
        }

        $this->addGetTemplate($compiler);

        $compiler->raw('->display(');

        $this->addTemplateArguments($compiler);

        $compiler->raw(");\n");

        if ($this->getAttribute('ignore_missing')) {
            $compiler
                ->outdent()
                ->write("} catch (Twig_Error_Loader \$e) {\n")
                ->indent()
                ->write("// ignore missing template\n")
                ->outdent()
                ->write("}\n\n")
            ;
        }
    }

    protected function addGetTemplate(Twig_Compiler $compiler)
    {
        $compiler
             ->write('$this->loadTemplate(')
             ->subcompile($this->getNode('expr'))
             ->raw(', ')
<<<<<<< HEAD
             ->repr($this->getTemplateName())
             ->raw(', ')
             ->repr($this->getTemplateLine())
=======
             ->repr($compiler->getFilename())
             ->raw(', ')
             ->repr($this->getLine())
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
             ->raw(')')
         ;
    }

    protected function addTemplateArguments(Twig_Compiler $compiler)
    {
<<<<<<< HEAD
        if (!$this->hasNode('variables')) {
=======
        if (null === $this->getNode('variables')) {
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            $compiler->raw(false === $this->getAttribute('only') ? '$context' : 'array()');
        } elseif (false === $this->getAttribute('only')) {
            $compiler
                ->raw('array_merge($context, ')
                ->subcompile($this->getNode('variables'))
                ->raw(')')
            ;
        } else {
            $compiler->subcompile($this->getNode('variables'));
        }
    }
}
