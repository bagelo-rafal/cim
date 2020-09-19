@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-start mb-2">
                    <div class="col-md-12">
                        <table id="report-table" class="table display">
                            @include('pages.partials.logistic.report-table')
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
