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
 * Interface implemented by lexer classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 3.0)
 */
interface Twig_LexerInterface
{
    /**
     * Tokenizes a source code.
     *
<<<<<<< HEAD
     * @param string|Twig_Source $code The source code
     * @param string             $name A unique identifier for the source code
     *
     * @return Twig_TokenStream
     *
     * @throws Twig_Error_Syntax When the code is syntactically wrong
     */
    public function tokenize($code, $name = null);
=======
     * @param string $code     The source code
     * @param string $filename A unique identifier for the source code
     *
     * @return Twig_TokenStream A token stream instance
     *
     * @throws Twig_Error_Syntax When the code is syntactically wrong
     */
    public function tokenize($code, $filename = null);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
}
