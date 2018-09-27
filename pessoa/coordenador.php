<?php
  $p = new Pessoa();
  $pessoa = $p->findCoordenador();
?>
 <!--main content start-->
<section id="main-content">
	 <section class="wrapper">
		 <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Coordenador
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
                            <th scope="col">Matricula</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Email</th>
                            <th scope="col">#</th>
                          </tr>
                        </thead>
                        <tbody>
                        	<?php  foreach ($pessoa as $rows) { 
                              $c = new Curso();
                              $curso = $c->findById($rows->curso_id);
                          ?>

                        	<tr>
                              <td scope="col" ><?php echo $rows->matricula_usuario; ?></td>
                              <td scope="col" ><?php echo $rows->nome_pessoa; ?></td>
                              <td scope="col" ><?php echo $curso[0]->nome_curso; ?></td>
                              <td scope="col" ><?php echo $rows->email_pessoa; ?></td>
	                            <td scope="col" > 
                                  <a href="?p=formCoordenador&edit=1&id=<?php echo $rows->id_pessoa; ?>" class="btn btn-success edit"  title="Editar">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                  <?php if($rows->ativo == 1){ ?>
                                      <a href="pessoa/acaoCoordenador.php?acao=inative&id=<?php echo $rows->id_pessoa; ?>" class="btn btn-default edit"  title="Inativar">
                                          <i class="fa fa-times-circle-o"></i>
                                      </a>
                                  <?php }else{ ?>
                                     <a href="pessoa/acaoCoordenador.php?acao=ative&id=<?php echo $rows->id_pessoa; ?>" class="btn btn-info edit"  title="Inativar">
                                          <i class="fa fa-times-circle-o"></i>
                                      </a>
                                  <?php } ?>
                              </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
                </section>
                <a href="?p=formCoordenador" type="button" class="btn btn-success"><i class="fa fa-folder-open-o"></i> Cadastrar Coordenador </a>

            </div>
        </div>
	</section>
</section>