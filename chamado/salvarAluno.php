<?php 
function __autoload($class_name){
	require_once '../classes/' . $class_name . '.php';
}

$nome = strtoupper($_POST['nome']);
$email = strtoupper($_POST['email']);
$periodo = $_POST['periodo'];
$sexo = strtoupper($_POST['sexo']);
$curso = $_POST['cursoAll'];
$turno = $_POST['turno'];
$matricula = $_POST['matricula_novo'];
$telefoneAluno = $_POST['telefone'];
$telefoneAluno = str_replace("(","",$telefoneAluno);
$telefoneAluno = str_replace(")","",$telefoneAluno);
$telefoneAluno = str_replace("-","",$telefoneAluno);
$telefoneAluno = str_replace(" ","",$telefoneAluno);

$pessoa = new Pessoa();
$usuario = new Usuarios();
$telefone = new Telefone();
$pessoa->setTipo(3);
$pessoa->setNome($nome);
$pessoa->setEmail($email);
$pessoa->setPeriodo($periodo);
$pessoa->setSexo($sexo);
$pessoa->setCurso($curso);
$pessoa->setTurno($turno);
$pessoa->insert();
$idPessoa = $pessoa->getIdPessoa();
$usuario->setNivel(3);
$usuario->setIdUsuario($idPessoa);
$usuario->setMatricula($matricula);
$usuario->insert();

$telefone->setTelefone($telefoneAluno);
$telefone->setTipoTelefone('1');
$telefone->setPessoaId($idPessoa);

$telefone->insert();

$pessoa_return          = $pessoa->findById($idPessoa);
$dados 					= $usuario->findById($idPessoa);
$return = $dados[0]->matricula_usuario ." - ". $pessoa_return[0]->nome_pessoa;

echo $return;

?>