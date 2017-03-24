<?php
namespace Composer\Installers;

<<<<<<< HEAD
/**
 * Installer for Craft Plugins
 */
class CraftInstaller extends BaseInstaller
{
    const NAME_PREFIX = 'craft';
    const NAME_SUFFIX = 'plugin';

    protected $locations = array(
        'plugin' => 'craft/plugins/{$name}/',
    );

    /**
     * Strip `craft-` prefix and/or `-plugin` suffix from package names
     *
     * @param  array $vars
     *
     * @return array
     */
    final public function inflectPackageVars($vars)
    {
        return $this->inflectPluginVars($vars);
    }

    private function inflectPluginVars($vars)
    {
        $vars['name'] = preg_replace('/-' . self::NAME_SUFFIX . '$/i', '', $vars['name']);
        $vars['name'] = preg_replace('/^' . self::NAME_PREFIX . '-/i', '', $vars['name']);

        return $vars;
    }
=======
class CraftInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin' => 'craft/plugins/{$name}/',
    );
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
}
