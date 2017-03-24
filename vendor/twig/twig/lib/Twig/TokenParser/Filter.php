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
 * Filters a section of a template by applying filters.
 *
 * <pre>
 * {% filter upper %}
 *  This text becomes uppercase
 * {% endfilter %}
 * </pre>
<<<<<<< HEAD
 *
 * @final
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 */
class Twig_TokenParser_Filter extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
        $name = $this->parser->getVarName();
<<<<<<< HEAD
        $ref = new Twig_Node_Expression_BlockReference(new Twig_Node_Expression_Constant($name, $token->getLine()), null, $token->getLine(), $this->getTag());
=======
        $ref = new Twig_Node_Expression_BlockReference(new Twig_Node_Expression_Constant($name, $token->getLine()), true, $token->getLine(), $this->getTag());
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

        $filter = $this->parser->getExpressionParser()->parseFilterExpressionRaw($ref, $this->getTag());
        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);

        $body = $this->parser->subparse(array($this, 'decideBlockEnd'), true);
        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);

        $block = new Twig_Node_Block($name, $body, $token->getLine());
        $this->parser->setBlock($name, $block);

        return new Twig_Node_Print($filter, $token->getLine(), $this->getTag());
    }

    public function decideBlockEnd(Twig_Token $token)
    {
        return $token->test('endfilter');
    }

    public function getTag()
    {
        return 'filter';
    }
}
