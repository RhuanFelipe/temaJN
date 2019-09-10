$(document).ready(function(){
  $('.alert-danger').hide(); //Esconde o elemento com id errolog
  $('#formlogin').submit(function(){  //Ao submeter formulário
    var matricula = $('#matricula').val();  //Pega valor do campo email
    var senha = $('#senha').val();  //Pega valor do campo senha
    $.ajax({      //Função AJAX
        url:"autenticar.php",      //Arquivo php
        type:"post",        //Método de envio
        data: "matricula="+matricula+"&senha="+senha, //Dados
          success: function (result){     //Sucesso no AJAX
                  if(result == 1)
                    location.href='../index.php'
                  else
                    $('.alert-danger').show().text('matricula ou senha inválida!');
              }
      })
      return false; //Evita que a página seja atualizada
    });
    
});