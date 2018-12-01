<?php
  $encoding = 'UTF-8';

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

                    <table id="simpleTable" class="table table-striped table-hover table-bordered  display" style="width:100%">
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
                              <td scope="col" ><?php echo  mb_convert_case($rows->nome_curso, MB_CASE_UPPER, $encoding); ?></td>
                              <td scope="col" ><?php echo mb_convert_case($tipoCurso[0]->tipo_curso, MB_CASE_UPPER, $encoding);  ?></td>
	                            <td scope="col" > 
                                  <a href="?p=formCurso&edit=1&id=<?php echo $rows->id_curso; ?>&tipoId=<?php echo $rows->tipo_curso_id; ?>" class="btn btn-success edit"  title="Editar">
                                      <i class="fas fa-edit"></i>
                                  </a>
                                  <?php if($rows->ativo == 1){ ?>
                                    <a href="cadastramento/acaoCurso.php?acao=inative&id=<?php echo $rows->id_curso; ?>" class="btn btn-default edit"  title="Inativar">
                                        <i class="fas fa-times-circle"></i>
                                    </a>
                                  <?php }else{ ?>
                                     <a href="cadastramento/acaoCurso.php?acao=ative&id=<?php echo $rows->id_curso; ?>" class="btn btn-info edit"  title="Ativar">
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
                <a href="?p=formCurso" type="button" class="btn btn-success"><i class="far fa-folder-open"></i> Cadastrar Curso </a>

            </div>
        </div>
	</section>
</section>