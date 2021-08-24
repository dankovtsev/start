<?php

/**
 * Поиск необходимого обработчика (роутинг)
 * @return string
 */
function get_handler_path() {
	global $configApp;

	//$uri = $_SERVER['REQUEST_URI']; убрано
	
	$action = $configApp['main_handler'];

	if (isset($_GET['handler'])) {
		$action = $_GET['handler'];
	} elseif ($action == '') {
		$action = 'site/404';
	}
	
	$handlerFilePath = HANDLERS_PATH . "/{$action}.php";

	if(file_exists($handlerFilePath)){
		return $handlerFilePath;
	}

	return HANDLERS_PATH . "/site/404.php";
}

/**
 * Запускает обработчик
 * @param $handlerFilePath
 */
function run_handler($handlerFilePath) {

    $handler = function () use ($handlerFilePath) {
        return get_handler_content($handlerFilePath);
    };

	return render_layout($handler);
}

/**
 * Получает контент из обработчика
 * @param $handlerFilePath
 * @return false|string
 */
function get_handler_content($handlerFilePath) {
	
	ob_start();
	
	require $handlerFilePath;
	
	$content = ob_get_contents();
	
	ob_get_clean();

	return $content;
}

// --begin

/**
 * Отрисовывает страничку
 * @param $handler
 */
function render_layout($handler) {

    $layout = get_layout();

    $content = $handler();

    include LAYOUT_PATH . "/{$layout}.php";
}

/**
 * Возвращает шаблон
 * @return mixed
 */
function get_layout() {

    global $configApp;

    return $configApp['default_layout'];
}

/**
 * Отрисовывает view
 * @param $view
 * @param array $params
 */
function render_view($view, $params = []){
    $viewFile = VIEW_PATH . "/{$view}.php";
    if(file_exists($viewFile)) {
        extract($params);
        require $viewFile;
    }
}

/**
 * Генерирует url
 * @param $action
 * @param array $params
 * @return string
 */
function get_url($action, $params = []) {
    if($action != '/') {
        $params['handler'] = $action;
    }

    return count($params) ? '?' . http_build_query($params) : '/';
}

/**
 * Переход на страницу
 * @param $handler Обработчик
 */
function redirect($handler)
{
    header("Location: ?handler={$handler}");
    die;
}

/**
 * Драйвер для работы с БД
 *
 * @return \PDO
 */
function db()
{
    $dbConfig = get_config('db');

    $dsn = "mysql:host={$dbConfig['db_host']};dbname={$dbConfig['db_name']};charset=UTF8";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    return new PDO($dsn, $dbConfig['db_user'], $dbConfig['db_pass'], $opt);
}

/**
 * Возвращает парамет из $_REQUEST
 *
 * @param string $param
 * @param string $default
 * @return mixed
 */
function get_param($param, $default = null)
{
    if (isset($_REQUEST[$param])) {
        return $_REQUEST[$param];
    }

    return $default;
}


