<?php
namespace Catalogo\Http\Entities;

use Catalogo\Models\Product;


class ProductEntity {

	static function index($request, User $user = null)
	{

        $products = Product::all();
        return $products;


		if($request->has('state') )
		$assignments = $assignments->evaluationState($request->state);

		if( $request->has('offset') )
		$assignments = $assignments->skip($request['offset']);

		if( $request->has('limit') )
		$assignments = $assignments->take($request['limit']);

		return $assignments->orderBy('created', 'desc')->get();
	}


}
