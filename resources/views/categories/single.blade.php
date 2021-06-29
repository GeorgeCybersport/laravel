@extends('index')
@section('content')
    <h1>{{$category->name}}</h1>
    <ul class="list-group">
    @foreach($news as $new)
            <li class="list-group-item"><a href="{{route("news.single", $new->id)}}">{{$new->title}}</a></li>
    @endforeach
    </ul>
    @admin<br>
    <a class="btn btn-primary" href="{{route('categories.edit', $category->id)}}">Редактировать категорию</a><br><br>
    <form method="POST" action="{{route('categories.delete', $category->id)}}">
        @csrf @method("delete")
        <button class="btn btn-danger">Удалить категорию</button>
    </form>@endadmin
@endsection
