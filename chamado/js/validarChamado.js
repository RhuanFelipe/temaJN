 function gerarMatricula(){
   var matricula = Math.floor(Math.random() * (1000000, 99999999) + 1);
   while(matricula.toString().length != 8){
     matricula = Math.floor(Math.random() * (1000000, 99999999) + 1);
   }
   matricula = matricula.toString();
   matricula = matricula.substr(0,8);

   document.getElementById("matricula_novo").value = matricula;
 }
 gerarMatricula();
 
 function validarChamado(){
        var msgError = "";
        var error = 0;
        var tipoCurso = document.getElementById("tipoCurso").value;
        var curso = document.getElementById("curso").value;
        var matricula = document.getElementById("matricula").value;
        var unidade = document.getElementById("unidade").value;
        var tipoRequerimento = document.getElementById("tipo_requerimento").value;
        var grupoRequerimento = document.getElementById("grupo_requerimento").value;
        var requerimento = document.getElementById("requerimento").value;
        var assunto = document.getElementById("assunto").value;

        if(tipoCurso == ''){
           msgError += '* <b style="color:red">PREENCHA O CAMPO TIPO CURSO</b><br><br>';
           error++;
        }
        if(curso == ''){
           msgError += '* <b style="color:red">PREENCHA O CAMPO CURSO</b><br><br>';
           error++;
        }
        if(matricula == ''){
           msgError += '* <b style="color:red">PREENCHA O CAMPO ALUNO</b><br><br>';
           error++;
        }
        if(unidade == ''){
           msgError += '* <b style="color:red">PREENCHA O CAMPO UNIDADE</b><br><br>';
           error++;
        }
        if(tipoRequerimento == ''){
           msgError += '* <b style="color:red">PREENCHA O CAMPO TIPO REQUERIMENTO</b><br><br>';
           error++;
        }
        if(grupoRequerimento == ''){
           msgError += '* <b style="color:red">PREENCHA O CAMPO GRUPO REQUERIMENTO</b><br><br>';
           error++;
        }
        if(requerimento == ''){
           msgError += '* <b style="color:red">PREENCHA O CAMPO REQUERIMENTO</b><br><br>';
           error++;
        }
        if(assunto == ''){
           msgError += '* <b style="color:red">PREENCHA O CAMPO ASSUNTO</b><br><br>';
           error++;
        }
        
        if(error != 0){
           bootbox.alert({
                title: "ERROR AO CADASTRAR CHAMADO",
                message: msgError
                
            });

           return false;
        }
    }