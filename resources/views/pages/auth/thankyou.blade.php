@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-10 col-xl-8 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-12 pl-md-0 mx-5">
            <div style="text-align:center;" class="auth-form-wrapper py-4">
              <a href="#" class="noble-ui-logo d-block mb-2">Dziękujemy za rejestrację</a>
              <h5 class="text-muted font-weight-normal">Odbierz wiadomość e-mail - wysłaliśmy Ci tam potwierdzenie rejestracji wraz z danymi do logowania.</h5>
            </div>
            <div style="text-align: center;margin-left: auto;margin-right: auto;" class="col-sm-4 mb-4">
              <a href="/" class="btn btn-sm btn-success" tabindex="-1" role="button" aria-disabled="false">Do logowania</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
