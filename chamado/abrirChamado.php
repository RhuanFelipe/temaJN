 <?php 
    @$idChamado = $_GET['id'];
    @$edit = $_GET['edit'];
    $botao = 'Abrir chamado';

    if(isset($_GET['success'])){
      $style = 'display:block';
    }else{
      $style = 'display:none';
    }
?>
<section id="main-content">
  <form method="post" action="chamado/chamado.php">
    <?php 
     if($idChamado != "" && $edit == 1){
        $c = new Chamado();
        $chamado = $c->findById($idChamado);
        $botao = 'Alterar chamado';

         ?>       
            <input type="hidden" name="id_chamado" class="id_chamado" value="<?php echo $chamado[0]->id_chamado;?>">
            <input type="hidden" name="tipo_curso_id" class="tipo_curso_id" value="<?php echo $chamado[0]->tipo_curso_id;?>">
            <input type="hidden" name="curso_id" class="curso_id" value="<?php echo $chamado[0]->curso_id;?>">
            <input type="hidden" name="pessoa_id" class="pessoa_id" value="<?php echo $chamado[0]->pessoa_id;?>">
            <input type="hidden" name="unidade_id" class="unidade_id" value="<?php echo $chamado[0]->unidade_id;?>">
            <input type="hidden" name="tipo_requerimento_id" class="tipo_requerimento_id" value="<?php echo $chamado[0]->tipo_requerimento_id;?>">
            <input type="hidden" name="grupo_requerimento_id" class="grupo_requerimento_id" value="<?php echo $chamado[0]->grupo_requerimento_id;?>">
            <input type="hidden" name="requerimento_id" class="requerimento_id" value="<?php echo $chamado[0]->requerimento_id;?>"> 
        <?php
        }
     ?>
    <section class="wrapper">
    <!-- page start-->
    	<div class="col-md-12">
    		<h3>Abrir Chamado</h3> 
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
            <div class="alert alert-success" role="alert" style="<?php echo $style; ?>">CHAMADO REALIZADO!</div>
    		<div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Tipo Curso: </label>
                <div class="col-lg-6">
                    <select class="form-control m-bot15" id="tipoCurso" name="tipoCurso">
                        <option selected>Informe o tipo curso</option>
                    </select>
                </div>
            </div>           
    	</div>  
    	<div class="col-md-12">
    		<div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Curso: </label>
                <div class="col-lg-6">
                    <select class="form-control m-bot15" id="curso" name="curso">
                        <option selected>Informe o curso</option>
                    </select>
                </div>
            </div>            
    	</div> 
        <div class="col-md-12">
            <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Aluno: </label>
                <div class="col-lg-5">
                   <input id="matricula" class="form-control m-bot15" minlength="8" maxlength="8" />
                    
                    <input id="id_pessoa" type="hidden" value="<?php echo @$_REQUEST['id_pessoa'];?>" name="aluno"/>
                </div>
                <div class="col-lg-1">
                    <a href="#" class="btn btn-success edit alterar" title="Editar Chamado">
                      <i class="fa fa-pencil"></i>
                    </a>
                </div>
            </div>            
        </div>  
    	<div class="col-md-12">
    		<div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Unidade: </label>
                <div class="col-lg-6">
                    <select class="form-control m-bot15" id="unidade" name="unidade">
                        <option selected>Selecione a unidade</option>
                    </select>
                </div>
            </div> 
    	</div> 
    	<div class="col-md-12">
    		<div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Tipo Requerimento: </label>
                <div class="col-lg-6">
                    <select class="form-control m-bot15" id="tipo_requerimento" name="tipoRequerimento">
                        <option selected>Escolha o requerimento</option>
                    </select>
                </div>
            </div> 
    	</div>
    	<div class="col-md-12">
    		<div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Grupo: </label>
                <div class="col-lg-6">
                    <select class="form-control m-bot15" id="grupo_requerimento" name="grupoRequerimento">
                        <option selected>Escolha o Grupo Requerimento</option>
                    </select>
                </div>
            </div> 
    	</div> 
    	<div class="col-md-12">
    		<div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Requerimento: </label>
                <div class="col-lg-6">
                    <select class="form-control m-bot15" id="requerimento" name="requerimento">
                        <option selected>Escolha o Requerimento</option>
                    </select>
                </div>
            </div> 
    	</div>     
    	<div class="form-group">
    		<div class="col-md-12">
	        	<label class="col-sm-2 control-label col-lg-2">Assunto:</label>
	        	<div class="col-sm-6 col-lg-6">
                    <textarea class="form-control" id="assunto" name="assunto" rows="6"><?php echo @$chamado[0]->assunto_chamado;?></textarea>
	        	</div>
	    	</div>
	    </div>
	    <br>
	    <div class="form-group" >
    		<div class="col-md-12" style="margin: 20px 0 0 20px">
	        	 <button class="btn btn-primary" style="margin: 0 10px 0 200px;"><?php echo $botao;?></button>
      			<a class="btn btn-primary btn-voltar" href="index.php">Voltar</a>
	    	</div>
	    </div>
 	<!-- page end-->
    </section>
   </form>
</section>
<!--main content end-->

