<?php 
  session_start();
  $matricula = $_SESSION["matricula"];
  
  function __autoload($class_name){
    require_once 'classes/' . $class_name . '.php';
  }
  $usuario = new Usuarios();
  $pessoa = new Pessoa();
  $c = new Chamado();
  $curso = new Curso();
  $requerimento = new Requerimento();
  $tipoRequerimento = new TipoRequerimento();
  $grupoRequerimento = new GrupoRequerimento();

  $dados = $c->findAll();
  $usuario->findDados($matricula);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal"><a href="index.php">PCC Educacional</a></h5><p></p>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Bem Vindo - <?php echo $usuario->getNome(); ?></a>
        <?php if($usuario->getNivel() == 2) {?><a class="p-2 text-dark" href="abrirChamado.php">Abrir Chamado</a>
        <?php } else {?><a class="p-2 text-dark" href="acompanharChamados.php">Chamados</a><?php } ?>
      </nav>
      <a class="btn btn-outline-primary btn-deslogar" href="#">Sair</a>
    </div>

    <div class="container">
      
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Chamado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 class="label-nome"></h5><br>
            <p><b>Tipo Requerimento:  </b><label class="label-tipo-requerimento"></label></p>
            <p><b>Grupo Requerimento:  </b><label class="label-grupo-requerimento"></label></p>
            <p><b>Requerimento:  </b><label class="label-requerimento"></label></p>
            <p><b>Assunto:  </b><label class="label-assunto"></label></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
      <p>Qtd. Chamados : <?php echo $c->qtdChamados(); ?></p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Mat.</th>
            <th scope="col">Data</th>
            <th scope="col">Nome</th>
            <th scope="col">Curso</th>
            <th scope="col">Requerimento</th>
            <th scope="col">#</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach ($dados as $rows) {
              $users = $usuario->findDadosId($rows->usuario_id);
              $ps = $pessoa->findById($rows->usuario_id);
              $cs = $curso->findById($rows->curso_id);
              $req = $requerimento->findById($rows->requerimento_id);
              $tr = $tipoRequerimento->findById($rows->tipo_requerimento_id);
              $gr = $grupoRequerimento->findById($rows->grupo_requerimento_id);
           ?>
          <tr class="modal-desc">
            <input class="tp_<?php echo $rows->id_chamado; ?>" type="hidden" name="" value="<?php echo utf8_encode($tr[0]->opt_requerimento); ?>">
            <input class="gr_<?php echo $rows->id_chamado; ?>" type="hidden" name="" value="<?php echo utf8_encode($gr[0]->desc_grupo); ?>">
            <input class="assunto_<?php echo $rows->id_chamado; ?>" type="hidden" name="" value="<?php echo $rows->assunto_chamado; ?>">
            <th scope="row"><?php echo $users->matricula_usuario; ?></th>
            <td><?php echo $rows->data_abertura; ?></td>
            <td class="nome_pessoa_<?php echo $rows->id_chamado; ?>"><?php echo $ps[0]->nome_pessoa; ?></td>
            <td><?php echo utf8_encode($cs[0]->nome_curso); ?></td>
            <td class="req_<?php echo $rows->id_chamado; ?>"><?php echo utf8_encode($req[0]->desc_requerimento); ?></td>
            <td scope="row" ><a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="ver">VER</a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
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
         $(".ver").click(function(){
            $(".modal-desc").click(function(){
              var i = $(this).index() + 1;
              var nome = $('.nome_pessoa_'+i).text();
              var tp = $('.tp_'+i).val();
              var gr = $('.gr_'+i).val();
              var req = $('.req_'+i).text();
              var assunto = $('.assunto_'+i).val();

              $('.label-nome').html(nome);
              $('.label-tipo-requerimento').html(tp);
              $('.label-grupo-requerimento').html(gr);
              $('.label-requerimento').html(req);
              $('.label-assunto').html(assunto);
            });
          });

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
