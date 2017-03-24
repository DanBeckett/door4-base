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
<<<<<<< HEAD

/**
 * @final
 */
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
class Twig_Extension_StringLoader extends Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction('template_from_string', 'twig_template_from_string', array('needs_environment' => true)),
        );
    }

    public function getName()
    {
        return 'string_loader';
    }
}

/**
 * Loads a template from a string.
 *
 * <pre>
 * {{ include(template_from_string("Hello {{ name }}")) }}
 * </pre>
 *
 * @param Twig_Environment $env      A Twig_Environment instance
 * @param string           $template A template as a string or object implementing __toString()
 *
<<<<<<< HEAD
 * @return Twig_Template
=======
 * @return Twig_Template A Twig_Template instance
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 */
function twig_template_from_string(Twig_Environment $env, $template)
{
    return $env->createTemplate((string) $template);
}
