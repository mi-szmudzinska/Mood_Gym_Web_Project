@extends('layouts.app')
@section('content')
    <div class="container">
        @if(isset($product->id))
            <h1 class="mt-5">Edycja produktu: {{$product->name ?? ''}}</h1>
        @else
            <h1 class="mt-5">Dodawanie nowego produktu</h1>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.products.update' , $product->id ?? 0)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nazwa produktu</label>
                        <input required="required" class="form-control" type="text" name="name" id="name" value="{{$product->name ?? ''}}">
                    </div>
                    <div class="form-group">
                        <label for="price">Cena</label>
                        <input required="required" class="form-control" type="text" name="price" id="price" value="{{$product->price ?? ''}}">
                    </div>
                    <div class="form-group">
                        <label for="cat">Kategoria</label>
                        <select class="form-control" name="category_id" id="cat">
                            @foreach($categories as $k => $category)
                                <option @if(isset($product) && $category->id === $product->category_id) selected="selected" @endif value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Opis</label>
                        <textarea name="desc" id="desc" rows="5" class="form-control">{{$product->desc ?? ''}}</textarea>
                    </div>
                    <button class="btn btn-success">Zapisz</button>
                    <a href="{{route('admin.products.index')}}" class="btn">Wstecz</a>
                </form>
            </div>
        </div>
    </div>
@endsection
