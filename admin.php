<?php 
	define('PATH_SYSTEM', __DIR__.'/system');
	define('PATH_APPLICATION', __DIR__.'/admin');

	require (PATH_SYSTEM. '/config/config.php');


		// Require controller
	include_once PATH_SYSTEM . '/core/FT_Common.php';

		// Chạy controller
	FT_load();
?>