@extends('index')
@section('content')
    @foreach($news as $key=>$item)
        <h3><a href="{{route("categories.single", $key)}}">{{$key}}</a></h3>
        <ul class="list-group">
            @foreach($item as $newsKey=>$singleItem)
                <li class="list-group-item"><a href="{{route("news.single", $newsKey)}}">{{$singleItem}}</a></li>
            @endforeach
        </ul>
    @endforeach
@endsection
