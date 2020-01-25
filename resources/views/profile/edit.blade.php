@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h1 class="text-faded">Dane personalne</h1>
                @if (session('success'))
                    <div class="alert alert-success">
                        {!! session('success') !!}
                    </div>
                @endif
                <form method="POST" action="{{route('user.edit')}}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Imię</label>
                                    <input required="required" value="{{$user->name}}" name="name" type="text" class="form-control form-control-lg" id="exampleInputEmail1">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Nazwisko</label>
                                    <input required="required" value="{{$user->lastName}}" name="lastName" type="text" class="form-control form-control-lg" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Adres</label>
                                        <input value="{{$user->address}}" type="text" name="address" id="address" class="form-control form-control-lg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Adres email</label>
                                        <input disabled="disabled" value="{{$user->email}}" type="email" name="email" id="address" class="form-control form-control-lg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input required="required" value="{{$user->phone}}" type="text" name="phone" id="phone" class="form-control form-control-lg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pesel">Pesel</label>
                                        <input value="{{$user->pesel}}" type="text" name="pesel" id="phone" class="form-control form-control-lg">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pesel">haslo</label>
                                        <input value="{{$user->pesel}}" type="text" name="haslo123" id="phone" class="form-control form-control-lg">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success"><i class="fa fa-save mr-2"></i> Zapisz</button>
                        </form>
            </div>
        </div>
    </div>
@endsection
