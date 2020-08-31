{{-- W tym widoku wyświetlamy listę wszystkich diet + możemy edytować/dodawać diety w modalach --}}
@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 mb-3">
        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target=".diet-add-modal" tabindex="-1" role="button" aria-disabled="false">Dodaj dietę</a>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-start mb-2">
                    <div class="col-md-12">
                        <table id="diets-table" class="table display">
                            @include('pages.partials.diets.diets.list-table')
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal edycja diety --}}

<div class="modal fade diet-edit-modal" role="dialog" aria-labelledby="editDietModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="edit-diet">
                <div class="modal-header">
                    <h5 class="modal-title">Edytuj dietę</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type='hidden' name='id' value='5'>
                    @include('pages.partials.diets.diets.form-modal')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-primary">Zapisz zmiany</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal dodawanie diety --}}

<div class="modal fade diet-add-modal" role="dialog" aria-labelledby="addDietModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="add-diet">
                <div class="modal-header">
                    <h5 class="modal-title">Dodaj dietę</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('pages.partials.diets.diets.form-modal')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-primary">Dodaj dietę</button>
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

@endpush
