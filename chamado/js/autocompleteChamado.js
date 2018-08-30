 $(document).ready(function(){
  	var id_pessoa = $("#id_pessoa").val();
    var url = 'biblioteca/list/buscarAluno.php';
  	if(id_pessoa != ""){
  		$.ajax({
    		url: url,
    		dataType : 'json',
    		data:{"id" : $("#id_pessoa").val()},
    		success: function(data){
    			$("#matricula").val(data[0].nome_pessoa);
          $("#matricula").attr('readonly','readonly');
    		}
    	});
  	}
  	$("#matricula").focusout(function(){
  		var id_pessoa = $("#id_pessoa").val(this.value);
  		var id_pessoa_item = $("#id_pessoa").val();

  		//var id_pessoa_tam = id_pessoa_item.length;
  		var id_pessoa_sub = id_pessoa_item.substr(0, 8);
  		$("#id_pessoa").val(id_pessoa_sub);
  		
  		
  		$.ajax({
    		url: url,
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
	        		url: url,
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