<?php 
  $nivel = $_REQUEST['nivel'];
  $id = $_SESSION['usuario_id'];
  if($nivel == 4){
    $u = new Usuarios(); 
    $usu = $u->findById($id);
   
    $nome = $usu[0]->matricula_usuario;
  }else if($nivel == 2){
    $u = new Usuarios(); 
    $p = new Pessoa(); 
    $usu = $u->findById($id);
    $pessoa = $p->findById($id);
   
    $matricula = $usu[0]->matricula_usuario;
    $nome_pessoa = $pessoa[0]->nome_pessoa;
    $email_pessoa = $pessoa[0]->email_pessoa;

  }else if($nivel == 1){
    $u = new Usuarios(); 
    $p = new Pessoa(); 
    $c = new Curso();
    $usu = $u->findById($id);
    $pessoa = $p->findById($id);
   
    $matricula = $usu[0]->matricula_usuario;
    $nome_pessoa = $pessoa[0]->nome_pessoa;
    $email_pessoa = $pessoa[0]->email_pessoa;
    $curso = $c->findById($pessoa[0]->curso_id);
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

  <form method="post" action="login/acaoProfile.php?acao=insert" onsubmit="return validarUnidade()">
  <input type="text" name="id" class="id" value="<?php echo $id;?>">

<?php }else{ ?>
  <form method="post" action="cadastramento/acaoUnidade.php?acao=update" onsubmit="return validarUnidade()">

<?php } ?>
    <section class="wrapper">
    <!-- page start-->
      <div class="col-md-12">
           <h3>Profile Usuário</h3> 
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
            <input type="hidden" name="tipo_curso_id" class="tipo_curso_id" value="<?php echo @$curso[0]->tipo_curso_id;?>">
                <input type="hidden" name="curso_id" class="curso_id" value="<?php echo @$pessoa[0]->curso_id;?>">
          <?php if($nivel == 2 || $nivel == 1){ ?>
            <div class="form-group" >
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Nome: </label>
                <div class="col-lg-6">    
                    <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome_pessoa;?>">
                </div>
            </div>
            <?php } ?>          
      </div> 
      <div class="col-md-12">

         <div class="form-group" style="margin-top: 15px">
                    <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Matricula: </label>
                    <div class="col-lg-6">    
                        <input type="text" name="matricula" id="matriculaProfile" class="form-control" value="<?php echo $matricula;?>">
                    </div>
            </div> 
        </div> 
         <?php if($nivel == 2 || $nivel == 1){ ?>
            <div class="col-md-12" style="margin-top: 15px">
              <div class="form-group" >
                  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">E-mail: </label>
                  <div class="col-lg-6">    
                      <input type="text" name="email" id="email" class="form-control" value="<?php echo $email_pessoa;?>">
                  </div>
              </div>
            </div>
          <?php } ?>  
          <?php if($nivel == 2 || $nivel == 1){ ?>

           <div class="col-md-12" style="margin-bottom: 15px">
          <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Sexo: </label>
                <div class="col-lg-6" >
                  <br>
                    <input type="radio" name="sexo"  value="M" 
                    <?php if(@$pessoa[0]->sexo_pessoa == 'M' || @$pessoa[0]->sexo_pessoa == '')echo 'checked'; ?>> Masculino
                    <input type="radio" name="sexo"  value="F" <?php if(@$pessoa[0]->sexo_pessoa == 'F')echo 'checked'; ?>> Feminino
                </div>
            </div>  
          </div>
          <?php } ?>    
      </div>    
      <?php if($nivel == 1){ ?>
 
      <div class="col-md-12">
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
        <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Curso: </label>
                <div class="col-lg-6">
                    <select class="form-control m-bot15 curso" id="curso" name="curso">
                        <option selected>Informe o curso</option>
                    </select>
                </div>
            </div>            
      </div> 
      <?php } ?>
      <div class="col-md-12" style="margin-top: 15px"> 
           <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Senha: </label>
                <div class="col-lg-6">    
                    <input type="password" name="senha" id="senha" class="form-control" value="">
                </div>
            </div> 
      </div> 
      <div class="col-md-12" style="margin-top: 15px"> 
           <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Repita-Senha: </label>
                <div class="col-lg-6">    
                    <input type="password" name="repetirSenha" id="repetirSenha" class="form-control" value="">
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