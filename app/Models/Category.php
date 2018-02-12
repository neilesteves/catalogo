<?php

namespace Catalogo\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    
    protected $fillable = [
        'name', 'description',
    ];

    public function products()
    {
        return $this->hasMany('Catalogo\Models\Product','category_id');
    }

}
