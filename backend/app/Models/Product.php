<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['sub_category_id', 'plu', 'name',  'description', 'on_stock', 'price', 'size', 'avatar'];

    protected $casts = ['on _stock' => 'boolean'];


    public function subCategory(): BelongsTo {
        return $this->belongsTo(SubCategory::class);
    }

    public function orders(): BelongsToMany {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
}
