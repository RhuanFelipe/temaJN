<?php 
	header("Content-Type: application/json; charset=utf-8"); 

    function __autoload($class_name){
      require_once '../classes/' . $class_name . '.php';
    }

	$matricula = $_REQUEST['matricula'];
	$p = new Pessoa();
	if(strlen($matricula) == 8){
		$usuario = $p->findMatricula($matricula);
		$return = count($usuario);
		echo json_encode($return);
	}
	
?>