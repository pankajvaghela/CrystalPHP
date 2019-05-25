<?php
/*******************************************************************************
 *
 *   CrystalPHP Framework by Crystal Collective
 *   An open source application development framework for PHP
 *
 *   This file is part of CrystalPHP which is released under the MIT License (MIT)
 *
 *   Copyright (c) 2019 - 2019, Crystal Collective
 *
 *   For the full copyright and license information,
 *   please view the LICENSE file that was distributed with this source code.
 *
 ******************************************************************************/

$_SERVER['REQUEST_TIME_SCRIPT_START'] = microtime(true);
$root_path = $_SERVER['DOCUMENT_ROOT'];

// Windows IIS Compatibility
if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'){
	define('IS_WINDOWS', true);
	$root_path = str_replace('\\', '/', $root_path);
}

define('DIR_ROOT', $root_path);
define('DIR_BASE', $root_path);

require_once "vendor/autoload.php";

use \CrystalPHP\App as App;
use \CrystalPHP\Registry as Registry;
use \CrystalPHP\Router\Router as Router;

App::app(new Registry())->initialize();



Router::get("/", function(){
	echo "Crystal Home";
});

$router = new Router();

$router->resolve("/");
