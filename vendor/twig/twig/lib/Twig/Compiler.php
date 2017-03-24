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
 * Compiles a node to PHP code.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Compiler implements Twig_CompilerInterface
{
    protected $lastLine;
    protected $source;
    protected $indentation;
    protected $env;
    protected $debugInfo = array();
    protected $sourceOffset;
    protected $sourceLine;
    protected $filename;

<<<<<<< HEAD
=======
    /**
     * Constructor.
     *
     * @param Twig_Environment $env The twig environment instance
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    public function __construct(Twig_Environment $env)
    {
        $this->env = $env;
    }

<<<<<<< HEAD
    /**
     * @deprecated since 1.25 (to be removed in 2.0)
     */
    public function getFilename()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 1.25 and will be removed in 2.0.', __FUNCTION__), E_USER_DEPRECATED);

=======
    public function getFilename()
    {
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        return $this->filename;
    }

    /**
     * Returns the environment instance related to this compiler.
     *
<<<<<<< HEAD
     * @return Twig_Environment
=======
     * @return Twig_Environment The environment instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function getEnvironment()
    {
        return $this->env;
    }

    /**
     * Gets the current PHP code after compilation.
     *
     * @return string The PHP code
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Compiles a node.
     *
     * @param Twig_NodeInterface $node        The node to compile
     * @param int                $indentation The current indentation
     *
<<<<<<< HEAD
     * @return $this
=======
     * @return Twig_Compiler The current compiler instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function compile(Twig_NodeInterface $node, $indentation = 0)
    {
        $this->lastLine = null;
        $this->source = '';
        $this->debugInfo = array();
        $this->sourceOffset = 0;
        // source code starts at 1 (as we then increment it when we encounter new lines)
        $this->sourceLine = 1;
        $this->indentation = $indentation;

        if ($node instanceof Twig_Node_Module) {
<<<<<<< HEAD
            // to be removed in 2.0
            $this->filename = $node->getTemplateName();
=======
            $this->filename = $node->getAttribute('filename');
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        }

        $node->compile($this);

        return $this;
    }

    public function subcompile(Twig_NodeInterface $node, $raw = true)
    {
        if (false === $raw) {
<<<<<<< HEAD
            $this->source .= str_repeat(' ', $this->indentation * 4);
=======
            $this->addIndentation();
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        }

        $node->compile($this);

        return $this;
    }

    /**
     * Adds a raw string to the compiled code.
     *
     * @param string $string The string
     *
<<<<<<< HEAD
     * @return $this
=======
     * @return Twig_Compiler The current compiler instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function raw($string)
    {
        $this->source .= $string;

        return $this;
    }

    /**
     * Writes a string to the compiled code by adding indentation.
     *
<<<<<<< HEAD
     * @return $this
=======
     * @return Twig_Compiler The current compiler instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function write()
    {
        $strings = func_get_args();
        foreach ($strings as $string) {
<<<<<<< HEAD
            $this->source .= str_repeat(' ', $this->indentation * 4).$string;
=======
            $this->addIndentation();
            $this->source .= $string;
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        }

        return $this;
    }

    /**
     * Appends an indentation to the current PHP code after compilation.
     *
<<<<<<< HEAD
     * @return $this
     *
     * @deprecated since 1.27 (to be removed in 2.0).
     */
    public function addIndentation()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use write(\'\') instead.', E_USER_DEPRECATED);

=======
     * @return Twig_Compiler The current compiler instance
     */
    public function addIndentation()
    {
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        $this->source .= str_repeat(' ', $this->indentation * 4);

        return $this;
    }

    /**
     * Adds a quoted string to the compiled code.
     *
     * @param string $value The string
     *
<<<<<<< HEAD
     * @return $this
=======
     * @return Twig_Compiler The current compiler instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function string($value)
    {
        $this->source .= sprintf('"%s"', addcslashes($value, "\0\t\"\$\\"));

        return $this;
    }

    /**
     * Returns a PHP representation of a given value.
     *
     * @param mixed $value The value to convert
     *
<<<<<<< HEAD
     * @return $this
=======
     * @return Twig_Compiler The current compiler instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function repr($value)
    {
        if (is_int($value) || is_float($value)) {
<<<<<<< HEAD
            if (false !== $locale = setlocale(LC_NUMERIC, '0')) {
=======
            if (false !== $locale = setlocale(LC_NUMERIC, 0)) {
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
                setlocale(LC_NUMERIC, 'C');
            }

            $this->raw($value);

            if (false !== $locale) {
                setlocale(LC_NUMERIC, $locale);
            }
        } elseif (null === $value) {
            $this->raw('null');
        } elseif (is_bool($value)) {
            $this->raw($value ? 'true' : 'false');
        } elseif (is_array($value)) {
            $this->raw('array(');
            $first = true;
            foreach ($value as $key => $v) {
                if (!$first) {
                    $this->raw(', ');
                }
                $first = false;
                $this->repr($key);
                $this->raw(' => ');
                $this->repr($v);
            }
            $this->raw(')');
        } else {
            $this->string($value);
        }

        return $this;
    }

    /**
     * Adds debugging information.
     *
<<<<<<< HEAD
     * @return $this
     */
    public function addDebugInfo(Twig_NodeInterface $node)
    {
        if ($node->getTemplateLine() != $this->lastLine) {
            $this->write(sprintf("// line %d\n", $node->getTemplateLine()));
=======
     * @param Twig_NodeInterface $node The related twig node
     *
     * @return Twig_Compiler The current compiler instance
     */
    public function addDebugInfo(Twig_NodeInterface $node)
    {
        if ($node->getLine() != $this->lastLine) {
            $this->write(sprintf("// line %d\n", $node->getLine()));
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

            // when mbstring.func_overload is set to 2
            // mb_substr_count() replaces substr_count()
            // but they have different signatures!
            if (((int) ini_get('mbstring.func_overload')) & 2) {
<<<<<<< HEAD
                @trigger_error('Support for having "mbstring.func_overload" different from 0 is deprecated version 1.29 and will be removed in 2.0.', E_USER_DEPRECATED);

=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
                // this is much slower than the "right" version
                $this->sourceLine += mb_substr_count(mb_substr($this->source, $this->sourceOffset), "\n");
            } else {
                $this->sourceLine += substr_count($this->source, "\n", $this->sourceOffset);
            }
            $this->sourceOffset = strlen($this->source);
<<<<<<< HEAD
            $this->debugInfo[$this->sourceLine] = $node->getTemplateLine();

            $this->lastLine = $node->getTemplateLine();
=======
            $this->debugInfo[$this->sourceLine] = $node->getLine();

            $this->lastLine = $node->getLine();
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        }

        return $this;
    }

    public function getDebugInfo()
    {
        ksort($this->debugInfo);

        return $this->debugInfo;
    }

    /**
     * Indents the generated code.
     *
     * @param int $step The number of indentation to add
     *
<<<<<<< HEAD
     * @return $this
=======
     * @return Twig_Compiler The current compiler instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function indent($step = 1)
    {
        $this->indentation += $step;

        return $this;
    }

    /**
     * Outdents the generated code.
     *
     * @param int $step The number of indentation to remove
     *
<<<<<<< HEAD
     * @return $this
=======
     * @return Twig_Compiler The current compiler instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     *
     * @throws LogicException When trying to outdent too much so the indentation would become negative
     */
    public function outdent($step = 1)
    {
        // can't outdent by more steps than the current indentation level
        if ($this->indentation < $step) {
<<<<<<< HEAD
            throw new LogicException('Unable to call outdent() as the indentation would become negative.');
=======
            throw new LogicException('Unable to call outdent() as the indentation would become negative');
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        }

        $this->indentation -= $step;

        return $this;
    }

    public function getVarName()
    {
        return sprintf('__internal_%s', hash('sha256', uniqid(mt_rand(), true), false));
    }
}
