<?php

/*
 * This file is part of Twig.
 *
<<<<<<< HEAD
 * (c) Fabien Potencier
=======
 * (c) 2011 Fabien Potencier
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Imports blocks defined in another template into the current template.
 *
 * <pre>
 * {% extends "base.html" %}
 *
 * {% use "blocks.html" %}
 *
 * {% block title %}{% endblock %}
 * {% block content %}{% endblock %}
 * </pre>
 *
 * @see http://www.twig-project.org/doc/templates.html#horizontal-reuse for details.
<<<<<<< HEAD
 *
 * @final
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 */
class Twig_TokenParser_Use extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
        $template = $this->parser->getExpressionParser()->parseExpression();
        $stream = $this->parser->getStream();

        if (!$template instanceof Twig_Node_Expression_Constant) {
<<<<<<< HEAD
            throw new Twig_Error_Syntax('The template references in a "use" statement must be a string.', $stream->getCurrent()->getLine(), $stream->getSourceContext());
=======
            throw new Twig_Error_Syntax('The template references in a "use" statement must be a string.', $stream->getCurrent()->getLine(), $stream->getFilename());
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        }

        $targets = array();
        if ($stream->nextIf('with')) {
            do {
                $name = $stream->expect(Twig_Token::NAME_TYPE)->getValue();

                $alias = $name;
                if ($stream->nextIf('as')) {
                    $alias = $stream->expect(Twig_Token::NAME_TYPE)->getValue();
                }

                $targets[$name] = new Twig_Node_Expression_Constant($alias, -1);

                if (!$stream->nextIf(Twig_Token::PUNCTUATION_TYPE, ',')) {
                    break;
                }
            } while (true);
        }

        $stream->expect(Twig_Token::BLOCK_END_TYPE);

        $this->parser->addTrait(new Twig_Node(array('template' => $template, 'targets' => new Twig_Node($targets))));
    }

    public function getTag()
    {
        return 'use';
    }
}
