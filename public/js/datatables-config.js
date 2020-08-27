/* Toggle pól filtrowania */

$('body').on('click', '.search-toggle', function() {
  $('.filter-column').toggle();
});

/* Customers Table */

$(document).ready(function() {
    var table = $('#customers-table').DataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Polish.json"
        },
        dom: 'Bfrtip',
        orderCellsTop: true,
        scrollX: false,
        fixedHeader: true,
        responsive: true,
        searching: true,
        filtering: false,
        paging: true,
        buttons: [{
                extend: 'excelHtml5',
                className: 'btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0 export-excel',
                text: '<i class="fas fa-file-excel"></i>'
            },
            {
                text: '<i class="fas fa-search"></i>',
                className: 'btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0 search-toggle'
            }
        ]
    });

    // Filtrowanie po kolumnach

    $('#customers-table thead tr').clone(true).appendTo('#customers-table thead').addClass("filter-column");
    $('#customers-table thead tr:eq(1) th').each(function(i) {
      var title = $(this).text();
      $(this).html('<input class="column-search" type="text" placeholder="' + title + '" />');

      $('input', this).on('keyup change', function() {
        if (table.column(i).search() !== this.value) {
          table
            .column(i)
            .search(this.value)
            .draw();
        }
      });
    });
});
