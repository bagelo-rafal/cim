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
            <div class="auth-form-wrapper py-5 mx-5">
              <a href="#" class="noble-ui-logo d-block mb-2">Ustawienie nowego hasła</a>
              <h5 class="text-muted font-weight-normal mb-4">Ustaw poniżej nowe hasło do swojego konta w celu jego aktywacji</h5>
              <form id="password-set" class="forms-sample" method="POST" action="">
                  @csrf
                <div class="form-group">
                  <label for="password">Podaj nowe hasło</label>
                  <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="row zgody mt-3">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input id="consent1" type="checkbox" class="form-check-input" required>
                                    Oświadczam, iż zapoznałem się z dostępnym <a href="#" target="_blank">REGULAMINEM</a> Cud i Miód (Cud i Miód Catering Piotr Śmieszek przy ul. Naramowicka 92 w Poznaniu 61-619, wpisaną do Centralnej
                                    Ewidencji i Informacji o Działalności Gospodarczej pod NIP 855 156 16 84, REGON 301077194) i zobowiązuje się do jego stosowania.
                                    <i class="input-frame"></i></label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input id="consent2" type="checkbox" class="form-check-input" required>
                                    Oświadczam, iż zapoznałem się z dostępną w <a href="#" target="_blank">REGULAMINIE</a> Cud i Miód (oraz dostępną również w <a href="" target="_blank">POLITYCE PRYWATNOŚCI</a> Cud i Miód) firmy (Cud
                                    i Miód Catering Piotr Śmieszek przy ul. Naramowicka 92 w Poznaniu 61-619, wpisaną do Centralnej Ewidencji i Informacji o Działalności Gospodarczej pod NIP 855 156 16 84, REGON 301077194))
                                    informacją o przetwarzaniu danych osobowych.
                                    <i class="input-frame"></i></label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input id="consent5-newsletter" name="newsletter-agree" type="checkbox" class="form-check-input">
                                    Wyrażam zgodę/y na przetwarzanie moich danych osobowych (imienia, nazwisko, telefon, adres poczty elektronicznej,) przez Cud i Miód (Cud i Miód Catering Piotr Śmieszek przy ul. Naramowicka 92 w
                                    Poznaniu 61-619, wpisaną do Centralnej Ewidencji i Informacji o Działalności Gospodarczej pod NIP 855 156 16 84, REGON 301077194) w celach promocyjnych i marketingowych, w tym newslettera
                                    Cud i Miód – na zasadach określonych w <a href="#" target="_blank"> REGULAMINIE</a>, <a href="#" target="_blank">REGULAMINIE NEWSLETTERA</a>, jak i <a href="" target="_blank">POLITYCE
                                        PRYWATNOŚCI</a>
                                    <i class="input-frame"></i></label>
                            </div>
                        </div>
                    </div>
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
