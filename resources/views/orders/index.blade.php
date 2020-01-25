@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1>Moje zamówienia</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nazwa Produktu</td>
                        <td>Data zamówienia</td>
                        <td>Status</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->product->name}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->status}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
