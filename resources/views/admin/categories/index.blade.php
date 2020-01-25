@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="">Kategorie</h1>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nazwa</th>
                                <th>Liczba produktów</th>
                                <th>Opcje</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{count($category->products)}}</td>
                                <td>
                                    <button data-category="{{$category}}" class="btn btn-primary categoryEdit">Edytuj</button>
                                    <button class="btn btn-danger">Usuń</button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h1>Dodawanie kategorii</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('admin.categories.update')}}" method="post">
                            @csrf

                            <input type="hidden" name="id" id="catId">

                            <div class="form-group">
                                <label for="name">Nazwa</label>
                                <input type="text" class="form-control" name="name" id="catName">
                            </div>

                            <button class="btn-success btn">Zapisz</button>
                            <button type="reset" class="btn">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script>
        $('.categoryEdit').on('click', function(e){
            let category = $(this).data('category');

            $('#catId').val(category.id);
            $('#catName').val(category.name);
        });
    </script>
@endsection
