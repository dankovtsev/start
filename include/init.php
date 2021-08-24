<?php

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', true);


define('APP_PATH', __DIR__ . '/../');
define('HANDLERS_PATH', APP_PATH . '/handlers');
define('LAYOUT_PATH', APP_PATH . '/views/layouts');
define('CONFIG_PATH', APP_PATH . '/config');
define('VIEW_PATH', APP_PATH . '/views');

//подключение конфигурации приложения
require_once 'config.php';

$configApp = get_config('app');

//подключения ядра приложения
require_once 'core.php';
