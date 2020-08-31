@extends('layout.master2')

@section('content')
<div class="alert alert-success zapisano" role="alert">
  Hasło ustawione. Możesz zalogować się do swojego konta.
</div>

<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-12 pl-md-0">
            <div class="auth-form-wrapper py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">Ustawienie nowego hasła</a>
              <h5 class="text-muted font-weight-normal mb-4">Ustaw poniżej nowe hasło do swojego konta</h5>
              <form id="password-set" class="forms-sample" method="POST" action="">
                  @csrf
                <div class="form-group">
                  <label for="password">Podaj nowe hasło</label>
                  <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">Resetuj hasło</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
