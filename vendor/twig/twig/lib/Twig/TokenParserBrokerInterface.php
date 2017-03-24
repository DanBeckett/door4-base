<?php

/*
 * This file is part of Twig.
 *
<<<<<<< HEAD
 * (c) Fabien Potencier
 * (c) Arnaud Le Blanc
=======
 * (c) 2010 Fabien Potencier
 * (c) 2010 Arnaud Le Blanc
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Interface implemented by token parser brokers.
 *
 * Token parser brokers allows to implement custom logic in the process of resolving a token parser for a given tag name.
 *
 * @author Arnaud Le Blanc <arnaud.lb@gmail.com>
 *
 * @deprecated since 1.12 (to be removed in 2.0)
 */
interface Twig_TokenParserBrokerInterface
{
    /**
     * Gets a TokenParser suitable for a tag.
     *
     * @param string $tag A tag name
     *
<<<<<<< HEAD
     * @return Twig_TokenParserInterface|null A Twig_TokenParserInterface or null if no suitable TokenParser was found
=======
     * @return null|Twig_TokenParserInterface A Twig_TokenParserInterface or null if no suitable TokenParser was found
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function getTokenParser($tag);

    /**
     * Calls Twig_TokenParserInterface::setParser on all parsers the implementation knows of.
<<<<<<< HEAD
=======
     *
     * @param Twig_ParserInterface $parser A Twig_ParserInterface interface
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function setParser(Twig_ParserInterface $parser);

    /**
     * Gets the Twig_ParserInterface.
     *
     * @return null|Twig_ParserInterface A Twig_ParserInterface instance or null
     */
    public function getParser();
}
