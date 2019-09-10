<?php 
	function __autoload($class_name){
		require_once '../classes/' . $class_name . '.php';
	}

	$senha = md5($_POST["senha"]);
	$matricula = strtoupper($_POST["matricula"]);

	$usuario = new Usuarios();
	$usuario->setNivel(4);
	$usuario->setIdUsuario(1);
	$usuario->setMatricula($matricula);
	$usuario->setSenha($senha);

	$usuario->insert();
	header("Location:login.php?success=1");

?>