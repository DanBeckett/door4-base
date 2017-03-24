<?php
namespace Composer\Installers;

<<<<<<< HEAD
use Composer\IO\IOInterface;
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
use Composer\Composer;
use Composer\Package\PackageInterface;

abstract class BaseInstaller
{
    protected $locations = array();
    protected $composer;
    protected $package;
<<<<<<< HEAD
    protected $io;
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

    /**
     * Initializes base installer.
     *
     * @param PackageInterface $package
     * @param Composer         $composer
<<<<<<< HEAD
     * @param IOInterface      $io
     */
    public function __construct(PackageInterface $package = null, Composer $composer = null, IOInterface $io = null)
    {
        $this->composer = $composer;
        $this->package = $package;
        $this->io = $io;
=======
     */
    public function __construct(PackageInterface $package = null, Composer $composer = null)
    {
        $this->composer = $composer;
        $this->package = $package;
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    }

    /**
     * Return the install path based on package type.
     *
     * @param  PackageInterface $package
     * @param  string           $frameworkType
     * @return string
     */
    public function getInstallPath(PackageInterface $package, $frameworkType = '')
    {
        $type = $this->package->getType();

        $prettyName = $this->package->getPrettyName();
        if (strpos($prettyName, '/') !== false) {
            list($vendor, $name) = explode('/', $prettyName);
        } else {
            $vendor = '';
            $name = $prettyName;
        }

        $availableVars = $this->inflectPackageVars(compact('name', 'vendor', 'type'));

        $extra = $package->getExtra();
        if (!empty($extra['installer-name'])) {
            $availableVars['name'] = $extra['installer-name'];
        }

        if ($this->composer->getPackage()) {
            $extra = $this->composer->getPackage()->getExtra();
            if (!empty($extra['installer-paths'])) {
<<<<<<< HEAD
                $customPath = $this->mapCustomInstallPaths($extra['installer-paths'], $prettyName, $type, $vendor);
=======
                $customPath = $this->mapCustomInstallPaths($extra['installer-paths'], $prettyName, $type);
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
                if ($customPath !== false) {
                    return $this->templatePath($customPath, $availableVars);
                }
            }
        }

        $packageType = substr($type, strlen($frameworkType) + 1);
        $locations = $this->getLocations();
        if (!isset($locations[$packageType])) {
            throw new \InvalidArgumentException(sprintf('Package type "%s" is not supported', $type));
        }

        return $this->templatePath($locations[$packageType], $availableVars);
    }

    /**
     * For an installer to override to modify the vars per installer.
     *
     * @param  array $vars
     * @return array
     */
    public function inflectPackageVars($vars)
    {
        return $vars;
    }

    /**
     * Gets the installer's locations
     *
     * @return array
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Replace vars in a path
     *
     * @param  string $path
     * @param  array  $vars
     * @return string
     */
    protected function templatePath($path, array $vars = array())
    {
        if (strpos($path, '{') !== false) {
            extract($vars);
            preg_match_all('@\{\$([A-Za-z0-9_]*)\}@i', $path, $matches);
            if (!empty($matches[1])) {
                foreach ($matches[1] as $var) {
                    $path = str_replace('{$' . $var . '}', $$var, $path);
                }
            }
        }

        return $path;
    }

    /**
     * Search through a passed paths array for a custom install path.
     *
     * @param  array  $paths
     * @param  string $name
     * @param  string $type
<<<<<<< HEAD
     * @param  string $vendor = NULL
     * @return string
     */
    protected function mapCustomInstallPaths(array $paths, $name, $type, $vendor = NULL)
    {
        foreach ($paths as $path => $names) {
            if (in_array($name, $names) || in_array('type:' . $type, $names) || in_array('vendor:' . $vendor, $names)) {
=======
     * @return string
     */
    protected function mapCustomInstallPaths(array $paths, $name, $type)
    {
        foreach ($paths as $path => $names) {
            if (in_array($name, $names) || in_array('type:' . $type, $names)) {
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
                return $path;
            }
        }

        return false;
    }
}
