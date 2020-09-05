@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 mb-3">
        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target=".meal-add-modal" tabindex="-1" role="button" aria-disabled="false">Dodaj posiłek</a>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-start mb-2">
                    <div class="col-md-12">
                        <table id="meal-table" class="table display">
                            @include('pages.partials.diets.meal.meal.list-table')
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal edycja --}}

<div class="modal fade meal-edit-modal" role="dialog" aria-labelledby="editMealModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="edit-meal">
                <div class="modal-header">
                    <h5 class="modal-title">Edytuj posiłek</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type='hidden' name='id' value='5'>
                    @include('pages.partials.diets.meal.meal.form-modal', ['type'=>'edit'])
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

<div class="modal fade meal-add-modal" role="dialog" aria-labelledby="addMealModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="add-meal">
                <div class="modal-header">
                    <h5 class="modal-title">Dodaj posiłek</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('pages.partials.diets.meal.meal.form-modal', ['type'=>'create'])
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-primary">Dodaj posiłek</button>
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


  $( "#create-recounting-type" ).change(function() {
    if ($('#create-recounting-type').val() === "fixed-sizes"){
        	 $('.fixed-sizes-block').css({"display": "block"});
        } else {
          $('.fixed-sizes-block').css({"display": "none"});
        }
  });
  $( "#edit-recounting-type" ).change(function() {
    if ($('#edit-recounting-type').val() === "fixed-sizes"){
        	 $('.fixed-sizes-block').css({"display": "block"});
        } else {
          $('.fixed-sizes-block').css({"display": "none"});
        }
  });

  $(document).ready(function() {
      var tableMeal = $('#meal-table').DataTable({
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

      $('#meal-table thead tr').clone(true).appendTo('#meal-table thead').addClass("filter-column");
      $('#meal-table thead tr:eq(1) th').each(function(i) {
          var titleMeal = $(this).text();
          $(this).html('<input class="column-search" type="text" placeholder="' + titleMeal + '" />');

          $('input', this).on('keyup change', function() {
              if (tableMeal.column(i).search() !== this.value) {
                  tableMeal
                      .column(i)
                      .search(this.value)
                      .draw();
              }
          });
      });
  });
  </script>
@endpush
