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

/**
 * Interface implemented by token parsers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_TokenParserInterface
{
    /**
     * Sets the parser associated with this token parser.
<<<<<<< HEAD
=======
     *
     * @param Twig_Parser $parser A Twig_Parser instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function setParser(Twig_Parser $parser);

    /**
     * Parses a token and returns a node.
     *
<<<<<<< HEAD
     * @return Twig_NodeInterface
=======
     * @param Twig_Token $token A Twig_Token instance
     *
     * @return Twig_NodeInterface A Twig_NodeInterface instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     *
     * @throws Twig_Error_Syntax
     */
    public function parse(Twig_Token $token);

    /**
     * Gets the tag name associated with this token parser.
     *
     * @return string The tag name
     */
    public function getTag();
}
