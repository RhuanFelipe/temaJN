<?php
  $gr = new GrupoRequerimento();
  $tr = new TipoRequerimento();
  $grupoRequerimento = $gr->findAll();
?>
 <!--main content start-->
<section id="main-content">
     <section class="wrapper">
         <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        GRUPO REQUERIMENTO
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">

                    <table id="simpleTable" class="table table-striped table-hover table-bordered  display" style="width:100%">
                        <thead>
                          <tr>
                            <th scope="col">Grupo Requerimento</th>
                            <th scope="col">Tipo Requerimento</th>
                            <th scope="col">#</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php  foreach ($grupoRequerimento as $rows) { 
                                    $tipoRequerimento = $tr->findById($rows->tipo_requerimento_id);
                            ?>
                            <tr>
                              <td scope="col" width="70%"><?php echo $rows->desc_grupo; ?></td>
                              <td scope="col" ><?php echo $tipoRequerimento[0]->opt_requerimento; ?></td>
                                <td scope="col" > 
                                  <a href="?p=formGrupoRequerimento&edit=1&id=<?php echo $rows->id_grupo; ?>&tipoRequerimentoId=<?php echo $rows->tipo_requerimento_id; ?>" class="btn btn-success edit"  title="Editar">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                  <a href="cadastramento/acaoGrupoRequerimento.php?acao=delete&id=<?php echo $rows->id_grupo; ?>" class="btn btn-danger edit"  title="Excluir">
                                      <i class="fa fa-times-circle-o"></i>
                                  </a>
                              </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
                </section>
                <a href="?p=formGrupoRequerimento" type="button" class="btn btn-success"><i class="fa fa-folder-open-o"></i> Cadastrar Grupo Requerimento </a>

            </div>
        </div>
    </section>
</section>