@extends('layout.master2')

@section('content')


<div class="page-content d-flex align-items-center justify-content-center">

    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-10 col-xl-8 mx-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 pl-md-0">
                        <div class="auth-form-wrapper py-5 mx-5">
                            <div class="logo-section my-3">
                                <img height="90px;" src="https://www.cudimiod.pl/wp-content/uploads/2016/12/logo-04.19.png" />
                                <h3 class="mb-4 mt-3">Załóż nowe konto w Cud i Miód</h3>
                            </div>
                            <form id="register-form" class="forms-sample" method="post">
                                @csrf
                                <div class="data1 mb-3">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <h4>Podstawowe dane kontaktowe</h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customer_firstname">Imię</label>
                                                <input type="text" class="form-control" name="first_name" id="customer_firstname" placeholder="Wpisz tutaj..." required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customer_lastname">Nazwisko</label>
                                                <input type="text" class="form-control" name="last_name" id="customer_lastname" placeholder="Wpisz tutaj..." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customer_firstname">Hasło</label>
                                                <input type="password" class="form-control" name="password" id="customer_password" placeholder="Wpisz tutaj..." required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customer_lastname">Potwierdź hasło</label>
                                                <input type="password" class="form-control" name="password_confirmation" id="customer_password_confirmation" placeholder="Wpisz tutaj..." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customer_email">Adres e-mail</label>
                                                <input type="email" class="form-control" name="email" id="customer_email" placeholder="Wpisz tutaj..." required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="customer_phone">Telefon</label>
                                                <input type="text" class="form-control" name="phone" id="customer_phone" placeholder="Wpisz tutaj..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="data1">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <h4>Domyślny adres dostawy</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="delivery_postcode">Kod pocztowy</label>
                                                <select name="delivery_postcode" class="js-example-basic-single w-100">
                                                    <option value="">78-400</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="delivery_city">Miejscowość</label>
                                                <select name="delivery_city" class="js-example-basic-single w-100">
                                                    <option value="">Szczecinek</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Adres</label>
                                                <select name="delivery_address" class="js-example-basic-single w-100">
                                                    <option value="">Kopernika 17A/3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
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
