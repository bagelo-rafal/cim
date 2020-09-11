<div class="row">
    @if ($type == "edit")
    <div class="alert alert-fill-secondary mt-2" role="alert">
        Wszystkie zmiany w strefie dostaw będą obowiązywały wyłącznie nowe zamówienia oraz przedłużenia. Aktywne dostawy w momencie aktualizacji strefy, zostaną zakończone zgodnie z harmonogramem
    </div>
    @endif
    <div class="col-sm-6">
        <div class="form-group">
            <label for="zone_name">Nazwa strefy</label>
            <input type="text" class="form-control" name="zone_name" id="zone_name">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="zone_delivery_price">Koszt dostawy</label>
            <input type="number" class="form-control" name="zone_delivery_price" id="zone_delivery_price">
        </div>
    </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary mr-2">Zapisz</button>
    </div>
</div>