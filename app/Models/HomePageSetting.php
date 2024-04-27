<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomePageSetting extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['hero_title', 'step_description', 'home_banner_image','step_title','status'];
}