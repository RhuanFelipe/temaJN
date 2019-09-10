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
  
  $dados          = $c->findById($id_chamado);
  $pessoa          = $p->findById($dados[0]->pessoa_id);
  $tipoRequerimento  = $tr->findById($dados[0]->tipo_requerimento_id);
  $grupoRequerimento  = $gr->findById($dados[0]->grupo_requerimento_id);
  $requerimento  = $req->findById($dados[0]->requerimento_id);

  $nome_pessoa           = $pessoa[0]->nome_pessoa;
  $assunto_chamado       = $dados[0]->assunto_chamado;
  $tipo_requerimento       = $tipoRequerimento[0]->opt_requerimento;
  $grupo_requerimento       = $grupoRequerimento[0]->desc_grupo;
  $requerimento       = $requerimento[0]->desc_requerimento;

  $return["assunto_chamado"] = $assunto_chamado;
  $return["nome_pessoa"] = $nome_pessoa;
  $return["tipo_requerimento"] = $tipo_requerimento;
  $return["grupo_requerimento"] = $grupo_requerimento;
  $return["requerimento"] = $requerimento;
  

 echo json_encode($return);


 ?>