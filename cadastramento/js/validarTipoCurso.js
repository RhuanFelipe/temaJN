function validarTipoCurso(){
    var msgError = "";
    var error = 0;
    var tipoCurso = document.getElementById('tipoCurso').value;
   
    if(tipoCurso == ''){
        msgError += '* <b style="color:red">PREENCHA TIPO CURSO</b><br><br>';
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
