<?php
namespace Catalogo\Http\Entities;

use Catalogo\Models\Brand;

class BrandEntity {

    static function index($request)
    {
        $brands = Brand::all();
        return $brands;
    }

}
