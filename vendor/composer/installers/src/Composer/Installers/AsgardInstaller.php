<?php
namespace Composer\Installers;

class AsgardInstaller extends BaseInstaller
{
    protected $locations = array(
        'module' => 'Modules/{$name}/',
        'theme' => 'Themes/{$name}/'
    );

    /**
     * Format package name.
     *
     * For package type asgard-module, cut off a trailing '-plugin' if present.
     *
     * For package type asgard-theme, cut off a trailing '-theme' if present.
     *
     */
    public function inflectPackageVars($vars)
    {
        if ($vars['type'] === 'asgard-module') {
            return $this->inflectPluginVars($vars);
        }

        if ($vars['type'] === 'asgard-theme') {
            return $this->inflectThemeVars($vars);
        }

        return $vars;
    }

    protected function inflectPluginVars($vars)
    {
<<<<<<< HEAD
        $vars['name'] = preg_replace('/-module$/', '', $vars['name']);
        $vars['name'] = str_replace(array('-', '_'), ' ', $vars['name']);
        $vars['name'] = str_replace(' ', '', ucwords($vars['name']));
=======
        $vars['name'] = ucfirst(preg_replace('/-module/', '', $vars['name']));
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

        return $vars;
    }

    protected function inflectThemeVars($vars)
    {
<<<<<<< HEAD
        $vars['name'] = preg_replace('/-theme$/', '', $vars['name']);
        $vars['name'] = str_replace(array('-', '_'), ' ', $vars['name']);
        $vars['name'] = str_replace(' ', '', ucwords($vars['name']));
=======
        $vars['name'] = ucfirst(preg_replace('/-theme$/', '', $vars['name']));
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a

        return $vars;
    }
}
