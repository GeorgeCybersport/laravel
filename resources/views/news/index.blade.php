@extends('index')
@section('content')
        <h3>Новости</h3>
        <ul class="list-group">
            @foreach($news as $new)
                <li class="list-group-item"><a href="{{route("news.single", $new->id)}}">{{$new->title}}</a></li>
            @endforeach
        </ul>
    <br>
    @admin<a class="btn btn-primary" href="{{route('news.create')}}">Добавить новость</a>@endadmin
@endsection
