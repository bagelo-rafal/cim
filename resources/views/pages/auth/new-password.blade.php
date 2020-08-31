@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-12 pl-md-0">
            <div class="auth-form-wrapper py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">Reset hasła</a>
              <h5 class="text-muted font-weight-normal mb-4">Ustaw poniżej nowe hasło</h5>
              <form id="password-reset" class="forms-sample" action="" method="post">
                  @csrf
                  <input type="hidden" name="token" value="{{$token}}">
                  <input type="hidden" name="email" value="{{$email}}">
                <div class="form-group">
                  <label for="customer_new_password">Podaj nowe hasło</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Podaj nowe hasło do konta">
                </div>
                <div class="form-group">
                  <label for="customer_repeat_new_password">Powtórz nowe hasło</label>
                  <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Powtórz nowe hasło do konta">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">Ustaw nowe hasło</button>
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
