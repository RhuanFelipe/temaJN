<?php 
  $nivel = $_REQUEST['nivel'];
  $id = $_REQUEST['id'];
  if($nivel == 4){
    $u = new Usuarios(); 
    $usu = $u->findById($id);
   
    $nome = $usu[0]->matricula_usuario;
  }
  
?>
<script type="text/javascript" src="cadastramento/js/validarUnidade.js"></script>

<?php 
    @$id = $_GET['id'];
    @$edit = $_GET['edit'];
    @$botao = 'Alterar Dados';

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
           <h3>Profile Usuário</h3> 
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
          
            <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Usuário: </label>
                <div class="col-lg-6">    
                    <input type="text" name="unidade" id="unidade" class="form-control" value="<?php echo $nome;?>">
                </div>
            </div>           
      </div> 
     
      <div class="col-md-12" style="margin-top: 15px"> 
           <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Senha: </label>
                <div class="col-lg-6">    
                    <input type="text" name="unidade" id="unidade" class="form-control" value="">
                </div>
            </div> 
      </div> 
      <div class="col-md-12" style="margin-top: 15px"> 
           <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Repita-Senha: </label>
                <div class="col-lg-6">    
                    <input type="text" name="unidade" id="unidade" class="form-control" value="">
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