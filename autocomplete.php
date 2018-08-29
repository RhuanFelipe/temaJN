<html>
	<header>
		<title>autocomplete</title>
	</header>
<body>
<input id="matricula" minlength="8" maxlength="8" style="padding: 10px;font-size: 15px;width: 300px" />
<input id="id_pessoa" type="text" value="<?php echo $_REQUEST['id'];?>"/>
<a href="#" class="alterar">alterar</a>

</body>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
	  $(document).ready(function(){
	  	$("#matricula").focusout(function(){
	  		var id_pessoa = $("#id_pessoa").val(this.value);
	  		var id_pessoa_item = $("#id_pessoa").val();

	  		//var id_pessoa_tam = id_pessoa_item.length;
	  		var id_pessoa_sub = id_pessoa_item.substr(0, 8);
	  		$("#id_pessoa").val(id_pessoa_sub);
	  		
	  		
	  		$.ajax({
        		url: 'buscarAluno.php',
        		dataType : 'json',
        		data:{"matricula" : $("#id_pessoa").val()},
        		success: function(data){
        			$("#id_pessoa").val(data[1].id_pessoa)
        		}
        	});
	  	});

	  	$("#matricula").autocomplete({
		        source: function(request,response){
		        	$.ajax({
		        		url: 'buscarAluno.php',
		        		dataType : 'json',
		        		data:{matricula:request.term},
		        		success: function(data){
		        			response($.map(data, function (pn) {
					            return {
					                value: pn.nome_pessoa
					            };
					        }));
		        		}
		        	});
		        	
		        },
		        minLength: 2,
		        select: function(event,ui){
		        	$("#matricula").attr('readonly','readonly');
		        }
		    });
	  		$('.alterar').click(function(){
	  			$("#matricula").val("");
	  			$("#id_pessoa").val("");
				$("#matricula").removeAttr('readonly');
	  		});  	
	  	});
	    
 </script>
</html>