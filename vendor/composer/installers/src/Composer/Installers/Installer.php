<?php
namespace Composer\Installers;

<<<<<<< HEAD
use Composer\IO\IOInterface;
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;

class Installer extends LibraryInstaller
{
    /**
     * Package types to installer class map
     *
     * @var array
     */
    private $supportedTypes = array(
        'aimeos'       => 'AimeosInstaller',
        'asgard'       => 'AsgardInstaller',
<<<<<<< HEAD
        'attogram'     => 'AttogramInstaller',
        'agl'          => 'AglInstaller',
        'annotatecms'  => 'AnnotateCmsInstaller',
        'bitrix'       => 'BitrixInstaller',
        'bonefish'     => 'BonefishInstaller',
        'cakephp'      => 'CakePHPInstaller',
        'chef'         => 'ChefInstaller',
        'ccframework'  => 'ClanCatsFrameworkInstaller',
        'cockpit'      => 'CockpitInstaller',
=======
        'agl'          => 'AglInstaller',
        'annotatecms'  => 'AnnotateCmsInstaller',
        'bitrix'       => 'BitrixInstaller',
        'cakephp'      => 'CakePHPInstaller',
        'chef'         => 'ChefInstaller',
        'ccframework'  => 'ClanCatsFrameworkInstaller',
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        'codeigniter'  => 'CodeIgniterInstaller',
        'concrete5'    => 'Concrete5Installer',
        'craft'        => 'CraftInstaller',
        'croogo'       => 'CroogoInstaller',
        'dokuwiki'     => 'DokuWikiInstaller',
        'dolibarr'     => 'DolibarrInstaller',
<<<<<<< HEAD
        'decibel'      => 'DecibelInstaller',
        'drupal'       => 'DrupalInstaller',
        'elgg'         => 'ElggInstaller',
        'ee3'          => 'ExpressionEngineInstaller',
        'ee2'          => 'ExpressionEngineInstaller',
=======
        'drupal'       => 'DrupalInstaller',
        'elgg'         => 'ElggInstaller',
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        'fuel'         => 'FuelInstaller',
        'fuelphp'      => 'FuelphpInstaller',
        'grav'         => 'GravInstaller',
        'hurad'        => 'HuradInstaller',
<<<<<<< HEAD
        'imagecms'     => 'ImageCMSInstaller',
        'joomla'       => 'JoomlaInstaller',
        'kirby'        => 'KirbyInstaller',
        'kodicms'      => 'KodiCMSInstaller',
=======
        'joomla'       => 'JoomlaInstaller',
        'kirby'        => 'KirbyInstaller',
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        'kohana'       => 'KohanaInstaller',
        'laravel'      => 'LaravelInstaller',
        'lithium'      => 'LithiumInstaller',
        'magento'      => 'MagentoInstaller',
        'mako'         => 'MakoInstaller',
<<<<<<< HEAD
        'mautic'       => 'MauticInstaller',
        'mediawiki'    => 'MediaWikiInstaller',
        'microweber'   => 'MicroweberInstaller',
=======
        'mediawiki'    => 'MediaWikiInstaller',
        'microweber'    => 'MicroweberInstaller',
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        'modulework'   => 'MODULEWorkInstaller',
        'modxevo'      => 'MODXEvoInstaller',
        'moodle'       => 'MoodleInstaller',
        'october'      => 'OctoberInstaller',
        'oxid'         => 'OxidInstaller',
        'phpbb'        => 'PhpBBInstaller',
        'pimcore'      => 'PimcoreInstaller',
        'piwik'        => 'PiwikInstaller',
<<<<<<< HEAD
        'plentymarkets'=> 'PlentymarketsInstaller',
        'ppi'          => 'PPIInstaller',
        'puppet'       => 'PuppetInstaller',
        'radphp'       => 'RadPHPInstaller',
        'phifty'       => 'PhiftyInstaller',
        'redaxo'       => 'RedaxoInstaller',
        'reindex'      => 'ReIndexInstaller',
=======
        'ppi'          => 'PPIInstaller',
        'puppet'       => 'PuppetInstaller',
        'redaxo'       => 'RedaxoInstaller',
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
        'roundcube'    => 'RoundcubeInstaller',
        'shopware'     => 'ShopwareInstaller',
        'silverstripe' => 'SilverStripeInstaller',
        'smf'          => 'SMFInstaller',
        'symfony1'     => 'Symfony1Installer',
        'thelia'       => 'TheliaInstaller',
        'tusk'         => 'TuskInstaller',
        'typo3-cms'    => 'TYPO3CmsInstaller',
        'typo3-flow'   => 'TYPO3FlowInstaller',
<<<<<<< HEAD
        'vanilla'      => 'VanillaInstaller',
        'whmcs'        => 'WHMCSInstaller',
        'wolfcms'      => 'WolfCMSInstaller',
        'wordpress'    => 'WordPressInstaller',
        'yawik'        => 'YawikInstaller',
        'zend'         => 'ZendInstaller',
        'zikula'       => 'ZikulaInstaller',
        'prestashop'   => 'PrestashopInstaller'
=======
        'whmcs'        => 'WHMCSInstaller',
        'wolfcms'      => 'WolfCMSInstaller',
        'wordpress'    => 'WordPressInstaller',
        'zend'         => 'ZendInstaller',
        'zikula'       => 'ZikulaInstaller',
        'prestashop'   => 'PrestashopInstaller',
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    );

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $type = $package->getType();
        $frameworkType = $this->findFrameworkType($type);

        if ($frameworkType === false) {
            throw new \InvalidArgumentException(
                'Sorry the package type of this package is not yet supported.'
            );
        }

        $class = 'Composer\\Installers\\' . $this->supportedTypes[$frameworkType];
<<<<<<< HEAD
        $installer = new $class($package, $this->composer, $this->getIO());
=======
        $installer = new $class($package, $this->composer);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

        return $installer->getInstallPath($package, $frameworkType);
    }

    public function uninstall(InstalledRepositoryInterface $repo, PackageInterface $package)
    {
        if (!$repo->hasPackage($package)) {
            throw new \InvalidArgumentException('Package is not installed: '.$package);
        }

        $repo->removePackage($package);

        $installPath = $this->getInstallPath($package);
        $this->io->write(sprintf('Deleting %s - %s', $installPath, $this->filesystem->removeDirectory($installPath) ? '<comment>deleted</comment>' : '<error>not deleted</error>'));
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        $frameworkType = $this->findFrameworkType($packageType);

        if ($frameworkType === false) {
            return false;
        }

        $locationPattern = $this->getLocationPattern($frameworkType);

        return preg_match('#' . $frameworkType . '-' . $locationPattern . '#', $packageType, $matches) === 1;
    }

    /**
     * Finds a supported framework type if it exists and returns it
     *
     * @param  string $type
     * @return string
     */
    protected function findFrameworkType($type)
    {
        $frameworkType = false;

        krsort($this->supportedTypes);

        foreach ($this->supportedTypes as $key => $val) {
            if ($key === substr($type, 0, strlen($key))) {
                $frameworkType = substr($type, 0, strlen($key));
                break;
            }
        }

        return $frameworkType;
    }

    /**
     * Get the second part of the regular expression to check for support of a
     * package type
     *
     * @param  string $frameworkType
     * @return string
     */
    protected function getLocationPattern($frameworkType)
    {
        $pattern = false;
        if (!empty($this->supportedTypes[$frameworkType])) {
            $frameworkClass = 'Composer\\Installers\\' . $this->supportedTypes[$frameworkType];
            /** @var BaseInstaller $framework */
<<<<<<< HEAD
            $framework = new $frameworkClass(null, $this->composer, $this->getIO());
=======
            $framework = new $frameworkClass(null, $this->composer);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
            $locations = array_keys($framework->getLocations());
            $pattern = $locations ? '(' . implode('|', $locations) . ')' : false;
        }

        return $pattern ? : '(\w+)';
    }
<<<<<<< HEAD

    /**
     * Get I/O object
     *
     * @return IOInterface
     */
    private function getIO()
    {
        return $this->io;
    }
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
}
