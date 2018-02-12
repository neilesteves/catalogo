@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <h2>LISTA</h2>
                <h4>Categoria: {{$category->name}}</h4>
                <h5>Id: {{$category->id}}</h5>
                <h5>Id: {{$category->description}}</h5>

                <br>
                <table class="table table-striped">
                    <thead>
                        <th>Categoria</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                    </thead>

                    <tbody>
                        @foreach ($list as $key => $product)
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
