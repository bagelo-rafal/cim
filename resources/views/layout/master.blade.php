<!DOCTYPE html>
<html>

<head>
    <title>{{$title}} - Cud i Miód - system zarządzania cateringiem dietetycznym</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

    <!-- plugin css -->
    {!! Html::style('/assets/fonts/feather-font/css/iconfont.css') !!}
    {!! Html::style('/assets/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}
    {!! Html::style('/assets/plugins/select2/select2.min.css') !!}
    {!! Html::style('/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') !!}
    {!! Html::style('/assets/plugins/datatables-net/dataTables.bootstrap4.css') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script> <!-- end common css -->

    <!-- end plugin css -->

    @stack('plugin-styles')

    <link href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" />

    <!-- common css -->
    {!! Html::style('css/app.css') !!}
    <!-- end common css -->

    @stack('style')
</head>

<body data-base-url="{{url('/')}}">

    {!! Html::script('/assets/js/spinner.js') !!}

    <div class="main-wrapper" id="app">
        @include('layout.header')
        <div class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
            @include('layout.footer')
        </div>
    </div>

    <!-- base js -->
    {!! Html::script('js/app.js') !!}
    {!! Html::script('/assets/plugins/feather-icons/feather.min.js') !!}
    {!! Html::script('/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') !!}
    <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')

    {!! Html::script('/assets/plugins/select2/select2.min.js') !!}
    {!! Html::script('/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') !!}
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/promise-polyfill/polyfill.min.js') }}"></script>

    <!-- end plugin js -->

    <!-- common js -->
    {!! Html::script('/assets/js/template.js') !!}
    <!-- end common js -->

    @stack('custom-scripts')
    {!! Html::script('js/datepicker-config.js') !!}
    {!! Html::script('js/datatables-config.js') !!}
    {!! Html::script('js/select2-config.js') !!}
    {!! Html::script('js/custom-scripts.js') !!}
    <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/b-1.6.3/b-colvis-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js"></script>

</body>

</html>
