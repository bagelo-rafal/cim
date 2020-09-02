<h5>Informacje podstawowe</h5>
<div class="row mt-3">
    <div class="col-md-6">
        <label for="menu_date">Menu na dzień</label>
        <div class="input-group date datepicker">
            <input id="{{$type}}-menu_date" name="menu_date" type="text" class="form-control">
            <span class="input-group-addon">
                <i data-feather="calendar"></i>
            </span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="diet_select">Dla diety</label>
            <select id="{{$type}}-diet_select" name="diet_select" class="js-example-basic-single w-100">
                <option value="standard">Dieta Standard</option>
                <option value="wege">Dieta Wege</option>
            </select>
        </div>
    </div>
</div>
<h5 class="mb-3">I śniadanie</h5>
<div class="data1 mb-3">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-1meal_default">Posiłek domyślny</label>
                <select id="{{$type}}-1meal_default" name="{{$type}}-1meal_default" class="js-example-basic-single w-100">
                    <option value="gofry">Gofry wieloziarniste z serkiem waniliowym, masłem orzechowym i malinami</option>
                    <option value="kanapki">Kanapki z pastą z awokado, chipsem z szynki parmeńskiej i rzodkiewką</option>
                </select>
                <span class="last_use mt-2">Wybrany posiłek był ostatnio w menu dnia 31.08.2020 (3 dni temu)</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-1meal_alt">Posiłki alternatywne</label>
                <select id="{{$type}}-1meal_alt" name="{{$type}}-1meal_alt" class="js-example-basic-multiple w-100" multiple="">
                    <option value="gofry">Gofry wieloziarniste z serkiem waniliowym, masłem orzechowym i malinami</option>
                    <option value="kanapki">Kanapki z pastą z awokado, chipsem z szynki parmeńskiej i rzodkiewką</option>
                </select>
            </div>
        </div>
    </div>
</div>
<h5 class="mb-3">II śniadanie</h5>
<div class="data1 mb-3">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-2meal_default">Posiłek domyślny</label>
                <select id="{{$type}}-2meal_default" name="{{$type}}-2meal_default" class="js-example-basic-single w-100">
                    <option value="gofry">Gofry wieloziarniste z serkiem waniliowym, masłem orzechowym i malinami</option>
                    <option value="kanapki">Kanapki z pastą z awokado, chipsem z szynki parmeńskiej i rzodkiewką</option>
                </select>
                <span class="last_use mt-2">Wybrany posiłek był ostatnio w menu dnia 31.08.2020 (3 dni temu)</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-2meal_alt">Posiłki alternatywne</label>
                <select id="{{$type}}-2meal_alt" name="{{$type}}-2meal_alt" class="js-example-basic-multiple w-100" multiple="">
                    <option value="gofry">Gofry wieloziarniste z serkiem waniliowym, masłem orzechowym i malinami</option>
                    <option value="kanapki">Kanapki z pastą z awokado, chipsem z szynki parmeńskiej i rzodkiewką</option>
                </select>
            </div>
        </div>
    </div>
</div>
<h5 class="mb-3">Obiad</h5>
<div class="data1 mb-3">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-3meal_default">Posiłek domyślny</label>
                <select id="{{$type}}-3meal_default" name="{{$type}}-3meal_default" class="js-example-basic-single w-100">
                    <option value="gofry">Gofry wieloziarniste z serkiem waniliowym, masłem orzechowym i malinami</option>
                    <option value="kanapki">Kanapki z pastą z awokado, chipsem z szynki parmeńskiej i rzodkiewką</option>
                </select>
                <span class="last_use mt-2">Wybrany posiłek był ostatnio w menu dnia 31.08.2020 (3 dni temu)</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-3meal_alt">Posiłki alternatywne</label>
                <select id="{{$type}}-3meal_alt" name="{{$type}}-3meal_alt" class="js-example-basic-multiple w-100" multiple="">
                    <option value="gofry">Gofry wieloziarniste z serkiem waniliowym, masłem orzechowym i malinami</option>
                    <option value="kanapki">Kanapki z pastą z awokado, chipsem z szynki parmeńskiej i rzodkiewką</option>
                </select>
            </div>
        </div>
    </div>
</div>
<h5 class="mb-3">Podwieczorek</h5>
<div class="data1 mb-3">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-4meal_default">Posiłek domyślny</label>
                <select id="{{$type}}-4meal_default" name="{{$type}}-4meal_default" class="js-example-basic-single w-100">
                    <option value="gofry">Gofry wieloziarniste z serkiem waniliowym, masłem orzechowym i malinami</option>
                    <option value="kanapki">Kanapki z pastą z awokado, chipsem z szynki parmeńskiej i rzodkiewką</option>
                </select>
                <span class="last_use mt-2">Wybrany posiłek był ostatnio w menu dnia 31.08.2020 (3 dni temu)</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-4meal_alt">Posiłki alternatywne</label>
                <select id="{{$type}}-4meal_alt" name="{{$type}}-4meal_alt" class="js-example-basic-multiple w-100" multiple="">
                    <option value="gofry">Gofry wieloziarniste z serkiem waniliowym, masłem orzechowym i malinami</option>
                    <option value="kanapki">Kanapki z pastą z awokado, chipsem z szynki parmeńskiej i rzodkiewką</option>
                </select>
            </div>
        </div>
    </div>
</div>
<h5 class="mb-3">Kolacja</h5>
<div class="data1 mb-3">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-5meal_default">Posiłek domyślny</label>
                <select id="{{$type}}-5meal_default" name="{{$type}}-5meal_default" class="js-example-basic-single w-100">
                    <option value="gofry">Gofry wieloziarniste z serkiem waniliowym, masłem orzechowym i malinami</option>
                    <option value="kanapki">Kanapki z pastą z awokado, chipsem z szynki parmeńskiej i rzodkiewką</option>
                </select>
                <span class="last_use mt-2">Wybrany posiłek był ostatnio w menu dnia 31.08.2020 (3 dni temu)</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-5meal_alt">Posiłki alternatywne</label>
                <select id="{{$type}}-5meal_alt" name="{{$type}}-5meal_alt" class="js-example-basic-multiple w-100" multiple="">
                    <option value="gofry">Gofry wieloziarniste z serkiem waniliowym, masłem orzechowym i malinami</option>
                    <option value="kanapki">Kanapki z pastą z awokado, chipsem z szynki parmeńskiej i rzodkiewką</option>
                </select>
            </div>
        </div>
    </div>
</div>
