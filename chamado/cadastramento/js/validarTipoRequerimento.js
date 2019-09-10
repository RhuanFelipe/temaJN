function validarTipoRequerimento(){
    var msgError = "";
    var error = 0;
    var tipoRequerimento = document.getElementById('tipoRequerimento').value;
   
    if(tipoRequerimento == ''){
        msgError += '* <b style="color:red">PREENCHA O TIPO REQUERIMENTO</b><br><br>';
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
