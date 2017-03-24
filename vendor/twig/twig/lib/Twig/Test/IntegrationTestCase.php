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
 * Integration test helper.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Karma Dordrak <drak@zikula.org>
 */
abstract class Twig_Test_IntegrationTestCase extends PHPUnit_Framework_TestCase
{
    /**
     * @return string
     */
    abstract protected function getFixturesDir();

    /**
     * @return Twig_ExtensionInterface[]
     */
    protected function getExtensions()
    {
        return array();
    }

    /**
     * @return Twig_SimpleFilter[]
     */
    protected function getTwigFilters()
    {
        return array();
    }

    /**
     * @return Twig_SimpleFunction[]
     */
    protected function getTwigFunctions()
    {
        return array();
    }

    /**
     * @return Twig_SimpleTest[]
     */
    protected function getTwigTests()
    {
        return array();
    }

    /**
     * @dataProvider getTests
     */
    public function testIntegration($file, $message, $condition, $templates, $exception, $outputs)
    {
        $this->doIntegrationTest($file, $message, $condition, $templates, $exception, $outputs);
    }

    /**
     * @dataProvider getLegacyTests
     * @group legacy
     */
    public function testLegacyIntegration($file, $message, $condition, $templates, $exception, $outputs)
    {
        $this->doIntegrationTest($file, $message, $condition, $templates, $exception, $outputs);
    }

    public function getTests($name, $legacyTests = false)
    {
        $fixturesDir = realpath($this->getFixturesDir());
        $tests = array();

        foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($fixturesDir), RecursiveIteratorIterator::LEAVES_ONLY) as $file) {
            if (!preg_match('/\.test$/', $file)) {
                continue;
            }

            if ($legacyTests xor false !== strpos($file->getRealpath(), '.legacy.test')) {
                continue;
            }

            $test = file_get_contents($file->getRealpath());

            if (preg_match('/--TEST--\s*(.*?)\s*(?:--CONDITION--\s*(.*))?\s*((?:--TEMPLATE(?:\(.*?\))?--(?:.*?))+)\s*(?:--DATA--\s*(.*))?\s*--EXCEPTION--\s*(.*)/sx', $test, $match)) {
                $message = $match[1];
                $condition = $match[2];
                $templates = self::parseTemplates($match[3]);
                $exception = $match[5];
                $outputs = array(array(null, $match[4], null, ''));
            } elseif (preg_match('/--TEST--\s*(.*?)\s*(?:--CONDITION--\s*(.*))?\s*((?:--TEMPLATE(?:\(.*?\))?--(?:.*?))+)--DATA--.*?--EXPECT--.*/s', $test, $match)) {
                $message = $match[1];
                $condition = $match[2];
                $templates = self::parseTemplates($match[3]);
                $exception = false;
                preg_match_all('/--DATA--(.*?)(?:--CONFIG--(.*?))?--EXPECT--(.*?)(?=\-\-DATA\-\-|$)/s', $test, $outputs, PREG_SET_ORDER);
            } else {
                throw new InvalidArgumentException(sprintf('Test "%s" is not valid.', str_replace($fixturesDir.'/', '', $file)));
            }

            $tests[] = array(str_replace($fixturesDir.'/', '', $file), $message, $condition, $templates, $exception, $outputs);
        }

        if ($legacyTests && empty($tests)) {
            // add a dummy test to avoid a PHPUnit message
            return array(array('not', '-', '', array(), '', array()));
        }

        return $tests;
    }

    public function getLegacyTests()
    {
        return $this->getTests('testLegacyIntegration', true);
    }

    protected function doIntegrationTest($file, $message, $condition, $templates, $exception, $outputs)
    {
<<<<<<< HEAD
        if (!$outputs) {
            $this->markTestSkipped('no legacy tests to run');
        }

=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        if ($condition) {
            eval('$ret = '.$condition.';');
            if (!$ret) {
                $this->markTestSkipped($condition);
            }
        }

        $loader = new Twig_Loader_Array($templates);

        foreach ($outputs as $i => $match) {
            $config = array_merge(array(
                'cache' => false,
                'strict_variables' => true,
            ), $match[2] ? eval($match[2].';') : array());
            $twig = new Twig_Environment($loader, $config);
            $twig->addGlobal('global', 'global');
            foreach ($this->getExtensions() as $extension) {
                $twig->addExtension($extension);
            }

            foreach ($this->getTwigFilters() as $filter) {
                $twig->addFilter($filter);
            }

            foreach ($this->getTwigTests() as $test) {
                $twig->addTest($test);
            }

            foreach ($this->getTwigFunctions() as $function) {
                $twig->addFunction($function);
            }

            // avoid using the same PHP class name for different cases
            // only for PHP 5.2+
            if (PHP_VERSION_ID >= 50300) {
                $p = new ReflectionProperty($twig, 'templateClassPrefix');
                $p->setAccessible(true);
                $p->setValue($twig, '__TwigTemplate_'.hash('sha256', uniqid(mt_rand(), true), false).'_');
            }

            try {
                $template = $twig->loadTemplate('index.twig');
            } catch (Exception $e) {
                if (false !== $exception) {
                    $message = $e->getMessage();
                    $this->assertSame(trim($exception), trim(sprintf('%s: %s', get_class($e), $message)));
<<<<<<< HEAD
                    $last = substr($message, strlen($message) - 1);
                    $this->assertTrue('.' === $last || '?' === $last, $message, 'Exception message must end with a dot or a question mark.');
=======
                    $this->assertSame('.', substr($message, strlen($message) - 1), $message, 'Exception message must end with a dot.');
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

                    return;
                }

<<<<<<< HEAD
=======
                if ($e instanceof Twig_Error_Syntax) {
                    $e->setTemplateFile($file);

                    throw $e;
                }

>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
                throw new Twig_Error(sprintf('%s: %s', get_class($e), $e->getMessage()), -1, $file, $e);
            }

            try {
                $output = trim($template->render(eval($match[1].';')), "\n ");
            } catch (Exception $e) {
                if (false !== $exception) {
                    $this->assertSame(trim($exception), trim(sprintf('%s: %s', get_class($e), $e->getMessage())));

                    return;
                }

<<<<<<< HEAD
                $e = new Twig_Error(sprintf('%s: %s', get_class($e), $e->getMessage()), -1, $file, $e);
=======
                if ($e instanceof Twig_Error_Syntax) {
                    $e->setTemplateFile($file);
                } else {
                    $e = new Twig_Error(sprintf('%s: %s', get_class($e), $e->getMessage()), -1, $file, $e);
                }
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

                $output = trim(sprintf('%s: %s', get_class($e), $e->getMessage()));
            }

            if (false !== $exception) {
                list($class) = explode(':', $exception);
                $this->assertThat(null, new PHPUnit_Framework_Constraint_Exception($class));
            }

            $expected = trim($match[3], "\n ");

            if ($expected !== $output) {
                printf("Compiled templates that failed on case %d:\n", $i + 1);

                foreach (array_keys($templates) as $name) {
                    echo "Template: $name\n";
<<<<<<< HEAD
                    $loader = $twig->getLoader();
                    if (!$loader instanceof Twig_SourceContextLoaderInterface) {
                        $source = new Twig_Source($loader->getSource($name), $name);
                    } else {
                        $source = $loader->getSourceContext($name);
                    }
                    echo $twig->compile($twig->parse($twig->tokenize($source)));
=======
                    $source = $loader->getSource($name);
                    echo $twig->compile($twig->parse($twig->tokenize($source, $name)));
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
                }
            }
            $this->assertEquals($expected, $output, $message.' (in '.$file.')');
        }
    }

    protected static function parseTemplates($test)
    {
        $templates = array();
        preg_match_all('/--TEMPLATE(?:\((.*?)\))?--(.*?)(?=\-\-TEMPLATE|$)/s', $test, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $templates[($match[1] ? $match[1] : 'index.twig')] = $match[2];
        }

        return $templates;
    }
}
