<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
	$matricula = $_POST["matricula"];
	$senha = $_POST["senha"];
	$usuario = new Usuarios();
	$usuario->logarSistema($matricula,$senha);

	if(isset($_REQUEST["acao"])){
		if($_REQUEST["acao"] == "deslogar" && isset($_REQUEST["matricula"])){
			$usuario->deslogar($_REQUEST["matricula"]);
		}
	}

?>
