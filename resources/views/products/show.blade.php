@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1>{{$product->name}}</h1>
        <div class="card">
            <div class="card-body">
                <h3>Opis produktu:</h3>

                <p>{{$product->desc}}</p>

                <br>
                <blockquote>
                    {{$product->additional_information}}
                </blockquote>
                <form action="{{route('order.create')}}" method="post">
                    @csrf
                    <input type="hidden" value="{{$product->id}}" name="product_id">
                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                    <button class="btn btn-lg btn-block btn-danger">Zamów</button>
                </form>
            </div>
        </div>
    </div>
@endsection
