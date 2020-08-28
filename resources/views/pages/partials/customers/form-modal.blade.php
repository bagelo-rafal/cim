<h5>Dane kontaktowe</h5>
<div class="row mt-3">
    <div class="col-md-4">
        <div class="form-group">
            <label for="customer_fullname" class="control-label">Imię i nazwisko</label>
            <input id="customer_fullname" type="text" class="form-control" name="customer_fullname">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="customer_email" class="control-label">Adres e-mail</label>
            <input id="customer_email" type="email" class="form-control" name="customer_email">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="customer_phone" class="control-label">Numer telefonu</label>
            <input id="customer_phone" type="text" class="form-control" name="customer_phone">
        </div>
    </div>
</div>
<h5>Domyślny adres dostawy</h5>
<div class="row mt-3 mb-3">
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
<h5>Wystawianie faktur VAT</h5>
<div class="form-check form-check-flat form-check-primary my-3">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="invoice_enable">
        Wystawiaj domyślnie faktury VAT dla tego klienta
        <i class="input-frame"></i></label>
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
<h5>Pozostałe informacje</h5>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="form-group">
            <label for="additional-info">Dodatkowe notatki</label>
            <textarea class="form-control" id="additional-info" rows="5"></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="source">Źródło</label>
            <select name="source" class="js-example-basic-single w-100">
                <option value="">Facebook</option>
                <option value="">Google</option>
                <option value="">Od znajomych</option>
                <option value="">Z reklamy</option>
            </select>
        </div>
    </div>
</div>
