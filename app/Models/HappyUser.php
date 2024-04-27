<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HappyUser extends Model {
    use HasFactory, SoftDeletes;

    protected $fillable = ['author_name', 'image', 'author_type', 'description', 'status'];
}