<?php
  $encoding = 'UTF-8';

  $req = new Requerimento();
  $gr = new GrupoRequerimento();
  $requerimento = $req->findAll();
?>
 <!--main content start-->
<section id="main-content">
	 <section class="wrapper">
		 <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        REQUERIMENTO
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
                            <th scope="col">Requerimento</th>
                            <th scope="col">Grupo Requerimento</th>
                            <th scope="col">#</th>
                          </tr>
                        </thead>
                        <tbody>
                        	<?php  foreach ($requerimento as $rows) { 
                                    $grupoRequerimento = $gr->findById($rows->grupo_requerimento_id);
                            ?>
                        	<tr>
                              <td scope="col" ><?php echo mb_convert_case($rows->desc_requerimento, MB_CASE_UPPER, $encoding); ?></td>
                              <td scope="col" ><?php echo mb_convert_case($grupoRequerimento[0]->desc_grupo, MB_CASE_UPPER, $encoding); ?></td>
	                            <td scope="col" > 
                                  <a href="?p=formRequerimento&edit=1&id=<?php echo $rows->id_requerimento; ?>&grupoId=<?php echo $rows->grupo_requerimento_id; ?>" class="btn btn-success edit"  title="Editar">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                  <?php if($rows->ativo == 1){ ?>
                                    <a href="cadastramento/acaoRequerimento.php?acao=inative&id=<?php echo $rows->id_requerimento; ?>" class="btn btn-default edit"  title="Inativar">
                                        <i class="fa fa-times-circle-o"></i>
                                    </a>
                                  <?php }else{ ?>
                                     <a href="cadastramento/acaoRequerimento.php?acao=ative&id=<?php echo $rows->id_requerimento; ?>" class="btn btn-info edit"  title="Inativar">
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
                <a href="?p=formRequerimento" type="button" class="btn btn-success"><i class="fa fa-folder-open-o"></i> Cadastrar Requerimento </a>

            </div>
        </div>
	</section>
</section>