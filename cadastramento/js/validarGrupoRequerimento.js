function validarGrupoRequerimento(){
    var msgError = "";
    var error = 0;
    var tipoRequerimento = document.getElementById('tipo_requerimento').value;
    var grupoRequerimento = document.getElementById('grupoRequerimento').value;
   
    if(tipoRequerimento == ''){
        msgError += '* <b style="color:red">PREENCHA O TIPO REQUERIMENTO</b><br><br>';
        error++;
    }
    if(grupoRequerimento == ''){
        msgError += '* <b style="color:red">PREENCHA O GRUPO REQUERIMENTO</b><br><br>';
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
