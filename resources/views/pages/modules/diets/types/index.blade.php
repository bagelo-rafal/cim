{{-- W tym widoku wyświetlamy listę wszystkich wariantów kalorycznych + możemy edytować/dodawać warianty w modalach --}}
@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 mb-3">
        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target=".type-add-modal" tabindex="-1" role="button" aria-disabled="false">Dodaj typ</a>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-start mb-2">
                    <div class="col-md-12">
                        <table id="types-table" class="table display">
                            @include('pages.partials.diets.types.list-table')
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal edycja --}}

<div class="modal fade type-edit-modal" role="dialog" aria-labelledby="editTypesModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="edit-type">
                <div class="modal-header">
                    <h5 class="modal-title">Edytuj typ diety</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type='hidden' name='id' value='5'>
                    @include('pages.partials.diets.types.form-modal')
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

<div class="modal fade type-add-modal" role="dialog" aria-labelledby="addTypeModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="add-type">
                <div class="modal-header">
                    <h5 class="modal-title">Dodaj typ diety</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('pages.partials.diets.types.form-modal')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-primary">Dodaj typ</button>
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
