<?php

namespace Catalogo\Http\Controllers;

use Illuminate\Http\Request;
use Catalogo\Http\Entities\ProductEntity;
use Catalogo\Http\Entities\CategoryEntity;
use Catalogo\Http\Entities\BrandEntity;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return response()->json($request);
        $products = ProductEntity::index($request);
        $categories = CategoryEntity::index();
        $brands = BrandEntity::index();
        return view('products.index')->with(['products' => $products, 'categories' => $categories, 'brands' => $brands]);
    }

    static function applyFilter($data,$request)
	{
		if ($request->has('category'))  // tematico
    		$data->where('id_subject',$request->id_subject);

		if ($request->has('id_topic'))    // subtema
    		$data->where('id_topic',$request->id_topic);

		if ($request->has('id_grade'))    // grado
    		$data->where('id_grade',$request->id_grade);

		if ($request->has('id_country'))  // país
    		$data->where('id_country',$request->id_country);

		if ($request->has('id_region'))   // región
    		$data->where('id_region',$request->id_region);

        if ($request->has('name')) {      // name and description
            $name = $request->name;
            $description = $request->description;
            $data->where(function ($query) use ($name, $description) {
                $query->where('name', 'LIKE', "%$name%");
                $query->orWhere('description', 'LIKE', "%$description%");
            });
        }

		if ($request->has('evaluation_sent')) {
			$order = $request->evaluation_sent == self::ORDER_EVALUATION_DESC ? 'desc' : 'asc';
			$data->orderBy('evaluation_sent', $order);
		}

		if ($request->has('published')) {
			$order = $request->published == self::ORDER_PUBLISHED_DESC ? 'desc' : 'asc';
			$data->orderBy('published', $order);
		}

		if ($request->has('avg_value')) {
			$order = $request->avg_value == self::AVG_VALUE_DESC ? 'desc' : 'asc';
			$data->orderBy('avg_value', $order);
		}

		return $data;
	}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
