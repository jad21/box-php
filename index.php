<?php
use Box\Application as App;
use Box\Module\Loader\AutoLoader;
use Box\Module\Loader\ConfigLoader;


if (PHP_SAPI == 'cli-server' && is_file(__DIR__.parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}
	
$path = __DIR__;
$config = array(
    'path'          => $path,
    'path.packages' => $path.'/packages',
    'path.vendor'   => $path.'/vendor',
);

$loader = require $config["path.vendor"].'/autoload.php';

$app = new App($config);
$app['autoloader'] = $loader;

$app['module']->register([
    'packages/*/*/index.php',
], $path);

$app['module']->addLoader(new AutoLoader($app['autoloader']));

$app->run();
