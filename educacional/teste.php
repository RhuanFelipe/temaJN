<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}

	$usuario = new Usuarios();
	var_dump($usuario->findAll());
?>
