@extends('index')
@section('content')
    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item"><a href="{{route("categories.single", $category->id)}}">{{$category->name}}</a></li>
        @endforeach
    </ul>
    <br>
    <a class="btn btn-primary" href="{{route('categories.create')}}">Добавить категорию</a>
@endsection
