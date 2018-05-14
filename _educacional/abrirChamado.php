
<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/estilo.css" rel="stylesheet">
  </head>

  <body class="text-center">
<div class="container">
  <?php 
    if(isset($_GET['sucess'])){
      $style = 'display:block';
    }else{
      $style = 'display:none';
    }
  ?>
  <div class="alert alert-success" role="alert" style="<?php echo $style; ?>">CHAMADO REALIZADO!</div>
  <h3 style="margin-bottom: 20px;">Abertura de chamado</h3>
  <form method="post" action="chamado.php">
    <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">TIPO CURSO:</label>
      <div class="col-10">
        <select class="form-control" id="tipoCurso" name="tipoCurso">
          <option selected>Informe o tipo curso</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-search-input" class="col-2 col-form-label">CURSO:</label>
      <div class="col-10" >
        <select class="form-control" id="curso" name="curso">
          <option selected>Informe o curso</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-email-input" class="col-2 col-form-label">UNIDADE:</label>
      <div class="col-10" >
        <select class="form-control" id="unidade" name="unidade">
          <option selected>Open this select menu</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-url-input" class="col-2 col-form-label">TIPO REQUERIMENTO:</label>
      <div class="col-10">
        <select class="form-control" id="tipo_requerimento" name="tipoRequerimento">
          <option selected>Open this select menu</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-tel-input" class="col-2 col-form-label">GRUPO:</label>
      <div class="col-10">
        <select class="form-control" id="grupo_requerimento" name="grupoRequerimento">
          <option selected>Open this select menu</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-password-input" class="col-2 col-form-label">REQUERIMENTO:</label>
      <div class="col-10">
        <select class="form-control" id="requerimento" name="requerimento">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-password-input" class="col-2 col-form-label">ASSUNTO:</label>
      <div class="col-10">
        <div class="form-group">
          <textarea class="form-control" id="assunto" name="assunto" rows="3"></textarea>
        </div>
      </div>
    </div>
    <div class="form-group" style="margin: auto">
      <button class="btn btn-primary" style="margin-right: 15px">Abrir chamado</button>
      <a class="btn btn-primary btn-voltar" href="index.php">Voltar</a>
    </div>
    </form>
  </div>
  </body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
    $(function(){
      $("#tipoCurso").load("list/listarTipoCurso.php",function(){
         $("#curso").load( "list/listarCurso.php?id="+this.value);
      });
      $("#unidade").load("list/listarUnidade.php");
      $("#tipo_requerimento").load("list/listarTipoRequerimento.php",function(){
        $("#grupo_requerimento").load( "list/listarGrupoRequerimento.php?id="+this.value,function(){
           $("#requerimento").load( "list/listarRequerimento.php?id="+this.value);
        });
      });

      $("#tipoCurso").change(function(){
         $("#curso").load( "list/listarCurso.php?id="+this.value);
      });

      $("#tipo_requerimento").change(function(){
         $("#grupo_requerimento").load( "list/listarGrupoRequerimento.php?id="+this.value);
      });
      $("#grupo_requerimento").change( "list/listarGrupoRequerimento.php?id="+this.value,function(){
           $("#requerimento").load( "list/listarRequerimento.php?id="+this.value);
        });   
     
    });
  </script>
</html>


