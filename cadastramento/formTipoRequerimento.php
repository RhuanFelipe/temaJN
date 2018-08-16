
<?php 
    @$id = $_GET['id'];
    @$edit = $_GET['edit'];
    @$botao = 'Cadastrar Tipo Requerimento';

    if(isset($_GET['success'])){
      $style = 'display:block';
    }else{
      $style = 'display:none';
    }
?><section id="main-content">
<?php if($edit == ""){ ?>
  <form method="post" action="cadastramento/acaoTipoRequerimento.php?acao=insert">
<?php }else{ ?>
  <form method="post" action="cadastramento/acaoTipoRequerimento.php?acao=update">
   <input type="text" name="id" class="id" value="<?php echo $id;?>">

<?php } ?>
    <section class="wrapper">
    <!-- page start-->
    	<div class="col-md-12">
            <?php if($edit == ""){ ?>
    		      <h3>Cadastrar Tipo Requerimento</h3> 
            <?php }else{ 
                    $botao = "Editar Tipo Requerimento";
              ?>
              <h3>Alterar Tipo Requerimento</h3> 
            <?php } ?>
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
            <div class="alert alert-success" role="alert" style="<?php echo $style; ?>">EDITADO COM SUCESSO!</div>
    		<div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Tipo Requerimento: </label>
                <div class="col-lg-6">
                    <?php
                        $tr = new TipoRequerimento(); 
                        $tipoRequerimento = $tr->findById($id);
                    ?>
                    <input type="text" name="tipoRequerimento" class="form-control" value="<?php echo @$tipoRequerimento[0]->opt_requerimento;?>">
                </div>
            </div>           
    	</div>  
    	
	    <br>
	    <div class="form-group" >
    		<div class="col-md-12" style="margin: 20px 0 0 20px">
	        	 <button class="btn btn-primary" style="margin: 0 10px 0 200px;"><?php echo $botao;?></button>
      			<a class="btn btn-primary btn-voltar" href="index.php?p=cadTipoRequerimento">Voltar</a>
	    	</div>
	    </div>
 	<!-- page end-->
    </section>
   </form>
</section>
<!--main content end-->