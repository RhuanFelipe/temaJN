 <?php 
 session_start();
$encoding = 'UTF-8';

 include "../../biblioteca/util.php";
 function __autoload($class_name){
   require_once '../../classes/' . $class_name . '.php';
 }
  $usuario = new Usuarios();
  $pessoa = new Pessoa();
  $c = new Chamado();
  $curso = new Curso();
  $dataInicio = datasql(@$_REQUEST['dataInicio']);
  $dataFim = datasql(@$_REQUEST['dataFim']);

  $requerimento = new Requerimento();
  $tipoRequerimento = new TipoRequerimento();
  $grupoRequerimento = new GrupoRequerimento();

    if($_SESSION['nivel_id'] == 1){
      $dadosAcesso = $pessoa->findById($_SESSION['usuario_id']);
      $dados = $c->findAllChamadosAbertosCursoPeriodo($dadosAcesso[0]->curso_id,$dataInicio,$dataFim);
      $qtdChamados = $c->qtdChamadosCursoAbertos($dadosAcesso[0]->curso_id);
    }else{
      $dados = $c->findAllChamadosAbertosPeriodo($dataInicio,$dataFim);
      $qtdChamados = $c->qtdChamadosAbertos();
    }
  //$usuario->findDados($matricula);
  foreach ($dados as $rows) {

    $users = $usuario->findDadosId($rows->pessoa_id);
    $ps = $pessoa->findById($rows->pessoa_id);
    $cs = $curso->findById($rows->curso_id);
    $req = $requerimento->findById($rows->requerimento_id);
    $tr = $tipoRequerimento->findById($rows->tipo_requerimento_id);
    $gr = $grupoRequerimento->findById($rows->grupo_requerimento_id);
 ?>

<tr class="modal-desc">                             
  <td  width="10%" title="<?php  echo date('d/m/Y - H:i', strtotime($rows->data_abertura)); ?>"><?php echo date('d/m/Y', strtotime($rows->data_abertura)); ?></td>
  <th scope="row" width="10%"><?php echo $users->matricula_usuario; ?>
     <input type="hidden"  class="chamado_click" name="">
  </th>
  <td class="" width="15%"><?php echo mb_convert_case($ps[0]->nome_pessoa, MB_CASE_UPPER, $encoding); ?></td>
  <td width="15%"><?php echo mb_convert_case($cs[0]->nome_curso, MB_CASE_UPPER, $encoding);  ?></td>
  <td scope="row" width="15%"><?php echo  mb_convert_case($req[0]->desc_requerimento, MB_CASE_UPPER, $encoding); ?></td>
  <td scope="row" align="center" width="17%">

    <button type="button" class="btn btn-info ver" data-toggle="modal" data-id-chamado = "<?php echo $rows->id_chamado; ?>" data-target="#exampleModalCenter" title="vizualizar chamado">
    		<i class="fa fa-eye"></i>
    </button>
    <?php 
      if($_SESSION['nivel_id'] == 2){
      	
      ?>
      <a href="?p=abrirChamado&edit=1&id=<?php echo $rows->id_chamado; ?>&id_pessoa=<?php echo $rows->pessoa_id; ?>" class="btn btn-success edit"  title="Editar Chamado">
        <i class="fas fa-edit"></i>
      </a>
       <a href="#" class="btn btn btn-danger excluir" title="Excluir Chamado" id="<?php echo $rows->id_chamado; ?>">
            <i class="fa fa-eraser"></i>
        </a>
    <?php
      	
      }
     ?>
<?php if($_SESSION['nivel_id'] == 1) {

 if($rows->status == 9) {?>
        <a href="#" class="btn btn-success data-id-chamado" data-id-chamado = "<?php echo $rows->id_chamado; ?>" data-toggle="modal" data-target="#modalConcluir">
        	<i class="fa fa-check" title="Finalizar Chamado"></i>
        </a>

        <a href="#" class="btn btn btn-danger" title="Cancelar Chamado"  data-toggle="modal" data-target="#modalCancelar"  id="<?php echo $rows->id_chamado; ?>">
       			<i class="fa fa-ban"></i>
        </a>
         <a href="#" class="btn btn btn-warning" title="Encaminhar Chamado"  data-toggle="modal" data-target="#modalEncaminhar"  id="<?php echo $rows->id_chamado; ?>">
            <i class="fa fa-mail-forward"></i>
        </a>

        <?php }else if($rows->status == 1){ 
        		echo "finalizado!";
        	}else {
        		echo "Cancelado!";
        	}
         } ?>
     </td>
</tr>
<?php }  ?>

  <script type="text/javascript" src="chamado/js/acoesChamado.js"></script>
<script>
$(function(){
 $('#simpleTableChamado').DataTable();
	 $('#fullTableChamado').DataTable({
         dom: 'Bfrtip',
		 paging: false,
    searching: false,

		buttons: [
            {extend: 'excel', text: '<i class="glyphicon glyphicon-th"></i> Excel' },{extend: 'pdf', text: '<i class="glyphicon glyphicon-file"></i> PDF' },{ extend: 'print', text: '<i class="glyphicon glyphicon-print"></i> Imprimir' }
        ]
      });
	  $.fn.dataTable.ext.errMode = 'throw';
});
</script>
