{{-- W tym widoku wyświetlamy listę pwszystkich klientów + możemy edytować/dodawać klientów w modalach --}}
@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 mb-3">
        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target=".customer-add-modal" tabindex="-1" role="button" aria-disabled="false">Dodaj klienta</a>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-start mb-2">
                    <div class="col-md-12">
                        <table id="customers-table" class="table display">
                            @include('pages.partials.customers.list-table')
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal edycja klienta --}}

<div class="modal fade customer-edit-modal" role="dialog" aria-labelledby="editCustomerModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="edit-customer">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edytuj klienta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type='hidden' name='id' value='2'>
                    @include('pages.partials.customers.form-modal')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-primary">Zapisz zmiany</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal dodawanie klienta --}}

<div class="modal fade customer-add-modal" role="dialog" aria-labelledby="addCustomerModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="add-customer">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Dodaj klienta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('pages.partials.customers.form-modal')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button type="button" class="btn btn-primary">Dodaj klienta</button>
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
    $('.company-data').hide();

    $('input[name="invoice_enable"]').change(function() {
        if ($(this).is(':checked')) {
            $('.company-data').show();
            $('.company-data input').prop('required', true);
        } else {
            $('.company-data').hide();
            $('.company-data input').prop('required', false);
        }
    });
</script>

@endpush
