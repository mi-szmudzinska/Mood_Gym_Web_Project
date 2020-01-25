@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1>Produkty</h1>

        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active">Wszystkie kategorie</button>
                    @foreach($categories as $category)
                        <button type="button" class="list-group-item list-group-item-action">{{$category->name}}</button>
                    @endforeach
                </div>

            </div>

            <div class="col-md-8">
                @foreach($products as $product)
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="img-fluid" src="{{asset('img/dieta-weganska-zdrowy-jadlospis-i-przepisy-na-5-dni-2428606.jpg')}}" alt="{{$product->name}}">
                            </div>
                            <div class="col-md-8">
                                <h3>{{$product->name}}</h3>
                                <p>{{$product->desc}}</p>

                                <hr>
                                <div class="d-flex justify-content-between">
                                    <a href="{{route('products.view' , $product->id)}}" class="btn-warning btn max-44"><i class="fa fa-shopping-cart mr-2"></i>Zamów produkt</a>
                                    <h1><label class="badge">{{$product->price}}zł</label></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
