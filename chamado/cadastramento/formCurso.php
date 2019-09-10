<script type="text/javascript" src="cadastramento/js/validarCurso.js"></script>

<?php 
    @$id = $_GET['id'];
    @$edit = $_GET['edit'];
    @$botao = 'Cadastrar Curso';

    if(isset($_GET['success'])){
      $style = 'display:block';
    }else{
      $style = 'display:none';
    }
?><section id="main-content">
<?php if($edit == ""){ ?>

  <form method="post" action="cadastramento/acaoCurso.php?acao=insert" onsubmit="return validarCurso()">
<?php }else{ ?>
  <form method="post" action="cadastramento/acaoCurso.php?acao=update" onsubmit="return validarCurso()">
   <input type="text" name="id" class="id" value="<?php echo $id;?>">

<?php } ?>
    <section class="wrapper">
    <!-- page start-->
    	
    	<div class="col-md-12">
    		<?php if($edit == ""){ ?>
    		  <h3>Cadastrar Curso</h3> 
            <?php }else{ 
                    $botao = "Editar Curso";
            	?>
             <input type="hidden" name="tipo_curso_id" class="tipo_curso_id" value="<?php echo $_GET['tipoId'];?>">
              <h3>Alterar Curso</h3> 
            <?php } ?>
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
            <div class="alert alert-success" role="alert" style="<?php echo $style; ?>">EDITADO COM SUCESSO!</div>
    		<div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Tipo Curso: </label>
                <div class="col-lg-6">
                    <select class="form-control m-bot15 tipoCurso" id="tipoCurso" name="tipoCurso">
                        <option selected>Informe o tipo curso</option>
                    </select>
                </div>
            </div>           
    	</div>    
    	<div class="col-md-12"> 
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
    		<div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Curso: </label>
                <div class="col-lg-6">  
                 	<?php
                        $cs = new Curso(); 
                        $curso = $cs->findById($id);
                    ?>               
                    <input type="text" name="curso" class="form-control" id="curso" value="<?php echo @$curso[0]->nome_curso;?>">
                </div>
            </div>           
    	</div>
	    <br>
	    <div class="form-group" >
    		<div class="col-md-12" style="margin: 20px 0 0 20px">
	        	 <button class="btn btn-primary" style="margin: 0 10px 0 200px;"><?php echo $botao;?></button>
      			<a class="btn btn-primary btn-voltar" href="index.php?p=cadCurso">Voltar</a>
	    	</div>
	    </div>
 	<!-- page end-->
    </section>
   </form>
</section>
<!--main content end-->