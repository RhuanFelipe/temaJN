<?php 
  header("Content-Type: application/json; charset=utf-8"); 

   function __autoload($class_name){
      require_once 'classes/' . $class_name . '.php';
    }

  $usuario = new Usuarios();
  $p = new Pessoa();
  $return = array();
  $matricula = $_REQUEST['matricula'];
  $pessoa = array();
  $lista = array();
  $dados = $usuario->findUsuarioMatricula($matricula);

  for ($i= 0;$i < count($dados);$i++){  
      $pessoa          = $p->findById($dados[$i]->id_usuario);
      
      for($j=0;$j < count($pessoa);$j++){
        $return[]["nome_pessoa"] = $dados[$i]->matricula_usuario ." - ". $pessoa[$j]->nome_pessoa;
      }

  }
    echo json_encode($return);

?>