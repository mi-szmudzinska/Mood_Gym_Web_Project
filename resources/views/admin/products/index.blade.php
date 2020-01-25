@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="card-title mt-5">Produkty</h1>
        <a href="{{route('admin.products.edit', 0)}}" class="btn btn-success">Dodaj nowy produkt</a>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Nazwa</th>
                        <th>Cena</th>
                        <th>Opis</th>
                        <th>Opcje</th>
                    </tr>
                    </thead>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td><img src="" alt="" class="img-thumbnail">{{$product->name}}</td>
                            <td><span class="badge badge-warning">{{$product->price}}zł</span></td>
                            <td>{{substr($product->desc , 0, 35)}}...</td>
                            <td>
                                <a href="{{route('admin.products.edit' , $product->id)}}" class="btn btn-primary">Edytuj</a>
                                <button class="btn btn-danger">Usuń</button>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{$products->links()}}
            </div>
        </div>
    </div>
@endsection
