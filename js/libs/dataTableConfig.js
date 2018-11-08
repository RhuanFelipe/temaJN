$(document).ready(function() {
      var tabela = $('#fullTable').DataTable({
        "language": {
          "lengthMenu": "Mostrar _MENU_ por página",
          "zeroRecords": "não encontrado",
          "info": "Mostrar páginas _PAGE_ de _PAGES_",
          "infoEmpty": "Nenhum registro disponivel",
          "infoFiltered": "(filtrando from _MAX_ total de registros)"
        },
        dom: 'Bfrtip',
        buttons: [
            {extend: 'excel', text: '<i class="glyphicon glyphicon-th"></i> Excel' },{extend: 'pdf', text: '<i class="glyphicon glyphicon-file"></i> PDF' },{ extend: 'print', text: '<i class="glyphicon glyphicon-print"></i> Imprimir' }
        ]
        /*buttons: [
        'excel', 'pdf', 'print'
        ]*/
      });

      var tabela_min = $('#simpleTable').DataTable({
        "language": {
          "lengthMenu": "Mostrar _MENU_ por página",
          "zeroRecords": "não encontrado",
          "infoEmpty": "Nenhum registro disponivel",
          "infoFiltered": "(filtrando from _MAX_ total de registros)",

        },"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tudo"]]
      });
      tabela_min.buttons().disable();
    });