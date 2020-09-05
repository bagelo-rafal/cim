<h5>Informacje podstawowe</h5>
<div class="data1 mt-3 mb-3">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="meal_name">Nazwa posiłku</label>
                <input type="text" class="form-control" id="{{$type}}-meal_name" name="meal_name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="{{$type}}-meal-category">Kategoria posiłku</label>
                <select id="{{$type}}-meal-category" name="{{$type}}-meal-category" class="js-example-basic-multiple w-100" multiple="">
                    <option value="sniadanie">Śniadanie</option>
                    <option value="2sniadanie">II Śniadanie</option>
                    <option value="obiad">Obiad</option>
                    <option value="podwieczorek">Podwieczorek</option>
                    <option value="kolacja">Kolacja</option>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-meal-exclusion">Wykluczenia</label>
                <select id="{{$type}}-meal-exclusion" name="{{$type}}-meal-exclusion" class="js-example-basic-multiple w-100" multiple="">
                    <option value="bez-laktozy">Bez laktozy</option>
                    <option value="orzechy">Zawiera orzechy</option>
                    <option value="bez-glutenu">Zawiera gluten</option>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-recounting-type">Sposób przeliczania kaloryczności</label>
                <select id="{{$type}}-recounting-type" name="{{$type}}-recounting-type" class="js-example-basic-single w-100">
                    <option value="proportionally">Proporcjonalnie</option>
                    <option value="fixed-sizes">Stałe wielkości</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 fixed-sizes-block">
            <div class="form-group">
                <label for="{{$type}}-fixed-sizes">Przypisz stałą wielkość do tego posiłku</label>
                <select id="{{$type}}-fixed-sizes" name="{{$type}}-fixed-sizes" class="js-example-basic-single w-100">
                    <option value=""></option>
                    <option value="size1">Rozmiar S – 250ml</option>
                    <option value="size2">Rozmiar M – 350ml</option>
                    <option value="size3">Rozmiar L – 500ml</option>
                </select>
            </div>
        </div>
    </div>
</div>
<h5>Potrawy i składniki</h5>
<span>Określ z jakich potraw i składników ma składać się dodawany posiłek</span>
<div class="alert alert-fill-secondary mt-2" role="alert">
	Uwaga! Docelowa wartość kaloryczna posiłku to 1000 kcal
</div>
<div class="data1 mt-3 mb-3">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="{{$type}}-dish">Wybierz potrawę lub składnik</label>
                <select id="{{$type}}-dish" name="{{$type}}-dish" class="js-example-basic-single w-100">
                    <option value=""></option>
                    <option value="makaron">Makaron ugotowany</option>
                    <option value="sos">Sos Spaghetti</option>
                    <option value="puree">Puree</option>
                    <option value="sol">Sól</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label for="{{$type}}-dish-count">Podaj ilość</label>
            <div class="input-group">
                <input type="number" step="0.1" class="form-control" id="{{$type}}-dish-count" name="{{$type}}-dish-count">
                <div class="input-group-append">
                    <select id="{{$type}}-dish-count-type" name="{{$type}}-dish-count-type" class="js-example-basic-single w-100">
                        <option value="kcal">kcal</option>
                        <option value="gram">gram</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <a class="add" href="#">
                <button type="button" class="btn btn-sm btn-success">
                    Dodaj
                </button>
            </a>
        </div>
        <div class="col-md-12 mt-3">
            <table id="dish-table" class="table display">
                @include('pages.partials.diets.meal.meal.dish-table')
            </table>
        </div>
    </div>
</div>
<h5>Dodatkowe informacje</h5>
<div class="data1 mt-3 mb-3">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="pack_desc">Opis pakowania, przygotowania lub link do przepisu</label>
                <textarea class="form-control" name="pack_desc" rows="8"></textarea>
            </div>
        </div>
        <div class="col-md-12">
          <label>Zdjęcie gotowego posiłku</label>
            <div class="form-group">
                <input type="file" id="meal_image" name="meal_image">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="{{$type}}-meal-tags">Tagi</label>
                <select id="{{$type}}-meal-tags" name="{{$type}}-meal-tags" class="js-example-basic-multiple w-100" multiple="">
                    <option value="wiosna">Wiosna</option>
                    <option value="walentynki">Walentynki</option>
                </select>
            </div>
        </div>
    </div>
</div>
