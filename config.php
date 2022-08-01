<?php
	$autoload = function($class){
		include('classes/'.$class.'.php');
	};
	spl_autoload_register($autoload);
	//Local do arquivo Request
	define('INCLUDE_PATH', 'http://localhost/request_web/');
	//Local do arquivo do WebService
	define('SERVER_REQ', 'http://localhost/Web_service_1.0/');