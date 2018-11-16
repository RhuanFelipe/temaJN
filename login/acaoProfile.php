<?php 

function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$pessoa = new Pessoa();
$usuario = new Usuarios();
$acao = $_GET['acao'];

if($acao == 'insert'){
	$matricula = strtoupper($_POST['matricula']);
	$senha = md5($_POST['senha']);
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	
	$usuario->setIdUsuario($id);
	$usuario->setNivel(4);
	$usuario->setMatricula($matricula);
	$usuario->setSenha($senha);
	$usuario->atualizarProfile();
	header("Location: ..\index.php");
}