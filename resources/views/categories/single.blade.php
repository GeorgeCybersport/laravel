@extends('index')
@section('content')
    <h1>{{$category->name}}</h1>
    <ul class="list-group">
    @foreach($news as $new)
            <li class="list-group-item"><a href="{{route("news.single", $new->id)}}">{{$new->title}}</a></li>
    @endforeach
    </ul>
@endsection
