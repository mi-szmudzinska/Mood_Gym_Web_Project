@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="mt-5">Zamówienia</h1>
        <div class="card">
            <div class="card-body">
                {{$orders}}
            </div>
        </div>
    </div>
@endsection
