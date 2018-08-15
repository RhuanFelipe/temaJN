<?php
  $cs = new Curso();
  $tp = new TipoCurso();
  $curso = $cs->findAll();
?>
 <!--main content start-->
<section id="main-content">
	 <section class="wrapper">
		 <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Cursos
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">

                    <table id="example" class="table table-striped table-hover table-bordered  display" style="width:100%">
		                <thead>
                          <tr>
                            <th scope="col">Curso</th>
                            <th scope="col">Tipo Curso</th>
                            <th scope="col">#</th>
                          </tr>
                        </thead>
                        <tbody>
                        	<?php  foreach ($curso as $rows) { 
                                    $tipoCurso = $tp->findById($rows->tipo_curso_id);
                            ?>
                        	<tr>
                              <td scope="col" ><?php echo $rows->nome_curso; ?></td>
                              <td scope="col" ><?php echo $tipoCurso[0]->tipo_curso; ?></td>
	                            <td scope="col" > 
                                  <a href="?p=formCurso&edit=1&id=<?php echo $rows->id_curso; ?>&tipoId=<?php echo $rows->tipo_curso_id; ?>" class="btn btn-success edit"  title="Editar">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                  <a href="cadastramento/acaoCurso.php?acao=delete&id=<?php echo $rows->id_curso; ?>" class="btn btn-danger edit"  title="Excluir">
                                      <i class="fa fa-times-circle-o"></i>
                                  </a>
                              </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
                </section>
                <a href="?p=formCurso" type="button" class="btn btn-success"><i class="fa fa-folder-open-o"></i> Cadastrar Curso </a>

            </div>
        </div>
	</section>
</section>