 <?php 
 
  
  $usuario = new Usuarios();
  $pessoa = new Pessoa();
  $c = new Chamado();
  $curso = new Curso();
  $requerimento = new Requerimento();
  $tipoRequerimento = new TipoRequerimento();
  $grupoRequerimento = new GrupoRequerimento();

  $dados = $c->findAll();
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
                        <table class="table">
                           <thead>
                              <tr>
                                <th scope="col">Mat.</th>
                                <th scope="col">Data</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Curso</th>
                                <th scope="col">Requerimento</th>
                                <th scope="col">#</th>
                              </tr>
                            </thead>
                             <tbody>
                              <?php 
                                foreach ($dados as $rows) {
                                  $users = $usuario->findDadosId($rows->usuario_id);
                                  $ps = $pessoa->findById($rows->usuario_id);
                                  $cs = $curso->findById($rows->curso_id);
                                  $req = $requerimento->findById($rows->requerimento_id);
                                  $tr = $tipoRequerimento->findById($rows->tipo_requerimento_id);
                                  $gr = $grupoRequerimento->findById($rows->grupo_requerimento_id);
                               ?>
                              <tr class="modal-desc">
                                <input class="tp_<?php echo $rows->id_chamado; ?>" type="hidden" name="" value="<?php echo utf8_encode($tr[0]->opt_requerimento); ?>">
                                <input class="gr_<?php echo $rows->id_chamado; ?>" type="hidden" name="" value="<?php echo utf8_encode($gr[0]->desc_grupo); ?>">
                                <input class="assunto_<?php echo $rows->id_chamado; ?>" type="hidden" name="" value="<?php echo $rows->assunto_chamado; ?>">
                                <th scope="row"><?php echo $users->matricula_usuario; ?></th>
                                <td><?php echo $rows->data_abertura; ?></td>
                                <td class="nome_pessoa_<?php echo $rows->id_chamado; ?>"><?php echo $ps[0]->nome_pessoa; ?></td>
                                <td><?php echo utf8_encode($cs[0]->nome_curso); ?></td>
                                <td class="req_<?php echo $rows->id_chamado; ?>"><?php echo utf8_encode($req[0]->desc_requerimento); ?></td>
                                <td scope="row" ><a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="ver">VER</a></td>
                              </tr>
                              <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->