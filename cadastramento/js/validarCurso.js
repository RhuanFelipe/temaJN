function validarCurso(){
    var msgError = "";
    var error = 0;
    var tipoCurso = document.getElementById('tipoCurso').value;
    var curso = document.getElementById('curso').value;
   
    if(tipoCurso == ''){
        msgError += '* <b style="color:red">PREENCHA TIPO CURSO</b><br><br>';
        error++;
    }

   if(curso == ''){
        msgError += '* <b style="color:red">PREENCHA O CURSO</b><br><br>';
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
