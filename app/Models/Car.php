<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['car_tittle', 'description', 'car_type','fuel_type','pick_up_from','included','not_included','total_bagage', 'total_person','total_seat_number','total_view','price_per_day','price_per_week','price_per_month','available_now','home_banner_image', 'tubmbnil_image','status'];
    
    public function CarGallary()
    {
        return $this->hasMany(CarGallary::class);
    }

}