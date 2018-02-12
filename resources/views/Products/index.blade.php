@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <h2>PRODUCTOS</h2>
            <div class="col-md-3">
                <h3>Filtros</h3>
                <br>
                <form class="" action="{{ route('productos.index') }}" method="get">
                    <div class="">
                        <label for="">Categoría</label>

                        <select class="" name="category" >
                            <option value="" disabled selected hidden>Elige...</option>
                            @foreach ($categories as $key => $category)
                                <option value="{{$category->id}}" >{{$category->name}}</option>
                            @endforeach
                        </select>

                        {{-- {{ Form::select('categories', [
                            'young' => 'Under 18',
                            'adult' => '19 to 30',
                            'adult2' => 'Over 30']
                            ) }} --}}
                    </div>
                    <div class="">
                        <label for="">Marca</label>
                        <select class="" name="brand" >
                            <option value="" disabled selected hidden>Elige...</option>
                            @foreach ($brands as $key => $brand)
                                <option value="{{$brand->id}}" >{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" name="button">Filtrar</button>
                </form>
            </div>
            <div class="col-md-9">
                {{-- <h4>Categoria: {{$category->name}}</h4>
                <h5>Id: {{$category->id}}</h5>
                <h5>Id: {{$category->description}}</h5> --}}

                <br>
                <table class="table table-striped">
                    <thead>
                        <th>Producto</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                    </thead>

                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>


@endsection
