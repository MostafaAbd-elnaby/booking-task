<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    
    public $fillable = [
        'departure_city',
        'arrival_city',
        'travel_date',
        'flight_number',
        'price',
        'status',
    ];

    protected $casts = [
        'travel_date' => 'date',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function scopeIsAvailable()
    {
        return $this->where('status', '1');
    }

    public function isOverd(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->travel_date < now() ? true : false,
        );
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            do {$model->flight_number = random_int(10000000, 99999999);} // generate a random number 8-digit
            while (Flight::where('flight_number', $model->flight_number)->exists()) ;
        });
    }

    public static function rules($id = 0)
    {
        return [
            'flight_number' => 'unique:flights,flight_number,' . $id,
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'travel_date' => 'required',
            'price' => 'required',
        ];
    }

}
