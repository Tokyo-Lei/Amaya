<?php
/**
 * Amaya PHP Framework
 * User: OnoNaoki
 * Date: 2016/12/17
 * Time: 9:05
 */
if(PHP_VERSION < '5.2.0') die('PHP版本必须大于 5.3.0 以上运行');
define('AMAYA', true);

// 定义 PATH
define('BASE_PATH', __DIR__);
define('APP_PATH', BASE_PATH . '/app/');
define('CORE_PATH', BASE_PATH . '/system/');
define('CONFIG_PATH', BASE_PATH . '/config/');
define('VIEW_PATH', BASE_PATH . '/app/home/view/');
define('SYSTEM_PATH', BASE_PATH . '/system/');

// Autoload 自动载入
require BASE_PATH.'/vendor/autoload.php';

//whoops 错误提示
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


//时间
date_default_timezone_set(Amaya::get('config.time_zone'));

//载入路由
require APP_PATH.'route.php';



// monolog
if (!is_dir(BASE_PATH.'/logs/')) {
    mkdir(BASE_PATH.'/logs/', 0700);
}
$monolog = new \Monolog\Logger('system');
$monolog->pushHandler(new \Monolog\Handler\StreamHandler(BASE_PATH.'/logs/app.log', \Monolog\Logger::ERROR));



// cache
if (!is_dir(BASE_PATH.'/cache/')) {
    mkdir(BASE_PATH.'/cache/', 0700);
}
