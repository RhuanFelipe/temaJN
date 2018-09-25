
<?php 
    @$id = $_GET['id'];
    @$edit = $_GET['edit'];
    @$botao = 'Cadastrar Atendente';

    if(isset($_GET['success'])){
      $style = 'display:block';
    }else{
      $style = 'display:none';
    }
?><section id="main-content">
<?php if($edit == ""){ ?>
  <form method="post" action="pessoa/acaoAtendente.php?acao=insert">
<?php }else{ ?>
  <form method="post" action="pessoa/acaoAtendente.php?acao=update">
   <input type="text" name="id" class="id" value="<?php echo $id;?>">

<?php } ?>
    <section class="wrapper">
    <!-- page start-->
      <div class="col-md-12" style="margin-bottom: 20px">
            <?php if($edit == ""){ ?>
          <h3>Cadastrar Atendente</h3> 
            <?php }else{ 
                    $botao = "Editar Atendente";
              ?>
              <h3>Alterar Atendente</h3> 
            <?php } ?>
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
            <div class="alert alert-success" role="alert" style="<?php echo $style; ?>">EDITADO COM SUCESSO!</div>
          <div class="form-group">
                <?php
                    $p = new Pessoa(); 
                    $u = new Usuarios(); 
                    $pessoa = $p->findById($id);
                    $usuario = $u->findById($id);
                ?>
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Nome Pessoa: </label>
                <div class="col-lg-6">
                    <input type="text" name="nome" class="form-control" value="<?php echo @$pessoa[0]->nome_pessoa;?>">
                </div>
            </div>      
      </div>
      <div class="col-md-12" style="margin-bottom: 20px">
          <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">E-mail: </label>
                <div class="col-lg-6">
                    <input type="text" name="email" class="form-control" value="<?php echo @$pessoa[0]->email_pessoa;?>">
                </div>
            </div>      
      </div>  
      <div class="col-md-12" style="margin-bottom: 20px">
          <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Matricula: </label>
                <div class="col-lg-6">
                    <input type="text" name="matricula" class="form-control" value="<?php echo @$usuario[0]->matricula_usuario;?>">
                </div>
            </div>      
      </div> 
      <div class="col-md-12" style="margin-bottom: 20px">
          <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Senha: </label>
                <div class="col-lg-6">
                    <input type="password" name="senha" class="form-control" value="">
                </div>
            </div>      
      </div>
      <div class="col-md-12" style="margin-bottom: 20px">
          <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Sexo: </label>
                <div class="col-lg-6">
                    <input type="radio" name="sexo"  value="m" 
                    <?php if(@$pessoa[0]->sexo_pessoa == 'm')echo 'checked'; ?>> Masculino
                    <input type="radio" name="sexo"  value="f" <?php if(@$pessoa[0]->sexo_pessoa == 'f')echo 'checked'; ?>> Feminino
                </div>
            </div>      
      </div> 
      
      <br>
      <div class="form-group" >
        <div class="col-md-12" style="margin: 20px 0 0 20px">
             <button class="btn btn-primary" style="margin: 0 10px 0 200px;"><?php echo $botao;?></button>
            <a class="btn btn-primary btn-voltar" href="index.php?p=cadAtendente">Voltar</a>
        </div>
      </div>
  <!-- page end-->
    </section>
   </form>
</section>
<!--main content end-->