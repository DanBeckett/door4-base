<?php

/*
 * This file is part of Twig.
 *
<<<<<<< HEAD
 * (c) Fabien Potencier
=======
 * (c) 2015 Fabien Potencier
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Default autoescaping strategy based on file names.
 *
 * This strategy sets the HTML as the default autoescaping strategy,
<<<<<<< HEAD
 * but changes it based on the template name.
=======
 * but changes it based on the filename.
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 *
 * Note that there is no runtime performance impact as the
 * default autoescaping strategy is set at compilation time.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_FileExtensionEscapingStrategy
{
    /**
     * Guesses the best autoescaping strategy based on the file name.
     *
<<<<<<< HEAD
     * @param string $name The template name
     *
     * @return string|false The escaping strategy name to use or false to disable
     */
    public static function guess($name)
    {
        if (in_array(substr($name, -1), array('/', '\\'))) {
            return 'html'; // return html for directories
        }

        if ('.twig' === substr($name, -5)) {
            $name = substr($name, 0, -5);
        }

        $extension = pathinfo($name, PATHINFO_EXTENSION);
=======
     * @param string $filename The template file name
     *
     * @return string|false The escaping strategy name to use or false to disable
     */
    public static function guess($filename)
    {
        if (in_array(substr($filename, -1), array('/', '\\'))) {
            return 'html'; // return html for directories
        }

        if ('.twig' === substr($filename, -5)) {
            $filename = substr($filename, 0, -5);
        }

        $extension = pathinfo($filename, PATHINFO_EXTENSION);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

        switch ($extension) {
            case 'js':
                return 'js';

            case 'css':
                return 'css';

            case 'txt':
                return false;

            default:
                return 'html';
        }
    }
}
