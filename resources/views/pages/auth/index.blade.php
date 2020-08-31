@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-12">
            <div class="auth-form-wrapper py-5 mx-5">
              <img height="70px;" src="https://www.cudimiod.pl/wp-content/uploads/2016/12/logo-04.19.png" />
              <h5 class="text-muted font-weight-normal mb-4 mt-3">Witaj w Cud i Miód! Zaloguj się do swojego konta</h5>
              <form id="login-form" class="forms-sample" method="POST">
                  @csrf
                <div class="form-group">
                  <label for="customer_email">Adres e-mail</label>
                  <input type="email" name="email" class="form-control" value="{{old('email')}}" id="customer_email" placeholder="Twój adres e-mail">
                </div>
                <div class="form-group">
                  <label for="customer_passwd">Hasło</label>
                  <input type="password" name="password" class="form-control" id="customer_passwd" autocomplete="current-password" placeholder="Twoje hasło">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">Zaloguj się</button>
                </div>
                <a href="{{ url('/auth/reset') }}" class="d-block mt-3 text-muted">Nie pamiętam hasła</a>
                <a href="{{ url('/auth/register') }}" class="d-block mt-3 text-muted">Nie masz konta? Zarejestruj się!</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
