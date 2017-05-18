#!/home/worker/php/bin/php
<?php
/**
 * This file is part of the phspring package.
 */

define('APPLICATION_NAME', 'demo');
define('ROOT_PATH', realpath(__DIR__ . '/..'));
define('APPLICATION_ENV', $_ENV['PHSPRING_ENV'] ?? 'dev');
define('RUNTIME_DIR', realpath(ROOT_PATH . '/../runtime') . '/' . APPLICATION_NAME);
!is_dir(RUNTIME_DIR) && @mkdir(RUNTIME_DIR, 0755, true);

require_once ROOT_PATH . '/vendor/autoload.php';

$config = ROOT_PATH . '/app/config/' . APPLICATION_ENV . '/main.php';
(new \app\Bootstrap($config))->start();