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
      buttonImage: "images/calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
    $( ".dataFim" ).datepicker({
      showOn: "button",
      dateFormat: 'dd/mm/yy',
      buttonImage: "images/calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date"
    });

 });