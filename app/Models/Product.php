<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'type',
        'title',
        'image',
        'original_price',
        'discount_price',
        'description',
        'status',
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(ProductCategory::class);
    }
}
