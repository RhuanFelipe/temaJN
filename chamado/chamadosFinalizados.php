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
      $dados = $c->findAllChamadosFinalizados($dadosAcesso[0]->curso_id);
      $qtdChamados = $c->qtdChamadosCursoFinalizados($dadosAcesso[0]->curso_id);
    }else{
      $dados = $c->findAllOrder();
      $qtdChamados = $c->qtdChamados();
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
                     <form class="form-inline" >
                          <input class="chamado_click" type="text"  value="">

                      <div class="form-group">
                        <label for="email">Data:</label>
                        <input type="text" class="form-control dataInicio" id="dataInicio" >
                      </div>
                      <div class="form-group">
                        <label for="pwd">até:</label>
                        <input type="text" class="form-control dataFim" id="dataFim">
                      </div>
                      <button type="button" class="btn btn-info consultarChamadosFinalizado">Consultar</button>
                    </form>  
                    <div class="panel-body">
                            <p style="float: right;">Qtd. Chamados : <?php echo $qtdChamados; ?></p>
				<table id="fullTableChamado" class="table table-striped table-hover table-bordered  display" style="width:100%">
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
                     <tbody class="listarChamadosFinalizados">
                    
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