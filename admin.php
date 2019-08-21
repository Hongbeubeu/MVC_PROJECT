<?php 
	define('PATH_SYSTEM',      __DIR__ .'/system');
	define('PATH_APPLICATION', __DIR__ .'/app');
	define('URL_ROOT', 'http://localhost/demo_mvc');
	include_once (PATH_SYSTEM . '/bootstrap.php');

	$init = new core();
?>