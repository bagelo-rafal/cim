@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h5>Dane strefy</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row align-items-start mb-2">
                            <div class="col-md-12">
                                <form id="edit-zone">
                                    <input type='hidden' name='id' value='2'>
                                    @include('pages.partials.logistic.zones.form')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h5>Dodaj listę miejscowości</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row align-items-start mb-2">
                            <div class="col-md-12">
                                <form id="edit-places">
                                    <input type='hidden' name='id' value='2'>
                                    @include('pages.partials.logistic.zones.form-places')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-3">
        <h5>Lista miejscowości</h5>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-start mb-2">
                    <div class="col-md-12">
                        <table id="places-table" class="table display">
                            @include('pages.partials.logistic.zones.places-table')
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('plugin-scripts')
{!! Html::script('js/app.js') !!}
@endpush

@push('custom-scripts')

@endpush