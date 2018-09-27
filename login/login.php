<?php 
  function __autoload($class_name){
    require_once '../classes/' . $class_name . '.php';
  }
    $usuario = new Usuarios();
    $qtdUsuarios = $usuario->findAll();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Login</title>

    <!--Core CSS -->
    <link href="../bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reset.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">
    <?php 
        if(count($qtdUsuarios) >= 1){
     ?>
       <form class="form-signin" action="#" method="POST" id="formlogin">
        <h2 class="form-signin-heading">PCC Educacional</h2>
        <?php if(isset($_GET['success'])){ ?>
          <div class="login-wrap informativo" style="display:none" >
            <h4 style="color:green;font-size: 11px;text-align: center;">Insira a matricula e senha para logar no sistema</h4>
          </div>
           <script src="../js/jquery.js"></script>
           <script src="../bs3/js/bootstrap.min.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
          <script type="text/javascript">
            $(function(){
                var dialog = bootbox.dialog({
                    message: '<p class="text-center">Faça seu primeiro acesso no sistema</p>'
                });
                $('.close').click(function(){
                  $('.informativo').fadeIn('slow');
                });
             });
          </script>
        <?php } ?>
        <div class="login-wrap">
            <div class="user-login-info">
                    <div class="alert alert-danger" role="alert"></div>
                <input type="text" id="matricula" name="matricula" class="form-control" placeholder="Matricula" autofocus>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
            </div>
            <button class="btn btn-lg btn-login btn-block" type="submit">Logar</button>
        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                          <div class="alert alert-danger" role="alert"></div>

                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>
      <?php }else{ ?>
        <form class="form-signin" action="acaoLogin.php" method="POST">
          <h2 class="form-signin-heading">PCC Educacional</h2>
           <div class="login-wrap informativo" style="display: none"><h4 style="color:red;font-size: 13px;font-weight: bold;text-align: center;">Insira uma senha para o usuario Admin</h4></div>
          <div class="login-wrap">
              <div class="user-login-info">
                      <div class="alert alert-danger" role="alert"></div>
                  <input type="text" id="matricula" name="matricula" class="form-control" placeholder="Matricula" value="ADMIN" readonly>
                  <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
              </div>
              <button class="btn btn-lg btn-login btn-block" type="submit">Cadastrar</button>
          </div>

            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="alert alert-danger" role="alert"></div>

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enter your e-mail address below to reset your password.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-success" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->
      </form>
    <script src="../js/jquery.js"></script>
    <script src="../bs3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
  
      <script type="text/javascript">
        $(function(){
            var dialog = bootbox.dialog({
                message: '<p class="text-center">Bem Vindo a tela de configuração do Open Educacional</p>'
            });
            $('.close').click(function(){
              $('.informativo').fadeIn('slow');
            });
         });
      </script>
      <?php } ?>
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="../js/jquery.js"></script>
    <script src="../bs3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/autentica.js"></script>
  </body>
</html>
