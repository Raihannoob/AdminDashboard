<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BookinStep extends Model
{
use HasFactory,SoftDeletes;
protected $fillable = ['step_name', 'step_detail','status'];
}