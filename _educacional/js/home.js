//teste.php?

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