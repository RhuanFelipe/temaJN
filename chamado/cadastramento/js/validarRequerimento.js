function validarRequerimento(){
    var msgError = "";
    var error = 0;
    var grupoRequerimento = document.getElementById('grupo_requerimento_all').value;
    var requerimento = document.getElementById('requerimento').value;
   
    if(grupoRequerimento == ''){
        msgError += '* <b style="color:red">PREENCHA O GRUPO REQUERIMENTO</b><br><br>';
        error++;
    }

    if(requerimento == ''){
        msgError += '* <b style="color:red">PREENCHA O REQUERIMENTO</b><br><br>';
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
