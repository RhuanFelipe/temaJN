<?php
	$tp = new TipoCurso();
	$tipoCurso = $tp->findAll();
?>
 <!--main content start-->
<section id="main-content">
	 <section class="wrapper">
		 <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Tipo Cursos
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
                            <th scope="col">Tipo Curso</th>
                            <th scope="col">#</th>
                          </tr>
                        </thead>
                        <tbody>
                        	<?php  foreach ($tipoCurso as $rows) { ?>
                        	<tr>
	                            <td scope="col" width="90%"><?php echo $rows->tipo_curso; ?></td>
	                            <td scope="col" > 
                                  <a href="?p=formTipoCurso&edit=1&id=<?php echo $rows->id_tipo_curso; ?>" class="btn btn-success edit"  title="Editar">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                  <a href="cadastramento/acaoTipoCurso.php?acao=delete&id=<?php echo $rows->id_tipo_curso; ?>" class="btn btn-danger edit"  title="Excluir">
                                      <i class="fa fa-times-circle-o"></i>
                                  </a>
                              </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
                </section>
                <a href="?p=formTipoCurso" type="button" class="btn btn-success"><i class="fa fa-folder-open-o"></i> Cadastrar Tipo Curso </a>

            </div>
        </div>
	</section>
</section>