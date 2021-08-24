<?php
/**
 *	Возвращает параметры конфигурации из файла
 *	@param sting $configName
 *	@return array|null
 */
function get_config($configName){
	$configPath = CONFIG_PATH . "/{$configName}.php";

	if(file_exists($configPath)){
		return require $configPath;
	}

	return null;
}