
<?php 
    @$id = $_GET['id'];
    @$edit = $_GET['edit'];
    @$botao = 'Cadastrar Requerimento';

    if(isset($_GET['success'])){
      $style = 'display:block';
    }else{
      $style = 'display:none';
    }
?><section id="main-content">
<?php if($edit == ""){ ?>
  <form method="post" action="cadastramento/acaoRequerimento.php?acao=insert">
<?php }else{ ?>
  <form method="post" action="cadastramento/acaoRequerimento.php?acao=update">
   <input type="text" name="id" class="id" value="<?php echo $id;?>">

<?php } ?>
    <section class="wrapper">
    <!-- page start-->
    	
    	<div class="col-md-12">
    		<?php if($edit == ""){ ?>
    		  <h3>Cadastrar Requerimento</h3> 
            <?php }else{ 
                    $botao = "Editar Requerimento";
            	?>
             <input type="hidden" name="grupoId" class="grupoId" value="<?php echo $_GET['grupoId'];?>">
              <h3>Alterar Requerimento</h3> 
            <?php } ?>
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
            <div class="alert alert-success" role="alert" style="<?php echo $style; ?>">EDITADO COM SUCESSO!</div>
    		<div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Grupo Requerimento: </label>
                <div class="col-lg-6">
                    <select class="form-control m-bot15" id="grupo_requerimento_all" name="grupoRequerimento">
                        <option selected>Escolha o Grupo Requerimento</option>
                    </select>
                </div>
            </div>         
    	</div>    
    	<div class="col-md-12"> 
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
    		<div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Requerimento: </label>
                <div class="col-lg-6">  
                 	<?php
                        $req = new Requerimento(); 
                        $requerimento = $req->findById($id);
                    ?>               
                    <input type="text" name="requerimento" class="form-control" value="<?php echo @$requerimento[0]->desc_requerimento;?>">
                </div>
            </div>           
    	</div>
	    <br>
	    <div class="form-group" >
    		<div class="col-md-12" style="margin: 20px 0 0 20px">
	        	 <button class="btn btn-primary" style="margin: 0 10px 0 200px;"><?php echo $botao;?></button>
      			<a class="btn btn-primary btn-voltar" href="index.php?p=cadRequerimento">Voltar</a>
	    	</div>
	    </div>
 	<!-- page end-->
    </section>
   </form>
</section>
<!--main content end-->
