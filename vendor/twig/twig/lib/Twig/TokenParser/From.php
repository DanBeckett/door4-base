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
 * Imports macros.
 *
 * <pre>
 *   {% from 'forms.html' import forms %}
 * </pre>
<<<<<<< HEAD
 *
 * @final
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 */
class Twig_TokenParser_From extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
        $macro = $this->parser->getExpressionParser()->parseExpression();
        $stream = $this->parser->getStream();
        $stream->expect('import');

        $targets = array();
        do {
            $name = $stream->expect(Twig_Token::NAME_TYPE)->getValue();

            $alias = $name;
            if ($stream->nextIf('as')) {
                $alias = $stream->expect(Twig_Token::NAME_TYPE)->getValue();
            }

            $targets[$name] = $alias;

            if (!$stream->nextIf(Twig_Token::PUNCTUATION_TYPE, ',')) {
                break;
            }
        } while (true);

        $stream->expect(Twig_Token::BLOCK_END_TYPE);

        $node = new Twig_Node_Import($macro, new Twig_Node_Expression_AssignName($this->parser->getVarName(), $token->getLine()), $token->getLine(), $this->getTag());

        foreach ($targets as $name => $alias) {
            if ($this->parser->isReservedMacroName($name)) {
<<<<<<< HEAD
                throw new Twig_Error_Syntax(sprintf('"%s" cannot be an imported macro as it is a reserved keyword.', $name), $token->getLine(), $stream->getSourceContext());
=======
                throw new Twig_Error_Syntax(sprintf('"%s" cannot be an imported macro as it is a reserved keyword.', $name), $token->getLine(), $stream->getFilename());
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            }

            $this->parser->addImportedSymbol('function', $alias, 'get'.$name, $node->getNode('var'));
        }

        return $node;
    }

    public function getTag()
    {
        return 'from';
    }
}
