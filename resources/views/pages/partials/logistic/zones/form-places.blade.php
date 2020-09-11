<div class="row">
    <div class="col-md-12">
        @if ($type == "edit")
        <div class="alert alert-fill-secondary mt-2" role="alert">
            Uwaga! Po wgraniu nowego pliku CSV, obecna lista miejscowości zostanie usunięta i zastąpiona nowymi danymi. Plik CSV musi zawierać odpowiednią strukturę - zobacz wzór
        </div>
        @endif
        <div class="input-group">
            <label style="width: 100%;" for="places_file">Plik CSV z miejscowościami</label>
            <input style="margin-bottom: 26px;" type="file" id="places_file" name="places_file" accept=".csv"> 
        </div>
    </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary mr-2">Aktualizuj</button>
    </div>
</div>