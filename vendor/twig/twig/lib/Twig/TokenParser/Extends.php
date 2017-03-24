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
 * Extends a template by another one.
 *
 * <pre>
 *  {% extends "base.html" %}
 * </pre>
<<<<<<< HEAD
 *
 * @final
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 */
class Twig_TokenParser_Extends extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
<<<<<<< HEAD
        $stream = $this->parser->getStream();

        if (!$this->parser->isMainScope()) {
            throw new Twig_Error_Syntax('Cannot extend from a block.', $token->getLine(), $stream->getSourceContext());
        }

        if (null !== $this->parser->getParent()) {
            throw new Twig_Error_Syntax('Multiple extends tags are forbidden.', $token->getLine(), $stream->getSourceContext());
        }
        $this->parser->setParent($this->parser->getExpressionParser()->parseExpression());

        $stream->expect(Twig_Token::BLOCK_END_TYPE);
=======
        if (!$this->parser->isMainScope()) {
            throw new Twig_Error_Syntax('Cannot extend from a block.', $token->getLine(), $this->parser->getFilename());
        }

        if (null !== $this->parser->getParent()) {
            throw new Twig_Error_Syntax('Multiple extends tags are forbidden.', $token->getLine(), $this->parser->getFilename());
        }
        $this->parser->setParent($this->parser->getExpressionParser()->parseExpression());

        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    public function getTag()
    {
        return 'extends';
    }
}
