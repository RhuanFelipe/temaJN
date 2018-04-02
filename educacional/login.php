
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

    <form class="form-signin" action="teste.php" method="POST" id="formlogin">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">PCC Educacional</h1>
      <div class="alert alert-danger" role="alert"></div>
      <label for="matricula" class="sr-only">Matricula</label>
      <input type="text" id="matricula" name="matricula" class="form-control" placeholder="Informe a matricula" required autofocus>
      <label for="senha" class="sr-only">Senha</label>
      <input type="password" id="senha" name="senha" class="form-control" placeholder="Informe a senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy;2018</p>
    </form>
  </body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
		$('.alert-danger').hide(); //Esconde o elemento com id errolog
		$('#formlogin').submit(function(){ 	//Ao submeter formulário
			var matricula = $('#matricula').val();	//Pega valor do campo email
			var senha = $('#senha').val();	//Pega valor do campo senha
			$.ajax({			//Função AJAX
					url:"teste.php",			//Arquivo php
					type:"post",				//Método de envio
					data: "matricula="+matricula+"&senha="+senha,	//Dados
		   			success: function (result){			//Sucesso no AJAX
		                if(result == 1)
		                	location.href='index.php'
		                else
		                	$('.alert-danger').show().text('matricula ou senha inválida!');
		            }
				})
				return false;	//Evita que a página seja atualizada
			})
			
		});
  </script>
</html>
