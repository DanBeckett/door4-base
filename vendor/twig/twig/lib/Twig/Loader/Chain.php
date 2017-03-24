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
 * Loads templates from other loaders.
 *
<<<<<<< HEAD
 * @final
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Loader_Chain implements Twig_LoaderInterface, Twig_ExistsLoaderInterface, Twig_SourceContextLoaderInterface
=======
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Loader_Chain implements Twig_LoaderInterface, Twig_ExistsLoaderInterface
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
{
    private $hasSourceCache = array();
    protected $loaders = array();

    /**
<<<<<<< HEAD
     * @param Twig_LoaderInterface[] $loaders
=======
     * Constructor.
     *
     * @param Twig_LoaderInterface[] $loaders An array of loader instances
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    public function __construct(array $loaders = array())
    {
        foreach ($loaders as $loader) {
            $this->addLoader($loader);
        }
    }

<<<<<<< HEAD
=======
    /**
     * Adds a loader instance.
     *
     * @param Twig_LoaderInterface $loader A Loader instance
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    public function addLoader(Twig_LoaderInterface $loader)
    {
        $this->loaders[] = $loader;
        $this->hasSourceCache = array();
    }

<<<<<<< HEAD
    public function getSource($name)
    {
        @trigger_error(sprintf('Calling "getSource" on "%s" is deprecated since 1.27. Use getSourceContext() instead.', get_class($this)), E_USER_DEPRECATED);

=======
    /**
     * {@inheritdoc}
     */
    public function getSource($name)
    {
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        $exceptions = array();
        foreach ($this->loaders as $loader) {
            if ($loader instanceof Twig_ExistsLoaderInterface && !$loader->exists($name)) {
                continue;
            }

            try {
                return $loader->getSource($name);
            } catch (Twig_Error_Loader $e) {
                $exceptions[] = $e->getMessage();
            }
        }

        throw new Twig_Error_Loader(sprintf('Template "%s" is not defined%s.', $name, $exceptions ? ' ('.implode(', ', $exceptions).')' : ''));
    }

<<<<<<< HEAD
    public function getSourceContext($name)
    {
        $exceptions = array();
        foreach ($this->loaders as $loader) {
            if ($loader instanceof Twig_ExistsLoaderInterface && !$loader->exists($name)) {
                continue;
            }

            try {
                if ($loader instanceof Twig_SourceContextLoaderInterface) {
                    return $loader->getSourceContext($name);
                }

                return new Twig_Source($loader->getSource($name), $name);
            } catch (Twig_Error_Loader $e) {
                $exceptions[] = $e->getMessage();
            }
        }

        throw new Twig_Error_Loader(sprintf('Template "%s" is not defined%s.', $name, $exceptions ? ' ('.implode(', ', $exceptions).')' : ''));
    }

=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    public function exists($name)
    {
        $name = (string) $name;

        if (isset($this->hasSourceCache[$name])) {
            return $this->hasSourceCache[$name];
        }

        foreach ($this->loaders as $loader) {
            if ($loader instanceof Twig_ExistsLoaderInterface) {
                if ($loader->exists($name)) {
                    return $this->hasSourceCache[$name] = true;
                }

                continue;
            }

            try {
<<<<<<< HEAD
                if ($loader instanceof Twig_SourceContextLoaderInterface) {
                    $loader->getSourceContext($name);
                } else {
                    $loader->getSource($name);
                }
=======
                $loader->getSource($name);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

                return $this->hasSourceCache[$name] = true;
            } catch (Twig_Error_Loader $e) {
            }
        }

        return $this->hasSourceCache[$name] = false;
    }

<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    public function getCacheKey($name)
    {
        $exceptions = array();
        foreach ($this->loaders as $loader) {
            if ($loader instanceof Twig_ExistsLoaderInterface && !$loader->exists($name)) {
                continue;
            }

            try {
                return $loader->getCacheKey($name);
            } catch (Twig_Error_Loader $e) {
                $exceptions[] = get_class($loader).': '.$e->getMessage();
            }
        }

        throw new Twig_Error_Loader(sprintf('Template "%s" is not defined%s.', $name, $exceptions ? ' ('.implode(', ', $exceptions).')' : ''));
    }

<<<<<<< HEAD
=======
    /**
     * {@inheritdoc}
     */
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    public function isFresh($name, $time)
    {
        $exceptions = array();
        foreach ($this->loaders as $loader) {
            if ($loader instanceof Twig_ExistsLoaderInterface && !$loader->exists($name)) {
                continue;
            }

            try {
                return $loader->isFresh($name, $time);
            } catch (Twig_Error_Loader $e) {
                $exceptions[] = get_class($loader).': '.$e->getMessage();
            }
        }

        throw new Twig_Error_Loader(sprintf('Template "%s" is not defined%s.', $name, $exceptions ? ' ('.implode(', ', $exceptions).')' : ''));
    }
}
