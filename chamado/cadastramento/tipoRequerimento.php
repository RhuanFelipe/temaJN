<?php
  $encoding = 'UTF-8';

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
                              <td scope="col" width="90%"><?php echo mb_convert_case($rows->opt_requerimento, MB_CASE_UPPER, $encoding); ?></td>
                              <td scope="col" > 
                                  <a href="?p=formTipoRequerimento&edit=1&id=<?php echo $rows->id_requerimento; ?>" class="btn btn-success edit"  title="Editar">
                                      <i class="fas fa-edit"></i>
                                  </a>
                                  <?php if($rows->ativo == 1){ ?>

                                    <a href="cadastramento/acaoTipoRequerimento.php?acao=inative&id=<?php echo $rows->id_requerimento; ?>" class="btn btn-default edit"  title="Inativar">
                                        <i class="fas fa-times-circle"></i>
                                    </a>

                                  <?php }else{ ?>

                                    <a href="cadastramento/acaoTipoRequerimento.php?acao=ative&id=<?php echo $rows->id_requerimento; ?>" class="btn btn-info edit"  title="Ativar">
                                          <i class="fa fa-check"></i>
                                      </a>

                                  <?php } ?>
                              </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
                </section>
                <a href="?p=formTipoRequerimento" type="button" class="btn btn-success"><i class="far fa-folder-open"></i> Cadastrar Tipo Requerimento </a>

            </div>
        </div>
  </section>
</section>