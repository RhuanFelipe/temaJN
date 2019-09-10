<script type="text/javascript" src="cadastramento/js/validarUnidade.js"></script>

<?php 
    @$id = $_GET['id'];
    @$edit = $_GET['edit'];
    @$botao = 'Cadastrar Unidade';

    if(isset($_GET['success'])){
      $style = 'display:block';
    }else{
      $style = 'display:none';
    }
?><section id="main-content">
<?php if($edit == ""){ ?>

  <form method="post" action="cadastramento/acaoUnidade.php?acao=insert" onsubmit="return validarUnidade()">
<?php }else{ ?>
  <form method="post" action="cadastramento/acaoUnidade.php?acao=update" onsubmit="return validarUnidade()">
   <input type="text" name="id" class="id" value="<?php echo $id;?>">

<?php } ?>
    <section class="wrapper">
    <!-- page start-->
    	<div class="col-md-12">
            <?php if($edit == ""){ ?>
    		  <h3>Cadastrar Unidade</h3> 
            <?php }else{ 
               $botao = "Editar Unidade";
               ?>
              <h3>Alterar Unidade</h3> 
            <?php } ?>
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
            <div class="alert alert-success" role="alert" style="<?php echo $style; ?>">EDITADO COM SUCESSO!</div>
    		<div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Unidade: </label>
                <div class="col-lg-6">
                    <?php
                        $unid = new Unidade(); 
                        $unidade = $unid->findById($id);
                    
                    ?>
                    <input type="text" name="unidade" id="unidade" class="form-control" value="<?php echo @$unidade[0]->desc_unidade;?>">
                </div>
            </div>           
    	</div>  
    	
	    <br>
	    <div class="form-group" >
    		<div class="col-md-12" style="margin: 20px 0 0 20px">
	        	 <button class="btn btn-primary" style="margin: 0 10px 0 200px;"><?php echo $botao;?></button>
      			<a class="btn btn-primary btn-voltar" href="index.php?p=cadUnidade">Voltar</a>
	    	</div>
	    </div>
 	<!-- page end-->
    </section>
   </form>
</section>
<!--main content end-->