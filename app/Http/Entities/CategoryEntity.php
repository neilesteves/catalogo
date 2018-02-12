<?php
namespace Catalogo\Http\Entities;

use Catalogo\Models\Category;

class CategoryEntity {

    static function index($request)
    {
        $categories = Category::all();
        return $categories;
    }

}
