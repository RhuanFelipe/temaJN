<script type="text/javascript" src="cadastramento/js/validarGrupoRequerimento.js"></script>

<?php 
    @$id = $_GET['id'];
    @$edit = $_GET['edit'];
    @$botao = 'Cadastrar Grupo Requerimento';

    if(isset($_GET['success'])){
      $style = 'display:block';
    }else{
      $style = 'display:none';
    }
?><section id="main-content">
<?php if($edit == ""){ ?>
  <form method="post" action="cadastramento/acaoGrupoRequerimento.php?acao=insert" onsubmit="return validarGrupoRequerimento()">
<?php }else{ ?>
  <form method="post" action="cadastramento/acaoGrupoRequerimento.php?acao=update" onsubmit="return validarGrupoRequerimento()">
   <input type="hidden" name="id" class="id" value="<?php echo $id;?>">

<?php } ?>
    <section class="wrapper">
    <!-- page start-->
      
      <div class="col-md-12">
        <?php if($edit == ""){ ?>
          <h3>Cadastrar Grupo Requerimento</h3> 
            <?php }else{ 
                    $botao = "Editar Grupo Requerimento";
              ?>
             <input type="hidden" name="tipo_curso_id" class="tipo_requerimento_id" value="<?php echo $_GET['tipoRequerimentoId'];?>">
              <h3>Alterar Curso</h3> 
            <?php } ?>
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
            <div class="alert alert-success" role="alert" style="<?php echo $style; ?>">EDITADO COM SUCESSO!</div>
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
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
        <div class="form-group">
                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Grupo Requerimento: </label>
                <div class="col-lg-6">  
                  <?php
                        $gr = new GrupoRequerimento(); 
                        $grupoRequerimento = $gr->findById($id);
                    ?>               
                    <input type="text" name="grupoRequerimento" id="grupoRequerimento" class="form-control" value="<?php echo @$grupoRequerimento[0]->desc_grupo;?>">
                </div>
            </div>           
      </div>
      <br>
      <div class="form-group" >
        <div class="col-md-12" style="margin: 20px 0 0 20px">
             <button class="btn btn-primary" style="margin: 0 10px 0 200px;"><?php echo $botao;?></button>
            <a class="btn btn-primary btn-voltar" href="index.php?p=cadGrupoRequerimento">Voltar</a>
        </div>
      </div>
  <!-- page end-->
    </section>
   </form>
</section>
<!--main content end-->