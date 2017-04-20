<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all envrionments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to insure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}
$databases['default']['default'] = array (
  'database' => 'pantheon',
  'username' => 'pantheon',
  'password' => 'f1dd97bb1eda4c5686757d48ba6fb024',
  'prefix' => '',
  'host' => 'dbserver.dev.5a3aa645-a004-4577-9b79-ebcd8feec22c.drush.in',
  'port' => '11187',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'klrwZW6YTn5540ensN7myhnmzJd3RitOGLh7Uou2CQhbidisns4eBqFKtArUw3ON-pZIVr-6zQ';
$settings['install_profile'] = 'standard';
