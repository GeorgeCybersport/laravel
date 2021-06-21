@extends('index')
@section('content')
    <h1>{{$news->title}}</h1>
    <br>
    <p>{{$news->content}}</p>
    @admin<br>
    <br><a class="btn btn-primary" href="{{route('news.edit', $news->id)}}">Редактировать новость</a><br><br>
    <form method="POST" action="{{route('news.delete', $news->id)}}">
        @csrf @method("delete")
        <button class="btn btn-danger">Удалить новость</button>
    </form>@endadmin
@endsection
