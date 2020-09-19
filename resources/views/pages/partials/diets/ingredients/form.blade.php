
    <div class="form-group">
        <label for="{{$type}}_ingr_name" class="form-control-label">Nazwa składnika</label>
        <input id="{{$type}}_ingr_name" name="{{$type}}_ingr_name" type="text" value="" class="form-control">
    </div>
    <div class="form-group">
        <label for="{{$type}}_ingr_category" class="form-control-label">Kategoria składnika</label>
        <select id="{{$type}}_ingr_category" name="{{$type}}_ingr_category"
            class="js-example-basic-single form-control">
            <option value="przyprawy">Option 1</option>
            <option value="warzywa">Option 2</option>
        </select>
    </div>
    <div class="form-group">
        <label for="{{$type}}_ingr_price" class="form-control-label">Cena składnika (za 100g)</label>
        <input id="{{$type}}_ingr_price" name="{{$type}}_ingr_price" type="number" value="" class="form-control">
    </div>
    <div class="form-group">
        <label for="{{$type}}_ingr_unit" class="form-control-label">Jednostka</label>
        <select id="{{$type}}_ingr_unit" name="{{$type}}_ingr_unit" class="js-example-basic-single form-control">
            <option value="option-1">Option 1</option>
            <option value="option-2">Option 2</option>
        </select>
    </div>
    <div class="form-group">
        <label for="{{$type}}_ingr_weight" class="form-control-label">Waga jednostki</label>
        <input id="{{$type}}_ingr_weight" name="{{$type}}_ingr_weight" type="number" value="" class="form-control">
    </div>
    <h5>Kalorie i wartości odżywcze dla 100g</h5>
    <div class="form-group">
        <label for="{{$type}}_ingr_cal" class="form-control-label">Ilość kalorii</label>
        <input id="{{$type}}_ingr_cal" name="{{$type}}_ingr_cal" type="number" value="" class="form-control">
    </div>
    <div class="form-group">
        <label for="{{$type}}_ingr_bialko" class="form-control-label">Ilość białka</label>
        <input id="{{$type}}_ingr_bialko" name="{{$type}}_ingr_bialko" type="number" value="" class="form-control">
    </div>
    <div class="form-group">
        <label for="{{$type}}_ingr_wegl" class="form-control-label">Ilość węglowodanów</label>
        <input id="{{$type}}_ingr_wegl" name="{{$type}}_ingr_wegl" type="number" value="" class="form-control">
    </div>
    <div class="form-group">
        <label for="{{$type}}_ingr_tluszcze" class="form-control-label">Ilość tłuszczów</label>
        <input id="{{$type}}_ingr_tluszcze" name="{{$type}}_ingr_tluszcze" type="number" value="" class="form-control">
    </div>
    <div class="form-group">
        <label for="{{$type}}_ingr_sol" class="form-control-label">Ilość soli</label>
        <input id="{{$type}}_ingr_sol" name="{{$type}}_ingr_sol" type="number" value="" class="form-control">
    </div>
    <h5>Pozostałe informacje</h5>
    <div class="form-group">
        <label for="{{$type}}_ingr_wot" class="form-control-label">Wartość obróbki termicznej</label>
        <input id="{{$type}}_ingr_wot" name="{{$type}}_ingr_wot" type="number" value="0" class="form-control">
        <small class="form-text text-muted">Procentowa wartość utraty wagi składnika po obróbce termicznej</small>
    </div>
    <div class="form-group">
        <label for="{{$type}}_ingr_alergeny" class="form-control-label">Alergeny</label>
        <select id="{{$type}}_ingr_alergeny" name="{{$type}}_ingr_alergeny" multiple="true"
            class="js-example-basic-multiple form-control">
            <option value="option-11">Option 1</option>
            <option value="option-22">Option 2</option>
        </select>
    </div>
