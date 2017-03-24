<?php
namespace Composer\Installers;

/**
 * Extension installer for TYPO3 CMS
 *
<<<<<<< HEAD
 * @deprecated since 1.0.25, use https://packagist.org/packages/typo3/cms-composer-installers instead
 *
=======
>>>>>>> c81b45ba9a8b61239547a84a8e02a8dc1003e74a
 * @author Sascha Egerer <sascha.egerer@dkd.de>
 */
class TYPO3CmsInstaller extends BaseInstaller
{
    protected $locations = array(
        'extension'   => 'typo3conf/ext/{$name}/',
    );
}
