<?php
  $tr = new TipoRequerimento();
  $tipoRequerimento = $tr->findAll();
?>
 <!--main content start-->
<section id="main-content">
   <section class="wrapper">
     <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Tipo Requerimento
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
                            <th scope="col">Tipo Requerimento</th>
                            <th scope="col">#</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php  foreach ($tipoRequerimento as $rows) { ?>
                          <tr>
                              <td scope="col" width="90%"><?php echo $rows->opt_requerimento; ?></td>
                              <td scope="col" > 
                                  <a href="?p=formTipoRequerimento&edit=1&id=<?php echo $rows->id_requerimento; ?>" class="btn btn-success edit"  title="Editar">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                  <a href="cadastramento/acaoTipoRequerimento.php?acao=delete&id=<?php echo $rows->id_requerimento; ?>" class="btn btn-danger edit"  title="Excluir">
                                      <i class="fa fa-times-circle-o"></i>
                                  </a>
                              </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
                </section>
                <a href="?p=formTipoRequerimento" type="button" class="btn btn-success"><i class="fa fa-folder-open-o"></i> Cadastrar Tipo Requerimento </a>

            </div>
        </div>
  </section>
</section>