<?php
  $encoding = 'UTF-8';

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
                              <td scope="col" width="70%"><?php echo mb_convert_case($rows->desc_grupo, MB_CASE_UPPER, $encoding); ?></td>
                              <td scope="col" ><?php echo mb_convert_case($tipoRequerimento[0]->opt_requerimento, MB_CASE_UPPER, $encoding); ?></td>
                                <td scope="col" > 
                                  <a href="?p=formGrupoRequerimento&edit=1&id=<?php echo $rows->id_grupo; ?>&tipoRequerimentoId=<?php echo $rows->tipo_requerimento_id; ?>" class="btn btn-success edit"  title="Editar">
                                      <i class="fas fa-edit"></i>
                                  </a>
                                  <?php if($rows->ativo == 1){ ?>
                                    <a href="cadastramento/acaoGrupoRequerimento.php?acao=inative&id=<?php echo $rows->id_grupo; ?>" class="btn btn-default edit"  title="Inativar">
                                        <i class="fas fa-times-circle"></i>
                                    </a>
                                  <?php }else{ ?>
                                     <a href="cadastramento/acaoGrupoRequerimento.php?acao=ative&id=<?php echo $rows->id_grupo; ?>" class="btn btn-info edit"  title="Ativar">
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
                <a href="?p=formGrupoRequerimento" type="button" class="btn btn-success"><i class="far fa-folder-open"></i> Cadastrar Grupo Requerimento </a>

            </div>
        </div>
    </section>
</section>