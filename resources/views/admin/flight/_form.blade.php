<div class="row my-4">
    <div class="col-md-3">
        <div class="form-group">
            <x-form._input label="Travel Date" name="travel_date" type="date" :value="$flight->travel_date->format('Y-m-d') ?? ''" />
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <x-form._input label="Departure City" name="departure_city" type="text" :value="$flight->departure_city ?? ''" />
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <x-form._input label="Arrival City" name="arrival_city" type="text" :value="$flight->arrival_city ?? ''" />
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <x-form._input label="Price" name="price" type="number" :value="$flight->price ?? ''" />
        </div>
    </div>
</div>
<div class="row mb-4">
<div class="col-md-6">
    <div class="form-group">
        <input type="checkbox" name="status" id="status" value="1" @checked($flight->status ?? '') />
        <label for="status">Status</label>
    </div>
</div>
<div class="col-md-6">
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('flights.index') }}" class="btn btn-secondary">Back</a>
</div>
</div>
