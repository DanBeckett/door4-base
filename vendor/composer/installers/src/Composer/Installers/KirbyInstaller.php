<?php
namespace Composer\Installers;

class KirbyInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin'    => 'site/plugins/{$name}/',
<<<<<<< HEAD
        'field'    => 'site/fields/{$name}/',
        'tag'    => 'site/tags/{$name}/'
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
    );
}
