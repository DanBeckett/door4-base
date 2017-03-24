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
 * @author Fabien Potencier <fabien@symfony.com>
<<<<<<< HEAD
 *
 * @final
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 */
class Twig_Profiler_NodeVisitor_Profiler extends Twig_BaseNodeVisitor
{
    private $extensionName;

    public function __construct($extensionName)
    {
        $this->extensionName = $extensionName;
    }

<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    protected function doEnterNode(Twig_Node $node, Twig_Environment $env)
    {
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
            $varName = $this->getVarName();
<<<<<<< HEAD
            $node->setNode('display_start', new Twig_Node(array(new Twig_Profiler_Node_EnterProfile($this->extensionName, Twig_Profiler_Profile::TEMPLATE, $node->getTemplateName(), $varName), $node->getNode('display_start'))));
=======
            $node->setNode('display_start', new Twig_Node(array(new Twig_Profiler_Node_EnterProfile($this->extensionName, Twig_Profiler_Profile::TEMPLATE, $node->getAttribute('filename'), $varName), $node->getNode('display_start'))));
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            $node->setNode('display_end', new Twig_Node(array(new Twig_Profiler_Node_LeaveProfile($varName), $node->getNode('display_end'))));
        } elseif ($node instanceof Twig_Node_Block) {
            $varName = $this->getVarName();
            $node->setNode('body', new Twig_Node_Body(array(
                new Twig_Profiler_Node_EnterProfile($this->extensionName, Twig_Profiler_Profile::BLOCK, $node->getAttribute('name'), $varName),
                $node->getNode('body'),
                new Twig_Profiler_Node_LeaveProfile($varName),
            )));
        } elseif ($node instanceof Twig_Node_Macro) {
            $varName = $this->getVarName();
            $node->setNode('body', new Twig_Node_Body(array(
                new Twig_Profiler_Node_EnterProfile($this->extensionName, Twig_Profiler_Profile::MACRO, $node->getAttribute('name'), $varName),
                $node->getNode('body'),
                new Twig_Profiler_Node_LeaveProfile($varName),
            )));
        }

        return $node;
    }

    private function getVarName()
    {
        return sprintf('__internal_%s', hash('sha256', uniqid(mt_rand(), true), false));
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
