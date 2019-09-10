$( function() {
  var data = new Date();
  var dia = data.getDate();
  var mes = data.getMonth() + 1;
  var ano = data.getFullYear();
  var dataCompleta = dia + "/" + mes + "/" + ano;
  $( ".dataInicio" ).val(dataCompleta);
  $( ".dataFim" ).val(dataCompleta);
  
    $( ".dataInicio" ).datepicker({
      showOn: "button",
       dateFormat: 'dd/mm/yy',
       dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
       dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
       dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
       monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
       monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
       nextText: 'Proximo',
       prevText: 'Anterior',
      buttonImage: "images/calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
    $( ".dataFim" ).datepicker({
      showOn: "button",
       dateFormat: 'dd/mm/yy',
       dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
       dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
       dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
       monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
       monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
       nextText: 'Proximo',
       prevText: 'Anterior',
      buttonImage: "images/calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date"
    });

 });