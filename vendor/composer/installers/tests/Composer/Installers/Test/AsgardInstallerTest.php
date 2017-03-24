<?php
namespace Composer\Installers\Test;

use Composer\Installers\AsgardInstaller;
use Composer\Package\Package;
use Composer\Composer;

class AsgardInstallerTest extends \PHPUnit_Framework_TestCase
{
    /**
<<<<<<< HEAD
     * @var AsgardInstaller
=======
     * @var OctoberInstaller
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
     */
    private $installer;

    public function setUp()
    {
        $this->installer = new AsgardInstaller(
            new Package('NyanCat', '4.2', '4.2'),
            new Composer()
        );
    }

    /**
     * @dataProvider packageNameInflectionProvider
     */
    public function testInflectPackageVars($type, $name, $expected)
    {
        $this->assertEquals(
<<<<<<< HEAD
            array('name' => $expected, 'type' => $type),
            $this->installer->inflectPackageVars(array('name' => $name, 'type' => $type))
=======
            $this->installer->inflectPackageVars(array('name' => $name, 'type' => $type)),
            array('name' => $expected, 'type' => $type)
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        );
    }

    public function packageNameInflectionProvider()
    {
        return array(
<<<<<<< HEAD
            // Should keep module name StudlyCase
            array(
                'asgard-module',
                'user-profile',
                'UserProfile'
            ),
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            array(
                'asgard-module',
                'asgard-module',
                'Asgard'
            ),
            array(
                'asgard-module',
                'blog',
                'Blog'
            ),
<<<<<<< HEAD
            // tests that exactly one '-module' is cut off
            array(
                'asgard-module',
                'some-module-module',
                'SomeModule',
            ),
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            // tests that exactly one '-theme' is cut off
            array(
                'asgard-theme',
                'some-theme-theme',
<<<<<<< HEAD
                'SomeTheme',
=======
                'Some-theme',
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            ),
            // tests that names without '-theme' suffix stay valid
            array(
                'asgard-theme',
                'someothertheme',
                'Someothertheme',
            ),
<<<<<<< HEAD
            // Should keep theme name StudlyCase
            array(
                'asgard-theme',
                'adminlte-advanced',
                'AdminlteAdvanced'
            ),
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        );
    }
}
