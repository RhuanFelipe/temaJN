$(document).ready(function() {
      var tabela = $('#fullTable').DataTable(
        dom: 'Bfrtip',
        buttons: [
            {extend: 'excel', text: '<i class="glyphicon glyphicon-th"></i> Excel' },{extend: 'pdf', text: '<i class="glyphicon glyphicon-file"></i> PDF' },{ extend: 'print', text: '<i class="glyphicon glyphicon-print"></i> Imprimir' }
        ]
        /*buttons: [
        'excel', 'pdf', 'print'
        ]*/
      });
      var tabelaChamado = $('#fullTableChamado').DataTable(
        dom: 'Bfrtip',
        buttons: [
            {extend: 'excel', text: '<i class="glyphicon glyphicon-th"></i> Excel' },{extend: 'pdf', text: '<i class="glyphicon glyphicon-file"></i> PDF' },{ extend: 'print', text: '<i class="glyphicon glyphicon-print"></i> Imprimir' }
        ],
         "order": [[ 3, "desc" ]]
      });

      var tabela_min = $('#simpleTable').DataTable(
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tudo"]]
      });
      tabela_min.buttons().disable();


       var tabela_min_chamado = $('#simpleTableChamado').DataTable("lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tudo"]],
        "order": [[ 3, "desc" ]]
      });
      tabela_min_chamado.buttons().disable();
});