function validarCoordenador(){
    var msgError = "";
    var error = 0;
    var senha = document.getElementById('senha').value;
    var senha_aux = document.getElementById('senha_aux').value;
    var nome = document.getElementById('nome').value;   
    var email = document.getElementById('email').value;   
    var matricula = document.getElementById('matricula_aluno').value;  
    var tipoCurso = document.getElementById('tipoCurso').value;  
    var curso = document.getElementById('curso').value;  
   
    if(nome == ''){
        msgError += '* <b style="color:red">PREENCHA O CAMPO NOME</b><br><br>';
        error++;
    }
    if(matricula == ''){
        msgError += '* <b style="color:red">INFORME UMA MATRICULA VÁLIDA</b><br><br>';
        error++;
    }
    if(tipoCurso == ''){
        msgError += '* <b style="color:red">PREENCHA O TIPO CURSO</b><br><br>';
        error++;
    }
    if(curso == ''){
        msgError += '* <b style="color:red">PREENCHA O CURSO</b><br><br>';
        error++;
    }
    if(email == ''){
        msgError += '* <b style="color:red">PREENCHA O CAMPO E-MAIL</b><br><br>';
        error++;
    }
    if(senha == ''){
        msgError += '* <b style="color:red">PREENCHA UMA SENHA VÁLIDA</b><br><br>';
        error++;
    }
    
    if(senha_aux == ''){
        msgError += '* <b style="color:red">PREENCHA O CAMPO REPETIR SENHA</b><br><br>';
        error++;
    } 
    if(senha !== senha_aux){
        msgError += '* <b style="color:red">SENHAS SÃO DIFERENTES</b><br><br>';
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