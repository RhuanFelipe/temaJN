 <?php 
  session_start();
 include "../../biblioteca/util.php";
 function __autoload($class_name){
   require_once '../../classes/' . $class_name . '.php';
 }
  $encoding = 'UTF-8';

  $usuario = new Usuarios();
  $pessoa = new Pessoa();
  $c = new Chamado();
  $curso = new Curso();
  $requerimento = new Requerimento();
  $tipoRequerimento = new TipoRequerimento();
  $grupoRequerimento = new GrupoRequerimento();
  $dataInicio = datasql(@$_REQUEST['dataInicio']);
  $dataFim = datasql(@$_REQUEST['dataFim']);
  
    if($_SESSION['nivel_id'] == 1){
      $dadosAcesso = $pessoa->findById($_SESSION['usuario_id']);
      $dados = $c->findAllChamadosFinalizadosPeriodo($dadosAcesso[0]->curso_id,$dataInicio,$dataFim);
      $qtdChamados = $c->qtdChamadosCurso($dadosAcesso[0]->curso_id);
    }else{
      $dados = $c->findAllOrder();
      $qtdChamados = $c->qtdChamados();
    }
 // $usuario->findDados($matricula);

    foreach ($dados as $rows) {

      $users = $usuario->findDadosId($rows->pessoa_id);
      $ps = $pessoa->findById($rows->pessoa_id);
      $cs = $curso->findById($rows->curso_id);
      $req = $requerimento->findById($rows->requerimento_id);
      $tr = $tipoRequerimento->findById($rows->tipo_requerimento_id);
      $gr = $grupoRequerimento->findById($rows->grupo_requerimento_id);
   ?>
  <tr class="modal-desc">
    <td width="13%"><?php echo date('d/m/Y - H:i', strtotime($rows->data_abertura)); ?>
      <input type="hidden"  class="chamado_click" name="">
    </td>
    <th scope="row"><?php echo $users->matricula_usuario; ?></th>
    <td class="nome_pessoa_<?php echo $rows->id_chamado; ?>"><?php echo mb_convert_case($ps[0]->nome_pessoa, MB_CASE_UPPER, $encoding); ?></td>
    <td><?php echo  mb_convert_case($cs[0]->nome_curso, MB_CASE_UPPER, $encoding); ?></td>
    <td class="req_<?php echo $rows->id_chamado; ?>"><?php echo mb_convert_case($req[0]->desc_requerimento, MB_CASE_UPPER, $encoding); ?></td>
    <td scope="row" align="center">

   <button type="button" class="btn btn-info verFinalizado" data-toggle="modal" data-id-chamado = "<?php echo $rows->id_chamado; ?>" data-target="#exampleModalCenter" title="vizualizar chamado">
      		<i class="fa fa-eye"></i>
      </button>
      <?php 
        if($_SESSION['nivel_id'] == 2){

        	if($rows->status == 0 && $rows->status != '') 
        		echo "Cancelado";
        	else if($rows->status == 1) 
        		echo "Finalizado";
        	else
        		echo "Aberto";
        }
       ?>
<?php if($_SESSION['nivel_id'] == 1) {
	
	 if($rows->status == 9) {?>
          <a href="#" class="btn btn-success concluir" id="<?php echo $rows->id_chamado; ?>">
          	<i class="fa fa-check" title="Finalizar Chamado"></i>
          </a>

          <a href="#" class="btn btn btn-danger cancelar" title="Cancelar Chamado" id="<?php echo $rows->id_chamado; ?>">
         			<i class="fa fa-ban"></i>
          </a>

          <?php }else if($rows->status == 1){ 
          		echo "finalizado!";
          	}else {
          		echo "Cancelado!";
          	}
           } ?>
       </td>
  </tr>
  <?php } ?>
  <script type="text/javascript" src="chamado/js/acoesChamado.js"></script>
<script>
$(function(){
 $('#simpleTableChamado').DataTable();
	 $('#fullTableChamado').DataTable({
         dom: 'Bfrtip',

		buttons: [
            {extend: 'excel', text: '<i class="glyphicon glyphicon-th"></i> Excel' },{extend: 'pdf', text: '<i class="glyphicon glyphicon-file"></i> PDF' },{ extend: 'print', text: '<i class="glyphicon glyphicon-print"></i> Imprimir' }
        ]
      });
	 	  $.fn.dataTable.ext.errMode = 'throw';

});
</script>
</script>
