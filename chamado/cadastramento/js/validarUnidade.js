function validarUnidade(){
    var msgError = "";
    var error = 0;
    var unidade = document.getElementById('unidade').value;
   
    if(unidade == ''){
        msgError += '* <b style="color:red">PREENCHA A UNIDADE</b><br><br>';
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
