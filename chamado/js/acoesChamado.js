$(function(){
alert('oi carai')
    $('.ver, .verFinalizado').on('click',function(){
      $('.chamado_click').val($(this).data('id-chamado'))
    });
     $(".ver").click(function(){
        var id_chamado = $('.chamado_click').val();

        $.ajax({
          type: "POST",
          url: "biblioteca/list/listarDadosModal.php",
          data: {id : id_chamado},
          success: function(data){
            $('.label-assunto').html(data.assunto_chamado);
            $('.label-nome').html(data.nome_pessoa);
            $('.label-tipo-requerimento').html(data.tipo_requerimento);
            $('.label-grupo-requerimento').html(data.grupo_requerimento);
            $('.label-requerimento').html(data.requerimento);
            
            //console.log("Data: " + data + "\nStatus: " + status)
          }
        });
    });

    $(".verFinalizado").click(function(){
        var id_chamado = $('.chamado_click').val();

        $.ajax({
          type: "POST",
          url: "biblioteca/list/listarDadosModalFinalizado.php",
          data: {id : id_chamado},
          success: function(data){
            $('.label-assunto').html(data.assunto_chamado);
            $('.label-nome').html(data.nome_pessoa);
            $('.label-tipo-requerimento').html(data.tipo_requerimento);
            $('.label-grupo-requerimento').html(data.grupo_requerimento);
            $('.label-requerimento').html(data.requerimento);
            
            //console.log("Data: " + data + "\nStatus: " + status)
          }
        });
    });

    $('.concluir , .cancelar, .excluir').mouseover(function(){
      $("#id_chamado").val(this.id);
    });

    $('.concluir').click(function(){        
        var id = parseInt($( ".data-id-chamado").attr("data-id-chamado"));
        var assunto_chamado = $("#assunto_chamado").val();
        var usuario = $("#usuario").val();
        $.ajax({            
          url:"chamado/acao.php",            
          type:"GET",                
          data: "p=executar&acao=concluir&id="+id+"&assunto_chamado="+assunto_chamado+"&usuario="+usuario,
          success: function (result){ 
            location.href = "index.php";
          }
        });
    });

     $('.encaminhar').click(function(){        
        var id = parseInt($( ".data-id-chamado").attr("data-id-chamado"));
        var tipoCurso = $(".tipoCurso").val();
        var cursoId = $(".cursoCoordenador").val();
        var coordenador = $(".coordenadorCurso").val();
        
        $.ajax({            
          url:"chamado/acao.php",            
          type:"GET", 
          data: "p=executar&acao=encaminhar&id="+id+"&tipoCurso="+tipoCurso+"&cursoId="+cursoId+"&coordenador="+coordenador,
          success: function (result){ 
            location.href = "index.php";
          }
        });

    });

    $('.cancelar').click(function(){        
        var id = parseInt($( ".data-id-chamado").attr("data-id-chamado"));
        var assunto_chamado = $("#comment").val();
        var usuario = $("#usuario").val();
        var motivo = $("#motivo").val();
        $.ajax({            
          url:"chamado/acao.php",            
          type:"GET", 
          data: "p=executar&acao=cancelar&id="+id+"&assunto_chamado="+assunto_chamado+"&usuario="+usuario+"&motivo="+motivo,
          success: function (result){ 
            location.href = "index.php";
          }
        });
    });
    
     $('.excluir').click(function(){
            var result = bootbox.confirm({
            message: "Deseja Excluir o Chamado?",
            buttons: {
                confirm: {
                    label: 'Sim',
                    className: 'btn-info'
                },
                cancel: {
                    label: 'Não'
                }
            },
            callback: function (result) {
                if(result != false){
                  var id = parseInt($("#id_chamado").val());
                  $.ajax({            
                    url:"chamado/acao.php",            
                    type:"GET",                
                    data: "p=executar&acao=excluir&id="+id,
                    success: function (result){ 
                      location.href = "index.php";
                    }
                  });
              } 
            }
      });   
    });  
});
 