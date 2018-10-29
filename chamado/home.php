 <?php 
  $usuario = new Usuarios();
  $pessoa = new Pessoa();
  $c = new Chamado();
  $curso = new Curso();
  $requerimento = new Requerimento();
  $tipoRequerimento = new TipoRequerimento();
  $grupoRequerimento = new GrupoRequerimento();
  
    if($_SESSION['nivel_id'] == 1){
      $dadosAcesso = $pessoa->findById($_SESSION['usuario_id']);
      $dados = $c->findAllChamadosAbertosCurso($dadosAcesso[0]->curso_id);
      $qtdChamados = $c->qtdChamadosCursoAbertos($dadosAcesso[0]->curso_id);
    }else{
      $dados = $c->findAllChamadosAbertos();
      $qtdChamados = $c->qtdChamadosAbertos();
    }
  $usuario->findDados($matricula);
?>

 <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Tela de Chamados
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                      <p style="float: right;">Qtd. Chamados : <?php echo $qtdChamados; ?></p>
                  <input class="chamado_click" type="hidden"  value="">
                  <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">

				         <table id="fullTable" class="table table-striped table-hover table-bordered  display chamadoTable" style="width:100%">
			                   <thead>
                              <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Mat.</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Curso</th>
                                <th scope="col">Requerimento</th>
                                <th scope="col">#</th>
                              </tr>
                            </thead>
                             <tbody>
                              <?php 
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
                                <th scope="row"><?php echo $users->matricula_usuario; ?></th>
                                <td class=""><?php echo utf8_encode($ps[0]->nome_pessoa); ?></td>
                                <td ><?php echo $cs[0]->nome_curso; ?></td>
                                <td ><?php echo $req[0]->desc_requerimento; ?></td>
                                <td scope="row" align="center" width="17%">

                                  <button type="button" class="btn btn-info ver" data-toggle="modal" data-id-chamado = "<?php echo $rows->id_chamado; ?>" data-target="#exampleModalCenter" title="vizualizar chamado">
                                  		<i class="fa fa-eye"></i>
                                  </button>
                                  <?php 
	                                  if($_SESSION['nivel_id'] == 2){
	                                  	
                                    ?>
                                    <a href="?p=abrirChamado&edit=1&id=<?php echo $rows->id_chamado; ?>&id_pessoa=<?php echo $rows->pessoa_id; ?>" class="btn btn-success edit"  title="Editar Chamado">
                                      <i class="fa fa-pencil"></i>
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
                              <?php } ?>
                          </tbody>
			           </table>
       				</div>
            </section>
        </div>
    </div>
        <input type="hidden" name="id_chamado" id="id_chamado" value="0">

    <?php if($_SESSION['nivel_id'] == 2){ ?>
    <a href="?p=abrirChamado" type="button" class="btn btn-success"><i class="fa fa-folder-open-o"></i> Abrir Chamado </a>
    <?php } ?>
    <!-- page end-->
    </section>
</section>
<!--main content end-->
 <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Chamado</h5>
          </div>
            <div class="modal-body">
              <h4 class="label-nome" align="center"></h4><br>
              <p><b>Tipo Requerimento:  </b><label class="label-tipo-requerimento"></label></p>
              <p><b>Grupo Requerimento:  </b><label class="label-grupo-requerimento"></label></p>
              <p><b>Requerimento:  </b><label class="label-requerimento"></label></p>
              <p><b>Assunto:  </b><label class="label-assunto"></label></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
      </div>
    </div>

<!--main content end-->
 <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Chamado</h5>
          </div>
            <div class="modal-body">
              <h4 class="label-nome" align="center"></h4><br>
              <p><b>Tipo Requerimento:  </b><label class="label-tipo-requerimento"></label></p>
              <p><b>Grupo Requerimento:  </b><label class="label-grupo-requerimento"></label></p>
              <p><b>Requerimento:  </b><label class="label-requerimento"></label></p>
              <p><b>Assunto:  </b><label class="label-assunto"></label></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
      </div>
    </div>
     <!-- Modal -->
    <div class="modal fade" id="modalConcluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Concluir Chamado</h5>
          </div>
            <div class="modal-body">
              <h4 class="label-nome" align="center"></h4><br>
              <p><b>Conclusão Chamado:  </b></p>
              <p>  <textarea class="form-control" rows="5" id="assunto_chamado"></textarea></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success concluir" >Finalizar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
      </div>
    </div>
       <!-- Modal -->
    <div class="modal fade" id="modalCancelar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Cancelar Chamado</h5>
          </div>
            <div class="modal-body">
              <h4 class="label-nome" align="center"></h4><br>
              <p><b>Motivo:  </b>
                <select class="form-control m-bot15 motivo" id="motivo">
                 
                </select>
              </p>
              <p><b>Conclusão Chamado:  </b></p>
              <p>  <textarea class="form-control" rows="5" id="comment"></textarea></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger cancelar" >Cancelar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
      </div>
    </div>

     <!-- Modal -->
    <div class="modal fade" id="modalEncaminhar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Encaminhar Chamado</h5>
          </div>
            <div class="modal-body">
              <h4 class="label-nome" align="center"></h4><br>
              <p><b>Tipo Curso:  </b>
                <select class="form-control m-bot15 tipoCurso" name="tipoCurso" id="tipoCurso">
                  <option></option>
                </select>
              </p>
              <p><b>Curso:  </b>
                <select class="form-control m-bot15 curso cursoCoordenador" name="curso" id="curso">
                  <option></option>
                </select>
              </p>
               <p><b>Coordenador:  </b>
                <select class="form-control m-bot15 coordenadorCurso" name="coordenador" id="coordenador">
                  <option value="">selecione um coordenador...</option>
                </select>              
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning encaminhar" >Encaminhar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
      </div>
    </div>
<style type="text/css">
  .chamadoTable tr td,.chamadoTable tr th{font-size: 8pt}
</style>