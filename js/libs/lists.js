 $(function(){
     var tipo_curso_id = $(".tipo_curso_id").val();
     var unidade_id = $(".unidade_id").val();
     var tipo_requerimento_id = $(".tipo_requerimento_id").val();
     var grupo_requerimento_id = $(".grupo_requerimento_id").val();
     var requerimento_id = $(".requerimento_id").val();
     var grupoId = $('.grupoId').val();
     var valor_id = this.value;

      if(tipo_curso_id != null)
        valor_id = tipo_curso_id;
      else
        valor_id = "";

      if(unidade_id != null)
        unidade_id = unidade_id;
      else
        unidade_id = "";

     if(tipo_requerimento_id != null)
      tipo_requerimento_id = tipo_requerimento_id;
     else
      tipo_requerimento_id = "";

     if(grupo_requerimento_id != null)
      grupo_requerimento_id = grupo_requerimento_id;
     else
      grupo_requerimento_id = "";

     if(requerimento_id != null)
      requerimento_id = requerimento_id;
     else
      requerimento_id = "";
    
     $("#tipoCurso").load("biblioteca/list/listarTipoCurso.php?id="+valor_id,function(){
        var curso_id = $(".curso_id").val();

         if(curso_id != null)
          curso_id = curso_id;
        else
          curso_id = "";

      $("#curso").load( "biblioteca/list/listarCurso.php?id="+this.value+"&idTipoCurso="+curso_id,function(){ 
         var pessoa_id = $(".pessoa_id").val();

         if(pessoa_id != null)
          pessoa_id = pessoa_id;
        else
          pessoa_id = "";

        $("#aluno").load( "biblioteca/list/listarAluno.php?id="+this.value+"&pessoa_id="+pessoa_id);
      });
    });

    $("#unidade").load("biblioteca/list/listarUnidade.php?id="+unidade_id);

    $("#tipo_requerimento").load("biblioteca/list/listarTipoRequerimento.php?id="+tipo_requerimento_id,function(){
      $("#grupo_requerimento").load( "biblioteca/list/listarGrupoRequerimento.php?id="+this.value+"&idGrupo="+grupo_requerimento_id,function(){
      $("#requerimento").load( "biblioteca/list/listarRequerimento.php?id="+this.value+"&idRequerimento="+requerimento_id);
    });
    });
    $("#curso").change(function(){
        $("#aluno").load( "biblioteca/list/listarAluno.php?id="+this.value);
      });
    $("#tipoCurso").change(function(){
     $("#curso").load( "biblioteca/list/listarCurso.php?id="+this.value);
   });

    $("#tipo_requerimento").change(function(){
     $("#grupo_requerimento").load( "biblioteca/list/listarGrupoRequerimento.php?id="+this.value,function(){
        $("#requerimento").load( "biblioteca/list/listarRequerimento.php?id="+this.value);
     });

   });
    $("#grupo_requerimento").change( "biblioteca/list/listarGrupoRequerimento.php?id="+this.value,function(){
     $("#requerimento").load( "biblioteca/list/listarRequerimento.php?id="+this.value);
   });

    $("#grupo_requerimento_all").load( "biblioteca/list/listarGrupoRequerimentoAll.php?grupoId="+grupoId); 
    $("#cursoAll").load( "biblioteca/list/listarCursoAll.php"); 
 });
