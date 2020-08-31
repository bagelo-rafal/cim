@extends('layout.master2')

@section('content')
<div class="alert alert-success zapisano" role="alert">
  Link do resetu hasła został wysłany na podany adres e-mail
</div>
<div class="alert alert-danger error" role="alert">
  Brak użytkownika z podanym adresem e-mail
</div>

<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-12 pl-md-0">
            <div class="auth-form-wrapper py-5 mx-5">
              <a href="#" class="noble-ui-logo d-block mb-2">Reset hasła</a>
              <h5 class="text-muted font-weight-normal mb-4">Jeśli zapomniałeś/aś swojego hasła, wpisz poniżej adres e-mail na jaki masz zarejestrowane konto, a wyślemy na niego link do resetu hasła.</h5>
              <form id="password-reset" class="forms-sample" action="" method="POST">
                  @csrf
                <div class="form-group">
                  <label for="customer_email_reset">Adres e-mail</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Twój adres e-mail">
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
