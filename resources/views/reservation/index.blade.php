@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-faded pt-5">Rezerwacje</h1>

        <div class="days-container">
            @foreach($days as $day)
                <a href="#" class="btn">
                    <span>{{$day->getName()}}</span>
                </a>
            @endforeach
        </div>
        <table class="table">
            <tr>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
            </tr><tr>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
            </tr>
            <tr>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
            </tr><tr>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
                <td>sdfsdf</td>
            </tr>
        </table>
    </div>
@endsection
