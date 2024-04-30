<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarGallary extends Model
{
    use HasFactory;
    protected $fillable = ['car_id', 'path','status'];
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}