<?php 
  header("Content-Type: application/json; charset=utf-8"); 

   function __autoload($class_name){
      require_once '../../classes/' . $class_name . '.php';
    }
  $return = array();
  
  $id_chamado = $_REQUEST['id'];
  $c = new Chamado();
  $p = new Pessoa();
  $tr = new TipoRequerimento();
  $gr = new GrupoRequerimento();
  $req = new Requerimento();

  $dados 					= $c->findById($id_chamado);
  $pessoa_id 			    = $dados[0]->pessoa_id;
  $pessoa 					= $p->findById($id_chamado);
  $nome_pessoa 				= $pessoa[0]->nome_pessoa;
  $assunto_chamado 			= $dados[0]->assunto_chamado;

  $tipo_requerimento_id 	= $dados[0]->tipo_requerimento_id;
  $tipoRequerimento 		= $tr->findById($tipo_requerimento_id);
  $opcao_requerimento 		= $tipoRequerimento[0]->opt_requerimento;
  
  $grupo_requerimento_id 	= $dados[0]->grupo_requerimento_id;
  $grupoRequerimento 		= $gr->findById($grupo_requerimento_id);
  $grupoRequerimento_desc   = $grupoRequerimento[0]->desc_grupo;
  
  $requerimento_id 			= $dados[0]->requerimento_id;
  $requerimento 			= $req->findById($requerimento_id);
  $requerimento_desc 		= $requerimento[0]->desc_requerimento;

  $return["nome_pessoa"] = $nome_pessoa;
  $return["assunto_chamado"] = $assunto_chamado;
  $return["opcao_requerimento"] = $opcao_requerimento;
  $return["grupoRequerimento_desc"] = $grupoRequerimento_desc;
  $return["requerimento_desc"] = $requerimento_desc;

 echo json_encode($return);


 

 ?>