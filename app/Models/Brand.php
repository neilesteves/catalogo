<?php

namespace Catalogo\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';

    protected $fillable = [
        'name', 'description',
    ];

    public function products()
    {
        return $this->hasMany('Catalogo\Models\Product','brand_id');
    }

}
