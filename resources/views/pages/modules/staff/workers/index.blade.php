@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 mb-3">
        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target=".worker-add-modal" tabindex="-1" role="button" aria-disabled="false">Dodaj pracownika</a>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-start mb-2">
                    <div class="col-md-12">
                        <table id="workers-table" class="table display">
                            @include('pages.partials.staff.workers.list-table')
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal edycja --}}

<div class="modal fade worker-edit-modal" role="dialog" aria-labelledby="editWorkerModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="edit-worker">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edytuj pracownika</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type='hidden' name='id' value='2'>
                    @include('pages.partials.auth.register-form', ['type'=>'edit'])
                    <div class="data1 mb-3 role-sec">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h4>Przypisz rolę pracownikowi</h4>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                  <label for="edit_worker_role">Rola</label>
                                  <select id="edit_worker_role" name="edit_worker_role" class="js-example-basic-single w-100">
                                      <option value="">Dietetyk</option>
                                  </select>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal dodawanie --}}

<div id="add-worker-modal" class="modal fade worker-add-modal" role="dialog" aria-labelledby="addWorkerModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="add-worker">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Dodaj pracownika</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('pages.partials.auth.register-form', ['type'=>'create'])
                    <div class="data1 mb-3 role-sec">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h4>Przypisz rolę pracownikowi</h4>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                  <label for="add_worker_role">Rola</label>
                                  <select id="add_worker_role" name="add_worker_role" class="js-example-basic-single w-100">
                                      <option value="">Dietetyk</option>
                                  </select>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button type="submit" class="btn btn-primary">Dodaj pracownika</button>
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

</script>

@endpush
