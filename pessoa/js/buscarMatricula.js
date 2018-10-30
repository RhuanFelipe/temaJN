$(function(){
	$('.matricula_search').keyup(function(event) {
		var matricula = this.value.length;
		if(matricula == 8){
			 $.ajax({            
	              url:"pessoa/buscarMatricula.php",            
	              type:"post",                
	              data: "matricula="+this.value,
	              success: function (result){ 
	                if(result == 1){
	                	$('.msg-box').removeClass('alert-info');
	                	$('.msg-box').addClass('alert-danger');
	                	$('.msg-matricula').html('Mátricula cadastrada, favor informar outra matricula!');
	                	$('.matricula_search').val("");
	                }else{
	                	$('.msg-box').removeClass('alert-info');
	                	$('.msg-box').removeClass('alert-danger');
	                	$('.msg-box').addClass('alert-success');
	                	$('.msg-matricula').html('Mátricula Autorizada!');
	                }
	              }
            });
		}	
	});
});