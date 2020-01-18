@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @if (session('success'))
                    <div class="alert alert-success">
                        {!! session('success') !!}
                    </div>
                @endif
                <h1>@if($user) Edycja użytkownika {{$user->name}} @else Dodawanie nowego użytkownika @endif</h1>
                <div class="card">
                    <div class="card-body">
                        @if($user)
                            <form method="POST" name="EditUser" action="{{route('classes.update')}}">
                        @else
                            <form method="POST" name="EditUser" action="{{route('classes.store')}}">
                        @endif
                            @csrf
                            <input name="id" type="hidden" value="{{$user->id ?? ''}}">
                            <div class="form-group">
                                <label for="name">Imię</label>
                                <input name="name" value="{{$user->name ?? ''}}" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="lastName">Nazwisko</label>
                                <input name="lastName" value="{{$user->lastName ?? ''}}" type="text" class="form-control" id="lastName" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="lastName">Hasło</label>
                                <input name="password" value="{{$user->password ?? ''}}" type="text" class="form-control" id="password" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" value="{{$user->email ?? ''}}" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="phone">Telefon</label>
                                <input name="phone" value="{{$user->phone ?? ''}}" type="text" class="form-control" id="phone" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input name="address" value="{{$user->address ?? ''}}" type="text" class="form-control" id="address" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="pesel">Pesel</label>
                                <input name="pesel" value="{{$user->pesel ?? ''}}" type="text" class="form-control" id="pesel" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select name="sex" class="form-control" id="exampleFormControlSelect1">
                                    <option @if(isset($user) && $user->sex == 'f') selected="selected" @endif value="f">Kobieta</option>
                                    <option @if(isset($user) && $user->sex == 'm') selected="selected" @endif value="m">Mężczyzna</option>
                                </select>
                            </div>
                            <a class="btn" href="">Wstecz</a>
                            <button type="submit" class="btn btn-primary">Zapisz</button>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Informacje dodatkowe</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
