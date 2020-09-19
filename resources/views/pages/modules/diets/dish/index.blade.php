@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 mb-3">
        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target=".dish-add-modal" tabindex="-1" role="button" aria-disabled="false">Dodaj potrawę</a>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-start mb-2">
                    <div class="col-md-12">
                        <table id="dish" class="table display">
                            @include('pages.partials.diets.dish.table')
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal edycja --}}

<div class="modal fade dish-edit-modal" role="dialog" aria-labelledby="dishIngrModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="edit-dish">
                <div class="modal-header">
                    <h5 class="modal-title">Edytuj potrawę</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type='hidden' name='id' value='5'>
                    @include('pages.partials.diets.dish.form', ['type'=>'edit'])
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-primary">Zapisz zmiany</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal dodawanie --}}

<div class="modal fade dish-add-modal" role="dialog" aria-labelledby="addDishModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="add-dish">
                <div class="modal-header">
                    <h5 class="modal-title">Dodaj potrawę</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('pages.partials.diets.dish.form', ['type'=>'create'])
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-primary">Dodaj potrawę</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('plugin-scripts')
{!! Html::script('js/app.js') !!}
@endpush

@push('custom-scripts')
<script>

/* Toggle pól filtrowania */

$('body').on('click', '.search-toggle', function() {
    $('.filter-column').toggle();
});

/* Tabele */

$(document).ready(function() {
    var table = $('#dish, #dish-ingr-table').DataTable({
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
                text: '<i class="fas fa-file-excel"></i>',
                attr: {
                  'data-toggle': 'tooltip',
                  'data-placement': 'top',
                  'title': 'Export do Excel'
                }
            },
            {
                text: '<i class="fas fa-filter"></i>',
                className: 'btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0 search-toggle',
                attr: {
                  'data-toggle': 'tooltip',
                  'data-placement': 'top',
                  'title': 'Filtruj tabelę'
                }
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print"></i>',
                className: 'btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0',
                attr: {
                  'data-toggle': 'tooltip',
                  'data-placement': 'top',
                  'title': 'Drukuj widoczne'
                }
            }
        ]
    });

    /* Filtrowanie po kolumnach */

    $('#dish thead tr').clone(true).appendTo('#dish thead').addClass("filter-column");
    $('#dish thead tr:eq(1) th').each(function(i) {
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

$(function() {
    if (document.location.href.indexOf('#add') > -1) {
         $(".dish-add-modal").modal()
    }
});
</script>
@endpush
