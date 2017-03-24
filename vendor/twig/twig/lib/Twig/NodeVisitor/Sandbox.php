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

/**
 * Twig_NodeVisitor_Sandbox implements sandboxing.
 *
<<<<<<< HEAD
 * @final
 *
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_NodeVisitor_Sandbox extends Twig_BaseNodeVisitor
{
    protected $inAModule = false;
    protected $tags;
    protected $filters;
    protected $functions;

<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    protected function doEnterNode(Twig_Node $node, Twig_Environment $env)
    {
        if ($node instanceof Twig_Node_Module) {
            $this->inAModule = true;
            $this->tags = array();
            $this->filters = array();
            $this->functions = array();

            return $node;
        } elseif ($this->inAModule) {
            // look for tags
            if ($node->getNodeTag() && !isset($this->tags[$node->getNodeTag()])) {
                $this->tags[$node->getNodeTag()] = $node;
            }

            // look for filters
            if ($node instanceof Twig_Node_Expression_Filter && !isset($this->filters[$node->getNode('filter')->getAttribute('value')])) {
                $this->filters[$node->getNode('filter')->getAttribute('value')] = $node;
            }

            // look for functions
            if ($node instanceof Twig_Node_Expression_Function && !isset($this->functions[$node->getAttribute('name')])) {
                $this->functions[$node->getAttribute('name')] = $node;
            }

            // wrap print to check __toString() calls
            if ($node instanceof Twig_Node_Print) {
<<<<<<< HEAD
                return new Twig_Node_SandboxedPrint($node->getNode('expr'), $node->getTemplateLine(), $node->getNodeTag());
=======
                return new Twig_Node_SandboxedPrint($node->getNode('expr'), $node->getLine(), $node->getNodeTag());
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            }
        }

        return $node;
    }

<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    protected function doLeaveNode(Twig_Node $node, Twig_Environment $env)
    {
        if ($node instanceof Twig_Node_Module) {
            $this->inAModule = false;

            $node->setNode('display_start', new Twig_Node(array(new Twig_Node_CheckSecurity($this->filters, $this->tags, $this->functions), $node->getNode('display_start'))));
        }

        return $node;
    }

<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    public function getPriority()
    {
        return 0;
    }
}
