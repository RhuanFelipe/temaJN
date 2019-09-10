 $(function(){
    var dialog = bootbox.dialog({
       message: '<p class="text-center">Bem Vindo a tela de configuração do Open Educacional</p>'
     });
    $('.close').click(function(){
      $('.informativo').fadeIn('slow');
    });
});

function validarLogin(){
    var msgError = "";
    var error = 0;
    var senha = document.getElementById('senha').value;   
    if(senha == ''){
        msgError += '* <b style="color:red">INFORME UMA SENHA VÁLIDA</b><br><br>';
        error++;
    }
           
    if(error != 0){
        bootbox.alert({
            title: "CAMPO INVÁLIDO",
            message: msgError               
        });

        return false;
    }
}