@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 mb-3">
        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target=".menu-add-modal" tabindex="-1" role="button" aria-disabled="false">Dodaj menu</a>
    </div>
    test
</div>
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-start mb-2">
                    <div class="col-md-12">
                        <table id="menu-table" class="table display">
                            @include('pages.partials.diets.menu.list-table')
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal edycja --}}

<div class="modal fade menu-edit-modal" role="dialog" aria-labelledby="editMenuModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="edit-menu">
                <div class="modal-header">
                    <h5 class="modal-title">Edytuj menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type='hidden' name='id' value='5'>
                    @include('pages.partials.diets.menu.form-modal',['type' => 'edit'])
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

<div class="modal fade menu-add-modal" role="dialog" aria-labelledby="addMenuModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="add-menu">
                <div class="modal-header">
                    <h5 class="modal-title">Dodaj menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('pages.partials.diets.menu.form-modal',['type' => 'create'])
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-primary">Dodaj menu</button>
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
$(function() {
    if (document.location.href.indexOf('#add') > -1) {
         $(".menu-add-modal").modal()
    }
});
</script>
@endpush
