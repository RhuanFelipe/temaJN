$(function(){
  $(".btn-cad-aluno").click(function(){
      var nome = $("#nome").val();
      var periodo = $("#periodo").val();
      var email = $("#email").val();
      var telefone = $("#telefone").val();
      var tipoCurso = $(".tipoCursoModal").val();
      var curso = $(".curso").val();
      var matricula = $("#matricula_novo").val();

      var msgError = "";
      var error = 0;

      if(nome == ''){
         msgError += '* <b style="color:red">PREENCHA O CAMPO NOME</b><br><br>';
         error++;
      }
      if(matricula == ''){
         msgError += '* <b style="color:red">PREENCHA O MATRICULA</b><br><br>';
         error++;
      }
      if(periodo == ''){
         msgError += '* <b style="color:red">PREENCHA O PERIODO</b><br><br>';
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
         msgError += '* <b style="color:red">PREENCHA O E-MAIL</b><br><br>';
         error++;
      }
      if(telefone == ''){
         msgError += '* <b style="color:red">PREENCHA O TELEFONE</b><br><br>';
         error++;
      }
      if(error != 0){
         bootbox.alert({
              title: "ERROR AO CADASTRAR CHAMADO",
              message: msgError             
        });
      }else{
        $.ajax({
            type: "POST",
            url: "chamado/salvarAluno.php",
            data: $("#form-cad-aluno").serialize(),
            success: function(data){
              $(".btn-fechar-cadAluno").trigger("click");
              $("#matricula").val(data);
              $("#matricula").focus();
            }
          });
      } 
    }); 
});
 