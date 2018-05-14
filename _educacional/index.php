<?php 
  session_start();
  $matricula = $_SESSION["matricula"];
  if(!isset($matricula)){
    header("Location:login.php");
  }else{
    function __autoload($class_name){
      require_once 'classes/' . $class_name . '.php';
    }
      $usuario = new Usuarios();
      $usuario->findDados($matricula);
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Home - PCC Educacional</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">PCC Educacional</h5><p></p>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Bem Vindo - <?php echo $usuario->getNome(); ?></a>
        <?php if($usuario->getNivel() == 2) {?><a class="p-2 text-dark" href="abrirChamado.php">Abrir Chamado</a>
        <?php } else {?><a class="p-2 text-dark" href="acompanharChamados.php">Chamados</a><?php } ?>
      </nav>
      <a class="btn btn-outline-primary btn-deslogar" href="#">Sair</a>
    </div>


    <div class="container">
    <?php if($usuario->getNivel() == 2) {?>
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <img src="img/faculdade.gif" alt="" style="text-align: center;">
        <br>
        <br>
        <h1 class="display-4">Dificuldades em resolver seus problemas?</h1>
        <h1 class="display-4">Iremos ajudar</h1>
    </div>
    <?php }else{ 
        $c = new Chamado();
      ?>
     <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <h1 class="display-4">CHAMADOS ABERTOS</h1>
          <h3 class="display-3" style="color: red"><?php echo $c->qtdChamados(); ?></h3>
        </div>
    <?php } ?>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <script>
      	//teste.php?
      	
        Holder.addTheme('thumb', {
          bg: '#55595c',
          fg: '#eceeef',
          text: 'Thumbnail'
        });
        $(document).ready(function(){
      		$('.btn-deslogar').click(function(){
      			var result = confirm("Deseja sair do Sistema?");
      			var matricula = <?php echo $matricula; ?>;
      			var acao = 'deslogar';
      			if(result == 1){
  	    			$.ajax({			
  						url:"teste.php",			
  						type:"post",				
  						data: "acao="+acao+"&matricula="+matricula,
  						success: function (result){	
  							location.href = "login.php";
  						}
  					});
    				}
    			});
    			
    		});
    </script>
  </body>
</html>
