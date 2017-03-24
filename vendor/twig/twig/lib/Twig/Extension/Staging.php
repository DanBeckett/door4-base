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
 * Internal class.
 *
 * This class is used by Twig_Environment as a staging area and must not be used directly.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class Twig_Extension_Staging extends Twig_Extension
{
    protected $functions = array();
    protected $filters = array();
    protected $visitors = array();
    protected $tokenParsers = array();
    protected $globals = array();
    protected $tests = array();

    public function addFunction($name, $function)
    {
<<<<<<< HEAD
        if (isset($this->functions[$name])) {
            @trigger_error(sprintf('Overriding function "%s" that is already registered is deprecated since version 1.30 and won\'t be possible anymore in 2.0.', $name), E_USER_DEPRECATED);
        }

=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        $this->functions[$name] = $function;
    }

    public function getFunctions()
    {
        return $this->functions;
    }

    public function addFilter($name, $filter)
    {
<<<<<<< HEAD
        if (isset($this->filters[$name])) {
            @trigger_error(sprintf('Overriding filter "%s" that is already registered is deprecated since version 1.30 and won\'t be possible anymore in 2.0.', $name), E_USER_DEPRECATED);
        }

=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        $this->filters[$name] = $filter;
    }

    public function getFilters()
    {
        return $this->filters;
    }

    public function addNodeVisitor(Twig_NodeVisitorInterface $visitor)
    {
        $this->visitors[] = $visitor;
    }

    public function getNodeVisitors()
    {
        return $this->visitors;
    }

    public function addTokenParser(Twig_TokenParserInterface $parser)
    {
<<<<<<< HEAD
        if (isset($this->tokenParsers[$parser->getTag()])) {
            @trigger_error(sprintf('Overriding tag "%s" that is already registered is deprecated since version 1.30 and won\'t be possible anymore in 2.0.', $parser->getTag()), E_USER_DEPRECATED);
        }

        $this->tokenParsers[$parser->getTag()] = $parser;
=======
        $this->tokenParsers[] = $parser;
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    public function getTokenParsers()
    {
        return $this->tokenParsers;
    }

    public function addGlobal($name, $value)
    {
        $this->globals[$name] = $value;
    }

    public function getGlobals()
    {
        return $this->globals;
    }

    public function addTest($name, $test)
    {
<<<<<<< HEAD
        if (isset($this->tests[$name])) {
            @trigger_error(sprintf('Overriding test "%s" that is already registered is deprecated since version 1.30 and won\'t be possible anymore in 2.0.', $name), E_USER_DEPRECATED);
        }

=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        $this->tests[$name] = $test;
    }

    public function getTests()
    {
        return $this->tests;
    }

    public function getName()
    {
        return 'staging';
    }
}
