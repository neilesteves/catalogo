<?php

namespace Catalogo\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'name', 'description', 'category_id', 'brand_id',
    ];

    public function category()
    {
        return $this->belongsTo('Catalogo\Models\Category','category_id');
    }

    public function brand()
    {
        return $this->belongsTo('Catalogo\Models\Brand','brand_id');
    }
}
