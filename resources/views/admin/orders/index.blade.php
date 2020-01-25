@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="mt-5">Zamówienia</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nazwa klienta</td>
                        <td>Produkt</td>
                        <td>Cena</td>
                        <td>Informacje dodatkowe</td>
                        <td>Adres</td>
                        <td>Status</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="content">
                                    <img class="user-avatar" src="{{$order->user->gravatar}}" alt="">
                                </div>
                                <div class="content">
                                    {{$order->user->name}}
                                    <br>
                                    <span class="badge badge-primary">{{$order->user->email}}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{$order->product->name}}
                        </td>
                        <td>
                            {{$order->product->price}} PLN
                        </td>
                        <td>{{$order->additional_information ?? '- Brak dodatkowych informacji'}}</td>
                        <td></td>
                        <td>
                            <button class="btn btn-{{$order->status_class}} disabled">{{$order->order_status->name}}</button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
