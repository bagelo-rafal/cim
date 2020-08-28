<h5>Informacje podstawowe</h5>
<div class="row mt-3">
    <div class="col-md-4">
        <div class="form-group">
            <label for="diet_type">Typ diety</label>
            <select name="diet_type" class="js-example-basic-single w-100">
                <option value="">Standard</option>
                <option value="">Standard Premium</option>
                <option value="">Sport</option>
                <option value="">Wege</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="diet_variant">Wariant kaloryczny</label>
            <select name="diet_variant" class="js-example-basic-single w-100">
                <option value="">1200 kcal</option>
                <option value="">1500 kcal</option>
                <option value="">1800 kcal</option>
                <option value="">2000 kcal</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="price" class="control-label">Cena bazowa za 1 dzień</label>
            <input id="price" type="number" class="form-control" name="price">
        </div>
    </div>
</div>
<h5>Rozłożenie kalorii w ciągu dnia</h5>
<div class="row mt-3">
    <div class="col-md-3-5">
        <label for="1_meal">I Śniadanie</label>
        <div class="input-group">
            <input id="1_meal" name="1_meal" type="number" class="form-control">
            <div class="input-group-append">
                <span class="input-group-text">%</span>
            </div>
        </div>
    </div>
    <div class="col-md-3-5">
        <label for="2_meal">II Śniadanie</label>
        <div class="input-group">
            <input id="2_meal" name="2_meal" type="number" class="form-control">
            <div class="input-group-append">
                <span class="input-group-text">%</span>
            </div>
        </div>
    </div>
    <div class="col-md-3-5">
        <label for="3_meal">Obiad</label>
        <div class="input-group">
            <input id="3_meal" name="3_meal" type="number" class="form-control">
            <div class="input-group-append">
                <span class="input-group-text">%</span>
            </div>
        </div>
    </div>
    <div class="col-md-3-5">
        <label for="4_meal">Podwieczorek</label>
        <div class="input-group">
            <input id="4_meal" name="4_meal" type="number" class="form-control">
            <div class="input-group-append">
                <span class="input-group-text">%</span>
            </div>
        </div>
    </div>
    <div class="col-md-3-5">
        <label for="5_meal">Kolacja</label>
        <div class="input-group">
            <input id="5_meal" name="5_meal" type="number" class="form-control">
            <div class="input-group-append">
                <span class="input-group-text">%</span>
            </div>
        </div>
    </div>
</div>
