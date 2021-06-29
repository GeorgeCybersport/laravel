@extends('index')
@section('content')
    <h3>Категории</h3>
    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item"><a href="{{route("categories.single", $category->id)}}">{{$category->name}}</a></li>
        @endforeach
    </ul>
    <br>
    @admin<a class="btn btn-primary" href="{{route('categories.create')}}">Добавить категорию</a>@endadmin
@endsection
