<h5>Informacje podstawowe</h5>
<div class="data1 mt-3 mb-3">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="dish_name">Nazwa potrawy</label>
                <input type="text" class="form-control" id="{{$type}}-dish_name" name="dish_name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="{{$type}}-dish-category">Kategoria potrawy</label>
                <select id="{{$type}}-dish-category" name="{{$type}}-dish-category" class="js-example-basic-multiple w-100" multiple="">
                    <option value="zupy">Zupy</option>
                    <option value="makarony">Makarony</option>
                    <option value="kurczak">Z kurczaka</option>
                </select>
            </div>
        </div>
    </div>
</div>
<h5>Składniki</h5>
<span>Określ z jakich składników ma składać się dodawana potrawa</span>
<div class="data1 mt-3 mb-3">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="{{$type}}-dish">Wybierz składnik</label>
                <select id="{{$type}}-dish" name="{{$type}}-dish" class="js-example-basic-single w-100">
                    <option value=""></option>
                    <option value="sol">Sól</option>
                    <option value="cukier">Cukier</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label for="{{$type}}-dish-count">Podaj ilość</label>
            <div class="input-group">
                <input type="number" step="0.1" class="form-control" id="{{$type}}-dish-count" name="{{$type}}-dish-count">
                <div class="input-group-append">
                  {{-- Tutaj do select2 jednostka kcal i gram zostają zawsze na stałe, ale jako dodatkową jednostkę ma zaciągnąć jednostkę
                    składnika podaną podczas jego dodawania np. łyżeczka, sztuka itd. --}}
                    <select id="{{$type}}-dish-count-type" name="{{$type}}-dish-count-type" class="js-example-basic-single w-100">
                        <option value="kcal">kcal</option>
                        <option value="gram">gram</option>
                        <option value="sztuk">sztuk</option>
                        <option value="lyzka">łyżek</option>
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
          <table id="dish-ingr-table" class="table display">
                @include('pages.partials.diets.dish.dish-ingr-table')
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
          <label>Zdjęcie gotowej potrawy</label>
            <div class="form-group">
                <input type="file" id="dish_image" name="dish_image">
            </div>
        </div>
    </div>
</div>
