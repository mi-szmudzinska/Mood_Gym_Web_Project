@extends('layouts.app')

@section('content')
<div class="container">
    <div class="zero-data">
        <div class="logo">
            <img src="{{asset('img/logo2.png')}}" alt="Logo">
        </div>
        <div class="icon">
            <i class="fa fa-check"></i>
        </div>

        <h1 class="text-center text-faded">Wszystkie płatności są uregulowane</h1>

        <div class="btn-container mt-4">
            <a class="btn btn-primary btn-lg" href="#"><i class="fa fa-arrow-right"></i> <span class="btn-text">Opłać kolejny miesiąc</span></a>
        </div>
    </div>
</div>
@endsection
