<?php 
function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$pessoa = new Pessoa();
$usuario = new Usuarios();
$acao = $_GET['acao'];

if($acao == 'insert'){
	$nome = strtoupper($_POST['nome']);
	$email = strtoupper($_POST['email']);
	$matricula = strtoupper($_POST['matricula']);
	$sexo = strtoupper($_POST['sexo']);
	$senha = md5($_POST['senha']);

	$pessoa->setTipo(2);
	$pessoa->setNome($nome);
	$pessoa->setEmail($email);
	$pessoa->setSexo($sexo);
	$pessoa->insert();
	$idPessoa = $pessoa->getIdPessoa();
	$usuario->setNivel(2);
	$usuario->setIdUsuario($idPessoa);
	$usuario->setMatricula($matricula);
	$usuario->setSenha($senha);
	$usuario->insert();
	header('Location: ../index.php?p=cadAtendente');
}else if($acao == 'update'){
	$nome = strtoupper($_POST['nome']);
	$email = strtoupper($_POST['email']);
	$matricula = strtoupper($_POST['matricula']);
	$sexo = strtoupper($_POST['sexo']);
	$id = $_REQUEST['id'];
	$senha = md5($_POST['senha']);

	$pessoa->setTipo(2);
	$pessoa->setNome($nome);
	$pessoa->setEmail($email);
	$pessoa->setSexo($sexo);
	$pessoa->update($id);
	$idPessoa = $pessoa->getIdPessoa();
	$usuario->setNivel(2);
	$usuario->setMatricula($matricula);
	$usuario->setSenha($senha);
	$usuario->update($id);

	header('Location: ../index.php?p=cadAtendente');
}else if($acao == 'inative'){
	$id = $_REQUEST['id'];
	$usuario->inative($id);
	$pessoa->inative($id);
	header('Location: ../index.php?p=cadAtendente');
}else if($acao == 'ative'){
	$id = $_REQUEST['id'];
	$usuario->ative($id);
	$pessoa->ative($id);
	header('Location: ../index.php?p=cadAtendente');
}
