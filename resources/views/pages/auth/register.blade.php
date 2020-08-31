@extends('layout.master2')

@section('content')


<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-10 col-xl-8 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-12 pl-md-0">
            <div class="auth-form-wrapper py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">BeWell</a>
              <h5 class="text-muted font-weight-normal mb-4">Załóż nowe konto</h5>
              <form id="register-form" class="forms-sample" method="post">
                  @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="customer_firstname">Imię</label>
                      <input type="text" class="form-control" name="first_name" id="customer_firstname"   placeholder="Wpisz tutaj..." required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="customer_lastname">Nazwisko</label>
                      <input type="text" class="form-control" name="last_name"  id="customer_lastname" placeholder="Wpisz tutaj..." required>
                    </div>
                  </div>
                </div>
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label for="customer_firstname">Hasło</label>
                              <input type="password" class="form-control" name="password" id="customer_password"   placeholder="Wpisz tutaj..." required>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label for="customer_lastname">Potwierdź hasło</label>
                              <input type="password" class="form-control" name="password_confirmation"  id="customer_password_confirmation" placeholder="Wpisz tutaj..." required>
                          </div>
                      </div>
                  </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="customer_email">Adres e-mail</label>
                      <input type="email" class="form-control" name="email"  id="customer_email" placeholder="Wpisz tutaj..." required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="customer_phone">Telefon</label>
                      <input type="text" class="form-control" name="phone"  id="customer_phone" placeholder="Wpisz tutaj..." required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="customer_address">Adres (ulica, numer domu, numer lokalu)</label>
                      <input type="text" class="form-control" name="address"  id="customer_address" placeholder="Wpisz tutaj..." required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="customer_postcode">Kod pocztowy</label>
                      <input type="text" class="form-control" name="postcode"  id="customer_postcode" placeholder="Wpisz tutaj..." required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="customer_city">Miasto</label>
                      <input type="text" class="form-control" name="city" id="customer_city" placeholder="Wpisz tutaj..." required>
                    </div>
                  </div>
                </div>
                <div class="row zgody mt-3">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input id="consent1" type="checkbox" class="form-check-input" required>
                            Oświadczam, iż zapoznałem się z dostępnym <a href="https://b-well.pl/regulamin/" target="_blank">REGULAMINEM</a> BeWell (MTC COMPANY SP Z O. O. PORADNIA BEWELL SPÓŁKA KOMANDYTOWA, ul. Grzymińska 30A/15, 71-711 Szczecin, KRS: 0000755580, NIP: 8513231329, REGON: 381686002 oraz BeWell
                          KATARZYNA MAURICZ, ul. Śląska 52/U1, 70-430 Szczecin, NIP: 8513120937, REGON: 366286079) i zobowiązuje się do jego stosowania.
                          <i class="input-frame"></i></label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input id="consent2" type="checkbox" class="form-check-input" required>
                            Oświadczam, iż zapoznałem się z dostępną w <a href="https://b-well.pl/regulamin/" target="_blank">REGULAMINIE</a> BeWell (oraz dostępną również w <a href="" target="_blank">POLITYCE PRYWATNOŚCI</a> BeWell) firmy (MTC COMPANY SP Z O. O. PORADNIA
                          BEWELL SPÓŁKA KOMANDYTOWA, ul. Grzymińska 30A/15, 71-711 Szczecin, KRS: 0000755580, NIP: 8513231329, REGON: 381686002 oraz BeWell KATARZYNA MAURICZ, ul. Śląska 52/U1, 70-430 Szczecin, NIP: 8513120937, REGON: 366286079))
                          informacją o przetwarzaniu danych osobowych.
                          <i class="input-frame"></i></label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input id="consent3" type="checkbox" class="form-check-input" required>
                          Wyrażam zgodę/y na przetwarzanie moich danych osobowych (imienia, nazwisko, adresu, PESEL, telefon, adres poczty elektronicznej, identyfikatorów rozmówcy komunikatora internetowego, numeru rachunku bankowego, numeru NIP i
                          REGON) przez BeWell (MTC COMPANY SP Z O. O. PORADNIA BEWELL SPÓŁKA KOMANDYTOWA, ul. Grzymińska 30A/15, 71-711 Szczecin, KRS: 0000755580, NIP: 8513231329, REGON: 381686002 oraz BeWell KATARZYNA MAURICZ, ul. Śląska 52/U1,
                            70-430 Szczecin, NIP: 8513120937, REGON: 366286079) celem zawarcia umowy o świadczenie Usług oraz realizacji Usług ze strony BeWell, na zasadach określonych w <a href="https://b-well.pl/regulamin/" target="_blank">REGULAMINIE</a>, jak i <a href="" target="_blank">POLITYCE PRYWATNOŚCI</a>.
                          <i class="input-frame"></i></label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input id="consent4" type="checkbox" class="form-check-input" required>
                          Wyrażam zgodę/y na przetwarzanie moich danych osobowych przez BeWell (MTC COMPANY SP Z O. O. PORADNIA BEWELL SPÓŁKA KOMANDYTOWA, ul. Grzymińska 30A/15, 71-711 Szczecin, KRS: 0000755580, NIP: 8513231329, REGON: 381686002 oraz
                          BeWell KATARZYNA MAURICZ, ul. Śląska 52/U1, 70-430 Szczecin, NIP: 8513120937, REGON: 366286079)) w postaci danych o stanie zdrowia uzyskanych na podstawie przeprowadzonego wywiadu oraz przekazanych wyników badań, celem
                            zawarcia umowy o świadczenie Usług oraz realizacji Usług przez BeWell, na zasadach określonych w <a href="https://b-well.pl/regulamin/" target="_blank"> REGULAMINIE</a>, jak i <a href="" target="_blank">POLITYCE PRYWATNOŚCI</a>
                          <i class="input-frame"></i></label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input id="consent5-newsletter" name="newsletter-agree" type="checkbox" class="form-check-input">
                          Wyrażam zgodę/y na przetwarzanie moich danych osobowych (imienia, nazwisko, telefon, adres poczty elektronicznej,) przez BeWell (MTC COMPANY SP Z O. O. PORADNIA BEWELL SPÓŁKA KOMANDYTOWA, ul. Grzymińska 30A/15, 71-711
                          Szczecin, KRS: 0000755580, NIP: 8513231329, REGON: 381686002 oraz BeWell KATARZYNA MAURICZ, ul. Śląska 52/U1, 70-430 Szczecin, NIP: 8513120937, REGON: 366286079) w celach promocyjnych i marketingowych, w tym newslettera
                            BeWell – na zasadach określonych w <a href="https://b-well.pl/regulamin/" target="_blank"> REGULAMINIE</a>, <a href="https://b-well.pl/regulamin-newslettera/" target="_blank">REGULAMINIE NEWSLETTERA</a>, jak i <a href="" target="_blank">POLITYCE PRYWATNOŚCI</a>
                          <i class="input-frame"></i></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">Zarejestruj się</button>
                </div>
                <a href="{{ url('/auth/') }}" class="d-block mt-3 text-muted">Masz już konto? Zaloguj się</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
