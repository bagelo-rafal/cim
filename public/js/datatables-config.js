/* Toggle pól filtrowania */

$('body').on('click', '.search-toggle', function() {
    $('.filter-column').toggle();
});

/* Tabela z klientami */

$(document).ready(function() {
    var table = $('#customers-table, #diets-table, #reviews-table, #variants-table').DataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Polish.json"
        },
        dom: 'Bfrtip',
        orderCellsTop: true,
        scrollX: false,
        fixedHeader: false,
        responsive: false,
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

    /* Filtrowanie po kolumnach */

    $('thead tr').clone(true).appendTo('thead').addClass("filter-column");
    $('thead tr:eq(1) th').each(function(i) {
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
