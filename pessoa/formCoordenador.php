
<?php 
    @$id = $_GET['id'];
    @$edit = $_GET['edit'];
    @$botao = 'Cadastrar Coordenador';

    if(isset($_GET['success'])){
      $style = 'display:block';
    }else{
      $style = 'display:none';
    }
?><section id="main-content">
<?php if($edit == ""){ ?>
  <form method="post" action="pessoa/acaoCoordenador.php?acao=insert">
<?php }else{ ?>
  <form method="post" action="pessoa/acaoCoordenador.php?acao=update">
   <input type="text" name="id" class="id" value="<?php echo $id;?>">

<?php } ?>
    <section class="wrapper">
    <!-- page start-->
      <div class="col-md-12" style="margin-bottom: 20px">
            <?php if($edit == ""){ ?>
          <h3>Cadastrar Coordenador</h3> 
            <?php }else{ 
                  $p = new Pessoa(); 
                  $u = new Usuarios(); 
                  $c = new Curso();
                  $pessoa = $p->findById($id);
                  $usuario = $u->findById($id);
                  $curso = $c->findById($pessoa[0]->curso_id);
                  $botao = "Editar Coordenador";
              ?>
              <h3>Alterar Coordenador</h3> 
            <?php } ?>
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
            <div class="alert alert-success" role="alert" style="<?php echo $style; ?>">EDITADO COM SUCESSO!</div>
          <div class="form-group">
               
                <input type="hidden" name="tipo_curso_id" class="tipo_curso_id" value="<?php echo @$curso[0]->tipo_curso_id;?>">
                <input type="hidden" name="curso_id" class="curso_id" value="<?php echo @$pessoa[0]->curso_id;?>">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Nome Pessoa: </label>
                <div class="col-lg-6">
                    <input type="text" name="nome" class="form-control" value="<?php echo @$pessoa[0]->nome_pessoa;?>">
                </div>
            </div>      
      </div>
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
                    <input type="text" name="matricula" class="form-control" value="<?php  if(@$_GET['edit'] == 1){echo @$usuario[0]->matricula_usuario;}else{echo '';}?>">
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
            <a class="btn btn-primary btn-voltar" href="index.php?p=cadCoordenador">Voltar</a>
        </div>
      </div>
  <!-- page end-->
    </section>
   </form>
</section>
<!--main content end-->