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
<div class="data1 mb-3">
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
<div class="data1 mb-3">
    <div class="row">
        <div class="col-md-12 mb-2">
            <h4>Dane do faktury</h4>
        </div>
    </div>
    <div class="form-check form-check-flat form-check-primary my-3">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="invoice_enable">
            Wystawiaj automatycznie faktury za zamówienia cateringu
        </label>
    </div>
    <div class="company-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="company_name">Nazwa firmy</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Wpisz tutaj..." value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="company_nip">NIP firmy</label>
                    <input type="text" class="form-control" id="company_nip" name="company_nip" placeholder="Wpisz tutaj..." value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="company_address">Adres (ulica, nr domu)</label>
                    <input type="text" class="form-control" id="company_address" name="company_address" placeholder="Wpisz tutaj..." value="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="company_postcode">Kod pocztowy</label>
                    <input type="text" class="form-control" id="company_postcode" name="company_postcode" placeholder="Wpisz tutaj..." value="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="company_city">Miejscowość</label>
                    <input type="text" class="form-control" id="company_city" name="company_city" placeholder="Wpisz tutaj..." value="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="data1 mb-3">
    <div class="row">
        <div class="col-md-12 mb-3">
            <h4>Skąd o nas wiesz?</h4>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="source">Określ skąd dowiedziałeś/aś się o Cud i Miód?</label>
                <select name="source" class="js-example-basic-single w-100">
                    <option value="">Z Facebooka</option>
                    <option value="">Z Google</option>
                    <option value="">Od znajomych</option>
                </select>
            </div>
        </div>
    </div>
</div>
