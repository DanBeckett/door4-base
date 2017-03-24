<?php
namespace Composer\Installers;

class DrupalInstaller extends BaseInstaller
{
    protected $locations = array(
        'core'      => 'core/',
        'module'    => 'modules/{$name}/',
        'theme'     => 'themes/{$name}/',
        'library'   => 'libraries/{$name}/',
        'profile'   => 'profiles/{$name}/',
        'drush'     => 'drush/{$name}/',
<<<<<<< HEAD
	    'custom-theme' => 'themes/custom/{$name}/',
	    'custom-module' => 'modules/custom/{$name}',
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    );
}
