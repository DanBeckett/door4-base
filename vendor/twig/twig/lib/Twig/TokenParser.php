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
 * Base class for all token parsers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Twig_TokenParser implements Twig_TokenParserInterface
{
    /**
     * @var Twig_Parser
     */
    protected $parser;

    /**
     * Sets the parser associated with this token parser.
<<<<<<< HEAD
=======
     *
     * @param Twig_Parser $parser A Twig_Parser instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function setParser(Twig_Parser $parser)
    {
        $this->parser = $parser;
    }
}
